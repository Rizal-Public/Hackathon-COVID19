<?php

namespace App\Controllers;

require('simple_html_dom.php');

class Covid extends BaseController
{
	public function landing()
	{
		$this->response->removeHeader('Cache-Control');
		header('Last-Modified: '. gmdate('D, d M Y H:i:s') . ' GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		header('Pragma: no-cache');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

    // $api = $this->get_url('https://api.kawalcorona.com/indonesia');
		// $data = [
		// 	'api' 		=> json_decode($api[0])[0]
		// ];
		// var_dump($api[0]); 
		//$query = $db->query("SELECT * FROM news ORDER BY created_at ASC LIMIT 3");
		//$results = $query->getResult();

		$data = [
			'api' => json_decode('{ "positif": "1,2,3", "dirawat": "1,2,3", "sembuh": "1,2,3", "meninggal": "1,2,3" }')
		];

		return view('covid/landing', $data);
	}

	function get_url( $url,  $javascript_loop = 0, $timeout = 5 )
	{
	    $url = str_replace( "&amp;", "&", urldecode(trim($url)) );

	    $cookie = tempnam ("/tmp", "CURLCOOKIE");
	    $ch = curl_init();
	    curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
	    curl_setopt( $ch, CURLOPT_URL, $url );
	    curl_setopt( $ch, CURLOPT_COOKIEJAR, $cookie );
	    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	    curl_setopt( $ch, CURLOPT_ENCODING, "" );
	    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	    curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
	    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );    # required for https urls
	    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
	    curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );
	    curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
	    $content = curl_exec( $ch );
	    $response = curl_getinfo( $ch );
	    curl_close ( $ch );

	    if ($response['http_code'] == 301 || $response['http_code'] == 302)
	    {
	        ini_set("user_agent", "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1");

	        if ( $headers = get_headers($response['url']) )
	        {
	            foreach( $headers as $value )
	            {
	                if ( substr( strtolower($value), 0, 9 ) == "location:" )
	                    return get_url( trim( substr( $value, 9, strlen($value) ) ) );
	            }
	        }
	    }

	    if (    ( preg_match("/>[[:space:]]+window\.location\.replace\('(.*)'\)/i", $content, $value) || preg_match("/>[[:space:]]+window\.location\=\"(.*)\"/i", $content, $value) ) &&
	            $javascript_loop < 5
	    )
	    {
	        return get_url( $value[1], $javascript_loop+1 );
	    }
	    else
	    {
	        return array( $content, $response );
	    }
	}
}

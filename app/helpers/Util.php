<?php

namespace App\helpers;

	
 class Util {

	public static function getXcaretData($url, $params=array())
    {
		
			//$post_data =  http_build_query($params);
			$post_data =  json_encode($params);
			
			$s = curl_init();
			
			curl_setopt($s, CURLOPT_URL, $url );
			curl_setopt($s, CURLOPT_TIMEOUT, 30);
			//curl_setopt($s, CURLOPT_POST, true);
			//curl_setopt($s, CURLOPT_POSTFIELDS, $post_data);
						
			curl_setopt($s, CURLOPT_HEADER, 0);  
			curl_setopt($s, CURLOPT_RETURNTRANSFER, true);  
			curl_setopt($s, CURLOPT_HTTPHEADER, array("X-Requested-With: XMLHttpRequest", "Content-Type: application/json; charset=utf-8"));
			
			$output = curl_exec($s);
			
			$httpcode = curl_getinfo($s, CURLINFO_HTTP_CODE);


			if(curl_errno($s))
			{
				$output = '{"error":"500", "msg":"' . curl_error($s).'", "url":"'.$url.'"}';
			}
			
			
	
		curl_close($s); 	
		
		
		
		try{
			
			//$output=json_decode($output);
			
				
				return json_decode($output)[0];

			
		}catch(Exception $e){
			$output = '{"error":"500", "msg":'.$output.', "url": "'.$url.'" }';
			$output = json_decode($output);
		}
		
		
		
		return $output;
       
       
	}
	
}
	
	
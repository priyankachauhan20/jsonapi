<?php 
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, 'https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode=122001&date=9-6-2021%27');
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['content-type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	
	$result = curl_exec($ch);
        if (curl_errno($ch)) { 
         	echo 'Error:' . curl_error($ch); 
        }else {
		// header('content-type: application/json');
		$res = json_decode($result, true);
		usort($res, function($a, $b) { //Sort the array using a user   defined function
                return $a->['min_age_limit'] - $b->['min_age_limit']; //Compare the scores
                 });   
		
		
                echo '<pre>';
		
                print_r($res);
		echo '</pre>';
                
		
		}
	curl_close($curl);
 ?>


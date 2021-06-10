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
		$response = json_decode($result, true);
                foreach ($response['sessions']as $key => $val) {
    			$newList[$key] = [
        			'location'   =>  $val['name'],
                                
        			'district' =>    $val['district_name'],
        			
    				];
			}
		echo "<pre>";
		print_r($newList);
		echo "</pre>";
		
		
                
		
		}
	curl_close($curl);
 ?>

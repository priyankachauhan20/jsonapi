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
    		$var ="<ul>";
		foreach($res['sessions'] as $sess){
			
			$var.="<h3> name:" .$sess['name']."</h3>";
			
			$var.="<li>address:" .$sess['address']."</li>";
			$var.="<li>fee:" .$sess['fee']."</li>";
			$var.="<li> fee_type:" .$sess['fee_type']."</li>";
                    }
		$var .="/ul";
                echo '<pre>';
		
                echo $var;
		echo '</pre>';
                
		
		}
	curl_close($curl);
 ?>


<?php
function sessionParser($data) {
	$fco_max = 0;	
		
	foreach ($data->parameter as $param) {
		if ($param->MODULENAME == "dostawca") {
			if ($param->NAME == "T_O") {
				$_SESSION['To'] = "".round(floatval($param->VALUE),2);
				
				for ($i=0; $i<3; $i++) {
					$_SESSION['To_tab'][$i] = "To".($i+1).": ".round(floatval($param->VALUE),2);
				}
			}

			if ($param->NAME == "T_zm")
				$_SESSION['Tzm'] = "".round(floatval($param->VALUE),2);
			
			if ($param->NAME == "F_zm")
				$_SESSION['Fzm'] = "".round(floatval($param->VALUE),2);
				
		}
		if ($param->MODULENAME == "wymiennik") {
			if ($param->NAME == "T_zco") {
				$_SESSION['Tzco'] = "".round(floatval($param->VALUE),2);
				$tz = "".$param->VALUE;
			}
		
			if ($param->NAME == "T_pco") 
				$_SESSION['Tpco'] = "".round(floatval($param->VALUE),2);

			if ($param->NAME == "T_pm") 
				$_SESSION['Tpm'] = "".round(floatval($param->VALUE),2);
				
		}
		if ($param->MODULENAME == "regulator") {
			if ($param->NAME == "U_m") {
			
				$_SESSION['Um'] =  "".round(floatval($param->VALUE),2);
				//if ($param->VALUE == 1) {
				//	$_SESSION['Um'] = "1(otw.)";
				//} else {
				//	$_SESSION['Um'] = "0(zamk.)";
				//}
			}
		}
		
		$_SESSION['N'] = 3;
		
		for ($i=1; $i<=3; $i++) {
			if ($param->MODULENAME == ("budynek".$i)) {
				if ($param->NAME == ("U_b_".$i)) {
					if ($param->VALUE == 1) 
						$_SESSION['Ub_tab'][$i-1] = "Ub".($i).":1(otw.)";
					else 
						$_SESSION['Ub_tab'][$i-1] = "Ub".($i).":0(zamk.)";
					
					//$_SESSION['Ub_tab'][$i-1] = "Ub".($i).":".$param->VALUE;
					
				}
				if ($param->NAME == ("T_r_".$i)) 
					$_SESSION['Tr_tab'][$i-1] = "Tr".($i).":".round(floatval($param->VALUE),2);

				if ($param->NAME == ("T_h_".$i))
					$_SESSION['Th_tab'][$i-1] = "Th".($i).":".round(floatval($param->VALUE),2);
				
				if ($param->NAME == ("T_pcob_".$i))
					$_SESSION['Tpcob_tab'][$i-1] = "Tpcob".($i).":".round(floatval($param->VALUE),2);

				if ($param->NAME == ("F_cob_".$i)) {
					$_SESSION['Fcob_tab'][$i-1] = "Fcob".($i).":".round(floatval($param->VALUE),2);
					$fco_max += floatval($param->VALUE);
					$fco_max = round($fco_max, 2);
				}
				
				$_SESSION['Tzco_tab'][$i-1] = "Tzco".($i).":".$tz;
			}
		}
	}
		
	$_SESSION['Fcomax'] = "Fcomax:".$fco_max;
}
?>
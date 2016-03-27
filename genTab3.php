<?php
	$tab_szer = 550;	//px
	$n_bud = $_SESSION['N'];
	$szer = 100;

	echo "\t\t\t<table id=\"tab3\" style=\"width: ".$tab_szer."px\">\n";
	echo "\t\t\t\t<thead>\n";
	echo "\t\t\t\t<tr>\n";
	echo "\t\t\t\t\t<th colspan=\"".($n_bud+2)."\">Budynki</th>\n";
	echo "\t\t\t\t</tr>\n";
	echo "\t\t\t\t</thead>\n";
	echo "\t\t\t\t<tfoot>\n";
	echo "\t\t\t\t\t<tr>\n";
	echo "\t\t\t\t\t\t<th colspan=\"".($n_bud+2)."\">Parametry odczytano: ".date('H:i:s')."</th>\n";
	echo "\t\t\t\t\t</tr>\n";
	echo "\t\t\t\t</tfoot>\n";
	echo "\t\t\t\t<tbody>";
				
	echo "\n\t\t\t\t<tr class=\"tab3_bud\">\n";
				
	for ($i=1; $i<($n_bud+3); $i++) {
		if ($i==1) {
			echo "\t\t\t\t\t<td style=\"width: $szer px\">Nazwa parametru</td>\n";
		} elseif ($i==$n_bud+2) {
			echo "\t\t\t\t\t<td>Jednostka</td>\n";
		} else {
			echo "\t\t\t\t\t<td>Budynek ".($i-1)."</td>\n";
		}
	}
			
	echo "\t\t\t\t</tr>\n";
			
	$arr_nam = array("Temperatura pomieszczeń", "Temperatura wody powrotnej", "Temperatura wody zasilającej", "Przepływ");
	$unit = array("&deg;C", "&deg;C", "&deg;C", "m<sup>3</sup>/h");
				
	$data = array('','','','');
				
	for ($i=0; $i<$n_bud; $i++) {
		$data[0][$i] = ($_SESSION['Tr_tab'][$i]);
		$data[1][$i] = ($_SESSION['Tpcob_tab'][$i]);
		$data[2][$i] = ($_SESSION['Tzco_tab'][$i]);
		$data[3][$i] = ($_SESSION['Fcob_tab'][$i]);				
	}



	for ($i=0; $i<count($arr_nam); $i++) {
	
		if ($i%2 == 0)
			echo "\t\t\t\t<tr class=\"parzysty_tab3\">\n";
		else
			echo "\t\t\t\t<tr class=\"nieparzysty_tab3\">\n";
	
		echo "\t\t\t\t\t<td>".$arr_nam[$i]."</td>\n";
		
		for ($j=0; $j<$n_bud; $j++)
			echo "\t\t\t\t\t<td class=\"val3\">".$data[$i][$j]."</td>\n";
	
		echo "\t\t\t\t\t<td class=\"unit3\">".$unit[$i]."</td>\n";
		
		echo "\t\t\t\t</tr>\n";
	}

	echo "\t\t\t</tbody>\n";
	echo "\t\t</table>\n";

?>
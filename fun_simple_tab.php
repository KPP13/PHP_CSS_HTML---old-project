<?php
function genSimpleTab($par_type, $arr, $unit, $index) {
	$tmp = "";
			
	for ($i=0; $i<count($arr); $i++) {
		if ($i%2 == 0) {
			$tmp = '"nieparzysty_tab'.$index.'"';
		} else {
			$tmp = '"parzysty_tab'.$index.'"';
		}
					
		echo "\t\t\t\t\t<tr class=".$tmp.">\n";
		echo "\t\t\t\t\t\t<td>".$par_type[$i]."</td>\n";
		echo "\t\t\t\t\t\t<td class=\"val".$index."\">".$arr[$i]."</td>\n";
		echo "\t\t\t\t\t\t<td class=\"unit".$index."\">".$unit[$i]."</td>\n";
		echo "\t\t\t\t\t</tr>\n";
	}
}
?>
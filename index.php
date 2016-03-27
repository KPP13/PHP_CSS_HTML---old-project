<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
	<head>
		<?php
		if(!session_id()) session_start();

		include("global.php");
		include("fun_simple_tab.php");
		include("socket.php");
		include("sessionParser.php");
		?>
		<title>Kampus AGH - instalacja CO (symulacja)</title>

		<meta http-equiv="content-type" content="text/xml; charset=utf-8" />
		<meta http-equiv="content-language" content="pl" />
		
		<meta name="description" content="Symulacja instalacji CO na obszarze Kampusu AGH" />
		<meta name="keywords" content="AGH, CO, symulacja" />

		<meta name="author" content="Kamil Poprawa" />
		<meta name="robots" content="all" />
		
		<meta http-equiv="Content-Type" content="image/png" />

		<link rel="stylesheet" type="text/css" href="../style/main.css" />
		<link rel="icon" type="image/png" href="../images/favicon.png" />
		
		<?php
			session_unset();
			//session_destroy();
			session_set_cookie_params(0);
		
			header('refresh: 5');
		?>
		
	</head>
	<body>
	
		<?php
			date_default_timezone_set('Europe/Warsaw');
		?>
		
		<p id="tytul">
			Kampus AGH - instalacja CO (dane z symulacji) <br/>
		</p>
	
<?php

$dane = getData('192.168.3.156', 1234);

sessionParser($dane);

?>	
		<table id="tab_form" style="width: 1220px">
		<tbody>
		<tr><td style="width: 610px">
			<table id="tab1">
				<thead>
					<tr>
						<th colspan="3">Parametry ogólne</th>
					</tr>
				</thead>
			
				<tfoot>
					<tr>
						<th id="jquery_refresh" colspan="3">
						<?php echo 'Parametry odczytano: '.date('H:i:s');?>
					
						</th>
					</tr>
				</tfoot>
			
				<tbody>
					<tr class="naglowek_1">
						<td>Rodzaj parametru</td>
						<td>Wartość</td>
						<td>Jednostka</td>
					</tr>
				
				<?php
					$par_type = array("Temperatura zewnętrzna (To)", "Temperatura wody zasilającej (Tzm)", "Temperatura wody powrotnej (Tpm)", "Przepływ (Fzm)");
					$unit = array("&deg;C", "&deg;C", "&deg;C", "m<sup>3</sup>/h");
					
					$vals_id = array('To', 'Tzm', 'Tpm', 'Fzm');
					$arr = array('','','','');
					
					for ($i=0; $i<count($vals_id); $i++) {
						if (isset($_SESSION[$vals_id[$i]])) {
							$arr[$i] = (string)$_SESSION[$vals_id[$i]];
						} else { 
							$arr[$i] = "?";
						}
					}
					
					// gen tbody
					genSimpleTab($par_type, $arr, $unit, 1);
				
				?>
				
				
				</tbody>
			</table>
			
			<br/>
			<br/>
			
			<table id="tab2">
				<thead>
					<tr>
						<th colspan="3">Regulator</th>
					</tr>
				</thead>
				
				<tfoot>
					<tr>
						<th colspan="3">
						<?php echo 'Parametry odczytano: '.date('H:i:s');?>
						
						</th>
					</tr>
				</tfoot>
				
				<tbody>
				
					<tr class="naglowek_2">
						<td>Rodzaj parametru</td>
						<td>Wartość</td>
						<td>Jednostka</td>
					</tr>
					
				<?php
					$par_type = array("Przepływ (Fcomax)", "Położenie zaworu (Um)", "Temperatura wody wychodzącej (Tzco)", "Temperatura wody powrotnej (Tpco)");
					$unit = array("m<sup>3</sup>/h", "-", "&deg;C", "&deg;C");
					
					$vals_id = array('Fcomax', 'Um', 'Tzco', 'Tpco');
					$arr = array('','','','');
					
					for ($i=0; $i<count($vals_id); $i++) {
						if (isset($_SESSION[$vals_id[$i]])) {
							$arr[$i] = (string)$_SESSION[$vals_id[$i]];
						} else { 
							$arr[$i] = "?";
						}
					}
					
					// gen tbody
					genSimpleTab($par_type, $arr, $unit, 2);
				
				?>
				</tbody>
			</table>
			
			<br/>
			<br/>
			
			<?php
			
				include("genTab3.php");
				
				echo "\n\n\t\t</td>\n\t\t<td>\n";
			
				echo "\t\t\t<img style=\"display: block; margin: 0 auto\" src=\"bud_img.php\" alt=\"Schemat instalacji\"/>\n";

				
				echo "\t\t</td>\n\t</tr>\n\t</tbody>\n\t</table>";
			?>
			

	</body>
</html>
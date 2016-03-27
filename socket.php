<?php
function getData($ip, $port) {
	/*
	if (!($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP))) {
		$err_code = socket_last_error();
		$err_msg = socket_strerror($err_code);
		
		die("Nie mo¿na utworzyæ socketu: [$err_code] $err_msg \n");
	}

	$host_ip = $ip;
	$port = $port;

	if (!socket_connect($sock, $host_ip, $port)) {

		$err_code = socket_last_error();
		$err_msg = socket_strerror($err_code);
		
		die("Nie mo¿na nawi¹zaæ po³¹czenia: [$err_code] $err_msg \n\t</body>\n</html>");
	}

	$msg = "<xmlRoot>
		<query>SELECT MODULENAME, NAME, VALUE FROM parameters WHERE MODULENAME='dostawca' AND TIME = (SELECT MAX(TIME) FROM parameters WHERE MODULENAME='dostawca')</query>
		<query>SELECT MODULENAME, NAME, VALUE FROM parameters WHERE MODULENAME='wymiennik' AND TIME = (SELECT MAX(TIME) FROM parameters WHERE MODULENAME='wymiennik')</query>
		<query>SELECT MODULENAME, NAME, VALUE FROM parameters WHERE MODULENAME='regulator' AND TIME = (SELECT MAX(TIME) FROM parameters WHERE MODULENAME='regulator')</query>
		<query>SELECT MODULENAME, NAME, VALUE FROM parameters WHERE MODULENAME='budynek1' AND TIME = (SELECT MAX(TIME) FROM parameters WHERE MODULENAME='budynek1')</query>
		<query>SELECT MODULENAME, NAME, VALUE FROM parameters WHERE MODULENAME='budynek2' AND TIME = (SELECT MAX(TIME) FROM parameters WHERE MODULENAME='budynek2')</query>
		<query>SELECT MODULENAME, NAME, VALUE FROM parameters WHERE MODULENAME='budynek3' AND TIME = (SELECT MAX(TIME) FROM parameters WHERE MODULENAME='budynek3')</query>
	</xmlRoot>";

	// wysylanie

	if (!socket_send($sock, $msg, strlen($msg), 0)) {

		$err_code = socket_last_error();
		$err_msg = socket_strerror($err_code);
		
		die("Nie mo¿na wys³aæ wiadomoœci: [$err_code] $err_msg \n\t</body>\n</html>");
	}

	socket_shutdown($sock, 1);

	socket_set_option($sock, SOL_SOCKET, SO_RCVTIMEO, array('sec' => 1, 'usec' => 0));

	if (socket_recv($sock, $buf, 10000, MSG_WAITALL) == FALSE) {
		
		$err_code = socket_last_error();
		$err_msg = socket_strerror($err_code);
		
		die("Nie mo¿na odebraæ danych: [$err_code] $err_msg </body></html>");
	}


	socket_close($sock);

	echo "Odebrano:<br/> $buf";
	echo "<br/>";

	$dane = simplexml_load_string($buf);*/

	$dane = simplexml_load_file("test.xml");

	return $dane;
}
?>
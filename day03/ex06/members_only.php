<?php

if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $SERVER["PHP_AUTH_PW"] == "Ilovemylittleponey")
{
	$content = base64_encode(file_get_contents("../img/42.png"));
	echo "<html><body>\nHello Zaz<br />\n";
	echo "<img src='data:image/png;base64,$content'>\n";
	echo "</body></html>\n";
}
else
{
	header("WWW-Authenticate: Basic realm='Member area'");
	header("HTTP/1.0 401 Unauthorized");
	echo "<html><body>That area is accessible for members only</body></html>\n";
}

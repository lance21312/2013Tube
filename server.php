<?php
$GLOBALS['inst'] = "https://inv.nadeko.net/api/v1";
function invidiousGet($url) {
	return json_decode(file_get_contents($GLOBALS['inst'] . $url), true);
}
?>
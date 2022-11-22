<?php

// HTTPS
if(isset($_SERVER['HTTP_CF_VISITOR'])) {
	$data = json_decode($_SERVER['HTTP_CF_VISITOR'], true);
	if(is_array($data) && isset($data['scheme']) && $data['scheme'] == 'https') {
		$_SERVER['HTTPS'] = 'on';
	}
} elseif(isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
	if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
		$_SERVER['HTTPS'] = 'on';
	}
}

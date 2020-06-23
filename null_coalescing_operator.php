<?php

$user = [];

$user['emailVerified'] = 'sample!';
// $user['emailVerified'] = true;

$verified = (bool)$user['emailVerified'] ?? null;

if ($verified === true) {
	echo 'true!';
} else {
	echo 'false!';
}



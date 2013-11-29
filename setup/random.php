<?php
/**
 * This script generates SQL queries with
 * random users and games for chesschat.
 * Don't try to access this script directly via browser or commandline!
 * @see  setup.php
 * 
 * @author  Philipp Miller
 * 
 */

// options
$userN = 250;
$gameN = 250;
$langs = array('en', 'de', '--');

// generate users
$userQuery = 'INSERT INTO cc_user (userName, email, password, language) VALUES';
for ($u=0 ; $u < $userN ; $u++) {
	$name = Util::getRandomString(10);
	$userQuery .= "\n ('" . $name . "', "
	            . "'" . $name . "@"
	                  . Util::getRandomString(5) . "."
	                  . Util::getRandomString(2)
	            . "', '$2y$08$100010001000100010001.LNsjk4vI3U65IdmjIEugZ2MnFxHt1De', "
	            . "'" . $langs[mt_rand(0, count($langs)-1)] ."'),";
}
$userQuery = rtrim($userQuery, ', ');
$queries[] = $userQuery;

// generate games
$gameQuery = 'INSERT INTO cc_game (gameHash, whitePlayerId, blackPlayerId, board, status) VALUES';
for ($g=0 ; $g<$gameN ; $g++) {
	$gameQuery .= "\n ('" . Util::getRandomString(6) . "', "
	            . "'" . mt_rand(1, $userN) . "', "
	            . "'" . mt_rand(1, $userN) . "', "
	            . "'RA1Nb1Bc1Qd1KE1Bf1Ng1RH1Pa2Pb2Pc2Pd2Pe2Pf2Pg2Ph2pa7pb7pc7pd7pe7pf7pg7ph7rA8nb8bc8qd8kE8bf8ng8rH8', "
	            . "'" . mt_rand(0,15) . "'),";
}
$gameQuery = rtrim($gameQuery, ', ');
$queries[] = $gameQuery;
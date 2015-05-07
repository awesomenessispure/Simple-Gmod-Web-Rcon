<?php
include('config.php');

$username = $_POST["user"];
$password = $_POST["pass"];
$rank = $_POST["rank"];
$id = $_POST["id"];
$type = $_POST["type"];
$cmd = $_POST["cmd"];

if ($username == $userconf) {
 if ($password == $passconf) {$valid = 1;}
}

else {
	$valid = 0;
} 



if ($type == "addid"){ 
if ($valid == "1"){ 
	require __DIR__ . '/SourceQuery/SourceQuery.class.php';
	
	// For the sake of this example
	Header( 'Content-Type: text/plain' );
	Header( 'X-Content-Type-Options: nosniff' );
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR', $rconadr );
	define( 'SQ_SERVER_PORT', $serverport );
	define( 'SQ_TIMEOUT',     1 );
	define( 'SQ_ENGINE',      SourceQuery :: SOURCE );
	// Edit this <-
	
	$Query = new SourceQuery( );
	
	try
	{
		$Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
		
		$Query->SetRconPassword( $rconpass );
		
		var_dump( $Query->Rcon( 'ulx adduserid ' . $id . ' ' . $rank ) );
	}
	catch( Exception $e )
	{
		echo $e->getMessage( );
	}
	
	$Query->Disconnect( );
		} 
	} 


elseif ($type == "remove"){ 
if ($valid == "1"){ 
	require __DIR__ . '/SourceQuery/SourceQuery.class.php';
	
	// For the sake of this example
	Header( 'Content-Type: text/plain' );
	Header( 'X-Content-Type-Options: nosniff' );
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR', $rconadr );
	define( 'SQ_SERVER_PORT', $serverport );
	define( 'SQ_TIMEOUT',     1 );
	define( 'SQ_ENGINE',      SourceQuery :: SOURCE );
	// Edit this <-
	
	$Query = new SourceQuery( );
	
	try
	{
		$Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
		
		$Query->SetRconPassword( $rconpass );
		
		var_dump( $Query->Rcon( 'ulx removeuserid ' . $id ) );
	}
	catch( Exception $e )
	{
		echo $e->getMessage( );
	}
	
	$Query->Disconnect( );
		} 
	} 
	
	elseif ($type == "cmd"){ 
if ($valid == "1"){ 
	require __DIR__ . '/SourceQuery/SourceQuery.class.php';
	
	// For the sake of this example
	Header( 'Content-Type: text/plain' );
	Header( 'X-Content-Type-Options: nosniff' );
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR', $rconadr );
	define( 'SQ_SERVER_PORT', $serverport );
	define( 'SQ_TIMEOUT',     1 );
	define( 'SQ_ENGINE',      SourceQuery :: SOURCE );
	// Edit this <-
	
	$Query = new SourceQuery( );
	
	try
	{
		$Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
		
		$Query->SetRconPassword( $rconpass );
		
		var_dump( $Query->Rcon( $cmd ) );
	}
	catch( Exception $e )
	{
		echo $e->getMessage( );
	}
	
	$Query->Disconnect( );
		} 
	
}

elseif ($type == "test"){ 
echo $valid; 
}

elseif ($valid == "0") {
	echo "Sorry you are not authorized";
}

else {
	echo "ERR";
}
?>
<?php 
$hostname ='localhost';
$username ='root';
$password ='';
$database ='web_b';
$con = mysqli_connect($hostname,$username,$password,$database);
if($con->connect_error){
	echo "Gagal koneksi ke database : ".$con->connect_error;
}

function insert($query){
	global $con;
	mysqli_query($con,$query);
	return mysqli_affected_rows($con);
}
function show($query){
	global $con;
	$result= mysqli_query($con,$query);
	$rows=[];
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_row($result)){
		$rows[] = $row;
		}
	}
	return $rows;
	mysqli_close($con);
}
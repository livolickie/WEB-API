<?php
//Author: Livolickie
//http://www.youtube.com/c/HavingTeam
include "db.php";
$name = $_POST["name"];
$name = htmlspecialchars($name);
$ip = $_POST["ip"];
$ip = htmlspecialchars($ip);
$port = $_POST["port"];
$port = htmlspecialchars($port);
$info = $_POST["info"];
$id =  $_POST["id"];
$info = htmlspecialchars($info);
$check = mysqli_query($connection,"SELECT * FROM server_list WHERE ip = '$ip' AND port = '$port'");
$a[1][2];
if ($check == false)
{
	$a[1][0] = "The master server database is corrupt!";
	$a[1][1] = $id;
	$json = json_encode($a);
	echo $json;
}
$result = mysqli_fetch_row($check);
if (!empty($result))
{
	if (((Integer)$result[0]) == $id)
		{
			mysqli_query($connection,"UPDATE server_list SET info = '$info' WHERE ip = '$ip' AND port = '$port'");
			$a[1][0] = "The server was updated in the database!";
			$a[1][1] = $id;
			$json = json_encode($a);
			echo $json;
		}
		else
			{
				$a[1][0] = "Invalid ID!";
				$a[1][1] = $id;
				$json = json_encode($a);
				echo $json;
			}
}
else
{
	mysqli_query($connection,"INSERT INTO server_list (name,ip,port,info) VALUE ('$name','$ip','$port','$info')");
	$check = mysqli_query($connection,"SELECT MAX(id) FROM server_list");
	$result = mysqli_fetch_row($check);
	$a[1][0] = "Your server has been added to the database!";
	$a[1][1] = $result[0];
	$json = json_encode($a);
    echo $json;
}
?>
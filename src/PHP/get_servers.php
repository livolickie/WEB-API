<?php
//Author: Livolickie
//http://www.youtube.com/c/HavingTeam
include "db.php";
$result = mysqli_query($connection,"SELECT MAX(id) FROM server_list");
$result = mysqli_fetch_row($result);
$max_id = $result[0];
$array[$max_id][4];
for($i = 0; $i < $max_id+1; $i++)
{
    $result = mysqli_query($connection,"SELECT * FROM server_list WHERE id = '$i'");
    $temp_array = mysqli_fetch_row($result);
    if ($temp_array[0] != NULL)
    {
        $array[$i][0] = $temp_array[1];
        $array[$i][1] = $temp_array[2];
        $array[$i][2] = $temp_array[3];
		$array[$i][3] = 0;
		$array[$i][4] = $temp_array[4];
    }
}
$json = json_encode($array);
echo $json;
?>
<?php
$url = "http://localhost/project/learn/api/post/read.php";
$hundler = curl_init();
curl_setopt($hundler,CURLOPT_URL,$url);
curl_setopt($hundler,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($hundler);
echo"<pre>";
print_r($result);
echo"</pre>";
curl_close($hundler);

?>
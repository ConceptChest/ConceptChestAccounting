<?php 
/* $ch = curl_init("http://localhost/api/index.php?uname='alam'&pass='123'");

echo curl_exec($ch);
curl_close($ch);
*/
 // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://localhost/api/index.php?uname=alam&pass=123"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 
        echo $output;
        // close curl resource to free up system resources 
        curl_close($ch); 

?>
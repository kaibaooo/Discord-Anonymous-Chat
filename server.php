<?php 

function postToDiscord($info, $name)
{
    $data = array(
    "content" => $info, 
    "username" => $name);
    $curl = curl_init("Web_Hook_API_URL");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}

if(!empty($_POST['message'])){
        $info = $_POST['message'];
        $name = $_POST['username'];
        postToDiscord($info,$name);
        echo $name . '的訊息已傳送';
}

?>
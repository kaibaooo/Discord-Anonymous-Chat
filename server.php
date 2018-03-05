<?php 

function postToDiscord($info, $name)
{
    $data = array(
    "content" => $info, 
    "username" => $name);
    $curl = curl_init("https://discordapp.com/api/webhooks/334989487824437258/1bovUYRZo56y8wZTqIqIv_moxgOYRg4ac1fs2eJvn3F2WoHPrxAte5oQiIJZlO4wOD13");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}

if(!empty($_POST['message'])){
        $info = $_POST['message'];
        $name = $_POST['username'];
        postToDiscord($info,$name);
        echo $name . '的訊息已傳送至Discord#main';
}

?>
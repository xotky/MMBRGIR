<?php
/*
اپنش شده توسط گلد تیم نویسنده عارف دی ان کص ننت اگه منبع نزنی
@chgoldteam
انقد نادیده گرفتیم فک کردن کوریم
#gold™
#daie™
*/
include('jdf.php');
define('API_KEY','937534727:AAEty3SFdgol-0Z6kRxFD4wkXBAEFrQ5abo');
//functions
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
function SendPhoto($chat_id, $link, $text) {
bot('SendPhoto', [
'chat_id' => $chat_id, 
'photo' => $link, 
'caption' => $text
]) ;
}
function sendmessage($chat_id, $text){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MarkDown"
 ]);
 }
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function top($number){ 
    $usersscan = scandir('data');
    unset($usersscan[0]); 
    unset($usersscan[1]); 
    unset($usersscan[2]); 
    foreach ($usersscan as $userlist){ 
        $users = json_decode(file_get_contents('data/'.$userlist.'/'.$userlist.'.json'),true);
        $userlistsave[$userlist] = $users['inv']; 
    } 
    $chakhesh = $userlistsave; 
    arsort($chakhesh,SORT_NUMERIC); 
    $charkhesharray = [];
    foreach ($chakhesh as $key=>$value){  
        $charkhesharray[] = $key;  
    }
    $neshonbde = str_replace('.json','',$charkhesharray[$number]);
    return $neshonbde;
}
//Variables
//////@chgoldteam/////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$from_id = $message->from->id;
$first = $message->from->first_name;
$last = $message->from->last_name;
$username = $message->from->username;
$first2 = $update->callback_query->message->chat->first_name;
$last2 = $update->callback_query->message->chat->last_name;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id2 = $update->callback_query->message->message_id;
$sudo = ['690118344','690118344'];
$admin = "690118344";
if (!file_exists("data/$from_id/$from_id.json")){mkdir("data/$from_id");}
$datas = json_decode(file_get_contents("data/$from_id/$from_id.json"),true);
$tokens = "937534727:AAEty3SFdgol-0Z6kRxFD4wkXBAEFrQ5abo";
$datas1 = json_decode(file_get_contents("data/$chatid/$chatid.json"),true);
$coin1 = $datas1["coin"];
$step = $datas["step"];
$inv = $datas["inv"];
$coin = $datas["coin"];
$type = $datas["type"];
$sefaresh = $datas["sefaresh"];
$warn = $datas["warn"];
$ads = $datas["ads"];
$invcoin = $datas["invcoin"];
if(file_exists("data/starttext.txt")){
$starttext = file_get_contents("data/starttext.txt");
$starttext = str_replace('NAME',$first,$starttext);
$starttext = str_replace('LAST',$last,$starttext);
$starttext = str_replace('USER',$username,$starttext);
$starttext = str_replace('ID',$from_id,$starttext);
}else{
$starttext = "";
}
$idbot = "ZMemberobot";
$state =
file_get_contents("data/$from_id/state.txt");
$chads = "ZMemberads";
$chor = "ZMemberads";
$URL = "https://arefdn.power-host.ir/test";
$channel = "@ZMemberads";
$al = $datas["ted"];
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot937534727:AAEty3SFdgol-0Z6kRxFD4wkXBAEFrQ5abo/getChatMember?chat_id=$channel&user_id=".$from_id));
$tch = $truechannel->result->status;
$mem = bot('getChatMembersCount',['chat_id'=>'@'.$text])->result;
//codes
if(!empty($from_id)){
$hhhh = explode("\n",file_get_contents("data/$from_id/channels.txt"));
foreach($hhhh as $chaaa){
     if( $chaaa != "" and $chaaa != "raf"){
 $channels5555 = json_decode(file_get_contents("https://api.telegram.org/bot937534727:AAEty3SFdgol-0Z6kRxFD4wkXBAEFrQ5abo/getChatMember?chat_id=$chaaa&user_id=$from_id"));
 $tod5555 = $channels5555->result->status;
 if($tod5555 != 'member' && $tod5555 != 'creator' && $tod5555 != 'administrator'){
   $foiii = file_get_contents("data/$from_id/channels.txt");
   $str = str_replace("$chaaa","raf",$foiii);
   file_put_contents("data/$from_id/channels.txt","$str");
   $hjvhvh = str_replace("@","T.me/",$chaaa);
$newin = $coin -2;
$datas["coin"] = "$newin";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"به دلیل ترک کانال 
$hjvhvh
دو الماس ازت کم شد"
]);
}
}
}
}


if(strpos($text == "/start") !== false  && $text !=="/start"){
$id=str_replace("/start ","",$text);
$amar=file_get_contents("data/ozvs.txt");
$exp=explode("\n",$amar);
if(!in_array($from_id,$exp) && $from_id != $id){
$myfile2 = fopen("data/ozvs.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
$datas["step"] = "free";
$datas["type"] = "empty";
$datas["inv"] = "0";
$datas["coin"] = "10";
$datas["warn"] = "0";
$datas["ads"] = "0";
$datas["sub"] = "$id";
$datas["invcoin"] = "0";
$datas["panel"] = "free";
$datas["timepanel"] = "null";
$datas['dafeee'] = "first";
$datas['join_date'] = jdate("Y/m/d");
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
$datas12 = json_decode(file_get_contents("data/$id/$id.json"),true);
$invite1 = $datas12["inv"];
$coin1 = $datas12["coin"];
settype($invite1,"integer");
$newinvite = $invite1 + 1;
$datas12["inv"] = $newinvite;
$outjson = json_encode($datas12,true);
file_put_contents("data/$id/$id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"یک نفر با لینک شما وارد ربات شد✅
وقتی که اولین عضویت خود را در یک کانال انجام دهد 10 الماس به شما واریز خواهد شد😄
",
'parse_mode'=>"HTML",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"سلام
به ربات  زِد ممبر🏆 
خوش اومدی❤️

🏆با استفاده از این ربات برای خود الماس جمع کنید🏆
و سپس با آنها برای کانال خود عضو بگیرید🚀",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💎دریافت الماس رایگان💎"]],[['text'=>"👤سفارش ممبر"],['text'=>"🔖مشخصات من"]],[['text'=>"زیرمجموعه گیری🗣"],['text'=>'برترین ها🏆'],['text'=>"قوانین ربات⚖️"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"10 الماس به شما اضافه شد✅",
'reply_to_message_id'=>$message_id,
]);
}
}
if (!file_exists("data/$from_id/$from_id.json")) {
$myfile2 = fopen("data/ozvs.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
$datas["step"] = "free";
$datas["type"] = "empty";
$datas["inv"] = "0";
$datas["coin"] = "0";
$datas["warn"] = "0";
$datas["ads"] = "0";
$datas["invcoin"] = "0";
$datas["panel"] = "free";
$datas["timepanel"] = "null";
$datas['join_date'] = jdate("Y/m/d");
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
}
if($datas['join_date'] == null){
    $datas['join_date'] = jdate("Y/m/d");
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
}
if($text == "/start" or $text == "/start"){
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"سلام
به ربات  زِد ممبر🏆 
خوش اومدی❤️

🏆با استفاده از این ربات برای خود الماس جمع کنید🏆
و سپس با آنها برای کانال خود عضو بگیرید🚀",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💎دریافت الماس رایگان💎"]],[['text'=>"👤سفارش ممبر"],['text'=>"🔖مشخصات من"]],[['text'=>"زیرمجموعه گیری🗣"],['text'=>'برترین ها🏆'],['text'=>"قوانین ربات⚖️"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif($tch != "creator" && $tch != "administrator" && $tch != "member"){
  bot('sendMessage', [
        'chat_id' => $chat_id,
    'text'=>"برای باز شدن قفل ربات و همچنین حمایت از ما در کانال زیر عضو شوید 🌿

⚗️ $channel

🎈 بعد از عضو شدن /start کنید 🎈",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    }
if($text == "💎دریافت الماس رایگان💎"){
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ به بخش دریافت الماس  خوش آمدید.

🏆 ربات زِد ممبر دارای 2 پنل کاربری به همراه ضرایب زیر می باشد.
1️⃣ (پنل نقره ای🥈): دارای ضریب 1.2 می باشد. یعنی با عضویت در 100 کانال، شما می توانید 120 الماس دریافت کنید.
2️⃣ (پنل طلایی🥇): دارای ضریب 2 می باشد. یعنی با عضویت در 100 کانال، شما می توانید 200 الماس دریافت کنید.

🛒 برای اینکه پنل خود را از نقره ای به طلایی تبدیل کنید باید به بخش فروشگاه مراجعه کنید.

💎 برای دریافت الماس رایگان میتوانید از طریق دکمه شیشه ای زیر وارد کانال تبلیغات شوید👇

‼️ توجه به ازای لفت از هر کانال تا قبل از 1 هفته 2 الماس از شما کسر خواهد شد.",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text' => "رفتن به کانال⤴️", 'url' => "https://t.me/ZMemberads/14"],
['text'=>'الماس روزانه⏱','callback_data'=>'dailygem']
],
]
])
]);
}
//=====
if($data == 'dailygem'){
$t = date('Ymd');
if ($datas1['timer'] == $t){
bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'text'=>'شما امروز سکت رو گرفتی !! 24 ساعت بعد دوباره امتحان کن !!','show_alert'=>true]);
}else{
$rd = rand(1,2);
$datas1['coin'] += $rd;
$datas1['timer'] = $t;
file_put_contents("data/$chatid/$chatid.json",json_encode($datas1,true));
bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'text'=>'شما مقدار '.$rd.' الماس دریافت کردید'."\n".'24 ساعت دیگر دوباره امتحان کنید👌','show_alert'=>true]);
}
}
//=====
if($text == "قوانین ربات⚖️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⚖️صفحه قوانین و مقررات⚖️


⛔️ کانال شما نباید شامل موارد زیر باشد:
1️⃣ - خلاف قوانین جمهوری اسلامی ایران
2️⃣ - فحاشی و توهین
3️⃣ - محتوای جنسی و بزرگسالان
4️⃣ - مزاحمت و پخش اطلاعات افراد
5️⃣ - کلاهبرداری و پخش موارد جعلی
6️⃣ -سایتها و رباتها و کانالهای شرط بندی 
7️⃣ - تبلیغ ربات های مشابه، ربات های غیرواقعی
8️⃣ - فریب افراد و کاربران
9️⃣ - هک و نفوذ، پخش برنامه های پولی و موارد علیه کپی رایت
🔟 - و ... (موارد غیرمجاز)

⚠️ توجه داشته باشید در صورتی که کانال شما شامل موارد بالا بود سفارش آن لغو و الماس های آن نیز برگشت داده نمی شود‼️

⚠️ قوانین و مقررات دائما در حال به روز شدن می باشند و کلیه کاربران موظف به مطالعه این صفحه به صورت مکرر می باشند.",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💎دریافت الماس رایگان💎"]],[['text'=>"👤سفارش ممبر"],['text'=>"🔖مشخصات من"]],[['text'=>"زیرمجموعه گیری🗣"],['text'=>'برترین ها🏆'],['text'=>"قوانین ربات⚖️"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
if($text == "/help_add_bot"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⚪️ آموزش ادمین کردن ربات در کانال:

🔸 ابتدا وارد بخش تنظیمات و مدیریت کانال خود شود.

🔸 حال با لمس Admins به پنجره مدیریت ادمین‌ها وارد می‌شوید و لیست مدیران کانال را مشاهده می‌کنید.

🔸 با انتخاب Add admin پنجره جدید باز خواهد شد که لیست مخاطبان شما را نشان خواهد داد.

🔸 حال در کادر جستجو یوزرنیم ربات  @ZMemberobot ایدی ربات  را جستجو کنید.

🔸 در لیست نمایش داده شده ربات زِد ممبر را انتخاب کنید و تایید را بزنید.",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💎دریافت الماس رایگان💎"]],[['text'=>"👤سفارش ممبر"],['text'=>"🔖مشخصات من"]],[['text'=>"زیرمجموعه گیری🗣"],['text'=>'برترین ها🏆'],['text'=>"قوانین ربات⚖️"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif($data == 'send coins'){
$datas1 = json_decode(file_get_contents("data/$chatid/$chatid.json"),true);
$datas1["ted"] = "10";
	if($datas1['coin'] > 60){
		$maximume = $datas1['coin'] - 10;
		SendMessage($chatid,"💎 تعداد سکه مورد نظر را برای انتقال وارد کنید!
⚠️ حداقل تعداد سکه باید 60 سکه باشد تا بتوانید انتقال دهید؛ مقدار مجاز برای انتقال 20 و حداکثر 200 سکه میتوانید انتقال دهید
🔻موجودی قابل انتقال: $maximume");
        $step = $datas1['step']='send coins';
        file_put_contents('data/'.$chatid.'/$chatid.json',json_encode($command2));
	}else{
		SendMessage($chatid,"⚠️ کاربر عزیز جهت انتقال سکه 60 سکه نیاز دارید و حداکثر میتوانید 20 سکه انتقال دهید!");
}
}
elseif($datas1['step'] == 'send coins'){
    $max = $datas1['coin'] - 20;
	if($text > 19 and $text <= $datas1['coin'] - 20){
	    $max = $datas1['coin'] - 20;
		$step = $datas1['step']='send coins2';
		$step = $datas1['sendcoins']=$text;
        file_put_contents('data/'.$chatid.'/$chatid.json',json_encode($command));
		SendMessage($chat_id,"🌀 شماره کاربری فرد مورد نظر را ارسال کنید؛ شناسه کاربری هر فرد در پروفایل ایشان در گلد سین قابل مشاهده است.");
	}else{
		SendMessage($chat_id,"⁉️ مقدار وارد شده صحیح نیست!
شما میتوانید با توجه به موجودی شما که $max سکه هست حداقل 20 سکه انتقال دهید.");
	}
}
elseif($datas1['step'] == 'send coins2'){
	if(in_array($text,explode("\n",$members))){
		$user = json_decode(file_get_contents('data/'.$text.'/$text.json'),true);
		$sendcoins = $datas1['sendcoins'];
		$newcoins = $user['coin']=$user['coin'] + $sendcoins;
		$coin = $datas1['coin']=$datas1['coins'] - $sendcoins;
		file_put_contents('data/'.$text.'/$text.json',json_encode($user));
		SendMessage($text,"✅ با موفقیت دریافت شد!
 کاربری از گلد سین با شناسه کاربری $from_id به تعداد $sendcoins برای شما انتقال داد.");
		SendMessage($chat_id,"منتقل شد");
		unset($datas1['sendcoins']);
		$step = $datas1['step']='none';
		file_put_contents('data/'.$chatid.'/$chatid.json',json_encode($command));
		file_put_contents('data/'.$from_id.'/send transfers.txt',file_get_contents('data/'.$from_id.'/send transfers.txt')."\n✔️ اعتبار واریزی: $sendcoins\nدریافت کننده: $text\nتاریخ ارسال: $date\n〰〰〰〰〰");
        file_put_contents('data/'.$text.'/get transfers.txt',file_get_contents('data/'.$text.'/get transfers.txt')."\n✔️ اعتبار دریافتی: $sendcoins\nواریز کننده: $from_id\nتاریخ: $date\n〰〰〰〰〰");
	}else{
		SendMessage($chat_id,"❌این کاربر در ربات عضو نمیباشد");
	}
}
elseif($text1 == "کد هدیه🎯"){
file_put_contents("data/$from_id/step.txt","learn");
$channel = "Hectorteam";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"کد هدیه را وارد کنید به درستی",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"برگشت↪"]
]
]
])
]);
}
elseif($step == "learn"){
if($text == $code){
$bede = $coin+$sec;
file_put_contents("data/$from_id/coin.txt",$bede);
file_put_contents("data/$from_id/step.txt","end");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"شما برنده شدید کد درست بود",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"برگشت↪"]
]
]
])
]);
bot('sendmessage',[
 'chat_id'=>"@".$channel,
'text'=>"کد هدیه استفاده شد✔️شخص استفاده کننده 👇🏻
[$first_name](tg://user?id=$from_id)
تعداد سکه کد هدیه : $sec 🌟
",
'parse_mode'=>"markdown",
]);
unlink("data/code.txt");
unlink("data/sec.txt");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"کد وجود نداره یا یکی استفاده کرده",
]);
}
}
if($text == "📊پیگیری سفارشات"){
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
if($sefaresh != null and $sefaresh != "0"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
تعداد سفارشات اخیر شما : $sefaresh",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💎دریافت الماس رایگان💎"]],[['text'=>"👤سفارش ممبر"],['text'=>"🔖مشخصات من"]],[['text'=>"زیرمجموعه گیری🗣"],['text'=>'برترین ها🏆'],['text'=>"قوانین ربات⚖️"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
متاسفانه شما هیچ سفارشی ثبت نکرده اید××
هر چه سریع تر اقدام به ثبت سفارش کنید🗂
",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💎دریافت الماس رایگان💎"]],[['text'=>"👤سفارش ممبر"],['text'=>"🔖مشخصات من"]],[['text'=>"زیرمجموعه گیری🗣"],['text'=>'برترین ها🏆'],['text'=>"قوانین ربات⚖️"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}}
if($text == "👤سفارش ممبر"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا کمی صبر کنید ...",
'reply_to_message_id'=>$message_id,
]);
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا نوع ممبر دریافتی را انتخاب کنید😁",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text' => "ممبرواقعی👤", 'callback_data' => "aref10"],['text' => "ممبرفیک👤", 'callback_data' => "aref20"]
                    ],
]
])
]);
}
if($data == "aref10"){
bot('editmessagetext', [
'chat_id' => $chatid,
'message_id' => $message_id2,
'text'=>"تعداد ممبر مد نظر خود را انتخاب کنید👇😄",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id2,
'reply_markup' => json_encode([
"resize_keyboard"=>true,'one_time_keyboard' => true,
'inline_keyboard'=>[
[
['text' => "10👤|20💎", 'callback_data' => "seen45"]
                    ],
                    [
['text' => "20👤|40💎", 'callback_data' => "seen80"],['text' => "30👤|60💎", 'callback_data' => "seen130"]
                    ],
                    [
['text' => "40👤|80💎", 'callback_data' => "seen240"],['text' => "60👤|100💎", 'callback_data' => "seen300"]
],
]
])
]);
}
if ($data == "aref20") {
   bot('editmessagetext', [
'chat_id' => $chatid,
'message_id' => $message_id2,
'text'=>"تعداد ممبر مد نظر خود را انتخاب کنید👇😄",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id2,
'reply_markup' => json_encode([
"resize_keyboard"=>true,'one_time_keyboard' => true,
'inline_keyboard'=>[
[
['text' => "500👤|50🚀", 'callback_data' => ""]
                    ],
                    [
['text' => "1000👤|80🚀", 'callback_data' => ""],['text' => "1500👤|100🚀", 'callback_data' => ""]
                    ],
                    [
['text' => "2000👤|150🚀", 'callback_data' => ""],['text' => "2500👤|200🚀", 'callback_data' => ""]
],
]
])
]);
}
if ($data == "seen45") {
$datas1 = json_decode(file_get_contents("data/$chatid/$chatid.json"),true);
$datas1["ted"] = "10";
$outjson = json_encode($datas1,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
$in = $datas1["coin"];
if ($in > "20") {
$datas1["step"] = "seen2";
$outjson = json_encode($datas1,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "لطفا ایدی کانال مورد نظر خود را بدون @ وارد کنید

‼️قبل از ارسال ایدی ربات @ZMemberobot را ادمین کانال خود کنید‼️
👈برای دیدن آموزش ادمین کردن کانال دستور /help_add_bot را بزنید👉",
'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [
            ['text' => "بازگشت↪️", 'callback_data' => "home"]
                            ],
                        ]
                    ])
            ]);
        } else {
             bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "تعداد الماس های شما جهت سفارش کافی نیست🔖",
                'reply_markup' => json_encode([
                 "resize_keyboard"=>true,'one_time_keyboard' => true,
                'inline_keyboard' => [
                            [
            ['text' => "", 'callback_data' => "buycoin"]
                            ],
                        ]
                    ])
            ]);
        }
    } if ($data == "seen80") {
$datas1["ted"] = "20";
$outjson = json_encode($datas1,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
        $datas1 = json_decode(file_get_contents("data/$chatid/$chatid.json"),true);
        $in = $datas1["coin"];
        if ($in > "40") {
            $datas1["step"] = "seen2";
$outjson = json_encode($datas1,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "لطفا ایدی کانال مورد نظر خود را بدون @ وارد کنید

‼️قبل از ارسال ایدی ربات @ZMemberobot را ادمین کانال خود کنید‼️
👈برای دیدن آموزش ادمین کردن کانال دستور /help_add_bot را بزنید👉",
'reply_markup' => json_encode([
"resize_keyboard"=>true,'one_time_keyboard' => true,
                        'inline_keyboard' => [
                            [
            ['text' => "بازگشت↪️", 'callback_data' => "home"]
                            ],
                        ]
                    ])
            ]);
        } else {
             bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "تعداد الماس های شما جهت سفارش کافی نیست🔖",
                'reply_markup' => json_encode([
                 "resize_keyboard"=>true,'one_time_keyboard' => true,
                'inline_keyboard' => [
                            [
            ['text' => "", 'callback_data' => "buycoin"]
                            ],
                        ]
                    ])
            ]);
        }
    } if ($data == "seen130") {
$datas1["ted"] = "30";
$outjson = json_encode($datas1,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
        $datas1 = json_decode(file_get_contents("data/$chatid/$chatid.json"),true);
        $in = $datas1["coin"];
        if ($in > "60") {
$datas1["step"] = "seen2";
$outjson = json_encode($datas1,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "لطفا ایدی کانال مورد نظر خود را بدون @ وارد کنید

‼️قبل از ارسال ایدی ربات @ZMemberobot را ادمین کانال خود کنید‼️
👈برای دیدن آموزش ادمین کردن کانال دستور /help_add_bot را بزنید👉",
'reply_markup' => json_encode([
"resize_keyboard"=>true,'one_time_keyboard' => true,
                        'inline_keyboard' => [
                            [
            ['text' => "بازگشت↪️", 'callback_data' => "home"]
                            ],
                        ]
                    ])
            ]);
        } else {
             bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "تعداد الماس های شما جهت سفارش کافی نیست🔖",
                'reply_markup' => json_encode([
                 "resize_keyboard"=>true,'one_time_keyboard' => true,
                'inline_keyboard' => [
                            [
            ['text' => "", 'callback_data' => "buycoin"]
                            ],
                        ]
                    ])
            ]);
        }
    } if ($data == "seen240") {
$datas1["ted"] = "40";
$outjson = json_encode($datas,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
        $datas1 = json_decode(file_get_contents("data/$chatid/$chatid.json"),true);
        $in = $datas1["coin"];
        if ($in > "80") {
        $datas1["step"] = "seen2";
$outjson = json_encode($datas1,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "لطفا ایدی کانال مورد نظر خود را بدون @ وارد کنید

‼️قبل از ارسال ایدی ربات @ZMemberobot را ادمین کانال خود کنید‼️
👈برای دیدن آموزش ادمین کردن کانال دستور /help_add_bot را بزنید👉",
'reply_markup' => json_encode([
"resize_keyboard"=>true,'one_time_keyboard' => true,
                        'inline_keyboard' => [
                            [
            ['text' => "بازگشت↪️", 'callback_data' => "home"]
                            ],
                        ]
                    ])
            ]);
        } else {
             bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "تعداد الماس های شما جهت سفارش کافی نیست🔖",
                'reply_markup' => json_encode([
                 "resize_keyboard"=>true,'one_time_keyboard' => true,
                'inline_keyboard' => [
                            [
            ['text' => "", 'callback_data' => "buycoin"]
                            ],
                        ]
                    ])
            ]);
        }
    } if ($data == "seen300") {
$datas1["ted"] = "60";
$outjson = json_encode($datas1,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
        $datas1 = json_decode(file_get_contents("data/$chatid/$chatid.json"),true);
        $in = $datas1["coin"];
        if ($in < "100") {
             bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "تعداد الماس های شما جهت سفارش کافی نیست🔖",
                'reply_markup' => json_encode([
                 "resize_keyboard"=>true,'one_time_keyboard' => true,
                'inline_keyboard' => [
                            [
            ['text' => "", 'callback_data' => "buycoin"]
                            ],
                        ]
                    ])
            ]);
        } else {
            $datas1["step"] = "seen2";
$outjson = json_encode($datas1,true);
file_put_contents("data/$chatid/$chatid.json",$outjson);
            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $message_id2,
                'text' => "لطفا ایدی کانال مورد نظر خود را بدون @ وارد کنید

‼️قبل از ارسال ایدی ربات @ZMemberobot را ادمین کانال خود کنید‼️
👈برای دیدن آموزش ادمین کردن کانال دستور /help_add_bot را بزنید👉",
'reply_markup' => json_encode([
"resize_keyboard"=>true,'one_time_keyboard' => true,
                        'inline_keyboard' => [
                            [
            ['text' => "بازگشت↪️", 'callback_data' => "home"]
                            ],
                        ]
                    ])
            ]);
        }
    }
if ($step == "seen2") {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا کمی صبر کنید ...",
'reply_to_message_id'=>$message_id,
]);
$channels255 = json_decode(file_get_contents("https://api.telegram.org/bot937534727:AAEty3SFdgol-0Z6kRxFD4wkXBAEFrQ5abo/getChatMember?chat_id=@$text&user_id=$chat_id"));
 $esm = bot('getchat',[
    'chat_id'=>"@$text"
    ])->result->title;
$tod = $channels255->result->status;
$get = bot('getchat',[
    'chat_id'=>"@$text"
    ])->result->photo->big_file_id;
    
  if(!is_null($get)){
    $pic = bot('getfile',[
    'file_id'=>$get
    ])->result->file_path;
    $re = rand(111,999);
    $nak = rand(11111,99999);
    file_put_contents('prof/P_'.$re.'.png',file_get_contents('https://api.telegram.org/file/bot'.API_KEY.'/'.$pic));
    echo $phot = 'https://arefdn.power-host.ir/test/prof/P_'.$re.'.png';
  }else{
    echo $phot = 'https://arefdn.power-host.ir/test/prof/aref.jpg';
  }
if(!file_exists("ads/cont/$text.txt")){
if($tod == 'member' or $tod == 'creator' or $tod == 'administrator'){
$otjj = file_get_contents("https://arefdn.power-host.ir/test/index.php?channel=$text");
if($otjj == "false" or $oyjj == null){
$post_id = bot('SendPhoto', [
'chat_id' =>"@$chads", 
'photo' =>"$phot",
'caption' => "نام کانال: $esm
تعداد عضو های فعلی: $mem
تعداد عضو های درخواستی: $al
کد پیگیری در ربات: $nak",
'parse_mode' => "MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[
['text' => "عضویت در کانال📣",'url' => "https://t.me/$text"]
],
[
['text' => "💎دریافت الماس💎", 'callback_data' => "getcoin-$text"],['text' => "گزارش🚫", 'callback_data' => "goz-$text"],['text' => "ربات🤖", 'url' => "https://t.me/ZMemberobot"]
],
]
])
])->result->message_id;
}else{
$post_id = bot('SendPhoto', [
'chat_id' =>"@$chads", 
'photo' =>"https://t.me/$text",
'caption' => "سفارش جدید عضویت
====================
💎جهت دریافت الماس ابتدا عضویت در کانال را بزنید و پس از عضویت دریافت الماس را انتخاب کنید
عضو های فعلی کانال» $mem",
'parse_mode' => "MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[
['text' => "عضویت در کانال📣",'url' => "https://t.me/$text"]
],
[
['text' => "💎دریافت الماس💎", 'callback_data' => "getcoin-$text"],['text' => "گزارش🚫", 'callback_data' => "goz-$text"],['text' => "ربات🤖", 'url' => "https://t.me/ZMemberobot"]
],
]
])
])->result->message_id;
}
$fksdgnkfe = $al *2;
$getsho = $coin - $fksdgnkfe;
$datas["coin"] = "$getsho";
$nu = $sefaresh + 1;
$datas["sefaresh"] = "$nu";
$outjson = json_encode($datas,true);
file_put_contents("data/$chat_id/$chat_id.json",$outjson);
file_put_contents("ads/postid/$text.txt", $post_id);
file_put_contents("ads/cont/$text.txt",$al);
file_put_contents("ads/admin/$text.txt",$chat_id);
file_put_contents("ads/seen/$text.txt","0");
file_put_contents("ads/user/$text.txt","");
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$chat_id/$chat_id.json",$outjson);
bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "سفارش شما با موفقیت ثبت شد✅

قوانین:
⚠️درصورتی که ربات را از ادمین بودن کانال خارج کنید سفارش شما لغو خواهد شد و الماس ها نیز برگشت نمیخورند
⚠️در طول ممبرگیری ایدی کانال خود را عوض نکنید",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>'✅برای دیدن تبلیغ خود در کانال دکمه را لمس کنید.','url'=>"http://t.me/Zmemberads/$post_id"]],
]
])
            ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❇️ صفحه اصلی

برای انجام عملیات مورد نظر، لطفا از دکمه های پایین استفاده نمایید.",
'reply_to_message_id'=>$message_id,
]);
        } else {
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$chat_id/$chat_id.json",$outjson);
bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "ربات @ZMemberobot ادمین این کانال نیست ⚠️
لطفا ابتدا ربات را ادمین کانال کنید و مجدد ایدی کانال را بدون @ وارد کنید",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💎دریافت الماس رایگان💎"]],[['text'=>"👤سفارش ممبر"],['text'=>"🔖مشخصات من"]],[['text'=>"زیرمجموعه گیری🗣"],['text'=>'برترین ها🏆'],['text'=>"قوانین ربات⚖️"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]);
}
} else {
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$chat_id/$chat_id.json",$outjson);
bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "شما یک سفارش برای این کانال ثبت کرده اید📇

لطفا تا اتمام سفارش صبور باشید و دیگر اقدام به سفارش نکنید📬",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💎دریافت الماس رایگان💎"]],[['text'=>"👤سفارش ممبر"],['text'=>"🔖مشخصات من"]],[['text'=>"زیرمجموعه گیری🗣"],['text'=>'برترین ها🏆'],['text'=>"قوانین ربات⚖️"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]);
}
}
if (strpos($data, "getcoin-") !== false) {
$newd = str_replace("getcoin-",'',$data);
$fromm_id = $update->callback_query->from->id;
@$ue = file_get_contents("ads/user/$newd.txt");
@$se = file_get_contents("ads/seen/$newd.txt");
$get = bot('getChatMember',[
'chat_id'=>'@'.$newd,
'user_id'=>$fromm_id
]);
if($get->result->status == 'administrator' or $get->result->status == 'creator'){
	bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "شما سازنده یا ادمین این کانال هستید",
'show_alert' => false
]);
die();
}else{
if (strpos($ue, "$fromm_id") !== false) {
bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "شما قبلا الماس خود را از این سفارش دریافت کرده اید😐",
'show_alert' => false
]);
} else {
// برسی ادمین بودن ربات
$channels23 = json_decode(file_get_contents("https://api.telegram.org/bot937534727:AAEty3SFdgol-0Z6kRxFD4wkXBAEFrQ5abo/getChatMember?chat_id=@$newd&user_id=914689984"));
$tod3 = $channels23->result->status;
if($tod3 != 'administrator'){
$end = file_get_contents("ads/seen/$newd.txt");
$ad = file_get_contents("ads/admin/$newd.txt");
$co = file_get_contents("ads/cont/$newd.txt");
$te = file_get_contents("ads/time/$newd.txt");
$de = file_get_contents("ads/date/$newd.txt");
bot('sendMessage', [
'chat_id' => $ad,
'text'=>"شما ربات را از ادمین بودن خارج کردید💎
سفارش شما به پایان رسید✔️

ایدی کانال📌 : @$newd
تعداد ممبر درخواستی👥 : $co
تعداد ممبردریافتی👤 : $end",
'parse_mode' =>"html",
]);
@$don = file_get_contents("data/done.txt");
$getdon = $don + 1;
file_put_contents("data/done.txt", $getdon);
@$enn = file_get_contents("data/enf.txt");
$getenf = $enn + 1;
file_put_contents("data/enf.txt", $getenf);
$post_id = file_get_contents("ads/postid/$newd.txt");
$de = $newd + 1;
bot('deletemessage', [
'chat_id' =>"@$chads",
'message_id' => $post_id
]);
unlink("ads/seen/$newd.txt");
unlink("ads/admin/$newd.txt");
unlink("ads/cont/$newd.txt");
unlink("ads/time/$newd.txt");
unlink("ads/user/$newd.txt");
unlink("ads/date/$newd.txt");
unlink("ads/postid/$newd.txt");
die();
}
// برسی ادمین بودن ربات
$channels23 = json_decode(file_get_contents("https://api.telegram.org/bot937534727:AAEty3SFdgol-0Z6kRxFD4wkXBAEFrQ5abo/getChatMember?chat_id=@$newd&user_id=".$fromm_id));
$tod3 = $channels23->result->status;
if($tod3 == 'member' or $tod3 == 'creator' or $tod3 == 'administrator'){
$user = file_get_contents("ads/user/$newd.txt");
$members = explode("\n", $user);
if (!in_array($fromm_id, $members)) {
$add_user = file_get_contents("ads/user/$newd.txt");
$add_user .= $fromm_id . "\n";
file_put_contents("ads/user/$newd.txt", $add_user);
}
$getse = $se + 1;
file_put_contents("ads/seen/$newd.txt", $getse);
$datas3 = json_decode(file_get_contents("data/$fromm_id/$fromm_id.json"),true);
$coin2 = $datas3["coin"];
$getsho = $coin2 + 1;
$datas3["coin"] = "$getsho";
$outjson = json_encode($datas3,true);
file_put_contents("data/$fromm_id/$fromm_id.json",$outjson);
$coing = $datas3["coin"];
$myfile2 = fopen("data/$fromm_id/channels.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "@$newd\n");
fclose($myfile2);
$sub = $datas3["sub"];
if($sub != null){
	$subdata = json_decode(file_get_contents("data/$sub/$sub.json"),true);
$invcoin = $subdata["invcoin"];
$inv = $subdata["inv"];
$newinv= $inv + 0;
$newinvcoin= $invcoin + 0.2;
if($datas3['dafeee'] == 'first'){
		$tiksh = $subdata['coin'];
		$ziiii = $tiksh + 10;
		$subdata["coin"] = "$ziiii";
		bot('sendMessage',[
		'chat_id'=>$sub,
		'text'=>"تبریک🎊
زیر مجموعه شما اولین عضویت خود را در یک کانال انجام داد✅
10 الماس به شما تعلق گرفت😄",
		]);
		$datas3["dafeee"] = "$newinv";
		$outjson = json_encode($datas3,true);
		file_put_contents("data/$fromm_id/$fromm_id.json",$outjson);
		}
$subdata["inv"] = "$newinv";
$subdata["invcoin"] = "$newinvcoin";
$outjson = json_encode($subdata,true);
file_put_contents("data/$sub/$sub.json",$outjson);
}
bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "شما یک الماس گرفتید موجودی جدید : $coing 💎",
'show_alert' => false
]);
}else{
bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "😐شما هنوز در کانال عضو نشده اید😐",
'show_alert' => true
]);
}
$end = file_get_contents("ads/seen/$newd.txt");
$ad = file_get_contents("ads/admin/$newd.txt");
$co = file_get_contents("ads/cont/$newd.txt");
$te = file_get_contents("ads/time/$newd.txt");
$de = file_get_contents("ads/date/$newd.txt");
if ($end >= $co) {
bot('sendMessage', [
'chat_id' => $ad,
'text' => "سفارش کانال @$newd انجام شد✅
 تعداد ممبر درخواستی: $co
تعداد ممبر دریافتی: $end",
'parse_mode' =>"html",
]);
@$don = file_get_contents("data/done.txt");
$getdon = $don + 1;
file_put_contents("data/done.txt", $getdon);
@$enn = file_get_contents("data/enf.txt");
$getenf = $enn + 1;
file_put_contents("data/enf.txt", $getenf);
$post_id = file_get_contents("ads/postid/$newd.txt");
$de = $newd + 1;
bot('deletemessage', [
'chat_id' =>"@$chads",
'message_id' => $post_id
]);
unlink("ads/seen/$newd.txt");
unlink("ads/admin/$newd.txt");
unlink("ads/cont/$newd.txt");
unlink("ads/time/$newd.txt");
unlink("ads/user/$newd.txt");
unlink("ads/date/$newd.txt");
unlink("ads/postid/$newd.txt");
}
}
}
}

if (strpos($data, "cancel-") !== false) {
$newd = str_replace("cancel-",'',$data);
$fromm_id = $update->callback_query->from->id;
$end = file_get_contents("ads/seen/$newd.txt");
$ad = file_get_contents("ads/admin/$newd.txt");
$co = file_get_contents("ads/cont/$newd.txt");
$te = file_get_contents("ads/time/$newd.txt");
$de = file_get_contents("ads/date/$newd.txt");
if ($fromm_id == $ad || in_array($fromm_id,$sudo)) {
$rcoin = $co - $end;
$datas3 = json_decode(file_get_contents("data/$fromm_id/$fromm_id.json"),true);
$coin2 = $datas3["coin"];
$getsho = $coin2 + $rcoin;
$datas3["coin"] = "$getsho";
$outjson = json_encode($datas3,true);
file_put_contents("data/$fromm_id/$fromm_id.json",$outjson);
bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "سفارش شما لغو شد و $rcoin الماس باقی مانده شما پس داده شد",
'show_alert' => false
]);
bot('sendMessage', [
'chat_id' => $ad,
'text' => "کاربر گرامی سفارش شما لغو شد⭕️

و الماس های باقی مانده برگشت داده شد

الماس های باقی مانده💎 : $rcoin

با تشکر📇",
'parse_mode' => "MarkDown"
]);
@$enn = file_get_contents("data/enf.txt");
$getenf = $enn + 1;
file_put_contents("data/enf.txt", $getenf);
$newd = str_replace("cancel-",'',$data);
$post_id = file_get_contents("ads/postid/$newd.txt");
bot('deletemessage', [
'chat_id' =>"@$chads",
'message_id' =>$post_id
]);
unlink("ads/seen/$newd.txt");
unlink("ads/admin/$newd.txt");
unlink("ads/cont/$newd.txt");
unlink("ads/time/$newd.txt");
unlink("ads/user/$newd.txt");
unlink("ads/date/$newd.txt");
unlink("ads/postid/$newd.txt");
}else{
bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "این سفارش متعلق به شما نیست🔴",
'show_alert' => false
]);
}
}
if (strpos($data, "goz-") !== false) {
$newd = str_replace("goz-",'',$data);
$fromm_id = $update->callback_query->from->id;
$end = file_get_contents("ads/seen/$newd.txt");
$ad = file_get_contents("ads/admin/$newd.txt");
$co = file_get_contents("ads/cont/$newd.txt");
$te = file_get_contents("ads/time/$newd.txt");
$de = file_get_contents("ads/date/$newd.txt");
$po = file_get_contents("ads/postid/$newd.txt");
if ($fromm_id != $ad) {
bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "گزارش شما ثبت شد و به ادمین اطلاع داده شد⭕️",
'show_alert' => false
]);
bot('sendMessage', [
'chat_id' =>$admin,
'text' => "سلام ادمین گرامی📇
این پست👇
https://t.me/ZMemberads/$po
توسط کاربر زیر گزارش شده است👇
[$fromm_id](tg://user?id=$fromm_id)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
اطلاعات پست🔖

پیوی ادمین سفارش دهنده👇
[$ad](tg://user?id=$ad)
تعداد ممبر های سفارش داده شده👤 : $co
تعداد ممبر های دریافتی📬 : $end

با تشکر
",
'parse_mode'=>"markdown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[
['text' => "لغو سفارش", 'callback_data' => "cancel-$newd"]
],
]
])
            ]);
}else{
bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "🚀شما نمیتوانید پست خود را گزارش کنید.",
'show_alert' => false
]);
}
}
if (strpos($data, "pay-") !== false) {
$newd = str_replace("pay-",'',$data);
$fromm_id = $update->callback_query->from->id;
$end = file_get_contents("ads/seen/$newd.txt");
$ad = file_get_contents("ads/admin/$newd.txt");
$co = file_get_contents("ads/cont/$newd.txt");
$te = file_get_contents("ads/time/$newd.txt");
$de = file_get_contents("ads/date/$newd.txt");
if ($fromm_id == $ad) {
bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "اطلاعات سفارش شما به شرح زیر است📇
تعداد ممبر سفارش داده شده 🛍: $co
تعداد ممبر دریافتی 👥: $end
با تشکر",
'show_alert' => true
]);
}else{
bot('answercallbackquery', [
'callback_query_id' => $update->callback_query->id,
'text' => "این سفارش متعلق به شما نیست🔴",
'show_alert' => false
]);
}
}
if($data == "home"){
bot('editmessagetext',[
      'chat_id' => $chatid,
      'message_id' => $message_id2,
      'text' =>"با موفقیت به منوی اصلی برگشتید دکمه مورد نظر خود را انتخاب کنید.",
      'parse_mode'=>"html",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text' => "ممبرواقعی👤", 'callback_data' => "aref10"],['text' => "ممبرفیک👤", 'callback_data' => "aref20"]
                    ],
]
])
]);
}
//////@chgoldteam/////
if($text == "زیرمجموعه گیری🗣"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📌در سیستم زیر مجموعه گیری زِدممبر می توانید با ارسال لینک اختصاصی خود به افراد دیگر، آنها را به این ربات دعوت کرده و الماس دریافت کنید😄

هر نفر که زیر مجموعه شما شود 10 الماس دریافت می کنید😄

پورسانت دهی 👈 0.2


برای دریافت بنر بر روی دکمه زیر کلیک کنید👇
https://t.me/$idbot?start=$from_id",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup' => json_encode([
"resize_keyboard"=>true,'one_time_keyboard' => true,
'inline_keyboard' => [
[
['text' => "📤دریافت بنر با لینک اختصاصی شما", 'callback_data' => "mam"]
],
]
])
]); 
}
if($data == "mam"){
 $pic="http://cdn.linkgrambot.com/1575528550_15755285503291.jpg";
bot('SendPhoto',[
'chat_id' => $chatid,
    'photo'=>$pic,
'message_id' => $message_id2,
'caption'=>"💎 زِد ممبر(نسخه جدید)💎
🌐 امکانات ربات زٍد ممبر👇
🎊 افزایش ممبر کانال و گروه به صورت رایگان 
📊تکمیل سریع سفارشات در کمترین زمان ممکن 
⚖️افزایش ممبر واقعی برای هر کانال 
👨‍👩‍👧‍👦استفاده از زیر مجموعه گیری برای افزایش الماس رایگان
✅دریافت 10 الماس رایگان با استفاده از لینک زیر
✅کاملا رایگان
😍دارای چالش ها و مسابقات متنوع هه همراه با جوایز نقدی😍
 همین حالا امتحان کنید 👇👇👇
https://t.me/ZMemberobot?start=$chatid,",
'parse_mode'=>"markdown",
]);
}
if($text == "🔖مشخصات من"){
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
$date = $datas['join_date'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💎💎💎💎💎
👤شماره کاربری شما 👈  $from_id
🎯 نوع پنل شما 👈 رایگان 
⌛️مدت اعتبار پنل  👈 نامحدود
📆تاریخ عضویت 👈 $date
➖➖➖➖
👥🌀تعداد زیرمجموعه ها 👈 $inv
➖➖➖➖
💎موجودی شما 👈   $coin الماس
🚀تعداد الماس پورسانت👈 $invcoin
💎💎💎💎💎",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
]); 
}
//========================================
elseif($text == 'برترین ها🏆'){
    for ($t=0;$t<=4;$t++){
        $users = json_decode(file_get_contents('data/'.top($t).'/'.top($t).'.json'),true);
        $invite = $users['inv'];
        $getid = top($t);
        if ($invite == ''){
            $invite = 0;
        }else{
            $invite = $invite;
        }
        $textbartar = $textbartar .= " ♻️ نام کاربر: <a href='tg://user?id=$getid'>$getid</a>
👤تعداد زیرمجموعه:  $invite \n\n";
    }
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'5️⃣ کاربر برتر این هفته از نظر تعداد زیرمجموعه👥 :'."\n\n".$textbartar."\n\n 
  نفر اول50الماس💎
     نفر دوم40الماس💎
     نفر سوم30الماس💎
     نفر چهارم20الماس💎
     نفر پنجم10الماس💎
      
        💎💎💎💎💎",
        'parse_mode'=>'html',
        'reply_to_message_id'=>$message_id
    ]); 
}
//----------------------------------------------------------------------
elseif($text == "مدیریت" or $text == "پنل" or $text == "/panel"){
if(in_array($chat_id,$sudo)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"سلام مدیر گرامی به پنل خوش آمدید!",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار ربات"]],
[['text'=>"پیام"],['text'=>"فروارد"]],
[['text'=>"تنظیم متن زیرمجموعه"],['text'=>"تنظیم متن استارت"]],
[['text'=>"اهدا الماس"],['text'=>"کسر الماس"]],
[['text'=>'الماس همگانی']],
[['text'=>"ارسال برترین ها"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
}
elseif(in_array($chat_id,$sudo) and $text == 'ارسال برترین ها'){
file_put_contents("data/$from_id/state.txt","coin11");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
یه حرف بزن
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
'resize_keyboard'=>true
])
]);
}
elseif($state == "coin11"){
file_put_contents("data/$from_id/state.txt","none");
file_get_contents("https://arefdn.power-host.ir/mem/best.php");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"درحال ارسال",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"/start"]
]
]
])
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"ارسال شد",
'parse_mode'=>"markdown",
]);
}

//----------------------------------------------------------------------
elseif(in_array($chat_id,$sudo) and $text == "آمار ربات"){	
$alluser = file_get_contents("data/ozvs.txt");
$alaki = explode("\n",$alluser);
$allusers = count($alaki);
$done = file_get_contents("data/done.txt");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تعداد کاربران ربات شما: $allusers
تبلیغات انجام شده : $done
",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار ربات"]],
[['text'=>"پیام"],['text'=>"فروارد"]],
[['text'=>"تنظیم متن زیرمجموعه"],['text'=>"تنظیم متن استارت"]],
[['text'=>"اهدا الماس"],['text'=>"کسر الماس"]],
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
//----------------------------------------------------------------------
elseif(in_array($chat_id,$sudo) and $text == "تنظیم متن استارت"){	
$datas["step"] = "starttext";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"متن استارت را ارسال کنید
به جای نام NAME
به جای یوزرنیم @USER
و به جای نام خانوادگی LAST
و به جای آیدی عددی ID

را در متن قرار دهید تا جایگزین شود!",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif(in_array($chat_id,$sudo) && $step == "starttext" && $text != "/start"){ 
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
file_put_contents("data/starttext.txt",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تنظیم شد!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار ربات"]],
[['text'=>"پیام"],['text'=>"فروارد"]],
[['text'=>"تنظیم متن زیرمجموعه"],['text'=>"تنظیم متن استارت"]],
[['text'=>"اهدا الماس"],['text'=>"کسر الماس"]],
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
//----------------------------------------------------------------------
elseif(in_array($chat_id,$sudo) and $text == "اهدا الماس"){	
$datas["step"] = "getid";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"آیدی عددی فرد را ارسال کنید!",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif(in_array($chat_id,$sudo) && $step == "getid" && $text != "/start"){ 
if(file_exists("data/$text/$text.json")){
$datas["step"] = "sendcoin";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
file_put_contents("data/id.txt",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"چند الماس به کاربر داده شود؟!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"همچین کاربری در ربات وجود ندارد
آیدی عددی درست ارسال کنید!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}}
elseif(in_array($chat_id,$sudo) && $step == "sendcoin" && $text != "/start"){ 
if(is_numeric($text)){
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
$id = file_get_contents("data/id.txt");
$datas = json_decode(file_get_contents("data/$id/$id.json"),true);
$inv = $datas["coin"];
$newin = $inv + $text;
$datas["coin"] = "$newin";
$outjson = json_encode($datas,true);
file_put_contents("data/$id/$id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"از طرف مدیریت به شما $text الماس داده شد!",
'parse_mode'=>"MarkDown",
]); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"الماس ارسال گردید!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار ربات"]],
[['text'=>"پیام"],['text'=>"فروارد"]],
[['text'=>"تنظیم متن زیرمجموعه"],['text'=>"تنظیم متن استارت"]],
[['text'=>"اهدا الماس"],['text'=>"کسر الماس"]],
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا عدد ارسال کنید!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}}
//----------------------------------------------------------------------
elseif(in_array($chat_id,$sudo) and $text == "کسر الماس"){	
$datas["step"] = "getids";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"آیدی عددی فرد را ارسال کنید!",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif(in_array($chat_id,$sudo) && $step == "getids" && $text != "/start"){ 
if(file_exists("data/$text/$text.json")){
$datas["step"] = "sendcoins";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
file_put_contents("data/id.txt",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"چند الماس از کاربر کسر شود؟!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"همچین کاربری در ربات وجود ندارد
آیدی عددی درست ارسال کنید!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}}
elseif(in_array($chat_id,$sudo) && $step == "sendcoins" && $text != "/start"){ 
if(is_numeric($text)){
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
$id = file_get_contents("data/id.txt");
$datas = json_decode(file_get_contents("data/$id/$id.json"),true);
$inv = $datas["coin"];
$newin = $inv - $text;
$datas["coin"] = "$newin";
$outjson = json_encode($datas,true);
file_put_contents("data/$id/$id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"از طرف مدیریت از شما $text الماس کسر گردید!",
'parse_mode'=>"MarkDown",
]); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"الماس ارسال گردید!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار ربات"]],
[['text'=>"پیام"],['text'=>"فروارد"]],
[['text'=>"تنظیم متن زیرمجموعه"],['text'=>"تنظیم متن استارت"]],
[['text'=>"اهدا الماس"],['text'=>"کسر الماس"]],
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا عدد ارسال کنید!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}}
//----------------------------------------------------------------------
elseif (in_array($chat_id,$sudo) and $text == 'الماس همگانی'){
$datas["step"] = 'gem_all';
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'مقدار الماس جهت اهدا #همگانی را به صورت عدد لاتین ارسال نمایید :',
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif(in_array($chat_id,$sudo) && $step == "gem_all" && $text != "/start"){
if (is_numeric($text)){
$datas["step"] = null;
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
$file = file_get_contents('data/ozvs.txt');
$members = explode("\n",$file);
foreach ($members as $all){
$edit = json_decode(file_get_contents("data/$all/$all.json"),true);
$edit['coin'] += $text;
$outjson2 = json_encode($edit,true);
file_put_contents("data/$all/$all.json",$outjson2);
bot('sendMessage',[
'chat_id'=>$all,
'text'=>"#همگانی ‼️
به پاس قدر دانی از شما کاربران گرامی از طرف مدیریت مقدار $text الماس به همه کاربران ربات اهدا گردید.",
'parse_mode'=>"MarkDown",
]); 
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'با موفقیت ارسال گردید !',
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'توجه ! فقط به صورت عدد لاتین مجاز میباشد یک بار دیگر سعی کنید.',
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]);
}
}
//////@chgoldteam/////
//----------------------------------------------------------------------
elseif(in_array($chat_id,$sudo) and $text == "تنظیم متن زیرمجموعه"){	
$datas["step"] = "zirtext";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"متن زیرمجموعه گیری را ارسال کنید
به جای نام NAME
به جای لینک LINK
و به جای نام خانوادگی LAST
و به جای آیدی عددی ID

را در متن قرار دهید تا جایگزین شود!",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif(in_array($chat_id,$sudo) && $step == "zirtext" && $text != "/start"){ 
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
file_put_contents("data/zirtext.txt",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تنظیم شد!",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار ربات"]],
[['text'=>"پیام"],['text'=>"فروارد"]],
[['text'=>"تنظیم متن زیرمجموعه"],['text'=>"تنظیم متن استارت"]],
[['text'=>"اهدا الماس"],['text'=>"کسر الماس"]],
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
//----------------------------------------------------------------------
elseif(in_array($chat_id,$sudo) and $text == "پیام"){	
$datas["step"] = "send2all";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"پیام خود رو بفرست",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif(in_array($chat_id,$sudo) && $step == "send2all" && $text != "/start"){ 
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
$all_member = fopen( "data/ozvs.txt", 'r');
while( !feof( $all_member)) {
$user = fgets( $all_member);
bot('sendMessage',[
'chat_id'=>$user,
'text'=>$text,
'parse_mode'=>"MarkDown",
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"پیام به همه ارسال شد",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار ربات"]],
[['text'=>"پیام"],['text'=>"فروارد"]],
[['text'=>"تنظیم متن زیرمجموعه"],['text'=>"تنظیم متن استارت"]],
[['text'=>"اهدا الماس"],['text'=>"کسر الماس"]],
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
//----------------------------------------------------------------------
elseif(in_array($chat_id,$sudo) and $text == "فروارد"){
$datas["step"] = "f2all";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"پیام خودت رو فور بده اینجا",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif($text != "/start" && in_array($chat_id,$sudo) && $step == "f2all"){
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("data/$from_id/$from_id.json",$outjson);
$all_member = fopen( "data/ozvs.txt", 'r');
while( !feof( $all_member)) {
$user = fgets( $all_member);
bot('ForwardMessage',[
'chat_id'=>$user,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"فروارد همگانی به همه اعضای ربات فروارد شد",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"آمار ربات"]],
[['text'=>"پیام"],['text'=>"فروارد"]],
[['text'=>"تنظیم متن زیرمجموعه"],['text'=>"تنظیم متن استارت"]],
[['text'=>"اهدا الماس"],['text'=>"کسر الماس"]],
[['text'=>"/start"]],
],
"resize_keyboard"=>true,'one_time_keyboard' => true,
])
]); 
}
elseif($text1 == "ساخت کد هدیه🎉" && $from_id == $admin){
file_put_contents("data/$from_id/step.txt","name");
$channel = "@Hectorteam";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"کد هدیه را وارد کنید:",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"برگشت↪"]
]
]
])
]);
}
elseif($step == "name"){
file_put_contents("data/code.txt",$text);
file_put_contents("data/$from_id/step.txt","te");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"خب حالا تعداد سکه ها چقدر باشه",
'replu_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"برگشت↪"]
]
]
])
]);
}
//////@chgoldteam/////
elseif($step == "te"){
file_put_contents("data/sec.txt",$text);
file_put_contents("data/$from_id/step.txt","end");
$code = file_get_contents("data/code.txt");
$sec = file_get_contents("data/sec.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"کد هدیه ساخته شد و به کانال ارسال شد",
'replu_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"برگشت↪"]
]
]
])
]);
bot('sendMessage',[
'chat_id'=>"@".$channel,
'text'=>"کد جدید ساخته شد :🔖

📍کد :  $code 
📍تعداد سکه : $sec 💰

کد را در بخش (حساب کاربری📂🗃) و قسمت (کد هدیه🧧) وارد کنید
                        👇🏻👇🏻👇🏻",
'parse_mode'=>'html',
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[
['text'=>"ورود به ربات🧬",'url'=>"https://telegram.me/HectorCrbot"]
]]
 ])
 ]);
}
/*
اپنش شده توسط گلد تیم نویسنده عارف دی ان کص ننت اگه منبع نزنی
@chgoldteam
انقد نادیده گرفتیم فک کردن کوریم
#gold™
#daie™
*/
unlink('error_log');
?>
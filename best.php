<?php
/*
اپنش شده توسط گلد تیم نویسنده عارف دی ان کص ننت اگه منبع نزنی
@chgoldteam
انقد نادیده گرفتیم فک کردن کوریم
#gold™
#daie™
*/
ob_start();
error_reporting(0);
include('index.php');
date_default_timezone_set('Asia/tehran');
//==========[codes]==========//
// subset
for($t=0;$t<=4;$t++){
    $users = json_decode(file_get_contents('data/'.top($t).'/'.top($t).'.json'),true);
    $invite = $users['inv'];
    $getid = top($t);
    if ($invite == ''){
        $invite = 0;
    }else{
        $invite = $invite;
    }
    if($t==0) { $al = 50; }
    if($t==1) { $al = 40; }
    if($t==2) { $al = 30; }
    if($t==3) { $al = 20; }
    if($t==4) { $al = 10; }
    $users2 = json_decode(file_get_contents('data/'.$getid.'/'.$getid.'.json'),true);
    $users2['coin'] += $al;
    file_put_contents('data/'.$getid.'/'.$getid.'.json',json_encode($users2,true));
    $bartar1 = $bartar1 .= " ♻️ نام کاربر: <a href='tg://user?id=$getid'>$getid</a>
👤تعداد زیرمجموعه:  $invite 
مقدار الماس اهدا شده : $al 💎\n\n";
}

$week_count = file_get_contents('data/week_count.txt');
$cn = $week_count + 1;
file_put_contents('data/week_count.txt',$cn);

foreach(str_replace('.json',null,array_diff(scandir('data'),['.','..'])) as $all)
{
    bot('sendMessage',['chat_id'=>$all,'text'=>"چالش برترین کاربران هفته $cn ام با موفقیت به اتمام رسید 🎉
    وقت زیرمجموعه گیریست💪
    
    جوایز اهدا شده به نفرات اول تا پنجم هفته گذشته به صورت زیر میباشد :\n\n".$bartar1.'=============================='."\n\n",'parse_mode'=>"HTML"]);
    $users = json_decode(file_get_contents('data/'.$all.'/'.$all.'.json'),true);
    $users['inv'] = 0;
    file_put_contents('data/'.$all.'/'.$all.'.json',json_encode($users,true));
}

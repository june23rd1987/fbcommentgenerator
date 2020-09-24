<?php

//var_dump($_POST);


function random_name_avatar() {
    
    $random = array();
    
    $gender = "male";
    $randgen = mt_rand(0, 1);
    if($randgen == 0)
    {
        $gender = "female";
    }
    
    $random_name = file_get_contents("random-name-".$gender.".txt");
    $name_array = explode("\n", $random_name);
    $name_count = count($name_array);
    $index = array_rand($name_array, 1);
    $random['name'] = $name_array[$index];
    
    
    $imagesDir = 'Avatars/'.$gender.'/';
    $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $random['avatar'] = $images[array_rand($images)];
    
    return $random;
}



function require_auth() {
	$AUTH_USER = 'admin';
	$AUTH_PASS = 'minda123';
	header('Cache-Control: no-cache, must-revalidate, max-age=0');
	$has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
	$is_not_authenticated = (
		!$has_supplied_credentials ||
		$_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
		$_SERVER['PHP_AUTH_PW']   != $AUTH_PASS
	);
	if ($is_not_authenticated) {
		header('HTTP/1.1 401 Authorization Required');
		header('WWW-Authenticate: Basic realm="Access denied"');
		exit;
	}
}

require_auth();

$random = random_name_avatar();

//var_dump($random);

$avatar1 = "https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.0-1/cp0/p32x32/117540164_101359895022909_6668687611056593554_o.jpg?_nc_cat=101&_nc_sid=7206a8&_nc_eui2=AeEWpBGASWb9xx3uQObrm_9a2T3TRkquYi3ZPdNGSq5iLVNtqJaxRFA4MAu-aRBwxt1rikIeYCF8Zme9Jun53_qO&_nc_ohc=OpLha4bnb_wAX_Urz-c&_nc_ht=scontent.fmnl4-2.fna&oh=aa90f6f0c27fc0aaaa65a8f25dfc0ec8&oe=5F87EBEC";

$avatar1 = $random['avatar'];

if(isset($_POST['q1_avatar1']))
{
    $avatar1 = trim($_POST['q1_avatar1']);
}


$name1 = "Roces Aldovino Queen-anne";
$name1 = $random['name'];
if(isset($_POST['q10_name1']))
{
    $name1 = trim($_POST['q10_name1']);
}

$message1 = "How much po?????";
if(isset($_POST['q11_message1']))
{
    $message1 = trim($_POST['q11_message1']);
}








$avatar2 = "https://scontent.fmnl4-4.fna.fbcdn.net/v/t1.0-1/cp0/p24x24/117870933_107219487770759_4243827622849147869_o.png?_nc_cat=100&_nc_sid=1eb0c7&_nc_eui2=AeHDYSdoK48DgXDiJIen465AMGvWrFQaorYwa9asVBqitmsiStF0H0x2vTFdTS7ygudryvtAS0D4z-gn9Nldg1aA&_nc_ohc=-Xwtu91KEB8AX-fFK_x&_nc_ht=scontent.fmnl4-4.fna&oh=b5614a1e0856802d3803e7426e61e4de&oe=5F884985";
if(isset($_POST['q12_avatar2']))
{
    $avatar2 = trim($_POST['q12_avatar2']);
}



$name2 = "Happy Deals PH";
if(isset($_POST['q13_name2']))
{
    $name2 = trim($_POST['q13_name2']);
}



$message2 = "
Hi ".$name1.",
Activated Charcoal Tooth Polish
Original Mall Price: ₱1890❌
⌛THIS OFFER IS LIMITED TIME ONLY⌛
Buy 1 Get 3 Free Price: ₱945✔️
May libre din po itong bamboo char toothpaste if you order today bali 5 items po ang i dedeliver namin sa inyo.
🛵Free Shipping / Cash on Delivery
____
Salamat Po,
Happy Deals PH
";
if(isset($_POST['q14_message2']))
{
    $message2 = trim($_POST['q14_message2']);
}


$message2 = wordwrap($message2, 50, "<br />", false);


$prodimage1 = "https://scontent.fmnl4-6.fna.fbcdn.net/v/t1.0-0/p75x225/119742513_121724762986898_5022855644067040924_n.png?_nc_cat=108&_nc_sid=dbeb18&_nc_eui2=AeH-a69DXVlajw0cUCYJRMu9PBDT0Hlb2Ws8ENPQeVvZay1Cj1NU1b2h6SQUrl7_1CmhmCgOsRSG6QXSsIl3OKK-&_nc_ohc=zO8eBMZKtnIAX-Mxmqx&_nc_ht=scontent.fmnl4-6.fna&oh=e41692ee20da487a27da6f1c59cdc571&oe=5F8B010F";
if(isset($_POST['q15_prodimage']))
{
    $prodimage1 = trim($_POST['q15_prodimage']);
}



$minute1 = "15m";
if(isset($_POST['q3_minutes1']))
{
    $minute1 = trim($_POST['q3_minutes1']);
}

if(isset($_POST['q19_randomize1']))
{
    $randmin1 = mt_rand(1, 59);
    $minute1 = $randmin1."m";
}






$minute2 = "13m";
if(isset($_POST['q16_minutesAgo2']))
{
    $minute2 = trim($_POST['q16_minutesAgo2']);
}

if(isset($_POST['q19_randomize1']))
{
    $randmin2 = mt_rand(1, $randmin1);
    $randmin2 = mt_rand(1, $randmin1);
    $randmin2 = $randmin1 - $randmin2;
    $minute2 = $randmin2."m";
}




$avatar3 = "https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.0-1/cp0/p24x24/89993835_602522916965178_5133820425188409344_n.jpg?_nc_cat=101&_nc_sid=7206a8&_nc_eui2=AeFk7S-R45iGooJDyS479OJqvtnZBXd8Ojy-2dkFd3w6POn7Tydsd_EmvFigECas0_zfOATyLl7c5HEHXGv66lDN&_nc_ohc=A96gKgtzc6wAX-b8cpt&_nc_ht=scontent.fmnl4-2.fna&oh=7995d82fca18efc8d51b6f7f04af37d1&oe=5F8A5056";
if(isset($_POST['q17_avatar3']))
{
    $avatar3 = trim($_POST['q17_avatar3']);
}





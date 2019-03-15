<?php
include  $_SERVER[ 'DOCUMENT_ROOT' ]."/module/mail_config.php";
include  $_SERVER[ 'DOCUMENT_ROOT' ]."/module/mail_fnc.php";

$to_mailaddress = $_POST['email'];
$mailttl = "Your inquiry has been completed.";
$mailtxt = "Your inquiry has been completed.
Please wait until a reply arrives.";
mail_send_form($to_mailaddress, $mailttl, $mailtxt);

$mailttl = "お問い合わせを受け付けました";
$mailtxt = "お問い合わせを受け付けました

===============
お名前：".$_POST['name']."
メールアドレス：".$_POST['email']."
メッセージ：".$_POST['msg']."

";
mail_send_form(MAIL_admin, $mailttl, $mailtxt);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Contact - PILE Project</title>
<meta name="description" content="">
<?php include $_SERVER['DOCUMENT_ROOT']."/include/head.php";?>
</head>
<body id="contact">
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

<main>
<!-- section -->
<section>
	<div class="wrap">
		<h2>Inquiry <span>complete</span></h2>
		<p>Text5 <span>Text</span>Your inquiry has been completed.<br>Please wait until a reply arrives.</p>
		<a href="/">BACK</a>
	</div>
</section>
<!-- /section -->

</main>
<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>
</body>
</html>
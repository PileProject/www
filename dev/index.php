<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Products - PILE Project</title>
<meta name="description" content="We, PILE Project, provide materials for teaching children how to program joyfully, aiming to realize a creative world where everyone can program.">
<?php include $_SERVER['DOCUMENT_ROOT']."/include/head.php";?>
</head>
<body id="top">
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

<main>
<!-- section -->
<section>
<div class="bg_1 box_1">
	<div class="wrap">
		<img src="/asset/images/top_img_1.png" width="461" height="750" />
		<h1>Let's learn to program<br>easily and joyfully</h1>
		<p>The first step in making great things</p>
		<a href="/product/">GO TO PRODUCT</a>
	</div>
</div>
</section>
<!-- /section -->
<!-- section -->
<section>
<div class="bg_2 box_2">
	<div class="wrap">
		<h2>WHAT <span>CAN</span> WE OFFER?</h2>
		<p>Our mission is to provide a gate to "STEM (Science, Technology, Engineering and Mathematics)" fields for children.<br>
		Children can foster logical thinking power by creating programs.</p>
	</div>
</div>
</section>
<!-- /section -->
<!-- section -->
<section>
<div class="wrap box_3">
	<h2>MAIN MEDIA</h2>
	<ul>
	<li><img src="/asset/images/top_media_1.png" width="222" /></li>
	<li><img src="/asset/images/top_media_2.png" width="354" /></li>
	<li><img src="/asset/images/top_media_3.png" width="217" /></li>
	</ul>
</div>
</section>
<!-- /section -->
<!-- section -->
<section>
<div class="bg_3 box_4">
	<div class="wrap">
		<h2>LET’S CONTACT <span>US</span></h2>

		<form method="post" action="/contact/comp.php" name="form1">
		<input type="text" name="name" placeholder="Your Name">
		<input type="text" name="email" placeholder="Your email">
		<textarea name="msg">Your message to us</textarea>
		</form>

		<a href="#" onclick="post_form(); return false;">SEND IT NOW</a>
	</div>
</div>
</section>
<!-- /section -->

</main>

<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>
<script type="text/javascript">
function post_form(){

	var er = "";
	if($("[name=name]").val()==""){
		er = er + "A name has not been entered.\n";//"名前が入力されていません。\n";
	}

	var address = $("[name=email]").val();
	var regexp = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;
	if($("[name=email]").val()==""){
		er = er + "E-mail address is not entered.\n";//"メールアドレスが入力されていません。\n";
	}
	else if (regexp.test(address)) {
	} else {
		er = er + "E-mail address is not entered correctly.\n";//"メールアドレスが正しく入力されていません。\n";
	}

	if($("[name=msg]").val()=="" || $("[name=msg]").val()=="Your message to us"){
		er = er + "A message has not been entered.";//"メッセージが入力されていません。\n";
	}
	if(er!=""){
		alert(er);
	}else{
		document.form1.submit();
	}

}
</script>
</body>
</html>

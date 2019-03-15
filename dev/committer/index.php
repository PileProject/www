<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Committers - PILE Project</title>
<meta name="description" content="Our products are open-source and a lot of talented people are helping the company make wonderful products.  Let's check out active committers!">
<?php include $_SERVER['DOCUMENT_ROOT']."/include/head.php";?>
</head>
<body id="committers">
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

<main>
<!-- section -->
<section>
	<div class="bg_1 box_1">
		<div class="wrap">

			<h1>MY NAME IS <span>TATSUYA IWANARI</span> AND <br>I AM SOFTWARE ENGINEER</h1>

			<p>I create awesome app for all children,<br>
			which will make their life easier and smarter</p>

			<h2>PILE <span>PROJECT</span></h2>

		</div>
	</div>
</section>
<!-- /section -->
<!-- section -->
<section>
	<div class="wrap">

		<div class="box_2">
			<h2>OUR TEAM</h2>
			<ul>
				<li class="act">MAKOTO SHIMAZU</li>
				<li>name2</li>
				<li>name3</li>
				<li>name4</li>
				<li>name5</li>
				<li>name6</li>
			</ul>
			<img src="/asset/images/comitter_bg_2.png" />
		</div>

		<div class="bg_2 box_3">
			<ul>
				<li class="act">
					<h3>MAKOTO <br>SHIMAZU</h3>
					<h4>Hardware Engineer</h4>
					<p>Computer hardware engineers research, design, develop, and test computer systems and components such as processors, circuit boards, memory devices, networks, and routers. These engineers discover new directions in computer hardware.</p>
				</li>
				<li>
					<h3>name2</h3>
					<h4>position</h4>
					<p>text</p>
				</li>
				<li>
					<h3>name3</h3>
					<h4>position</h4>
					<p>text</p>
				</li>
				<li>
					<h3>name4</h3>
					<h4>position</h4>
					<p>text</p>
				</li>
				<li>
					<h3>name5</h3>
					<h4>position</h4>
					<p>text</p>
				</li>
				<li>
					<h3>name6</h3>
					<h4>position</h4>
					<p>text</p>
				</li>
			</ul>
			
		</div>

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
$(function(){
	$(".box_2 li").addClass("a");
	$(".box_2 li").removeClass("a");

	$('.box_2 li').each(function(index, element) {
		$(this).addClass("a"+index);
	});
	$('.box_3 li').each(function(index, element) {
		$(this).addClass("a"+index);
	});
	
	$(".box_2 li").click(function(){
		$(".box_2 li").removeClass("act");
		var c = $(this).attr("class");
		$(".box_3 li").hide();
		$(".box_3 li."+c).show();
		$(this).addClass("act");
	});
});
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
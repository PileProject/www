<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Activities - PILE Project</title>
<meta name="description" content="PILE is holding several workshops and providing a package (app/robot/curriculum) to a science museum. Here you can see our activities.">
<?php include $_SERVER['DOCUMENT_ROOT']."/include/head.php";?>
</head>
<body id="activities">
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

<main>
<!-- section -->
<section>
	<div class="bg_1 box_1">
		<div class="wrap">
			<nav>
				<ul>
					<li>LATEST</li>
				</ul>
			</nav>
			<ul class="content">
				<li>
					<img src="/asset/images/activity_img_1.png" />
					<h1>WE DEVELOP NEW ROBOT<br>FOR 2017, NEW GENERATION</h1>
					<p>Coming soon, now we are making this<br>newest robot for a next workshop…</p>
				</li>
				<li>
					<img src="/asset/images/activity_img_2.png" />
					<h1>WE DID THE WORKSHOP<br>WITH HIGHSCHOOL STUDENTS</h1>
					<p>Up to 12 wireless hours of music, 30 minute quick charge for 3+ wireless hours and unlimited hours in analog wired</p>
				</li>
				<li>
					<img src="https://placehold.jp/760x390.png" />
					<h1>TEXT3</h1>
					<p>TextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextText…</p>
				</li>
				<li>
					<img src="https://placehold.jp/760x390.png" />
					<h1>TEXT4</h1>
					<p>TextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextText…</p>
				</li>
				<li>
					<img src="https://placehold.jp/760x390.png" />
					<h1>TEXT5</h1>
					<p>TextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextText…</p>
				</li>
				<li>
					<img src="https://placehold.jp/760x390.png" />
					<h1>TEXT6</h1>
					<p>TextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextText…</p>
				</li>
				<li>
					<img src="https://placehold.jp/760x390.png" />
					<h1>TEXT7</h1>
					<p>TextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextText…</p>
				</li>
				<li>
					<img src="https://placehold.jp/760x390.png" />
					<h1>TEXT8</h1>
					<p>TextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextTextText…</p>
				</li>
			</ul>
			<p class="next">次へ</p>
			<p class="prev">前へ</p>
		</div>
	</div>
</section>
<!-- /section -->
</main>
<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>
<script type="text/javascript">
$(function(){
	$(".content").attr("p",0);

	$(".content li").addClass("a");
	$(".content li").removeClass("a");

	$('.content li').each(function(index, element) {
		$(this).addClass("a"+index);
	});

	$(".content li.a0").addClass("act");
	$(".content li.a1").addClass("act");

	$(".prev").css("opacity",0.3);

	$(".next").click(function(){
		var p = parseInt($(".content").attr("p"));
		var p1 = p;

		var num = parseInt($(".content li").length);

		if( (p*2)+2 <num ){
			$(".content").attr("p",(p+1));
			p = (p+1)*2;

			$(".content li").removeClass("act");
			$(".content li").eq(p).addClass("act");
			$(".content li").eq((p+1)).addClass("act");
		}
		if( (p1*2)+5 > num ){
			$(".next").css("opacity",0.3);
		}
		$(".prev").css("opacity",1);
	});

	$(".prev").click(function(){
		var p = parseInt($(".content").attr("p"));

		if(p>0){
			$(".content").attr("p",(p-1));
			p = (p-1)*2;

			$(".content li").removeClass("act");
			$(".content li").eq(p).addClass("act");
			$(".content li").eq((p+1)).addClass("act");
		}
		if(p>1){
		}else{
			$(".prev").css("opacity",0.3);
		}
		$(".next").css("opacity",1);
	});
});
</script>
</body>
</html>

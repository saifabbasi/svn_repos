<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Bevo for Networks</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="icon" href="/Themes/BevoMedia/favicon.ico" type="image/x-icon" />
	
	<meta name="keywords" content="<?=$this->{'Instance/PageKeywords'};?>" />
	<meta name="description" content="<?=$this->{'Instance/PageDescription'};?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link type='text/css' rel='stylesheet' href='/Themes/BevoMedia/main-style.css' />
	
	<!--[if IE 6]>
		<link type='text/css' rel='stylesheet' href='/Themes/BevoMedia/main-style-ie6.css' />
	<![endif]-->
	
	 
	<link rel="stylesheet" type="text/css" href="/JS/Dashboard/shadowbox.css">
	
	<script type="text/javascript" src="<?=isset($_SERVER['HTTPS'])?'https':'http'?>://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script src="/JS/Dashboard/shadowbox.js" type="text/javascript"></script>
	
		
	<script type="text/javascript" src="/JS/global.js"></script>
</head>

<body class="baccount_details">

<script type="text/javascript">

Shadowbox.init();

</script>




<div id="wrapper">

	<div id="header">
		<div class="shell">
			<h1 id="logo"><a href="/">bevomedia eXchange : for performance marketing</a></h1>
			<div id="navigation">
				<ul>
					<li><a href="/BevoMedia/Index/AboutUs.html">ABOUT US</a></li>
					<li><a href="#">EXECUTIVES</a></li>
					<li><a href="/BevoMedia/Index/Partners.html">PARTNERS</a></li>
					<li><a href="#">INVESTORS</a></li>
					<li><a href="/BevoMedia/Index/Press.html">PRESS</a></li>
					<li><a href="/BevoMedia/Index/Careers.html">CAREERS</a></li>
				</ul>
			</div>
			<div id="topbar">
				<div class="right">
					<a href="#" class="for-networks">For Networks</a>
					<a href="#" class="for-affiliates">For Affiliates</a>
					<div class="offerhub">
						<small>INDUSTRY<br />OFFER<br />HUB</small>
						<form action="" method="post" class="left" onsubmit="$('#SearchGo').click(); return false;">
							<div class="field-holder">
								<input type="text" id="SearchText" class="field blink" value="type any offer name or vertical..." title="type any offer name or vertical..." />
								<input type="submit" class="submit" id="SearchGo" value="Go" title="Go" />
							</div>
						</form>
					</div>
				</div>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
	</div>
	
	<div id="main">
		<div class="shell">




			<?=$this->{'Instance/ViewContent'};?>



		<div class="cl">&nbsp;</div>
		</div>
	</div>
	
	<div id="footer">
		<div class="shell">
			<div class="logo"><a href="#">bevomedia eXchange : for performance marketing</a></div>
			<p class="copyright">&copy; 2011 - All Rights Reserved. it's soapdesigned.com</p>
		</div>
	</div>





<script type="text/javascript">
$('a.j_shadowbox').live('click', function() {
	Shadowbox.open({
		content: $(this).attr('href'),
		player: 'iframe',
		title: $(this).attr('title'),
		width: $(this).attr('width') ? $(this).attr('width') : 640,
		height: $(this).attr('height') ? $(this).attr('height') : 480,
	});
	return false;
});

$('#SearchGo').click(function() {

	var url = "http://offers.bevomedia.com/BevoMedia/OffersFront/Browse.html#get=searchresults&search="+$('#SearchText').val()+"&type=lead&include_mysaved=1&numresults=100&page=1";
	window.location = url;
	return false;
	
});
</script>

</body>
</html>

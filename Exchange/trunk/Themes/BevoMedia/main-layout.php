<?php	
	function isActivePage($page) {
		$topmenuPages = array( //module => nav flag
			'AboutUs' => 'about',
			'Executives' => 'executives',
			'Partners' => 'partners',
			'Investors' => 'investors',
			'Press' => 'press',
			'Careers' => 'careers',
			
			'BevoForNetworks' => 'nw',
			'AffiliatePortal' => 'aff'
		);
		
		if(array_key_exists(Zend_Registry::get('Instance/Function'), $topmenuPages) && $page == $topmenuPages[Zend_Registry::get('Instance/Function')]) {
			return ' active';
		}
	}//isActivePage()
	
	
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>The BevoMedia Exchange</title>
	
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

<body class="b_<?php echo strtolower(Zend_Registry::get('Instance/Function')); ?>">

<script type="text/javascript">
	Shadowbox.init();
</script>

<?php include 'Themes/BevoMedia/bevoswitch.php'; ?>

<div id="wrapper">

	<div id="header">
		<div class="shell">
			<h1 id="logo"><a href="/">bevomedia eXchange : for performance marketing</a></h1>
			<div id="navigation">
				<ul>
					<li><a class="btn topabout<?=isActivePage('about');?>" href="/BevoMedia/Index/AboutUs.html">ABOUT US</a></li>
					<li><a class="btn topexecutives<?=isActivePage('executives');?>" href="/BevoMedia/Index/Executives.html">EXECUTIVES</a></li>
					<li><a class="btn toppartners<?=isActivePage('partners');?>" href="/BevoMedia/Index/Partners.html">PARTNERS</a></li>
					<li><a class="btn topinvestors<?=isActivePage('investors');?>" href="/BevoMedia/Index/Investors.html">INVESTORS</a></li>
					<li><a class="btn toppress<?=isActivePage('press');?>" href="/BevoMedia/Index/Press.html">PRESS</a></li>
					<li><a class="btn topcareers<?=isActivePage('careers');?>" href="/BevoMedia/Index/Careers.html">CAREERS</a></li>
				</ul>
			</div>
			<div id="topbar">
				<div class="right">
					<a class="btn topnw<?=isActivePage('nw');?>" href="/BevoMedia/Index/BevoForNetworks.html">For Networks</a>
					<a class="btn topaff<?=isActivePage('aff');?>" href="/BevoMedia/Index/AffiliatePortal.html">For Affiliates</a>
					
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
			<ul class="mainfoot">
				<li><a href="/BevoMedia/Index/BevoForNetworks.html">Bevo for Networks</a></li>
				<li><a href="/BevoMedia/Index/AffiliatePortal.html">Bevo Affiliate Portal</a></li>
			</ul>
			<ul class="subfoot">
				<li><a href="/BevoMedia/Index/AboutUs.html">About Us</a></li>
				<li><a href="/BevoMedia/Index/Executives.html">Executives</a></li>
				<li><a href="/BevoMedia/Index/Partners.html">Partners</a></li>
				<li><a href="/BevoMedia/Index/Investors.html">Investors</a></li>
				<li><a href="/BevoMedia/Index/Press.html">Press</a></li>
				<li><a href="/BevoMedia/Index/Careers.html">Careers</a></li>
				<br />
				<li><a href="/BevoMedia/Index/Terms.html">Terms &amp; Conditions</a></li>
				<li><a href="/BevoMedia/Index/Privacy.html">Privacy Policy</a></li>
			</ul>
			<p class="copyright">&copy; 2011 - All Rights Reserved. Bevo Media - San Diego, CA 92130</p>
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

<script type="text/javascript"> 
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); 
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script> 
<script type="text/javascript"> 
var pageTracker = _gat._getTracker("UA-6678573-1");
pageTracker._trackPageview();
</script>

</body>
</html>

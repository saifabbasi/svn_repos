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
			return ' class="active"';
		}
	}//isActivePage()
	
	
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>The Bevo Media Exchange - Corporate Site - The Performance Marketing Exchange For Affiliate Marketing</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="icon" href="/Themes/BevoMedia/favicon.ico" type="image/x-icon" />
	
	<meta name="keywords" content="<?=$this->{'Instance/PageKeywords'};?>" />
	<meta name="description" content="<?=$this->{'Instance/PageDescription'};?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link type='text/css' rel='stylesheet' href='/Themes/BevoMedia/main-style.css' />
	
	<!--[if IE 6]>
		<link type='text/css' rel='stylesheet' href='/Themes/BevoMedia/main-style-ie6.css' />
	<![endif]-->
	
	 
	<link rel="stylesheet" type="text/css" href="/JS/Dashboard/shadowbox.css" />
	
	<script type="text/javascript" src="<?=isset($_SERVER['HTTPS'])?'https':'http'?>://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script src="/JS/Dashboard/shadowbox.js" type="text/javascript"></script>
	
		
	<script type="text/javascript" src="/JS/global.js"></script>
</head>

<body class="b_<?php echo strtolower(Zend_Registry::get('Instance/Function')); ?>">

<script type="text/javascript">
	Shadowbox.init();
</script>

<div class="body">
	<div id="bevoswitch">
		<div class="shell">
			<a class="active floatleft" href="/">Bevo Media Exchange<b></b></a>
			<a class="floatleft" href="http://ads.bevomedia.com" target="_blank">Bevo Ads<b></b></a>
			<a class="floatleft" href="http://affportal.bevomedia.com/" target="_blank">Bevo Affiliate Portal</a>
			<a class="floatleft" href="http://networks.bevomedia.com/" target="_blank">Bevo for Networks</a>
			<a class="floatleft" href="http://offers.bevomedia.com/" target="_blank">Bevo OfferHub</a>
			
			<a class="icon blog floatright" href="http://blog.bevomedia.com/" target="_blank" title="The official Bevo Media Blog">Official BevoMedia Blog</a>
			<a class="icon facebook floatright" href="http://www.facebook.com/bevomedia" target="_blank" title="Find Bevo Media on Facebook">Find Bevo Media on Facebook</a>
			<a class="icon twitter floatright" href="http://twitter.com/BevoMedia" target="_blank" title="Follow Bevo Media on Twitter">Follow Bevo Media on Twitter</a>
			<div class="clear"></div>
		</div>
	</div>
	
	<div id="header">	
		<div class="xstripe">
			<div class="shell">
				<div class="hilite"></div>
			</div>
		</div>
		
		<div id="nav">
			<div class="shell">
				<h1 id="logo"><a href="/" title="Home">The Bevo Media Exchange - Corporate Site - The Performance Marketing Exchange For Affiliate Marketing</a></h1>
				<div id="menu">
					<a<?=isActivePage('about');?> href="/BevoMedia/Index/AboutUs.html">About us<b></b></a>
					<a<?=isActivePage('executives');?> href="/BevoMedia/Index/Executives.html">Executives<b></b></a>
					<a<?=isActivePage('partners');?> href="/BevoMedia/Index/Partners.html">Partners<b></b></a>
					<a<?=isActivePage('investors');?> href="/BevoMedia/Index/Investors.html">Investors<b></b></a>
					<a<?=isActivePage('press');?> href="/BevoMedia/Index/Press.html">Press<b></b></a>
					<a<?=isActivePage('careers');?> href="/BevoMedia/Index/Careers.html">Careers<b></b></a>
				</div>			
				<div class="clear"></div>
			</div><!--close .shell-->
		</div><!--close #nav-->
	</div><!--close header-->
	
	<div id="main">
		<div id="bgi"></div>		
		<div class="shell">
			<?=$this->{'Instance/ViewContent'};?>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<div class="blank"></div>
</div><!--close .body-->

<?php /*
<div class="xstripe footer">
	<div class="shell">
		<div class="hilite"></div>
	</div>
</div>
*/ ?>
<div id="footer">
	<div class="shell">
		<div class="logo"><a href="#">bevomedia eXchange : for performance marketing</a></div>
		<div class="menu">
			<div class="main">
				<span>Solutions <b>&#x203A;</b></span>
				<a href="http://ads.bevomedia.com" target="_blank">Bevo Ads<b></b></a>
				<a href="http://affportal.bevomedia.com/" target="_blank">Bevo Affiliate Portal</a>
				<a href="http://networks.bevomedia.com/" target="_blank">Bevo for Networks</a>
				<a href="http://offers.bevomedia.com/" target="_blank">Bevo OfferHub</a>
			</div>
			
			<div class="sub">
				<a<?=isActivePage('about');?> href="/BevoMedia/Index/AboutUs.html">About us</a>
				<a<?=isActivePage('executives');?> href="/BevoMedia/Index/Executives.html">Management</a>
				<a<?=isActivePage('partners');?> href="/BevoMedia/Index/Partners.html">Partners</a>
				<a<?=isActivePage('investors');?> href="/BevoMedia/Index/Investors.html">Investors</a>
				<a<?=isActivePage('press');?> href="/BevoMedia/Index/Press.html">Press</a>
				<a<?=isActivePage('careers');?> href="/BevoMedia/Index/Careers.html">Careers</a>
				<br />
				<p>
					&copy; <?php echo date('Y'); ?> - All Rights Reserved. Bevo Media - Santa Clara, CA 95054
					<a href="/BevoMedia/Index/Terms.html">Terms &amp; Conditions</a>
					<a href="/BevoMedia/Index/Privacy.html">Privacy Policy</a>
				</p>
			</div>
		</div><!--close menu-->
		<div class="clear"></div>
		
	</div><!--close shell-->
</div><!--close footer-->



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
<?php /* depreciated 130507
$('#SearchGo').click(function() {

	var url = "http://offers.bevomedia.com/BevoMedia/OffersFront/Browse.html#get=searchresults&search="+$('#SearchText').val()+"&type=lead&include_mysaved=1&numresults=100&page=1";
	window.location = url;
	return false;
	
});
*/ ?>
</script>

<?php 
	if (!isset($_SERVER['HTTPS'])) {
?>
<script type="text/javascript">
var sc_project=7778761; 
var sc_invisible=1; 
var sc_security="ce27f004"; 
</script>
<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
<noscript><div class="statcounter"><a title="tumblr pagecounter" href="http://statcounter.com/tumblr/" target="_blank"><img class="statcounter" src="http://c.statcounter.com/7778761/0/ce27f004/1/" alt="tumblr page counter"></a></div></noscript>
<?php 
	}
?>

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

<?php
//error_reporting(0);
if(!isset($_GET['lang'])) $_GET['lang'] = 'en';
if( $_GET['lang'] != 'en' ) {
	$about_me_title = 'من أنا' ;
	$about_me = 'ماهر العباسي مبرمج أعمل في مجال الانترنت , لدي مجتمع لا بأس به من المبرمجين في الوطن العربي يسعون لتطوير عالم التكنولوجيا و المعلومات , أعشق الوب و معرفة كل جديد على الشبكة العنكبوتية , لم أصل لما أريده حتى الآن و ذلك لأنني لا أعرفه و لكنني أؤمن أنني سأصل إليه يوماً ما ..' ;
	$services_title = 'أقدم الخدمات التالية' ;
	$portfolio = 'مواقع من برمجتي' ;
	$to_contact = 'للتواصل' ;
	$my_friends = 'أصدقائي' ;
	$about_webcandle_title = 'ما هو الوب كاندل ؟' ;
	$about_webcandle = 'هو باختصار فكرة لمعت في رأسي عندما كنت أبحث في الأنترنت عن أمر يشغلني , لم أجد ما أبحث عنه فأحسست أنني مع كل هذه المعلومات الموجودة في هذه الشبكة الواسعة أجلس في غرفة مظلمة جداً و أمامي ضوء شمعة بسيط , إنها المعلومة التي أبحث عنها و لم أجدها و السبب هو كمية المعلومات الهائلة الموجودة أمامي في هذه الشبكة العنكبوتية العملاقة التي وضعتنا في النهاية داخل غرفة مظلمة ..' ;
	$contact_p = 'لا تتردد في طلب المشورة أو المساعدة في الأمور التقنية فأنا أحب تقديم المساعدة في هذا المجال حتى لو كانت مجانية.' ;
	$ecommerce = 'التجارة الألكترونية' ;
	$web_programming = 'برمجة مواقع الانترنت' ;
	$data_minig = 'تجميع البيانات' ;
	$tec_support = 'الدعم التقني' ;
	$programming_about = 'استطيع برمجة مواقع الانترنت بكافة أنواعها باستخدام لغة php' ;
	$crawl_about = 'بناء برمجيات تقوم بامتصاص المعلومات الموجودة في أي موقع في العالم و تخزينها في قاعدة بيانات خاصة' ;
	$ecommerce_about = 'تقديم تقنيات عملية آمنة في مجال التجارة الألكترونية و الدفع الالكتروني' ;
	$tec_about = 'في مجال مكافحة القرصنة و معالجة المواقع القديمة و التوافق مع جميع المتصفحات' ;
	$dawati = 'شركة دعوتي' ;
	$competition = 'لهئية العامة للمنافسة و منع الاحتكار' ;
	$scfms = 'هيئة الأوراق و الأسواق المالية السورية' ;
	$khibrat = 'شركة خبرات العقارية' ;
	$juliamaesa = 'فندق جوليا ميزا' ;
	$noor_almaaref = 'مدرسة نور المعارف' ;
	$rosettacafe = 'روزيتا كافيه' ;
	$sharkagri = 'شركة الشرق للأدوية الزراعية' ;
	$shamtour = 'شركة شام تور العقارية' ;
	$sorena = 'مدرسة سورينا' ;
	$hamidi = 'شركة حميدي للسياحة و السفر' ;
	$loredana = 'شركة لوريدانا' ;
	$i2order = 'شركة آي تو أوردر' ;
	$syria2u = 'شركة سورية ألك' ;
	$alryadeh = 'ريادة الرقمية العالمية' ;
	$dmsgate = 'بوابة الخدمات الرقمية' ;
}
else {
	$about_me_title = 'About Me' ;
	$about_me = 'Maher Alabassi programmer working in the field of internet, I have community quite a bit of programmers in the Arab world are seeking to develop the world of technology and information, I love the web and learn all new on the internet, not out of what I want so far and so I do not know, but I believe I came across it one day ..' ;
	$services_title = 'Services' ;
	$portfolio = 'Portfolio' ;
	$to_contact = 'Contact' ;
	$my_friends = 'My Friends' ;
	$about_webcandle_title = 'About WebCandle !' ;
	$about_webcandle = 'Is short idea shined in my head when I was looking on the Internet for something I am concerned, I did not find what I\'m looking for I felt I with all this information in this the extensive network sit in a dark room and very front candle light simple, it\'s the information that was looking for and did not find it and the reason is the enormous amount of information in front of me in this web giant that put us in the end inside the dark room ..' ;
	$contact_p = 'Do not hesitate to ask for advice or assistance in technical matters, I like to provide assistance in this field even if it is free.' ;
	$ecommerce = 'E-Commerce' ;
	$web_programming = 'Web Programming' ;
	$data_minig = 'Data Crawling' ;
	$tec_support = 'Technical Support' ;
	$programming_about = 'Programming Websites of all kinds using PHP language and JS with jQuery' ;
	$crawl_about = 'Building software absorb the information in any site in the world and stored in a database' ;
	$ecommerce_about = 'Provide safe technologies in the field of e-commerce and online payment' ;
	$tec_about = 'In the fight against hacking and deal with ancient sites and compatibility with all browsers' ;
	$dawati = 'Dawiti Company' ;
	$competition = 'The General Commission for Competition and Anti monopoly' ;
	$scfms = 'Syrian Commission on Financial Markets and Securities' ;
	$khibrat = 'Khibrat Real Estate Management' ;
	$juliamaesa = 'Julia Maesa Hotel' ;
	$noor_almaaref = 'Noor Almaaref School' ;
	$rosettacafe = 'Rosetta Cafe' ;
	$sharkagri = 'Alshark Agricultural Drugs' ;
	$shamtour = 'Sham Tour' ;
	$sorena = 'Sorena School' ;
	$hamidi = 'Hamidi travel and tourism' ;
	$loredana = 'Loredana Company' ;
	$i2order = 'i2order Company' ;
	$syria2u = 'Syria2u Company' ;
	$alryadeh = 'Alryadeh' ;
	$dmsgate = 'DMSGate' ;
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $about_me ; ?>" />
<meta name="keywords" content="ماهر العباسي ,Maher Alabassi, Maher Alabbasi, مبرمج , تجارة الكترونية , php , javascript , jquery , css , html , html5 , css3 , durpal , opencart , برمجة مواقع انترنت, web programming,programmer,e-commerce,web design" />
<meta name="alexaVerifyID" content="drBwRLzVa_D4ZAGZMHej4x-Vip0"/>
<meta property="og:image" content="http://webcandle.info/images/maher-alabassi.jpg" />
<meta name="twitter:image:src" content="http://webcandle.info/images/maher-alabassi.jpg"/>
<title>WebCandle</title>
<link rel="stylesheet" type="text/css" href="style<?php if( $_GET['lang'] != 'en' ) echo '-rtl' ; ?>.css" />
<link REL="SHORTCUT ICON" HREF="http://webcandle.info/images/logo.ico">
<!--[if IE 6]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37693207-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript" src="https://apis.google.com/js/platform.js"></script>
<script type="text/javascript">
window.___gcfg = {
  lang: 'en-US',
  parsetags: 'onload'
};
</script>
</head>
<body>
<div class="wrap">
    	<div style="height:179px;"><div class="logo"><a href="index.php<?php if( $_GET['lang'] == 'ar' ) echo '?lang=ar' ; ?>"><img src="images/logo.png" alt="" title="" border="0" /></a></div><?php if( $_GET['lang'] != 'en' ) echo '<a href="index.php?lang=en" id="lang">English</a>' ; else echo '<a href="index.php" id="lang">العربية</a>' ; ?></div>
        <div id="menu">
        </div>
    <div class="main_content">
    		<div class="right_content">
                    <div class="about dir">
                   		 <h2 style="padding-right:0;" class="service-title english-font"><?php echo $about_me_title; ?></h2>
                        <p><?php echo $about_me ; ?></p>
                    </div>
            	<h2 class="service-title english-font"><?php echo $services_title ; ?></h2>

                <div class="services_block">
					<img src="images/icon1.gif" alt="" title="" border="0" class="icon_left" />
                    <div class="services_details">
                     <h3><?php echo $ecommerce ; ?></h3>
                    <p><?php echo $ecommerce_about ; ?></p>
                    </div>
                </div>

                <div class="services_block">
					<img src="images/icon2.gif" alt="" title="" border="0" class="icon_left" />
                    <div class="services_details">
                     <h3><?php echo $web_programming ; ?></h3>
                    <p><?php echo $programming_about ; ?></p>
                    </div>
                </div>

                <div class="services_block">
					<img src="images/icon3.gif" alt="" title="" border="0" class="icon_left" />
                    <div class="services_details">
                    <h3><?php echo $tec_support ; ?></h3>
                    <p><?php echo $tec_about ; ?></p>
                    </div>
                </div>

                <div class="services_block">
					<img src="images/icon4.gif" alt="" title="" border="0" class="icon_left" />
                    <div class="services_details">
                     <h3><?php echo $data_minig ; ?></h3>
                    <p><?php echo $crawl_about ; ?></p>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="webcandle">
                    <div class="welcome_block dir">
                        <h2 class="english-font"><?php echo $about_webcandle_title ; ?></h2>
                        <p><?php echo $about_webcandle ; ?></p>
                    </div>
                    <div class="clear"></div>
                </div>

			</div>
            <div class="left_content">
                    <h2 class="dir english-font"><?php echo $portfolio ; ?></h2>
                    <a href="https://dmsgate.com" target="_blank" title="<?php echo $dmsgate ; ?>"><img src="images/dmsgate.jpg" alt="<?php echo $dmsgate ; ?>" border="0" class="project" /></a>
                    <a href="http://www.alryadeh.com" target="_blank" title="<?php echo $alryadeh ; ?>"><img src="images/alryadeh.jpg" alt="<?php echo $alryadeh ; ?>" border="0" class="project" /></a>
                    <a href="http://www.scfms.sy" target="_blank" title="<?php echo $scfms ; ?>"><img src="images/scfms.jpg" alt="<?php echo $scfms ; ?>" border="0" class="project" /></a>
            		<a href="http://www.competition.gov.sy" target="_blank" title="<?php echo $competition ; ?>"><img src="images/competition.jpg" alt="<?php echo $competition ; ?>" border="0" class="project" /></a>
                    <a href="http://www.khibratrealestate.com" target="_blank" title="<?php echo $khibrat ; ?>"><img src="images/khibrat.jpg" alt="<?php echo $khibrat ; ?>" border="0" class="project" /></a>
                    <a href="http://www.syria2u.com" target="_blank" title="<?php echo $syria2u ; ?>"><img src="images/syria2u.jpg" alt="<?php echo $syria2u ; ?>" border="0" class="project" /></a>
                    <!--  href="http://www.loredana-sy.com" -->
                    <a target="_blank" title="<?php echo $loredana ; ?>"><img src="images/loredana.jpg" alt="<?php echo $loredana ; ?>" border="0" class="project" /></a>
                    <a href="http://www.juliamaesa.com" target="_blank" title="<?php echo $juliamaesa ; ?>"><img src="images/julia.jpg" alt="<?php echo $juliamaesa ; ?>" border="0" class="project" /></a>
                    <!--  href="http://noor-almaaref.com/index.php" -->
                    <a target="_blank" title="<?php echo $noor_almaaref ; ?>"><img src="images/noor.jpg" alt="<?php echo $noor_almaaref ; ?>" border="0" class="project" /></a>
                    <a href="http://www.sharkagri.com" target="_blank" title="<?php echo $sharkagri ; ?>"><img src="images/shark.jpg" alt="<?php echo $sharkagri ; ?>" border="0" class="project" /></a>
         			 <!--href="http://www.shamtour.com" -->
          			<a target="_blank" title="<?php echo $shamtour; ?>"><img src="images/shamtour.jpg" alt="<?php echo $shamtour; ?>" border="0" class="project" /></a>
                    <!--  href="http://www.sorenaschool.net/index.php" -->
                    <a target="_blank" title="<?php echo $sorena ; ?>"><img src="images/sorena.jpg" alt="<?php echo $sorena ; ?>" border="0" class="project" /></a>
                    <!--  href="http://www.hamiditours.com" -->
                    <a target="_blank" title="<?php echo $hamidi ; ?>"><img src="images/hamidi.jpg" alt="<?php echo $hamidi ; ?>" border="0" class="project" /></a>
                    <a href="http://www.dawaticards.com" target="_blank" title="<?php echo $dawati ; ?>"><img src="images/dawati.jpg" alt="<?php echo $dawati ; ?>" border="0" class="project" /></a>
                    <!--  href="http://www.rosettacafe.com/index.php" -->
                    <a target="_blank" title="<?php echo $rosettacafe ; ?>"><img src="images/rosettacafe.jpg" alt="<?php echo $rosettacafe ; ?>" border="0" class="project" /></a>
                    <!--  href="http://www.i2order.com" -->
                    <a target="_blank" title="<?php echo $i2order ; ?>"><img src="images/i2order.jpg" alt="<?php echo $i2order ; ?>" border="0" class="project" /></a>
            </div>


            <div class="clear"></div>
    </div>


</div>
<div class="footer">
	<div class="footer_content">
    	<div class="left_footer_content dir">
        	<h2 class="english-font"><?php echo $to_contact ; ?></h2>
            <p>
            <?php echo $contact_p; ?>
        <div dir="ltr">

          <div class="footer_network">
          <a href="http://www.facebook.com/Maher.Alabassi" target="_blank" class="community"><img src="images/facebook.png" alt="" /></a>
          <a href="https://twitter.com/Webcandle" target="_blank" class="community"><img src="images/twitter.png" alt="" /></a>
          <a href="https://www.linkedin.com/in/webcandle" target="_blank" class="community"><img src="images/linkedin.png" alt="" /></a>
          <!--<a href="#" target="_blank" class="community"><img src="images/youtube.png" alt="" /></a>-->
          <div class="g-follow" data-annotation="none" data-height="24" data-href="//plus.google.com/u/0/106200734294199031942" data-rel="author" lang="en-US" ></div>
          </div>

          <div style="text-align: center; padding-top: 25px;"><span style="font-size:12px" class="brown">All Rights Reserved 2012-<?php echo date('Y') ; ?> WebCandle.info</span></div>

            </div>
            </p>

        </div>
        <div class="footer_links">

          <div class="firsttweet"><blockquote class="twitter-tweet" lang="en"><p>maybe this is the first tweet I write&#10;I don&#39;t know what to write , but good morning</p>&mdash; Web Developer (@Webcandle) <a href="https://twitter.com/Webcandle/statuses/222588527395864576">يوليو 10, 2012</a></blockquote></div>
          <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
        <div class="clear" style="height:15px;"></div>

	</div>
</div>



</body>
</html>

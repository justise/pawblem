<!--
	Header Bar for all the pages
-->
<div id="header">
	<div class="header-container">
		<a href="/index.php" class="header-logo"><h1><span>Pawblem<img src="/images/temp6.png" style="padding:3px"/>Solved</span></h1><h2><span>Pet Sitting Service</span></h2></a>        
	</div>
	<?PHP
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/includes/nav.php";
       include_once($path); ?>
    
    <ul class="social">
        <li class="yelp"><a href="http://www.yelp.com/biz/pawblem-solved-redmond" target="_blank" title="People love us on Yelp!"><i class="fa fa-yelp"></i></a></li>
        <li class="blog"><a href="http://www.gracieslittleworld.com" target="_blank" title="Visit my Blog"><i class="fa fa-rss"></i></a></li>
        <li class="twitter"><a href="http://twitter.com/pawblemsolved" target="_blank" title="Keep up to date with Twitter"><i class="fa fa-twitter"></i></a></li>
        <li class="facebook"><a href="https://www.facebook.com/pawblemsolved" target="_blank" title="See our Facebook Page"><i class="fa fa-facebook"></i></a></li>
    </ul>
</div>
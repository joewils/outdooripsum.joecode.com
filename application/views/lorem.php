<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Outdoor Ipsum</title>

	<style type="text/css">

	body {
		background-color: #fff;
		margin: 40px;
		font: 16px/24px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration:none;
	}
	a:hover {
	  text-decoration:underline;
	}
	
	img {
	  border:none;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 24px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: left;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	
	#advertisement {
	  float:right;
	  width:300px;
	  height:250px;
		margin-left:15px;
	}
	</style>
	
	<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-191795-23']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
	
</head>
<body>

<div id="container">
	<h1>Outdoor Ipsum</h1>

	<div id="body">
	  
	  <div id="advertisement">
	    <?php
	      $ads = array(
	       '<a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=114241&amp;pw=55475"><img src="http://www.avantlink.com/gbi/10248/114241/40867/55475/image.jpg" width="300" height="250" style="border: 0px;" alt="" /></a>',
	       '<a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=111917&amp;pw=55475"><img src="http://www.avantlink.com/gbi/10248/111917/40867/55475/image.jpg" /></a>',
	       '<a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=3412&amp;pw=55475"><img src="http://www.avantlink.com/gbi/10248/3412/40867/55475/image.jpg" width="300" height="250" style="border: 0px;" alt="" /></a>',
	       '<a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=34337&amp;pw=55475"><img src="http://www.avantlink.com/gbi/10248/34337/40867/55475/image.jpg" width="300" height="250" style="border: 0px;" alt="" /></a>',
	       '<a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=42369&amp;pw=55475"><img src="http://www.avantlink.com/gbi/10248/42369/40867/55475/image.jpg" width="300" height="250" style="border: 0px;" alt="" /></a>',
	       '<a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=43101&amp;pw=55475"><img src="http://www.avantlink.com/gbi/10248/43101/40867/55475/image.jpg" width="300" height="250" style="border: 0px;" alt="" /></a>',
	       '<a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=61189&amp;pw=55475"><img src="http://www.avantlink.com/gbi/10248/61189/40867/55475/image.jpg" width="300" height="250" style="border: 0px;" alt="" /></a>'
	      );
	      $random = array_rand($ads);
	      echo $ads[$random];
	    ?>
	  </div>
	  
	  <?php echo $lorem; ?>
	  
	  <form method="POST" action="<?php echo base_url().'index.php/lorem/words' ?>">
  	    <label for="words"><strong>Words: </strong  ></label>
  	    <input type="text" name="words" id="words" value="<?php echo $words ?>" />
  	    <input type="submit" value="update" />
  	</form>
	  
	</div>
	
	<p class="footer">
	  <a href="http://joecode.com">JoeCode</a> | 
	  <a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=15305&amp;pw=55475">AvantLink.com</a> (advertising) | 
	  <a href="https://twitter.com/#!/joewils">@joewils</a> (follow) | 
	  <a href="https://github.com/joewils/outdooripsum.joecode.com">github</a> (fork)
</div>

</body>
</html>
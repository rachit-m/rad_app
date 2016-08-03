<?php

if (isset($_COOKIE['TestCookie'])){
  $cookieCnt = $_COOKIE['TestCookie'] ;
  $message = "TestCookie exists with value " . $cookieCnt ;
  if (($cookieCnt % 2) == 0) {
    $newCookie = $cookieCnt + 1 ;
    setCookie("TestCookie","".$newCookie) ;
    $message2 = "Setting new cookie value " . $newCookie ;
  }
} else {
 $message = "TestCookie does not exist" ;
}
$html =<<<HTML
<html>
<head>
<title>Java URLConnection Cookie Test PHP</title>
<script type="text/javascript" src="http://calamitycoder.com/showAds.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-22034848-9', 'auto');
  ga('send', 'pageview');

</script></head>
<body>
<center><h3>$message</h3></center>
<center><h3>$message2</h3></center>
</body>
</html>
HTML;
echo $html ;
?>



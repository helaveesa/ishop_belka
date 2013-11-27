<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>dzine</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="stylesheet/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div class="container-left">
    <div class="logozone"><a href="http://www.free-css.com/"> <img src="img/logo.jpg" alt="" border="10" /></a></div>
  </div>
  <div class="container-center">
    <div>
      <div class="top-menuzone">
        <div class="mainmenu">
          <ul>
            <li><a href="aboutus.html">О БЕЛКАХ</a></li>
            <li><a href="catalog.html">КАТАЛОГ ОРЕХОВ</a></li>
            <li><a href="ishop.html">О НАС</a></li>
            <li><a href="tovar.html">ОРЕХИ</a></li>
            <li><a href="korzina.html">ДУПЛО</a></li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
      <div class="bannerzone">
        <div class="bannertxt">ДОБРО В ДУПЛО!</div>
        <div style="text-align:center;"> <img src="img/banner.jpg" alt="" /> </div>
      </div>
      <div class="clear"></div>
      <div class="showcase-bar">
        <div class="showcase-left">КАТАЛОГ ОРЕХОВ</div>
        <div class="showcase-right">
          <div class="more"> <a href="http://www.free-css.com/">+ больше орехов</a> </div>
        </div>
      </div>
      <div class="clear"></div>
<?php
	include($_SERVER['DOCUMENT_ROOT']. '/mysite/dzine/'.$view.'.php'"); 
?>
<div class="clear"></div>
<div class="footer">
  <div class="footer-inside">
    <p>Copyright (c) i-shopbelka.com. helaveesa.nolder@gmail.com <a href="http://www.stylishtemplate.com">Website Templates.</a></p>
  </div> 
  </div>
  </div>
  </div>
</div>
</body>
</html>

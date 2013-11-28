<?php
// вывод всех товаров из БД
// создание переменной products и вызов функции get_products(); из файла db_functions.php
$products = get_products(); // теперь тут все товары

// проход по всему массиву products
foreach($products as $item): ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>dzine - Projects</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="stylesheet/style.css" rel="stylesheet" type="text/css" />
</head>
<body> 
<div id="container">
  <div class="container-center">
    <div>
      <div class="top-menuzone">
      <div class="bannertxt">ДОБРО В ДУПЛО!</div>
      <div class="clear"></div>
<table align="center" cellpadding="0" cellpadding="0" class="product" border="0">
  <tr>
      <td valign="top">
      <div><a href="#"><img src="userfiles/<?php echo $item['image']?>" alt="" /></a></div>
      <div class="description">
          <div class="product-name"><a href="#"><?php echo $item['title']?></a></div>
          <div class="product-price">Цена: <?php echo $item['price']?></div>
       </div>
       </td>
   </tr>
</table>
      <!--<div class="showcase-bar">
        <div class="showcase-left">Больше ОРЕХОВ!</div>
        <div class="showcase-right">
          <div class="more"> <a href="http://www.free-css.com/">+ ещё</a> </div>
        </div> -->
      </div>
      <div class="clear"></div>
      <div class="insideworkzone">
        <div style="padding-bottom:10px;">
          <div class="ourprojectrow">
            <h6>Project One</h6>
            <div> <img src="img/projectimg1.jpg" alt="" width="210" height="139" class="project-img" /> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. Proin sed odio et ante adipiscing lobortis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. Proin sed odio et ante adipiscing lobortis.
              <div class="clear"></div>
            </div>
            <br />
            <div style="font-weight:bold;"><img src="images/arrow.png" alt="" width="16" height="16" border="0"  /> <a href="http://www.free-css.com/">View this project</a>
              <div class="clear"></div>
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </body>
</html>

<?php endforeach;
?>

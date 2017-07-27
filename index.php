<!DOCTYPE html>
<html>
	<head>
    <title>Wellcome to PHP</title>
	</head>
	<body>
    <h2>PHP String Functin</h2>
  <?php
  $text1 = "HOW tO StUDY PHP";
  $text2 = "HPH: Hypertext Preprossor Is A Server Side Script To Make For Web Application";
  echo $text1.="<br/>";
  echo $text2.="<br/>";
  echo $all =$text1.=$text2;
  ?><br/>

      String Lowercase: <?php echo strtolower($all)."<br/>"?>
      String Uppercase: <?php echo strtolower($all)."<br/>"?>
      String Upper First: <?php echo ucfirst($all)."<br/>"?>
      String Upper Words: <?php echo ucwords($all)."<br/>"?>

  <br/>
      String Length : <?php  echo strlen ($all)."<br/>" ?>
      String Find : <?php  echo strstr ($all, "StUDY")."<br/>" ?>
      String replace : <?php  echo str_replace ("StUDY","studies", $text1)."<br/>" ?>

	</body>
</html>

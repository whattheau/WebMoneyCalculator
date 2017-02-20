<!DOCTYPE html>
<html>
<head>
  <title>Currency</title>
    <link rel="stylesheet" type="text/css" href="css/currency_style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>

<div class="wallpaper">
<form action="home.php">
<div class="result">
<?php
  
    $money = $_GET['amount'];
    $currency = $_GET['currency'];

    switch ($currency) {
      case 'KRW':
        $korea = 32.55;
        $sum = $money*$korea;
        echo $sum." KRW";
    break;
      case 'USD':
        $usd = 35.03;
        $sum1 = $money*$usd;
        echo $sum1. "USD";
        break;

      case 'SGD':
        $SGD = 0.04;
        $sum2 = $money*$SGD;
        echo $sum2. "SGD";
        break;

      default:
        # code...
        break;
    }

?>
   <button>Go Back!</button>

   </form>

</div>
</div>
</body>
</html>
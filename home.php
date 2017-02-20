<!DOCTYPE html>
<html>
<head>
	<title>Web Money Calculator</title>
	<link rel="stylesheet" type="text/css" href="css/home_style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-1.11.3.min.js">
  <link rel="stylesheet" type="text/css" href="js/jquery-1.12.3.min.js">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Days+One|Fredoka+One" rel="stylesheet">

	<meta charset="UTF-8">
</head>
<body>

	<div class="wallpaper">
   <div class="Head_Home">Money <br>Calculator</div>
   <div class="name">Pannalak Techaseamonrrasy | 13570254</div>

   <form action="currency.php" method="GET">
    <div class="box_money">
      <div class="amount_box">Amount:
      <input class="input_style" type="text" name="amount">Bath
      </div>
      <div class="currency_box">
      <br>
      Choose your currency: 
      <br>
              <select class="select_style" name="currency" >
                <option value="KRW" >เกาหลีวอน (KRW)</option>
                <option value="USD" >ดอลลาร์(USD)</option>
                <option value="SGD" >ดอลลาร์สิงคโร์ (SGD)</option>               
              </select>
      </div><!-- currency_box -->
          <button>Change!</button>
      </div><!-- box_money -->

   </form>


  </div>
	
		
</body>
</html>
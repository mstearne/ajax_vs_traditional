<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stock Ticker</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <?php
    $price = file_get_contents("quote.txt");
    ?>

</head>
<body>
<div class="jumbotron">
    <div class="container">
        <h1 class="text-center">Stock Ticker</h1>
    </div>
</div>

<div class="container">
    <div class="row text-center">
    	<h4><strong>Current Price for <?php echo $_REQUEST['q']?></strong></h4>
    </div>

    <div class="row text-center">
        <h3><?=$_REQUEST['q']?> is trading at <strong>$<?=$price?></strong></h3>

    </div>

    <div class="row">
    	<p align="center"><a href="ask.php">Click here to choose another stock</a></p>
    </div>

</div>





</body>
</html>




<?php
    require 'connection.php';
    session_start();
   
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>D Mobile Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
		<style>
		
body {
  background-color: #87CEFA;
  background-image: linear-gradient(#87CEFA, #7B68EE);
}
</style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>Rating and review</b></h1>
                        <form method="post" action="ratingprocess.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
							<label for="p_id">Product Name:</label>
<select name="p_id">
<option selected="" value="Default">(Select the product of which should be rated)</option>
<option value="1">Mi Note 7</option>
<option value="2">One plus Nord</option>
<option value="3">iphone11</option>
<option value="4">Vivo V11</option>
<option value="5">Samsung galaxy Tab</option>
<option value="6">Huwei media pad</option>
<option value="7">Lenovo smart tab</option>
<option value="8">Apple i Pad</option>
<option value="9">One plus wireless z</option>
<option value="10">Tempered Glass</option>
<option value="11">Cover</option>
<option value="12">Samsung Charger</option>
               
                            </div>
							<br><br><h2>Rate out of five:</h2>
							 <div class="rate">
							<br><br>
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
	</div><br><br>
                            <div class="form-group">
                                Review: <textarea name="review" rows="5" cols="40"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Online&copy <a href="https://www.instagram.com/_datta_sai_/">D Mobile </a> Store.</p>
                   <p>For any queries you can drop a mail to dmobiles@gmail.com</p>
               </center>
               </div>
           </footer>

        </div>
    </body>
</html>
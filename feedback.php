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
                        <h1><b>Feedback</b></h1>
                        <form method="post" action="insert.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <label for="category">Feedback type:</label>
<select name="category">
<option selected="" value="Default">(Select category)</option>
<option value="AF">Website</option>
<option value="AL">Product</option>
<option value="AM">Delivery</option>
<option value="AJ">Payement</option>
<option value="AD">Other</option>
</select>
                            </div>
                            <div class="form-group">
                                Comment: <textarea name="comment" rows="5" cols="40"></textarea>
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
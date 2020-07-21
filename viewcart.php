<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <scrip
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

	<title>view cart</title>
</head>
<body>
	<div class="container">
		<h1>Shopping site</h1>
		<center>
			<a href="index.php" class="btn btn-warning col-lg-2">Home</a>
			<a href="viewcart.php" class="btn btn-warning col-lg-2">Cart</a>

		</center>
		<br>
		<br>
        <h2 align="center">your cart products</h2>

       
       <table class="table">
           <thead>
               <tr>
                   <th>Sno.</th>
                   <th>Name</th>
                   <th>Price</th>
                   <th>Quantity</th>
                   <th>Total Price</th>
                   <th>Update</th>
                   <th>Delete</th>
               </tr>
           </thead>
           <tbody>
               <?php
               (float)$bill = 0;
               (int)$sno = 1;
                    foreach($_SESSION as $products){
                    (float)$p = 0;
                    (int)$q = 0;
                        echo"<tr>";
                            echo"<td>".($sno++)."</td>";
                            foreach($products as $key => $value){
                           if($key == 2){
                           echo"<td>".(int)$value."</td>";
                           (int)$q = (int)$value;
                       }else if($key == 1){
                       echo"<td>".$value."</td>";
                        (int)$p = (int)$value;    
                   }else if($key == 0){
                echo"<td>".$value."</td>";
               }
            }
            $bill = (int)$q * (float)$p;
            echo"<td>".($bill)."</td>";
            echo"<td><input type='submit' name='event' value='Update' class='btn btn-sm btn-warning'></td>";
            echo"<td><input type='submit' name='event' value='Delete' class='btn btn-sm btn-danger'></td>";
          echo"</tr>";
        }
    ?>
    </tbody>
 </table>

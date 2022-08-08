                                         
 <?php
$win = $_POST['winner'];
echo $win;
 ?>
 <<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
   <form method="POST" action="">                                            
    <select name="winner">
              <option value="all">
                 1. All
               </option>
               <option value="custom">
                2. Custom
                </option>    
       </select>
     <button>Submit</button>

   </form>
 </body>
 </html>


 
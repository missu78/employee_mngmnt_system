<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload image</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<center>
    <body>
    <img src="images/ghrccst.png" align="left">
    <img src="images/rgilogo.png" align="right">

<form class="" action="image_insert.php" method="POST"  enctype="multipart/form-data"> 
    <div class=" col-6 p-2 border m-2">
    <font color="DeepPink"><h3>G H RAISONI COLLEGE OF COMMERCE,SCIENCE & TECHNOLOGY, NAGPUR</h3></font>
    <input type="text" name="id" class="form-control" placeholder="Enter Employee ID"><br>
    <input type="text" name="image_title" class="form-control" placeholder="Enter Employee Name"><br>
        <input type="file" name="image_upload"  accept="image/*" class="form-control"  value=""/> <br> 
        <input type="text" name="designation"  class="form-control"  placeholder="Designation"> <br>
        
    <button class="btn btn-primary w-100">Upload</button>
  
    </div>
</form> 
<button class="btn btn-secondy w-50"><a href="fetch_image.php"><b> Show Report</button></a>    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<img src="images/dome.png">

</body>

<?php
echo '<body style="background-color:DarkOliveGreen">';
?>
<font size="100">

</html>
<?php
$conn = mysqli_connect("localhost","root","","teknowiz");
$query="SELECT * FROM `images`";
$result=mysqli_query($conn , $query);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <center><title>Image list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Smartious - All Teachers</title>

<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">

    

</head>
<body style="background-color:skyblue">
<img src="images/footer.jpg">
    <div class="col-6 border m-2">
    <h3>Image list</h3>
        <table class="table table-bordered"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
               
            </thead>
            <tbody>
                <?php
                while($fetch=mysqli_fetch_assoc($result)){
                    echo  "<tr>";
                    echo "<td>{$fetch['id']}</td>";
                    echo "<td>{$fetch['title']}</td>";
                    echo "<td><img src='images/{$fetch['image']}' width='100' height='100'></td>";
                    
                    echo " </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <a href="index.php"><img src="images/home.jpg" width="150" height='100'>Home</a><br><br><br>
    <img src="images/dome.png">
    ❤ This is Heart 
</body>
</html>
<html>
    <center><body>
    <button type="button"><a href="fetch_image.php"> Show Report</a></button><br><br>
    <button type="button"><a href="index.php"> Home Page</a></button><br><br>

<?php
$conn = mysqli_connect("localhost","root","","teknowiz");
$id = $_POST['id'];
$title = $_POST['image_title'];                  // image title
$image  = $_FILES['image_upload'];              // get image from post data 
$image_name=$image['name'];                   // image name
$image_tmp_name=$image['tmp_name'];          // temp file path
$destination="images/".$image_name;       // Folder path Where Image saved
move_uploaded_file($image_tmp_name , $destination);   // this function are used to store the file in destination path 
$designation= $_POST['designation'];
$query="INSERT INTO `images`(id,title,image,designation) VALUES ('{$id}','{$title}','{$image_name}','{$designation}')";
$result=mysqli_query($conn , $query);
$alert ="Pics Uploaded Successfully";
echo '<body style="background-color:pink">';
echo "$alert";
?>
</body>
</html>
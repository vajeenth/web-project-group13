<?php
$con=new mysqli("localhost","root","","horror_signup");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Image Upload</title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" name="submit" value="save">
        </form>
        <?php
            if(isset($_POST["submit"]))
            {
                if(getimagesize($_FILES['image']['tmp_name'])==false)
                {
                    echo "please select image to save..";
                }
                else
                {
                $image=$_FILES['image'] ['tmp_name'];
                $name=$_FILES['image'] ['name'];

                 $image=file_get_contents($image);
                 $image=base64_encode($image);
                 $sql="INSERT INTO images1 (name,image)values ('$name','$image')";
                 
                 if($con->query($sql))
                 {
                    echo "image stored";
                    echo "<br>";
                 }
                }
            }
            else
            {
                echo "please select image to save..";
            }
            $sql="SELECT * from images1";
            $result=$con->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<img src='data:image;base64,{$row["image"]}' alt='img' height='25px' width='25'>";
                    echo "<br><hr>";
                }
            }
            else{
                echo "<br>";
                echo "no image Stored";
            }
        ?>
    </body>
</html>
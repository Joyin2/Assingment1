<?php

include "connection.php";
$id=$_GET["id"];

$firstname="";
$lastname="";
$email="";
$contact="";
$fathers_name="";
$gender="";
$college_name="";
$residential_address="";
$permanent_address="";

$res=mysqli_query($link , "select * from table1 where id = $id");
while ($row=mysqli_fetch_array($res)) {
    $firstname=$row["firstname"];
    $lastname=$row["lastname"];
    $email=$row["email"];
    $contact=$row["contact"];
    $fathers_name=$row["fathers_name"];
    $gender=$row["gender"];
    $college_name=$row["college_name"];
    $residential_address=$row["residential_address"];
    $permanent_address=$row["permanent_address"];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <scrip src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }
</style>

<body>

    <div class="container">
        <div class="col-lg-4">
            <h2>Student Form</h2>
            <form action="" name="form1" method="POST">
                <div class="form-group">
                    <label for="firstname">firstname:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" value="<?php echo $firstname; ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">lastname:</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" value="<?php echo $lastname; ?>">
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <label for="contact">contact:</label>
                    <input type="tel" class="form-control" id="contact" placeholder="Enter contact" name="contact" value="<?php echo $contact; ?>">
                </div>
                <div class="form-group">
                    <label for="fathers_name">fathers_name:</label>
                    <input type="text" class="form-control" id="fathers_name" placeholder="Enter Father's Name" name="fathers_name" value="<?php echo $fathers_name; ?>">
                </div>
                <div class="form-group">
                    <label for="gender">gender:</label>
                    <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender" value="<?php echo $gender; ?>">
                </div>
                <div class="form-group">
                    <label for="college_name">college_name:</label>
                    <input type="text" class="form-control" id="college_name" placeholder="Enter College's Name" name="college_name" value="<?php echo $college_name; ?>">
                </div>
                <div class="form-group">
                    <label for="residential_address">Residential Address:</label>
                    <input type="text" class="form-control" id="residential_address" placeholder="Enter address" name="residential_address" value="<?php echo $residential_address; ?>">
                </div>
                <div class="form-group">
                    <label for="permanent_address">Permanent Address:</label>
                    <input type="text" class="form-control" id="permanent_address" placeholder="Enter permanent address" name="permanent_address" value="<?php echo $permanent_address; ?>">
                </div>
                <!-- <button type="submit" name="insert" class="btn btn-default">Insert</button> -->
                <button type="submit" name="update" class="btn btn-default">Update</button>
                <!-- <button type="submit" name="delete" class="btn btn-default">Delete</button> -->

            </form>
        </div>
    </div>

    
<?php 

if(isset($_POST["update"])){

    mysqli_query($link , "update table1 set firstname='$_POST[firstname]',lastname='$_POST[lastname]', email='$_POST[email]', contact='$_POST[contact]',fathers_name='$_POST[fathers_name]',gender='$_POST[gender]',college_name='$_POST[college_name]',residential_address='$_POST[residential_address]',permanent_address='$_POST[permanent_address]' where id = $id");
?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
<?php
}

?>

  

</body>

</html>
<?php

include "connection.php";

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
                    <label for="firstname">Firstname:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="tel" class="form-control" id="contact" placeholder="Enter contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="fathers_name">Fathers Name:</label>
                    <input type="text" class="form-control" id="fathers_name" placeholder="Enter father's name" name="fathers_name" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="text" class="form-control" id="gender" placeholder="Enter your gender" name="gender" required>
                </div>
                <div class="form-group">
                    <label for="college_name">College Name:</label>
                    <input type="text" class="form-control" id="college_name" placeholder="Enter college's name" name="college_name" required>
                </div>
                <div class="form-group">
                    <label for="residential_address">Residential Address:</label>
                    <input type="text" class="form-control" id="residential_address" placeholder="Enter address" name="residential_address" required>
                </div>
                
                <label>
        <input type="checkbox" name="homepostalcheck" id="homepostalcheck"/>Same as above:
      </label>

                
                <div class="form-group">
                    <label for="permanent_address">Permanent Address:</label>
                    <input type="text" class="form-control" id="permanent_address" placeholder="Enter permanent address" name="permanent_address" required>
                </div>
                <button type="submit" name="insert" class="btn btn-default">Insert</button>
                <!-- <button type="submit" name="update" class="btn btn-default">Update</button> -->
                <!-- <button type="submit" name="delete" class="btn btn-default">Delete</button> -->

            </form>
        </div>
    </div>

    <div class="col-lg-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Father's Name</th>
                    <th>Gender</th>
                    <th>College</th>
                    <th>Address</th>
                    <th>Parmanent Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                
            <?php 
            
            $res=mysqli_query($link,"select * from table1");
            while ($row=mysqli_fetch_array($res)) {
                echo "<tr>";

                echo "<td>"; echo $row["id"];  echo"</td>";
                echo "<td>"; echo $row["firstname"];  echo"</td>";
                echo "<td>"; echo $row["lastname"];  echo"</td>";
                echo "<td>"; echo $row["email"];  echo"</td>";
                echo "<td>"; echo $row["contact"];  echo"</td>";
                echo "<td>"; echo $row["fathers_name"];  echo"</td>";
                echo "<td>"; echo $row["gender"];  echo"</td>";
                echo "<td>"; echo $row["college_name"];  echo"</td>";
                echo "<td>"; echo $row["residential_address"];  echo"</td>";
                echo "<td>"; echo $row["permanent_address"];  echo"</td>";
                echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?> "><button type="button" class="btn btn-success">Edit</button></a> <?php echo"</td>";
                echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo"</td>";


                echo "</tr>";
            }
            
            ?>

              
            </tbody>
        </table>
    </div>

    <?php
    if (isset($_POST["insert"])) {
        mysqli_query($link, "insert into table1 values ( NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]','$_POST[fathers_name]','$_POST[gender]','$_POST[college_name]','$_POST[residential_address]','$_POST[permanent_address]')");
        ?>
        <script type="text/javascript">
            window.location.href=window.location.href;
        </script>
        <?php
    }

    if (isset($_POST["delete"])) {
        mysqli_query($link,"delete from table1 where firstname = '$_POST[firstname]'") or die(mysqli_error($link));
        ?>
        <script type="text/javascript">
            window.location.href=window.location.href;
        </script>
        <?php
    }
    
    if (isset($_POST["update"])) {
        mysqli_query($link,"update table1 set firstname ='$_POST[lastname]' where firstname = '$_POST[firstname]'") or die(mysqli_error($link));
        ?>
        <script type="text/javascript">
            window.location.href=window.location.href;
        </script>
        <?php
    }

    ?>

<script type="text/javascript">
    function setpermanent_address(){
  if ($("#homepostalcheck").is(":checked")) {
    $('#permanent_address').val($('#residential_address').val());
    // $('#permanent_address').attr('disabled', 'disabled');
  } else {
    $('#permanent_address').removeAttr('disabled');
  }
}

$('#homepostalcheck').click(function(){
  setpermanent_address();
})

</script>
</body>

</html>
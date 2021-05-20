<?php require_once 'db.php'; ?>
<?php
    
   

   if(isset($_POST['submit']))
   {	 	
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        $name3 = $_POST['name3'];
        $name4 = $_POST['name4'];

        $date = date("d-m-y H:i");

          $sql = "INSERT INTO nrconewdb.counter (Name1,Name2,Name3,Name4,Date) VALUES ('$name1','$name2','$name3','$name4','$date')";
          if (mysqli_query($connect, $sql)) {
           echo "New record created successfully !";
                    header("location:Counter.php?success");
          
        } else {
           echo "Error: " . $sql . " " . mysqli_error($connect);
//header("location:Counter.php?error");
        }
        mysqli_close($connect);
   }
?>
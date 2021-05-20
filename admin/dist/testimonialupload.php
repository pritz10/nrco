<?php require_once 'db.php'; ?>
<?php 
    $filename = $_FILES['myfile']['name'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $message = $_POST['message'];
    $created_date = date("d-m-y H:i");
    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpg','png','jpeg','gif'])) {
        echo "You file extension must be  .jpg or .png or .jpeg or .gif";
     } elseif ($_FILES['myfile']['size'] > 70000000) { // file shouldn't be larger than 20Megabyte
        //echo "File too large!";
        header("location:testimonial.php?error");
     } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO  nrconewdb.testimonial (name, message, designation, imageurl, date) VALUES ('$name','$message','$designation','$destination','$created_date')";
            if (mysqli_query($connect, $sql)) {
              //  echo "File uploaded successfully";
                header("location:testimonial.php?success");

             }
        } else {
           // echo "Failed to upload file.";
         }
    }

?>
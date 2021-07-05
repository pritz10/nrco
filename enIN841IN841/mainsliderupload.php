<?php require_once 'db.php'; ?>
<?php 
    $filename = $_FILES['myfile']['name'];
    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);
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
     } elseif ($_FILES['myfile']['size'] > 200000000) { // file shouldn't be larger than 20Megabyte
        echo "File too large!";
        header("location:index.php?error");
     } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO  nrconewdb.mainslider(title, description, imageurl, date) VALUES ('$title','$description','$destination','$created_date')";
            if (mysqli_query($connect, $sql)) {
           echo "File uploaded successfully";
                header("location:index.php?success");
             }
        } else {
           // echo "Failed to upload file.";
         }
    }

?>
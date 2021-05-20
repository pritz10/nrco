<?php require_once 'db.php'; ?>
<?php 
    $filename = $_FILES['myfile']['name'];
    $name = $_POST['name'];
    $tags = $_POST['tags'];
    $created_date = date("d-m-y H:i");
    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf'])) {
      $msg = "You file extension must be  .pdf";
       header("location:Bulletinboard.php?msg=$msg");
 
     } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 20Megabyte
        //echo "File too large!";
        $msg = "File too large! Should be < 10 MB";
       header("location:Bulletinboard.php?msg=$msg");
     } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO  nrconewdb.bulletin_board (name, pdfurl, tags, date) VALUES ('$name','$destination','$tags','$created_date')";
            if (mysqli_query($connect, $sql)) {
              //  echo "File uploaded successfully";
                header("location:Bulletinboard.php?success");

             }
        } else {
         $msg = "Server busy try again later";
       header("location:Bulletinboard.php?msg=$msg");
      }
    }

?>
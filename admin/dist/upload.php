<?php 
$json = array();
if(!empty($_FILES['upl_file'])){ 
    $dir = "./uploads/"; 
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf', 'doc', 'docx'); 
    $fileName = basename($_FILES['upl_file']['name']); 
    $filePath = $dir.$fileName; 
    // Check whether file type is valid 
    $fileType = pathinfo($filePath, PATHINFO_EXTENSION); 
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to the server 
        if(move_uploaded_file($_FILES['upl_file']['tmp_name'], $filePath)){ 
            $json = 'success'; 
        } else {
            $json = 'failed';
        }
    } 
}
header('Content-Type: application/json');
echo json_encode($json);
?>
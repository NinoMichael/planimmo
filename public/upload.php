<?php
$response = array('success' => false, 'fileName' => '');

if ($_FILES['imgUser']['error'] === UPLOAD_ERR_OK) {
    $filename = $_FILES['imgUser']['name'];
    $targetPath = 'image/' . $filename;

    if (move_uploaded_file($_FILES['imgUser']['tmp_name'], $targetPath)) {
        $response['success'] = true;
        $response['fileName'] = $filename;
    } else {
        $response['error'] = 'File upload failed.';
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>

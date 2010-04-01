<?php
/*
error_log("upload called " . print_r($_FILES, 1) . "\n", 3, "/tmp/upload.txt");

if (isset($_FILES['file'])) {
    $ok = move_uploaded_file($_FILES['file']['tmp_name'], 'tempup/' . $_FILES['file']['name']);
    if (!$ok) {
        header("HTTP/1.0 500 Internal Server Error");
        echo "File Permission Problems";
        exit;
    }
 echo "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"]) . "/tempup/" .$_FILES['file']['name'];
}
*/
?>

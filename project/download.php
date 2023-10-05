<?php
$filename = "image.jpg"; // Path to your image file
$downloadFilename = "image.jpg"; // Desired filename for download

// Set headers for download
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$downloadFilename\"");
readfile($filename);
?>

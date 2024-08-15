<?php
// تحديد مسار الملف النصي
$filename = 'data.txt';

// قراءة البيانات من الملف
if (file_exists($filename)) {
    $data = file_get_contents($filename);

    echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><title>Dashboard</title><link rel='stylesheet' href='styles.css'></head><body><div class='container'><h1>Visitor Data</h1>";

    // عرض البيانات في تنسيق النصوص
    echo "<pre>$data</pre>";

    echo "</div></body></html>";
} else {
    echo "File not found.";
}
?>

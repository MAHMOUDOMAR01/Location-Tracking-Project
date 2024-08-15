<?php
// جمع عنوان IP وبيانات الـ User Agent
$ip_address = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$latitude = isset($_GET['lat']) ? $_GET['lat'] : 'unknown';
$longitude = isset($_GET['long']) ? $_GET['long'] : 'unknown';

// تحديد مسار الملف النصي
$filename = 'data.txt';

// فتح الملف للنصوص أو إنشاؤه إذا لم يكن موجوداً
$file = fopen($filename, 'a');

if ($file) {
    // كتابة البيانات إلى الملف
    $data = "IP Address: $ip_address\nUser Agent: $user_agent\nLatitude: $latitude\nLongitude: $longitude\n\n";
    fwrite($file, $data);
    fclose($file);
    echo "Data recorded successfully.";
} else {
    echo "Error: Unable to open file.";
}
?>

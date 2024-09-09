<?php
// تحديد ملف لتخزين البيانات
$logfile = 'ip_log.txt';

// الحصول على عنوان IP للزائر
$ip = $_SERVER['REMOTE_ADDR'];

// الحصول على توقيت الزيارة
$timestamp = date('Y-m-d H:i:s');

// إنشاء سجل
$logEntry = "IP: $ip - Date: $timestamp\n";

// كتابة السجل في الملف
file_put_contents($logfile, $logEntry, FILE_APPEND);

echo "Your IP has been logged.";
?>

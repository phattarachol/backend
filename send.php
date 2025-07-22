<?php
// อนุญาตเฉพาะ POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // กำหนดอีเมลผู้รับ
    $to = "tobtabphx@gmail.com";

   // รับข้อมูลจากฟอร์ม
    $name = htmlspecialchars($_POST['name'] ?? 'Unknown');
    $email = htmlspecialchars($_POST['email'] ?? 'No email');
    $subjectInput = htmlspecialchars($_POST['subject'] ?? 'No subject');  // << เพิ่มตรงนี้
    $message = htmlspecialchars($_POST['message'] ?? 'No message');

    // เตรียมเนื้อหาอีเมล
    $subject = "New Message: $subjectInput";   // << ใช้ subject ที่รับมา
    $body = "From: $name\nEmail: $email\nSubject: $subjectInput\n\nMessage:\n$message";
    $headers = "From: $email";


    // ส่งอีเมล
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>

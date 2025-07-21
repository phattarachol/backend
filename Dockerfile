# ใช้ PHP Apache image สำเร็จรูป
FROM php:8.1-apache

# คัดลอกไฟล์ทั้งหมดเข้า Apache
COPY . /var/www/html/

# เปิดพอร์ต
EXPOSE 80

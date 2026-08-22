# EndoCare

نظام ويب لإدارة مركز متخصص في الغدد الصماء والسكري. يتيح المشروع عرض الخدمات والأطباء، إنشاء حسابات للمستخدمين، وتسجيل مواعيد المرضى.

## المتطلبات

- XAMPP مثبت في `E:\xampp`
- Apache
- MySQL
- PHP مع إضافتي `PDO_MySQL` و`MySQLi`

## التشغيل محليًا

1. شغّل Apache وMySQL من XAMPP.
2. تأكد من وجود المشروع في:

   `E:\xampp\htdocs\EndoCare`

3. أنشئ قاعدة البيانات `endocare_db` في phpMyAdmin أو نفّذ SQL التالي من MySQL:

```sql
CREATE DATABASE IF NOT EXISTS endocare_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE endocare_db;

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    password CHAR(40) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uq_users_phone (phone)
);

CREATE TABLE IF NOT EXISTS schedul (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    patient_name VARCHAR(100) NOT NULL,
    patient_phone VARCHAR(20) NOT NULL,
    state VARCHAR(255) NOT NULL,
    `date` DATE NOT NULL,
    PRIMARY KEY (id)
);
```

4. افتح الرابط:

   http://localhost/EndoCare/

## إعداد قاعدة البيانات

إعداد الاتصال موجود في:

`core/db_connect/db_connect.php`

الإعداد الافتراضي هو:

- المضيف: `localhost`
- قاعدة البيانات: `endocare_db`
- المستخدم: `root`
- كلمة المرور: فارغة

## بنية المشروع

```text
EndoCare/
├── controllers/       منطق تسجيل الدخول والحجوزات
├── core/
│   ├── constants/     المسارات والثوابت
│   ├── db_connect/    الاتصال بقاعدة البيانات
│   ├── functions/     الدوال المساعدة
│   └── sheards/       الرأس والتذييل المشترك
├── data/              بيانات المشروع
├── view/
│   ├── css/           ملفات التنسيق
│   ├── html/          صفحات PHP
│   └── img/           الصور
└── initionl.php       نقطة البداية
```

## الصفحات الرئيسية

- الصفحة الرئيسية: `view/html/home_scereen.php`
- الخدمات: `view/html/services_scereen.php`
- الأطباء: `view/html/doctors_scereen.php`
- تسجيل الدخول وإنشاء الحساب: `view/html/login_and_signup_scereen.php`
- حجز موعد: `view/html/booking_scereen.php`
- عرض الحجوزات: `view/html/display_patients.php`

## GitHub

المستودع:

https://github.com/ANAS-ZAID/EndoCare

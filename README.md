# TaskFlow API

TaskFlow API is a simple and robust **To-Do List API** built with **Laravel 11**, designed for learning and real-world practice in API development. It offers essential CRUD operations for tasks with user authentication using Laravel Sanctum. No Blade or frontend components are included—this project focuses purely on backend API logic.

---

## 🚀 Features

* **User Authentication** (Register & Login) using Laravel Sanctum.
* **CRUD Operations for Tasks** (Create, Read, Update, Delete).
* **Task Status Updates** (Mark as Complete / Incomplete).
* **Each user can manage their own tasks**.
* **API Resources** for clean JSON responses.
* **Postman Collection** included for testing.

---

## 🛠️ Tech Stack

* **PHP 8.2**
* **Laravel 11**
* **Laravel Sanctum** (API Token Authentication)
* **Eloquent ORM**
* **MySQL / SQLite (for testing)**
* **Postman** (for API Testing)

---

## 📂 Project Structure

```
app/
 └── Http/
      ├── Controllers/APIs
      │     ├── AuthController.php
      │     └── TaskController.php
      └── Resources/
            └── TaskResource.php

routes/
 └── api.php

app/Models/
 ├── User.php
 └── Task.php

database/migrations/
database/factories/
```

---

## 🔐 Authentication (Laravel Sanctum)

This API uses Sanctum for token-based authentication.

### Endpoints:

* `POST /api/register` → User Registration
* `POST /api/login` → User Login (Returns API Token)

### Usage:

All task-related routes are protected and require Bearer Token in the header.

---

## 📋 API Endpoints

| Method | Endpoint        | Description               |
| ------ | --------------- | ------------------------- |
| POST   | /api/register   | Register new user         |
| POST   | /api/login      | Login and get API token   |
| GET    | /api/tasks      | Get all tasks (user only) |
| POST   | /api/tasks      | Create a new task         |
| GET    | /api/tasks/{id} | Get task by ID            |
| PUT    | /api/tasks/{id} | Update task title/status  |
| DELETE | /api/tasks/{id} | Delete task               |

---

## 📂 Installation

1. Clone the repository

```bash
git clone https://github.com/heshamkamal7/TaskFlow-API.git
cd taskflow-api
```

2. Install dependencies

```bash
composer install
```

3. Setup environment file

```bash
cp .env.example .env
```

4. Generate application key

```bash
php artisan key:generate
```

5. Run migrations

```bash
php artisan migrate
```

6. Install Sanctum

```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```

7. Serve the application

```bash
php artisan serve
```

---

## 📬 API Testing with Postman

* Import the provided **Postman Collection** file.
* Register a new user.
* Copy the returned token and use it as **Bearer Token** for all task routes.

---

## 🧪 Running Tests

```bash
php artisan test
```

---

## 📄 License

This project is open-source and available under the MIT License.

---

## ✨ Author

* **Hesham Kamal**

---

## 📌 Notes

* This API is built for backend practice and can be connected to any frontend (React, Vue, Mobile Apps).
* Focused on clean code structure, API Resource formatting, and token authentication best practices.
   


واجهة برمجة TaskFlow 🚀
واجهة برمجة تطبيقات بسيطة وقوية لقائمة المهام مبنية باستخدام Laravel 11، مصممة للتعلم والتطبيق العملي في تطوير الـ API.  تقدم عمليات CRUD الأساسية للمهام مع مصادقة المستخدم باستخدام Laravel Sanctum.


✨ المميزات
مصادقة المستخدمين (تسجيل وتسجيل دخول) باستخدام Laravel Sanctum
عمليات CRUD للمهام (إنشاء، قراءة، تحديث، حذف)
تحديث حالة المهام (تحديد كمكتملة / غير مكتملة)
كل مستخدم يمكنه إدارة مهامه الخاصة
موارد API للردود JSON النظيفة
مجموعة Postman مضمنة للاختبار
   

🛠️ التقنيات المستخدمة
PHP 8.2
Laravel 11
Laravel Sanctum (مصادقة توكن API)
Eloquent ORM
MySQL / SQLite (للاختبار)
Postman (لاختبار API)
   

📂 هيكل المشروع
app/
 └── Http/
      ├── Controllers/
      │     ├── AuthController.php
      │     └── TaskController.php
      └── Resources/
            └── TaskResource.php

routes/
 └── api.php

app/Models/
 ├── User.php
 └── Task.php

database/migrations/
database/factories/


app/
 └── Http/
      ├── Controllers/APIs
      │     ├── AuthController.php
      │     └── TaskController.phpControllers/
      └── Resources/
            └── TaskResource.php

routes/
 └── api.php

app/Models/
 ├── User.php
 └── Task.php

database/migrations/
database/factories/


الطريقة	المسار	الوصف
POST	/api/register	تسجيل مستخدم جديد
POST	/api/login	تسجيل الدخول
GET	/api/tasks	عرض جميع المهام
POST	/api/tasks	إنشاء مهمة جديدة
GET	/api/tasks/{id}	عرض مهمة محددة
PUT	/api/tasks/{id}	تحديث عنوان/حالة المهمة
DELETE	/api/tasks/{id}	حذف مهمة


📂 التثبيت  

1.استنساخ المستودع
git clone https://github.com/heshamkamal7/TaskFlow-API.git
cd taskflow-api  

2.تثبيت التبعيات
composer install


3.إعداد ملف البيئة 
cp .env.example .env 

4.توليد مفتاح التطبيق
php artisan key:generate 

5.تشغيل الترحيلات 
php artisan migrate


6.تثبيت Sanctum 
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider" 


7.تشغيل التطبيق 
php artisan serve 


📬 اختبار API باستخدام Postman
استيراد ملف مجموعة Postman المرفق
تسجيل مستخدم جديد
نسخ التوكن المُرجع واستخدامه كـ Bearer Token لجميع مسارات المهام



🧪 تشغيل الاختبارات 
php artisan test


📄 الترخيص
هذا المشروع مفتوح المصدر ومتاح تحت رخصة MIT.


👨‍💻 المطور
هشام كمال  


📌 ملاحظات
تم بناء هذه الواجهة للتدريب على الواجهات الخلفية ويمكن ربطها بأي واجهة أمامية (React، Vue، تطبيقات الجوال)
التركيز على هيكل الكود النظيف، تنسيق موارد API، وأفضل ممارسات مصادقة التوكن 

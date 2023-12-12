# Welcome To To-Do List Apps
Ini adalah aplikasi untuk membuat To-Do List anda sendiri. Aplikasi ini dibangun dengan Laravel + Vite

## Install The App
**1. Install Dependencies**
**1.1. Laravel**
    
    composer install
**1.2. Vite**

    npm i

**2. Create a Copy of the Environment File**

    cp .env.example .env

**3. Generate Application Key**

    php artisan key:generate

**4. Configure Database**

Buka file .env dan atur detail koneksi database sesuai dengan pengaturan Anda (database name, username, password).

**5. Run Migrations**

    php artisan migrate
## Start The App

Untuk memulai aplikasi, anda perlu `run` 2 console

**Console Pertama**

    npm run dev

**Console Kedua**

    php artisan serve

Kemudian buka `http://127.0.0.1:8000/`atau link host yang tertera pada **console Laravel** anda.

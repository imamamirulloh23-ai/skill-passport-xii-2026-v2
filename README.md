# skill-passport-xii-2026

Panduan singkat untuk men-setup proyek ini setelah clone.

1. Clone repo ini
```bash
git clone https://github.com/imamamirulloh23-ai/skill-passport-xii-2026-v2.git
cd skill-passport-xii-2026
```

2. Install dependency PHP
```bash
composer install
```

3. Salin file lingkungan dan sesuaikan
```bash
cp .env.example .env
# lalu edit .env sesuai konfigurasi database dan environment Anda
```

4. Generate application key
```bash
php artisan key:generate
```

5. Migrasi dan seed database
```bash
php artisan migrate --seed
```

6. Jalankan Laravel dev server (opsional)
```bash
php artisan serve
# akses di http://127.0.0.1:8000
```

7. Cek database
- Pastikan koneksi DB di `.env` benar (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD).
- Verifikasi tabel dan data setelah migrate/seed menggunakan client DB (MySQL Workbench, TablePlus, atau `mysql`/`psql` CLI) atau:
```bash
php artisan tinker
>>> DB::table('users')->count();
```

Selesai.

- Jangan push langsung ke `main`. Buat branch per fitur, misalnya `git checkout -b fitur-grid`, lalu buat pull request.
- Perubahan struktur database ditulis sebagai migration baru: `php artisan make:migration nama_perubahan`. Jangan mengubah migration lama yang sudah di-push.
- Setelah `git pull`, jalankan `composer install` dan `php artisan migrate`.
- Jangan commit file `.env`, folder `vendor/`, atau `node_modules/`.


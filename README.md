# geofencing
Penerapan teknik Geofencing di android, dengan memberikan toast jika user berada dalam area yang ditentukan. Hal ini berguna untuk membuat notifikasi semisal anda memasuki kawasan rawan. Ini bisa dikembangkan untuk validasi absensi online menggunakan android, dengan logic misalkan halaman absen akan bisa diakses jika GPS user berada dalam area yang ditentukan.

<a href='https://postimg.cc/D80DNtQ3' target='_blank'><img src='https://i.postimg.cc/15rQ8SfX/geofencing.jpg' border='0' alt='geofencing'/></a>

## Cara installasi
## Web Rest API (Laravel)
- git clone
- composer install
- buat database dengan nama: mygecko
- copy file .env.example di directory yang sama dan rename menjadi .env
- lakukan pengaturan database di file .env 
- ketikkan di terminal = php artisan key:generate
- ketikkan di terminal = php artisan migrate:fresh --seed
- ketikan di terminal = php artisan serve
- username dan password bisa dicek di Database/UserSeeder.php

##Android
- Buka dengan aplikasi Android Studio
- Jalankan dengan emulator


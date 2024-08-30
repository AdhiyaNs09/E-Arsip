Menu:
1. dashboard
2. guru
3. siswa
4. mata pelajaran
5. jadwal pelajaran
6. arsip
7. manjamen role

requirement:
1. composer
2. xampp
3. visual studio

Cara menjalankan:
1. clone repository kedalam penyimpanan
2. buka proyek menggunakan visual studio, lalu jalankan command "composer install" pada terminal. Jika tidak bisa gunakan command "comoposer update"
3. nyalakan apache dan mysql pada xampp.
4. rename file env menjadi .env
5. Buat database dengan nama e_arsip.
6. kemudian konfigurasikan file .env untuk menghubungkan database yang sudah dibuat pada bagian database.menjadi
database.default.hostname = localhost
database.default.database = e_arsip
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
7. setelah itu migrasi database dengan menjalankan command "php spark migrate --all" pada terminal visual studio.
8. jalankan proyek menggunakan command "php spark serve".
9. kemudian masuk ke phpmyadmin dan buka tabel aut_groups pada databasenya. Dan tambahkan 2 data yaitu admin dan user pada tabel auth_groups.
10. jika ingin belum mempunyai pengguna admin maka jalankan sql berikut
UPDATE auth_groups_users
SET group_id = 1 // jika 1 maka menjadi admin, jika 2 maka menjadi user sesuai dengan id, yang anda tambahkan pada tabel auth_groups.
WHERE user_id = 1; //id user yang akan anda ganti menjadi admin atau user. id tersebut sesuai dengan pada tabel user

# PROJECT UJIAN TENGAH SEMESTER - K3519053
### _APLIKASI GAME PENJUMLAHAN SEDERHANA_
#### Aplikasi di-deploy di: https://mnazw.me/tugas/utspemweb/
# ----------------------------------------------------------
## Keterangan
- Sebelum mulai game, player diminta memasukkan nama dan email terlebih dahulu. Apabila sebelumnya sudah pernah mengisi, maka tidak perlu memasukkan lagi
- Dalam setiap permainan, player diberikan modal lives sebanyak 5, dan skor awal 0.
- Setiap kali jawaban yang diberikan salah, maka lives berkurang satu dan skor berkurang 2
- Setiap kali jawaban yang diberikan benar, maka skor bertambah 10
- Permainan berakhir (game over) jika livesnya habis
- Setelah permainan berakhir, maka akan muncul hall of fame yang memunculkan 10 players yang
menghasilkan skor tertinggi. Data permainan disimpan ke dalam database MySQL.
# ----------------------------------------------------------
## Files
- index.php = halaman awal, jika belum terdaftar akan redirect ke form.html. Jika sudah terdaftar akan langsung menampilkan tampilan awal (sebelum masuk ke game).
- form.html = halaman input nama dan email jika user belum terdaftar.
- proses.php = berisi script untuk memproses data yang diinput dari form.html (set cookie nama dan email).
- logout.php = berisi script untuk menghapus cookie jika user logout/menekan tulisan "klik disini" pada bagian "Bukan anda?" di index.php.
- dbconfig.php = berisi konfigurasi/parameter koneksi database, akan di include di app.php.
- app.php = file/script utama, berisi script aplikasi game.
# ----------------------------------------------------------
## Notes
Aplikasi di-deploy di website dengan hosting https://www.educationhost.co.uk/, include MySQL server.

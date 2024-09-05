# Form Kontak

Proyek ini adalah form kontak sederhana yang dibuat menggunakan HTML dan CSS. Form ini menyediakan antarmuka yang mudah digunakan untuk mengumpulkan informasi dasar pengguna seperti nama, NIM, kelas, jenis kelamin, email, dan pesan. Data form akan dikirim ke skrip server-side (`submit.php`) menggunakan metode POST.

## Fitur

- Desain responsif yang memusatkan form di halaman.
- Field input untuk:
  - Nama
  - NIM (Nomor Induk Mahasiswa)
  - Kelas
  - Jenis Kelamin
  - Email
  - Pesan
- Ditata dengan CSS untuk tampilan yang bersih dan modern.
- Tombol kirim dengan efek hover.

## File

- `index.html`: Berisi struktur dan styling dari form kontak.

## Cara Menggunakan

1. Clone repositori ini atau unduh file `index.html`.
2. Buka `index.html` di browser web untuk melihat form.
3. Agar form berfungsi, Anda memerlukan skrip server-side (misalnya, `submit.php`) yang menangani data form yang dikirim melalui metode POST.

## Setup

1. Pastikan Anda memiliki server web yang dikonfigurasi untuk menangani pengiriman form.
2. Buat file `submit.php` atau sesuaikan atribut `action` pada form agar sesuai dengan skrip server-side Anda.
3. Jika menggunakan PHP, contoh dasar untuk `submit.php` bisa seperti ini:

    ```php
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $nim = $_POST['nim'];
        $class = $_POST['class'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        // Proses data form (misalnya, simpan ke database, kirim email, dll.)
        
        echo "Terima kasih, $name! Pesan Anda telah diterima.";
    }
    ?>
    ```

4. Sesuaikan skrip `submit.php` sesuai kebutuhan Anda (misalnya, validasi input, menyimpan data ke database, mengirim notifikasi email, dll.).

## Gaya

CSS disematkan di dalam file HTML di bawah tag `<style>`. Ini mencakup:

- Styling untuk container form, field input, dan tombol.
- Layout responsif menggunakan Flexbox untuk memusatkan form di halaman.
- Efek hover sederhana pada tombol kirim untuk meningkatkan pengalaman pengguna.

## Lisensi

Silakan gunakan dan modifikasi kode ini untuk proyek pribadi atau komersial Anda.

---

Form ini menyediakan dasar untuk form kontak. Tergantung kebutuhan Anda, Anda mungkin perlu menambahkan JavaScript untuk validasi form, penanganan kesalahan, atau fitur tambahan lainnya.


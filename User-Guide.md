![logo-ijo](https://github.com/sdmalfian/we-cycle/assets/53588747/9ae0ab1d-0637-40a7-8ba9-f27d58cc6df5)
<br>
<h1>Panduan Penggunaan We-Cycle</h1>

+ [About](#about)
+ [CMS Admin](#admin)
+ [Aplikasi User](#user)

## Panduan Penggunaan <a name = "about"></a>
Setelah berhasil menginstall we-cycle, aplikasi ini membutuhkan input data lebih lanjut oleh admin agar aplikasi ini bisa berjalan dengan baik. Admin dapat mengelola data bank sampah menggunakan CMS yang telah disediakan dengan mengakses link `http://localhost:8000/admin` dengan kredensial sebagai berikut:

    username: admin@crudbooster.com
    password: 123456

## CMS Admin <a name = "admin"></a>
Data yang bisa dikelola oleh Admin pada CMS adalah:

 1. **Data Kategori Sampah.** <br> Data ini perlu ditambahkan untuk mengkategorikan sampah sesuai dengan jenisnya. Berikut adalah contohnya:
  ![image](https://github.com/sdmalfian/we-cycle/assets/53588747/039e6018-700a-4e9b-997f-45f8337066f5)
 2. **Data Sampah.** <br> Admin bisa menambahkan data sampahsetelah membuat kategori sampah. Berikut adalah contoh data sampah yang sudah ditambahkan: 
![image](https://github.com/sdmalfian/we-cycle/assets/53588747/71d6a1b7-f1cc-4d34-8119-7c781d11c711)
 3. **Data Reward.** <br> Reward adalah hadiah yang bisa ditukarkan oleh nasabah bank sampah. Reward dibeli menggunakan poin yang dikumpulkan oleh nasabah setiap kali melakukan transaksi pengumpulan sampah ke bank sampah. 
![image](https://github.com/sdmalfian/we-cycle/assets/53588747/9d7ab499-9676-43df-927e-e34dff8e532c)
 4. **Data Nasabah.** <br> Data ini adalah data nasabah yang sudah mendaftar ke website we-cycle. Admin dapat menambah, mengubah, dan menghapus data nasabah  
 5. **Data Transaksi.** <br> Data ini adalah kumpulan data dari transaksi penukaran sampah ke bank sampah oleh Nasabah. Pada prakteknya, Nasabah akan datang ke bank sampah secara langsung lalu Admin akan mencatat jenis sampah, berat, total pendapatan,
    dan poin yang akan didapat oleh nasabah dari penukaran sampah yang dilakukan. 
![image](https://github.com/sdmalfian/we-cycle/assets/53588747/e9fbd00b-8cd8-47c3-8115-9dd0e3d60cae)
 6. **Data Poin.** <br> Admin dapat mengelola data poin yang telah dikumpulkan oleh nasabah pada tiap transaksi. 
 7. **Data Tukar Poin.** <br> Data dari penukaran poin yang dilakukan oleh Nasabah. Admin dapat mengubah status penukaran poin yang terdiri dari:
      - Pending: Nasabah baru mengajukan penukaran point sesuai dengan reward yang diinginkan
      - On Proses: Admin akan memeriksa stok reward dan memberi tahu nasabah jika reward tersebut sudah bisa diambil
      - Diterima: Admin akan mengubah status menjadi "Diterima" apabila reward tersebut telah diterima oleh User
![image](https://github.com/sdmalfian/we-cycle/assets/53588747/f327fb9a-2a05-4cd0-86e4-b61891c790da)


## Aplikasi Nasabah <a name = "user"></a>
Fitur utama dari aplikasi Nasabah yang bergantung pada CMS Admin adalah:
-   **Lihat Sampah**
-   **Lihat Reward**
-   **Lihat Riwayat Transaksi**
-   **Tukar Poin dengan Reward**

Nasabah akan bisa menggunakan fitur-fitur di atas apabila Admin sudah menginput data penting pada bagian sebelumnya. Berikut adalah tampilan dari aplikasi User:
![868shots_so](https://github.com/sdmalfian/we-cycle/assets/53588747/767ede92-8e49-42dc-8a72-f8bc33d02612)


# Scholarium
### The Modern Scholarly Publishing Suite

<div align="center">
  <img src="https://via.placeholder.com/800x200/0d1117/58a6ff?text=SCHOLARIUM" alt="Scholarium Banner" />
</div>

<div align="center">

  ![PHP Version](https://img.shields.io/badge/PHP-8.4-blue?style=for-the-badge&logo=php)
  ![Build Status](https://img.shields.io/badge/build-stable-brightgreen?style=for-the-badge)
  ![License](https://img.shields.io/badge/license-GPL%20v3-yellow?style=for-the-badge)

</div>

<br/>

**Scholarium** adalah platform manajemen editorial dan penerbitan jurnal ilmiah modern yang menjembatani kesenjangan antara alur kerja akademik tradisional dan tuntutan digital masa kini.

Dibangun di atas fondasi kokoh **Open Journal Systems (OJS) 2.4.8.5** namun telah direkayasa ulang sepenuhnya untuk berjalan mulus di lingkungan **PHP 8.4**, Scholarium menghadirkan pengalaman pengguna premium yang menyaingi platform komersial dengan biaya yang ramah bagi jurnal nasional dan institusi.

---

## 🚀 Mengapa Scholarium?

Banyak jurnal di Indonesia masih bertahan di OJS 2 karena kenyamanan antarmuka dan ekosistem plugin yang mapan. Namun, ketidakmampuan OJS 2 berjalan di server modern (PHP 7.4+) seringkali menjadi batu sandungan. **Scholarium** hadir sebagai solusi *drop-in replacement* yang revolusioner:

- **Modern Tech Stack:** Berjalan 100% tanpa error di PHP 8.4.
- **Fintech-Ready:** Alur keuangan jurnal menjadi otomatis tanpa tambahan plugin pihak ketiga yang rumit.
- **Familiar Workflow:** Editor, Reviewer, dan Author tetap menikmati antarmuka OJS 2 yang familier, namun dengan performa dan fitur OJS versi masa depan.

---

## ✨ Fitur Unggulan

### 💎 Inti Editorial Modern
- **Dashboard Insight Modern:** Navigasi *highlight* artikel real-time, visualisasi progres editorial, dan pusat kendali yang dirancang untuk produktivitas Editor serta Reviewer.
- **Zero-Warning Guarantee:** 51+ potensi *warning* dan *error* kompatibilitas PHP 8 telah dieliminasi total. Sistem berjalan senyap dan cepat.

### 💰 Otomatisasi Finansial (Fintech-Ready Workflow)
- **Integrasi Payment Gateway Native:** Dukungan langsung untuk **Xendit** dan **Midtrans**. Tidak perlu lagi instalasi plugin payment manual yang rentan konflik.
- **Auto-Generated Invoice PDF:** Setiap kali *Article Processing Charge (APC)* dibayar, sistem otomatis membuat dan mengirimkan **Invoice PDF** ke email Author.
- **Letter of Acceptance (LoA) Otomatis:** Proses administrasi penerimaan naskah menjadi sangat cepat; LoA langsung terbit setelah pembayaran terverifikasi.

### 📜 Apresiasi Mitra Bestari
- **Sertifikat Reviewer & Editor Otomatis:** Sistem akan otomatis menerbitkan sertifikat digital untuk reviewer dan editor yang telah menyelesaikan tugasnya, memperkuat rekognisi dan apresiasi kontributor jurnal.

### ⚙️ Keunggulan Teknis
- **PHP 8.4 Native Ready:** Memanfaatkan fitur-fitur terbaru PHP untuk keamanan dan kecepatan yang lebih baik (*JIT Compilation ready*).
- **Enhanced Installation Wizard:** UI instalasi modern dan futuristik dengan *real-time monitoring* proses setup.

---

## 📋 Persyaratan Sistem

| Komponen       | Spesifikasi Minimum                          |
| :------------- | :------------------------------------------- |
| **PHP**        | 7.4+ (Dioptimalkan untuk **PHP 8.4**)        |
| **Database**   | MySQL 5.7+ / MariaDB 10.2+ / PostgreSQL 9.5+ |
| **Web Server** | Apache 2.4+ / Nginx 1.14+                    |
| **Memory**     | 256MB+ PHP Memory Limit                      |
| **Storage**    | 500MB+ Ruang Disk Kosong                     |

---

## 🔧 Instalasi Cepat

1.  **Clone Repositori**
    ```bash
    git clone https://github.com/mokesano/scholarium.git
    cd scholarium
    ```

2.  **Atur Izin Direktori**
    ```bash
    chmod -R 755 .
    chmod -R 777 cache/
    chmod -R 777 files/
    ```

3.  **Jalankan Web Installer**
    Buka browser dan akses:
    ```
    http://domain-anda.com/scholarium/install
    ```
    Ikuti langkah-langkah wizard instalasi yang interaktif.

4.  **Konfigurasi Payment Gateway**
    Setelah instalasi selesai, masuk sebagai *Journal Manager*, buka `Settings > Payments`, dan masukkan API Key Xendit atau Midtrans Anda.

---

## 📚 Dokumentasi & Dukungan

Scholarium mempertahankan struktur direktori dan alur kerja OJS 2.4.8.5. Untuk panduan penggunaan harian, Anda dapat merujuk ke dokumentasi PKP.

- **🐛 Bug & Isu Teknis**: Silakan buka tiket di [GitHub Issues](https://github.com/mokesano/scholarium/issues).
- **💬 Diskusi Komunitas**: Bergabunglah di [GitHub Discussions](https://github.com/mokesano/scholarium/discussions) atau forum [OJS Community Indonesia](https://forum.pkp.sfu.ca/).

---

## 📜 Lisensi

Proyek ini dilisensikan di bawah **GNU General Public License v3.0**. Anda bebas menggunakan, memodifikasi, dan mendistribusikannya sesuai dengan ketentuan lisensi. Lihat file [LICENSE](LICENSE) untuk detail lengkap.

---

## 🙏 Ucapan Terima Kasih

Scholarium dapat terwujud berkat kontribusi luar biasa dari:
- **[Public Knowledge Project (PKP)](https://pkp.sfu.ca/)** atas fondasi Open Journal Systems.
- **Tim WizdamID** atas riset dan pengembangan kompatibilitas PHP 8 yang menjadi dasar sistem ini.
- **Seluruh kontributor dan penguji** yang membantu memuluskan transisi OJS 2 ke masa depan.

---

<div align="center">
  <b>Dibangun dengan ❤️ oleh Komunitas untuk Penerbitan Ilmiah Indonesia</b><br/>
  <i>Scholarium — Where Manuscripts Meet Automation.</i>
</div>

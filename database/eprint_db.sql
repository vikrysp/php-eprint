-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2021 pada 07.28
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eprint_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(10) NOT NULL,
  `id_bidang` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(80) NOT NULL,
  `tanggal_input` datetime NOT NULL,
  `kata_kunci` varchar(100) NOT NULL,
  `abstrak` longtext NOT NULL,
  `file_artikel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_bidang`, `status`, `judul`, `penulis`, `tanggal_input`, `kata_kunci`, `abstrak`, `file_artikel`) VALUES
(16, 26, 1, 'SISTEM MONITORING DAN CONTROL DISTRIBUSI AIR  BERBASIS KOMUNIKASI LoRa                             ', 'Alessandro Augusta santoso*, Susilo Wibowo, Djuwari', '2021-01-07 13:57:09', '(LoRa, database, monitoring, control, Graphical User Interface, flow sensor, ultrasonic, current sen', 'Abstract â€” The University of Surabaya is trying to change all systems that were previously done manually to be automated and to be the pioneers of smart universities in Surabaya. At this time, there is no system at the University of Surabaya that can display water usage data and display conditions as well as control the water distribution system at the University of Surabaya automatically. Through this final project a prototype of the LoRa communication-based water distribution monitoring and control system was created. This Final Project uses LoRa (Long Range) communication to send data between reservoirs to be able to control pumps or valves automatically in addition to the data obtained for control, the data is also sent to the server to be stored in a database. The data obtained in the flowrate reservoir is to determine the flow of incoming water using flow sensors, to determine the condition of the pump used a current sensor and to determine the water level as a water level used ultrasonic sensors. Data is displayed in a GUI (Graphical User Interface). The GUI will display a warning when there is damage in water distribution. \r\n\r\nKeywords: (LoRa, database, monitoring, control, Graphical User Interface, flow sensor, ultrasonic, current sensor.)   \r\n Abstrakâ€” Universitas Surabaya sedang berusaha untuk mengubah semua sistem yang sebelumnya dilakukan secara manual menjadi otomatis dan menjadi pelopor smart university di Surabaya. Pada saat ini, belum ada sistem di Universitas Surabaya yang dapat menampilkan data penggunaan air serta menampilkan kondisi sekaligus melakukan kontrol terhadap sistem distribusi air di Universitas Surabaya secara otomatis. Melalui Tugas akhir ini dibuatlah prototype sistem monitoring dan control distribusi air berbasis komunikasi LoRa. Tugas Akhir ini menggunakan komunikasi LoRa (Long Range) untuk mengirim data antara tempat tandon untuk dapat melakukan kontrol pompa maupun valve secara otomatis selain data yang didapat untuk kontrol, data juga dikirim ke server untuk disimpan dalam database. Data yang diperoleh pada tandon flowrate untuk mengetahui debit air yang masuk menggunakan flow sensor, untuk mengetahui kondisi pompa digunakan current sensor dan untuk mengetahui ketinggian air sebagai water level digunakan sensor ultrasonic. Data ditampilkan dalam GUI (Graphical User Interface). GUI akan menampilkan peringatan saat terjadi kerusakaan dalam distribusi air. \r\nKata kunci: (LoRa, database, monitoring, control, Graphical User Interface, flow sensor, ultrasonic, current sensor.)  ', 'Alessandro Augusta Santosa_160116010_FT_EL.docx'),
(17, 10, 1, 'KEWENANGAN PENGADILAN DALAM MEMBATALKAN SERTIPIKAT HAK ATAS TANAH YANG TELAH DITERBITKAN LEBIH DARI ', 'Amalya Djati', '2021-01-07 13:59:21', 'land registration, certificate of land rights, strength of proof', 'Abstract : The purpose of this study is to analyze the strength of evidence of certificates of land rights before the court and analyze the ratio of decisions of judges who cancel certificates of land rights that have been issued for more than 5 (five) years. The type of research is normative juridical, using the statutory approach, conceptual approach and case approach. From the results of research and discussion found First: certificate of land rights that have been issued for more than 5 (five) years and meet the elements stipulated in Article 32 paragraph (2) Government Regulation Number 24 of 1997 concerning Land Registration has absolute proof power can not be cancelled. Second: the 2 (two) court decisions reviewed show that the strength of proof of certificate of land rights even though it has fulfilled the elements as evidence that has absolute power and cannot be canceled, but in fact the certificate of land rights can still be canceled by the court. In the first case examined, the judge gave consideration in responding to the Defendant\'s exception stating that Article 32 paragraph (2) was the domain / scope of the state administrative court, while the object of the dispute was a dispute over ownership so the exception was rejected. In the second review that was reviewed, the Supreme Court gave legal considerations that the application of Article 32 paragraph (2) did not provide a sense of justice, so the Supreme Court ruled out the validity of Article 32 paragraph (2) and canceled the certificate of rights that had been issued more than 5 (five) year because it is considered a juridical defect.\r\nKeywords: land registration, certificate of land rights, strength of proof', 'Amalya Djati_124216025_FH.pdf'),
(18, 27, 1, 'EVALUASI PENGGUNAAN ANTIBIOTIK PADA PASIEN BEDAH  DI RUMAH SAKIT SWASTA X SURABAYA', 'Nyoman Trisaputra, Rika Yulia', '2021-01-07 14:07:17', 'Surgery, Antibiotics, DDD per 100 bed days, DU 90%, Gyssens.', 'Abstractâ€”The incision in surgical procedure increases the risk of developing sustainable Hospital-Acquired Infections (HAIs) with Site Surgery Infections (SSIs). The primary infection prevention is antibiotics. The use of antibiotics beyond the indication could cause a significant antibiotic resistance therefore evaluation is needed. This research aims to recognize quantity and quality profile in the use on surgical patients in the hospital. Quantity measurement of antibiotics use is the DDD per 100 bed days and DU 90% segment method, whereas quality measurement of antibiotics use is the Gyssens method. This research is observational research with a cross-sectional approach, retrospective data collection, and descriptive analysis. From March 2019 to March 2020, 121 surgeries were obtained. There are 13 types of antibiotics in all types of surgeries with total value DDD per 100 bed days was 55.00. The DDD per 100 bed days was 49.42 in Clean wound, the DDD per 100 bed days was 51.32 in clean-contaminated, the DDD per 100 bed days was 60.62 in the contaminated wound, and the DDD per 100 bed days was 60.99 in Dirty wound. The antibiotics which include in DU 90% segment in all types of surgeries are Ceftriaxone, Cefazolin, Cefuroxime, Cefixime, Metronidazole (iv), Levofloxacin (iv), and Cefotaxime. In all types of surgeries, there are 4 Gyssens categories such as 0 category (47.93%), IIA category (0.83%), IVA category (42.98%), and V category (8.26%). The major type of antibiotic used in all types of surgeries is Ceftriaxone. In Clean and Clean-contaminated wound is Cefazolin, as well as in contaminated and dirty wound is Ceftriaxone. There are 7 types of antibiotics which including the DU 90% segment. The antibiotics quality obtain 4 Gyssens categories and show that the majority it is shows rationality.\r\n\r\nKeywords: Surgery, Antibiotics, DDD per 100 bed days, DU 90%, Gyssens.\r\n\r\nAbstrakâ€”Sayatan pada prosedur pembedahan meningkatkan peluang terjadinya infeksi nosokomial (HAIs) yang berlanjut dengan Site Surgery Infection (SSIs). Pengobatan utama infeksi adalah antibiotik. Penggunaan antibiotik diluar indikasi dapat menyebabkan resistensi antibiotik secara signifikan sehingga perlu di evaluasi. Penelitian ini bertujuan untuk mengetahui profil kuantitas dan kualitas penggunaan antibiotik pada pasien bedah di rumah sakit. Pengukuran kuantitas penggunaan antibiotik menggunakan metode DDD/100 hari rawat inap dan Segmen DU90%, sedangkan kualitas penggunaan antibiotik menggunakan metode Gyssens. Penelitian ini merupakan penelitian observasional dengan pendekatan cross-sectional, pengambilan data restrospektif dan analisa secara deskriptif. Pada periode Maret 2019 â€“ Maret 2020, didapat data sebanyak 121 pembedahan. Terdapat 13 jenis antibiotik pada semua jenis pembedahan dengan total nilai 55.00 DDD per 100 hari rawat inap. Jenis bedah bersih 49.42 DDD per 100 hari rawat inap, bedah bersih-kontaminan 51.32 DDD per 100 hari rawat inap, bedah kontaminan 60.62 DDD per 100 hari rawat inap, serta bedah kotor 60.99 DDD per 100 hari rawat inap. Antibiotik yang masuk ke dalam segmen DU 90% pada semua jenis pembedahan yaitu Ceftriaxon, Cefazolin, Cefuroxim, Cefixime, Metronidazol (iv), Levofloxacin (iv), dan Cefotaxime. Pada semua jenis pembedahan terdapat 4 kategori Gyssens yaitu kategori 0 (47.93%), kategori IIA (0.83%), kategori IVA (42.98%), dan kategori V (8.26%). Antibiotik terbanyak yang digunakan pada semua jenis pembedahan adalah Ceftriaxon, pada bedah bersih dan bersih kontaminan adalah Cefazolin, serta pada bedah kontaminan dan kotor adalah Cetriaxon. Terdapat 7 jenis antibiotik yang masuk segmen DU90%. Kualitas antibiotik memenuhi 4 kategori Gyssens dan mayoritas penggunaannya menunjukkan rasionalitas.\r\n\r\nKata kunci: Pembedahan, Antibiotik, DDD/100 hari rawat inap, DU90%, Gyssens. \r\n', 'NYOMAN TRISAPUTRA_110116299_FF.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_ilmu`
--

CREATE TABLE `bidang_ilmu` (
  `id_bidang` int(10) NOT NULL,
  `nama_bidang` varchar(30) NOT NULL,
  `kategori` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang_ilmu`
--

INSERT INTO `bidang_ilmu` (`id_bidang`, `nama_bidang`, `kategori`) VALUES
(10, 'pidana', 'hukum'),
(11, 'perdata', 'hukum'),
(12, 'klinis', 'psikologi'),
(13, 'pendidikan', 'psikologi'),
(15, 'hewan', 'kedokteran'),
(17, 'informatika', 'teknik'),
(18, 'industri', 'teknik'),
(19, 'kimia', 'teknik'),
(20, 'ekonomi', 'bisnis dan Ekonomika'),
(21, 'manajemen', 'bisnis dan Ekonomika'),
(22, 'akutansi', 'bisnis dan Ekonomika'),
(23, 'penyakit dalam', 'kedokteran'),
(24, 'THT', 'kedokteran'),
(25, 'mesin', 'teknik'),
(26, 'elektronika', 'teknik'),
(27, 'apoteker', 'farmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `pengelola` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama_depan`, `nama_belakang`, `nama`, `password`, `email`, `asal`, `pengelola`, `level`, `status`) VALUES
(16, 'Miftahur Rahman', 'Fibri', 'rahmanfibri', '$2y$10$T1t38KAypZWFKU/i63gGaeiznJVBwNOF2ABCbk0GoQzlZpfHVCj0G', 'rahmanfibri@staff.ub', 'Universitas Surabaya', 'Keluwih: Jurnal Kesehatan dan Kedokteran', 2, 1),
(17, 'admin', 'admin', 'admin', '$2y$10$q5lQfnYKBRDxUpz5xtbPK.HGC.7w3epltQk/M0bQrNbgb7r72ojM2', 'vikrysp@gmail.com', 'Universitas Surabaya', '-', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(10) NOT NULL,
  `id_artikel` int(10) NOT NULL,
  `id_bidang` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  `tanggal_minta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `persetujuan`
--

CREATE TABLE `persetujuan` (
  `id_persetujuan` int(10) NOT NULL,
  `id_artikel` int(10) NOT NULL,
  `id_bidang` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `penulis` varchar(80) NOT NULL,
  `tanggal_input` datetime NOT NULL,
  `kata_kunci` varchar(100) NOT NULL,
  `abstrak` longtext NOT NULL,
  `file_artikel` varchar(100) NOT NULL,
  `tgl_setuju` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `artikel_ibfk_1` (`id_bidang`);

--
-- Indeks untuk tabel `bidang_ilmu`
--
ALTER TABLE `bidang_ilmu`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_bidang` (`id_bidang`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indeks untuk tabel `persetujuan`
--
ALTER TABLE `persetujuan`
  ADD PRIMARY KEY (`id_persetujuan`),
  ADD KEY `id_artikel` (`id_artikel`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_bidang` (`id_bidang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `bidang_ilmu`
--
ALTER TABLE `bidang_ilmu`
  MODIFY `id_bidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id_permintaan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `persetujuan`
--
ALTER TABLE `persetujuan`
  MODIFY `id_persetujuan` int(10) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang_ilmu` (`id_bidang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  ADD CONSTRAINT `permintaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permintaan_ibfk_2` FOREIGN KEY (`id_bidang`) REFERENCES `bidang_ilmu` (`id_bidang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permintaan_ibfk_3` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `persetujuan`
--
ALTER TABLE `persetujuan`
  ADD CONSTRAINT `persetujuan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

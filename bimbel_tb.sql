-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 05:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel_tb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_user`, `nama_admin`, `telepon`, `alamat`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '(+62) 939 8899 403', 'Pagar Alam', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(2, 3, '4', '022 3949 2180', 'Administrasi Jakarta Barat', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(3, 5, '6', '(+62) 849 5256 542', 'Palu', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(4, 7, '8', '(+62) 592 2325 759', 'Pekanbaru', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(5, 9, '10', '0896 8059 1207', 'Tangerang Selatan', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` bigint(20) UNSIGNED NOT NULL,
  `id_pelayanan` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_pelayanan`, `deskripsi`, `bukti_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 1, 'belajar matematika', '1627571878_3.jpg', '2021-07-29 08:17:58', '2021-07-29 08:17:58'),
(2, 2, 'matematika dasar', '1627572856_2.jpg', '2021-07-29 08:34:16', '2021-07-29 08:34:16'),
(3, 1, 'belajar bahasa', '1628083234_2.jpg', '2021-08-04 06:20:34', '2021-08-04 06:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'TK-CALISTUNG'),
(2, '4'),
(3, '5'),
(4, '6'),
(5, '7'),
(6, '8'),
(7, '9');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_07_13_224021_users', 1),
(2, '2021_07_13_224935_pengajar', 1),
(3, '2021_07_13_225005_siswa', 1),
(4, '2021_07_13_225018_admin', 1),
(5, '2021_07_13_230320_kelas', 1),
(6, '2021_07_13_231115_paket', 1),
(7, '2021_07_13_232514_pelayanan', 1),
(8, '2021_07_21_120622_pembayaran', 1),
(9, '2021_07_21_131424_kegiatan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_cash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_angs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `id_kelas`, `tarif_cash`, `tarif_angs`, `created_at`, `updated_at`) VALUES
(1, 'Paket Semester SD', '2,3,4', '3420000', '600000', '2021-07-29 07:58:31', '2021-07-29 07:58:31'),
(2, 'Paket Semester SMP', '5,6,7', '3990000', '700000', '2021-07-29 07:58:31', '2021-07-29 07:58:31'),
(3, 'Paket Reguler Semester 2 + UN SD', '4', '2850000', '', '2021-07-29 07:58:31', '2021-07-29 07:58:31'),
(4, 'Paket Reguler Semester 2 + UN SMP', '7', '3135000', '', '2021-07-29 07:58:31', '2021-07-29 07:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pelayanan` bigint(20) UNSIGNED NOT NULL,
  `id_paket` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_pengajar` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('perlu dibayar','aktif','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_bayar` enum('belum lunas','lunas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `id_paket`, `id_siswa`, `id_kelas`, `id_pengajar`, `status`, `status_bayar`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, 'aktif', 'lunas', '2021-07-29 07:58:31', '2021-07-29 07:58:31'),
(2, 3, 11, 4, 6, 'aktif', 'lunas', '2021-07-29 08:08:00', '2021-07-29 08:11:53'),
(3, 2, 12, 5, 6, 'aktif', 'lunas', '2021-07-29 08:26:47', '2021-07-29 08:29:09'),
(4, 1, 13, 3, 6, 'aktif', 'belum lunas', '2021-07-29 08:31:30', '2021-07-29 08:32:28'),
(5, 2, 14, 6, 6, 'aktif', 'belum lunas', '2021-07-29 08:37:13', '2021-07-29 08:38:01'),
(6, 3, 15, 4, 6, 'aktif', 'lunas', '2021-08-05 18:21:22', '2021-08-05 18:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` bigint(20) UNSIGNED NOT NULL,
  `id_pelayanan` bigint(20) UNSIGNED NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_cek` enum('Belum dicek','Sudah dicek') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pelayanan`, `bukti_pembayaran`, `status_cek`, `created_at`, `updated_at`) VALUES
(1, 1, '1626907810_3784896.jpg', 'Sudah dicek', '2021-07-29 07:58:32', '2021-07-29 07:58:32'),
(2, 2, '1627571307_1.jpg', 'Sudah dicek', '2021-07-29 08:08:27', '2021-07-29 08:11:28'),
(3, 2, '1627571366_Screenshot (2).png', 'Sudah dicek', '2021-07-29 08:09:26', '2021-07-29 08:11:32'),
(4, 3, '1627572446_pic.jpg', 'Sudah dicek', '2021-07-29 08:27:26', '2021-07-29 08:27:55'),
(5, 4, '1627572708_1.jpg', 'Sudah dicek', '2021-07-29 08:31:48', '2021-07-29 08:32:33'),
(6, 5, '1627573052_1.jpg', 'Sudah dicek', '2021-07-29 08:37:32', '2021-07-29 08:37:53'),
(7, 6, '1628212923_1.jpg', 'Sudah dicek', '2021-08-05 18:22:03', '2021-08-05 18:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_pengajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `id_user`, `nama_pengajar`, `telepon`, `alamat`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(1, 11, 'Wardi Wibowo M.M.', '0875 7477 3488', 'singajaya', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(3, 13, 'Endah Purnawati', '0343 4040 7841', 'Tual', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(5, 15, 'Calista Paris Nuraini', '(+62) 241 0443 776', 'Cirebon', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(6, 16, 'Lurhur Pradana', '(+62) 845 7671 065', 'Pangkal Pinang', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(7, 17, 'Legawa Harsana Marpaung', '0909 2343 910', 'Sawahlunto', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(8, 18, 'Raden Thamrin M.Kom.', '(+62) 392 7337 862', 'Balikpapan', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(9, 19, 'Enteng Widodo', '(+62) 439 0039 378', 'Bogor', '2021-07-29', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(10, 20, 'Mahesa Yono Hakim S.Kom', '0447 3909 054', 'Sawahlunto', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_user`, `nama_siswa`, `telepon`, `alamat`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(1, 21, 'Jarwi Himawan Winarno S.Psi', '(+62) 891 644 553', 'Balikpapan', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30'),
(3, 23, 'Muni Rajata', '0922 3224 514', 'Yogyakarta', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30'),
(4, 24, 'Raditya Gading Zulkarnain', '(+62) 611 0329 2253', 'Pontianak', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30'),
(5, 25, 'Mila Wahyuni', '(+62) 446 7587 528', 'Medan', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30'),
(6, 26, 'Yani Lala Pertiwi', '0820 7612 5072', 'Tangerang Selatan', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30'),
(7, 27, 'Hamzah Tugiman Sitorus', '0482 1532 925', 'Sukabumi', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30'),
(8, 28, 'Widya Nasyidah S.H.', '0561 3558 582', 'Administrasi Jakarta Barat', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30'),
(9, 29, 'Darsirah Maheswara', '(+62) 825 672 224', 'Padangsidempuan', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30'),
(10, 30, 'Kayun Megantara', '(+62) 624 1768 1008', 'Bau-Bau', '2021-07-29', '2021-07-29 07:58:30', '2021-07-29 07:58:30'),
(11, 31, 'zikra lailatinnisa', '08976545678', 'singajaya', '2021-07-29', NULL, NULL),
(12, 32, 'nisa', '08990087655', 'Segeran Kidul, Juntinyuat, Kabupaten Indramayu, Jawa Barat 45282', '2021-07-29', NULL, NULL),
(13, 33, 'laila', '0987666544333', 'Segeran Kidul, Juntinyuat, Kabupaten Indramayu, Jawa Barat 45282', '2021-07-29', NULL, NULL),
(14, 34, 'putri', '089777888666', 'kebumen', '2021-07-29', NULL, NULL),
(15, 35, 'riski', '089654345678', 'kebumen', '2021-08-06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','siswa','pengajar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin1@gmail.com', '2021-07-29 07:58:24', '$2y$10$Cpa53up2e6Vkg1VeG3NgTOf3Flyu6MHWU2o0MFyDdovY6A4fnfKlS', 'admin', 'on', 'sFPv0af2kcr4zuVpKZkMAHlrunALYtnjjrGQb861yfnq4Ta8MMrnhsVLmJVr', '2021-07-29 07:58:24', '2021-07-29 07:58:24'),
(2, 'admin2', 'admin2@gmail.com', '2021-07-29 07:58:24', '$2y$10$JnGqUTUDkXscw1JqvdEuL.5quidyf67zc..OKE/8JgWJa/0QxiAyG', 'admin', 'on', 'admin2', '2021-07-29 07:58:24', '2021-07-29 07:58:24'),
(3, 'admin3', 'admin3@gmail.com', '2021-07-29 07:58:24', '$2y$10$hQQeESKeEe/0WJrN4aDzae/Ddw5Tnjg5Q/kulYMc2p2xdWaB5HXeG', 'admin', 'on', 'admin3', '2021-07-29 07:58:24', '2021-07-29 07:58:24'),
(4, 'admin4', 'admin4@gmail.com', '2021-07-29 07:58:24', '$2y$10$hMfYKUeXvY7WMDRMU0pb.uDxRd3t2kSY9mg0IrhtCJMNGE1M895sy', 'admin', 'on', 'admin4', '2021-07-29 07:58:24', '2021-07-29 07:58:24'),
(5, 'admin5', 'admin5@gmail.com', '2021-07-29 07:58:24', '$2y$10$9rPk5MxIeWQrhmkr0LxzQeCMmA7ETpvPyOZ1UfCypfXKJ92uMvDb2', 'admin', 'on', 'admin5', '2021-07-29 07:58:24', '2021-07-29 07:58:24'),
(6, 'admin6', 'admin6@gmail.com', '2021-07-29 07:58:24', '$2y$10$tp3/3euVQvp/NYmxp5kYHuT4Jki59kdlLfVT0fMQ/.nBY5vj6w.SK', 'admin', 'on', 'admin6', '2021-07-29 07:58:25', '2021-07-29 07:58:25'),
(7, 'admin7', 'admin7@gmail.com', '2021-07-29 07:58:25', '$2y$10$9LogXOI4uUYVz6Nw3M8i/.gnmFHK6Y93EmPKn6FRF2LUL.lST1CfG', 'admin', 'on', 'admin7', '2021-07-29 07:58:25', '2021-07-29 07:58:25'),
(8, 'admin8', 'admin8@gmail.com', '2021-07-29 07:58:25', '$2y$10$7XJWMNJNWwKElN.zxYc1h.4NIxMdT2MyHMGFFpuBMCRDPtJ.CJEKS', 'admin', 'on', 'admin8', '2021-07-29 07:58:25', '2021-07-29 07:58:25'),
(9, 'admin9', 'admin9@gmail.com', '2021-07-29 07:58:25', '$2y$10$xXBhUrVR.QLOBSnacJCwJ.ApfKnUl8ngQLB4fuw0a8Vann14qQc4K', 'admin', 'on', 'admin9', '2021-07-29 07:58:25', '2021-07-29 07:58:25'),
(10, 'admin10', 'admin10@gmail.com', '2021-07-29 07:58:25', '$2y$10$o.ur9FbkGib1tMlumRqiLuAyfXNLmjs5QxN51p9dx8pbRvn81TH5W', 'admin', 'on', 'admin10', '2021-07-29 07:58:25', '2021-07-29 07:58:25'),
(11, 'pengajar1', 'pengajar1@gmail.com', '2021-07-29 07:58:25', '$2y$10$PNfuOijUPQd8IHXfRRsBou0fODjiPrVS0VpVtTAONEd2NaKGAvWSy', 'pengajar', 'on', 'PMeKeRPh5gj6E8LjizLfY03Z2K9YJTCKsxpJt1zvz1HTcRMiS5xYgWS8ZPQW', '2021-07-29 07:58:25', '2021-07-29 07:58:25'),
(13, 'pengajar3', 'pengajar3@gmail.com', '2021-07-29 07:58:26', '$2y$10$br/NWJdE.kkBbQSJ1Ej3/Owx18CRZOwUUXslUxWUY2tEtnzeBeGgS', 'pengajar', 'on', 'pengajar3', '2021-07-29 07:58:26', '2021-07-29 07:58:26'),
(15, 'pengajar5', 'pengajar5@gmail.com', '2021-07-29 07:58:26', '$2y$10$yhhEDHU.KOZhQvtNahW2z.csuymOyZAiTWHLlkLCKB4QfiE3lYDNi', 'pengajar', 'on', 'pengajar5', '2021-07-29 07:58:26', '2021-07-29 07:58:26'),
(16, 'pengajar6', 'pengajar6@gmail.com', '2021-07-29 07:58:26', '$2y$10$eDBgpPzgoXMcikb95wh7UOmyNbHTXdr8XfsWSEhvm9qpLu6XT5QmC', 'pengajar', 'on', 'bQBJV15IqwhASwLMabrGwq7z4U8F4emza1hIBkp2vZ7K9Sn98h7b1eV5rShU', '2021-07-29 07:58:26', '2021-07-29 07:58:26'),
(17, 'pengajar7', 'pengajar7@gmail.com', '2021-07-29 07:58:26', '$2y$10$8wNloRN.SM2lPH2OfqJQquaLK2a2W507T2fm/wbS4VjE1VqjhflJS', 'pengajar', 'on', 'pengajar7', '2021-07-29 07:58:26', '2021-07-29 07:58:26'),
(18, 'pengajar8', 'pengajar8@gmail.com', '2021-07-29 07:58:26', '$2y$10$5fTFfv0bKQbKRila5mtuJe0gSFGJmQvVDAxHoMbG.RSJl/KoOKph.', 'pengajar', 'on', 'pengajar8', '2021-07-29 07:58:27', '2021-07-29 07:58:27'),
(19, 'pengajar9', 'pengajar9@gmail.com', '2021-07-29 07:58:27', '$2y$10$pAbHvNL2TApXEdIzfgVpXenlmCmPp1wm4qBrc.yHT3z48SzFL76YC', 'pengajar', 'on', 'pengajar9', '2021-07-29 07:58:27', '2021-07-29 07:58:27'),
(20, 'pengajar10', 'pengajar10@gmail.com', '2021-07-29 07:58:27', '$2y$10$UL7fzzqwjtpdLNgmMHcplOkkPth8IYZik7V2DrIdmBqSGf2EKcjAW', 'pengajar', 'on', 'pengajar10', '2021-07-29 07:58:27', '2021-07-29 07:58:27'),
(21, 'siswa1', 'siswa1@gmail.com', '2021-07-29 07:58:27', '$2y$10$PyhrMqciBZSvvuNHom4X9eK7OPmU4vHZzihowTrr0l.kgK8nyuVIO', 'siswa', 'on', 'Zg61KHx8gMHstpzg0e77J2LxzdJ3g9vbAfAa6IOZaangDrkVtmtAnR98SHtF', '2021-07-29 07:58:27', '2021-07-29 07:58:27'),
(23, 'siswa3', 'siswa3@gmail.com', '2021-07-29 07:58:27', '$2y$10$ZKPSdzXHTzgbanr/0nkP0OllN.83drHlJXWnz6ANR4LvvJifITYlW', 'siswa', 'on', 'siswa3', '2021-07-29 07:58:27', '2021-07-29 07:58:27'),
(24, 'siswa4', 'siswa4@gmail.com', '2021-07-29 07:58:28', '$2y$10$/m.bG6kkQlI4l24I96oiwuT.kM9NIX0fqcCoKPL5KFaqhgdyhSN5K', 'siswa', 'on', 'siswa4', '2021-07-29 07:58:28', '2021-07-29 07:58:28'),
(25, 'siswa5', 'siswa5@gmail.com', '2021-07-29 07:58:28', '$2y$10$fpnXSqq2Tl1l.w6WfQJaYeVItAEwaUvuq.bCMzkZdykmrxWzYxjrG', 'siswa', 'on', 'siswa5', '2021-07-29 07:58:28', '2021-07-29 07:58:28'),
(26, 'siswa6', 'siswa6@gmail.com', '2021-07-29 07:58:28', '$2y$10$taza1bFL8RQxdzIB81wvvekWhPrjw3f0lKndX4j/AoC.FO414c4oi', 'siswa', 'on', 'siswa6', '2021-07-29 07:58:28', '2021-07-29 07:58:28'),
(27, 'siswa7', 'siswa7@gmail.com', '2021-07-29 07:58:28', '$2y$10$31RDz.Ys0hHMLfzVxHQNo.QxHvMdy5lSDghdU58BAVcwOyhMcg6fK', 'siswa', 'on', 'siswa7', '2021-07-29 07:58:28', '2021-07-29 07:58:28'),
(28, 'siswa8', 'siswa8@gmail.com', '2021-07-29 07:58:28', '$2y$10$fjvOMp/P5xbV.U/o5XRlHOtZ2.8Z.gFUm5ibMB6CNp14WhGl7emku', 'siswa', 'on', 'siswa8', '2021-07-29 07:58:28', '2021-07-29 07:58:28'),
(29, 'siswa9', 'siswa9@gmail.com', '2021-07-29 07:58:28', '$2y$10$OD6d30bG/HtLO6rARitn7utsCSgPy5c/p1KjOMH18AkEg8ebNZfVm', 'siswa', 'on', 'siswa9', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(30, 'siswa10', 'siswa10@gmail.com', '2021-07-29 07:58:29', '$2y$10$wb/fQk7j8VTWkToL3ODNBeL.J4My/draMzrZGFaPo8Qr56CDu2tcu', 'siswa', 'on', 'siswa10', '2021-07-29 07:58:29', '2021-07-29 07:58:29'),
(31, 'Zikra@gmail.com', 'zikra@gmail.com', '2021-07-29 08:05:00', '$2y$10$BBxAtineozCXpwfsOEc0EegIzMWsg.ZNjs4773m/zW5xnnYyxglOm', 'siswa', 'on', NULL, '2021-07-29 08:05:01', '2021-07-29 08:07:06'),
(32, 'Nisa@gmail.com', 'nisa@gmail.com', '2021-07-29 08:25:31', '$2y$10$tD0cgX2f8Vf0679ZfvIbbO2tuUGmpnH4kjJDFthOoVDZ5i.0vDCP2', 'siswa', 'on', NULL, '2021-07-29 08:25:31', '2021-07-29 08:26:03'),
(33, 'Laila@gmail.com', 'laila@gmail.com', '2021-07-29 08:30:14', '$2y$10$NHOt5/LdtYrXN/nAprds3urEqaLKme/jQqeRCdVus8olGmnGrSG/e', 'siswa', 'on', NULL, '2021-07-29 08:30:14', '2021-07-29 08:30:42'),
(34, 'Putrifauziahr@gmail.com', 'putrifauziahr@gmail.com', '2021-07-29 08:36:22', '$2y$10$NUQKy9LPeEZHnqXOqafFhe2AQTbVTHO4s4OVrJxvFsGt1pWwAWSji', 'siswa', 'on', NULL, '2021-07-29 08:36:22', '2021-07-29 08:36:45'),
(35, 'Riski@gmail.com', 'riski@gmail.com', '2021-08-05 18:15:41', '$2y$10$tLy2/O.ifqxc2rnDGh1tROhY533pb4t/v39JKKY.ZyPehHWSjYH/6', 'siswa', 'on', NULL, '2021-08-05 18:15:42', '2021-08-05 18:18:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `admin_id_user_foreign` (`id_user`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `kegiatan_id_pelayanan_foreign` (`id_pelayanan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD KEY `pelayanan_id_paket_foreign` (`id_paket`),
  ADD KEY `pelayanan_id_siswa_foreign` (`id_siswa`),
  ADD KEY `pelayanan_id_kelas_foreign` (`id_kelas`),
  ADD KEY `pelayanan_id_pengajar_foreign` (`id_pengajar`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran_id_pelayanan_foreign` (`id_pelayanan`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`),
  ADD KEY `pengajar_id_user_foreign` (`id_user`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `siswa_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_id_pelayanan_foreign` FOREIGN KEY (`id_pelayanan`) REFERENCES `pelayanan` (`id_pelayanan`);

--
-- Constraints for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD CONSTRAINT `pelayanan_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `pelayanan_id_paket_foreign` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `pelayanan_id_pengajar_foreign` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`),
  ADD CONSTRAINT `pelayanan_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_id_pelayanan_foreign` FOREIGN KEY (`id_pelayanan`) REFERENCES `pelayanan` (`id_pelayanan`);

--
-- Constraints for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD CONSTRAINT `pengajar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

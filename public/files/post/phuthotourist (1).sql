-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2024 lúc 01:13 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phuthotourist`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `apply_works`
--

CREATE TABLE `apply_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `place_of_birth` text NOT NULL,
  `current_residence` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `file_cv` varchar(255) NOT NULL,
  `long_day_work` tinyint(4) NOT NULL,
  `overtime` tinyint(4) NOT NULL,
  `previous_workplace` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `recruitment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `central_services`
--

CREATE TABLE `central_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `central_services`
--

INSERT INTO `central_services` (`id`, `title`, `description`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Vui chơi giải trí', 'Với 2 khu giải trí nổi tiếng TP.HCM là Công viên văn hóa Đầm Sen, và khu du lịch sinh thái Vàm Sát (H.Cần Giờ)...', 'central1.png', 1, NULL, NULL),
(2, 'Nhà hàng – Khách sạn', 'Với hệ thống khách sạn Phú Thọ và Ngọc Lan đạt chuẩn 3 sao, chuyên tiếp đón các đoàn thể thao....', 'central2.png', 1, NULL, NULL),
(3, 'Dịch vụ Lữ hành', 'Tổ chức các tour trong và ngoài nước với Trung tâm Dịch vụ du lịch Đầm Sen. Ngoài ra Trung tâm còn thế mạnh là tổ chức...', 'central3.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_type_posts`
--

CREATE TABLE `detail_type_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_post_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fields`
--

CREATE TABLE `fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `fields`
--

INSERT INTO `fields` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hướng dẫn viên', NULL, NULL),
(2, 'Kinh doanh', NULL, NULL),
(3, 'Kỹ sư xây dựng', NULL, NULL),
(4, 'Nhân viên kế toán', NULL, NULL),
(5, 'Nhân viên kĩ thuật', NULL, NULL),
(6, 'Nhân viên phục vụ', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_14_045453_create_type_posts_table', 1),
(6, '2024_10_14_045514_create_central_services_table', 1),
(7, '2024_10_14_045535_create_fields_table', 1),
(8, '2024_10_14_045549_create_type_works_table', 1),
(9, '2024_10_14_045605_create_working_places_table', 1),
(10, '2024_10_14_045624_create_posts_table', 1),
(11, '2024_10_14_045634_create_detail_type_posts_table', 1),
(12, '2024_10_14_045737_create_sliders_table', 1),
(13, '2024_10_14_045759_create_abouts_table', 1),
(14, '2024_10_14_045814_create_recruitments_table', 1),
(15, '2024_10_14_045825_create_apply_works_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL DEFAULT '2024-11-10',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `file`, `view`, `user_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022', 'Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau\r\n\r\nTên hạng mục đấu giá: Hợp', 'post1.png', 'file.pdf', 0, 1, '2024-11-12', NULL, NULL),
(2, 'Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022', 'Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau\r\n\r\nTên hạng mục đấu giá: Hợp', 'post1.png', 'file.pdf', 0, 1, '2024-11-12', NULL, NULL),
(3, 'Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022', 'Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau\r\n\r\nTên hạng mục đấu giá: Hợp', 'post1.png', 'file.pdf', 0, 1, '2024-11-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitments`
--

CREATE TABLE `recruitments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 1,
  `location` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `address` text NOT NULL,
  `job_description` text NOT NULL,
  `date` date NOT NULL,
  `interest` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `field_id` bigint(20) UNSIGNED NOT NULL,
  `type_work_id` bigint(20) UNSIGNED NOT NULL,
  `working_place_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recruitments`
--

INSERT INTO `recruitments` (`id`, `state`, `location`, `quantity`, `address`, `job_description`, `date`, `interest`, `requirement`, `age`, `level`, `field_id`, `type_work_id`, `working_place_id`) VALUES
(1, 0, 'Nhân viên thiết kế đồ họa', 1, '3 Hòa Bình, Phường 3, Quận 11, TP.HCM', 'Thiết kế hình ảnh, brochure, banner, poster, pano, backdrop sân khấu, các loại vé mời … và các ấn phẩm phục vụ sự kiện, truyền thông của công viên.\\nChụp hình, quay phim, dựng video đơn giản.\\nLên phác thảo, trao đổi ý tưởng với quản lý và hoàn thiện thiết kế.\\nCác chi tiết về công việc được trao đổi tại buổi phỏng vấn.', '2024-11-18', 'Được ký hợp đồng lao động, tham gia đầy đủ chế độ BHXH\\nThưởng tháng 13, 14, các ngày lễ, tết trong năm.\\nĐược phục vụ bữa ăn trưa tại nơi làm việc.', 'Tốt nghiệp từ Cao đẳng chuyên ngành Mỹ thuật, Đồ họa....\\r\\nSử dụng thành thạo các phần mềm thiết kế (Photoshop, Corel, Illustrator…).\\r\\nCó khả năng quay và dựng video hấp dẫn người xem', '22 - 27 tuổi', 'Cao đẳng', 5, 2, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022', 'image2.png', 1, NULL, '2024-11-11 09:36:53'),
(2, 'Hơn 1000 bánh chưng lộc\r\ncho khách dâng hương \r\ntượng vua Hùng tại Đầm Sen', 'image 3.png', 1, NULL, NULL),
(3, 'Kết quả đấu giá giữ xe tại \r\nCVVH Đầm Sen 2022', 'image 22.png', 1, NULL, NULL),
(4, 'Kết quả đấu giá giữ xe tại \r\nCVVH Đầm Sen 2022', 'image1.png', 1, NULL, NULL),
(5, 'Kết quả đấu giá giữ xe tại \r\nCVVH Đầm Sen 2022', 'image5.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_posts`
--

CREATE TABLE `type_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_posts`
--

INSERT INTO `type_posts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', NULL, NULL),
(2, 'Tin tức', NULL, NULL),
(3, 'Sự kiện', NULL, NULL),
(4, 'Thông báo', NULL, NULL),
(5, 'Tin cổ đông', NULL, NULL),
(6, 'Hoạt động đoàn thể', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_works`
--

CREATE TABLE `type_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_works`
--

INSERT INTO `type_works` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bán thời gian', NULL, NULL),
(2, 'Nhân viên chính thức', NULL, NULL),
(3, 'Theo ca', NULL, NULL),
(4, 'Thực tập', NULL, NULL),
(5, 'Bán thời gian', NULL, NULL),
(6, 'Nhân viên chính thức', NULL, NULL),
(7, 'Theo ca', NULL, NULL),
(8, 'Thực tập', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin@gmail.com', NULL, 'admin123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `working_places`
--

CREATE TABLE `working_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `working_places`
--

INSERT INTO `working_places` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cà Phê Vườn Đá', NULL, NULL),
(2, 'NH Thủy Tạ Đầm Sen', NULL, NULL),
(3, 'CVVH Đầm Sen', NULL, NULL),
(4, 'Khách sạn Ngọc Lan', NULL, NULL),
(5, 'Khách sạn Phú Thọ', NULL, NULL),
(6, 'KDL Sinh Thái Vàm Sát', NULL, NULL),
(7, 'Trung tâm DVDL Đầm Sen', NULL, NULL),
(8, 'VP Phuthotourist', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `apply_works`
--
ALTER TABLE `apply_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apply_works_recruitment_id_foreign` (`recruitment_id`);

--
-- Chỉ mục cho bảng `central_services`
--
ALTER TABLE `central_services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_type_posts`
--
ALTER TABLE `detail_type_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_type_posts_type_post_id_foreign` (`type_post_id`),
  ADD KEY `detail_type_posts_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `recruitments`
--
ALTER TABLE `recruitments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recruitments_field_id_foreign` (`field_id`),
  ADD KEY `recruitments_type_work_id_foreign` (`type_work_id`),
  ADD KEY `recruitments_working_place_id_foreign` (`working_place_id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_posts`
--
ALTER TABLE `type_posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_works`
--
ALTER TABLE `type_works`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `working_places`
--
ALTER TABLE `working_places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `apply_works`
--
ALTER TABLE `apply_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `central_services`
--
ALTER TABLE `central_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `detail_type_posts`
--
ALTER TABLE `detail_type_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `recruitments`
--
ALTER TABLE `recruitments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `type_posts`
--
ALTER TABLE `type_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `type_works`
--
ALTER TABLE `type_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `working_places`
--
ALTER TABLE `working_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `apply_works`
--
ALTER TABLE `apply_works`
  ADD CONSTRAINT `apply_works_recruitment_id_foreign` FOREIGN KEY (`recruitment_id`) REFERENCES `recruitments` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `detail_type_posts`
--
ALTER TABLE `detail_type_posts`
  ADD CONSTRAINT `detail_type_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_type_posts_type_post_id_foreign` FOREIGN KEY (`type_post_id`) REFERENCES `type_posts` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `recruitments`
--
ALTER TABLE `recruitments`
  ADD CONSTRAINT `recruitments_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recruitments_type_work_id_foreign` FOREIGN KEY (`type_work_id`) REFERENCES `type_works` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recruitments_working_place_id_foreign` FOREIGN KEY (`working_place_id`) REFERENCES `working_places` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

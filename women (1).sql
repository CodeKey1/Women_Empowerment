-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 05:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `women`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initiatives`
--

CREATE TABLE `initiatives` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobadrat`
--

CREATE TABLE `mobadrat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobadrat`
--

INSERT INTO `mobadrat` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'رزق جديد', 'تدريبات متنوعة لتأهيل سيدات أسوان فى التفصيل والطباعة والأركت تدعم التنمة المستدامة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'انتاج مميز رزق مميز', '  ورش عمل في المشغولات اليدوية، لتأهيل السيدات والفتيات لإقتحام سوق العمل، مؤهلة بمهارات تضمن إنتاجا مميزا بخامات صديقة للبيئة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'صنعتك فى ايدك', 'تنفيذ أدوات حرفية وأعمال نحاس وتطريز وكروشية وعرجون ومكرميات وخيامية وسبيته باستخدام تدوير المخلفات ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'تعالى اعرفى دورك فى التغيرات المناخية', 'مبادرة توعوية للتغيرات المناخية لسيدات أسوان لحث السيدات على ابتكار تنفيذ مشروعات اقتصادية تتواكب مع قضية تغيرات المناخ، فى إطار التحضيرات لقمة المناخ الـ27.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'الناس لبعضهم فى قرية السماحة ', 'بهدف تحسين سبل العيش وجودة الحياة لها ورفع المعاناة عن كاهلها وتشجعيهم على العمل المستدام', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'لست وحدك ', ' تهدف الى توعوية للسيدات للتغيرات المناخية ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'انتى منتجة', 'اقامة ورشة عمل لتدريب السيدات على حرف يدوية متنوعة منها (السجاد – المشغولات – الملابس – الخياطة – تدبير منزلي)التي تهدف إلى رفع مستوى معيشة السيدات وخاصة المعيلات باستخدام مخلفات التخيل', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'خدى فرصة', 'منح  السيدات فرص للحصول على القروض لإقامة مشروعات صغيرة بشرط استخدام مواد غير مضرة بالبيئة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'اعرض منتجاتك', 'إقامة  معارض لمنتجات السيدات لترويج منتجاتهم  اليدوية ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'قرية مصرية بلا أمية', 'الهدف منها تعليم السيدات ليصبحوا قادرين على فتح مشاريع جديدة تخدم التغيرات المناخية', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'التحول الالكترونى', 'الهدف منها توعية السيدات بالتحول الرقمى والاكترونى لتسويق منتجاتهم واستخدام مواد صالحة للبيئة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'محو الأمية التكنولوجية', 'الهدف منها القضاء على الامية التكنولوجية وتعريف السيدات الطرق الحديثة ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'استثمر', 'الهدف منها تعريف السيدات حقوقهم وواجباتهم  فى المشروعات القائمة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'ـ إدارة الوقت ', 'الهدف منها توعية السيدات باهمية الوقت وكيفية استغلالة ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'التواصل الفعال', 'الهدف منها تعليم السيدات كيفية التواصل مع الاخرين واهميتة بالنسبة للتسويق', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'رائدات العمل التنفيذي بالمحليات', 'يهدف البرنامج إلى بناء قدرات المرأة سعيًا لزيادة حصة تمثيلها في المناصب القيادية بالمحافظة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'نمى مهاراتك', 'تنمية مهارات السيدات لجعلهن رائدات بالعمل المجتمعيمع تحقيق اهداف التنمة المستدامة ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'تكافؤ الفرص ', 'ندوة تهدف إلى التعريف بوحدات تكافؤ الفرص ودورها لمساعدة المراءة وتحقيق المساوة بين الجنسين ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'بنات النيل ', ' تعزيز الروابط مع دول حوض النيل مع خلال المشاركة في الفاعليات وتبادل الخبرات فى المجالات الحرفية ونشر وعى المشاركين باهمية المواد المستخدمة والحرص على انها تكون غير مضرة للبيئة  .', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'مبادرة ع البركة ', 'تمكين المرأة العاملة من المنزل المعيلة ( أرامل مطلقات – اسر الشهداء ) اقتصاديا .', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'فرحة عمرى ', 'تمكين ودعم للمرأة المصرية ( ارأمل ) لبناتهن أيتام الأب اجتماعيا واقتصاديا وتيسير زواجهم ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'التمكين الاقتصادى ', 'التسويق الالكترونى كوسيلة للتمكين الاقتصادى للمراة  - التمكين الاقتصادى للمراة ودعم المراة المعيلة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'العنف ضد المرأة والتنمر', 'حماية المرأة من المخاطر التى تواجهها فى المجتمع', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'ترشيد المياة', 'الحفاظ على موارد الدولة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'خليك ايجابى وقلل الانبعاثات الكربونية', 'الهدف منها تقليل الانبعاثات الكربونية ومعرفة اضرار هذة الانبعاثات ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, ' التسوق الالكترونى ', 'التدريب على التسوق الالكترونى – ريادة الاعمال للسيدات', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'الام المثالية', 'تشجيع الامهات وتكريمهم ( المرأة العاملة )', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'ممكن نساعدك بالتمويل', 'التعريف بجهات التمويل للاقراض للمشروعات الصغيرة الهدف منها زيادة وتنمية المشروعات الصغيرة على ان تكون زيرو كربون', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'مبادرة انتجى ', ' مبادرة تستهدف تمكين المرأة اقتصاديا ورفع مستوى المعيشة ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'اسر منتجه ', 'وذلك تهدف الى الانتاج فى مجالات مختلفة  ( أغنام –حرفى – ماشيه – تجارى – ملابس جاهزة – أشغال يدوية --- وغيرها', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'معرض ( ديارنا ) ', 'لتسويق المنتجات اليدوية التى تقلل الانبعاثات الكربونية وتعتمد على تدوير المخلفات', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'القروض الدوارة للمراه المعيلة  ', 'لتحسين الظروف ألاقتصاديه ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'مشروعات تنميه المراه الريفية ', 'الهدف منه اقامة مشروعات للسيدة الريفية تناسب التغيرات المناخية ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'اتحضر للاخضر', 'والذي يهدف إلى تعلم السيدات لتحقيق التنمية المستدامة، والتحول للاقتصاد الأخضر.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'ازرعى شجرة', 'الهدف منها زيادة زراعة الاشجار المثمرة التى تحقق العائد المادى بالاضافة الى تحقيق قلة الانبعاثات', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'قرية السماحة', 'اعطاء اراضى زراعية للسيدات المعيلة لزيادة المساحات الخضراء وتحقيق مصدر رزق ثابت للسيدات', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'الشباب و التنمية المستدامة', 'وتستهدف المبادرة تزويد الشباب بالمعارف والخبرات والمهارات للوصول الى نتائج افضل ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'شاركنا في المنصات الوطنية', 'اشراك الشباب بطريقة فعالة في المنصات الوطنية المعنية بأهداف التنمية المستدامة وبناء قدراتهم والاستفادة من طاقاتهم من أجل بناء مستقبل أكثر استدامة ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'مكافحة البلاستيك', 'اعطاء ورش عمل للسيدات للتقليل من استخدام البلاستيك ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'ادينى فكرة خضرة', 'تهدف الى تجميع افكار من السيدات تساعد على تطوير المحافظة فى مجال التغيرات الناخية', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'جايلنك لحد البيت', 'توفير مراكز متنقلة للاماكن البعيدة لحصول على التدريبات تخص تدوير المخلفات', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'حياة  افضل', 'لتحسين مستوى المعيشة وتوفير فرص عمل بالمشروعات الصغيرة والمتوسطة فى المناطق الأكثر احتياجًا', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'اتعلم واتنور', 'توفير العديد من فصول لمحو الامية ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'المساواة', 'تهدف الى تحفيز مشاركة المرأة في سوق العمل', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'سر الحياه', 'الهدف منها تعليم السيدات الحفاظ على النيل ومياة الشرب واهمية الرى بالتنقيط', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'بيئة نظيفة', 'الهدف منها تعليم السيدات اعادة تدوير المخلفات ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'حرفتك مستقبلك', 'توزيع ماكينات خياطة على السيدات', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'الناس لبعضيهم', 'رفع المعاناة عن الاسر الغير قادرة واكثر احتياجا', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'سداد ديون الغارمات', 'سداد المديونبات واسقاط الاحكام لعدد من الغارمات', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'مهنى وإبتكر.. أسوان الجميلة بلدى وأفتخر', 'تدريب السيدات على المهن المختلفة لتوفير فرص عمل لهم بتسليم 20 شنطة عدة وماكينة هوفر وتوب قماش، بجانب تسليم 120 منتج من مخرجات مركز التدريب المهنى', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `phone`, `email`, `city`, `about`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'mokhtar', 102204833, 'mmelnobey92@gmail.com', 'أسوان', 'yty', 1, '2023-06-15 12:21:19', '2023-06-15 12:21:19'),
(2, 'mokhtar', 102204833, 'mmelnobey92@gmail.com', 'أسوان', 'fdgfg', 2, '2023-06-15 12:24:33', '2023-06-15 12:24:33'),
(3, 'mokhtar', 102204833, 'mmelnobey92@gmail.com', 'أسوان', 'fdgfg', 2, '2023-06-15 12:25:26', '2023-06-15 12:25:26'),
(4, 'mokhtar', 102204833, 'mmelnobey92@gmail.com', 'أسوان', 'sdsdfsdf', 2, '2023-06-15 12:27:12', '2023-06-15 12:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'صناعي', NULL, NULL),
(2, 'زراعي', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'محمد مختار', 'mmelnobey92@gmail.com', 'admin', NULL, '$2y$10$hq9xBIts1iahQYlhgh9bDeN3WEwg1QnJV8c838owrAQZjpxMTqS2C', NULL, '2023-06-11 08:07:55', '2023-06-11 08:07:55'),
(2, 'مستخدم', 'admin@invest.gov', 'user', NULL, '$2y$10$rNPKuSu8rQ2aeTz.DiZT4uegnd..C4lUedfz74V/5C.eqzo8cxz9a', NULL, '2023-06-13 10:58:16', '2023-06-13 10:58:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `initiatives`
--
ALTER TABLE `initiatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobadrat`
--
ALTER TABLE `mobadrat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `initiatives`
--
ALTER TABLE `initiatives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobadrat`
--
ALTER TABLE `mobadrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

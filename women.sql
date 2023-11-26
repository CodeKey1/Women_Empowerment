-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 11:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'اسوان', NULL, NULL),
(2, 'نصر النوبة', NULL, NULL),
(3, 'ادفو', NULL, NULL),
(4, 'دراو', NULL, NULL),
(5, 'كوم امبو', NULL, NULL),
(6, 'السباعية', NULL, NULL),
(7, 'كلابشة', NULL, NULL),
(8, 'الرديسية', NULL, NULL),
(9, 'ابوسمبل السياحية', NULL, NULL),
(10, 'البصيلية', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coures`
--

CREATE TABLE `coures` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courese_detail`
--

CREATE TABLE `courese_detail` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `pre_req` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `for_whom` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `video` varchar(128) DEFAULT NULL,
  `presentation` varchar(128) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `type`, `date`, `file`, `created_at`, `updated_at`) VALUES
(7, 'نسبة استخدام مصادر الطاقة المتجددة في المشروعات', '70%', '2023-07-01', '', '2023-09-10 04:15:45', '2023-09-10 04:15:45'),
(8, 'نسبة الحفاظ على الموارد الطبيعية ذات الصلة بالمشروع', '95%', '2023-07-01', '', '2023-09-10 04:16:15', '2023-09-10 04:16:15'),
(9, 'مساهمة المشروع فى تحقيق بأهداف التنمية المستدامة الأممية', '98%', '2023-07-01', '', '2023-09-10 04:24:25', '2023-09-10 04:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `guide_women`
--

CREATE TABLE `guide_women` (
  `id` int(11) NOT NULL,
  `name` varchar(522) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `guide_women`
--

INSERT INTO `guide_women` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ابدأ في أسرع وقت ممكن.. وتعلّم قدر ما تستطيع', 'إذا استمر بك الحال بالتراجع عن بدء مشروعك الخاص، فإنك لن تتقدّم، الوضع هنا لا يُمثّل الاندفاع، كالقفز من أعلى جسر مهيب بدون مظلة، إلا أنه يجب عليك التحلي بالنشاط، والالتزام تجاه فكرة مشروعك', '2023-09-10 03:58:29', '2023-09-10 03:58:29'),
(2, 'لا تُفكر في الثراء.. فكّر في العميل', 'الربح ما هو إلا شيء حتمي؛ وذلك في حالة إنشاء المحور الرئيسي لفلسفة شركتك، فعند إنشاء منتج يستجيب حقًا لاحتياجات السوق، ويتكيف مع خصائص ومتطلبات عملائك، هنا فقط ستجد المفاتيح لكل أسئلتك، ومتطلباتك الربحية، إنها مسألة وقت، علمًا بأن الطلب يستجيب لعرض الجودة.', '2023-09-10 03:59:32', '2023-09-10 03:59:32'),
(3, 'أحِبْ شركتك والعاملين بها', 'عليك أن تُقدّر التفاصيل الصغيرة في شركتك، سواء كانت نقاط الضعف أو القوة، بالإضافة إلى احتواء كل ما يجعلها على ما هي عليه اليوم، حتى تعمل باجتهاد لتطويرها دائمًا، وجعلها أفضل نسخة من نفسها في المستقبل.', '2023-09-10 04:02:38', '2023-09-10 04:02:38'),
(4, 'السيطرة على النفقات وتحديد الميزانية', 'عادة ما تتضاعف النفقات بشكل ضخم مع تقدم نشاطك التجاري؛ لذا من الطبيعي أن تُفكّر في البدء بتبني مشروعات جديدة تتضمن أدوات إضافية، لتحسين نشاط شركتك.\r\n\r\nويعتبر ذلك الأمر رائعًا طالما أنك وضعت الخطط الجيدة لميزانيتك، بالإضافة إلى العناصر الأساسية لتخصيص جزء معين منها لنشاطك التجاري، من أجل العمل بشكل طبيعي.', '2023-09-10 04:03:56', '2023-09-10 04:03:56'),
(5, 'ناقش أفكارك مع الآخرين', 'لا تنس “تأثير الفراشة” –ليس بالمفهوم الحرفي قطعًا– لكن الاعتماد على الظروف الأولية التي يمكن أن يؤدي فيها تغيُر طفيف إلى اختلافات كبيرة، وهذا ما تبحث عنه لشركتك.\r\n\r\nففي حالة وصول منتجك أو شركتك أو أي عنصر آخر مرتبط بعلامتك التجارية، إلى أكبر شريحة ممكنة، زاد تأثير الجمهور واتسع نطاقه.', '2023-09-10 04:04:26', '2023-09-10 04:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `initiatives`
--

CREATE TABLE `initiatives` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
  `description` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mobadrat`
--

INSERT INTO `mobadrat` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ابداي حلمك', 'تهدف الى زيادة التوعية للسيدات بدورها الاقتصادي في محافظة اسوان', '2023-09-09 22:12:18', '2023-09-09 22:12:18'),
(2, 'انتِ قدوة', 'تهدف الى التعريف بالنماذج الناجحه للسيدات بمحافظة اسوان', '2023-09-09 22:12:43', '2023-09-09 22:12:43'),
(3, 'يوم الطاقة', 'تهدف الى التعريف بجوانب الطاقة وتغير المناخ', '2023-09-09 22:13:12', '2023-09-09 22:13:12'),
(4, 'الاسوانية ممكن', 'تهدف الى زيادة دور المراه في المشاركة في المشروعات الخضراء', '2023-09-09 22:13:25', '2023-09-09 22:13:25'),
(5, 'ابنه الملك', 'تهدف الى التدريب على كيفية كتابة دراسات الجدوى', '2023-09-09 22:13:45', '2023-09-09 22:13:45'),
(6, 'اكتشفي نفسك', 'تهدف الى الاجابة عن اسئلة يتم من خلالها التعرف على الشمروع المناسب لك ِ', '2023-09-09 22:14:03', '2023-09-09 22:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `brief` varchar(128) NOT NULL,
  `details` varchar(512) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `video` varchar(128) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `old-project`
--

CREATE TABLE `old-project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `idea` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `innovation` varchar(255) NOT NULL,
  `future` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `smart` varchar(255) NOT NULL,
  `trail` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `owner_id` int(11) NOT NULL,
  `state` varchar(20) NOT NULL DEFAULT 'قيد المراجعة',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `type_id`, `city_id`, `idea`, `goal`, `innovation`, `future`, `location`, `smart`, `trail`, `email`, `date`, `owner_id`, `state`, `created_at`, `updated_at`) VALUES
(49, 'سي لسيب ل', 6, 6, 'سيب لسيب لسيب', 'سيب لسيب ل', 'سي بلسيب لسيب', 'لسيب لسيب لسيب لس', 'سيب لسيبل سيبل', 'يب لسي بل', 'سيب لسيب ل', NULL, '2023-11-08', 85, 'قيد المراجعة', '2023-11-26', '2023-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `project_form`
--

CREATE TABLE `project_form` (
  `id` int(11) NOT NULL,
  `provided_value` varchar(500) NOT NULL,
  `customer_categories` varchar(500) NOT NULL,
  `project_access` varchar(500) NOT NULL,
  `attract_clients` varchar(500) NOT NULL,
  `income_source` varchar(500) NOT NULL,
  `main_resorce` varchar(500) NOT NULL,
  `main_activity` varchar(500) NOT NULL,
  `partners` varchar(255) NOT NULL,
  `cost` float NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_owner`
--

CREATE TABLE `project_owner` (
  `id` int(11) NOT NULL,
  `nid` bigint(15) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fund` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_owner`
--

INSERT INTO `project_owner` (`id`, `nid`, `email`, `name`, `phone`, `address`, `fund`, `created_at`, `updated_at`, `user_id`) VALUES
(85, 43435673456345, 'fhdfghfg@g.fgh', 'dsaf sad f', 52435234523, 'fdhfdghdfghdfghfdghd', 1, '2023-11-26 07:47:58', '2023-11-26 07:47:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_performane`
--

CREATE TABLE `project_performane` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `period` varchar(500) NOT NULL,
  `unit` varchar(500) NOT NULL,
  `target` varchar(500) NOT NULL,
  `measurement` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_plan`
--

CREATE TABLE `project_plan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `responsible` varchar(255) NOT NULL,
  `follower` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_risk`
--

CREATE TABLE `project_risk` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `degree` int(11) NOT NULL,
  `possibility` int(11) NOT NULL,
  `evaluation` int(11) DEFAULT NULL,
  `procedures` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_study`
--

CREATE TABLE `project_study` (
  `id` int(11) NOT NULL,
  `recommendation` text NOT NULL,
  `finance` text NOT NULL,
  `technical` text NOT NULL,
  `competitive` text NOT NULL,
  `market` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'صناعي', NULL, NULL),
(2, 'زراعي', NULL, NULL),
(3, 'تقليل الانبعاثات وغازات الاحتباس الحراري', NULL, NULL),
(4, 'الطاقة', NULL, NULL),
(5, 'الزراعة المستدامة', NULL, NULL),
(6, 'السياحة المستدامة', NULL, NULL),
(7, 'المياه', NULL, NULL),
(8, 'المدن الذكية المستدامة', NULL, NULL),
(9, 'المباني الخضراء', NULL, NULL),
(10, 'ادارة المخلفات', NULL, NULL),
(11, 'الملابس والموضه المستدامة', NULL, NULL),
(12, 'اعادة التدوير', NULL, NULL),
(13, 'الاقتصاد الدوار', NULL, NULL),
(14, 'التكيف مع التغيرات المناخية', NULL, NULL),
(15, 'ترميم واستعادة النظام الايكولوجي', NULL, NULL),
(16, 'تجارى ', NULL, NULL),
(17, 'مهن حرة', NULL, NULL),
(18, 'خدمي ', NULL, NULL),
(19, 'حيواني', NULL, NULL),
(20, 'زراعة مستدامة', NULL, NULL),
(21, 'طاقة نظيفة', NULL, NULL),
(22, 'تكنولوجي ', NULL, NULL),
(23, 'اعادة تدوير', NULL, NULL),
(24, 'اخرى', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'خديجة', 'mmelnobey92@gmail.com', 'admin', NULL, '$2y$10$hq9xBIts1iahQYlhgh9bDeN3WEwg1QnJV8c838owrAQZjpxMTqS2C', NULL, '2023-06-11 08:07:55', '2023-06-11 08:07:55'),
(2, 'admin', 'admin@mail.com', 'admin', NULL, '$2y$10$hq9xBIts1iahQYlhgh9bDeN3WEwg1QnJV8c838owrAQZjpxMTqS2C', NULL, '2023-09-06 12:48:04', '2023-09-06 12:48:04'),
(12, 'marwa', 'marwa.saad2120@gmail.com', 'user', NULL, '$2y$10$NM8eYrXK6A/B5oIzVwjsZuknx5dKltgOml999QnGgSb03jSiqyul.', NULL, '2023-09-07 00:58:50', '2023-09-07 00:58:50'),
(13, 'Mona Abdelaziz', 'monasocial2020@gmail.com', 'user', NULL, '$2y$10$J0B8kXwjwuXKe.u9YT.fR.sSO.4LP74B6Wj7Lz8KA2HUIASaGdoIO', NULL, '2023-09-08 18:26:56', '2023-09-08 18:26:56'),
(14, 'فاطمة السيد', 'fatmaaswan2070@gmail.com', 'user', NULL, '$2y$10$Bp59JBhR0nShAFkRVYKfTuUa1XXrDAqWnXaqgmEWlHO3Hmf78e.ZO', NULL, '2023-09-10 06:24:35', '2023-09-10 06:24:35'),
(15, 'sola', 'sola@gamail.com', 'user', NULL, '$2y$10$IWaqfCxv2kqwlG61xnTA.eij/nRCTyXLAop1j.HhzXRLLZvvVrpwC', NULL, '2023-09-13 12:42:50', '2023-09-13 12:42:50'),
(16, 'test', 'test@mail.com', 'user', NULL, '$2y$10$dHOQkhUdBGpbQXiLX2bPXeMUbEjvQWXWzC/Sw4tYAflMiiG9MtjVe', NULL, '2023-09-13 18:46:11', '2023-09-13 18:46:11'),
(17, 'Mohamed', 'hamadakaki@yahoo.com', 'user', NULL, '$2y$10$JOeBSvVUR.tZwoiShswDuuxrqQu04t/Z76hjeLXFwL2xfCol9Qsu.', NULL, '2023-09-17 04:07:08', '2023-09-17 04:07:08'),
(18, 'a', 'a@mail.com', 'user', NULL, '$2y$10$.Lps4eQ.YTlPs9SF1B0H2eaZXpIFtQnnAAt4ejS1LmTPLjI6bCPte', NULL, '2023-09-27 14:41:37', '2023-09-27 14:41:37'),
(19, 'Koko', 'retanmostafa2@gmail.com', 'user', NULL, '$2y$10$QRrkLUwPgIF64wUmLCXQh.6CStb.a3FHRbMkouaM117/pdU.wZSSW', NULL, '2023-11-03 12:59:09', '2023-11-03 12:59:09'),
(20, 'shaimaa', 'shshsh4819@gmail.com', 'user', NULL, '$2y$10$cr8W1AC08TYr0TJnHW5PMu58Ugq2Ydzlou1Bx7M3NXdAFhUTdjsXO', NULL, '2023-11-04 06:42:09', '2023-11-04 06:42:09'),
(21, 'mm', 'shshsh48190@gmail.com', 'user', NULL, '$2y$10$ciWaEBEpGmkgRWuKj/JOwOThCmiHmcYGoijiYxVk91C7pq0wlot0W', NULL, '2023-11-04 08:53:00', '2023-11-04 08:53:00'),
(22, 'k]n', 'nada.ahmeddd3333@gmail.com', 'user', NULL, '$2y$10$iRxQwyZRKAbcGczlhacJhusWsoo8do4Xfy4ysVlFjNadqvbN1u/xe', NULL, '2023-11-04 09:35:43', '2023-11-04 09:35:43'),
(23, 'Mona Abdelaziz', 'monasocial20082020@gmail.com', 'user', NULL, '$2y$10$xZWfn.c.K0t2MoNLP3o1KOvochhtUe.KHAnqd4egHYHtlOb.6wRly', NULL, '2023-11-04 10:49:26', '2023-11-04 10:49:26'),
(24, 'mm', 'mmm4819@gmail.com', 'user', NULL, '$2y$10$oGmGYhMIcaHY7XOvq6TIzuxq4acvWg.gbaHf.2hdIaah8wpM0f9.y', NULL, '2023-11-04 11:12:01', '2023-11-04 11:12:01'),
(25, 'kkk', 'mmm48190@gmail.com', 'user', NULL, '$2y$10$QrtzKAwlJ1YmRs0XdjIXfeZHg2tzqowYFWGYXk1GqeoTcYj7.mkE.', NULL, '2023-11-04 12:19:29', '2023-11-04 12:19:29'),
(26, 'Koko', 'leesoul2020@gmail.com', 'user', NULL, '$2y$10$Cx0RnnEKBnI84xjomZmJ/uqNvOwQnaprT/5IeRCmp5jyCu/Qc/E/W', NULL, '2023-11-14 14:05:24', '2023-11-14 14:05:24'),
(27, 'sdvsdv', 'ahmed@aswan.gov.eg', 'user', NULL, '$2y$10$IfdOuYSsQCYCQdu6I4XNUug3lQwXRXpNwwDnUB822Ltv4UbMkDjza', NULL, '2023-11-16 10:35:36', '2023-11-16 10:35:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coures`
--
ALTER TABLE `coures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat` (`type_id`);

--
-- Indexes for table `courese_detail`
--
ALTER TABLE `courese_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guide_women`
--
ALTER TABLE `guide_women`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old-project`
--
ALTER TABLE `old-project`
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
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `project_form`
--
ALTER TABLE `project_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_id` (`project_id`);

--
-- Indexes for table `project_owner`
--
ALTER TABLE `project_owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `project_performane`
--
ALTER TABLE `project_performane`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_plan`
--
ALTER TABLE `project_plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_risk`
--
ALTER TABLE `project_risk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_study`
--
ALTER TABLE `project_study`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_id_2` (`project_id`),
  ADD KEY `project_id` (`project_id`);

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
-- AUTO_INCREMENT for table `coures`
--
ALTER TABLE `coures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `courese_detail`
--
ALTER TABLE `courese_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guide_women`
--
ALTER TABLE `guide_women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `old-project`
--
ALTER TABLE `old-project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `project_form`
--
ALTER TABLE `project_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `project_owner`
--
ALTER TABLE `project_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `project_performane`
--
ALTER TABLE `project_performane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `project_plan`
--
ALTER TABLE `project_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `project_risk`
--
ALTER TABLE `project_risk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `project_study`
--
ALTER TABLE `project_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coures`
--
ALTER TABLE `coures`
  ADD CONSTRAINT `coures_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `project_owner` (`id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Constraints for table `project_form`
--
ALTER TABLE `project_form`
  ADD CONSTRAINT `project_form_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

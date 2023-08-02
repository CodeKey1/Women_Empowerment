-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 04:01 PM
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
(2, 'لا تخافي من الحصول على المساعدة', 'لا يُمكنك أن تفعلي كل شيء بمفردك؛ حيث تحتاجي إلى بناء الفريق المثالي لما تفعليه، لذلك من المهم استشارة الخبراء في المجالات المهمة لعملك، خاصة عندما لا تكوني ماهرة في هذا المجال بالذات.', NULL, NULL),
(3, 'تعاملي بهدوء عندما لا تسير الأمور كما هو مخطط لها', 'لا ينبغي أن تتفاجأ عندما تواجهين صعوبات أو اضطرابات على طول الطريق، بل لا بد من الحفاظ على هدوئك وفكري مع فريقك: ماذا حصل؟ وما هي الإجراءات التي يمكنك اتخاذها لتصحيح الوضع؟ وما الذي تعلمتيه مما حدث؟ وما الذي يمكنكِ فعله لتجنب حدوثه مرة أخرى في المستقبل؟', NULL, NULL),
(4, 'لا تكوني نسخة من رواد الأعمال الآخرين', 'من المؤكد أن الناس يعملون دائمًا بوتيرة وطرق مختلفة، لهذا السبب لا يكون نسخ شخص ما فكرة جيدة، تعرفي على نفسك بشكل أفضل لتعرفي نوع التخطيط والجدولة المناسبين، وما هي المحفزات الفعالة؟ حققي النجاح بطريقتكِ الخاصة.', NULL, NULL),
(5, 'تعلمي متى تتوقفين أو تغيرين شيئًا ما', 'التغيير، فهو أمر لا مفر منه، إنها نصيحة تنطبق على معظم جوانب حياتك ليس فقط عندما تبدأين عملكِ الخاص، وفي بعض الأحيان قد يكون عدم التغيير أو التعديل حسب الحاجة هو السبب الذي يؤدي إلى الفشل؛ لذلك إذا كانت بعض الأشياء لا تعمل أو كان الموظفون غير فعالين فلا تخافي من اتخاذ إجراء.', NULL, NULL),
(6, 'تذكري أن المخاطر أمر لا بد منه', 'هذا خطأ شائع يرتكبه أولئك الذين بدأوا للتو بمفردهم، فعادة ما يأتي الخوف من المخاطرة في العمل من حقيقة أن ترك وظيفتك السابقة لتبدأي بمفردك يمثل بالفعل مخاطرة كبيرة من جانبك، صحيح أن هذا كان مخاطرة كبيرة لكنه لا يعني أنها تتوقف عند هذا الحد، في الحقيقة هذه فقط البداية، قبل أن يصل عملكِ إلى النجاح ستكو', NULL, NULL),
(7, 'الاستمرارية في البحث والتعلم', 'جميع المعلومات في العالم متوفرة الآن على شبكة الإنترنت ويُمكن الحصول عليها أسهل من أي وقت مضى.إن العمل على تنفي الأفكار التجارية وتطويرها يحتاج إلى الكثير من الدراسات والأبحاث وهذا هو الجزء الأصعب في المشوار الريادي.', NULL, NULL),
(8, 'لا تخافوا الفشل', 'لابد من ضرورة التغلب على الخوف من الفشل؛ إذ يُمكن للفشل أن يعلمنا أشياء عن أنفسنا لم نتعلمها أبدًا بخلاف ذلك، على سبيل المثال: يساعدك الفشل في اكتشاف مدى قوتك، وفى تحديد أهدافك، ولكن الأهداف تُساعدنا في تحديد ما نريد أن نذهب إليه في الحياة، بدون أهداف ليس لدينا وجهة مؤكدة.', NULL, NULL),
(9, 'ابتكر أفكارًا جيدة لتحسين حياة الناس', 'أن الأفكار الجيدة تحتاج إلى تحسين حياة الناس إذا أرادوا أن ينمو ليصبحوا أعمالًا ناجحة، من السهل جدًا على المخترع أو رائد الأعمال أن يقع في حب فكرته بدلاً من فهم كيف تعمل التكنولوجيا على تحسين الحياة”، بالطبع ترجمة الفكرة الجيدة تتطلب مهاجمة المشكلات والتحديات بشكل متكرر.', NULL, NULL),
(10, 'دراسة الأفكار وتحليلها', 'من الضرورى فحص الفكرة وتحليلها جيدًا وفهم مدى الاستفادة من الخدمات التي يُمكنك تقديمها، فتتمثل الخطوة الأولى في فهم سبب استفادة البشرية من المنتج، والثانية هي فهم الأساس التكنولوجي وقد يستغرق هذا الجزء الأفضل من العمر؛ لذلك عليك أن تكتشف كيفية تسويق المنتج بشكلٍ جيد، وربما يستغرق ذلك أيضًا الكثير من الوقت والدراسة', NULL, NULL),
(11, 'العثور على الأشخاص المناسبين', 'في كثير من الأحيان يتحدث رواد الأعمال الناجحين عن أهمية التركيز عند اختيار فريق العمل المناسب، وكما هو معروف أن توظيف الأشخاص المناسبين يُمثل تحديًا كبيرًا بالنسبة لرواد الأعمال المبتدئين، ومع ذلك لو كنت تضع في اعتبارك جميع التجارب التي يسردها رواد الأعمال الناجحون المتعلقة بعملية اختيار فريق العمل المناسب فمن المؤكد أنك ستدرك كل المعايير الصحيحة التي يُمكنك الاعتماد عليها في اختيار فريق عملك، ولتعلم أن العمل الجاد والمثابرة والتفاني والعاطفة لفريقك هي التي تحدد مصير العمل.', NULL, NULL),
(12, 'تطوير الخطط والتنفيذ', 'إن تطوير خطط واستراتيجيات العمل من التجارب التي يُمكن تعلمها من رواد الأعمال الناجحين؛ لأنها من المجالات الحاسمة في العالم الريادي، بالتأكيد لا فائدة من الخطط إذا لم يتم تنفيذها بشكل صحيح وفي الوقت المناسب، ومن خلال الاستماع إلى تجارب رواد الأعمال سوف تتعلم المعايير والجودة والالتزام الصارم التي بلا شك ستُساعدك في تحقيق المزيد من أهداف عملك التجاري الخاص.', NULL, NULL),
(13, 'تطوير استراتيجيات التسويق', 'دائمًا ما يحكي رواد الأعمال الناجحون وأيضًا المؤثرون تجاربهم مع الاستراتيجيات التسويقية -سواء الناجحة أو التي باءت بالفشل- ونظرًا لأنها تُعد بمثابة العمود الفقري للأعمال التجارية بمختلف أنواعها فمن الضروري التعلم من هذه التجارب لمعرفة الاستراتيجيات التسويقية الصحيحة التي تُعزز من فرص الوصول إلى العملاء المستهدفين.', NULL, NULL);

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
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `category` varchar(255) NOT NULL,
  `idea` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `innovation` varchar(255) NOT NULL,
  `future` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `smart` varchar(255) NOT NULL,
  `trail` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_form`
--

CREATE TABLE `project_form` (
  `id` int(11) NOT NULL,
  `provided_value` varchar(255) NOT NULL,
  `customer_categories` varchar(255) NOT NULL,
  `project_access` varchar(255) NOT NULL,
  `attract_clients` varchar(255) NOT NULL,
  `income_source` varchar(255) NOT NULL,
  `main_resorce` varchar(255) NOT NULL,
  `main_activity` varchar(255) NOT NULL,
  `partners` varchar(255) NOT NULL,
  `cost` float NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_owner`
--

CREATE TABLE `project_owner` (
  `id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fund` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_performane`
--

CREATE TABLE `project_performane` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
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
  `name` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `possibility` varchar(255) NOT NULL,
  `evaluation` varchar(255) NOT NULL,
  `procedures` varchar(255) NOT NULL,
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
  `recommendation` varchar(255) NOT NULL,
  `finance` varchar(255) NOT NULL,
  `technical` varchar(255) NOT NULL,
  `competitive` varchar(255) NOT NULL,
  `market` varchar(255) NOT NULL,
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
(2, 'زراعي', NULL, NULL);

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
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `project_form`
--
ALTER TABLE `project_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_owner`
--
ALTER TABLE `project_owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guide_women`
--
ALTER TABLE `guide_women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `project_form`
--
ALTER TABLE `project_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_owner`
--
ALTER TABLE `project_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `project_owner` (`id`);

--
-- Constraints for table `project_form`
--
ALTER TABLE `project_form`
  ADD CONSTRAINT `project_form_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `project_owner`
--
ALTER TABLE `project_owner`
  ADD CONSTRAINT `project_owner_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `project_performane`
--
ALTER TABLE `project_performane`
  ADD CONSTRAINT `project_performane_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `project_plan`
--
ALTER TABLE `project_plan`
  ADD CONSTRAINT `project_plan_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `project_risk`
--
ALTER TABLE `project_risk`
  ADD CONSTRAINT `project_risk_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `project_study`
--
ALTER TABLE `project_study`
  ADD CONSTRAINT `project_study_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

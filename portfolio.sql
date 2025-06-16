-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table portfolio.abouts: ~2 rows (approximately)
INSERT IGNORE INTO `abouts` (`id`, `name`, `family`, `age`, `country`, `job`, `address`, `phone_number`, `email`, `github`, `language`, `experiences`, `projects`, `awards`, `resume_file`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'رسول', 'مرشدی', '24', 'ایران', 'طراح و توسعه دهنده سایت', 'خوزستان، اهواز', '+989387908594', 'rasoolmorshedi10@gmail.com', 'github-1970', 'فارسی، بختیاری (لری)، مقداری انگلیسی', 3, 26, 1, '{"name":"resume.pdf","relative_path":"seeder\\/files\\/about\\/resume.pdf"}', 0, '2025-05-24 11:40:46', '2025-05-24 12:34:41'),
	(2, 'Kongne', 'Junior', '24', 'Cameroonian', 'Civil Servant', 'Bafoussam Rue Nylon', '237691787347', 'info.juniorfaha@gmail.com', 'kongne', 'English and French Languages', 3, 26, 0, '{"name":"17480936807656160866831caf0ae051.pdf","relative_path":"files\\/about\\/17480936807656160866831caf0ae051.pdf"}', 1, '2025-05-24 12:10:22', '2025-05-24 12:34:40');

-- Dumping data for table portfolio.blogs: ~10 rows (approximately)
INSERT IGNORE INTO `blogs` (`id`, `title`, `text`, `author`, `keywords`, `photo`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Dolore', 'Quia et ad soluta quos. Sapiente itaque odio quo aut ea commodi. Sit est itaque maxime repudiandae fuga neque. Beatae repudiandae dolorem inventore occaecati laboriosam. Recusandae vel et aperiam sapiente et ea molestiae quia. Vitae incidunt dolorem esse sit quia cumque. Saepe minima harum qui ad laboriosam. Illum eius accusantium at aut odio. Modi in a corrupti. Inventore minus id voluptatum sunt. Excepturi deleniti tempora sunt molestiae totam. Nisi pariatur maxime eum iste dolorum voluptatem nostrum eum. Vel quas sunt omnis cumque molestiae deserunt aut ex. Aut quae minima animi expedita et vitae quo. Quia itaque rerum doloribus voluptatum ut quaerat ad. Quas tenetur et velit officiis ad. Quidem dolorem hic fugit quidem laboriosam ut. Omnis distinctio perspiciatis eum unde ut. Quam doloremque qui eaque saepe aperiam voluptatem. Vero sit nesciunt rerum aliquam nihil qui. Praesentium hic est quis assumenda laboriosam.', 'خزر واعظی', 'Sint id, Facere', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27'),
	(2, 'Omnis', 'Qui velit est tenetur aut consequatur laborum. Vel suscipit velit natus odit dolore nemo tempore. Est enim quis excepturi. Enim aperiam et voluptatum sequi a. Amet modi laudantium voluptatem voluptate consequatur. Sed quo sit atque nostrum in occaecati nobis. Illo dolores at voluptate debitis non sed. Eos commodi perspiciatis occaecati. Optio ad beatae est fuga laborum vitae libero. Error dolorem voluptates repellat non dolorem et ut molestiae. Qui fugit nisi corrupti quod. Possimus ducimus architecto odit fugiat non nisi. Ea quo aut sunt cumque id ut. Quos dignissimos ducimus ut assumenda culpa velit. Autem rerum eum consequatur odio inventore doloremque omnis. Amet provident ad laudantium est. Odit ex culpa id qui atque in illo. Dolor ut autem distinctio distinctio ducimus et. Odit magni sint quas ut ut sit totam itaque.', 'تورج توسلی', 'Sunt, Qui', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27'),
	(3, 'Dolor non', 'Facilis ipsum voluptatibus repudiandae perferendis optio. Quo voluptas perferendis cupiditate officia explicabo ullam. Et eos et ea magni quis sint unde. Ab ratione occaecati eligendi quis animi distinctio ut facilis. Dignissimos dolorem commodi natus reprehenderit quisquam rerum beatae. Et ut porro sunt et sint tempore. Tempore ullam velit officiis omnis corporis vel. Ut voluptatem praesentium nulla aliquam necessitatibus aut. Aut ut dicta ut. Quidem commodi nulla fugiat. Iure dolorem amet ut. At quibusdam aut maxime neque nobis. Sit natus velit consequuntur iure ullam quo ab expedita. Sed est quia dicta debitis. Perspiciatis quis perspiciatis consequuntur et. Modi inventore dolor odio reprehenderit ducimus adipisci autem. Est beatae quo voluptates explicabo. Dolorem animi minus earum. Nam cumque fuga quo at fuga. Porro qui sunt similique placeat voluptates blanditiis.', 'مهندس مهرک لاچینی', 'Est sed, Et', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27'),
	(4, 'Ea soluta', 'Tenetur error accusantium placeat quasi aut. Minus ipsa eum quis dolorum. Voluptate perspiciatis aut est beatae quo ea fugit. Similique sit quis aut maxime. Impedit consequatur ratione natus voluptas est. Quas et quas ut alias reprehenderit dolorum odit. Consequatur quas molestiae molestiae voluptates. Doloremque dicta doloremque perspiciatis sint non. Accusamus laudantium reiciendis aut id a voluptatibus. Sed quisquam eveniet at. Sed repudiandae quibusdam expedita veniam enim. Consectetur soluta molestiae dolor blanditiis ut aperiam amet non. Debitis possimus quis rerum veritatis praesentium. Perspiciatis saepe reprehenderit aut. Facilis porro qui aliquid nemo occaecati deserunt quia voluptatum. Blanditiis a ex natus explicabo qui dolorem ullam sint. Cumque qui similique excepturi ratione odio et. Repellat omnis architecto ratione quasi. Et doloribus sed ut architecto. Impedit consequuntur ut omnis dolor dolores tenetur.', 'بیدخت آیتی', 'Ullam, Non', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27'),
	(5, 'Sequi', 'Nam omnis modi aut excepturi. Quod repellat omnis sit quo. Dolorum accusamus qui aut distinctio ducimus qui placeat aspernatur. Velit amet velit officia. Ipsum sequi quam voluptatem ea fugiat sed inventore. Mollitia cum dolores sequi distinctio omnis est. Maxime velit unde at modi et. Amet ipsa voluptas quia. Quis mollitia consequatur aut autem dicta quia. Tempore provident quo nulla aut. Distinctio praesentium necessitatibus est unde. Nihil tempora autem autem dolorum. Et ab eum necessitatibus enim consequatur vel qui. Molestiae repellendus quia voluptatem aut sint et. Odio molestiae ut ipsam quas qui explicabo voluptatum. Voluptatem eveniet tenetur aut vel. Nostrum nihil possimus hic commodi dolores. Delectus non distinctio vel numquam amet ab veritatis. Quod laudantium et consequatur dignissimos corporis pariatur placeat. Quos qui autem maiores. Voluptatem ex eveniet maxime facilis porro deleniti error.', 'دکتر رخشاد صانعی', 'In, Commodi', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27'),
	(6, 'Ut et', 'Assumenda consequatur itaque sed similique corrupti dolorum. Voluptatibus at cumque ipsa. Ipsam nesciunt ullam eos. Sed id asperiores asperiores magnam expedita ut. Consequatur eos est sit aspernatur vero. Quos quo deserunt nobis magni dolore odio voluptas. Reprehenderit nisi dolor nesciunt dolore molestiae doloremque eum. Rerum soluta perspiciatis quia fuga. Cum cum animi quas commodi. Quia sit excepturi ut. Quo incidunt asperiores non dolorem ut saepe officiis et. Minus possimus iste asperiores possimus esse. Commodi aut ullam nisi dolor. Numquam voluptate earum voluptas maiores quia quae sapiente eveniet. Animi hic ut qui consectetur asperiores accusamus. Eligendi expedita provident ipsum dolor sed. Qui nam culpa qui nesciunt. Possimus ut ipsum soluta reiciendis. Qui similique voluptatum eos ex ut deserunt. A est illo ut est et magnam quia. Sapiente omnis eos id ad accusantium quisquam. Officia provident earum ut quos.', 'فرامین خوئینی', 'Sit, Quas', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27'),
	(7, 'Nostrum', 'Autem eligendi et id neque natus quis dignissimos. Officiis ea rerum voluptatem harum. Ipsum quibusdam aut sit mollitia voluptas. Nisi et natus similique quia. Velit magnam sint non. Expedita rerum blanditiis quasi enim qui sint voluptates eligendi. Ut voluptas assumenda similique magni quisquam. In modi voluptatem nesciunt non. Et quis laboriosam odit odio quibusdam laborum sed occaecati. Et explicabo ea reiciendis aspernatur ut molestias qui. In laudantium sapiente quia quis incidunt minima et. Optio veritatis et est sed ut odit. Asperiores deleniti voluptatibus est numquam voluptates. Quidem in et voluptatibus aut adipisci minima. Quod sint qui tempore sint est deleniti. Tenetur occaecati rem quia quia asperiores inventore molestiae. Facilis odit officiis rem quo saepe doloribus ad.', 'فاریا باغچه‌بان', 'Qui, Nam', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27'),
	(8, 'Est id', 'Distinctio voluptates laboriosam repudiandae ut. Est voluptatem eaque eligendi dolor nostrum maiores. Est et voluptatum aut pariatur explicabo itaque in. Molestiae omnis temporibus iste reprehenderit at quae. Dicta fuga laborum quia facilis mollitia iste. Ut autem in vero. Et eligendi ut ea labore deleniti. Rerum eaque pariatur illo dolor inventore. Illo esse et consectetur sint cumque dignissimos necessitatibus. Autem ullam tempora cupiditate recusandae voluptates. Deserunt voluptatem sint nihil laborum earum voluptatum soluta consequatur. Possimus nisi eligendi voluptatem perferendis quisquam distinctio. Doloribus minima culpa et nostrum reprehenderit eligendi. Quisquam aut culpa et commodi omnis quibusdam eum. Qui fugiat deserunt voluptatibus dolorem. Quia dolores perspiciatis voluptas praesentium pariatur rem. Aut et perspiciatis ex numquam officia sed dolore. Sed corporis vel explicabo minus.', 'مهندس ملکه بهبهانی', 'Eos, Fugiat', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27'),
	(9, 'Eum', 'Fuga ratione a sint. Qui deleniti id fuga velit et. Et aut praesentium laudantium est eaque suscipit omnis magnam. Harum a dolorem accusantium dolor libero. Qui provident sed molestiae voluptatem est sapiente. Impedit error necessitatibus vero non maxime. Et mollitia nisi optio impedit. Hic praesentium non possimus odio. Et voluptas rerum dolorem sit quisquam ea sed. Quia maxime ad quasi non. Cumque laborum mollitia voluptate quae qui. Aut rerum illo nostrum vero. Ex unde modi et quos enim unde labore. Labore dicta in id ipsa. Nihil quod saepe non. Minima vitae omnis assumenda facilis. Sit reprehenderit eos quae laborum qui voluptas incidunt. Rerum veniam non tenetur voluptatem inventore quia. Temporibus repellendus quis doloremque voluptatibus ea quisquam beatae culpa. Qui vel reprehenderit error a saepe ea. Veritatis quo distinctio voluptas consequatur. Accusamus in delectus minus quasi.', 'اسد خمسه', 'Quae, Quis', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27'),
	(10, 'Laborum', 'Voluptas earum ex maiores sit. Facere inventore voluptatem ad est similique cupiditate laboriosam. Aliquam tenetur voluptate aut animi aspernatur perspiciatis. Ex et praesentium dignissimos quia dignissimos accusamus. Commodi sed quia quis. Doloribus est est voluptates et. Atque sed amet et possimus. Explicabo aut exercitationem voluptas non laborum. Ipsam ea sed quia eveniet iste iure facere. Quis quia sapiente est illum ut adipisci. Amet illum natus tenetur et. Possimus quae ut aut odit assumenda. Dolorem veritatis quibusdam veritatis quia. Quo molestiae culpa officiis voluptatum. Ipsa totam voluptatem animi aut aperiam recusandae vero quibusdam. Omnis facere autem deserunt incidunt odio qui corporis qui. Dolore sit sit eum rerum. Molestias asperiores dolor consequatur nihil. Tenetur nostrum et praesentium omnis vel et quis officia. Quam hic facilis corrupti ratione beatae quidem. Laboriosam omnis dolorem sed. Labore aut rerum officiis. Unde suscipit accusantium numquam.', 'شروین هامون', 'Itaque, Est', '{"name":"blog.jpg","relative_path":"seeder\\/images\\/blog\\/blog.jpg"}', 1, '2025-05-24 12:10:27', '2025-05-24 12:10:27');

-- Dumping data for table portfolio.contacts: ~1 rows (approximately)
INSERT IGNORE INTO `contacts` (`id`, `title`, `description`, `email`, `phone_number`, `telegram`, `instagram`, `twitter`, `youtube`, `facebook`, `linkedin`, `github`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'Let\'s talk together!', 'Hello, dear friend!\r\nThis is where you can write your message, ask any question you have, or even share a good idea with me.\r\nBe free from formal messages, just write me a simple message. tell me everything you like. Make sure I read all of your messages with respect and try to give them the best answer.\r\nI look forward to your message and I never get tired of connecting with you. Send me a message for a start now...', 'info.juniorfaha@gmail.com', '237691787347+', NULL, NULL, NULL, NULL, NULL, NULL, 'https://github.com/kongne', 1, '2025-05-24 12:10:25', '2025-06-06 08:47:06');

-- Dumping data for table portfolio.failed_jobs: ~0 rows (approximately)

-- Dumping data for table portfolio.homes: ~2 rows (approximately)
INSERT IGNORE INTO `homes` (`id`, `title`, `sub_title`, `description`, `photo`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'رسول مرشدی هستم', 'توسعه دهنده و طراح برنامه‌های تحت وب', 'من یک توسعه دهنده وب و طراح سایت هستم که به ایجاد تجربه‌های دیجیتالی منحصر به فرد و جذاب علاقه‌مندم. با توجه به نیازها و خواسته‌های کاربران، تلاش می‌کنم تا بهترین تجربه ممکن را ارائه دهم و زندگی آن‌ها را ساده‌تر کنم.', '{"name":"person.jpg","relative_path":"seeder\\/images\\/home\\/person.jpg","mobile":{"name":"person-mobile.jpg","relative_path":"seeder\\/images\\/home\\/mobile\\/person-mobile.jpg"}}', 0, '2025-05-24 11:40:46', '2025-05-24 12:27:22'),
	(2, 'Rules simplifier', 'Software developer &Graphic designer', 'I am a web developer and web designer interested in creating unique and engaging digital experiences. Depending on the needs and wants of the users, I try to provide the best possible experience and make their lives easier.', '{"name":"174809324114102187576831c939ecaa6.png","relative_path":"images\\/home\\/174809324114102187576831c939ecaa6.png","mobile":{"name":"17480932413085258716831c939eec1b.png","relative_path":"images\\/home\\/mobile\\/17480932413085258716831c939eec1b.png"}}', 1, '2025-05-24 12:10:22', '2025-05-24 12:27:21');

-- Dumping data for table portfolio.messages: ~25 rows (approximately)
INSERT IGNORE INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `response`, `is_read`, `created_at`, `updated_at`) VALUES
	(1, 'شباهنگ هومن', 'opahlavi@pashaei.info', 'Vero.', 'Voluptatem a quibusdam ut eum corporis tempora natus. Nostrum animi vel voluptatibus corporis. Delectus odio et magni placeat doloremque.', 'Modi perspiciatis dolor quia amet et itaque ut assumenda. Laudantium et distinctio sunt sapiente.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(2, 'راد هومن', 'ali45@akbari.com', 'Incidunt.', 'Eos ea est repudiandae temporibus ut. Quas voluptates quae et exercitationem perferendis.', 'Ipsum placeat et nihil vel. Aut occaecati fuga iure doloribus ad minus.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(3, 'دکتر مرداس مجتهد', 'javad.asadi@yahoo.com', 'Omnis.', 'At nostrum ut modi soluta. Qui dolorem in non porro nesciunt consequatur sed. Quasi aspernatur error consequuntur.', 'Illo nesciunt saepe dolor at. Aperiam aut et alias modi voluptate animi.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(4, 'آذین اعتماد', 'manuchehr87@gmail.com', 'Nihil est.', 'Tempora et non enim voluptatem dolorum sit dolor necessitatibus. Fugit quisquam eos quia voluptate nam. Quia accusamus et minus est.', 'Et dolore culpa iste fugit. Blanditiis earum voluptatem illum nihil minima.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(5, 'شمیل اشکوری', 'roya.rahmani@yahoo.com', 'Odio.', 'Iusto consequatur voluptas iusto distinctio. Aperiam aliquid adipisci unde reprehenderit. Occaecati eius ut et velit mollitia eius.', 'Sit optio nihil voluptas. Incidunt vitae qui rerum et libero deleniti.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(6, 'ورشاسب پیرحیاتی', 'sepideh.khorsandi@hotmail.com', 'Ullam.', 'Quia neque labore nisi sed aut veniam. Quia dignissimos quis voluptas magni qui dolor.', 'Possimus deserunt culpa aut illo. Impedit sit vel magni qui. Maxime quia eos labore est molestias.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(7, 'جواد جهانگیری', 'ebrahim.karimi@shahidi.com', 'Vitae.', 'Dicta ex consequuntur architecto tempore sapiente. Dolorem et maxime eos dignissimos et non. Minima ex modi qui et qui.', 'Culpa voluptas quis sed explicabo ut nesciunt. Aliquam dolor animi maxime.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(8, 'نیرو فهمیده', 'zeynab.asadi@pashaei.ac.ir', 'Et in sit.', 'Velit mollitia molestiae harum facere. Reiciendis numquam aut saepe libero error error sunt. Dolorem eveniet in ut et minima dolore.', 'Nesciunt molestiae et aut rerum tenetur cum est ea. Quidem aut vero soluta quaerat sequi non.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(9, 'پرستوک جعفریان', 'salemi.yousef@gmail.com', 'Quasi et.', 'Totam dolores sit quo reprehenderit. Iusto animi porro qui animi. Iusto soluta et eligendi et maiores expedita omnis.', 'In asperiores officiis dolor. Asperiores repellendus quia quia ut ut. Sed officia sed quis.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(10, 'دریا دل فرهنگ', 'rostam.abdullahi@nabavi.co.ir', 'Nemo.', 'Quisquam tenetur consequatur eveniet provident sed. Sint quia aut recusandae unde enim eum quia asperiores. Et sunt est est dignissimos eos minus.', 'Perspiciatis ut incidunt dolor et delectus fugit ut non. Reiciendis quisquam eum autem est error.', 0, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(11, 'آقای بهنیا دیباج', 'heidari.hashem@pashaei.ac.ir', 'Molestias.', 'Nesciunt quasi incidunt aliquam illo labore et aut. Tempora inventore cupiditate quidem sit dolores sunt. Est consequuntur ipsa autem est commodi.', 'Laboriosam distinctio ratione commodi nisi aut blanditiis. Quas dicta rem est.', 0, '2025-05-24 12:10:28', '2025-05-24 12:10:28'),
	(12, 'افراسیاب بختیاری', 'mehran76@yahoo.com', 'Dolor.', 'Enim sed error ut et in quia quae minima. Voluptatum debitis aut tempora et qui. Ut iusto placeat non et.', 'Non consequatur eaque maiores est et quia. Reiciendis ducimus facere quo recusandae.', 1, '2025-05-24 12:10:28', '2025-05-24 19:42:13'),
	(13, 'دکتر پرنو رنگرز', 'farsi.fereshteh@shirazi.sch.ir', 'Corrupti.', 'Quia dolor harum sunt voluptas. Dolor culpa a illo dolorem fugit vero quos. Saepe quisquam dolores eos ipsa nisi in.', 'Sed sit enim neque. Rerum est illum est. Aut et magnam fuga exercitationem deserunt quam similique.', 1, '2025-05-24 12:10:28', '2025-05-24 19:41:06'),
	(14, 'دلناز نامور', 'mahmoudieh.hirbod@javadi.co.ir', 'Incidunt.', 'Sint eos magni sit suscipit velit voluptatem tempore. Vel accusamus maiores error. In esse nihil odio error laudantium ullam cum.', 'Et est ullam dolores. Soluta quos sunt voluptate iure. Nemo temporibus maxime culpa nihil aut.', 1, '2025-05-24 12:10:28', '2025-05-24 19:40:37'),
	(15, 'محسن پارسا', 'jalili.dariush@yahoo.com', 'At.', 'Alias eos ea aut quo. Quis incidunt inventore eos voluptatum. Reprehenderit fugiat eos et commodi in ut. Id ullam autem nulla.', 'Perferendis voluptatum doloribus ut voluptate est. Maiores tempore atque nostrum et repudiandae et.', 1, '2025-05-24 12:10:28', '2025-05-24 19:41:42'),
	(16, 'نیرَم فنایی', 'zhila.zare@yahoo.com', 'Eligendi.', 'Tempore facilis culpa sit et. Est perspiciatis omnis error nobis. Qui aliquid provident id qui dolorum.', 'Cumque quod reiciendis quia ducimus. Et nihil perferendis fuga iste velit culpa.', 1, '2025-05-24 12:10:28', '2025-05-24 19:41:58'),
	(17, 'تابان سرمد', 'babak.abbasi@babaei.sch.ir', 'Nihil est.', 'At aut nesciunt molestiae ea. Laudantium aliquam deleniti eius facilis.', 'Ad corporis et quod quidem repellat minus. Quod commodi sit quis aut. Quis est incidunt sequi.', 1, '2025-05-24 12:10:28', '2025-05-24 19:42:28'),
	(18, 'طاهر فرشیدورد', 'farsi.hossein@gmail.com', 'Dolor.', 'Laboriosam voluptatibus fugiat fugit architecto. Sit necessitatibus aliquid amet placeat. Vel quia voluptatem dolorum. Sit dolor at quidem ratione.', 'Magni id hic aut cupiditate et. Eos cumque non tempora nulla. Quia qui culpa nihil quo nobis nemo.', 1, '2025-05-24 12:10:28', '2025-06-05 15:06:48'),
	(19, 'اتابک اعلم', 'musa41@hotmail.com', 'Sint.', 'Fugit quia nesciunt neque. Quia et molestiae qui in. Cumque optio consequatur optio facere ex.', 'Fugit iusto natus animi ut. Fugit et ut ut aut voluptatem natus repellendus.', 1, '2025-05-24 12:10:29', '2025-05-24 19:40:26'),
	(20, 'آقای نوین لوکس', 'nariman.esmaeel@gmail.com', 'Magnam.', 'Commodi architecto distinctio officiis. Quibusdam aperiam incidunt dolore sint et et. Ea in dolorum nobis architecto natus.', 'Repellendus molestiae et incidunt impedit est possimus. Maxime et sapiente et.', 1, '2025-05-24 12:10:29', '2025-05-24 12:13:32'),
	(21, 'Techcrunch', 'kongnejuniior1@gmail.com', 'service rendering', 'I want to meet you about the services and their prices, my choice is on developing an E Commerce site', NULL, 1, '2025-05-24 12:17:07', '2025-05-24 19:40:13'),
	(23, 'Techcrunch', 'info.juniorfaha@gmail.com', 'service rendering', 'I want to meet you about the services and their prices, my choice is on developing an E Commerce site', 'I\'m free from monday to Saturday, so tell me when it\'s possible on your site', 1, '2025-05-24 12:20:09', '2025-05-24 19:39:20'),
	(24, 'La friend\'s services', 'GERVENEGOU@GMAIL.COM', 'Building an E-services app', 'it\'s a pleasure to meet someone like you, well the reason of my presence hereby is cause i am setting up a business that deals service offerings, then i would like to extend it worldwide through the internet', NULL, 1, '2025-06-06 09:21:56', '2025-06-06 09:33:37'),
	(25, 'Développeur logiciels', 'GERVENEGOU@GMAIL.COM', 'service rendering', 'La friend\'s services::\r\nit’s a pleasure to meet someone like you, well the reason of my presence hereby is cause i am setting up up a business that deals service of ferrings, then i would like to extend it worldwide thr thr internet', NULL, 0, '2025-06-06 09:35:15', '2025-06-06 09:35:15'),
	(26, 'Développeur logiciels', 'kongnejuniior1@gmail.com', 'service rendering', 'La friend\'s services::\r\nit’s a pleasure to meet someone like you, well the reason of my presence hereby is cause i am setting up up a business that deals service of ferrings, then i would like to extend it worldwide thr thr internet', NULL, 0, '2025-06-06 09:37:01', '2025-06-06 09:37:01');

-- Dumping data for table portfolio.migrations: ~12 rows (approximately)
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_02_14_173118_create_homes_table', 1),
	(6, '2023_02_22_163659_create_abouts_table', 1),
	(7, '2023_06_20_084221_create_skills_table', 1),
	(8, '2023_06_21_051517_create_qualifications_table', 1),
	(9, '2023_06_25_065126_create_portfolios_table', 1),
	(10, '2023_06_28_070919_create_contacts_table', 1),
	(11, '2023_06_29_174754_create_blogs_table', 1),
	(12, '2023_06_30_183355_create_messages_table', 1);

-- Dumping data for table portfolio.password_resets: ~0 rows (approximately)

-- Dumping data for table portfolio.personal_access_tokens: ~0 rows (approximately)

-- Dumping data for table portfolio.portfolios: ~6 rows (approximately)
INSERT IGNORE INTO `portfolios` (`id`, `title`, `project_type`, `customer`, `link`, `technology`, `featured_image`, `media_type`, `media`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'سایت portfolio', 'طراحی و توسعه سایت', 'خودم', 'rasmor.ir', 'PHP, Laravel', '{"name":"portfolio.jpg","relative_path":"seeder\\/images\\/portfolio\\/portfolio.jpg"}', 'image', NULL, 1, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(2, 'سایت خبری mohebnews', 'طراحی سایت', 'یکی از آشنایان', 'mohebnews.com', 'Wordpress', '{"name":"portfolio2.jpg","relative_path":"seeder\\/images\\/portfolio\\/portfolio2.jpg"}', 'image', NULL, 1, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(3, 'سایت ToDo', 'طراحی و توسعه سایت', 'عمومی', 'todo-app.com', 'Laravel, Vue, Tailwind', '{"name":"portfolio.jpg","relative_path":"seeder\\/images\\/portfolio\\/portfolio.jpg"}', 'image', NULL, 1, '2025-05-24 11:40:48', '2025-05-24 11:40:48'),
	(4, 'سایت portfolio', 'طراحی و توسعه سایت', 'خودم', 'rasmor.ir', 'PHP, Laravel', '{"name":"portfolio.jpg","relative_path":"seeder\\/images\\/portfolio\\/portfolio.jpg"}', 'image', NULL, 1, '2025-05-24 12:10:25', '2025-05-24 12:10:25'),
	(5, 'سایت خبری mohebnews', 'طراحی سایت', 'یکی از آشنایان', 'mohebnews.com', 'Wordpress', '{"name":"portfolio2.jpg","relative_path":"seeder\\/images\\/portfolio\\/portfolio2.jpg"}', 'image', NULL, 1, '2025-05-24 12:10:25', '2025-05-24 12:10:25'),
	(6, 'سایت ToDo', 'طراحی و توسعه سایت', 'عمومی', 'todo-app.com', 'Laravel, Vue, Tailwind', '{"name":"portfolio.jpg","relative_path":"seeder\\/images\\/portfolio\\/portfolio.jpg"}', 'image', NULL, 1, '2025-05-24 12:10:25', '2025-05-24 12:10:25');

-- Dumping data for table portfolio.qualifications: ~12 rows (approximately)
INSERT IGNORE INTO `qualifications` (`id`, `period`, `title`, `descriptions`, `type`, `status`, `created_at`, `updated_at`) VALUES
	(1, '1398 - 1400', 'کاردانی - نرم‌افزار - چمران اهواز', 'مدرک کاردانی نرم افزار رو از دانشگاه چمران اهواز کسب کرده‌ام', 'education', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(2, '1400 - 1402', 'کارشناسی - مهندسی نرم‌افزار - کارون اهواز', 'مدرک کارشناسی نرم افزار رو با معدل 19 کسب کرده‌ام', 'education', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(3, '1401', 'طراحی سایت خبری - mohebnews', 'سایت mohebnews.com رو با وردپرس برای یکی از آشنایانم ایجاد کردم', 'experience', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(4, 'زمان‌های مختلف', 'طراحی چندین بلاگ', 'بلاگ‌های ساده مختلفی رو به عنوان تمرین برای خودم و آشنایانم ایجاد کرده‌ام', 'experience', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(5, '1402', 'طراحی و توسعه یک سایت portfolio برای خودم', 'یک سایت portfolio برای ارائه نمونه کارهای خودم ایجاد کردم', 'experience', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(6, '1402', 'طراحی و توسعه یک سایت ToDo', 'یک سایت Todo برای مدیریت تسک‌ها ایجاد کردم', 'experience', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(7, '1398 - 1400', 'کاردانی - نرم‌افزار - چمران اهواز', 'مدرک کاردانی نرم افزار رو از دانشگاه چمران اهواز کسب کرده‌ام', 'education', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24'),
	(8, '1400 - 1402', 'کارشناسی - مهندسی نرم‌افزار - کارون اهواز', 'مدرک کارشناسی نرم افزار رو با معدل 19 کسب کرده‌ام', 'education', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24'),
	(9, '1401', 'طراحی سایت خبری - mohebnews', 'سایت mohebnews.com رو با وردپرس برای یکی از آشنایانم ایجاد کردم', 'experience', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24'),
	(10, 'زمان‌های مختلف', 'طراحی چندین بلاگ', 'بلاگ‌های ساده مختلفی رو به عنوان تمرین برای خودم و آشنایانم ایجاد کرده‌ام', 'experience', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24'),
	(11, '1402', 'طراحی و توسعه یک سایت portfolio برای خودم', 'یک سایت portfolio برای ارائه نمونه کارهای خودم ایجاد کردم', 'experience', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24'),
	(12, '1402', 'طراحی و توسعه یک سایت ToDo', 'یک سایت Todo برای مدیریت تسک‌ها ایجاد کردم', 'experience', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24');

-- Dumping data for table portfolio.skills: ~34 rows (approximately)
INSERT IGNORE INTO `skills` (`id`, `name`, `value`, `category`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'php', 100, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(2, 'laravel', 100, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(3, 'html', 100, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(4, 'css', 100, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(5, 'js', 90, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(6, 'vue', 70, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(7, 'inertia', 90, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(8, 'bootstrap', 100, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(9, 'tailwind', 90, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(10, 'python', 50, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(11, 'wordpress', 50, 'programming', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(12, 'seo', 40, 'seo', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(13, 'seo content', 80, 'seo', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(14, 'security programming', 70, 'security', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(15, 'web application penetration testing', 50, 'security', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(16, 'docker', 50, 'devops', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(17, 'git', 100, 'devops', 1, '2025-05-24 11:40:47', '2025-05-24 11:40:47'),
	(18, 'php', 100, 'programming', 1, '2025-05-24 12:10:22', '2025-05-24 12:10:22'),
	(19, 'laravel', 100, 'programming', 1, '2025-05-24 12:10:22', '2025-05-24 12:10:22'),
	(20, 'html', 100, 'programming', 1, '2025-05-24 12:10:22', '2025-05-24 12:10:22'),
	(21, 'css', 100, 'programming', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(22, 'js', 90, 'programming', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(23, 'vue', 70, 'programming', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(24, 'inertia', 90, 'programming', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(25, 'bootstrap', 100, 'programming', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(26, 'tailwind', 90, 'programming', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(27, 'python', 50, 'programming', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(28, 'wordpress', 50, 'programming', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(29, 'seo', 40, 'seo', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(30, 'seo content', 80, 'seo', 1, '2025-05-24 12:10:23', '2025-05-24 12:10:23'),
	(31, 'security programming', 70, 'security', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24'),
	(32, 'web application penetration testing', 50, 'security', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24'),
	(33, 'docker', 50, 'devops', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24'),
	(34, 'git', 100, 'devops', 1, '2025-05-24 12:10:24', '2025-05-24 12:10:24');

-- Dumping data for table portfolio.users: ~1 rows (approximately)
INSERT IGNORE INTO `users` (`id`, `name`, `local_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Wilstech', '', 'admin@gmail.com', NULL, '$2y$10$TbPVUSfCx/NAXoO6sxKSnO.q7J6n.JJ76fgVqC.hyClo7ssh/E4yu', 'eV9us9myiYmY21gWQggMUF00O7nojCol8obP0xWbKKvCogki6vrk9mobEM8W', '2025-05-24 12:10:22', '2025-05-24 12:10:22');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

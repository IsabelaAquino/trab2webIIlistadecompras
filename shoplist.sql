-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jul-2019 às 00:47
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoplist`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `grouplist`
--

CREATE TABLE `grouplist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `grouplist`
--

INSERT INTO `grouplist` (`id`, `titulo`, `created_at`, `updated_at`) VALUES
(10, 'Feira de domingo editado', '2019-07-10 23:46:46', '2019-07-11 00:17:06'),
(12, 'Churrasco', '2019-07-11 00:17:14', '2019-07-11 00:17:14'),
(13, 'teste', '2019-07-11 00:28:30', '2019-07-11 00:28:30'),
(14, 'Teste 2', '2019-07-11 00:45:49', '2019-07-11 00:45:49'),
(16, 'Teste', '2019-07-11 01:29:20', '2019-07-11 01:29:20'),
(17, 'Teste', '2019-07-11 01:37:07', '2019-07-11 01:37:07'),
(18, 'Churrasco', '2019-07-11 01:38:20', '2019-07-11 01:38:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lists`
--

CREATE TABLE `lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double(8,2) NOT NULL,
  `data` datetime NOT NULL,
  `quantidade` int(11) NOT NULL,
  `grouplist_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `lists`
--

INSERT INTO `lists` (`id`, `titulo`, `descricao`, `preco`, `data`, `quantidade`, `grouplist_id`, `created_at`, `updated_at`) VALUES
(14, 'Alcatra - maminha', 'carne', 60.00, '2019-07-10 00:00:00', 2, 12, '2019-07-11 00:17:44', '2019-07-11 00:17:44'),
(15, 'Petra puro malte', 'cerveja', 12.50, '2019-07-10 00:00:00', 4, 14, '2019-07-11 00:46:28', '2019-07-11 00:46:28'),
(16, 'Petra puro malte', 'cerveja', 12.50, '2019-07-10 00:00:00', 4, 14, '2019-07-11 00:48:47', '2019-07-11 00:48:47'),
(17, 'Petra puro malte', 'cerveja', 12.50, '2019-07-10 00:00:00', 4, 14, '2019-07-11 00:50:23', '2019-07-11 00:50:23'),
(18, 'Petra puro malte', 'cerveja', 12.50, '2019-07-10 00:00:00', 4, 14, '2019-07-11 00:51:21', '2019-07-11 00:51:21'),
(19, 'Petra puro malte', 'cerveja', 12.50, '2019-07-10 00:00:00', 4, 14, '2019-07-11 00:52:25', '2019-07-11 00:52:25'),
(20, 'Danix', 'Biscoito recheiado', 4.69, '2019-07-09 00:00:00', 2, 14, '2019-07-11 01:03:11', '2019-07-11 01:03:11'),
(23, 'Teste', 'teste', 8.20, '2019-07-10 00:00:00', 2, 16, '2019-07-11 01:29:47', '2019-07-11 01:29:47'),
(24, 'Teste', 'teste', 8.20, '2019-07-10 00:00:00', 2, 16, '2019-07-11 01:32:41', '2019-07-11 01:32:41'),
(25, 'Teste', 'teste', 8.20, '2019-07-10 00:00:00', 2, 16, '2019-07-11 01:35:07', '2019-07-11 01:35:07'),
(26, 'gmokgmjgojker', 'nbonbkofm', 488.00, '2019-10-10 00:00:00', 2, 17, '2019-07-11 01:37:40', '2019-07-11 01:37:40'),
(27, 'a', 'a', 1.00, '2019-10-10 00:00:00', 2, 18, '2019-07-11 01:38:38', '2019-07-11 01:38:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_05_04_183156_create_grouplist_table', 1),
(4, '2019_05_26_144848_create_lists_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grouplist`
--
ALTER TABLE `grouplist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lists_grouplist_id_foreign` (`grouplist_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grouplist`
--
ALTER TABLE `grouplist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `lists`
--
ALTER TABLE `lists`
  ADD CONSTRAINT `lists_grouplist_id_foreign` FOREIGN KEY (`grouplist_id`) REFERENCES `grouplist` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

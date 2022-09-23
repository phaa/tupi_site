-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2022 às 21:43
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tupi-db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8 NOT NULL,
  `description` varchar(191) CHARACTER SET utf8 NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `type_id`, `created_at`, `updated_at`) VALUES
(4, 'Água Mineral s/gás', '', '2.00', 1, NULL, NULL),
(5, 'Água Mineral c/gás', '', '3.00', 1, NULL, NULL),
(6, 'Refrigerante Lata', '', '6.00', 1, NULL, NULL),
(7, 'Água Tônica', '', '6.00', 1, NULL, NULL),
(8, 'Refrigerante 1 litro', '', '9.00', 1, NULL, NULL),
(9, 'Refrigerante 2 litros', '', '13.00', 1, NULL, NULL),
(10, 'Limão', 'Copo 300ml', '6.00', 2, NULL, NULL),
(11, 'Limão', 'Jarra 700ml', '12.00', 2, NULL, NULL),
(12, 'Laranja', 'Copo 300ml', '7.00', 2, NULL, NULL),
(13, 'Laranja', 'Jarra 700ml', '14.00', 2, NULL, NULL),
(14, 'Abacaxi', 'Copo 300ml', '6.00', 2, NULL, NULL),
(15, 'Abacaxi', 'Jarra 700ml', '12.00', 2, NULL, NULL),
(16, 'Abacaxi c/hortelã', 'Copo 300ml', '7.00', 2, NULL, NULL),
(17, 'Abacaxi c/hortelã', 'Jarra 700ml', '14.00', 2, NULL, NULL),
(18, 'Cajá', 'Copo 300ml (Polpa)', '6.00', 2, NULL, NULL),
(19, 'Cajá', 'Jarra 700ml (Polpa)', '12.00', 2, NULL, NULL),
(20, 'Graviola', 'Copo 300ml (Polpa)', '6.00', 2, NULL, NULL),
(21, 'Graviola', 'Jarra 700ml (Polpa)', '12.00', 2, NULL, NULL),
(22, 'Maracujá', 'Copo 300ml (Polpa)', '6.00', 2, NULL, NULL),
(23, 'Maracujá', 'Jarra 700ml (Polpa)', '12.00', 2, NULL, NULL),
(24, 'Uva', 'Copo 300ml (Polpa)', '6.00', 2, NULL, NULL),
(25, 'Uva', 'Jarra 700ml (Polpa)', '12.00', 2, NULL, NULL),
(26, 'Petra', 'Long Neck', '6.00', 3, NULL, NULL),
(27, 'Bohemia', 'Long Neck', '7.00', 3, NULL, NULL),
(28, 'Stella Artois', 'Long Neck', '8.00', 3, NULL, NULL),
(29, 'Heineken', 'Long Neck', '11.00', 3, NULL, NULL),
(30, 'Caipirinha', '', '10.00', 3, NULL, NULL),
(31, 'Caipiroska', '', '12.00', 3, NULL, NULL),
(32, 'Caipiríssima', 'Feita com rum', '12.00', 3, NULL, NULL),
(33, 'Vodka Orloff', 'Dose', '4.00', 3, NULL, NULL),
(34, 'Vodka Skyy', 'Dose', '5.00', 3, NULL, NULL),
(35, 'Vodka Smirnoff', 'Dose', '5.00', 3, NULL, NULL),
(36, 'Rum Montilla', 'Dose', '4.00', 3, NULL, NULL),
(37, 'Cachaças', 'Sob consulta - Dose', '4.00', 1, NULL, NULL),
(38, 'Croquete', 'Charque com Jerimum', '25.00', 4, NULL, NULL),
(39, 'Caldo de Camarão', '', '20.00', 4, NULL, NULL),
(40, 'Queijo de Coalho Assado', 'Acompanha mel de engenho', '18.00', 4, NULL, NULL),
(41, 'Macaxeira Frita', '', '16.00', 4, NULL, NULL),
(42, 'Batata Frita', '', '18.00', 4, NULL, NULL),
(43, 'Paçoca', 'Acompanha Macaxeira Frita', '40.00', 4, NULL, NULL),
(44, 'Mix de Paçoca', 'Acompanha feijão verde', '44.00', 4, NULL, NULL),
(45, 'Filé de Camarão', 'No alho e óleo', '67.00', 4, NULL, NULL),
(46, 'Carne de Sol p/2', 'Acompanha arroz, feijão verde, macaxeira cozida, farofa e vinagrete', '85.00', 5, NULL, NULL),
(47, 'Carne de Sol p/4', 'Acompanha arroz, feijão verde, macaxeira cozida, farofa e vinagrete', '170.00', 5, NULL, NULL),
(48, 'Carne de Sol Pituba p/2', 'Acompanha macaxeira frita e baião de dois (feijão verde, arroz, molho de calabresa, queijo de coalho e verduras)', '90.00', 5, NULL, NULL),
(49, 'Carne de Sol Pituba p/4', 'Acompanha macaxeira frita e baião de dois (feijão verde, arroz, molho de calabresa, queijo de coalho e verduras)', '180.00', 5, NULL, NULL),
(50, 'Paçoca p/2', 'Carne de sol triturada, arroz de leite, feijão verde e macaxeira frita', '75.00', 5, NULL, NULL),
(51, 'Paçoca p/4', 'Carne de sol triturada, arroz de leite, feijão verde e macaxeira frita', '150.00', 5, NULL, NULL),
(52, 'Peixe Manivá p/2', 'Filé de peixe grelhado com molho de ervas. Acompanha arroz, macaxeira frita e vinagrete de manga', '96.00', 6, NULL, NULL),
(53, 'Peixe Manivá p/4', 'Filé de peixe grelhado com molho de ervas. Acompanha arroz, macaxeira frita e vinagrete de manga', '192.00', 6, NULL, NULL),
(54, 'Peixe Potiguar p/2', 'Filé de peixe grelhado com molho de ervas. Acompanha arroz cremoso de camarão com queijo de coalho e macaxeira frita', '140.00', 6, NULL, NULL),
(55, 'Peixe Potiguar p/4', 'Filé de peixe grelhado com molho de ervas. Acompanha arroz cremoso de camarão com queijo de coalho e macaxeira frita', '280.00', 6, NULL, NULL),
(56, 'Moqueca de Peixe p/2', 'Filé de peixe cozido em panela de barro com leite de coco, dendê, verduras e coentro. Acompanha arroz, pirão e farofa', '100.00', 6, NULL, NULL),
(57, 'Moqueca de Peixe p/4', 'Filé de peixe cozido em panela de barro com leite de coco, dendê, verduras e coentro. Acompanha arroz, pirão e farofa', '200.00', 6, NULL, NULL),
(58, 'Moqueca de Peixe c/ Camarão p/2', 'Filé de peixe e de camarão cozidos em panela de barro com leite de coco, dendê, verduras e coentro. Acompanha arroz, pirão e farofa', '140.00', 6, NULL, NULL),
(59, 'Moqueca de Peixe c/ Camarão p/4', 'Filé de peixe e de camarão cozidos em panela de barro com leite de coco, dendê, verduras e coentro. Acompanha arroz, pirão e farofa', '280.00', 6, NULL, NULL),
(60, 'Camarão Seridoense p/2', 'Filé de camarão com creme de macaxeira, manteiga da terra, cebola, queijo de coalho e coentro. Acompanha arroz, macaxeira frita e farofa', '96.00', 7, NULL, NULL),
(61, 'Camarão Seridoense p/4', 'Filé de camarão com creme de macaxeira, manteiga da terra, cebola, queijo de coalho e coentro. Acompanha arroz, macaxeira frita e farofa', '190.00', 7, NULL, NULL),
(62, 'Camarão Catu p/2', 'Filé de camarão ao molho de coco natural, óleo de dendê e verduras. Acompanha arroz, macaxeira frita e farofa', '96.00', 7, NULL, NULL),
(63, 'Camarão Catu p/4', 'Filé de camarão ao molho de coco natural, óleo de dendê e verduras. Acompanha arroz, macaxeira frita e farofa', '190.00', 7, NULL, NULL),
(64, 'Camarão na Oca p/2', 'Filé de camarão empanado. Acompanha arroz cremoso de manteiga de camarão com queijo de coalho  e batata frita', '100.00', 7, NULL, NULL),
(65, 'Camarão na Oca p/4', 'Filé de camarão empanado. Acompanha arroz cremoso de manteiga de camarão com queijo de coalho  e batata frita', '200.00', 7, NULL, NULL),
(66, 'Camarão ao alho e óleo p/2', 'Filé de camarão salteado na manteiga de garrafa, alho e óleo. Acompanha arroz, macaxeira frita, farofa e vinagrete', '92.00', 7, NULL, NULL),
(67, 'Camarão ao alho e óleo p/4', 'Filé de camarão salteado na manteiga de garrafa, alho e óleo. Acompanha arroz, macaxeira frita, farofa e vinagrete', '184.00', 7, NULL, NULL),
(68, 'Galinha Tupi p/2', 'Acompanha arroz, feijão verde, pirão, macaxeira cozida, farofa e vinagrete', '75.00', 8, NULL, NULL),
(69, 'Galinha Tupi p/4', 'Acompanha arroz, feijão verde, pirão, macaxeira cozida, farofa e vinagrete', '150.00', 8, NULL, NULL),
(70, 'Arroz', '', '2.00', 9, NULL, NULL),
(71, 'Feijão verde', '', '8.00', 9, NULL, NULL),
(72, 'Macaxeira Cozida', '', '4.00', 9, NULL, NULL),
(73, 'Farofa de manteiga', '', '2.00', 9, NULL, NULL),
(74, 'Vinagrete', '', '4.00', 9, NULL, NULL),
(75, 'Café filtrado', '80ml', '5.00', 10, NULL, NULL),
(76, 'Café espresso', '50ml', '6.00', 10, NULL, NULL),
(77, 'Café espresso especial', '50ml - Consultar', '7.00', 10, NULL, NULL),
(78, 'Capuccino ou Chocolate quente', '80ml', '7.00', 10, NULL, NULL),
(79, 'Chás', '80ml - Consultar', '4.00', 10, NULL, NULL),
(80, 'Sobremesas caseiras', 'Sob consulta', '7.00', 11, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_type_id_foreign` (`type_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `product_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

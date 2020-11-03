-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2020 às 18:05
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `id_prato` int(11) NOT NULL,
  `nome_do_prato` varchar(40) DEFAULT NULL,
  `inf_prato` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pratos`
--

INSERT INTO `pratos` (`id_prato`, `nome_do_prato`, `inf_prato`, `imagem`) VALUES
(2, 'Acarajé', 'Esse prato traduz o sentimento do povo baiano, uma mistura incrível de sabores que apresentam a identidade de uma terra espetacular. O acarajé é uma especialidade gastronômica da culinária afro-brasileira feita de massa de feijão-fradinho, cebola e sal, frita em azeite-de-dendê e pode ser servido com pimenta, camarão seco, vatapá, caruru ou salada, componentes e pratos típicos, em sua grande maioria, da cozinha local.\r\n\r\nNa Bahia, procure as Baianas do Acarajé e se delicie com a iguaria. Para o Candomblé, o acarajé é considerado uma comida sagrada e sua receita não pode ser modificada. Outro detalhe extremamente importante é que, caso lhe perguntem se você deseja quente ou frio, é referente ao nível de pimenta. Quanto mais quente você pedir esse prato nordestino, mais pimenta virá no seu acarajé, fique ligado.', 'Nordestina\\Acaraje.jpg'),
(3, 'Maria Isabel', 'Apesar de estar presente na culinária de outras regiões do Brasil como no Centro-Oeste, a casa da Maria Isabel é o Nordeste. Encontrado no Ceará, Maranhão e Rio Grande do Norte, o prato é muito consumido no Piauí, tanto é que a partir dele, originou-se um festival gastronômico que leva seu nome em Teresina, capital do estado.\r\n\r\nMaria Isabel é o prato nordestino mais representativo da cozinha piauiense, todos os ingredientes são tipicamente regionais, a base de arroz, carne seca, cebola, pimentão, cheiro verde, alho e pimenta-do-reino. Segundo a história contada pelo povo, antigamente só os homens comiam carne seca e no meio das famílias carentes, uma mãe que não tinha o que dar para os filhos, cortou em cubos uma pontinha da carne do pai e fez o prato para toda a família, e batizou assim com o nome das suas filhas, Maria e Isabel.\r\n\r\nEntão, já sabe né? Na sua passagem pelo Piauí, não esqueça de apreciar uma boa e legítima Maria Isabel acompanhada de uma cajuína bem gelada.\r\n\r\n', 'Nordestina\\Arrumadinho.jpg'),
(4, 'Paçoca de Carne Seca', 'Você já deve ter ouvido falar em paçoca, provavelmente aquela que é doce e possui amendoim, mas não é dessa que estamos falando. A paçoca em questão, é a preparada com carne seca desfiada e farinha de mandioca branca. Se você já provou esse prato nordestino, com certeza sentiu o quão difícil foi parar de degustar, se ainda não teve oportunidade, não sabe o que está perdendo!\r\n\r\nDe região para região, a forma de produzir a paçoca e consequentemente o seu gosto varia bastante. No Nordeste, os ingredientes já citados são socados no pilão e assim vão pegando o sabor original, mas além desse existem outros modos de preparo, como a carne assada passada com a farinha no liquidificador. Cada variação possui sabor diferenciado e inesquecível.\r\n\r\n', 'Nordestina\\baiao-de-dois.jpg'),
(6, 'Tapioca', 'Comumente presente no café da manhã e no lanche da tarde, a famosa tapioca do nordeste encanta a todos com esse prato pra lá de saboroso. Feita com a fécula da mandioca o que muitos chamam de polvilho, goma ou farinha da mandioca, o melhor da tapioca é que você pode adequá-la ao seu gosto.', 'Nordestina/1604422902');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `telefone`, `email`, `senha`) VALUES
(1, 'icuru sologon', '74988170986', 'icaro.solon.is@gmail.com', '12e086066892a311b752673a28583d3f'),
(2, 'YURI GABRIEL SOUZA TAMARINDO', '74988563831', 'yurigabriel958@gmail.com', 'dcc1363b48b2841fad1ec8ad9635d3ca'),
(3, 'icaro solon souza tamarindo', '74988170986', 'solonzinn@gmail.com', '3d186804534370c3c817db0563f0e461'),
(4, 'icaro solon souza tamarindo', '74988170986', 'teste@teste.com', '3d186804534370c3c817db0563f0e461'),
(5, 'icaro solon souza tamarindo', '74988170986', 'antoin@gmail.com', '3d186804534370c3c817db0563f0e461');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`id_prato`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `id_prato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

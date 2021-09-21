-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           10.4.21-MariaDB - mariadb.org binary distribution
-- SO do servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para php_store
DROP DATABASE IF EXISTS `php_store`;
CREATE DATABASE IF NOT EXISTS `php_store` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `php_store`;

-- A despejar estrutura para tabela php_store.clientes
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_clientes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id_clientes`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- A despejar dados para tabela php_store.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id_clientes`, `nome`) VALUES
	(1, 'Gilberto'),
	(2, 'Bruno'),
	(3, 'Hugo'),
	(4, 'Carlos');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

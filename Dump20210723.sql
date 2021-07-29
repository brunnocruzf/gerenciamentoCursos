CREATE DATABASE  IF NOT EXISTS `as` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `as`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: as
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aulas`
--

DROP TABLE IF EXISTS `aulas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aulas` (
  `idaulas` int(11) NOT NULL AUTO_INCREMENT,
  `idCurso` int(11) DEFAULT NULL,
  `aula` varchar(45) DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `descricao` mediumtext DEFAULT NULL,
  `aulascol` int(11) DEFAULT NULL,
  PRIMARY KEY (`idaulas`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aulas`
--

LOCK TABLES `aulas` WRITE;
/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;
INSERT INTO `aulas` VALUES (1,1,'01 (Detalhes do Projeto)','<iframe width=\"1350\" height=\"489\" src=\"https://www.youtube.com/embed/ucECLnXQTbM?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Esse é o primeiro vídeo de nosso novo curso para criação de um app mobile de controle financeiro em delphi / firemonkey. Vamos sair do zero e aprender a criar um aplicativo Android ou iOS utilizando apenas recursos gratuitos.',0),(2,1,'02 (Instalando o Delphi Gratuito)','<iframe width=\"1350\" height=\"489\" src=\"https://www.youtube.com/embed/dr3X0nnLDII?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Esse é o segundo vídeo de nosso novo curso para criação de um app de controle financeiro em delphi / firemonkey.',1),(3,1,'03 (Configurando SDK Android no Delphi)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/lUInnWF0UTA?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos configurar o SDK Android no Delphi, além de aprender a baixar novas versões do SDK utilizando o SDK Manager.',1),(4,1,'04 (Primeiros passos no Delphi)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dOmuoFZI7f8?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos dar uma olhada nos conceitos básicos do RAD Studio.',1),(5,1,'05 (Criando o layout do app no Delphi)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/N4tdNKP9ivI?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos iniciar a criação do layout da nossa aplicação dentro do delphi.',1),(6,1,'06 (Criando a tela de nova conta)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/JwWWqWY2A9k?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos desenvolver o layout da tela para criação de novas contas de usuários.',1),(7,1,'07 (Tela principal do app)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/eDBL5uTVOGQ?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos desenvolver o layout da tela principal da nossa aplicação.',1),(8,1,'08 (Personalizando a listview)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/ZgefMy7B0zw?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vou falar tudo o que sei sobre personalização de listas de dados com listview.',1),(9,1,'09 (Lançamentos Financeiros)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/xuhRT_T-Lro?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos iniciar o desenvolvimento da tela para consulta dos lançamentos financeiros.',1),(10,1,'10 (Cadastro de Lançamentos)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/AJcq-HvyGqk?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos iniciar o desenvolvimento da tela para cadastrar os lançamentos financeiros.',1),(11,1,'11 (Cadastro de Categorias)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dAfbP3F8LBQ?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos iniciar o desenvolvimento da tela para cadastrar as categorias dos lançamentos financeiros.',1),(12,1,'12 (Menu principal e banco de dados)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/c-iX4Y2z-Nw?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos desenvolver o menu principal e criar o banco de dados sqlite da aplicação.',1),(13,1,'13 (Classe de acesso a dados + cadastro categ','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/xg2Dg5eMtEI?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos desenvolver a classe de acesso a dados e também o cadastro de categorias.',1),(14,1,'14 (Salvando as categorias no banco)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/FfkSIykmjEA?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos finalizar o cadastro das categorias.',1),(15,1,' 15 (Criando a classe lançamentos)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/3T2kbBhdwN8?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos criar a classe de acesso aos dados dos lançamentos.\r\n',1),(16,1,'16 (Navegando entre os lançamentos)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/2RHbjfq6y-E?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos criar a tela para navegar entre os lançamentos dos meses.\r\n',1),(17,1,'17 (Cadastro de lançamentos)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/x9xCLyxyroc?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos finalmente criar a tela para cadastrar os lançamentos financeiros.',1),(18,1,'18 (Excluindo lançamentos + Login)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/mMxOFDPpFZE?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos criar a rotina para exclusão dos lançamentos e finalizar o processo de login do app.',1),(19,1,'19 (Uma alternativa ao combobox)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/KgmaCmo41Nw?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa aula vamos deixar de usar combobox no nosso projeto e criar uma forma alternativa de trabalhar com seleção de itens em forma de lista.',1),(20,1,'20 (Agrupando lançamentos + ajustes finais)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/y1XoTFrm5to?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa última aula vamos criar uma tela para o usuário consultar os lançamentos totalizados pelas categorias, além de fazer alguns ajustes finais do app.',1),(21,1,'21 (Ajustes finais do app)','<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/JugqDiL1UQY?list=PLRRDagG1z-EKgQDXX676r9zA6UPkenQF3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','Nessa última aula vamos fazer os ajustes finais do nosso app.',1);
/*!40000 ALTER TABLE `aulas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `idcursos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` int(11) DEFAULT NULL,
  `descCurso` varchar(45) DEFAULT NULL,
  `quantidade_aulas` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcursos`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,0,'Criando um app mobile do zero',21,0),(2,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'admin',0,2147483647,'admin',2),(2,'brunno',0,0,'123',1),(3,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_cursos`
--

DROP TABLE IF EXISTS `usuarios_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `aulas_concluidas` int(11) DEFAULT NULL,
  `idcurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_cursos`
--

LOCK TABLES `usuarios_cursos` WRITE;
/*!40000 ALTER TABLE `usuarios_cursos` DISABLE KEYS */;
INSERT INTO `usuarios_cursos` VALUES (1,2,1,1),(2,NULL,0,NULL);
/*!40000 ALTER TABLE `usuarios_cursos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-23  2:02:04

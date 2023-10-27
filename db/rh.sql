-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2023 at 12:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `codePostal` int(100) NOT NULL,
  `telephoneFixe` varchar(100) NOT NULL,
  `gsm` varchar(100) NOT NULL,
  `dateNaissance` varchar(100) NOT NULL,
  `lieuNaissance` varchar(100) NOT NULL,
  `etatCivile` varchar(100) NOT NULL,
  `compteUtilisateur` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `sexe`, `adresse`, `pays`, `ville`, `codePostal`, `telephoneFixe`, `gsm`, `dateNaissance`, `lieuNaissance`, `etatCivile`, `compteUtilisateur`, `login`, `pwd`) VALUES
(1, 'Mohamed', 'BEN ALI', 'mohamed.benali@esprit.tn', 'Male', 'Tunis', 'Tunisie', 'Tunis Ville', 2083, '71000000', '12345678', '24/12/1994', 'Tunis', 'Celibataire', 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `codePostal` int(100) NOT NULL,
  `telephoneFixe` varchar(100) NOT NULL,
  `gsm` varchar(100) NOT NULL,
  `dateNaissance` varchar(100) NOT NULL,
  `lieuNaissance` varchar(100) NOT NULL,
  `etatCivile` varchar(100) NOT NULL,
  `compteUtilisateur` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `sexe`, `adresse`, `pays`, `ville`, `codePostal`, `telephoneFixe`, `gsm`, `dateNaissance`, `lieuNaissance`, `etatCivile`, `compteUtilisateur`, `login`, `pwd`) VALUES
(1, 'BEN ALI            ', 'Mohamed                ', 'mohamed.benali@esprit.tn                ', 'Male                ', 'Tunis                ', 'Tunisie                ', 'Tunis Ville                                                                                         ', 2083, '71000000                                                                                            ', '12345678', '24/12/1994                                                                                          ', 'Tunis                ', 'Celibataire                                                                                         ', 'Client                                                                                             ', 'client                                                                                              ', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `codeclient` int(11) NOT NULL,
  `montantht` double NOT NULL,
  `montva` double NOT NULL,
  `monttc` double NOT NULL,
  `etat` varchar(100) NOT NULL,
  `idpventee` int(11) NOT NULL,
  `datecmd` date NOT NULL,
  `cinclient` varchar(100) NOT NULL,
  `idpointvente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id`, `num`, `codeclient`, `montantht`, `montva`, `monttc`, `etat`, `idpventee`, `datecmd`, `cinclient`, `idpointvente`) VALUES
(1, 101, 103, 7799, 100, 8578.9, 'Validé', 1, '2023-10-18', '12345678', 1),
(9, 401, 303, 7799, 10, 8578.9, 'En Cours', 1, '2023-10-26', '12345678', 1),
(22, 401, 303, 9985, 5, 10484.25, 'En Cours', 1, '2023-10-27', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `conge`
--

CREATE TABLE `conge` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `demande` varchar(100) NOT NULL,
  `duree` varchar(100) NOT NULL,
  `datedebut` varchar(100) NOT NULL,
  `datefin` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `codeemployer` int(11) NOT NULL,
  `valide` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conge`
--

INSERT INTO `conge` (`id`, `titre`, `demande`, `duree`, `datedebut`, `datefin`, `nom`, `prenom`, `codeemployer`, `valide`) VALUES
(1, 'Conge Annual', 'repos', '5', '2023-10-10', '2023-10-28', 'MOHAMED', 'BEN ALI', 1, 'Non Valide');

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `id` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `codePostal` varchar(100) NOT NULL,
  `telephoneFixe` varchar(100) NOT NULL,
  `gsm` varchar(100) NOT NULL,
  `dateNaissance` varchar(100) NOT NULL,
  `lieuNaissance` varchar(100) NOT NULL,
  `etatCivile` varchar(100) NOT NULL,
  `compteUtilisateur` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id`, `nom`, `prenom`, `email`, `sexe`, `adresse`, `pays`, `ville`, `codePostal`, `telephoneFixe`, `gsm`, `dateNaissance`, `lieuNaissance`, `etatCivile`, `compteUtilisateur`, `login`, `pwd`) VALUES
(1, 'Mohamed', 'BEN ALI', 'mohamed.benali@esprit.tn', 'Male', 'Tunis', 'Tunisie', 'Tunis Ville', '2083', '71000000', '12345678', '24/12/1994', 'Tunis', 'Celibataire', 'Employe', 'employe', 'employe');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `prix` double NOT NULL,
  `quantite` int(11) NOT NULL,
  `tva` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `quantite`, `tva`, `photo`) VALUES
(1, 'APPLE MacBook Pro 16 M2 Pro 16Go 512Go SSD - Gris Sidéral', 9985, 10, 5, 'http://127.0.0.1/Human-Resources-Management/IMG/apple-macbook-pro.jpg'),
(2, 'iPhone 14 Pro Max 1Tera Violet Foncé - APPLE', 7799, 20, 10, 'http://127.0.0.1/Human-Resources-Management/IMG/iphone-14-pro-max.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conge`
--
ALTER TABLE `conge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `conge`
--
ALTER TABLE `conge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

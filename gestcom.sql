-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 11 mai 2022 à 13:17
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestcom`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `IDabonnement` bigint(20) NOT NULL,
  `Validite` date DEFAULT NULL,
  `Tolerance` date DEFAULT NULL,
  PRIMARY KEY (`IDabonnement`),
  KEY `Validite` (`Validite`),
  KEY `Tolerance` (`Tolerance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `IDARTICLES` bigint(20) NOT NULL,
  `CODEREF` varchar(150) DEFAULT NULL,
  `DESIGNATION` varchar(200) DEFAULT NULL,
  `PRU` decimal(24,6) DEFAULT '0.000000',
  `PVU` decimal(24,6) DEFAULT '0.000000',
  `PHOTO` longblob,
  `STKMAG` double DEFAULT '0',
  `STKDP1` double DEFAULT '0',
  `SEUILAPPRO` int(11) DEFAULT '0',
  `STKTOTAL` double DEFAULT '0',
  `FAIT` tinyint(4) DEFAULT '0',
  `IDFAMILLE` int(11) DEFAULT NULL,
  `FAITDEPOT` tinyint(4) DEFAULT '0',
  `IDFournisseur` int(11) DEFAULT '0',
  PRIMARY KEY (`IDARTICLES`),
  KEY `CODEREF` (`CODEREF`),
  KEY `DESIGNATION` (`DESIGNATION`),
  KEY `FAIT` (`FAIT`),
  KEY `IDFAMILLE` (`IDFAMILLE`),
  KEY `FAITDEPOT` (`FAITDEPOT`),
  KEY `IDFournisseur` (`IDFournisseur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `attente`
--

DROP TABLE IF EXISTS `attente`;
CREATE TABLE IF NOT EXISTS `attente` (
  `IDARTICLES` bigint(20) DEFAULT '0',
  `IDAttente` int(11) NOT NULL,
  `NumVente` int(11) DEFAULT '0',
  `QTE` double DEFAULT '0',
  `PRU` decimal(24,6) DEFAULT '0.000000',
  `MONTANT` decimal(24,6) DEFAULT '0.000000',
  `PVU` decimal(24,6) DEFAULT '0.000000',
  PRIMARY KEY (`IDAttente`),
  KEY `IDARTICLES` (`IDARTICLES`),
  KEY `NumVente` (`NumVente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `billetbanque`
--

DROP TABLE IF EXISTS `billetbanque`;
CREATE TABLE IF NOT EXISTS `billetbanque` (
  `IDBilletbanque` int(11) NOT NULL,
  `LIBELLE` decimal(24,6) DEFAULT '0.000000',
  PRIMARY KEY (`IDBilletbanque`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chargefixe`
--

DROP TABLE IF EXISTS `chargefixe`;
CREATE TABLE IF NOT EXISTS `chargefixe` (
  `IDChargeFixe` int(11) NOT NULL,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `Montant` decimal(24,6) DEFAULT '0.000000',
  `Select` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`IDChargeFixe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `IDClient` int(11) NOT NULL,
  `NOMCLIENT` varchar(50) DEFAULT NULL,
  `ADRESSE` longtext,
  `TELEPHONE` longtext,
  `YMAIL` varchar(80) DEFAULT NULL,
  `COMPTECLI` decimal(24,6) DEFAULT '0.000000',
  `NIF` varchar(20) DEFAULT NULL,
  `STAT` varchar(20) DEFAULT NULL,
  `CIF` varchar(50) DEFAULT NULL,
  `RCS` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDClient`),
  KEY `WDIDX_client_NOMCLIENT` (`NOMCLIENT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cloturecaisse`
--

DROP TABLE IF EXISTS `cloturecaisse`;
CREATE TABLE IF NOT EXISTS `cloturecaisse` (
  `IDCLOTURECAISSE` int(11) NOT NULL,
  `DATE` date DEFAULT NULL,
  `IDutilisateur` int(11) DEFAULT '0',
  PRIMARY KEY (`IDCLOTURECAISSE`),
  KEY `DATE` (`DATE`),
  KEY `IDutilisateur` (`IDutilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compteclient`
--

DROP TABLE IF EXISTS `compteclient`;
CREATE TABLE IF NOT EXISTS `compteclient` (
  `IDClient` int(11) DEFAULT '0',
  `IDCOMPTECLIENT` int(11) NOT NULL,
  `NUMVENTE` int(11) DEFAULT '0',
  `CREDIT` decimal(24,6) DEFAULT '0.000000',
  `DEBIT` decimal(24,6) DEFAULT '0.000000',
  `LIBELLE` varchar(100) DEFAULT NULL,
  `MODEPAIEMENT` varchar(50) DEFAULT NULL,
  `DATES` date DEFAULT NULL,
  `SOLDE` decimal(24,6) DEFAULT '0.000000',
  PRIMARY KEY (`IDCOMPTECLIENT`),
  KEY `IDClient` (`IDClient`),
  KEY `DATES` (`DATES`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comptefrn`
--

DROP TABLE IF EXISTS `comptefrn`;
CREATE TABLE IF NOT EXISTS `comptefrn` (
  `IDCOMPTEFRN` int(11) NOT NULL,
  `NUMBL` varchar(15) DEFAULT '0',
  `CREDIT` decimal(24,6) DEFAULT '0.000000',
  `DEBIT` decimal(24,6) DEFAULT '0.000000',
  `LIBELLE` varchar(100) DEFAULT NULL,
  `MODEPAIEMENT` varchar(50) DEFAULT NULL,
  `IDFOURNISSEUR` int(11) DEFAULT NULL,
  `DATES` date DEFAULT NULL,
  `NUMFACT` varchar(15) DEFAULT NULL,
  `SOLDE` decimal(24,6) DEFAULT '0.000000',
  PRIMARY KEY (`IDCOMPTEFRN`),
  KEY `NUMBL` (`NUMBL`),
  KEY `IDFOURNISSEUR` (`IDFOURNISSEUR`),
  KEY `DATES` (`DATES`),
  KEY `NUMFACT` (`NUMFACT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

DROP TABLE IF EXISTS `compteur`;
CREATE TABLE IF NOT EXISTS `compteur` (
  `IDCOMPTEUR` int(11) NOT NULL,
  `NUMCLIENT` int(11) DEFAULT '0',
  `NUMFRNS` int(11) DEFAULT '0',
  `NUMBL` int(11) DEFAULT '0',
  `NUMNOTEACHAT` int(11) DEFAULT '0',
  `NUMFACTAVECTVA` int(11) DEFAULT '0',
  `NUMFACTSANTVA` int(11) DEFAULT '0',
  `NUMRECU` int(11) DEFAULT '0',
  `NUMVENTE` int(11) DEFAULT '0',
  `NUMPROFORMA` int(11) DEFAULT '0',
  `NUMTICKET` int(11) DEFAULT '0',
  `NUMBC` int(11) DEFAULT '0',
  PRIMARY KEY (`IDCOMPTEUR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `config_droit`
--

DROP TABLE IF EXISTS `config_droit`;
CREATE TABLE IF NOT EXISTS `config_droit` (
  `IDconfig_droit` bigint(20) NOT NULL,
  `IDutilisateur` int(11) DEFAULT NULL,
  `Nom_int` varchar(50) DEFAULT NULL,
  `Etat_int` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`IDconfig_droit`),
  KEY `IDutilisateur` (`IDutilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `depenses`
--

DROP TABLE IF EXISTS `depenses`;
CREATE TABLE IF NOT EXISTS `depenses` (
  `IDDEPENSES` int(11) NOT NULL,
  `DATES` date DEFAULT NULL,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `MONTANT` decimal(24,6) DEFAULT '0.000000',
  `MOIS` int(11) DEFAULT '0',
  `ANNEE` smallint(6) DEFAULT '0',
  `TYPE` varchar(10) DEFAULT NULL,
  `DECLARER` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`IDDEPENSES`),
  KEY `DATES` (`DATES`),
  KEY `MOIS` (`MOIS`),
  KEY `ANNEE` (`ANNEE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

DROP TABLE IF EXISTS `depot`;
CREATE TABLE IF NOT EXISTS `depot` (
  `IDDEPOT` int(11) NOT NULL,
  `NOMDEPOT` varchar(50) DEFAULT NULL,
  `ADRESSE` varchar(200) DEFAULT NULL,
  `DESIGNATION` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDDEPOT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `detailsortie`
--

DROP TABLE IF EXISTS `detailsortie`;
CREATE TABLE IF NOT EXISTS `detailsortie` (
  `IDDETAILVENTE` bigint(20) NOT NULL,
  `QTE` double DEFAULT '0',
  `PRU` decimal(24,6) DEFAULT '0.000000',
  `PVU` decimal(24,6) DEFAULT '0.000000',
  `MARGE` decimal(24,6) DEFAULT '0.000000',
  `IDARTICLES` bigint(20) DEFAULT '0',
  `IDutilisateur` int(11) DEFAULT '0',
  `IDCLIENT` int(11) DEFAULT '0',
  `IDDEPOT` int(11) DEFAULT NULL,
  `IDVENTE` bigint(20) DEFAULT '0',
  PRIMARY KEY (`IDDETAILVENTE`),
  KEY `IDARTICLES` (`IDARTICLES`),
  KEY `IDutilisateur` (`IDutilisateur`),
  KEY `IDCLIENT` (`IDCLIENT`),
  KEY `IDDEPOT` (`IDDEPOT`),
  KEY `IDVENTE` (`IDVENTE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `echeance_client`
--

DROP TABLE IF EXISTS `echeance_client`;
CREATE TABLE IF NOT EXISTS `echeance_client` (
  `IDECHEANCE_CLIENT` bigint(20) NOT NULL,
  `NUMVENTE` int(11) DEFAULT NULL,
  `DATE_ECHEANCE` date DEFAULT NULL,
  `MONTANT` decimal(24,6) DEFAULT '0.000000',
  `IDCLIENT` int(11) DEFAULT '0',
  PRIMARY KEY (`IDECHEANCE_CLIENT`),
  KEY `NUMVENTE` (`NUMVENTE`),
  KEY `DATE_ECHEANCE` (`DATE_ECHEANCE`),
  KEY `IDCLIENT` (`IDCLIENT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `echeance_frns`
--

DROP TABLE IF EXISTS `echeance_frns`;
CREATE TABLE IF NOT EXISTS `echeance_frns` (
  `IDECHEANCE_FRNS` bigint(20) NOT NULL,
  `IDFournisseur` int(11) DEFAULT '0',
  `NUMFACT` varchar(15) DEFAULT NULL,
  `DATE_ECHEANCE` date DEFAULT NULL,
  `MONTANT` decimal(24,6) DEFAULT '0.000000',
  PRIMARY KEY (`IDECHEANCE_FRNS`),
  KEY `IDFournisseur` (`IDFournisseur`),
  KEY `NUMFACT` (`NUMFACT`),
  KEY `DATE_ECHEANCE` (`DATE_ECHEANCE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entreestock`
--

DROP TABLE IF EXISTS `entreestock`;
CREATE TABLE IF NOT EXISTS `entreestock` (
  `IDENTREESTOCK` int(11) NOT NULL,
  `DATES` date DEFAULT NULL,
  `PRU` decimal(24,6) DEFAULT '0.000000',
  `QTE` double DEFAULT '0',
  `NUMBL` varchar(15) DEFAULT '0',
  `NUMFACTFRNS` varchar(15) DEFAULT '0',
  `IDARTICLES` bigint(20) DEFAULT NULL,
  `PVU` decimal(24,6) DEFAULT '0.000000',
  `IDDEPOT` int(11) DEFAULT NULL,
  `PEREMPTION` date DEFAULT NULL,
  `VU` tinyint(4) DEFAULT '0',
  `IDFournisseur` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDENTREESTOCK`),
  KEY `DATES` (`DATES`),
  KEY `IDARTICLES` (`IDARTICLES`),
  KEY `IDDEPOT` (`IDDEPOT`),
  KEY `PEREMPTION` (`PEREMPTION`),
  KEY `VU` (`VU`),
  KEY `IDFournisseur` (`IDFournisseur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entreetmp`
--

DROP TABLE IF EXISTS `entreetmp`;
CREATE TABLE IF NOT EXISTS `entreetmp` (
  `IDENTREETMP` int(11) NOT NULL,
  `CODEREF` varchar(150) DEFAULT NULL,
  `DESIGNATION` varchar(200) DEFAULT NULL,
  `PRU` decimal(24,6) DEFAULT '0.000000',
  `QTE` double DEFAULT '0',
  `NUMFACTFRNS` int(11) DEFAULT '0',
  `NUMBL` int(11) DEFAULT '0',
  `IDARTICLES` bigint(20) DEFAULT '0',
  `IDFamille` int(11) DEFAULT '0',
  `IDFournisseur` int(11) DEFAULT '0',
  `PVU` decimal(24,6) DEFAULT '0.000000',
  `IDDEPOT` int(11) DEFAULT '0',
  `MONTANT` decimal(24,6) DEFAULT '0.000000',
  `SEUILAPPRO` int(11) DEFAULT '0',
  `PEREMPTION` date DEFAULT NULL,
  PRIMARY KEY (`IDENTREETMP`),
  KEY `IDARTICLES` (`IDARTICLES`),
  KEY `IDFamille` (`IDFamille`),
  KEY `IDFournisseur` (`IDFournisseur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

DROP TABLE IF EXISTS `famille`;
CREATE TABLE IF NOT EXISTS `famille` (
  `IDFamille` int(11) NOT NULL,
  `LIBELLE` varchar(20) DEFAULT NULL,
  `AFFICHER` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`IDFamille`),
  KEY `LIBELLE` (`LIBELLE`),
  KEY `AFFICHER` (`AFFICHER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `IDFournisseur` int(11) NOT NULL,
  `NOMFRNS` varchar(50) DEFAULT NULL,
  `ADRESSE` longtext,
  `TELEPHONE` longtext,
  `COMPTEFRNS` decimal(24,6) DEFAULT '0.000000',
  `NIF` varchar(20) DEFAULT NULL,
  `STAT` varchar(20) DEFAULT NULL,
  `RCS` varchar(20) DEFAULT NULL,
  `CIF` varchar(50) DEFAULT NULL,
  `YMAIL` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`IDFournisseur`),
  KEY `WDIDX_fournisseur_NOMFRNS` (`NOMFRNS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `histoentresortie`
--

DROP TABLE IF EXISTS `histoentresortie`;
CREATE TABLE IF NOT EXISTS `histoentresortie` (
  `IDHISTOENTRESORTIE` int(11) NOT NULL,
  `QTEENTREE` double NOT NULL DEFAULT '0',
  `QTESORTIE` double NOT NULL DEFAULT '0',
  `IDARTICLES` bigint(20) DEFAULT NULL,
  `DATES` date DEFAULT NULL,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `NUMBL` varchar(15) DEFAULT '0',
  `NUMFACT` varchar(15) DEFAULT '0',
  `MAGDEPOT` varchar(50) DEFAULT NULL,
  `QTESTOCK` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDHISTOENTRESORTIE`),
  KEY `IDARTICLES` (`IDARTICLES`),
  KEY `DATES` (`DATES`),
  KEY `MAGDEPOT` (`MAGDEPOT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `histoinventaire`
--

DROP TABLE IF EXISTS `histoinventaire`;
CREATE TABLE IF NOT EXISTS `histoinventaire` (
  `IDHISTOINVENTAIRE` int(11) NOT NULL,
  `STKTHEO` double DEFAULT '0',
  `STKPHYS` double DEFAULT '0',
  `IDARTICLES` bigint(20) DEFAULT NULL,
  `DATES` date DEFAULT NULL,
  `MAGDEPOT` varchar(50) DEFAULT NULL,
  `ECART` double DEFAULT '0',
  `OBSERVATION` longtext,
  PRIMARY KEY (`IDHISTOINVENTAIRE`),
  KEY `IDARTICLES` (`IDARTICLES`),
  KEY `DATES` (`DATES`),
  KEY `MAGDEPOT` (`MAGDEPOT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `histosupression`
--

DROP TABLE IF EXISTS `histosupression`;
CREATE TABLE IF NOT EXISTS `histosupression` (
  `IDHISTOSUPRESSION` bigint(20) NOT NULL,
  `NUMVENTE` int(11) DEFAULT '0',
  `DATESupp` date DEFAULT NULL,
  `QTE` double DEFAULT '0',
  `PRU` decimal(24,6) DEFAULT '0.000000',
  `PVU` decimal(24,6) DEFAULT '0.000000',
  `IDARTICLES` bigint(20) DEFAULT '0',
  `IDutilisateur` int(11) DEFAULT '0',
  `HEURE` time DEFAULT NULL,
  PRIMARY KEY (`IDHISTOSUPRESSION`),
  KEY `DATESupp` (`DATESupp`),
  KEY `IDARTICLES` (`IDARTICLES`),
  KEY `IDutilisateur` (`IDutilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

DROP TABLE IF EXISTS `parametre`;
CREATE TABLE IF NOT EXISTS `parametre` (
  `IDparametre` int(11) NOT NULL,
  `NOMSERVEUR` varchar(50) DEFAULT NULL,
  `PRINTERBL` varchar(50) DEFAULT NULL,
  `PRINTERTICKET` varchar(50) DEFAULT NULL,
  `PORTAFFICHEUR` tinyint(4) DEFAULT '0',
  `PAPIERTICKET` smallint(6) DEFAULT '0',
  `DisqueBackup` varchar(1) DEFAULT NULL,
  `TYPEAFFICHEUR` varchar(10) DEFAULT '0',
  PRIMARY KEY (`IDparametre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paramsociete`
--

DROP TABLE IF EXISTS `paramsociete`;
CREATE TABLE IF NOT EXISTS `paramsociete` (
  `IDPARAMSOCIETE` int(11) NOT NULL,
  `NOMSOCIETE` varchar(50) DEFAULT NULL,
  `RAISONSOCIALE` varchar(50) DEFAULT NULL,
  `TELEPHONE` longtext,
  `ADRESSE` longtext,
  `YMAIL` varchar(80) DEFAULT NULL,
  `NIF` varchar(20) DEFAULT NULL,
  `CIF` varchar(50) DEFAULT NULL,
  `RCS` varchar(20) DEFAULT NULL,
  `STAT` varchar(20) DEFAULT NULL,
  `LOGO` longblob,
  `TAUXTVA` double DEFAULT '0',
  `TAUXCARTEBQ` double DEFAULT '0',
  `HDDBACKUP` varchar(10) DEFAULT NULL,
  `ADRESSEFACT` varchar(300) DEFAULT NULL,
  `RESPONSABLE` varchar(50) DEFAULT NULL,
  `SIGNATAIRE` varchar(50) DEFAULT NULL,
  `PRINTERTICKET` varchar(50) DEFAULT NULL,
  `PRINTERBL` varchar(50) DEFAULT NULL,
  `CONDITION` varchar(50) DEFAULT NULL,
  `REMARQUE1` varchar(300) DEFAULT NULL,
  `REMARQUE2` varchar(300) DEFAULT NULL,
  `PASSEWORDMAIL` varchar(50) DEFAULT NULL,
  `ASSUJETIALATVA` tinyint(4) DEFAULT '0',
  `Alertedlc` smallint(6) DEFAULT '0',
  PRIMARY KEY (`IDPARAMSOCIETE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `password`
--

DROP TABLE IF EXISTS `password`;
CREATE TABLE IF NOT EXISTS `password` (
  `IDpassword` int(11) NOT NULL,
  `Motdepasse` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDpassword`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

DROP TABLE IF EXISTS `type_user`;
CREATE TABLE IF NOT EXISTS `type_user` (
  `IDtype_user` bigint(20) NOT NULL,
  `libellé` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDtype_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IDutilisateur` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Motdepasse` varchar(50) DEFAULT NULL,
  `IDtype_user` bigint(20) DEFAULT NULL,
  `Superviseur` tinyint(4) DEFAULT '0',
  `Motdepasseàsaisir` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`IDutilisateur`),
  UNIQUE KEY `Nom` (`Nom`),
  KEY `IDtype_user` (`IDtype_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `IDVENTE` bigint(20) NOT NULL,
  `NUMVENTE` int(11) DEFAULT '0',
  `DATESVENTE` date DEFAULT NULL,
  `MARGE` decimal(24,6) DEFAULT '0.000000',
  `TYPEVENTE` varchar(10) DEFAULT NULL,
  `NOMCLIENT` varchar(100) DEFAULT NULL,
  `IDutilisateur` int(11) DEFAULT '0',
  `IDCLIENT` int(11) DEFAULT '0',
  `MODEPAIEMENT` varchar(50) DEFAULT '0',
  `REFPAIEMENT` varchar(200) DEFAULT NULL,
  `MONTANT` decimal(24,6) DEFAULT '0.000000',
  `MOIS` int(11) DEFAULT NULL,
  `ANNEE` smallint(6) DEFAULT '0',
  `MOISLETTRE` varchar(10) DEFAULT NULL,
  `HEURE` time DEFAULT NULL,
  `MONNAIE` decimal(24,6) DEFAULT '0.000000',
  PRIMARY KEY (`IDVENTE`),
  KEY `NUMVENTE` (`NUMVENTE`),
  KEY `DATESVENTE` (`DATESVENTE`),
  KEY `TYPEVENTE` (`TYPEVENTE`),
  KEY `IDutilisateur` (`IDutilisateur`),
  KEY `IDCLIENT` (`IDCLIENT`),
  KEY `MOIS` (`MOIS`),
  KEY `ANNEE` (`ANNEE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

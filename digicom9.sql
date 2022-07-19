-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 juin 2022 à 14:22
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `digicomnet`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `IDARTICLES` bigint(20) NOT NULL,
  `CODEREF` varchar(150) DEFAULT NULL,
  `DESIGNATION` varchar(200) DEFAULT NULL,
  `PRU` decimal(24,6) DEFAULT 0.000000,
  `PVU` decimal(24,6) DEFAULT 0.000000,
  `PHOTO` longblob DEFAULT NULL,
  `STKMAG` double DEFAULT 0,
  `STKDP1` double DEFAULT 0,
  `SEUILAPPRO` int(11) DEFAULT 0,
  `STKTOTAL` double DEFAULT 0,
  `FAIT` tinyint(4) DEFAULT 0,
  `IDFAMILLE` int(11) DEFAULT NULL,
  `FAITDEPOT` tinyint(4) DEFAULT 0,
  `IDFournisseur` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `attente`
--

CREATE TABLE `attente` (
  `IDAttente` int(11) NOT NULL,
  `IDARTICLES` bigint(20) DEFAULT 0,
  `NumVente` int(11) DEFAULT 0,
  `QTE` double DEFAULT 0,
  `PRU` decimal(24,6) DEFAULT 0.000000,
  `MONTANT` decimal(24,6) DEFAULT 0.000000,
  `PVU` decimal(24,6) DEFAULT 0.000000
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `billetbanque`
--

CREATE TABLE `billetbanque` (
  `IDBilletbanque` int(11) NOT NULL,
  `LIBELLE` decimal(24,6) DEFAULT 0.000000
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chargefixe`
--

CREATE TABLE `chargefixe` (
  `IDChargeFixe` int(11) NOT NULL,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `Montant` decimal(24,6) DEFAULT 0.000000,
  `Select` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `IDClient` int(11) NOT NULL,
  `NOMCLIENT` varchar(50) DEFAULT NULL,
  `ADRESSE` longtext DEFAULT NULL,
  `TELEPHONE` longtext DEFAULT NULL,
  `YMAIL` varchar(80) DEFAULT NULL,
  `COMPTECLI` decimal(24,6) DEFAULT 0.000000,
  `NIF` varchar(20) DEFAULT NULL,
  `STAT` varchar(20) DEFAULT NULL,
  `CIF` varchar(50) DEFAULT NULL,
  `RCS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cloturecaisse`
--

CREATE TABLE `cloturecaisse` (
  `IDCLOTURECAISSE` int(11) NOT NULL,
  `DATE` date DEFAULT NULL,
  `IDutilisateur` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compteclient`
--

CREATE TABLE `compteclient` (
  `IDCOMPTECLIENT` int(11) NOT NULL,
  `IDClient` int(11) DEFAULT 0,
  `NUMVENTE` int(11) DEFAULT 0,
  `CREDIT` decimal(24,6) DEFAULT 0.000000,
  `DEBIT` decimal(24,6) DEFAULT 0.000000,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `MODEPAIEMENT` varchar(50) DEFAULT NULL,
  `DATES` date DEFAULT NULL,
  `SOLDE` decimal(24,6) DEFAULT 0.000000
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comptefrn`
--

CREATE TABLE `comptefrn` (
  `IDCOMPTEFRN` int(11) NOT NULL,
  `NUMBL` varchar(15) DEFAULT '0',
  `CREDIT` decimal(24,6) DEFAULT 0.000000,
  `DEBIT` decimal(24,6) DEFAULT 0.000000,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `MODEPAIEMENT` varchar(50) DEFAULT NULL,
  `IDFOURNISSEUR` int(11) DEFAULT NULL,
  `DATES` date DEFAULT NULL,
  `NUMFACT` varchar(15) DEFAULT NULL,
  `SOLDE` decimal(24,6) DEFAULT 0.000000
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE `compteur` (
  `IDCOMPTEUR` int(11) NOT NULL,
  `NUMCLIENT` int(11) DEFAULT 0,
  `NUMFRNS` int(11) DEFAULT 0,
  `NUMBL` int(11) DEFAULT 0,
  `NUMNOTEACHAT` int(11) DEFAULT 0,
  `NUMFACTAVECTVA` int(11) DEFAULT 0,
  `NUMFACTSANTVA` int(11) DEFAULT 0,
  `NUMRECU` int(11) DEFAULT 0,
  `NUMVENTE` int(11) DEFAULT 0,
  `NUMPROFORMA` int(11) DEFAULT 0,
  `NUMTICKET` int(11) DEFAULT 0,
  `NUMBC` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `config_droit`
--

CREATE TABLE `config_droit` (
  `IDconfig_droit` bigint(20) NOT NULL,
  `IDutilisateur` int(11) DEFAULT NULL,
  `Nom_int` varchar(50) DEFAULT NULL,
  `Etat_int` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `depenses`
--

CREATE TABLE `depenses` (
  `IDDEPENSES` int(11) NOT NULL,
  `DATES` date DEFAULT NULL,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `MONTANT` decimal(24,6) DEFAULT 0.000000,
  `MOIS` int(11) DEFAULT 0,
  `ANNEE` smallint(6) DEFAULT 0,
  `TYPE` varchar(10) DEFAULT NULL,
  `DECLARER` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE `depot` (
  `IDDEPOT` int(11) NOT NULL,
  `NOMDEPOT` varchar(50) DEFAULT NULL,
  `ADRESSE` varchar(200) DEFAULT NULL,
  `DESIGNATION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `detailsortie`
--

CREATE TABLE `detailsortie` (
  `IDDETAILVENTE` bigint(20) NOT NULL,
  `QTE` double DEFAULT 0,
  `PRU` decimal(24,6) DEFAULT 0.000000,
  `PVU` decimal(24,6) DEFAULT 0.000000,
  `MARGE` decimal(24,6) DEFAULT 0.000000,
  `IDARTICLES` bigint(20) DEFAULT 0,
  `IDutilisateur` int(11) DEFAULT 0,
  `IDCLIENT` int(11) DEFAULT 0,
  `IDDEPOT` int(11) DEFAULT NULL,
  `IDVENTE` bigint(20) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `echeance_client`
--

CREATE TABLE `echeance_client` (
  `IDECHEANCE_CLIENT` bigint(20) NOT NULL,
  `NUMVENTE` int(11) DEFAULT NULL,
  `DATE_ECHEANCE` date DEFAULT NULL,
  `MONTANT` decimal(24,6) DEFAULT 0.000000,
  `IDCLIENT` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `echeance_frns`
--

CREATE TABLE `echeance_frns` (
  `IDECHEANCE_FRNS` bigint(20) NOT NULL,
  `IDFournisseur` int(11) DEFAULT 0,
  `NUMFACT` varchar(15) DEFAULT NULL,
  `DATE_ECHEANCE` date DEFAULT NULL,
  `MONTANT` decimal(24,6) DEFAULT 0.000000
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreestock`
--

CREATE TABLE `entreestock` (
  `IDENTREESTOCK` int(11) NOT NULL,
  `DATES` date DEFAULT NULL,
  `PRU` decimal(24,6) DEFAULT 0.000000,
  `QTE` double DEFAULT 0,
  `NUMBL` varchar(15) DEFAULT '0',
  `NUMFACTFRNS` varchar(15) DEFAULT '0',
  `IDARTICLES` bigint(20) DEFAULT NULL,
  `PVU` decimal(24,6) DEFAULT 0.000000,
  `IDDEPOT` int(11) DEFAULT NULL,
  `PEREMPTION` date DEFAULT NULL,
  `VU` tinyint(4) DEFAULT 0,
  `IDFournisseur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreetmp`
--

CREATE TABLE `entreetmp` (
  `IDENTREETMP` int(11) NOT NULL,
  `CODEREF` varchar(150) DEFAULT NULL,
  `DESIGNATION` varchar(200) DEFAULT NULL,
  `PRU` decimal(24,6) DEFAULT 0.000000,
  `QTE` double DEFAULT 0,
  `NUMFACTFRNS` int(11) DEFAULT 0,
  `NUMBL` int(11) DEFAULT 0,
  `IDARTICLES` bigint(20) DEFAULT 0,
  `IDFamille` int(11) DEFAULT 0,
  `IDFournisseur` int(11) DEFAULT 0,
  `PVU` decimal(24,6) DEFAULT 0.000000,
  `IDDEPOT` int(11) DEFAULT 0,
  `MONTANT` decimal(24,6) DEFAULT 0.000000,
  `SEUILAPPRO` int(11) DEFAULT 0,
  `PEREMPTION` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE `famille` (
  `IDFamille` int(11) NOT NULL,
  `LIBELLE` varchar(20) DEFAULT NULL,
  `AFFICHER` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `IDFournisseur` int(11) NOT NULL,
  `NOMFRNS` varchar(50) DEFAULT NULL,
  `ADRESSE` longtext DEFAULT NULL,
  `TELEPHONE` longtext DEFAULT NULL,
  `COMPTEFRNS` decimal(24,6) DEFAULT 0.000000,
  `NIF` varchar(20) DEFAULT NULL,
  `STAT` varchar(20) DEFAULT NULL,
  `RCS` varchar(20) DEFAULT NULL,
  `CIF` varchar(50) DEFAULT NULL,
  `YMAIL` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `histoentresortie`
--

CREATE TABLE `histoentresortie` (
  `IDHISTOENTRESORTIE` int(11) NOT NULL,
  `QTEENTREE` double NOT NULL DEFAULT 0,
  `QTESORTIE` double NOT NULL DEFAULT 0,
  `IDARTICLES` bigint(20) DEFAULT NULL,
  `DATES` date DEFAULT NULL,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `NUMBL` varchar(15) DEFAULT '0',
  `NUMFACT` varchar(15) DEFAULT '0',
  `MAGDEPOT` varchar(50) DEFAULT NULL,
  `QTESTOCK` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `histoinventaire`
--

CREATE TABLE `histoinventaire` (
  `IDHISTOINVENTAIRE` int(11) NOT NULL,
  `STKTHEO` double DEFAULT 0,
  `STKPHYS` double DEFAULT 0,
  `IDARTICLES` bigint(20) DEFAULT NULL,
  `DATES` date DEFAULT NULL,
  `MAGDEPOT` varchar(50) DEFAULT NULL,
  `ECART` double DEFAULT 0,
  `OBSERVATION` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `histosupression`
--

CREATE TABLE `histosupression` (
  `IDHISTOSUPRESSION` bigint(20) NOT NULL,
  `NUMVENTE` int(11) DEFAULT 0,
  `DATESupp` date DEFAULT NULL,
  `QTE` double DEFAULT 0,
  `PRU` decimal(24,6) DEFAULT 0.000000,
  `PVU` decimal(24,6) DEFAULT 0.000000,
  `IDARTICLES` bigint(20) DEFAULT 0,
  `IDutilisateur` int(11) DEFAULT 0,
  `HEURE` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

CREATE TABLE `parametre` (
  `IDparametre` int(11) NOT NULL,
  `NOMSERVEUR` varchar(50) DEFAULT NULL,
  `PRINTERBL` varchar(50) DEFAULT NULL,
  `PRINTERTICKET` varchar(50) DEFAULT NULL,
  `PORTAFFICHEUR` tinyint(4) DEFAULT 0,
  `PAPIERTICKET` smallint(6) DEFAULT 0,
  `DisqueBackup` varchar(1) DEFAULT NULL,
  `TYPEAFFICHEUR` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `paramsociete`
--

CREATE TABLE `paramsociete` (
  `IDPARAMSOCIETE` int(11) NOT NULL,
  `NOMSOCIETE` varchar(50) DEFAULT NULL,
  `RAISONSOCIALE` varchar(50) DEFAULT NULL,
  `TELEPHONE` longtext DEFAULT NULL,
  `ADRESSE` longtext DEFAULT NULL,
  `YMAIL` varchar(80) DEFAULT NULL,
  `NIF` varchar(20) DEFAULT NULL,
  `CIF` varchar(50) DEFAULT NULL,
  `RCS` varchar(20) DEFAULT NULL,
  `STAT` varchar(20) DEFAULT NULL,
  `LOGO` longblob DEFAULT NULL,
  `TAUXTVA` double DEFAULT 0,
  `TAUXCARTEBQ` double DEFAULT 0,
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
  `ASSUJETIALATVA` tinyint(4) DEFAULT 0,
  `Alertedlc` smallint(6) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `password`
--

CREATE TABLE `password` (
  `IDpassword` int(11) NOT NULL,
  `Motdepasse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

CREATE TABLE `type_user` (
  `IDtype_user` bigint(20) NOT NULL,
  `libellé` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IDutilisateur` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Motdepasse` varchar(50) DEFAULT NULL,
  `IDtype_user` bigint(20) DEFAULT NULL,
  `Superviseur` tinyint(4) DEFAULT 0,
  `Motdepasseàsaisir` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `IDVENTE` bigint(20) NOT NULL,
  `NUMVENTE` int(11) DEFAULT 0,
  `DATESVENTE` date DEFAULT NULL,
  `MARGE` decimal(24,6) DEFAULT 0.000000,
  `TYPEVENTE` varchar(10) DEFAULT NULL,
  `NOMCLIENT` varchar(100) DEFAULT NULL,
  `IDutilisateur` int(11) DEFAULT 0,
  `IDCLIENT` int(11) DEFAULT 0,
  `MODEPAIEMENT` varchar(50) DEFAULT '0',
  `REFPAIEMENT` varchar(200) DEFAULT NULL,
  `MONTANT` decimal(24,6) DEFAULT 0.000000,
  `MOIS` int(11) DEFAULT NULL,
  `ANNEE` smallint(6) DEFAULT 0,
  `MOISLETTRE` varchar(10) DEFAULT NULL,
  `HEURE` time DEFAULT NULL,
  `MONNAIE` decimal(24,6) DEFAULT 0.000000
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`IDARTICLES`),
  ADD KEY `CODEREF` (`CODEREF`),
  ADD KEY `DESIGNATION` (`DESIGNATION`),
  ADD KEY `FAIT` (`FAIT`),
  ADD KEY `IDFAMILLE` (`IDFAMILLE`),
  ADD KEY `FAITDEPOT` (`FAITDEPOT`),
  ADD KEY `IDFournisseur` (`IDFournisseur`);

--
-- Index pour la table `attente`
--
ALTER TABLE `attente`
  ADD PRIMARY KEY (`IDAttente`),
  ADD KEY `IDARTICLES` (`IDARTICLES`),
  ADD KEY `NumVente` (`NumVente`);

--
-- Index pour la table `billetbanque`
--
ALTER TABLE `billetbanque`
  ADD PRIMARY KEY (`IDBilletbanque`);

--
-- Index pour la table `chargefixe`
--
ALTER TABLE `chargefixe`
  ADD PRIMARY KEY (`IDChargeFixe`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`IDClient`),
  ADD KEY `NOMCLIENT` (`NOMCLIENT`);

--
-- Index pour la table `cloturecaisse`
--
ALTER TABLE `cloturecaisse`
  ADD PRIMARY KEY (`IDCLOTURECAISSE`),
  ADD KEY `DATE` (`DATE`),
  ADD KEY `IDutilisateur` (`IDutilisateur`);

--
-- Index pour la table `compteclient`
--
ALTER TABLE `compteclient`
  ADD PRIMARY KEY (`IDCOMPTECLIENT`),
  ADD KEY `IDClient` (`IDClient`),
  ADD KEY `DATES` (`DATES`);

--
-- Index pour la table `comptefrn`
--
ALTER TABLE `comptefrn`
  ADD PRIMARY KEY (`IDCOMPTEFRN`),
  ADD KEY `NUMBL` (`NUMBL`),
  ADD KEY `IDFOURNISSEUR` (`IDFOURNISSEUR`),
  ADD KEY `DATES` (`DATES`),
  ADD KEY `NUMFACT` (`NUMFACT`);

--
-- Index pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD PRIMARY KEY (`IDCOMPTEUR`);

--
-- Index pour la table `config_droit`
--
ALTER TABLE `config_droit`
  ADD PRIMARY KEY (`IDconfig_droit`),
  ADD KEY `IDutilisateur` (`IDutilisateur`);

--
-- Index pour la table `depenses`
--
ALTER TABLE `depenses`
  ADD PRIMARY KEY (`IDDEPENSES`),
  ADD KEY `DATES` (`DATES`),
  ADD KEY `MOIS` (`MOIS`),
  ADD KEY `ANNEE` (`ANNEE`);

--
-- Index pour la table `depot`
--
ALTER TABLE `depot`
  ADD PRIMARY KEY (`IDDEPOT`);

--
-- Index pour la table `detailsortie`
--
ALTER TABLE `detailsortie`
  ADD PRIMARY KEY (`IDDETAILVENTE`),
  ADD KEY `IDARTICLES` (`IDARTICLES`),
  ADD KEY `IDutilisateur` (`IDutilisateur`),
  ADD KEY `IDCLIENT` (`IDCLIENT`),
  ADD KEY `IDDEPOT` (`IDDEPOT`),
  ADD KEY `IDVENTE` (`IDVENTE`);

--
-- Index pour la table `echeance_client`
--
ALTER TABLE `echeance_client`
  ADD PRIMARY KEY (`IDECHEANCE_CLIENT`),
  ADD KEY `NUMVENTE` (`NUMVENTE`),
  ADD KEY `DATE_ECHEANCE` (`DATE_ECHEANCE`),
  ADD KEY `IDCLIENT` (`IDCLIENT`);

--
-- Index pour la table `echeance_frns`
--
ALTER TABLE `echeance_frns`
  ADD PRIMARY KEY (`IDECHEANCE_FRNS`),
  ADD KEY `IDFournisseur` (`IDFournisseur`),
  ADD KEY `NUMFACT` (`NUMFACT`),
  ADD KEY `DATE_ECHEANCE` (`DATE_ECHEANCE`);

--
-- Index pour la table `entreestock`
--
ALTER TABLE `entreestock`
  ADD PRIMARY KEY (`IDENTREESTOCK`),
  ADD KEY `DATES` (`DATES`),
  ADD KEY `IDARTICLES` (`IDARTICLES`),
  ADD KEY `IDDEPOT` (`IDDEPOT`),
  ADD KEY `PEREMPTION` (`PEREMPTION`),
  ADD KEY `VU` (`VU`),
  ADD KEY `IDFournisseur` (`IDFournisseur`);

--
-- Index pour la table `entreetmp`
--
ALTER TABLE `entreetmp`
  ADD PRIMARY KEY (`IDENTREETMP`),
  ADD KEY `IDARTICLES` (`IDARTICLES`),
  ADD KEY `IDFamille` (`IDFamille`),
  ADD KEY `IDFournisseur` (`IDFournisseur`);

--
-- Index pour la table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`IDFamille`),
  ADD KEY `LIBELLE` (`LIBELLE`),
  ADD KEY `AFFICHER` (`AFFICHER`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`IDFournisseur`),
  ADD KEY `NOMFRNS` (`NOMFRNS`);

--
-- Index pour la table `histoentresortie`
--
ALTER TABLE `histoentresortie`
  ADD PRIMARY KEY (`IDHISTOENTRESORTIE`),
  ADD KEY `IDARTICLES` (`IDARTICLES`),
  ADD KEY `DATES` (`DATES`),
  ADD KEY `MAGDEPOT` (`MAGDEPOT`);

--
-- Index pour la table `histoinventaire`
--
ALTER TABLE `histoinventaire`
  ADD PRIMARY KEY (`IDHISTOINVENTAIRE`),
  ADD KEY `IDARTICLES` (`IDARTICLES`),
  ADD KEY `DATES` (`DATES`),
  ADD KEY `MAGDEPOT` (`MAGDEPOT`);

--
-- Index pour la table `histosupression`
--
ALTER TABLE `histosupression`
  ADD PRIMARY KEY (`IDHISTOSUPRESSION`),
  ADD KEY `DATESupp` (`DATESupp`),
  ADD KEY `IDARTICLES` (`IDARTICLES`),
  ADD KEY `IDutilisateur` (`IDutilisateur`);

--
-- Index pour la table `parametre`
--
ALTER TABLE `parametre`
  ADD PRIMARY KEY (`IDparametre`);

--
-- Index pour la table `paramsociete`
--
ALTER TABLE `paramsociete`
  ADD PRIMARY KEY (`IDPARAMSOCIETE`);

--
-- Index pour la table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`IDpassword`);

--
-- Index pour la table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`IDtype_user`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IDutilisateur`),
  ADD UNIQUE KEY `Nom` (`Nom`),
  ADD KEY `IDtype_user` (`IDtype_user`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`IDVENTE`),
  ADD KEY `NUMVENTE` (`NUMVENTE`),
  ADD KEY `DATESVENTE` (`DATESVENTE`),
  ADD KEY `TYPEVENTE` (`TYPEVENTE`),
  ADD KEY `IDutilisateur` (`IDutilisateur`),
  ADD KEY `IDCLIENT` (`IDCLIENT`),
  ADD KEY `MOIS` (`MOIS`),
  ADD KEY `ANNEE` (`ANNEE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `IDARTICLES` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `attente`
--
ALTER TABLE `attente`
  MODIFY `IDAttente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `billetbanque`
--
ALTER TABLE `billetbanque`
  MODIFY `IDBilletbanque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chargefixe`
--
ALTER TABLE `chargefixe`
  MODIFY `IDChargeFixe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `IDClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cloturecaisse`
--
ALTER TABLE `cloturecaisse`
  MODIFY `IDCLOTURECAISSE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compteclient`
--
ALTER TABLE `compteclient`
  MODIFY `IDCOMPTECLIENT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comptefrn`
--
ALTER TABLE `comptefrn`
  MODIFY `IDCOMPTEFRN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compteur`
--
ALTER TABLE `compteur`
  MODIFY `IDCOMPTEUR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `config_droit`
--
ALTER TABLE `config_droit`
  MODIFY `IDconfig_droit` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `depenses`
--
ALTER TABLE `depenses`
  MODIFY `IDDEPENSES` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `depot`
--
ALTER TABLE `depot`
  MODIFY `IDDEPOT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detailsortie`
--
ALTER TABLE `detailsortie`
  MODIFY `IDDETAILVENTE` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `echeance_client`
--
ALTER TABLE `echeance_client`
  MODIFY `IDECHEANCE_CLIENT` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `echeance_frns`
--
ALTER TABLE `echeance_frns`
  MODIFY `IDECHEANCE_FRNS` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreestock`
--
ALTER TABLE `entreestock`
  MODIFY `IDENTREESTOCK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreetmp`
--
ALTER TABLE `entreetmp`
  MODIFY `IDENTREETMP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `famille`
--
ALTER TABLE `famille`
  MODIFY `IDFamille` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `IDFournisseur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `histoentresortie`
--
ALTER TABLE `histoentresortie`
  MODIFY `IDHISTOENTRESORTIE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `histoinventaire`
--
ALTER TABLE `histoinventaire`
  MODIFY `IDHISTOINVENTAIRE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `histosupression`
--
ALTER TABLE `histosupression`
  MODIFY `IDHISTOSUPRESSION` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parametre`
--
ALTER TABLE `parametre`
  MODIFY `IDparametre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `paramsociete`
--
ALTER TABLE `paramsociete`
  MODIFY `IDPARAMSOCIETE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `password`
--
ALTER TABLE `password`
  MODIFY `IDpassword` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `IDtype_user` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IDutilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `IDVENTE` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`IDFAMILLE`) REFERENCES `famille` (`IDFamille`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`IDFournisseur`) REFERENCES `fournisseur` (`IDFournisseur`);

--
-- Contraintes pour la table `attente`
--
ALTER TABLE `attente`
  ADD CONSTRAINT `attente_ibfk_1` FOREIGN KEY (`IDARTICLES`) REFERENCES `articles` (`IDARTICLES`);

--
-- Contraintes pour la table `cloturecaisse`
--
ALTER TABLE `cloturecaisse`
  ADD CONSTRAINT `cloturecaisse_ibfk_1` FOREIGN KEY (`IDutilisateur`) REFERENCES `utilisateur` (`IDutilisateur`);

--
-- Contraintes pour la table `compteclient`
--
ALTER TABLE `compteclient`
  ADD CONSTRAINT `compteclient_ibfk_1` FOREIGN KEY (`IDClient`) REFERENCES `client` (`IDClient`);

--
-- Contraintes pour la table `comptefrn`
--
ALTER TABLE `comptefrn`
  ADD CONSTRAINT `comptefrn_ibfk_1` FOREIGN KEY (`IDFOURNISSEUR`) REFERENCES `fournisseur` (`IDFournisseur`);

--
-- Contraintes pour la table `config_droit`
--
ALTER TABLE `config_droit`
  ADD CONSTRAINT `config_droit_ibfk_1` FOREIGN KEY (`IDutilisateur`) REFERENCES `utilisateur` (`IDutilisateur`);

--
-- Contraintes pour la table `detailsortie`
--
ALTER TABLE `detailsortie`
  ADD CONSTRAINT `detailsortie_ibfk_1` FOREIGN KEY (`IDARTICLES`) REFERENCES `articles` (`IDARTICLES`),
  ADD CONSTRAINT `detailsortie_ibfk_2` FOREIGN KEY (`IDVENTE`) REFERENCES `vente` (`IDVENTE`);

--
-- Contraintes pour la table `echeance_client`
--
ALTER TABLE `echeance_client`
  ADD CONSTRAINT `echeance_client_ibfk_1` FOREIGN KEY (`IDCLIENT`) REFERENCES `client` (`IDClient`);

--
-- Contraintes pour la table `echeance_frns`
--
ALTER TABLE `echeance_frns`
  ADD CONSTRAINT `echeance_frns_ibfk_1` FOREIGN KEY (`IDFournisseur`) REFERENCES `fournisseur` (`IDFournisseur`);

--
-- Contraintes pour la table `entreestock`
--
ALTER TABLE `entreestock`
  ADD CONSTRAINT `entreestock_ibfk_1` FOREIGN KEY (`IDARTICLES`) REFERENCES `articles` (`IDARTICLES`),
  ADD CONSTRAINT `entreestock_ibfk_2` FOREIGN KEY (`IDDEPOT`) REFERENCES `depot` (`IDDEPOT`),
  ADD CONSTRAINT `entreestock_ibfk_3` FOREIGN KEY (`IDFournisseur`) REFERENCES `fournisseur` (`IDFournisseur`);

--
-- Contraintes pour la table `entreetmp`
--
ALTER TABLE `entreetmp`
  ADD CONSTRAINT `entreetmp_ibfk_1` FOREIGN KEY (`IDARTICLES`) REFERENCES `articles` (`IDARTICLES`),
  ADD CONSTRAINT `entreetmp_ibfk_2` FOREIGN KEY (`IDFamille`) REFERENCES `famille` (`IDFamille`),
  ADD CONSTRAINT `entreetmp_ibfk_3` FOREIGN KEY (`IDFournisseur`) REFERENCES `fournisseur` (`IDFournisseur`);

--
-- Contraintes pour la table `histoentresortie`
--
ALTER TABLE `histoentresortie`
  ADD CONSTRAINT `histoentresortie_ibfk_1` FOREIGN KEY (`IDARTICLES`) REFERENCES `articles` (`IDARTICLES`);

--
-- Contraintes pour la table `histoinventaire`
--
ALTER TABLE `histoinventaire`
  ADD CONSTRAINT `histoinventaire_ibfk_1` FOREIGN KEY (`IDARTICLES`) REFERENCES `articles` (`IDARTICLES`);

--
-- Contraintes pour la table `histosupression`
--
ALTER TABLE `histosupression`
  ADD CONSTRAINT `histosupression_ibfk_1` FOREIGN KEY (`IDARTICLES`) REFERENCES `articles` (`IDARTICLES`),
  ADD CONSTRAINT `histosupression_ibfk_2` FOREIGN KEY (`IDutilisateur`) REFERENCES `utilisateur` (`IDutilisateur`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`IDtype_user`) REFERENCES `type_user` (`IDtype_user`);

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_ibfk_1` FOREIGN KEY (`IDutilisateur`) REFERENCES `utilisateur` (`IDutilisateur`),
  ADD CONSTRAINT `vente_ibfk_2` FOREIGN KEY (`IDCLIENT`) REFERENCES `client` (`IDClient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

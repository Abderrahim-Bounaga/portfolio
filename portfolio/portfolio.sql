-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 02 oct. 2020 à 20:51
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `about_name` varchar(33) NOT NULL,
  `about_desc` text NOT NULL,
  `about_date` date NOT NULL,
  `about_email` text NOT NULL,
  `about_address` text NOT NULL,
  `about_number` int(11) NOT NULL,
  `about_project` int(11) NOT NULL,
  `about_archive` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id_about`, `about_name`, `about_desc`, `about_date`, `about_email`, `about_address`, `about_number`, `about_project`, `about_archive`) VALUES
(1, 'Bounaga Abderrahim', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', '1997-10-08', 'abderrahimbounaga60@gmail.com', 'Assaka bloc C NR 259 Tikiouine', 2147483647, 20, 0);

-- --------------------------------------------------------

--
-- Structure de la table `admin_users`
--

CREATE TABLE `admin_users` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `domaine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin_users`
--

INSERT INTO `admin_users` (`id_admin`, `username`, `email`, `password`, `domaine`) VALUES
(1, 'Bounaga Abderrahim', 'bounaga1997@gmail.com', '$2y$10$BmVVuYnfIgqpwkBRXRT77ubPqLpVEkOvWT6MJlSeYNRsZyAWVevmq', 'full-stack developer');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `project_img` text NOT NULL,
  `project_lien` text NOT NULL,
  `project_title` varchar(60) NOT NULL,
  `project_lang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id_project`, `project_img`, `project_lien`, `project_title`, `project_lang`) VALUES
(1, 'fact.PNG', 'https://github.com/Abderrahim-Bounaga/facturation', 'facturation', 'Html-css-js');

-- --------------------------------------------------------

--
-- Structure de la table `resumes`
--

CREATE TABLE `resumes` (
  `id_resume` int(11) NOT NULL,
  `resume_date` int(11) NOT NULL,
  `resume_title` text NOT NULL,
  `resume_info` text NOT NULL,
  `resume_desc` text NOT NULL,
  `resume_archif` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resumes`
--

INSERT INTO `resumes` (`id_resume`, `resume_date`, `resume_title`, `resume_info`, `resume_desc`, `resume_archif`) VALUES
(1, 2014, 'testtesttetstetst', 'hjbd uhsuqkjhhcqlqjkjkvshoqhlgh', 'bnvjqb fqjmlqfml', 0),
(2, 2014, 'test', 'test', 'test', 0);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id_services` int(11) NOT NULL,
  `services_title` varchar(40) NOT NULL,
  `services_icone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id_services`, `services_title`, `services_icone`) VALUES
(1, 'dsigne', ''),
(2, 'Front-end', ''),
(3, 'Back-end', '');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id_skills` int(11) NOT NULL,
  `skills_title` text NOT NULL,
  `skills_por` int(3) NOT NULL,
  `skills_archive` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id_skills`, `skills_title`, `skills_por`, `skills_archive`) VALUES
(1, 'Html5', 90, 0),
(2, 'CSS3', 85, 0),
(3, 'JavaScript', 65, 0),
(4, 'Php', 55, 0),
(5, 'design', 80, 0),
(6, 'jQuery', 66, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Index pour la table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Index pour la table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id_resume`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skills`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id_resume` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skills` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

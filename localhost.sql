-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 28-Maio-2014 às 22:17
-- Versão do servidor: 5.5.33-31.1
-- versão do PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `fonotool_base`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fono`
--

CREATE TABLE IF NOT EXISTS `tb_fono` (
  `fono_id` int(11) NOT NULL AUTO_INCREMENT,
  `fono_login` varchar(50) NOT NULL,
  `fono_senha` varchar(30) NOT NULL,
  `fono_nome` varchar(45) NOT NULL,
  `fono_crfa` varchar(8) NOT NULL,
  `fono_fone` varchar(12) DEFAULT NULL,
  `fono_email` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`fono_id`),
  UNIQUE KEY `fono_crfa_UNIQUE` (`fono_crfa`),
  UNIQUE KEY `fono_login_UNIQUE` (`fono_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_fono`
--

INSERT INTO `tb_fono` (`fono_id`, `fono_login`, `fono_senha`, `fono_nome`, `fono_crfa`, `fono_fone`, `fono_email`) VALUES
(3, 'admin', 'admin', 'administrador', '00-000-0', '(84)0000-000', 'admin@admin.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_indicadores_risco`
--

CREATE TABLE IF NOT EXISTS `tb_indicadores_risco` (
  `ir_id` int(11) NOT NULL AUTO_INCREMENT,
  `ir_prematuridade` int(11) DEFAULT NULL,
  `ir_convulsoes_neo` int(11) DEFAULT NULL,
  `ir_hist_fam` int(11) DEFAULT NULL,
  `ir_ictericia` int(11) DEFAULT NULL,
  `ir_consanguinidade` int(11) DEFAULT NULL,
  `ir_alcolismo_drogas` int(11) DEFAULT NULL,
  `ir_infeccoes` int(11) DEFAULT NULL,
  `ir_peso` int(11) DEFAULT NULL,
  `ir_ma_formacao_cf` int(11) DEFAULT NULL,
  `ir_meningite` int(11) DEFAULT NULL,
  `ir_sindrome` int(11) DEFAULT NULL,
  `ir_asfixia_perinatal` int(11) DEFAULT NULL,
  `ir_apgar` int(11) DEFAULT NULL,
  `ir_vent_mec_prolong` int(11) DEFAULT NULL,
  `ir_hpiv` int(11) DEFAULT NULL,
  `ir_dis_broncopulmonar` int(11) DEFAULT NULL,
  `ir_permanencia_uti` int(11) DEFAULT NULL,
  `ir_drogas_ototoxicos` int(11) DEFAULT NULL,
  `ir_pig` int(11) DEFAULT NULL,
  PRIMARY KEY (`ir_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_local`
--

CREATE TABLE IF NOT EXISTS `tb_local` (
  `id_local` int(11) NOT NULL AUTO_INCREMENT,
  `loc_maternidade` varchar(50) NOT NULL,
  `loc_leito` varchar(45) NOT NULL,
  PRIMARY KEY (`id_local`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mae`
--

CREATE TABLE IF NOT EXISTS `tb_mae` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_nome` varchar(50) NOT NULL,
  `m_idade` varchar(3) NOT NULL,
  `cartao_sus` varchar(17) NOT NULL,
  `m_fone` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_obs`
--

CREATE TABLE IF NOT EXISTS `tb_obs` (
  `obs_id` int(11) NOT NULL AUTO_INCREMENT,
  `obs_fono2` varchar(45) DEFAULT NULL,
  `obs_data` varchar(10) DEFAULT NULL,
  `obs_obs` varchar(255) DEFAULT NULL,
  `obs_status` varchar(45) NOT NULL,
  PRIMARY KEY (`obs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_parto`
--

CREATE TABLE IF NOT EXISTS `tb_parto` (
  `parto_id` int(11) NOT NULL AUTO_INCREMENT,
  `part_peso` varchar(5) NOT NULL,
  `part_APGAR` varchar(3) NOT NULL,
  `pc_ig` varchar(10) NOT NULL,
  PRIMARY KEY (`parto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rec_nascido`
--

CREATE TABLE IF NOT EXISTS `tb_rec_nascido` (
  `reb_id` int(11) NOT NULL AUTO_INCREMENT,
  `reb_nome` varchar(50) NOT NULL,
  `reb_dt_nasci` varchar(10) NOT NULL,
  `reb_hora_nasci` varchar(45) DEFAULT NULL,
  `tb_parto_parto_id` int(11) NOT NULL,
  `tb_triagem_auditiva_ta_id` int(11) NOT NULL,
  `tb_sexo_sex_id` int(11) NOT NULL,
  `tb_mae_m_id` int(11) NOT NULL,
  `tb_local_id_local` int(11) NOT NULL,
  PRIMARY KEY (`reb_id`),
  KEY `fk_tb_rec_nascido_tb_parto1_idx` (`tb_parto_parto_id`),
  KEY `fk_tb_rec_nascido_tb_triagem_auditiva1_idx` (`tb_triagem_auditiva_ta_id`),
  KEY `fk_tb_rec_nascido_tb_sexo1_idx` (`tb_sexo_sex_id`),
  KEY `fk_tb_rec_nascido_tb_mae1_idx` (`tb_mae_m_id`),
  KEY `fk_tb_rec_nascido_tb_local1_idx` (`tb_local_id_local`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sexo`
--

CREATE TABLE IF NOT EXISTS `tb_sexo` (
  `sex_id` int(11) NOT NULL AUTO_INCREMENT,
  `sex_sexo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`sex_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_triagem_auditiva`
--

CREATE TABLE IF NOT EXISTS `tb_triagem_auditiva` (
  `ta_id` int(11) NOT NULL AUTO_INCREMENT,
  `ta_eoat_od` int(11) DEFAULT NULL,
  `ta_eoat_oe` int(11) DEFAULT NULL,
  `ta_peate_od` int(11) DEFAULT NULL,
  `ta_peate_oe` int(11) DEFAULT NULL,
  `ta_data` varchar(10) DEFAULT NULL,
  `ta_reteste` varchar(10) DEFAULT NULL,
  `tb_fono_fono_id` int(11) NOT NULL,
  `tb_parto_parto_id1` int(11) NOT NULL,
  `tb_indicadores_risco_ir_id` int(11) NOT NULL,
  `tb_obs_obs_id1` int(11) NOT NULL,
  PRIMARY KEY (`ta_id`),
  KEY `fk_tb_triagem_auditiva_tb_fono1_idx` (`tb_fono_fono_id`),
  KEY `fk_tb_triagem_auditiva_tb_parto1_idx` (`tb_parto_parto_id1`),
  KEY `fk_tb_triagem_auditiva_tb_indicadores_risco1_idx` (`tb_indicadores_risco_ir_id`),
  KEY `fk_tb_triagem_auditiva_tb_obs1_idx` (`tb_obs_obs_id1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_rec_nascido`
--
ALTER TABLE `tb_rec_nascido`
  ADD CONSTRAINT `fk_tb_rec_nascido_tb_parto1` FOREIGN KEY (`tb_parto_parto_id`) REFERENCES `tb_parto` (`parto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_rec_nascido_tb_triagem_auditiva1` FOREIGN KEY (`tb_triagem_auditiva_ta_id`) REFERENCES `tb_triagem_auditiva` (`ta_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_rec_nascido_tb_sexo1` FOREIGN KEY (`tb_sexo_sex_id`) REFERENCES `tb_sexo` (`sex_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_rec_nascido_tb_mae1` FOREIGN KEY (`tb_mae_m_id`) REFERENCES `tb_mae` (`m_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_rec_nascido_tb_local1` FOREIGN KEY (`tb_local_id_local`) REFERENCES `tb_local` (`id_local`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_triagem_auditiva`
--
ALTER TABLE `tb_triagem_auditiva`
  ADD CONSTRAINT `fk_tb_triagem_auditiva_tb_fono1` FOREIGN KEY (`tb_fono_fono_id`) REFERENCES `tb_fono` (`fono_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_triagem_auditiva_tb_parto1` FOREIGN KEY (`tb_parto_parto_id1`) REFERENCES `tb_parto` (`parto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_triagem_auditiva_tb_indicadores_risco1` FOREIGN KEY (`tb_indicadores_risco_ir_id`) REFERENCES `tb_indicadores_risco` (`ir_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_triagem_auditiva_tb_obs1` FOREIGN KEY (`tb_obs_obs_id1`) REFERENCES `tb_obs` (`obs_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

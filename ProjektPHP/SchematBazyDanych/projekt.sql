#
# DUMP FILE
#
# Database is ported from MS Access
#------------------------------------------------------------------
# Created using "MS Access to MySQL" form http://www.bullzip.com
# Program Version 5.5.282
#
# OPTIONS:
#   sourcefilename=C:/Users/Kamil/Documents/Dophp.accdb
#   sourceusername=
#   sourcepassword=
#   sourcesystemdatabase=
#   destinationdatabase=movedb
#   storageengine=MyISAM
#   dropdatabase=0
#   createtables=1
#   unicode=1
#   autocommit=1
#   transferdefaultvalues=1
#   transferindexes=1
#   transferautonumbers=1
#   transferrecords=1
#   columnlist=1
#   tableprefix=
#   negativeboolean=0
#   ignorelargeblobs=0
#   memotype=LONGTEXT
#   datetimetype=DATETIME
#

CREATE DATABASE IF NOT EXISTS `movedb`;
USE `movedb`;

#
# Table structure for table 'dzial'
#

DROP TABLE IF EXISTS `dzial`;

CREATE TABLE `dzial` (
  `id_dzial` INTEGER NOT NULL AUTO_INCREMENT, 
  `nazwa_dzialu` VARCHAR(255), 
  PRIMARY KEY (`id_dzial`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'dzial'
#

# 0 records

#
# Table structure for table 'jezyki'
#

DROP TABLE IF EXISTS `jezyki`;

CREATE TABLE `jezyki` (
  `id_jezyka` INTEGER NOT NULL AUTO_INCREMENT, 
  `nazwa_jezyka` VARCHAR(255)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'jezyki'
#

# 0 records

#
# Table structure for table 'kurs'
#

DROP TABLE IF EXISTS `kurs`;

CREATE TABLE `kurs` (
  `id_kursu` INTEGER NOT NULL AUTO_INCREMENT, 
  `nazwa_kursu` VARCHAR(255)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'kurs'
#

# 0 records

#
# Table structure for table 'slowo'
#

DROP TABLE IF EXISTS `slowo`;

CREATE TABLE `slowo` (
  `id_slowo` INTEGER NOT NULL AUTO_INCREMENT, 
  `id_dzial` INTEGER DEFAULT 0, 
  INDEX (`id_dzial`), 
  INDEX (`id_slowo`), 
  PRIMARY KEY (`id_slowo`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'slowo'
#

# 0 records

#
# Table structure for table 'tlumaczenie'
#

DROP TABLE IF EXISTS `tlumaczenie`;

CREATE TABLE `tlumaczenie` (
  `id_tlumaczenia` INTEGER NOT NULL AUTO_INCREMENT, 
  `id_slowo` INTEGER DEFAULT 0, 
  `id_jezyka` INTEGER DEFAULT 0, 
  `tlumaczenie` VARCHAR(255)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'tlumaczenie'
#

# 0 records

#
# Table structure for table 'tlumaczenieuzytkownik'
#

DROP TABLE IF EXISTS `tlumaczenieuzytkownik`;

CREATE TABLE `tlumaczenieuzytkownik` (
  `id_tlumaczenieuzytkownik` INTEGER NOT NULL AUTO_INCREMENT, 
  `id_tlumaczenia` INTEGER DEFAULT 0, 
  `id_uzytkownik` INTEGER DEFAULT 0, 
  `czy_nauczone` INTEGER DEFAULT 0
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'tlumaczenieuzytkownik'
#

# 0 records

#
# Table structure for table 'uzytkownik'
#

DROP TABLE IF EXISTS `uzytkownik`;

CREATE TABLE `uzytkownik` (
  `id_uzytkownik` INTEGER NOT NULL AUTO_INCREMENT, 
  `login` VARCHAR(255), 
  `haslo` VARCHAR(255), 
  `data_utworzenia` DATETIME, 
  PRIMARY KEY (`id_uzytkownik`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'uzytkownik'
#

# 0 records


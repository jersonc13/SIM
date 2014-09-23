/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.27 : Database - sim_comercial_prod
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sim_comercial_prod` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sim_comercial_prod`;

/*Table structure for table `sim_canalempresa` */

DROP TABLE IF EXISTS `sim_canalempresa`;

CREATE TABLE `sim_canalempresa` (
  `nidcanempresa` int(11) NOT NULL AUTO_INCREMENT,
  `nidperroles` int(11) DEFAULT NULL,
  `nidcanal` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `ccamempguardar` varchar(30) DEFAULT NULL,
  `ccamempactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidcanempresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `sim_canalesempresas` */

DROP TABLE IF EXISTS `sim_canalesempresas`;

CREATE TABLE `sim_canalesempresas` (
  `nidcanempresa` int(11) NOT NULL AUTO_INCREMENT,
  `nidempresa` int(11) DEFAULT NULL,
  `nidcanal` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `ccanempguardar` varchar(30) DEFAULT NULL,
  `cvenempguardar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidcanempresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `sim_carteraclientes` */

DROP TABLE IF EXISTS `sim_carteraclientes`;

CREATE TABLE `sim_carteraclientes` (
  `nidcartclientes` int(11) NOT NULL AUTO_INCREMENT,
  `nidclientes` int(11) DEFAULT NULL,
  `nidempresas` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `ccarcliguardar` varchar(30) DEFAULT NULL,
  `ccarcliactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidcartclientes`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_carteravendedor` */

DROP TABLE IF EXISTS `sim_carteravendedor`;

CREATE TABLE `sim_carteravendedor` (
  `nidvenempresa` int(11) NOT NULL AUTO_INCREMENT,
  `nidvendedor` int(11) NOT NULL,
  `nidempresas` int(11) NOT NULL,
  `nestado` int(11) NOT NULL,
  `ccarvenguardar` varchar(30) NOT NULL,
  `ccarvenactualizar` varchar(30) NOT NULL,
  PRIMARY KEY (`nidvenempresa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_empresa` */

DROP TABLE IF EXISTS `sim_empresa`;

CREATE TABLE `sim_empresa` (
  `nidempresas` int(11) NOT NULL AUTO_INCREMENT,
  `nidpersona` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cempguardar` varchar(30) DEFAULT NULL,
  `cempactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidempresas`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_linea` */

DROP TABLE IF EXISTS `sim_linea`;

CREATE TABLE `sim_linea` (
  `nidlinea` int(11) NOT NULL AUTO_INCREMENT,
  `clinea` varchar(30) DEFAULT NULL,
  `calias` varchar(10) DEFAULT NULL,
  `nestado` int(1) DEFAULT NULL,
  `clinguardar` varchar(30) DEFAULT NULL,
  `clinactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidlinea`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_maestra` */

DROP TABLE IF EXISTS `sim_maestra`;

CREATE TABLE `sim_maestra` (
  `nidmaestra` int(11) NOT NULL AUTO_INCREMENT,
  `cmaestra` varchar(30) DEFAULT NULL,
  `nvalor` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cmaeguardar` varchar(30) DEFAULT NULL,
  `cmaeactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidmaestra`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_metavendedor` */

DROP TABLE IF EXISTS `sim_metavendedor`;

CREATE TABLE `sim_metavendedor` (
  `nidmetvendedor` int(11) NOT NULL AUTO_INCREMENT,
  `nidcanal` int(11) DEFAULT NULL,
  `nidvendedor` int(11) DEFAULT NULL,
  `nmeta` int(11) DEFAULT NULL,
  `nidperiodo` int(11) DEFAULT NULL,
  `nestado` int(1) DEFAULT NULL,
  `cmetvenguardar` varchar(30) DEFAULT NULL,
  `cmetvenactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidmetvendedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `sim_opcion` */

DROP TABLE IF EXISTS `sim_opcion`;

CREATE TABLE `sim_opcion` (
  `nidopcion` int(11) NOT NULL AUTO_INCREMENT,
  `copcion` varchar(30) DEFAULT NULL,
  `curl` varchar(100) DEFAULT NULL,
  `cicono` varchar(20) DEFAULT NULL,
  `nvalor` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `copcguardar` varchar(30) DEFAULT NULL,
  `copcactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidopcion`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_opcionusuario` */

DROP TABLE IF EXISTS `sim_opcionusuario`;

CREATE TABLE `sim_opcionusuario` (
  `nidopcion` int(11) DEFAULT NULL,
  `nidusuario` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `copcusuguardar` varchar(30) DEFAULT NULL,
  `copcusuactualizar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `sim_percorreo` */

DROP TABLE IF EXISTS `sim_percorreo`;

CREATE TABLE `sim_percorreo` (
  `nidpercorreo` int(11) NOT NULL AUTO_INCREMENT,
  `ccorreo` varchar(80) DEFAULT NULL,
  `nidpersona` int(11) DEFAULT NULL,
  `cpercorguardar` varchar(30) DEFAULT NULL,
  `cpercoractualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidpercorreo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_perdireccion` */

DROP TABLE IF EXISTS `sim_perdireccion`;

CREATE TABLE `sim_perdireccion` (
  `nidperdireccion` int(11) NOT NULL AUTO_INCREMENT,
  `cdireccion` varchar(200) DEFAULT NULL,
  `nidubigeo` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cperdirguardar` varchar(30) DEFAULT NULL,
  `cperdiractualizar` varchar(30) DEFAULT NULL,
  `nidpersona` int(8) NOT NULL,
  PRIMARY KEY (`nidperdireccion`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_pergps` */

DROP TABLE IF EXISTS `sim_pergps`;

CREATE TABLE `sim_pergps` (
  `nidpergps` int(11) NOT NULL AUTO_INCREMENT,
  `clatitud` varchar(20) DEFAULT NULL,
  `clongitud` varchar(20) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `nidpersona` int(11) DEFAULT NULL,
  `cpergpsguardar` varchar(30) DEFAULT NULL,
  `cpergpsactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidpergps`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_periodo` */

DROP TABLE IF EXISTS `sim_periodo`;

CREATE TABLE `sim_periodo` (
  `nidperiodo` int(11) NOT NULL AUTO_INCREMENT,
  `cperiodo` int(11) DEFAULT NULL,
  `nmes` int(11) DEFAULT NULL,
  `nanio` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cperguardar` varchar(30) DEFAULT NULL,
  `cperactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidperiodo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `sim_persona` */

DROP TABLE IF EXISTS `sim_persona`;

CREATE TABLE `sim_persona` (
  `nidpersona` int(11) NOT NULL AUTO_INCREMENT,
  `capellidos` varchar(60) DEFAULT NULL,
  `cnombres` varchar(120) DEFAULT NULL,
  `cnomcomercial` varchar(120) DEFAULT NULL,
  `cdniruc` varchar(11) DEFAULT NULL,
  `crandom` varchar(10) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cperguardar` varchar(30) DEFAULT NULL,
  `cperactualizar` varbinary(30) DEFAULT NULL,
  `nidsexo` int(11) DEFAULT NULL,
  `nidestadocivil` int(11) DEFAULT NULL,
  `nidtipdocumento` int(11) DEFAULT NULL,
  PRIMARY KEY (`nidpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_pertelefono` */

DROP TABLE IF EXISTS `sim_pertelefono`;

CREATE TABLE `sim_pertelefono` (
  `nidpertelefono` int(11) NOT NULL AUTO_INCREMENT,
  `ctelefono` varchar(9) DEFAULT NULL,
  `nidoperador` int(11) DEFAULT NULL,
  `nidpersona` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cpertelguardar` varchar(30) DEFAULT NULL,
  `cpertelactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidpertelefono`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_productopedido` */

DROP TABLE IF EXISTS `sim_productopedido`;

CREATE TABLE `sim_productopedido` (
  `nidpropedidos` int(11) NOT NULL AUTO_INCREMENT,
  `nidvendedor` int(11) DEFAULT NULL,
  `cvendedor` varchar(120) DEFAULT NULL,
  `nidproempresa` int(11) DEFAULT NULL,
  `cproducto` varchar(30) DEFAULT NULL,
  `ncantidad` int(11) DEFAULT NULL,
  `dfecha` datetime DEFAULT NULL,
  `ndia` int(2) DEFAULT NULL,
  `nmes` int(2) DEFAULT NULL,
  `nanio` int(4) DEFAULT NULL,
  `nidempresa` int(11) DEFAULT NULL,
  `cempresa` varchar(120) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cpropedguardar` varchar(30) DEFAULT NULL,
  `cpropedactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidpropedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `sim_productos` */

DROP TABLE IF EXISTS `sim_productos`;

CREATE TABLE `sim_productos` (
  `nidproductos` int(11) NOT NULL AUTO_INCREMENT,
  `cproductos` varchar(30) DEFAULT NULL,
  `nestado` int(1) DEFAULT NULL,
  `cproguardar` varchar(30) DEFAULT NULL,
  `cproactualizar` varchar(30) DEFAULT NULL,
  `nidlinea` int(11) DEFAULT NULL,
  PRIMARY KEY (`nidproductos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_productosempresa` */

DROP TABLE IF EXISTS `sim_productosempresa`;

CREATE TABLE `sim_productosempresa` (
  `nidproempresa` int(11) NOT NULL AUTO_INCREMENT,
  `nidperroles` int(11) DEFAULT NULL,
  `nidproductos` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cproempguardar` varchar(30) DEFAULT NULL,
  `cproempactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidproempresa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_ubdepartamento` */

DROP TABLE IF EXISTS `sim_ubdepartamento`;

CREATE TABLE `sim_ubdepartamento` (
  `idDepa` int(5) NOT NULL DEFAULT '0',
  `departamento` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idDepa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `sim_ubdistrito` */

DROP TABLE IF EXISTS `sim_ubdistrito`;

CREATE TABLE `sim_ubdistrito` (
  `idDist` int(5) NOT NULL DEFAULT '0',
  `distrito` varchar(50) DEFAULT NULL,
  `idProv` int(5) DEFAULT NULL,
  PRIMARY KEY (`idDist`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `sim_ubprovincia` */

DROP TABLE IF EXISTS `sim_ubprovincia`;

CREATE TABLE `sim_ubprovincia` (
  `idProv` int(5) NOT NULL DEFAULT '0',
  `provincia` varchar(50) DEFAULT NULL,
  `idDepa` int(5) DEFAULT NULL,
  PRIMARY KEY (`idProv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `sim_ultimasesion` */

DROP TABLE IF EXISTS `sim_ultimasesion`;

CREATE TABLE `sim_ultimasesion` (
  `nidultsesion` int(11) NOT NULL AUTO_INCREMENT,
  `nidusuario` int(11) DEFAULT NULL,
  `dinicio` datetime DEFAULT NULL,
  `dfin` datetime DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `random` int(11) DEFAULT NULL,
  PRIMARY KEY (`nidultsesion`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_usuario` */

DROP TABLE IF EXISTS `sim_usuario`;

CREATE TABLE `sim_usuario` (
  `nidusuario` int(11) NOT NULL AUTO_INCREMENT,
  `cusuario` varchar(30) DEFAULT NULL,
  `ccontrasena` varchar(40) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `nidpersona` int(11) DEFAULT NULL,
  `cusuguardar` varchar(30) DEFAULT NULL,
  `cusuactualizar` varchar(30) DEFAULT NULL,
  `ntipousuario` int(2) DEFAULT NULL,
  PRIMARY KEY (`nidusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_vendedorclientes` */

DROP TABLE IF EXISTS `sim_vendedorclientes`;

CREATE TABLE `sim_vendedorclientes` (
  `nidvenclientes` int(11) NOT NULL AUTO_INCREMENT,
  `nidcarclientes` int(11) DEFAULT NULL,
  `nidvendedor` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cvencliguardar` varchar(30) DEFAULT NULL,
  `cvencliactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidvenclientes`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `sim_ventadiaria` */

DROP TABLE IF EXISTS `sim_ventadiaria`;

CREATE TABLE `sim_ventadiaria` (
  `nidvendiaria` int(11) NOT NULL AUTO_INCREMENT,
  `nidcliente` int(11) DEFAULT NULL,
  `ccliente` varchar(120) DEFAULT NULL,
  `nidvendedor` int(11) DEFAULT NULL,
  `cvendedor` varchar(120) DEFAULT NULL,
  `nidvencliente` int(11) DEFAULT NULL,
  `nidproempresa` int(11) DEFAULT NULL,
  `cproducto` varchar(30) DEFAULT NULL,
  `ncantidad` int(11) DEFAULT NULL,
  `nidtipoventa` int(11) DEFAULT NULL,
  `nsoles` decimal(10,0) DEFAULT NULL,
  `dfecha` datetime DEFAULT NULL,
  `ndia` int(2) DEFAULT NULL,
  `nmes` int(2) DEFAULT NULL,
  `nanio` int(4) DEFAULT NULL,
  `nidempresa` int(11) DEFAULT NULL,
  `cempresa` varchar(120) DEFAULT NULL,
  `nestado` int(1) DEFAULT NULL,
  `cvendiaguardar` varchar(30) DEFAULT NULL,
  `cvendiaactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidvendiaria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Procedure structure for procedure `sim_sp_ins_areas` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_areas` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_areas`(IN vaccion VARCHAR(30),IN vnombrearea VARCHAR(100),IN valias VARCHAR(100),IN vdependencia VARCHAR(5))
BEGIN
	IF (vaccion = 'ins_areas') THEN
	
	INSERT INTO sim_areas (careas,calias,cvalor,nestado,careguardar,careactualizar)
	VALUES (vnombrearea,valias,vdependencia,'1','0','0');
	
	SELECT '1' AS msg;	
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_asignarroles` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_asignarroles` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_asignarroles`(IN vaccion VARCHAR(30),IN vntipousuario VARCHAR(100),IN vnidpersona VARCHAR(100))
BEGIN
	IF (vaccion = 'ins_rolesxpersona') THEN
	INSERT INTO sim_personaroles(nidroles,nidpersona,nestado,cperrolguardar,cperrolactualizar)
	VALUES (vntipousuario,vnidpersona,'1','0','0');
	
	SELECT '1' AS msg;	
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_clientexempresa` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_clientexempresa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_clientexempresa`(IN vaccion VARCHAR(30),IN vnidempresas VARCHAR(100),IN vnidcliente VARCHAR(100))
BEGIN
	IF (vaccion = 'ins_clientexempresa') THEN
	
	INSERT INTO sim_carteraclientes (nidclientes,nidempresas,nestado,ccarcliguardar,ccarcliactualizar)
	VALUES (vnidcliente,vnidempresas,'1','0','0');
	
	SELECT '1' AS msg;	
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_clientexvendedor` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_clientexvendedor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_clientexvendedor`(IN vaccion VARCHAR(30),IN vnidempresas VARCHAR(100),IN vnidcliente VARCHAR(100))
BEGIN
	IF (vaccion = 'ins_clientexvendedor') THEN
	
	INSERT INTO sim_vendedorclientes (nidcarclientes,nidvendedor,nestado,cvencliguardar,cvencliactualizar)
	VALUES (vnidcliente,vnidempresas,'1','0','0');
	
	SELECT '1' AS msg;	
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_encuesta` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_encuesta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_encuesta`(IN vaccion VARCHAR(30),IN vencuesta VARCHAR(100),IN vidperroles INT,IN vnidusuario INT)
BEGIN
	IF (vaccion = 'ins_encuesta') THEN
	
	INSERT INTO sim_encuesta (cencuesta,nestado,cencguardar,cencactualizar,nidperroles)
	VALUES (vencuesta,1,CONCAT(DATE_FORMAT(NOW(),'%d%m%Y%H%i%s'),vnidusuario),'',vidperroles);
	
	SELECT '1' AS msg;	
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_linea` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_linea` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_linea`(IN vaccion VARCHAR(30),IN vlinea VARCHAR(100),IN valias VARCHAR(100))
BEGIN
	IF (vaccion = 'ins_linea') THEN
	
	INSERT INTO sim_linea (clinea,calias,nestado,clinguardar,clinactualizar)
	VALUES (vlinea,valias,'1','0','0');
	
	SELECT '1' AS msg;	
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_persona` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_persona` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_persona`(IN vaccion VARCHAR(30),IN vapellidos VARCHAR(100),IN vnombres VARCHAR(100), IN vtipodocumento varchar(10),IN vruc VARCHAR(11), IN vemail varchar(100), IN vphone varchar(100), IN voperador VARCHAR(100),IN vestadocivil VARCHAR(100),IN vsexo VARCHAR(100),IN vaddress VARCHAR(100), IN vcbodepartamento varchar(100), IN vcboprovincia VARCHAR(100), IN vcbo_distrito VARCHAR(100), IN vtxtlatitud VARCHAR(100), IN vtxtlongitud VARCHAR(100))
BEGIN
	DECLARE vidper INT;
	DECLARE vexiste INT;
	IF (vaccion = 'ins_personanatural') THEN
	
	SET vexiste = (SELECT COUNT(cdniruc) FROM sim_persona WHERE cdniruc=vruc and nestado=1);
	
	IF (vexiste=0) THEN
	
		INSERT INTO sim_persona (capellidos,cnombres,cnomcomercial,cdniruc,crandom,nestado,cperguardar,cperactualizar,nidsexo,nidestadocivil,nidtipdocumento)
		VALUES (vapellidos,vnombres,'',vruc,RAND() * 1000,'1','0','0',vsexo,vestadocivil,vtipodocumento);
	
	
		SET vidper = (SELECT nidpersona FROM sim_persona WHERE cdniruc=vruc AND nestado=1);
	
		INSERT INTO sim_percorreo (ccorreo,nidpersona,cpercorguardar,cpercoractualizar)
		VALUES (vemail,vidper,'0','0');
	
		INSERT INTO sim_perdireccion (cdireccion,nidubigeo,nestado,cperdirguardar,cperdiractualizar,nidpersona)
		VALUES (vaddress,vcbo_distrito,'1','0','0',vidper);
	
		INSERT INTO sim_pergps (clatitud,clongitud,nestado,nidpersona,cpergpsguardar,cpergpsactualizar)
		VALUES (vtxtlatitud,vtxtlongitud,1,vidper,'0','0');
	
		INSERT INTO sim_pertelefono (ctelefono,nidoperador,nidpersona,nestado,cpertelguardar,cpertelactualizar)
		VALUES (vphone,voperador,vidper,'1','0','0');
	
		SELECT '1' AS msg;	
	ELSE
	
		SELECT '0' AS msg;
	END IF;
	
	
	ELSEIF (vaccion = 'ins_personajuridica') THEN
	
		SET vexiste = (SELECT COUNT(cdniruc) FROM sim_persona WHERE cdniruc=vruc AND nestado=1);
	
	
		IF (vexiste=0) THEN
	
		INSERT INTO sim_persona (capellidos,cnombres,cnomcomercial,cdniruc,crandom,nestado,cperguardar,cperactualizar,nidsexo,nidestadocivil,nidtipdocumento)
		VALUES ('','',vnombres,vruc,'12345','1','0','0','','',vtipodocumento);
	
	
		SET vidper = (SELECT nidpersona FROM sim_persona WHERE cdniruc=vruc AND nestado=1);
	
		INSERT INTO sim_percorreo (ccorreo,nidpersona,cpercorguardar,cpercoractualizar)
		VALUES (vemail,vidper,'0','0');
	
		INSERT INTO sim_perdireccion (cdireccion,nidubigeo,nestado,cperdirguardar,cperdiractualizar,nidpersona)
		VALUES (vaddress,vcbo_distrito,'1','0','0',vidper);
	
		INSERT INTO sim_pergps (clatitud,clongitud,nestado,nidpersona,cpergpsguardar,cpergpsactualizar)
		VALUES (vtxtlatitud,vtxtlongitud,1,vidper,'0','0');
	
		INSERT INTO sim_pertelefono (ctelefono,nidoperador,nidpersona,nestado,cpertelguardar,cpertelactualizar)
		VALUES (vphone,voperador,vidper,'1','0','0');
		
		SELECT '1' AS msg;		
		
		ELSE
	
		SELECT '0' AS msg;
		END IF;
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_producto` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_producto` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_producto`(IN vaccion VARCHAR(30),IN vcproducto VARCHAR(100),IN vnidlinea VARCHAR(100))
BEGIN
	IF (vaccion = 'ins_producto') THEN
	
	INSERT INTO sim_productos (cproductos,nestado,cproguardar,cproactualizar,nidlinea)
	VALUES (vcproducto,'1','0','0',vnidlinea);
	
	SELECT '1' AS msg;	
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_productopedido` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_productopedido` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_productopedido`(IN vaccion VARCHAR(30),IN vnidproductoempresa VARCHAR(100),IN vnidcantidad VARCHAR(100),IN vnidempresa int,IN vnidpersona INT)
BEGIN
	IF (vaccion = 'ins_productopedido') THEN
	
	INSERT INTO sim_productopedido (nidvendedor,cvendedor,nidproempresa,cproducto,ncantidad,dfecha,ndia,nmes,nanio,nidempresa,cempresa,nestado)
	VALUES ('1',1,vnidproductoempresa,1,vnidcantidad,CURDATE(),DAy(CURDATE()),month(CURDATE()),YEAR(CURDATE()),vnidempresa,'1',1);
	
	SELECT '1' AS msg;	
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_productoxempresa` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_productoxempresa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_productoxempresa`(IN vaccion VARCHAR(30),IN vnidperroles VARCHAR(100),IN vnidproducto VARCHAR(100))
BEGIN
	IF (vaccion = 'ins_productoxempresa') THEN
	
	INSERT INTO sim_productosempresa (nidperroles,nidproductos,nestado,cproempguardar,cproempactualizar)
	VALUES (vnidperroles,vnidproducto,'1','0','0');
	
	SELECT '1' AS msg;	
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_ultimasesion` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_ultimasesion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_ultimasesion`(IN vaccion VARCHAR(30),IN vnidusuario VARCHAR(20),vrandom INT)
BEGIN
	IF (vaccion = 'ins_ultsesion') THEN
	
	INSERT INTO sim_ultimasesion (nidusuario,dinicio,dfin,nestado,random)
	VALUES (vnidusuario,NOW(),'',1,vrandom);
	
	SELECT 	MAX(nidultsesion) AS idaudit FROM sim_ultimasesion WHERE random=vrandom AND nidusuario=vnidusuario;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_usuarios` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_usuarios` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_usuarios`(IN vaccion VARCHAR(30),IN vcusuario VARCHAR(100),IN vccontrasena VARCHAR(100), IN vnidpersona VARCHAR(100))
BEGIN
	IF (vaccion = 'ins_usuarios') THEN
	
	INSERT INTO sim_usuario(cusuario,ccontrasena,nestado,nidpersona,cusuguardar,cusuactualizar,ntipousuario)
	VALUES (vcusuario,md5(vccontrasena),'1',vnidpersona,'123456','123456',7);
	
	SELECT '1' AS msg;	
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_vendedorxempresa` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_vendedorxempresa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_vendedorxempresa`(IN vaccion VARCHAR(30),IN vnidempresas VARCHAR(100),IN vnidvendedor VARCHAR(100))
BEGIN
	DECLARE vexiste INT;
	SET vexiste = (SELECT COUNT(nidvendedor) FROM sim_carteravendedor WHERE nidvendedor=vnidvendedor);
	
	IF (vaccion = 'ins_vendedorxempresa') THEN
		
	IF (vexiste=0) THEN
	
		INSERT INTO sim_carteravendedor (nidvendedor,nidempresas,nestado,ccarvenguardar,ccarvenactualizar)
		VALUES (vnidvendedor,vnidempresas,'1','0','0');
		SELECT '1' AS msg;
	ELSE
	
		SELECT '0' AS msg;
	END IF;
	
	END IF;
	
		
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_areas` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_areas` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_areas`(IN vaccion VARCHAR(30),IN vnidareas VARCHAR(50))
BEGIN
	IF (vaccion = 'qry_areas') THEN
	
	SELECT t1.nidareas,t1.careas AS careas,t1.calias, CASE t1.cvalor WHEN 0 THEN 'Sin Dependencia' ELSE t2.careas END AS dependencia,t1.cvalor,t1.nestado
	FROM sim_areas AS t1
	LEFT JOIN sim_areas AS t2 ON t2.nidareas = t1.cvalor
	WHERE t1.nestado = 1
	ORDER BY t1.nidareas ASC;
	
	END IF;
	
	IF (vaccion = 'qry_areasxid') THEN
	
	SELECT t1.nidareas,t1.careas AS careas,t1.calias, CASE t1.cvalor WHEN 0 THEN 'Sin Dependencia' ELSE t2.careas END AS dependencia,t1.cvalor,t1.nestado
	FROM sim_areas AS t1
	LEFT JOIN sim_areas AS t2 ON t2.nidareas = t1.cvalor
	WHERE t1.nestado = 1 AND t1.careas=vnidareas
	ORDER BY t1.nidareas ASC; 
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_cargaropciones` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_cargaropciones` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_cargaropciones`(IN vaccion VARCHAR(30),IN vnidusuario VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_opcpadre') THEN
	
	SELECT op.nidopcion,op.copcion,op.curl,op.cicono,op.nvalor AS nidhijo FROM sim_opcion op 
	INNER JOIN sim_opcionusuario ousu ON ousu.`nidopcion`=op.`nidopcion`
	WHERE nvalor=0
	AND ousu.`nidusuario`=vnidusuario;
	
	
	END IF;
	
	IF (vaccion = 'qry_opcp') THEN
	
	SELECT op.nidopcion,op.copcion,op.curl,op.cicono,op.nvalor AS nidhijo FROM sim_opcion op 
	WHERE nvalor=0;
	
	END IF;
	
	IF (vaccion = 'qry_opchijo') THEN
	
	SELECT op.nidopcion,op.copcion,op.curl,op.cicono,op.nvalor AS nidhijo FROM sim_opcion op 
	INNER JOIN sim_opcionusuario ousu ON ousu.`nidopcion`=op.`nidopcion`
	WHERE nvalor<>0
	AND ousu.`nidusuario`=vnidusuario;
	
	END IF;	
	
	IF (vaccion = 'qry_opch') THEN
	
	SELECT op.nidopcion,op.copcion,op.curl,op.cicono,op.nvalor AS nidhijo FROM sim_opcion op 
	where nvalor<>0;
	
	END IF;	
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_cargarroles` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_cargarroles` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_cargarroles`(IN vaccion VARCHAR(30),IN vnidpersona VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_roles') THEN
	
	SELECT nidmaestra AS nidroles, cmaestra AS croles FROM sim_maestra ma 
	INNER JOIN sim_personaroles pero ON ma.nidmaestra=pero.nidroles
	WHERE ma.nvalor='5' AND ma.nestado='1' AND pero.nestado='1' AND pero.nidpersona=vnidpersona
	ORDER BY ma.nvalor;
	
	END IF;
	
	IF (vaccion = 'qry_rolesall') THEN
	
	SELECT nidmaestra AS nidroles, cmaestra AS croles FROM sim_maestra 
	WHERE nvalor='5' AND nestado='1'
	ORDER BY nvalor;
	
	END IF;	
	
	IF (vaccion = 'qry_allroles') THEN
	
	SELECT nidmaestra AS nidroles, cmaestra AS croles FROM sim_maestra 
	WHERE nvalor='22' AND nestado='1'
	ORDER BY nvalor;
	
	END IF;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_cargos` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_cargos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_cargos`(IN vaccion VARCHAR(30),IN vnidcargos VARCHAR(50))
BEGIN
	IF (vaccion = 'qry_cargos') THEN
	
	SELECT nidcargos,ccargos,calias,nestado,ccarguardar,ccaractualizar
	FROM sim_cargos;
	
	END IF;
	
	IF (vaccion = 'qry_areasxid') THEN
	
	SELECT t1.nidareas,t1.careas AS careas,t1.calias, CASE t1.cvalor WHEN 0 THEN 'Sin Dependencia' ELSE t2.careas END AS dependencia,t1.cvalor,t1.nestado
	FROM sim_areas AS t1
	LEFT JOIN sim_areas AS t2 ON t2.nidareas = t1.cvalor
	WHERE t1.nestado = 1 AND t1.careas=vnidareas
	ORDER BY t1.nidareas ASC; 
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_clientesxempresa` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_clientesxempresa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_clientesxempresa`(IN vaccion VARCHAR(30),IN vnidproductos INT ,IN vcproductos VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_clientesxempresa') THEN
	
	SELECT carcli.nidcartclientes,carcli.nidclientes,carcli.nidempresas,perro.nidperroles,perro.nidroles,
	perro.nidpersona,perro.nestado,per.cnomcomercial as cliente
	from sim_carteraclientes carcli
	inner join sim_personaroles perro on perro.nidperroles=carcli.nidclientes
	inner join sim_persona per on per.nidpersona=perro.nidpersona
	WHERE perro.nestado = 1
	and perro.nidroles=7;
	
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_clientesxvendedor` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_clientesxvendedor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_clientesxvendedor`(IN vaccion VARCHAR(30),IN vnidproductos INT ,IN vcproductos VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_clientesxvendedor') THEN
	
	SELECT vencli.nidvenclientes,vencli.nidcarclientes,vencli.nidvendedor,perro.nidperroles,perro.nidroles,
	perro.nidpersona,perro.nestado,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`)) AS vendedor,vencli.nestado,
	CASE WHEN vencli.nestado='1' THEN '<span class="label label-success">Activo <i class="fa fa-angle-double-up" ></i></span>' 
	WHEN vencli.nestado='0' THEN '<span class="label label-danger">Inactivo <i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'  END cestado
	FROM sim_vendedorclientes vencli
	INNER JOIN sim_personaroles perro ON perro.nidperroles=vencli.nidvendedor
	INNER JOIN sim_persona per ON per.nidpersona=perro.nidpersona
	WHERE perro.nestado = 1
	AND perro.nidroles=8;
	
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_empresa` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_empresa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_empresa`(IN vaccion VARCHAR(30),IN vnidempresa INT ,IN vempresa VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_empresas') THEN
	
	SELECT per.nidpersona,per.cnomcomercial,per.cdniruc,per.nestado,perro.nidperroles
	FROM sim_persona per
	INNER JOIN sim_personaroles perro ON perro.nidpersona=per.nidpersona
	WHERE perro.nestado = 1
	AND perro.nidroles=6;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_encuesta` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_encuesta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_encuesta`(IN vaccion VARCHAR(30),IN vnidempresa INT ,IN vempresa VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_encuesta') THEN
	
	SELECT enc.nidencuesta,enc.cencuesta,enc.nestado,
	CASE WHEN enc.nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
	WHEN enc.nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger"><i class="fa fa-asterisk" ></i></span>'  END cestado ,perrol.nidperroles,per.capellidos,per.cnombres 
	FROM sim_persona per INNER JOIN sim_personaroles perrol ON per.nidpersona=perrol.nidpersona
	INNER JOIN sim_encuesta enc ON enc.nidperroles=perrol.nidperroles
	WHERE perrol.nidroles='23' AND per.nestado='1' AND perrol.nperoestado='1';
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_linea` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_linea` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_linea`(IN vaccion VARCHAR(30),IN vnidlinea INT ,IN vclinea VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_linea') THEN
	
	SELECT nidlinea,clinea,calias,nestado,clinguardar,clinactualizar
	FROM sim_linea
	WHERE nestado = 1;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_permisos` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_permisos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_permisos`(IN vaccion VARCHAR(30),IN vcriterio varchar(150))
BEGIN
	IF (vaccion = 'qry_opciones') THEN
	
	SELECT nidpersona,capellidos,cnombres,nestado,cdniruc
	FROM sim_persona
	WHERE CONCAT(capellidos,' ',cnombres) LIKE CONCAT ('%', vcriterio, '%')
	AND nestado = 1;
	
	END IF;
	
	IF (vaccion = 'qry_persona') THEN
	
	SELECT nidpersona,capellidos,cnombres,cnomcomercial,nestado,cdniruc
	FROM sim_persona
	WHERE CONCAT(capellidos,' ',cnombres,' ',cnomcomercial) LIKE CONCAT ('%', vcriterio, '%')
	AND nestado = 1;
	
	END IF;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_personas` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_personas` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_personas`(IN vaccion VARCHAR(30),IN vnidpersona INT ,IN vpersona VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_personaN') THEN
	
	SELECT nidpersona,capellidos,cnombres,nestado,cdniruc,
	CASE WHEN nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
	WHEN nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'  END cestado
	FROM sim_persona
	WHERE capellidos <> '';
	
	END IF;
	
	IF (vaccion = 'qry_personaJ') THEN
	
	SELECT nidpersona,cnomcomercial,nestado,cdniruc,
	CASE WHEN nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
	WHEN nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'  END cestado
	FROM sim_persona
	WHERE cnomcomercial <> '';
	
	END IF;
	
	IF (vaccion = 'qry_empresas') THEN
	
	SELECT per.nidpersona,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`)) AS cnomcomercial,per.cdniruc,per.nestado,perro.nidperroles,
	CASE WHEN perro.nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
	WHEN perro.nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'  END cestado
	FROM sim_persona per
	INNER JOIN sim_personaroles perro ON perro.nidpersona=per.nidpersona
	WHERE perro.nestado = 1
	AND perro.nidroles=6;
	
	END IF;
	
	IF (vaccion = 'qry_vendedor') THEN
	
	SELECT per.nidpersona,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`)) AS cnomcomercial,per.cdniruc,per.nestado,perro.nidperroles,
	CASE WHEN perro.nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
	WHEN perro.nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'  END cestado
	FROM sim_persona per
	INNER JOIN sim_personaroles perro ON perro.nidpersona=per.nidpersona
	WHERE perro.nestado = 1
	AND perro.nidroles=8;
	
	END IF;
	
	IF (vaccion = 'qry_clientes') THEN
	
	SELECT per.nidpersona,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`)) AS cnomcomercial,per.cdniruc,per.nestado,perro.nidperroles,
	CASE WHEN perro.nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
	WHEN perro.nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'  END cestado
	FROM sim_persona per
	INNER JOIN sim_personaroles perro ON perro.nidpersona=per.nidpersona
	WHERE perro.nestado = 1
	AND perro.nidroles=7;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_producto` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_producto` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_producto`(IN vaccion VARCHAR(30),IN vnidproductos INT ,IN vcproductos VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_producto') THEN
	
	SELECT nidproductos,cproductos,nestado,cproguardar,cproactualizar,nidlinea
	FROM sim_productos
	WHERE nestado = 1;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_productoxempresa` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_productoxempresa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_productoxempresa`(IN vaccion VARCHAR(50),IN vidempresa VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_productoxempresa') THEN
	
	SELECT pxe.nidproempresa,pxe.nidperroles,pxe.nidproductos,pxe.nestado,pxe.cproempguardar,pxe.cproempactualizar,pro.cproductos,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`))  as cnomcomercial
	FROM sim_productosempresa pxe
	inner join sim_productos pro on pro.nidproductos=pxe.nidproductos
	inner join sim_personaroles perro on perro.nidperroles = pxe.nidperroles
	inner join sim_persona per on per.nidpersona=perro.nidpersona
	WHERE pxe.nestado = 1;
	
	END IF;
	
	IF (vaccion = 'qry_productoxidempresa') THEN
	
	SELECT pxe.nidproempresa,pxe.nidperroles,pxe.nidproductos,pxe.nestado,pxe.cproempguardar,pxe.cproempactualizar,pro.cproductos,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`))  AS cnomcomercial
	FROM sim_productosempresa pxe
	INNER JOIN sim_productos pro ON pro.nidproductos=pxe.nidproductos
	INNER JOIN sim_personaroles perro ON perro.nidperroles = pxe.nidperroles
	INNER JOIN sim_persona per ON per.nidpersona=perro.nidpersona
	WHERE pxe.nestado = 1
	AND perro.nidperroles = vidempresa;
	
	END IF;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_ubigeo` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_ubigeo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_ubigeo`(IN vaccion VARCHAR(30),IN vnidubigeo INT)
BEGIN
	IF (vaccion = 'qry_departamento') THEN
	
	SELECT idDepa,departamento
	FROM sim_ubdepartamento;
	END IF;
	
	IF (vaccion = 'qry_provincia') THEN
	
	SELECT idProv,provincia,idDepa
	FROM sim_ubprovincia
	WHERE idDepa=vnidubigeo;
	END IF;
	
	IF (vaccion = 'qry_distrito') THEN
	
	SELECT idDist,distrito,idProv
	FROM sim_ubdistrito
	WHERE idProv=vnidubigeo;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_usuarios` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_usuarios` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_usuarios`(IN vaccion VARCHAR(30),IN vnidusuarios VARCHAR(50))
BEGIN
	declare vexiste int;
	IF (vaccion = 'qry_usuarios') THEN
	
	SELECT usu.nidusuario,usu.cusuario,usu.ccontrasena,usu.nestado,usu.nidpersona,usu.ntipousuario,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`)) AS cnombre,per.cdniruc,
	CASE WHEN usu.nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
	WHEN usu.nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'  END cestado
	FROM sim_usuario usu
	inner join sim_persona per ON per.nidpersona=usu.nidpersona
	where per.nestado = 1;
	
	END IF;
	
	IF (vaccion = 'qry_usuariosxid') THEN
	
	SELECT usu.nidusuario,usu.cusuario,usu.ccontrasena,usu.nestado,usu.nidpersona,usu.ntipousuario,mae.cmaestra,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`)) AS cnombre,per.cdniruc
	FROM sim_usuario usu
	INNER JOIN sim_maestra mae ON mae.nidmaestra=usu.ntipousuario
	INNER JOIN sim_persona per ON per.nidpersona=usu.nidpersona
	where usu.nidusuario=vnidusuarios;
	
	END IF;
	
	IF (vaccion = 'qry_persona') THEN
	
	SELECT nidpersona,capellidos,cnombres,cnomcomercial,nestado,cdniruc
	FROM sim_persona
	WHERE CONCAT(capellidos,' ',cnombres,' ',cnomcomercial) LIKE CONCAT ('%', vnidusuarios, '%')
	AND nestado = 1;
	
	END IF;
	
	IF (vaccion = 'qry_usuarioxper') THEN
	
	set vexiste = (SELECT count(usu.nidusuario)
	FROM sim_usuario usu
	WHERE usu.nidpersona=vnidusuarios
	and usu.nestado=1);
	
	if (vexiste>0) then
		select 2 AS msg;
	else
		SELECT 3 AS msg;
	end if;
		
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_vendedorxempresa` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_vendedorxempresa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_vendedorxempresa`(IN vaccion VARCHAR(30),IN vnidpersona VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_vendedorxempresa') THEN
	
	SELECT carven.nidvenempresa,carven.nidvendedor,carven.nidempresas,perro.nidperroles,perro.nidroles,
	perro.nidpersona,perro.nestado,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`))  as vendedor,
	CASE WHEN carven.nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
	WHEN carven.nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'  END cestado
	from sim_carteravendedor carven
	inner join sim_personaroles perro on perro.nidperroles=carven.nidvendedor
	inner join sim_persona per on per.nidpersona=perro.nidpersona
	WHERE perro.nestado = 1
	and perro.nidroles=8;
	
	
	END IF;
	
	IF (vaccion = 'qry_empresaxvendedor') THEN
		
	SELECT carven.nidvenempresa,carven.nidvendedor,carven.nidempresas,perro.nidperroles,perro.nidroles,
	perro.nidpersona,perro.nestado,LTRIM(CONCAT(per.`capellidos`,' ',per.`cnombres`,per.`cnomcomercial`))  AS vendedor
	FROM sim_carteravendedor carven
	INNER JOIN sim_personaroles perro ON perro.nidperroles=carven.nidvendedor
	INNER JOIN sim_persona per ON per.nidpersona=perro.nidpersona
	WHERE perro.nestado = 1
	AND perro.nidroles=8
	AND per.nidpersona=vnidpersona;
	
	END IF;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qyr_validarsesion` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qyr_validarsesion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qyr_validarsesion`(IN vaccion VARCHAR(30),IN vusuario VARCHAR(20),IN vcontrasena VARCHAR(50))
BEGIN
	IF (vaccion = 'qry_sesion') THEN
	
	SELECT u.nidusuario,u.cusuario,p.nidpersona,p.capellidos,p.cnombres
	FROM sim_usuario u INNER JOIN sim_persona p ON u.nidpersona=p.nidpersona
	WHERE u.cusuario=vusuario AND u.ccontrasena=MD5(vcontrasena) AND u.nestado='1' AND p.nestado='1';
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_upd_areas` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_upd_areas` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_upd_areas`(IN vaccion VARCHAR(30),IN vnidarea INT,IN varea VARCHAR(100),IN valias VARCHAR(10),IN vdependencia INT)
BEGIN
	IF (vaccion = 'upd_estadoArea') THEN	
		UPDATE 	sim_areas SET nestado=0 WHERE nidareas =vnidarea;
		SELECT '1' AS msg;
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_upd_encuesta` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_upd_encuesta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_upd_encuesta`(IN vaccion VARCHAR(30),IN vnidencuesta INT,IN vencuesta VARCHAR(100),IN vidperroles INT,IN vnidusuario INT)
BEGIN
	
	DECLARE vestado INT;
	SET vestado = (SELECT nestado FROM sim_encuesta WHERE nidencuesta=vnidencuesta);
	
	
	IF (vaccion = 'upd_estadoEnc') THEN	
		
	IF (vestado=1) THEN
	
		UPDATE 	sim_encuesta SET nestado=0 WHERE nidencuesta=vnidencuesta;
		SELECT '1' AS msg;
	ELSE
	
		UPDATE 	sim_encuesta SET nestado=1 WHERE nidencuesta=vnidencuesta;
		SELECT '1' AS msg;
	END IF;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_upd_persona` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_upd_persona` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_upd_persona`(IN vaccion VARCHAR(30),IN vnidpersona INT,IN vencuesta VARCHAR(100),IN vidperroles INT,IN vnidusuario INT)
BEGIN
	DECLARE vestado INT;
	DECLARE vdni varchar(11);
	declare vexiste int;
	SET vestado = (SELECT nestado FROM sim_persona WHERE nidpersona=vnidpersona);
	
	IF (vaccion = 'upd_estadoPer') THEN	
		
		IF (vestado=1) THEN
	
			UPDATE 	sim_persona SET nestado=0 WHERE nidpersona =vnidpersona;
			SELECT '1' AS msg;
	
		ELSE
			SET vdni = (SELECT cdniruc FROM sim_persona WHERE nidpersona=vnidpersona);
			SET vexiste = (SELECT COUNT(cdniruc) FROM sim_persona WHERE cdniruc=vdni AND nestado=1);
			if (vexiste = 0) then
		
			UPDATE 	sim_persona SET nestado=1 WHERE nidpersona =vnidpersona;
			SELECT '1' AS msg;
		
			else
		
			SELECT '0' AS msg;
			end if;
		
		END IF;
	END IF;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_upd_ultimasesion` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_upd_ultimasesion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_upd_ultimasesion`(IN vaccion VARCHAR(30),IN vnidusuario VARCHAR(20),IN vnidultsesion INT)
BEGIN
	IF (vaccion = 'upd_cerrarsesion') THEN
	
	UPDATE sim_ultimasesion SET dfin=NOW(),nestado='2' WHERE vnidusuario=vnidusuario AND nidultsesion=vnidultsesion;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_upd_usuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_upd_usuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_upd_usuario`(IN vaccion VARCHAR(30),IN vnidusuario INT,IN vusuario VARCHAR(100),IN vpassword INT,IN vnidpersona INT)
BEGIN
	DECLARE vestado INT;
	DECLARE vusu VARCHAR(50);
	DECLARE vidper INT;
	DECLARE vexisteusu INT;
	declare vexistenidpersona int;
	SET vestado = (SELECT nestado FROM sim_usuario WHERE nidusuario=vnidusuario);
	
	IF (vaccion = 'upd_estadoUsu') THEN	
		
		IF (vestado=1) THEN
	
			UPDATE 	sim_usuario SET nestado=0 WHERE nidusuario=vnidusuario;
			SELECT '1' AS msg;
	
		ELSE
			SET vusu = (SELECT cusuario FROM sim_usuario WHERE nidusuario=vnidusuario);
			SET vidper = (SELECT nidpersona FROM sim_usuario WHERE nidusuario=vnidusuario);
			SET vexisteusu = (SELECT COUNT(cusuario) FROM sim_usuario WHERE cusuario=vusu AND nestado=1);
			IF (vexisteusu = 0) THEN
				SET vexistenidpersona = (SELECT COUNT(nidpersona) FROM sim_usuario WHERE nidpersona=vidper AND nestado=1);
				IF (vexistenidpersona = 0) THEN
				UPDATE 	sim_usuario SET nestado=1 WHERE nidusuario=vnidusuario;
				SELECT '1' AS msg;
		
				ELSE
		
				SELECT '0' AS msg;
				END IF;
			else
			SELECT '2' AS msg;
			END IF;
		
		END IF;
	END IF;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `test` */

/*!50003 DROP PROCEDURE IF EXISTS  `test` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `test`()
BEGIN
  DECLARE myvar DOUBLE;
  SELECT per.nidpersona INTO myvar FROM sim_persona per WHERE CONCAT(per.capellidos,' ',per.cnombres,' ',per.cnomcomercial) LIKE CONCAT ('%', 'cas', '%')	AND per.nestado = 1;
  SELECT myvar;
  END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

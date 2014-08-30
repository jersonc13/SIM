/*
SQLyog Ultimate v9.33 GA
MySQL - 5.5.25a : Database - db_sim_prod
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sim_prod` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_sim_prod`;

/*Table structure for table `sim_areas` */

DROP TABLE IF EXISTS `sim_areas`;

CREATE TABLE `sim_areas` (
  `nidareas` int(11) NOT NULL AUTO_INCREMENT,
  `careas` varchar(40) DEFAULT NULL,
  `calias` varchar(5) DEFAULT NULL,
  `cvalor` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `careguardar` varchar(30) DEFAULT NULL,
  `careactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidareas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_areas` */

/*Table structure for table `sim_cargos` */

DROP TABLE IF EXISTS `sim_cargos`;

CREATE TABLE `sim_cargos` (
  `nidcargos` int(11) NOT NULL AUTO_INCREMENT,
  `ccargos` varchar(40) DEFAULT NULL,
  `calias` varchar(10) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `ccarguardar` varchar(30) DEFAULT NULL,
  `ccaractualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidcargos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_cargos` */

/*Table structure for table `sim_encuesta` */

DROP TABLE IF EXISTS `sim_encuesta`;

CREATE TABLE `sim_encuesta` (
  `nidencuesta` int(11) NOT NULL AUTO_INCREMENT,
  `cencuesta` varchar(100) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cencguardar` varchar(30) DEFAULT NULL,
  `cencactualizar` varchar(30) DEFAULT NULL,
  `nidperroles` int(11) DEFAULT NULL,
  PRIMARY KEY (`nidencuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `sim_encuesta` */

insert  into `sim_encuesta`(`nidencuesta`,`cencuesta`,`nestado`,`cencguardar`,`cencactualizar`,`nidperroles`) values (13,'Encuesta 1',1,'030520141','',3),(14,'Encuesta 1',1,'080520141','',3),(15,'Encuesta 2',1,'130520141','',3),(16,'gggg',1,'170520141227571','',3);

/*Table structure for table `sim_galeriavisita` */

DROP TABLE IF EXISTS `sim_galeriavisita`;

CREATE TABLE `sim_galeriavisita` (
  `nidgalvisita` int(11) NOT NULL AUTO_INCREMENT,
  `cruta` varchar(80) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `nidvisdetalle` int(11) DEFAULT NULL,
  PRIMARY KEY (`nidgalvisita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_galeriavisita` */

/*Table structure for table `sim_maestra` */

DROP TABLE IF EXISTS `sim_maestra`;

CREATE TABLE `sim_maestra` (
  `nidmaestra` int(11) NOT NULL AUTO_INCREMENT,
  `cmaestra` varchar(30) DEFAULT NULL,
  `nvalor` int(11) DEFAULT NULL,
  `nestado` int(1) DEFAULT NULL,
  `cmaesguardar` varchar(30) DEFAULT NULL,
  `cmaeactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidmaestra`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `sim_maestra` */

insert  into `sim_maestra`(`nidmaestra`,`cmaestra`,`nvalor`,`nestado`,`cmaesguardar`,`cmaeactualizar`) values (1,'Sexo',0,1,'0','0'),(2,'Masculino',1,1,'0','0'),(3,'Femenino',1,1,'0','0'),(4,'Teléfono',0,1,'0','0'),(5,'Claro',4,1,'0','0'),(6,'Movistar',4,1,'0','0'),(7,'Nextel',4,1,'0','0'),(8,'Tipo Documento',0,1,'0','0'),(9,'DNI',8,1,'0','0'),(10,'RUC',8,1,'0','0'),(11,'Estados',0,1,'0','0'),(12,'Soltero(a)',11,1,'0','0'),(13,'Casado(a)',11,1,'0','0'),(14,'Conviviente',11,1,'0','0'),(15,'Viudo(a)',11,1,'0','0'),(16,'Canales',0,1,'0','0'),(17,'Minorista',16,1,'0','0'),(18,'Mayorista',16,1,'0','0'),(19,'Autosericios',16,1,'0','0'),(20,'Subdistribuidores',16,1,'0','0'),(21,'Horeca',16,1,'0','0'),(22,'Roles',0,1,'0','0'),(23,'Clientes',22,1,'0','0'),(24,'Proveedores',22,1,'0','0'),(25,'Colaborador',22,1,'0','0'),(26,'Grupos',0,1,'0','0'),(27,'Operador',26,1,'0','0'),(28,'Adminsitrador',26,1,'0','0');

/*Table structure for table `sim_opcion` */

DROP TABLE IF EXISTS `sim_opcion`;

CREATE TABLE `sim_opcion` (
  `nidopcion` int(11) NOT NULL AUTO_INCREMENT,
  `copcion` varchar(30) DEFAULT NULL,
  `nvalor` int(11) DEFAULT NULL,
  `curl` varchar(120) DEFAULT NULL,
  `cicono` varchar(30) DEFAULT NULL,
  `nestado` int(1) DEFAULT NULL,
  `copcguardar` varchar(30) DEFAULT NULL,
  `copcactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidopcion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `sim_opcion` */

insert  into `sim_opcion`(`nidopcion`,`copcion`,`nvalor`,`curl`,`cicono`,`nestado`,`copcguardar`,`copcactualizar`) values (1,'Mantenedores',0,'#','fa-tasks',1,'0','0'),(2,'Encuesta',1,'mantenedor/encuesta','',1,'0','0'),(3,'Preguntas',1,'mantenedor/preguntas','',1,'0','0'),(4,NULL,NULL,NULL,'',NULL,NULL,NULL);

/*Table structure for table `sim_opcionusuario` */

DROP TABLE IF EXISTS `sim_opcionusuario`;

CREATE TABLE `sim_opcionusuario` (
  `nidusuario` int(11) DEFAULT NULL,
  `nidopcion` int(11) DEFAULT NULL,
  `nopusestado` int(1) DEFAULT NULL,
  `copusguardar` varchar(30) DEFAULT NULL,
  `copusactualizar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_opcionusuario` */

insert  into `sim_opcionusuario`(`nidusuario`,`nidopcion`,`nopusestado`,`copusguardar`,`copusactualizar`) values (25,1,1,'0','0'),(25,2,1,'0','0'),(25,3,1,'0','0');

/*Table structure for table `sim_persona` */

DROP TABLE IF EXISTS `sim_persona`;

CREATE TABLE `sim_persona` (
  `nidpersona` int(11) NOT NULL AUTO_INCREMENT,
  `capellidos` varchar(80) DEFAULT NULL,
  `cnombres` varchar(80) DEFAULT NULL,
  `crandom` varchar(10) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cperguardar` varchar(30) DEFAULT NULL,
  `cperactualizar` varchar(30) DEFAULT NULL,
  `cnombrecomercial` varchar(100) DEFAULT NULL,
  `cdni` varchar(8) DEFAULT NULL,
  `cruc` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`nidpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `sim_persona` */

insert  into `sim_persona`(`nidpersona`,`capellidos`,`cnombres`,`crandom`,`nestado`,`cperguardar`,`cperactualizar`,`cnombrecomercial`,`cdni`,`cruc`) values (1,'Usuario','Demo','344456',1,'0','0',NULL,NULL,NULL),(2,'','Carbón & Miel','234567',1,'0','0',NULL,NULL,NULL);

/*Table structure for table `sim_personacorreo` */

DROP TABLE IF EXISTS `sim_personacorreo`;

CREATE TABLE `sim_personacorreo` (
  `nidpercorreo` int(11) NOT NULL AUTO_INCREMENT,
  `ccorreo` varchar(80) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `ccorguardar` varchar(30) DEFAULT NULL,
  `ccoractualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidpercorreo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_personacorreo` */

/*Table structure for table `sim_personadetalle` */

DROP TABLE IF EXISTS `sim_personadetalle`;

CREATE TABLE `sim_personadetalle` (
  `nidperdetalle` int(11) NOT NULL AUTO_INCREMENT,
  `nidpersona` int(11) DEFAULT NULL,
  `cvalor` varchar(50) DEFAULT NULL,
  `nidcategoria` int(11) DEFAULT NULL,
  `nestado` int(1) DEFAULT NULL,
  `cpedeguardar` varchar(30) DEFAULT NULL,
  `cpedeactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidperdetalle`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `sim_personadetalle` */

insert  into `sim_personadetalle`(`nidperdetalle`,`nidpersona`,`cvalor`,`nidcategoria`,`nestado`,`cpedeguardar`,`cpedeactualizar`) values (1,1,'Masculino',2,1,'0','0'),(2,1,'987654678',6,1,'0','0'),(3,1,'43501923',9,1,'0','0'),(4,2,'Masculino',2,1,'0','0'),(5,2,'986546789',6,1,'0','0'),(6,2,'10267654341',10,1,'0','0');

/*Table structure for table `sim_personadireccion` */

DROP TABLE IF EXISTS `sim_personadireccion`;

CREATE TABLE `sim_personadireccion` (
  `nidperdireccion` int(11) NOT NULL AUTO_INCREMENT,
  `nidpersona` int(11) DEFAULT NULL,
  `cdireccion` varchar(80) DEFAULT NULL,
  `niddepartamento` int(11) DEFAULT NULL,
  `nidprovincia` int(11) DEFAULT NULL,
  `niddistrito` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  PRIMARY KEY (`nidperdireccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_personadireccion` */

/*Table structure for table `sim_personaroles` */

DROP TABLE IF EXISTS `sim_personaroles`;

CREATE TABLE `sim_personaroles` (
  `nidperroles` int(11) NOT NULL AUTO_INCREMENT,
  `nidpersona` int(11) DEFAULT NULL,
  `nidroles` int(11) DEFAULT NULL,
  `nperoestado` int(1) DEFAULT NULL,
  `cperoguardar` varchar(30) DEFAULT NULL,
  `cperoactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidperroles`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `sim_personaroles` */

insert  into `sim_personaroles`(`nidperroles`,`nidpersona`,`nidroles`,`nperoestado`,`cperoguardar`,`cperoactualizar`) values (1,1,25,1,'0','0'),(2,1,23,1,'0','0'),(3,2,23,1,'0','0');

/*Table structure for table `sim_personarolescargo` */

DROP TABLE IF EXISTS `sim_personarolescargo`;

CREATE TABLE `sim_personarolescargo` (
  `nidperrolcargo` int(11) NOT NULL AUTO_INCREMENT,
  `nidcargo` int(11) DEFAULT NULL,
  `nidperroles` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cperrolcarguardar` varchar(30) DEFAULT NULL,
  `cperrolcaractualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidperrolcargo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_personarolescargo` */

/*Table structure for table `sim_personarolescargocartera` */

DROP TABLE IF EXISTS `sim_personarolescargocartera`;

CREATE TABLE `sim_personarolescargocartera` (
  `nidperrolcarcartera` int(11) NOT NULL AUTO_INCREMENT,
  `nidprovisita` int(11) DEFAULT NULL,
  `nidperrolcartera` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cperrolcarguardar` varchar(30) DEFAULT NULL,
  `cperrolcaractualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidperrolcarcartera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_personarolescargocartera` */

/*Table structure for table `sim_personarolescartera` */

DROP TABLE IF EXISTS `sim_personarolescartera`;

CREATE TABLE `sim_personarolescartera` (
  `nidperrolcartera` int(11) NOT NULL AUTO_INCREMENT,
  `nidempresa` int(11) DEFAULT NULL,
  `nidclientes` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cperrolcartguardar` varchar(30) DEFAULT NULL,
  `cperrolcartactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidperrolcartera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_personarolescartera` */

/*Table structure for table `sim_personatelefono` */

DROP TABLE IF EXISTS `sim_personatelefono`;

CREATE TABLE `sim_personatelefono` (
  `nidpertelefono` int(11) NOT NULL AUTO_INCREMENT,
  `ctelefono` varchar(30) DEFAULT NULL,
  `nidoperador` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `ctelguardar` varchar(30) DEFAULT NULL,
  `ctelactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidpertelefono`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_personatelefono` */

/*Table structure for table `sim_preguntas` */

DROP TABLE IF EXISTS `sim_preguntas`;

CREATE TABLE `sim_preguntas` (
  `nidpreguntas` int(11) NOT NULL AUTO_INCREMENT,
  `cpreguntas` varchar(150) DEFAULT NULL,
  `nidencuesta` int(11) DEFAULT NULL,
  `nestado` int(1) DEFAULT NULL,
  `cpreguardar` varchar(30) DEFAULT NULL,
  `cpreactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidpreguntas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_preguntas` */

/*Table structure for table `sim_programarvisita` */

DROP TABLE IF EXISTS `sim_programarvisita`;

CREATE TABLE `sim_programarvisita` (
  `nidprovisita` int(11) NOT NULL,
  `cprovisita` varchar(100) DEFAULT NULL,
  `nidproveedor` int(11) DEFAULT NULL,
  `nidproducto` int(11) DEFAULT NULL,
  `dfechainicio` date DEFAULT NULL,
  `dfechafin` date DEFAULT NULL,
  `nidresponsable` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `ncantidadfotos` int(11) DEFAULT NULL,
  PRIMARY KEY (`nidprovisita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_programarvisita` */

/*Table structure for table `sim_respuestas` */

DROP TABLE IF EXISTS `sim_respuestas`;

CREATE TABLE `sim_respuestas` (
  `nidrespuestas` int(11) NOT NULL AUTO_INCREMENT,
  `crespuestas` varchar(150) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  `cresguardar` varchar(30) DEFAULT NULL,
  `cresactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidrespuestas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_respuestas` */

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `sim_ultimasesion` */

insert  into `sim_ultimasesion`(`nidultsesion`,`nidusuario`,`dinicio`,`dfin`,`nestado`,`random`) values (1,1,'2014-05-02 21:37:47','0000-00-00 00:00:00',1,8),(2,1,'2014-05-02 22:51:21','0000-00-00 00:00:00',1,13),(3,1,'2014-05-02 22:59:15','0000-00-00 00:00:00',1,12),(4,1,'2014-05-02 23:03:59','0000-00-00 00:00:00',1,11),(5,1,'2014-05-02 23:08:00','0000-00-00 00:00:00',1,5),(6,1,'2014-05-03 12:07:18','0000-00-00 00:00:00',1,14),(7,1,'2014-05-03 15:02:11','0000-00-00 00:00:00',1,10),(8,1,'2014-05-06 21:35:47','0000-00-00 00:00:00',1,10),(9,1,'2014-05-06 21:55:02','0000-00-00 00:00:00',1,8),(10,1,'2014-05-07 21:23:23','0000-00-00 00:00:00',1,12),(11,1,'2014-05-08 21:53:27','0000-00-00 00:00:00',1,15),(12,1,'2014-05-13 21:37:07','0000-00-00 00:00:00',1,6),(13,1,'2014-05-13 21:37:09','0000-00-00 00:00:00',1,8),(14,1,'2014-05-14 20:48:49','0000-00-00 00:00:00',1,8),(15,1,'2014-05-14 20:48:51','0000-00-00 00:00:00',1,12),(16,1,'2014-05-17 11:19:31','0000-00-00 00:00:00',1,5),(17,1,'2014-05-17 12:19:37','0000-00-00 00:00:00',1,10),(18,1,'2014-05-17 12:19:39','0000-00-00 00:00:00',1,15),(19,1,'2014-05-26 21:06:23','0000-00-00 00:00:00',1,5);

/*Table structure for table `sim_usuario` */

DROP TABLE IF EXISTS `sim_usuario`;

CREATE TABLE `sim_usuario` (
  `nidusuario` int(11) NOT NULL AUTO_INCREMENT,
  `cusuario` varchar(20) DEFAULT NULL,
  `ccontrasena` varchar(50) DEFAULT NULL,
  `nidpersona` int(11) DEFAULT NULL,
  `nestado` int(1) DEFAULT NULL,
  `dusuguadar` varchar(30) DEFAULT NULL,
  `dusuactualizar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nidusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `sim_usuario` */

insert  into `sim_usuario`(`nidusuario`,`cusuario`,`ccontrasena`,`nidpersona`,`nestado`,`dusuguadar`,`dusuactualizar`) values (1,'udemo','e10adc3949ba59abbe56e057f20f883e',1,1,'0','0'),(2,'carmiel','e10adc3949ba59abbe56e057f20f883e',2,1,'0','0');

/*Table structure for table `sim_visitadetalle` */

DROP TABLE IF EXISTS `sim_visitadetalle`;

CREATE TABLE `sim_visitadetalle` (
  `nidvisdetalle` int(11) NOT NULL AUTO_INCREMENT,
  `nidcliente` int(11) DEFAULT NULL,
  `nidvendedor` int(11) DEFAULT NULL,
  `nestado` int(11) DEFAULT NULL,
  PRIMARY KEY (`nidvisdetalle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sim_visitadetalle` */

/* Procedure structure for procedure `sim_sp_ins_encuesta` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_encuesta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_encuesta`(in vaccion varchar(30),in vencuesta varchar(100),in vidperroles int,in vnidusuario int)
BEGIN
	IF (vaccion = 'ins_encuesta') THEN
	
	INSERT INTO sim_encuesta (cencuesta,nestado,cencguardar,cencactualizar,nidperroles)
	VALUES (vencuesta,1,concat(DATE_FORMAT(NOW(),'%d%m%Y%H%i%s'),vnidusuario),'',vidperroles);
	
	select '1' as msg;	
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_ins_ultimasesion` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_ins_ultimasesion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_ins_ultimasesion`(in vaccion varchar(30),IN vnidusuario VARCHAR(20),vrandom int)
BEGIN
	if (vaccion = 'ins_ultsesion') then
	
	INSERT INTO sim_ultimasesion (nidusuario,dinicio,dfin,nestado,random)
	VALUES (vnidusuario,NOW(),'',1,vrandom);
	
	SELECT 	MAX(nidultsesion) AS idaudit FROM sim_ultimasesion WHERE random=vrandom AND nidusuario=vnidusuario;
	
	end if;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_cargaropciones` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_cargaropciones` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_cargaropciones`(in vaccion varchar(30),IN vnidpersona VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_opcpadre') THEN
	
	SELECT op.nidopcion,op.copcion,op.curl,op.cicono,ro.nidmaestra AS nidroles FROM sim_opcion op 
INNER JOIN sim_opcionusuario opus ON op.nidopcion=opus.nidopcion
	INNER JOIN sim_maestra ro ON ro.nidmaestra=opus.nidusuario 
	INNER JOIN sim_personaroles pero ON pero.nidroles=ro.nidmaestra
	WHERE op.nvalor='0' AND opus.nopusestado='1' AND op.nestado='1' and pero.nidpersona=vnidpersona;
	
	END IF;
	
	IF (vaccion = 'qry_opchijo') THEN
	
	SELECT op.copcion,op.curl,op.cicono,ro.nidmaestra AS nidroles,op.nvalor AS nidhijo FROM sim_opcion op 
INNER JOIN sim_opcionusuario opro ON op.nidopcion=opro.nidopcion
	INNER JOIN sim_maestra ro ON ro.nidmaestra=opro.nidusuario 
	INNER JOIN sim_personaroles pero ON pero.nidroles=ro.nidmaestra
	WHERE op.nvalor<>'0' AND opro.nopusestado='1' AND op.nestado='1' AND pero.nidpersona=vnidpersona;
	
	END IF;	
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_cargarroles` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_cargarroles` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_cargarroles`(in vaccion varchar(30),IN vnidpersona VARCHAR(20))
BEGIN
	IF (vaccion = 'qry_roles') THEN
	
	SELECT nidmaestra AS nidroles, cmaestra AS croles FROM sim_maestra ma 
	INNER JOIN sim_personaroles pero ON ma.nidmaestra=pero.nidroles
	WHERE ma.nvalor='22' AND ma.nestado='1' AND pero.nperoestado='1' AND pero.nidpersona=vnidpersona
	ORDER BY ma.nvalor;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_empresa` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_empresa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_empresa`(in vaccion varchar(30),in vnidempresa int ,IN vempresa varchar(20))
BEGIN
	IF (vaccion = 'qry_empresas') THEN
	
	SELECT perrol.nidperroles,per.capellidos,per.cnombres FROM sim_persona per INNER JOIN sim_personaroles perrol ON per.nidpersona=perrol.nidpersona
WHERE perrol.nidroles='23' AND per.nestado='1' AND perrol.nperoestado='1';
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qry_encuesta` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qry_encuesta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_encuesta`(in vaccion varchar(30),in vnidempresa int ,IN vempresa varchar(20))
BEGIN
	IF (vaccion = 'qry_encuesta') THEN
	
	SELECT enc.nidencuesta,enc.cencuesta,enc.nestado,
	CASE WHEN enc.nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
	when enc.nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'	
	ELSE '<span class="label label-danger"><i class="fa fa-asterisk" ></i></span>'  END cestado ,perrol.nidperroles,per.capellidos,per.cnombres 
	FROM sim_persona per INNER JOIN sim_personaroles perrol ON per.nidpersona=perrol.nidpersona
	INNER JOIN sim_encuesta enc ON enc.nidperroles=perrol.nidperroles
	WHERE perrol.nidroles='23' AND per.nestado='1' AND perrol.nperoestado='1';
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_qyr_validarsesion` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_qyr_validarsesion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qyr_validarsesion`(in vaccion varchar(30),IN vusuario VARCHAR(20),IN vcontrasena VARCHAR(50))
BEGIN
	if (vaccion = 'qry_sesion') then
	
	SELECT u.nidusuario,u.cusuario,p.nidpersona,p.capellidos,p.cnombres
	FROM sim_usuario u INNER JOIN sim_persona p ON u.nidpersona=p.nidpersona
	WHERE u.cusuario=vusuario AND u.ccontrasena=md5(vcontrasena) AND u.nestado='1' AND p.nestado='1';
	
	end if;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_upd_encuesta` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_upd_encuesta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_upd_encuesta`(in vaccion varchar(30),in vnidencuesta int,in vencuesta varchar(100),in vidperroles int,in vnidusuario int)
BEGIN
	
	DECLARE vestado INT;
	SET vestado = (SELECT nestado FROM sim_encuesta WHERE nidencuesta=vnidencuesta);
	
	
	IF (vaccion = 'upd_estadoEnc') THEN	
		
	if (vestado=1) then
	
		UPDATE 	sim_encuesta SET nestado=0 WHERE nidencuesta=vnidencuesta;
		SELECT '1' AS msg;
	else
	
		UPDATE 	sim_encuesta SET nestado=1 WHERE nidencuesta=vnidencuesta;
		SELECT '1' AS msg;
	end if;
	
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sim_sp_upd_ultimasesion` */

/*!50003 DROP PROCEDURE IF EXISTS  `sim_sp_upd_ultimasesion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_upd_ultimasesion`(in vaccion varchar(30),IN vnidusuario VARCHAR(20),in vnidultsesion int)
BEGIN
	IF (vaccion = 'upd_cerrarsesion') THEN
	
	update sim_ultimasesion set dfin=now(),nestado='2' where vnidusuario=vnidusuario and nidultsesion=vnidultsesion;
	
	END IF;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

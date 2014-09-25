CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_linea`(IN `vaccion` VARCHAR(30), IN `vnidlinea` INT , IN `vclinea` VARCHAR(20))
	LANGUAGE SQL
	NOT DETERMINISTIC
	CONTAINS SQL
	SQL SECURITY DEFINER
	COMMENT ''
 BEGIN
  IF ( vaccion = 'qry_linea' ) THEN
    SELECT nidlinea,
           clinea,
           calias,
           nestado,
           clinguardar,
           clinactualizar,
           CASE
             WHEN nestado = '1' THEN
              '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>'
             WHEN nestado = '0' THEN
              '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'
             ELSE
              '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'
           END cestado
    FROM   sim_linea;
  END IF;

  IF ( vaccion = 'qry_linea_estado' ) THEN
    SELECT nidlinea,
           clinea
    FROM   sim_linea WHERE nestado = vnidlinea;
  END IF;
END  

-- -------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_producto`(IN `vaccion` VARCHAR(30), IN `vnidproductos` INT , IN `vcproductos` VARCHAR(20))
  LANGUAGE SQL
  NOT DETERMINISTIC
  CONTAINS SQL
  SQL SECURITY DEFINER
  COMMENT ''
BEGIN
  IF (vaccion = 'qry_producto') THEN
  
  SELECT pro.nidproductos,pro.cproductos,pro.nestado,pro.cproguardar,pro.cproactualizar,pro.nidlinea,lin.clinea,
  CASE WHEN pro.nestado='1' THEN '<span class="label label-success"><i class="fa fa-angle-double-up" ></i></span>' 
  WHEN pro.nestado='0' THEN '<span class="label label-danger"><i class="fa fa-angle-double-down" ></i></span>'  
  ELSE '<span class="label label-danger">Inactivo<i class="fa fa-asterisk" ></i></span>'  END cestado
  FROM sim_productos pro
  inner join sim_linea lin on lin.nidlinea=pro.nidlinea
  WHERE lin.nestado = 1;
  
  END IF;
  IF (vaccion = 'qry_producto_get') THEN
    SELECT 
      pro.nidproductos
      ,pro.cproductos
      ,pro.nestado
      ,pro.nidlinea
    FROM sim_productos pro
    WHERE pro.nidproductos = vnidproductos;
  
  END IF; 
    END
---------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `sim_sp_qry_usuarios`(IN `vaccion` VARCHAR(30), IN `vnidusuarios` VARCHAR(50))
  LANGUAGE SQL
  NOT DETERMINISTIC
  CONTAINS SQL
  SQL SECURITY DEFINER
  COMMENT ''
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
  IF (vaccion = 'qry_idUserByCodPerson') THEN
    SELECT usu.nidusuario
    FROM sim_usuario usu
    WHERE usu.nidpersona = vnidusuarios AND usu.nestado = 1;
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
  IF (vaccion = 'qry_usuarioGet') THEN
    SELECT usu.nidusuario
      ,usu.cusuario
      ,usu.ccontrasena
      ,usu.nestado
    FROM sim_usuario usu
    WHERE usu.nidusuario = vnidusuarios;
  END IF; 
    END
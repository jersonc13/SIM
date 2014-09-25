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

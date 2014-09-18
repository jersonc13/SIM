-- select * from sim_persona p inner join sim_usuario u where u.nidpersona = p.nidpersona
-- select ou.*,o.copcion from sim_opcionusuario ou  inner join sim_opcion o on o.nidopcion = ou.nidopcion  where ou.nidusuario = 18
 select * from sim_opcionusuario where nidusuario  = 18  -- and nestado = 1

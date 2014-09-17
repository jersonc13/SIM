-- select * from sim_persona p inner join sim_usuario u where u.nidpersona = p.nidpersona
-- select * from sim_opcionusuario ou  inner join sim_opcion o on o.nidopcion = ou.nidopcion  where ou.nidusuario = 2
select * from sim_opcionusuario where nidusuario  = 2  and nestado = 1
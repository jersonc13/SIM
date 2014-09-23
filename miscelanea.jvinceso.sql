-- select * from sim_usuario
-- sim_sp_qry_usuarios
-- SELECT usu.nidpersona FROM sim_usuario usu WHERE usu.nidpersona = 2 and usu.nestado = 1
-- SELECT * FROM sim_usuario as u INNER JOIN sim_persona as p ON u.nidpersona = p.nidpersona;
-- CALL sim_sp_qry_usuarios('qry_usuarioxper','2');
-- CALL sim_sp_qry_usuarios ('qry_idUserByCodPerson','2')
select uo.nidopcion,o.copcion,o.curl from sim_opcionusuario as uo
	inner join sim_opcion as o on o.nidopcion = uo.nidopcion
	inner join sim_usuario as  u on u.nidusuario = uo.nidusuario
where u.nidpersona = 11 and u.nestado = 1;
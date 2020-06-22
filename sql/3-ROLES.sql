--/////////////////////////////////////////////////////////////////////

------- CREACION ROL ADMIN
CREATE ROLE rol_administrador;
------- AGREGAR PRIVILEGIOS AL ROL
GRANT ALL ON final.persona TO rol_administrador;
GRANT ALL ON final.garante TO rol_administrador;
GRANT ALL ON final.garantextitular TO rol_administrador;
GRANT ALL ON final.prestamo TO rol_administrador;
GRANT ALL ON final.prestamoanulado TO rol_administrador;
GRANT ALL ON final.prestamoconcepto TO rol_administrador;
GRANT ALL ON final.prestamocuota TO rol_administrador;
GRANT ALL ON final.prestamocuotadet TO rol_administrador;
GRANT ALL ON final.telefono TO rol_administrador;
GRANT ALL ON final.tipopago TO rol_administrador;
GRANT ALL ON final.tipotelefono TO rol_administrador;
GRANT ALL ON final.titular TO rol_administrador;
------- AGREGAR PRIVILEGIOS FUNCIONES
--GRANT execute ON Find_Value TO rol_administrador;
--REVOKE execute ON Find_Value FROM rol_administrador;
------- CREACION USUARIO
CREATE USER userAdmin IDENTIFIED BY userAdmin
    DEFAULT TABLESPACE tbs_per_final 
    TEMPORARY TABLESPACE tbs_temp_final;
GRANT create session TO userAdmin;
------- AGREGAR EL USUARIO AL ROL
GRANT rol_administrador TO useradmin;
--/////////////////////////////////////////////////////////////////////

------- CREACION ROL INSCRIPCION
CREATE ROLE rol_inscripcion;
------- AGREGAR PRIVILEGIOS AL ROL
GRANT SELECT, INSERT, UPDATE, DELETE ON final.persona TO rol_inscripcion;
GRANT SELECT, INSERT, UPDATE, DELETE ON final.garante TO rol_inscripcion;
GRANT SELECT, INSERT, UPDATE, DELETE ON final.telefono TO rol_inscripcion;
GRANT SELECT, INSERT, UPDATE, DELETE ON final.titular TO rol_inscripcion;
GRANT SELECT ON final.tipotelefono TO rol_inscripcion;
--REVOKE DELETE ON final.persona FROM rol_inscripcion;
------- AGREGAR PRIVILEGIOS FUNCIONES
--GRANT execute ON Find_Value TO rol_inscripcion;
--REVOKE execute ON Find_Value FROM rol_inscripcion;
------- CREACION USUARIO
CREATE USER userInscripcion IDENTIFIED BY userInscripcion
    DEFAULT TABLESPACE tbs_per_final 
    TEMPORARY TABLESPACE tbs_temp_final;
GRANT create session TO userInscripcion;
------- AGREGAR EL USUARIO AL ROL
GRANT rol_inscripcion TO userInscripcion;
--/////////////////////////////////////////////////////////////////////

------- CREACION ROL GESTION PRESTAMO
CREATE ROLE rol_gestionprestamo;
------- AGREGAR PRIVILEGIOS AL ROL
--GRANT ALL ON final.prestamo TO rol_gestionprestamo;
--GRANT SELECT, INSERT, UPDATE, DELETE ON final.prestamo TO rol_gestionprestamo;
--GRANT SELECT ON final.tprestamo TO rol_gestionprestamo;
--REVOKE DELETE ON final.prestamo FROM rol_gestionprestamo;
------- AGREGAR PRIVILEGIOS FUNCIONES
--GRANT execute ON Find_Value TO rol_gestionprestamo;
--REVOKE execute ON Find_Value FROM rol_gestionprestamo;
------- CREACION USUARIO
CREATE USER userGestionPrestamo IDENTIFIED BY userGestionPrestamo
    DEFAULT TABLESPACE tbs_per_final 
    TEMPORARY TABLESPACE tbs_temp_finalGRANT rol_gestionprestamo TO userGestionPrestamo;;
GRANT create session TO userGestionPrestamo;
------- AGREGAR EL USUARIO AL ROL

--/////////////////////////////////////////////////////////////////////

------- CREACION ROL LISTADO
CREATE ROLE rol_listado;
------- AGREGAR PRIVILEGIOS AL ROL
--GRANT ALL ON final.titular TO rol_listado;
--GRANT SELECT, INSERT, UPDATE, DELETE ON final.titular TO rol_listado;
--GRANT SELECT ON final.tipotelefono TO rol_listado;
------- AGREGAR PRIVILEGIOS FUNCIONES
--GRANT execute ON Find_Value TO rol_listado;
--REVOKE execute ON Find_Value FROM rol_listado;
------- CREACION USUARIO
CREATE USER userListado IDENTIFIED BY userListado
    DEFAULT TABLESPACE tbs_per_final 
    TEMPORARY TABLESPACE tbs_temp_final;
GRANT create session TO userListado;
------- AGREGAR EL USUARIO AL ROL
GRANT rol_listado TO userListado;
--/////////////////////////////////////////////////////////////////////



--/////////////////////////////////////////////////////////////////////
                            --TRIGGERS--
--/////////////////////////////////////////////////////////////////////

    -- TRIGGERS LOGS ACTUALIZACIONES DE LAS TABLAS

    -- LOG DE ACTUALIZACION SOBRE LA TABLA TIPO TELEFONO
        CREATE TABLE log_tipotelefono_update ( 
            IdTipoTelefono numeric(1), 
            OldDenTipoTelefono varchar2(30), 
            NewDenTipoTelefono varchar2(30),
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_TIPOTELEFONO_B_UPDATE
        BEFORE UPDATE ON TIPOTELEFONO FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO Log_tipotelefono_update(idTipoTelefono, OldDenTipoTelefono, NewDenTipoTelefono, fechaActualizacion)         
            VALUES( :OLD.IdTipoTelefono, :OLD.dentipotelefono, :NEW.dentipotelefono, vfechaactualizacion);
        END TRI_TIPOTELEFONO_B_UPDATE;

    -- LOG DE ACTUALIZACION SOBRE LA TABLA PERSONA
        CREATE TABLE log_persona_update ( 
            OldNroDocumentoP numeric(10), 
            NewNroDocumentoP numeric(10), 
            OldApellido varchar2(50), 
            NewApellido varchar2(50), 
            OldNombre varchar2(50), 
            NewNombre varchar2(50), 
            OldFNacimiento date, 
            NewFNacimiento date, 
            OldDireccion varchar2(100), 
            NewDireccion varchar2(100), 
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_PERSONA_B_UPDATE 
        BEFORE UPDATE ON PERSONA FOR EACH ROW 
        DECLARE 
        vfechaActualizacion timestamp(5); 
        BEGIN 
        SELECT current_timestamp INTO vfechaActualizacion FROM dual; 
        INSERT INTO Log_persona_update(OldNroDocumentoP, NewNroDocumentoP, OldApellido, NewApellido, 
                                    OldNombre, NewNombre, OldFNacimiento, NewFNacimiento, 
                                    OldDireccion,NewDireccion,fechaActualizacion)          
            VALUES(:OLD.nrodocumentop, :NEW.nrodocumentop, :OLD.apellido, :NEW.apellido,  
                    :OLD.nombre, :NEW.nombre, :OLD.fnacimiento, :NEW.fnacimiento, 
                    :OLD.direccion, :NEW.direccion, vfechaactualizacion); 
        END TRI_PERSONA_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA TELEFONO
        CREATE TABLE log_telefono_update (
            OldNroDocumentoP numeric(10),
            NewNroDocumentoP numeric(10),
            OldIdTipoTelefono numeric(1), 
            NewIdTipoTelefono numeric(1),
            OldNroTelefono varchar2(12), 
            NewNroTelefono varchar2(12),
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_TELEFONO_B_UPDATE
        BEFORE UPDATE ON TELEFONO FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO Log_telefono_update(OldNroDocumentoP, NewNroDocumentoP, OldIdTipoTelefono, NewIdTipoTelefono, OldNroTelefono, NewNroTelefono, fechaActualizacion)         
            VALUES( :OLD.nrodocumentop, :NEW.nrodocumentop, :OLD.idTipoTelefono, :NEW.idTipoTelefono, :OLD.NroTelefono, :NEW.NroTelefono,vfechaactualizacion);
        END TRI_TELEFONO_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA TITULAR
        -- Si se crea una persona con un dni mal escrito y se lo agrega a titular o garante
        -- se deberia poder cambiar el dni de persona, titular o garante
        CREATE TABLE log_titular_update (
            OldNroDocumentoT numeric(10), 
            NewNroDocumentoT numeric(10),
            OldIngresosTotales numeric(10,2),
            NewIngresosTotales numeric(10,2),
            OldCantFamiliares numeric(2), 
            NewCantFamiliares numeric(2),
            OldIngresosRetenidos numeric(10,2), 
            NewIngresosRetenidos numeric(10,2),
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_TITULAR_B_UPDATE
        BEFORE UPDATE ON TITULAR FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO Log_titular_update(OldNroDocumentoT, NewNroDocumentoT, OldIngresosTotales, NewIngresosTotales, OldCantFamiliares, NewCantFamiliares, OldIngresosRetenidos, NewIngresosRetenidos, fechaActualizacion)         
            VALUES(:OLd.NroDocumentoT, :NEW.NroDocumentoT, :OLD.IngresosTotales, :NEW.IngresosTotales, :OLD.CantFamiliares, :NEW.CantFamiliares, :OLD.IngresosRetenidos, :NEW.IngresosRetenidos,vfechaactualizacion);
        END TRI_TITULAR_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA GARANTE
        -- Se se crea una persona con un dni mal escrito y se lo agrega a titular o garante
        -- se deberia poder cambiar el dni de persona, titular o garante
        CREATE TABLE log_garante_update (
            OldNroDocumentoG numeric(10),
            NewNroDocumentoG numeric(10),
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_GARANTE_B_UPDATE 
        BEFORE UPDATE ON GARANTE FOR EACH ROW 
        DECLARE 
        vfechaActualizacion timestamp(5); 
        BEGIN 
        SELECT current_timestamp INTO vfechaActualizacion FROM dual; 
        INSERT INTO Log_garante_update(OldNroDocumentoG, NewNroDocumentoG,fechaActualizacion)          
            VALUES(:OLD.nrodocumentog, :NEW.nrodocumentog, vfechaactualizacion); 
        END TRI_GARANTE_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA PRESTAMO
        -- se podria crear mal el prestamo para una persona, un dni incorrecto
        CREATE TABLE log_prestamo_update (  
        NroPrestamo numeric(7),  
        OldNroDocumentoT numeric(10),  
        NewNroDocumentoT numeric(10),  
        OldCapital numeric(12,2),  
        NewCapital numeric(12,2),  
        OldCantCuotas numeric(3),  
        NewCantCuotas numeric(3),  
        OldIntAnual numeric(5,2),  
        NewIntAnual numeric(5,2),  
        OldVtoMensual numeric(4),  
        NewVtoMensual numeric(4),  
        OldEstado varchar2(30),  
        NewEstado varchar2(30),  
        fechaActualizacion timestamp(5)  
        );

        CREATE OR REPLACE TRIGGER TRI_PRESTAMO_B_UPDATE
        BEFORE UPDATE ON PRESTAMO FOR EACH ROW
        DECLARE
        vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO Log_prestamo_update(nroprestamo, OldNroDocumentoT, NewNroDocumentoT,
                                    OldCapital, NewCapital, OldCantCuotas,
                                    NewCantCuotas,OldIntAnual, NewIntAnual,
                                    OldVtoMensual, NewVtoMensual, OldEstado,
                                    NewEstado, fechaActualizacion)         
            VALUES(:OLD.nroprestamo, :OLD.nrodocumentot, :NEW.nrodocumentot, 
                    :OLD.capital, :NEW.capital, :OLD.cantcuotas, :NEW.cantcuotas,
                    :OLD.intanual, :NEW.intanual, :OLD.vtomensual, :NEW.vtomensual,
                    :OLD.estado,:NEW.estado, vfechaactualizacion);
        END TRI_PRESTAMO_B_UPDATE;

        
        -- LOG DE ACTUALIZACION SOBRE LA TABLA GARANTEXTITULAR
        -- se podria crear mal el prestamo, un dni incorrecto para titular o garante
        CREATE TABLE log_garantextitular_update (
            OldNroDocumentoT numeric(10),
            NewNroDocumentoT numeric(10),
            OldNroDocumentoG numeric(10),
            NewNroDocumentoG numeric(10),
            NroPrestamo numeric(7),
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_GARANTEXTITULAR_B_UPDATE 
        BEFORE UPDATE ON GARANTEXTITULAR FOR EACH ROW 
        DECLARE 
        vfechaActualizacion timestamp(5); 
        BEGIN 
        SELECT current_timestamp INTO vfechaActualizacion FROM dual; 
        INSERT INTO Log_garantextitular_update(OldNroDocumentoT, NewNroDocumentoT, OldNroDocumentoG, NewNroDocumentoG, nroprestamo, fechaActualizacion)          
            VALUES(:OLD.nrodocumentot, :NEW.nrodocumentot, :OLD.nrodocumentog, :NEW.nrodocumentog, :OLD.nroprestamo, vfechaactualizacion); 
        END TRI_GARANTEXTITULAR_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA TIPOPAGO
        CREATE TABLE log_tipopago_update ( 
            CodPago numeric(1), 
            OldDenTipoPago varchar2(50),
            NewDenTipoPago varchar2(50),
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_TIPOPAGO_B_UPDATE
        BEFORE UPDATE ON TIPOPAGO FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO Log_tipopago_update(CodPago, OldDenTipoPago, NewDenTipoPago, fechaActualizacion)         
            VALUES( :OLD.CodPago, :OLD.dentipopago, :NEW.dentipopago, vfechaactualizacion);
        END TRI_TIPOPAGO_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA PRESTAMOCUOTA
        -- si se modifica la cantidad de cuotas del prestamo deberiamos modificar el nrocuota (?)
        -- si el cliente por alguna razon quiere cambiar la fecha de vencimiento de las cuotas (?)
        -- se deberia poder modificar la forma de pago'codpago' (?)
        CREATE TABLE log_prestamocuota_update ( 
            NroPrestamo numeric(7),
            OldNroCuota numeric(3),
            NewNroCuota numeric(3),
            OldVencimiento date,
            NewVencimiento date,
            OldCodPago numeric(2),
            NewCodPago numeric(2),
            OldFechaPago date,
            NewFechaPago date,
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_PRESTAMOCUOTA_B_UPDATE
        BEFORE UPDATE ON PRESTAMOCUOTA FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO log_prestamocuota_update(NroPrestamo, OldNroCuota, NewNroCuota, OldVencimiento,
                                            NewVencimiento, OldCodPago, NewCodPago, OldFechaPago,
                                            NewFechaPago, fechaActualizacion)         
            VALUES( :OLD.nroprestamo, :OLD.nrocuota, :NEW.nrocuota, :OLD.vencimiento, :NEW.vencimiento,
                    :OLD.codpago, :NEW.codpago, :OLD.fechapago, :NEW.fechapago, vfechaactualizacion);
        END TRI_PRESTAMOCUOTA_B_UPDATE;


        -- LOG DE ACTUALIZACION SOBRE LA TABLA PRESTAMOCONCEPTO
        CREATE TABLE log_PrestamoConcepto_update ( 
            IdConcepto numeric(3), 
            OldDenConcepto varchar2(50),
            NewDenConcepto varchar2(50),
            OldSumaOResta numeric(1),
            NewSumaOResta numeric(1),
            OldFila numeric(2),
            NewFila numeric(2),
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_PRESTAMOCONCEPTO_B_UPDATE
        BEFORE UPDATE ON PRESTAMOCONCEPTO FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO log_prestamoconcepto_update(IdConcepto, OldDenConcepto, NewDenConcepto,
                                                OldSumaOResta, NewSumaOResta, OldFila, 
                                                NewFila, fechaActualizacion)         
            VALUES( :OLD.IdConcepto, :OLD.denconcepto, :NEW.denconcepto, :OLD.sumaoresta, 
                    :NEW.sumaoresta, :OLD.fila, :NEW.fila, vfechaactualizacion);
        END TRI_PRESTAMOCONCEPTO_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA PRESTAMOCUOTADET
        CREATE TABLE log_prestamocuotadet_update ( 
            NroPrestamo numeric(7),
            OldNroCuota numeric(3),
            NewNroCuota numeric(3),
            OldIdConcepto numeric(3),
            NewIdConcepto numeric(3),
            OldMonto numeric(10,2),
            NewMonto numeric(10,2),
            fechaActualizacion timestamp(5) 
        );
        
        CREATE OR REPLACE TRIGGER TRI_PRESTAMOCUOTADET_B_UPDATE
        BEFORE UPDATE ON PRESTAMOCUOTADET FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO log_prestamocuotadet_update(NroPrestamo, OldNroCuota, NewNroCuota, 
                                            OldIdConcepto, NewIdConcepto, OldMonto,
                                            NewMonto, fechaActualizacion)         
            VALUES( :OLD.nroprestamo, :OLD.nrocuota, :NEW.nrocuota, 
                    :OLD.idconcepto, :NEW.idconcepto, :OLD.monto, 
                    :NEW.monto, vfechaactualizacion);
        END TRI_PRESTAMOCUOTADET_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA PORCENTAJE
        CREATE TABLE log_porcentaje_update ( 
            IdConcepto numeric(3),
            OldvalorPorcentaje numeric(3),
            NewvalorPorcentaje numeric(3),
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_PORCENTAJE_B_UPDATE
        BEFORE UPDATE ON PORCENTAJE FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO Log_tipopago_update(CodPago, OldDenTipoPago, NewDenTipoPago, fechaActualizacion)         
            VALUES( :OLD.CodPago, :OLD.dentipopago, :NEW.dentipopago, vfechaactualizacion);
        END TRI_TIPOPAGO_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA CONVENIO
         CREATE TABLE log_convenio_update ( 
            NroConvenio numeric(3),
            NroPrestamo numeric(7),
            OldFecha date,
            NewFecha date,
            fechaActualizacion timestamp(5) 
        );

        CREATE OR REPLACE TRIGGER TRI_CONVENIO_B_UPDATE
        BEFORE UPDATE ON CONVENIO FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO log_convenio_update(NroConvenio, NroPrestamo, OldFecha, NewFecha, fechaActualizacion)         
                VALUES( :OLD.NroConvenio, :OLD.NroPrestamo, :OLD.fecha , :NEW.fecha, vfechaactualizacion);
        END TRI_CONVENIO_B_UPDATE;

        -- LOG DE ACTUALIZACION SOBRE LA TABLA CONVENIO
         CREATE TABLE log_conveniodet_update ( 
            NroConvenio numeric(3),
            NroPrestamo numeric(7),
            NroCuota numeric(7),
            OldInteres numeric(3),
            NewInteres numeric(3),
            fechaActualizacion timestamp(5) 
        );
        
        CREATE OR REPLACE TRIGGER TRI_CONVENIODET_B_UPDATE
        BEFORE UPDATE ON DETALLECONVENIO FOR EACH ROW
        DECLARE
            vfechaActualizacion timestamp(5);
        BEGIN
        SELECT current_timestamp INTO vfechaActualizacion FROM dual;
        INSERT INTO log_conveniodet_update(NroConvenio, NroPrestamo, NroCuota, OldInteres, NewInteres, fechaActualizacion)         
                VALUES( :OLD.NroConvenio, :OLD.NroPrestamo, :OLD.NroCuota , :OLD.interes , :NEW.interes, vfechaactualizacion);
        END TRI_CONVENIODET_B_UPDATE;     


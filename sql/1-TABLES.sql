CREATE TABLE TipoTelefono (
    IdTipoTelefono numeric(1) PRIMARY KEY,
    DenTipoTelefono varchar2(30)
);

CREATE TABLE Persona (
  NroDocumentoP numeric(10) PRIMARY KEY,
  Apellido varchar2(50),
  Nombre varchar2(50),
  FNacimiento date,
  Direccion varchar2(100)
);

CREATE TABLE Telefono (
  NroDocumentoP numeric(10),
  IdTipoTelefono numeric(1),
  NroTelefono varchar2(12), -- poner numerico para que complicarla
  CONSTRAINT Telefono_pk PRIMARY KEY (NroDocumentoP, NroTelefono),
  CONSTRAINT fk_telefono_r_persona FOREIGN KEY (NroDocumentoP) REFERENCES Persona (NroDocumentoP),
  CONSTRAINT fk_telefono_r_tipotele FOREIGN KEY (IdTipoTelefono) REFERENCES TipoTelefono (IdTipoTelefono)
);

CREATE TABLE Titular (
  NroDocumentoT numeric(10) PRIMARY KEY,
  IngresosTotales numeric(10,2),
  CantFamiliares numeric(2),
  IngresosRetenidos numeric(10,2),
  CONSTRAINT fk_titular_r_persona FOREIGN KEY (NroDocumentoT) REFERENCES Persona (NroDocumentoP)
);

CREATE TABLE Garante (
  NroDocumentoG numeric(10) PRIMARY KEY,
  CONSTRAINT fk_garante_r_persona FOREIGN KEY (NroDocumentoG) REFERENCES Persona (NroDocumentoP)
);

CREATE TABLE Prestamo (
  NroPrestamo numeric(7) PRIMARY KEY,
  NroDocumentoT numeric(10),
  Capital numeric(12,2), 
  CantCuotas numeric(3),
  IntAnual numeric(5,2),
  VtoMensual numeric(4), --podria ser dos nomas, hace referencia al dia de vencimiento de las cuotas
  Estado varchar2(30) DEFAULT 0, -- 0 activo -1 inactivo/anulado 	
  CONSTRAINT fk_prestamo_r_titular FOREIGN KEY (NroDocumentoT) REFERENCES Titular (NroDocumentoT)
);


CREATE TABLE GaranteXTitular (
  NroDocumentoT numeric(10),
  NroDocumentoG numeric(10),
  NroPrestamo numeric(7),
  CONSTRAINT garante_x_titular_pk PRIMARY KEY (NroDocumentoT, NroDocumentoG, NroPrestamo),
  CONSTRAINT fk_garantex_r_garante FOREIGN KEY (NroDocumentoG) REFERENCES Garante (NroDocumentoG),
  CONSTRAINT fk_garantex_r_titular FOREIGN KEY (NroDocumentoT) REFERENCES Titular (NroDocumentoT),
  CONSTRAINT fk_garantex_r_prestamo FOREIGN KEY (NroPrestamo) REFERENCES Prestamo (NroPrestamo)
);

CREATE TABLE TipoPago (
  CodPago numeric(2) PRIMARY KEY,
  DenTipoPago varchar2(50)
);

CREATE TABLE PrestamoCuota (
  NroPrestamo numeric(7),
  NroCuota numeric(3),
  Vencimiento date,
  CodPago numeric(2) DEFAULT 0, -- 0 sin pagar 1 pagado -- FK tipo pago (ventanilla, t. debito, t. credito)
  FechaPago date,
  CONSTRAINT prestamo_cuota_pk PRIMARY KEY (NroPrestamo, NroCuota),
  CONSTRAINT fk_prestamocuota_r_prestamo FOREIGN KEY (NroPrestamo) REFERENCES Prestamo (NroPrestamo),
  CONSTRAINT fk_prestamocuota_r_tipopago FOREIGN KEY (CodPago) REFERENCES TipoPago (CodPago)
);

CREATE TABLE PrestamoConcepto (
  IdConcepto numeric(3) PRIMARY KEY,
  DenConcepto varchar2(50),
  SumaOResta numeric(1),
  Fila numeric(2)
);
/*
SumaOResta referencia a si el concepto suma o resta (suma = 1, resta -1) que concepto sumaria y que oncepto restaria (?)
atributo fila hace referencia a la fila del detalle en el que debe ir (?)
*/

CREATE TABLE PrestamoCuotaDet (
  NroPrestamo numeric(7),
  NroCuota numeric(3),
  IdConcepto numeric(3),
  Monto numeric(10,2),
  CONSTRAINT prestamo_cuota_det_pk PRIMARY KEY (NroPrestamo, NroCuota, IdConcepto),
  CONSTRAINT fk_prestamocuotadet_r_prestamocuota FOREIGN KEY (NroPrestamo, NroCuota) REFERENCES PrestamoCuota (NroPrestamo, NroCuota),
  CONSTRAINT fk_prestamocuotadet_r_prestamoconcepto FOREIGN KEY (IdConcepto) REFERENCES PrestamoConcepto (IdConcepto)
);


CREATE TABLE Porcentaje (
  IdConcepto numeric(3) PRIMARY KEY,
  valorPorcentaje numeric(3),
  CONSTRAINT fk_porcentaje_r_prestamoconcepto FOREIGN KEY (IdConcepto) REFERENCES PrestamoConcepto (IdConcepto)
);

CREATE TABLE Convenio (
  NroConvenio numeric(3) PRIMARY KEY,
  NroPrestamo numeric(7),
  Fecha date,
  CONSTRAINT fk_convenio_r_prestamo FOREIGN KEY (NroPrestamo) REFERENCES Prestamo (NroPrestamo)
);

CREATE TABLE DetalleConvenio (
  NroConvenio numeric(3),
  NroPrestamo numeric(7),
  NroCuota numeric(7),
  Interes numeric(3),
  CONSTRAINT detalle_convenio_pk PRIMARY KEY (NroConvenio, NroPrestamo, NroCuota),
  CONSTRAINT fk_detalleconvenio_r_convenio FOREIGN KEY (NroConvenio) REFERENCES Convenio (NroConvenio),
  CONSTRAINT fk_detalleconvenio_r_prestamocuota FOREIGN KEY (NroPrestamo, NroCuota) REFERENCES PrestamoCuota (NroPrestamo, NroCuota)
);




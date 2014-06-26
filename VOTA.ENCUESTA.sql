CREATE TABLE Formacion (
  Id INTEGER(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  NombreFormacion VARCHAR(30) NULL,
  PRIMARY KEY(Id)
);

CREATE TABLE Ocupacion (
  Id INTEGER(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  NombreOcupacion VARCHAR(30) NULL,
  PRIMARY KEY(Id)
);

CREATE TABLE Sexo (
  Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescripcionSexo VARCHAR(6) NULL,
  PRIMARY KEY(Id)
);

CREATE TABLE Candidato (
  Id INTEGER(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  Sigla VARCHAR(20) NULL,
  NombreCandidato VARCHAR(50) NULL,
  Foto VARCHAR(30) NULL,
  LogoPartido VARCHAR(30) NULL,
  SloganPartido VARCHAR(30) NULL,
  PRIMARY KEY(Id)
);

CREATE TABLE Departamento (
  Id INTEGER(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  NombreDepartamento VARCHAR(30) NULL,
  PRIMARY KEY(Id)
);

CREATE TABLE Edad (
  Id INTEGER(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  RangoEdad VARCHAR(20) NULL,
  PRIMARY KEY(Id)
);

CREATE TABLE Provincia (
  Id INTEGER(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  NombreProvincia VARCHAR(30) NULL,
  IdDepartamento INTEGER(2) UNSIGNED NOT NULL,
  PRIMARY KEY(Id),
  INDEX Provincia_FKIndex1(IdDepartamento),
  FOREIGN KEY(IdDepartamento)
    REFERENCES Departamento(Id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Voto (
  Id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  Fecha DATETIME NULL,
  Ip CHAR(12) NULL,
  Navegador VARCHAR(20) NULL,
  IdEdad INTEGER(2) UNSIGNED NOT NULL,
  IdProvincia INTEGER(5) UNSIGNED NOT NULL,
  IdFormacion INTEGER(2) UNSIGNED NOT NULL,
  IdSexo INTEGER UNSIGNED NOT NULL,
  IdOcupacion INTEGER(2) UNSIGNED NOT NULL,
  IdCandidato INTEGER(2) UNSIGNED NOT NULL,
  PRIMARY KEY(Id),
  INDEX Voto_FKIndex1(IdCandidato),
  INDEX Voto_FKIndex2(IdOcupacion),
  INDEX Voto_FKIndex3(IdSexo),
  INDEX Voto_FKIndex4(IdEdad),
  INDEX Voto_FKIndex5(IdFormacion),
  INDEX Voto_FKIndex6(IdProvincia),
  FOREIGN KEY(IdCandidato)
    REFERENCES Candidato(Id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(IdOcupacion)
    REFERENCES Ocupacion(Id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(IdSexo)
    REFERENCES Sexo(Id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(IdEdad)
    REFERENCES Edad(Id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(IdFormacion)
    REFERENCES Formacion(Id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(IdProvincia)
    REFERENCES Provincia(Id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


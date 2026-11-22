CREATE TABLE tblempleados (
    emp_id int AUTO_INCREMENT PRIMARY KEY,
    emp_cedula VARCHAR(10) ,
    emp_nombre VARCHAR(20),
    emp_apellido VARCHAR(20),
    emp_sueldo double (10,2),
    emp_estado CHAR (1)
);
CREATE TABLE tblclientes (
    cli_id int AUTO_INCREMENT PRIMARY KEY,
    cli_identificacion VARCHAR(13) ,
    cli_nombre VARCHAR(30),
    cli_apellido VARCHAR(30),
    cli_telefono VARCHAR(10),
    cli_direccion VARCHAR (100),
    cli_estado CHAR(1)
    
);
CREATE TABLE tblproductos (
    pro_id int AUTO_INCREMENT PRIMARY KEY,
    pro_codigo VARCHAR(15) ,
    pro_nombre VARCHAR(40),
    pro_precio double (10,2),
     pro_stock int,
    pro_estado CHAR (1)
);
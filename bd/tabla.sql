Create table cientes (

    cliente_id serial primary key not null,
    cliente_nombre varchar (60) not null,
    cliente_nit varchar (10) not null,
    cliente_situacion char (1) not null
);
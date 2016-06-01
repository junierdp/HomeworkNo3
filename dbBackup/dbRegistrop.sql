create database registrop;
use registrop;

create table pokemon(
	Id int not null auto_increment,
    Nombre varchar (50) not null,
    Tipo varchar (50) not null,
    Peso int not null,
    Experiencia int not null,
    Color varchar (50) not null,
    BatallasGanadas int not null,
    BatallasPerdidas int not null,
    
    constraint pk_id_pokemon primary key (Id)
);

select * from pokemon
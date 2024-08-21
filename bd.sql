use Marcos12;
create database Marcos12;

create table cargo(
 id int auto_increment primary key,
 nomeCargo varchar(100),
 salarioCargo float
 );

create table funcionario(
 id int auto_increment primary key,
 rg varchar(10),
 cpf varchar(11),
 email varchar (120),
 senha varchar (32),
 nome varchar(100),
 idCargo int,
 foreign key (idCargo) references cargo (id)
 );


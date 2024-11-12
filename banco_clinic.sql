drop database clinica_saude;
create database clinica_saude;
use clinica_saude;
 
create table pacientes (
    id int auto_increment primary key,
    nome varchar(50)unique,
    data_nascimento date,
    email varchar(50)unique,
    telefone varchar(50),
    endereco varchar(50),
    sexo enum('Masculino', 'Feminino','Outro')
);

 create table agendamentos (
    id_paciente int auto_increment primary key,
    nome_paciente varchar(50),
    data_consulta date,
    hora_consulta time,
    foreign key  (nome_paciente) references pacientes (nome)
);
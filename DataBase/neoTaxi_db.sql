create database neo_taxi;
use neo_taxi;

create table clientes(
	id int not null primary key auto_increment,
	nome varchar(60) not null,
	sexo enum('Feminino', 'Masculino'),
	nascimento date not null,
	cpf varchar(11) not null,
	email varchar(60) not null,
	senha varchar(60) not null
	
);

create table motoristas(
	id int not null primary key auto_increment,
	nome varchar(60) not null,
	sexo enum('Feminino', 'Masculino'),
	nascimento date not null,
	cpf varchar(11) not null,
	carro varchar(60) not null,
	placa varchar(60) not null,
	inicio datetime not null
	
);

create table corridas(
	id int not null primary key auto_increment,
	id_cliente int not null,
	id_motorista int not null,
	endereco_origem varchar(200) not null,
	complemento_origem varchar(20) not null,
	endereco_destino varchar(200) not null,
	complemento_destino varchar(20) not null,
	FOREIGN KEY (id_cliente) REFERENCES clientes(id),
	FOREIGN KEY (id_motorista) REFERENCES motoristas(id)
);


INSERT INTO motoristas (nome, sexo, nascimento, cpf, carro, placa, inicio) VALUES 
('Alberto Diniz de Lima', 'Masculino', '1989-12-01', '46279802302', 'Palio preto 2008', 'NAO6086', NOW() ),
('Maria Bragança da Costa', 'Masculino', '1989-12-01', '13127121121', 'Palio preto 2008', 'JUL4304', NOW() ),
('Laura Ribeiro Ferreira', 'Masculino', '1989-12-01', '17099153315', 'Palio preto 2008', 'NEI0563', NOW() ),
('Julian Gomes Carvalho', 'Masculino', '1981-08-16', '94335607288', 'Palio preto 2008', 'HYU8919', NOW() ),
('Arthur Costa Ribeiro', 'Masculino', '1981-01-13', '77241411773', 'Palio preto 2008', 'IOF8886', NOW() ),
('Felipe Azevedo Costa', 'Masculino', '1969-06-22', '41364860228', 'Palio preto 2008', 'MRC2357', NOW() ),
('Sophia Sousa Santos', 'Masculino', '1991-03-14', '82846509913', 'Palio preto 2008', 'MRP2511', NOW() ),
('Mariana Dias Melo', 'Masculino', '1977-09-25', '23135902919', 'Palio preto 2008', 'HVA7257', NOW() );



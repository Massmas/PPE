drop database if exists association ;
create database association;

use association ;

create table membre 
	(
		idmembre int(3) not null auto_increment,
		nom varchar(40),
		prenom varchar(40),
		adresse varchar(100),
		telephone varchar(20),
		email varchar(50),
		mdp varchar(20),
		age int(3),
		photo varchar(100),
		dateadhesion date,
		cotisation float(5.2),
		reglement boolean,
		qualite enum ("actif", "ordinaire", "sympathisant"),
		compteactif boolean,
		primary key (idmembre)
	);

insert into membre values
	(null, "hossana", "abdou", "rue de paris", "0101010101", "hossana@gmail.com", "123", 21, "hosana.png", "2017-10_10", 20, true, "ordinaire", true),
	(null, "pierre", "hugues", "rue de ma bite", "0678543234", "pierrealex@mail.com", "543", 18, "hugues.png", "2016-11-11", 20, true, "ordinaire", true),
	(null,"Massil","Kabili","rue de marmoud","01010101","m.K@gmail.com","1234",21,"couscous.png","2017-10-10",20,true,"actif",true),
	(null,"mouyou","med","rue de la tyrannie","0101010102","mm@gmail.com","485",28,"mouyou.png","2017-05-09",60,true,"ordinaire",true),
	(null,"ouandzizi","massil","rue du couscous","0111000","om@gmail.com","789",18,"massil.png","2017-03-01",22,true,"sympathisant",true);
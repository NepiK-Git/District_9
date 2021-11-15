Drop database if exists BDD_D9;
Create database BDD_D9;
Use BDD_D9;

Drop table if exists client ;
Create table if not exists client (
    idclient int(11)not null auto_increment,
    nomC varchar(50),
    prénomC varchar(50),
    emailC varchar(70),
    telephoneC int(10),
    primary key(idclient)
) ENGINE=InnoDB;


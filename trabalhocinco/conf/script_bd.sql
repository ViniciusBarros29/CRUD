create schema automovel;
CREATE TABLE carro(
  id int(11) NOT NULL AUTO_INCREMENT,
  nome  varchar(45),
  valor double,
  km double,
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `automovel`.`carro` (`nome`, `valor`, `km`) VALUES ('Carro 1', '120000', '0');
INSERT INTO `automovel`.`carro` (`nome`, `valor`, `km`) VALUES ('Carro 2', '150000', '15');
INSERT INTO `automovel`.`carro` (`nome`, `valor`, `km`) VALUES ('Carro 3', '160000', '40');
INSERT INTO `automovel`.`carro` (`nome`, `valor`, `km`) VALUES ('Carro 4', '170000', '100000');
INSERT INTO `automovel`.`carro` (`nome`, `valor`, `km`) VALUES ('Carro 5', '200000', '50000');

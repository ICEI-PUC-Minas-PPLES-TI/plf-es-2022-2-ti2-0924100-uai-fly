CREATE TABLE `banco_uaifly`.`cliente` (
  `cpf` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `telefone` VARCHAR(45) NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

CREATE TABLE `banco_uaifly`.`compra` (
  `cpf` VARCHAR(45) NOT NULL,
  `valor` INT NULL,
  `cod_embarque` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod_embarque`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

CREATE TABLE `banco_uaifly`.`voo` (
  `cod_embarque` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(45) NOT NULL,
  `hoario_chegada` VARCHAR(45) NULL,
  `horario_partida` VARCHAR(45) NULL,
  `local_partida` VARCHAR(45) NULL,
  `local_chegada` VARCHAR(45) NULL,
  `companhia_aerea` VARCHAR(45) NULL,
  `numero_voo` INT NULL,
  PRIMARY KEY (`cod_embarque`),
  CONSTRAINT `fk_voo`
    FOREIGN KEY (`cod_embarque`)
    REFERENCES `banco_uaifly`.`compra` (`cod_embarque`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `banco_uaifly`.`cartao` (
  `cpf` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(45) NULL,
  `cvv` INT NULL,
  `data_validade` VARCHAR(45) NULL,
  PRIMARY KEY (`cpf`));

CREATE TABLE `banco_uaifly`.`bagagem` (
  `cpf` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NULL,
  `quantidade` INT NULL,
  PRIMARY KEY (`cpf`));

CREATE TABLE `banco_uaifly`.`avaliacao` (
  `cpf` VARCHAR(45) NOT NULL,
  `comentario` VARCHAR(45) NULL,
  `nota_qualidade` INT NULL,
  `nota_site` INT NULL,
  `nota_indicacao` INT NULL,
  `nota_fidelidade` INT NULL,
  PRIMARY KEY (`cpf`));

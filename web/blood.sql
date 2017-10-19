CREATE TABLE `bbb`.`personal` (
`Id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR(50) NOT NULL ,
`username` VARCHAR( 50 ) NOT NULL ,
`password` VARCHAR( 50 ) NOT NULL ,
`bloodgroup` VARCHAR(50) NOT NULL ,
`contact` VARCHAR(50) NOT NULL,
`area` VARCHAR(20) NOT NULL,
`address` VARCHAR(100) NOT NULL,
`nationalidnumber` VARCHAR(50) NOT NULL,
UNIQUE (`nationalidnumber`)

) ENGINE = MYISAM ;
DROP TABLE IF EXISTS `#__custompage_greetings`;

CREATE TABLE `#__custompage_greetings` (
    `id` SERIAL NOT NULL,
    `greeting` VARCHAR(200) NOT NULL,
    `published` BOOLEAN NOT NULL DEFAULT FALSE,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `#__custompage_greetings` (`greeting`) VALUES
    ('Hello World!'),
    ('Good bye World!');

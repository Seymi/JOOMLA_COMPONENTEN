DROP TABLE IF EXISTS `#__gewicht`;
DROP TABLE IF EXISTS `#__ereignisse`;

CREATE TABLE `#__ereignisse` (
    `id`           INT(11) NOT NULL,
    `ereignis`     VARCHAR(80) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


CREATE TABLE `#__gewicht` (
    `id`           INT(11) NOT NULL,
    `ereignis_id`  INT(11) NOT NULL,
    `gewicht`      DECIMAL(4,1) NOT NULL,
    `fettgehalt`   DECIMAL(3,1) NOT NULL,
    `fettmasse`    DECIMAL(3,1) NOT NULL,
    `knochenmasse` DECIMAL(2,1),
    `wassergehalt` DECIMAL(3,1),
    -- `published`    BOOLEAN NOT NULL DEFAULT FALSE,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`ereignis_id`) REFERENCES `#__ereignisse`(`id`)
) ENGINE = InnoDB;


INSERT INTO `#__ereignisse` (`id`, `ereignis`) VALUES
    (10, 'ohne Angabe'),
    (11, 'Nach dem Aufstehen'),
    (12, 'Vor dem Laufen'),
    (13, 'Nach dem Laufen'),
    (14, 'Vor dem Sport'),
    (15, 'Nach dem Sport'),
    (16, 'Vor dem Essen'),
    (17, 'Nach dem Essen'),
    (18, 'Vor dem Klo'),
    (19, 'Nach dem Klo'),
    (20, 'Vor dem Schlaf');

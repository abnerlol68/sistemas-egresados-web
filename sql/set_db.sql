USE buvplk6ufxfixqhtfpg6;

DROP TABLE IF EXISTS graduates, forms, questions, implemented_questions, answers;

CREATE TABLE graduates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(64) NOT NULL UNIQUE
) ENGINE=INNODB;

CREATE TABLE forms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(128) NOT NULL
) ENGINE=INNODB;

CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description_q VARCHAR(255) NOT NULL UNIQUE,
    type_q VARCHAR(12)
) ENGINE=INNODB;

CREATE TABLE implemented_questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fk_form INT,
    fk_question INT,
    FOREIGN KEY (fk_form) REFERENCES forms(id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (fk_question) REFERENCES questions(id) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=INNODB;

CREATE TABLE answers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fk_graduate INT,
    fk_implemented_questions INT,
    description_a VARCHAR(255) NOT NULL,
    FOREIGN KEY (fk_graduate) REFERENCES graduates(id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (fk_implemented_questions) REFERENCES implemented_questions(id) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=INNODB;

-- source ~/Documents/Cuarto-Semestre/sistemas-egresados-web/sql/setup.sql;

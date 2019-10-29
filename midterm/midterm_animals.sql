CREATE table midterm_animals
(
    id           BIGINT auto_increment
        primary key,
    type         VARCHAR(50) not null,
    breed        VARCHAR(50) not null,
    animal_name  VARCHAR(50) not null,
    date_added   DATETIME    null,
    date_updated DATETIME    null,
    date_deleted DATETIME    null
);

INSERT INTO midterm_animals (type, breed, animal_name)
VALUES ('cat', 'tabby', 'Cannibal');

INSERT INTO midterm_animals (type, breed, animal_name)
VALUES ('dog', 'golden retriever', 'Mr. SassyPants');

INSERT INTO midterm_animals (type, breed, animal_name)
VALUES ('reptile', 'turtle', 'Tutrle');
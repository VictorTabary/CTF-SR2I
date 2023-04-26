use data;

CREATE TABLE users
(
    id INT PRIMARY KEY NOT NULL,
    username VARCHAR(100),
    password VARCHAR(100)
);

INSERT INTO users VALUES (1,"admin","passeouorde");
INSERT INTO users VALUES (2,"jacques","FLAG{sql_injection}");
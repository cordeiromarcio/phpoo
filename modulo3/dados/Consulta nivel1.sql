CREATE TABLE estado (id INTEGER PRIMARY KEY NOT NULL, sigla CHAR(2),nome TEXT);
CREATE TABLE cidade (id INTEGER PRIMARY KEY NOT NULL,  nome TEXT, id_estado INTEGER REFERENCES estado (id));
CREATE TABLE pessoa (id INTEGER PRIMARY KEY NOT NULL, nome TEXT, endereco TEXT, bairro TEXT, telefone TEXT, email TEXT, id_cidade INTEGER REFERENCES cidade(id));
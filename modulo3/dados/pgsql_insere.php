<?php
// conecta ao banco de dados postgree sql
$conn = pg_connect('host=localhost port=3306 dbname=phpoo user=root password=1234');
// insere dados no banco de dados
pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1,'Érico Veríssimo')");
pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (2,'John Lennon')");
pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (3,'Mahatma Gandhi')");
pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (4,'Ayrton Senna')");
pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (5,'Charles Chapplin')");
pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (6,'Anita Garibaldi')");
pg_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (7,'Mário Quintana')");

pg_close($conn);
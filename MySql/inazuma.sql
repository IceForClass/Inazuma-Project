drop database if exists inazuma;
create database inazuma;

use inazuma;


create table jugadores(
	id int primary key auto_increment,
    Nombre varchar(35),
    Posición enum("Delantero","Centrocampista","Defensa","Portero"),
    Afinidad enum("Aire","Fuego","Bosque","Montaña"),
    Equipo varchar(25),
    PATADA	tinyint unsigned,
    TÉCNICA	tinyint unsigned,
    CONTROL	tinyint unsigned, 
    INTELIGENCIA tinyint unsigned, 
    PRESIÓN	tinyint unsigned, 
    AGILIDAD tinyint unsigned,	
    FÍSICO tinyint unsigned,
    TOTAL int unsigned
);

INSERT INTO jugadores(Nombre, Posición, Afinidad, Equipo,PATADA, TÉCNICA, CONTROL, INTELIGENCIA, PRESIÓN, AGILIDAD, FÍSICO, TOTAL)
VALUES
  ("Bomber", "Defensa", "Aire", "Prominence",66, 92, 112, 120, 152, 122, 96, 760),
  ("Bellatrix", "Delantero", "Aire", "Génesis", 136, 158, 106, 112, 114, 88, 86, 800),
  ("Clear", "Defensa", "Aire", "Polvo De Diamantes", 66, 92, 112, 120, 152, 122, 96, 760),
  ("Dvalin", "Portero", "Fuego", "Epsilon",126, 104, 118, 68, 120, 156, 110, 802),
  ("Gazelle", "Delantero", "Aire", "Polvo De Diamantes",174, 132, 120, 68, 120, 94, 90, 798),
  ("Gocker", "Defensa", "Montaña", "Polvo De Diamantes",80, 70, 86, 112, 160, 84, 126, 718),
  ("Icer", "Centrocampista", "Aire", "Polvo De Diamantes",74, 148, 100, 90, 100, 118, 88, 718),
  ("Janus", "Centrocampista", "Bosque", "Tormenta De Géminis",146, 148, 126, 88, 84, 96, 74, 762),
  ("Kormer", "Centrocampista", "Aire", "Génesis",116, 142, 128, 106, 84, 94, 90, 760),
  ("Lean", "Centrocampista", "Fuego", "Prominence",88, 146, 114, 110, 112, 90, 98, 758),
  ("Neppten", "Delantero", "Bosque", "Prominence",162, 124, 116, 94, 78, 84, 102, 760),
  ("Torch", "Delantero", "Fuego", "Prominence",184, 146, 132, 68, 78, 90, 102, 800),
  ("Xene", "Delantero", "Fuego", "Génesis",164, 118, 138, 104, 76, 98, 100, 798),
  ("Zell", "Delantero", "Aire", "Epsilon",148, 124, 116, 86, 84, 96, 108, 762),
  ("Zohen", "Defensa", "Montaña", "Génesis",68, 106, 90, 72, 166, 90, 128, 720);  
select * from jugadores;
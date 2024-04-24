drop database if exists inazuma;

create database inazuma;

use inazuma;

create table jugadores(
	id int primary key auto_increment not null,
    Nombre varchar(35) not null,
    Posición enum("Delantero","Centrocampista","Defensa","Portero") not null,
    Afinidad enum("Aire","Fuego","Bosque","Montaña") not null,
    Equipo varchar(25) not null,
    PATADA	tinyint unsigned not null,
    TÉCNICA	tinyint unsigned not null,
    CONTROL	tinyint unsigned not null, 
    INTELIGENCIA tinyint unsigned not null, 
    PRESIÓN	tinyint unsigned not null, 
    AGILIDAD tinyint unsigned not null, 	
    FÍSICO tinyint unsigned not null,
    TOTAL int unsigned
);

INSERT INTO jugadores(Nombre, Posición, Afinidad, Equipo,PATADA, TÉCNICA, CONTROL, INTELIGENCIA, PRESIÓN, AGILIDAD, FÍSICO, TOTAL) VALUES
  ("Bomber", "Defensa", "Aire", "Prominence",66, 92, 112, 120, 152, 122, 96, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Bellatrix", "Delantero", "Aire", "Génesis", 136, 158, 106, 112, 114, 88, 86, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Clear", "Defensa", "Aire", "Polvo De Diamantes", 66, 92, 112, 120, 152, 122, 96, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Dvalin", "Portero", "Fuego", "Epsilon",126, 104, 118, 68, 120, 156, 110, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Gazelle", "Delantero", "Aire", "Polvo De Diamantes",174, 132, 120, 68, 120, 94, 90, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Gocker", "Defensa", "Montaña", "Polvo De Diamantes",80, 70, 86, 112, 160, 84, 126, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Icer", "Centrocampista", "Aire", "Polvo De Diamantes",74, 148, 100, 90, 100, 118, 88, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Janus", "Centrocampista", "Bosque", "Tormenta De Géminis",146, 148, 126, 88, 84, 96, 74, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Korner", "Centrocampista", "Aire", "Génesis",116, 142, 128, 106, 84, 94, 90, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Lean", "Centrocampista", "Fuego", "Prominence",88, 146, 114, 110, 112, 90, 98, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Neppten", "Delantero", "Bosque", "Prominence",162, 124, 116, 94, 78, 84, 102, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Torch", "Delantero", "Fuego", "Prominence",184, 146, 132, 68, 78, 90, 102, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Xene", "Delantero", "Fuego", "Génesis",164, 118, 138, 104, 76, 98, 100, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Zell", "Delantero", "Aire", "Epsilon",148, 124, 116, 86, 84, 96, 108, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO),
  ("Zohen", "Defensa", "Montaña", "Génesis",68, 106, 90, 72, 166, 90, 128, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO);  
  
select * from jugadores;
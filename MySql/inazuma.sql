drop database if exists inazuma;

create database inazuma;

use inazuma;

create table usuarios (
	id int auto_increment not null primary key,
	username varchar(45),
    password varchar(45)
);

create table equipos (
	id int primary key auto_increment not null,
    Nombre varchar(35) not null
);

create table clan (
	id int primary key auto_increment not null,
    Nombre varchar(35) not null
);

create table torneo (
	id int primary key auto_increment not null,
    Nombre varchar(35) not null
);

create table jugadores(
	id int primary key auto_increment not null,
    Nombre varchar(35) not null,
    Posición enum("Delantero","Centrocampista","Defensa","Portero") not null,
    Afinidad enum("Aire","Fuego","Bosque","Montaña") not null,
    Equipo varchar(25) not null,
    PATADA	int unsigned not null,
    TÉCNICA	int unsigned not null,
    CONTROL	int unsigned not null, 
    INTELIGENCIA int unsigned not null, 
    PRESIÓN	int unsigned not null, 
    AGILIDAD int unsigned not null, 	
    FÍSICO int unsigned not null,
    TOTAL bigint unsigned,
    Descripcion text
);

INSERT INTO usuarios(username, password) VALUES
  ("Ice", md5("1234")),
  ("Cliente", md5("1234"));


-- Alius
INSERT INTO jugadores(Nombre, Posición, Afinidad, Equipo,PATADA, TÉCNICA, CONTROL, INTELIGENCIA, PRESIÓN, AGILIDAD, FÍSICO, TOTAL, Descripcion ) VALUES
  ("Bomber", "Defensa", "Aire", "Prominence",66, 92, 112, 120, 152, 122, 96, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Un jugador que irradia un entusiasmo ardiente. Es excepcionalmente minucioso con su cinta para la cabeza."),
  ("Bellatrix", "Delantero", "Aire", "Génesis", 136, 158, 106, 112, 114, 88, 86, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Una guerrera capaz de tomar decisiones tranquilas y calculadas en cualquier momento. Sus acciones nunca se ven influidas por sus emociones."),
  ("Clear", "Defensa", "Aire", "Polvo De Diamantes", 66, 92, 112, 120, 152, 122, 96, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Esboza una leve sonrisa mientras critica duramente. Aunque a muchos les gusta eso de ella."),
  ("Dvalin", "Portero", "Fuego", "Epsilon",126, 104, 118, 68, 120, 156, 110, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Se disgusta cuando las cosas no salen como las había planeado."),
  ("Gazelle", "Delantero", "Aire", "Polvo De Diamantes",174, 132, 120, 68, 120, 94, 90, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Un jugador tranquilo y con la cabeza fría. Sus jugadas dejan helados a los rivales."),
  ("Gocker", "Defensa", "Montaña", "Polvo De Diamantes",80, 70, 86, 112, 160, 84, 126, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Un jugador que parece un luchador de sumo y que usa tácticas despreciables. Se quita de en medio a otros jugadores para hacerse con el balón."),
  ("Icer", "Centrocampista", "Aire", "Polvo De Diamantes",74, 148, 100, 90, 100, 118, 88, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "La hermana pequeña de Arkew. Usa los cálculos de su hermano para jugar al fútbol con mayor presición."),
  ("Janus", "Centrocampista", "Bosque", "Tormenta De Géminis",146, 148, 126, 88, 84, 96, 74, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Un guerrero de corazón frío que cree que los perdedores no tienen derecho a vivir."),
  ("Kormer", "Centrocampista", "Aire", "Génesis",116, 142, 128, 106, 84, 94, 90, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Crea inumerables trampas para que los rivales cometan errores garrafales."),
  ("Lean", "Centrocampista", "Fuego", "Prominence",88, 146, 114, 110, 112, 90, 98, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "`¡Solo yo puedo ser la más fuerte`. Su sueño es ser la mejor futbolista del universo."),
  ("Neppten", "Delantero", "Bosque", "Prominence",162, 124, 116, 94, 78, 84, 102, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Un joven de ojos oscuros. Las profundidades de su corazón son un misterio para todos."),
  ("Torch", "Delantero", "Fuego", "Prominence",184, 146, 132, 68, 78, 90, 102, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Un delantero de sangre caliente y agresivo. Sus tiros abrasadores dejan un rastro de ceniza a su paso"),
  ("Xene", "Delantero", "Fuego", "Génesis",164, 118, 138, 104, 76, 98, 100, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "El guerrero definitivo, nacido del proyecto Génesis. Sus tiros vuelan como cometas"),
  ("Zell", "Delantero", "Aire", "Epsilon",148, 124, 116, 86, 84, 96, 108, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Confía plenamente un su propia habilidad y culpa a los que le rodean cuandolas cosas van mal."),
  ("Zohen", "Defensa", "Montaña", "Génesis",68, 106, 90, 72, 166, 90, 128, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "Bloquea la escuadra con el enorme físico que ha desarrollado gracias a las artes marciales.");  

-- Campeones nacionales
INSERT INTO jugadores(Nombre, Posición, Afinidad, Equipo,PATADA, TÉCNICA, CONTROL, INTELIGENCIA, PRESIÓN, AGILIDAD, FÍSICO, TOTAL, Descripcion ) VALUES
  ("Tori", "Centrocampista", "Aire", "Servicio Secreto",104, 114, 120, 94, 116, 106, 66, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Aitor", "Defensa", "Bosque", "Raimon Go",110 ,102 ,110 ,92 ,142 ,101 ,98 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Bailong", "Delantero", "Aire", "Luz Eterna",184 ,128 ,148 ,108 ,74 ,96 ,62 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Caleb", "Centrocampista", "Fuego", "Royal Academy Redux",122 ,152 ,122 ,92 ,124 ,94 ,92 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Erik", "Centrocampista", "Bosque", "Raimon",128 ,144 ,124 ,90 ,108 ,84 ,82 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Haizaki", "Delantero", "Bosque", "Raimon Orion", 168, 72, 86, 82, 134, 120, 138, PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Kevin", "Delantero", "Bosque", "Servicio Secreto", 156, 88, 110,72 ,74 ,86 ,134 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Riccardo", "Centrocampista", "Bosque", "Raimon Go",116 ,140 ,126 ,118 ,112 ,104 ,88 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Samguk", "Portero", "Fuego", "Raimon Go",64 ,82 ,104 ,96 ,110 ,158 ,108 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Scotty", "Defensa", "Bosque", "Claustro Sagrado",76 ,108 ,128 ,118 ,152 ,78 ,102 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Sue", "Delantero", "Bosque", "Triple C",142 ,106 ,108 ,102 ,86 ,86 ,88 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Tezcat", "Delantero", "Bosque", "Equipo Zero",176 ,136 ,126 ,78 ,114 ,98 ,72 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, "."),
  ("Zanark", "Delantero", "Montaña", "Zanark Domain",170 ,118 ,134 ,46 ,100 ,98 ,136 , PATADA+TÉCNICA+CONTROL+INTELIGENCIA+PRESIÓN+AGILIDAD+FÍSICO, ".");

-- Inazuma All stars


select * from jugadores;
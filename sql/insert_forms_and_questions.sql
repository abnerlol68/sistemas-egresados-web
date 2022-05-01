-- Insert forms
INSERT INTO forms (title) VALUES ("Form 24 months");
INSERT INTO forms (title) VALUES ("Form 3 to 5 years");

-- Insert questions and indexing to two forms
INSERT INTO questions (description_q, type_q) VALUES("Nombre Completo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 1);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 1);

INSERT INTO questions (description_q, type_q) VALUES("Sexo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 2);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 2);

INSERT INTO questions (description_q, type_q) VALUES("Domicilio actual (Calle, colonia, municipio)", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 3);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 3);

INSERT INTO questions (description_q, type_q) VALUES("Estado donde se localiza tu domicilio actual", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 4);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 4);

INSERT INTO questions (description_q, type_q) VALUES("Correo electrónico", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 5);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 5);

INSERT INTO questions (description_q, type_q) VALUES("Teléfono móvil", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 6);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 6);

INSERT INTO questions (description_q, type_q) VALUES("Teléfono fijo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 7);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 7);

INSERT INTO questions (description_q, type_q) VALUES("Año de ingreso", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 8);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 8);

INSERT INTO questions (description_q, type_q) VALUES("Año de egreso", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 9);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 9);

INSERT INTO questions (description_q, type_q) VALUES("Área o departamento en el que laboras", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 10);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 10);

INSERT INTO questions (description_q, type_q) VALUES("Cargo o función que realizas", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 11);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 11);
INSERT INTO questions (description_q, type_q) VALUES("Ingresos mensuales", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 12);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 12);

INSERT INTO questions (description_q, type_q) VALUES("Titulado", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 13);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 13);

INSERT INTO questions (description_q, type_q) VALUES("Nombre de la empresa", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 14);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 14);

INSERT INTO questions (description_q, type_q) VALUES("Nombre de tu jefe inmediato", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 15);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 15);

INSERT INTO questions (description_q, type_q) VALUES("Teléfono (Si tiene extensión anéxala)", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 16);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 16);

INSERT INTO questions (description_q, type_q) VALUES("Correo electrónico del mismo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 17);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 17);

INSERT INTO questions (description_q, type_q) VALUES("Actividad o giro de la empresa", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 18);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 18);

INSERT INTO questions (description_q, type_q) VALUES("Tamaño de la empresa", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 19);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 19);

INSERT INTO questions (description_q, type_q) VALUES("Sector económico al que pertenece tu empleo actual", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 20);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 20);

INSERT INTO questions (description_q, type_q) VALUES("Régimen al que pertenece tu empleo actual", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 21);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 21);

INSERT INTO questions (description_q, type_q) VALUES("Te gustaria tomar algún curso de actualización", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 22);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 22);

INSERT INTO questions (description_q, type_q) VALUES("Perteneces a alguna Asociación Civil, Cámaras Industriales o Colegios Profesionales", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 23);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 23);

INSERT INTO questions (description_q, type_q) VALUES("Comentarios o sugerencias (Para mejorar la formación profesional de los egresados de tu carrera)", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 24);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 24);

-- Insert questions and indexing in the first form
INSERT INTO questions (description_q, type_q) VALUES("Modalidad de titulación", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 25);

INSERT INTO questions (description_q, type_q) VALUES("Explica el motivo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 26);

INSERT INTO questions (description_q, type_q) VALUES("Dominio del idioma extranjero (Inglés)", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 27);

INSERT INTO questions (description_q, type_q) VALUES("Si dominas otro idioma especifica cual y que porcentaje del mismo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 28);

INSERT INTO questions (description_q, type_q) VALUES("Actividad a la que te dedicas actualmente", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 29);

INSERT INTO questions (description_q, type_q) VALUES("Que estudias", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 30);

INSERT INTO questions (description_q, type_q) VALUES("Tiempo transcurrido para obtener tu primer empleo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 31);

INSERT INTO questions (description_q, type_q) VALUES("Medio para obtener empleo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 32);

INSERT INTO questions (description_q, type_q) VALUES("Antigüedad en el empleo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 33);

INSERT INTO questions (description_q, type_q) VALUES("Cual es la condición de tu empleo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 34);

INSERT INTO questions (description_q, type_q) VALUES("Dirección de la empresa (Estado y municipio)", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 35);

INSERT INTO questions (description_q, type_q) VALUES("El área donde laboras es de acuerdo a tu perfil", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 36);

INSERT INTO questions (description_q, type_q) VALUES("Idioma extranjero que utilizas en tu trabajo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 37);

INSERT INTO questions (description_q, type_q) VALUES("Principales limitaciones profesionales técnicas que enfrentas en tu empleo actual", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 38);

INSERT INTO questions (description_q, type_q) VALUES("Principales limitaciones integrales que enfrentas en tu empleo actual", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 39);

INSERT INTO questions (description_q, type_q) VALUES("La eficiencia para realizar las actividades laborales en relación con tu formación ha sido", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 40);

INSERT INTO questions (description_q, type_q) VALUES("Cómo ha sido la relación del trabajo con tu área de formación", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 41);

INSERT INTO questions (description_q, type_q) VALUES("Calidad de los docentes", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 42);

INSERT INTO questions (description_q, type_q) VALUES("Plan de estudios", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 43);

INSERT INTO questions (description_q, type_q) VALUES("Opotunidad de participar en proyectos de investigación y desarrollo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 44);

INSERT INTO questions (description_q, type_q) VALUES("Énfasis en la investigación dentro del proceso de aprendizaje", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 45);

INSERT INTO questions (description_q, type_q) VALUES("Infraestructura", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 46);

INSERT INTO questions (description_q, type_q) VALUES("Cómo calificas tu formación académica con respecto a tu desempeño laboral", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 47);

INSERT INTO questions (description_q, type_q) VALUES("La experiencia obtenida a través de la Residencia Profesional ha sido", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 48);

INSERT INTO questions (description_q, type_q) VALUES("Cuál ha sido la utilidad de la Residencia Profesional para tu desarrollo laboral y profesional", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 49);

INSERT INTO questions (description_q, type_q) VALUES("La satisfacción académica que te brindó el programa educativo ha sido", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 50);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de diseñar, configurar y administrar redes computacionales aplicando las normas y estándares vigentes", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 51);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de desarrollar, implementar y administrar software de sistemas o de aplicación que cumpla con los estándares de calidad con el fin de apoyar la productividad y competitividad de las organizaciones", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 52);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de coordinar y participar en proyectos interdisciplinarios", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 53);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de diseñar e implementar interfaces hombre-máquina y máquina-máquina para la automatización de sistemas", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 54);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de identificar y comprender las tecnologías de hardware para proponer, desarrollar y mantener aplicaciones eficientes", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 55);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de diseñar, desarrollar y administrar bases de datos conforme a requerimientos definidos, normas organizacionales de manejo y seguridad de la información, utilizando tecnologías emergentes", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 56);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de integrar soluciones computacionales con diferentes tecnologías, plataformas o dispositivos", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 57);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de desarrollar una visión empresarial para detectar área de oportunidad que permitan emprender y desarrollar proyectos aplicando las tecnologías de la información y comunicación", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 58);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de desempeñar actividades profesionales considerando los aspectos legales, éticos, sociales y de desarrollo sustentable", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 59);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de poseer habilidades metodológicas de investigación que fortalezcan el desarrollo cultural, científico y tecnológico en el ámbito de sistemas computacionales y disciplinas afines", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 60);

INSERT INTO questions (description_q, type_q) VALUES("Soy capaz de seleccionar y aplicar herramientas matemáticas para el modelado, diseño y desarrollo de tecnología computacional", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 61);

INSERT INTO questions (description_q, type_q) VALUES("Si tu respuesta es afirmativa, qué curso te gustaría tomar", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 62);

INSERT INTO questions (description_q, type_q) VALUES("Cuál", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (1, 63);

-- -- Insert questions and indexing in the second form
INSERT INTO questions (description_q, type_q) VALUES("Grado Académico", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 64);

INSERT INTO questions (description_q, type_q) VALUES("Estado Civil", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 65);

INSERT INTO questions (description_q, type_q) VALUES("¿Por qué?", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 66);

INSERT INTO questions (description_q, type_q) VALUES("Dominio del idioma extranjero", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 67);

INSERT INTO questions (description_q, type_q) VALUES("Otro idioma y que dominio tienes del mismo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 68);

INSERT INTO questions (description_q, type_q) VALUES("Actualmente te encuentras laborando", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 69);

INSERT INTO questions (description_q, type_q) VALUES("Antigüedad en empleo", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 70);

INSERT INTO questions (description_q, type_q) VALUES("Dirección (Municipio y Estado)", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 71);

INSERT INTO questions (description_q, type_q) VALUES("Cuál es tu nivel jerárquico dentro de la empresa", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 72);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has participado en el desarrollo de aplicaciones computacionales creativas e innovadoras", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 73);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) cuando realizas el diseño de aplicaiones computacionales, has aplicado normas y estándares vigentes", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 74);

INSERT INTO questions (description_q, type_q) VALUES("Si lo has realizado menciona cuál", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 75);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has participado en el desarrollo de interfaces de atumatización", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 76);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has desarrollado sistemas integrales descentralizados, como redes de computadoras, bases de datos distribuidas, sistemas ERP (Como SAO, COMPAQ), etc.", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 77);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has aplicado estándares internacionales en la integración de soluciones computacionales", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 78);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has tomado cursos de actualización sobre tecnologías y estándares vigentes en el último año", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 79);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has hecho uso de modelos y/o herramientas matemáticas para solucionar problemas complejos", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 80);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has desarrollado modelos y/o algoritmos para solucionar problemas de ingeniería", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 81);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has evaluado modelos y/o algoritmos para solucionar problemas de ingeniería", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 82);

INSERT INTO questions (description_q, type_q) VALUES("Sí la organización en la que te desempeñas es propia", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 83);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has presentado artículos, carteles científicos, reportes técnicos o presentaciones electrónicas dentro de tus labores", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 84);

INSERT INTO questions (description_q, type_q) VALUES("Sí tu respuesta es afirmativa especifica cuál", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 85);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) has defendido ante audiencias tus propuestas de soluciones tecnológicas", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 86);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) identificas los valores éticos de la empresa", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 87);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) participas en el desarrollo de la planeación estratégica dentro los proyectos específicos", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 88);

INSERT INTO questions (description_q, type_q) VALUES("Cómo egresado(a) das seguimiento a la planeación estratégica del proyecto que desarrollas y/o implementas", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 89);

INSERT INTO questions (description_q, type_q) VALUES("Qué curso desearías tomar", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 90);

INSERT INTO questions (description_q, type_q) VALUES("A qué Asociación Civil, Cámaras Industriales o Colegios Profesionales perteneces", NULL);
INSERT INTO implemented_questions (fk_form, fk_question) VALUES (2, 91);

-- source ~/Documents/Cuarto-Semestre/sistemas-egresados-web/sql/insert_forms_and_questions;
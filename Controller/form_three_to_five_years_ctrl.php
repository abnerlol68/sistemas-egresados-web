<pre>
  <?php
    $questions = [
      "Nombre Completo",
      "Sexo",
      "Domicilio actual (Calle, colonia, municipio)",
      "Estado donde se localiza tu domicilio actual",
      "Correo electrónico",
      "Teléfono móvil",
      "Teléfono fijo",
      "Año de ingreso",
      "Año de egreso",
      "Grado Académico",
      "Estado Civil",
      "Ingresos mensuales",
      "Titulado",
      "¿Por qué?",
      "Dominio del idioma extranjero",
      "Otro idioma y que dominio tienes del mismo",
      "Actualmente te encuentras laborando",
      "Antigüedad en empleo",
      "Nombre de la Empresa",
      "Dirección (Municipio y Estado)",
      "Nombre de tu jefe inmediato",
      "Teléfono (Si tiene extensión anéxala)",
      "Correo electrónico del mismo",
      "Cuál es tu nivel jerárquico dentro de la empresa",
      "Actividad o giro de la empresa",
      "Tamaño de la empresa",
      "Sector económico al que pertenece tu empleo actual",
      "Régimen al que pertenece tu empleo actual",
      "Área o departamento en el que laboras",
      "Cargo o función que realizas",
      "Cómo egresado(a) has participado en el desarrollo de aplicaciones computacionales creativas e innovadoras",
      "Cómo egresado(a) cuando realizas el diseño de aplicaiones computacionales, has aplicado normas y estándares vigentes",
      "Si lo has realizado menciona cuál",
      "Cómo egresado(a) has participado en el desarrollo de interfaces de atumatización",
      "Cómo egresado(a) has desarrollado sistemas integrales descentralizados, como redes de computadoras, bases de datos distribuidas, sistemas ERP (Como SAO, COMPAQ), etc.",
      "Cómo egresado(a) has aplicado estándares internacionales en la integración de soluciones computacionales",
      "Cómo egresado(a) has tomado cursos de actualización sobre tecnologías y estándares vigentes en el último año",
      "Cómo egresado(a) has hecho uso de modelos y/o herramientas matemáticas para solucionar problemas complejos",
      "Cómo egresado(a) has desarrollado modelos y/o algoritmos para solucionar problemas de ingeniería",
      "Cómo egresado(a) has evaluado modelos y/o algoritmos para solucionar problemas de ingeniería",
      "Sí la organización en la que te desempeñas es propia",
      "Sí la organización en la que ejerces no es propia, que función desempeñas",
      "Cómo egresado(a) has presentado artículos, carteles científicos, reportes técnicos o presentaciones electrónicas dentro de tus labores",
      "Sí tu respuesta es afirmativa especifica cuál",
      "Cómo egresado(a) has defendido ante audiencias tus propuestas de soluciones tecnológicas",
      "Cómo egresado(a) identificas los valores éticos de la empresa",
      "Cómo egresado(a) participas en el desarrollo de la planeación estratégica dentro los proyectos específicos",
      "Cómo egresado(a) das seguimiento a la planeación estratégica del proyecto que desarrollas y/o implementas",
      "Te gustaría tomar algún curso de actualización",
      "Qué curso desearías tomar",
      "Perteneces a alguna Asociación Civil, Cámaras Industriales o Colegios Profesionales",
      "A qué Asociación Civil, Cámaras Industriales o Colegios Profesionales perteneces",
      "Comentarios o sugerencias (Para mejorar la formación profesional de los egresados de tu carrera)",
    ];

    $i = 0;
    foreach ($_POST as $question => $answer) {
      $fix_question = str_replace("_", " ", $question);
      $commpar = strcmp($questions[$i], $fix_question) === 0;
      echo "{$fix_question} = {$questions[$i++]} : {$commpar}"."<br>";
    }

    var_dump($i);
    die();
  ?>
</pre>
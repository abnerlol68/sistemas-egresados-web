<?php
  try {
    require "../Model/database.php";
  
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
      "Titulado",
      "Modalidad de titulación",
      "Explica el motivo",
      "Dominio del idioma extranjero (Inglés)",
      "Si dominas otro idioma especifica cual y que porcentaje del mismo",
      "Ingresos mensuales",
      "Actividad a la que te dedicas actualmente",
      "Que estudias",
      "Tiempo transcurrido para obtener tu primer empleo",
      "Medio para obtener empleo",
      "Antigüedad en el empleo",
      "Cual es la condición de tu empleo",
      "Nombre de la empresa",
      "Dirección de la empresa (Estado y municipio)",
      "Nombre de tu jefe inmediato",
      "Teléfono (Si tiene extensión anéxala)",
      "Correo electrónico del mismo",
      "Actividad o giro de la empresa",
      "Tamaño de la empresa",
      "Área o departamento en el que laboras",
      "Cargo o función que realizas",
      "El área donde laboras es de acuerdo a tu perfil",
      "Sector económico al que pertenece tu empleo actual",
      "Régimen al que pertenece tu empleo actual",
      "Idioma extranjero que utilizas en tu trabajo",
      "Principales limitaciones profesionales técnicas que enfrentas en tu empleo actual",
      "Principales limitaciones profesionales técnicas que enfrentas en tu empleo actual",
      "La eficiencia para realizar las actividades laborales en relación con tu formación ha sido",
      "Cómo ha sido la relación del trabajo con tu área de formación",
      "Calidad de los docentes",
      "Plan de estudios",
      "Opotunidad de participar en proyectos de investigación y desarrollo",
      "Énfasis en la investigación dentro del proceso de aprendizaje",
      "Infraestructura",
      "Cómo calificas tu formación académica con respecto a tu desempeño laboral",
      "La experiencia obtenida a través de la Residencia Profesional ha sido",
      "Cuál ha sido la utilidad de la Residencia Profesional para tu desarrollo laboral y profesional",
      "La satisfacción académica que te brindó el programa educativo ha sido",
      "Soy capaz de diseñar, configurar y administrar redes computacionales aplicando las normas y estándares vigentes",
      "Soy capaz de desarrollar, implementar y administrar software de sistemas o de aplicación que cumpla con los estándares de calidad con el fin de apoyar la productividad y competitividad de las organizaciones",
      "Soy capaz de coordinar y participar en proyectos interdisciplinarios",
      "Soy capaz de diseñar e implementar interfaces hombre-máquina y máquina-máquina para la automatización de sistemas",
      "Soy capaz de identificar y comprender las tecnologías de hardware para proponer, desarrollar y mantener aplicaciones eficientes",
      "Soy capaz de diseñar, desarrollar y administrar bases de datos conforme a requerimientos definidos, normas organizacionales de manejo y seguridad de la información, utilizando tecnologías emergentes",
      "Soy capaz de integrar soluciones computacionales con diferentes tecnologías, plataformas o dispositivos",
      "Soy capaz de desarrollar una visión empresarial para detectar área de oportunidad que permitan emprender y desarrollar proyectos aplicando las tecnologías de la información y comunicación",
      "Soy capaz de desempeñar actividades profesionales considerando los aspectos legales, éticos, sociales y de desarrollo sustentable",
      "Soy capaz de poseer habilidades metodológicas de investigación que fortalezcan el desarrollo cultural, científico y tecnológico en el ámbito de sistemas computacionales y disciplinas afines",
      "Soy capaz de seleccionar y aplicar herramientas matemáticas para el modelado, diseño y desarrollo de tecnología computacional",
      "La satisfacción académica que te brindó el programa educativo ha sido",
      "Si tu respuesta es afirmativa, qué curso te gustaría tomar",
      "Perteneces a alguna Asociación Civil, Cámaras Industriales o Colegios Profesionales",
      "Cuál",
      "Comentarios o sugerencias (Para mejorar la formación profesional de los egresados de tu carrera)",
    ];
  
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $stm = $conn->prepare("CALL check_graduates(:ip)");
    $stm->execute([":ip" => $ip]);
    $ip_to_check = $stm->fetch(PDO::FETCH_ASSOC)["ip"];
  
    if (strcmp($ip, $ip_to_check) === 0) {  
      echo "Las respuestas de {$ip} ya se han registrado";
      $stm->closeCursor();
      $stm = null;
      $conn = null;
      return;
    }
  
    $stm = null;
    $stm = $conn->prepare("CALL insert_graduate(:ip)");
    $stm->execute([":ip" => $ip]);
    
    $stm = null;
    $stm = $conn->prepare("CALL get_id_graduate(:ip)");
    $stm->execute([":ip" => $ip]);
    $id_from_graduate = $stm->fetch(PDO::FETCH_ASSOC)["id"];
  
    $i = 0;
    foreach ($_POST as $id_answer => $answer) {
      $stm = null;
      $stm = $conn->prepare("CALL get_id_implemented_question(1, :question)");
      $stm->execute([":question" => $questions[$i++]]);
      $id_implemented_question = $stm->fetch(PDO::FETCH_ASSOC)["implemented_questions.id"];
      
      $stm = null;
      $stm = $conn->prepare("CALL insert_answer(:id_graudate, :id_implemented_question, :descrip)");
      $stm->execute([
        ":id_graudate" => $id_from_graduate,
        ":id_implemented_question" => $id_implemented_question,
        ":descrip" => $answer
      ]);
    }
  
    echo "Registro exitoso por parte de {$ip}";
  
    $stm->closeCursor();
    $stm = null;
    $conn = null;
    return;
  } catch (Exception $e) {
    die($e->getMessage());
  }

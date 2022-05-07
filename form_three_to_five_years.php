<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style_form.css">
  <title>Encuesta de Seguimiento de Egresados 3-5 años, Ingeniería en Sistemas Computacionales</title>
</head>

<body>
  <header></header>

  <main>
    <form action="Controller/forms.php" method="POST">
      <div class="content_form">
        <span class="section_title">PERFIL DEL EGRESADO</span>
  
        <div class="qt" id="qt_1_1_container">
          <label for="qt_1_1_r" id="qt_1_1">Nombre Completo: <span>*</span></label>
          <div class="res">
            <input class="input_text" type="text" name="Nombre Completo" id="qt_1_1_r" required>
          </div>
        </div>
  
        <div class="qt" id="qt_1_2_container">
          <label id="qt_1_2">Sexo: <span>*</span></label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Sexo" id="qt_1_2_r_1" value="Femenino" require>
              <label for="qt_1_2_r_1">Femenino</label>
            </div>
            <div>
              <input class="input_radio" type="radio" name="Sexo" id="qt_1_2_r_2" value="Masculino" require>
              <label for="qt_1_2_r_2">Masculino</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_1_3_container">
          <label for="qt_1_3_r" id="qt_1_3">Domicilio actual (Calle, colonia, municipio): <span>*</span></label>
          <div class="res">
            <input class="input_text" type="text" name="Domicilio actual (Calle, colonia, municipio)" id="qt_1_3_r" require>
          </div>
        </div>
  
        <div class="qt" id="qt_1_4_container">
          <label for="qt_1_4_r" id="qt_1_4">Estado donde se localiza tu domicilio actual: <span>*</span></label>
          <div class="res">
            <select name="Estado donde se localiza tu domicilio actual" id="qt_1_4_r" require>
              <option value="Aguascalientes">Aguascalientes</option>
              <option value="Baja California">Baja California</option>
              <option value="Baja California Sur">Baja California Sur</option>
              <option value="Campeche">Campeche</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Chihuahua">Chihuahua</option>
              <option value="Ciudad de México">Ciudad de México</option>
              <option value="Coahuila">Coahuila</option>
              <option value="Colima">Colima</option>
              <option value="Durango">Durango</option>
              <option value="Estado de México">Estado de México</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Guerrero">Guerrero</option>
              <option value="Hidalgo">Hidalgo</option>
              <option value="Jalisco">Jalisco</option>
              <option value="Michoacán">Michoacán</option>
              <option value="Morelos">Morelos</option>
              <option value="Nayarit">Nayarit</option>
              <option value="Nuevo León">Nuevo León</option>
              <option value="Oaxaca">Oaxaca</option>
              <option value="Puebla">Puebla</option>
              <option value="Querétaro">Querétaro</option>
              <option value="Quintana Roo">Quintana Roo</option>
              <option value="San Luis Potosí">San Luis Potosí</option>
              <option value="Sinaloa">Sinaloa</option>
              <option value="Sonora">Sonora</option>
              <option value="Tabasco">Tabasco</option>
              <option value="Tamaulipas">Tamaulipas</option>
              <option value="Tlaxcala">Tlaxcala</option>
              <option value="Veracruz">Veracruz</option>
              <option value="Yucatán">Yucatán</option>
              <option value="Zacatecas">Zacatecas</option>
            </select>
          </div>
        </div>
  
        <div class="qt" id="qt_1_5_container">
          <label for="qt_1_5_r" id="qt_1_5">Correo electrónico: <span>*</span></label>
          <p>
            Es importante que lo escribas de manera correcta y que sea el que usas regularmente,
            dado que cuando tenemos ofertas laborales se las hacemos llegar por este medio.
          </p>
          <div class="res">
            <input class="input_text" type="text" name="Correo electrónico" id="qt_1_5_r" require>
          </div>
        </div>
  
        <div class="qt" id="qt_1_6_container">
          <label for="qt_1_6_r" id="qt_1_6">Teléfono móvil: <span>*</span></label>
          <div class="res">
            <input class="input_tel" type="tel" name="Teléfono móvil" id="qt_1_6_r" require>
          </div>
        </div>
  
        <div class="qt" id="qt_1_7_container">
          <label for="qt_1_7_r" id="qt_1_7">Teléfono fijo: </label>
          <div class="res">
            <input class="input_tel" type="tel" name="Teléfono fijo" id="qt_1_7_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_8_container">
          <label for="qt_1_8_r" id="qt_1_8">Año de ingreso: <span>*</span></label>
          <div class="res">
            <select name="Año de ingreso" id="qt_1_8_r">
              <option>2000</option>
              <option>2001</option>
              <option>2002</option>
              <option>2003</option>
              <option>2004</option>
              <option>2005</option>
              <option>2006</option>
              <option>2007</option>
              <option>2008</option>
              <option>2009</option>
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
              <option>2013</option>
              <option>2014</option>
            </select>
          </div>
        </div>
  
        <div class="qt" id="qt_1_9_container">
          <label for="qt_1_9_r" id="qt_1_9">Año de egreso: <span>*</span></label>
          <div class="res">
            <select name="Año de egreso" id="qt_1_9_r">
              <option>2004</option>
              <option>2005</option>
              <option>2006</option>
              <option>2007</option>
              <option>2008</option>
              <option>2009</option>
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
            </select>
          </div>
        </div>
  
        <div class="qt" id="qt_1_10_container">
          <label id="qt_1_10">Grado Académico: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Grado Académico" id="qt_1_10_r_1" value="Licenciatura">
              <label for="qt_1_10_r_1">Licenciatura</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Grado Académico" id="qt_1_10_r_2" value="Maestría">
              <label for="qt_1_10_r_2">Maestría</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Grado Académico" id="qt_1_10_r_3" value="Doctorado">
              <label for="qt_1_10_r_3">Doctorado</label>
            </div>

            <div>
              <input class="input_radio" type="radio" name="Grado Académico" id="qt_1_10_r_4" value="Otros">
              <label for="qt_1_10_r_4">Otros</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_1_11_container">
          <label id="qt_1_11">Estado Civil: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Estado Civil" id="qt_1_11_r_1" value="Soltero">
              <label for="qt_1_11_r_1">Soltero</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Estado Civil" id="qt_1_11_r_2" value="Casado">
              <label for="qt_1_11_r_2">Casado</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Estado Civil" id="qt_1_11_r_3" value="Unión Libre">
              <label for="qt_1_11_r_3">Unión Libre</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_1_12_container">
          <label for="qt_1_12_r" id="qt_1_12">Ingresos mensuales: </label>
          <div class="res">
            <input class="input_number" type="number" name="Ingresos mensuales" id="qt_1_12_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_13_container">
          <label id="qt_1_13">Titulado: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Titulado" id="qt_1_13_r_1" value="Si">
              <label for="qt_1_13_r_1">Si</label>
            </div>
            <div>
              <input class="input_radio" type="radio" name="Titulado" id="qt_1_13_r_2" value="No">
              <label for="qt_1_13_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_1_14_container">
          <label for="qt_1_14_r" id="qt_1_14">¿Por qué? </label>
          <div class="res">
            <input class="input_text" type="text" name="¿Por qué?" id="qt_1_14_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_15_container">
          <label for="qt_1_15_r" id="qt_1_15">Dominio del idioma extranjero: </label>
          <div class="res">
            <select name="Dominio del idioma extranjero" id="qt_1_15_r">
              <option>30%</option>
              <option>50%</option>
              <option>70%</option>
              <option>100%</option>
            </select>
          </div>
        </div>
  
        <div class="qt" id="qt_1_16_container">
          <label for="qt_1_16_r" id="qt_1_16">Otro idioma y que dominio tienes del mismo: </label>
          <div class="res">
            <input class="input_text" type="text" name="Otro idioma y que dominio tienes del mismo" id="qt_1_16_r">
          </div>
        </div>
  
        <span class="section_title">UBICACIÓN LABORAL</span>
  
        <div class="qt" id="qt_2_1_container">
          <label id="qt_2_1">Actualmente te encuentras laborando: <span>*</span></label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Actualmente te encuentras laborando" id="qt_2_1_r_1" value="Si">
              <label for="qt_2_1_r_1">Si</label>
            </div>
            <div>
              <input class="input_radio" type="radio" name="Actualmente te encuentras laborando" id="qt_2_1_r_2" value="No">
              <label for="qt_2_1_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_2_container">
          <label for="qt_2_2_r" id="qt_2_2">Antigüedad en empleo: </label>
          <div class="res">
            <input class="input_text" type="text" name="Antigüedad en empleo" id="qt_2_2_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_3_container">
          <label for="qt_2_3_r" id="qt_2_3">Nombre de la Empresa: </label>
          <div class="res">
            <input class="input_text" type="text" name="Nombre de la Empresa" id="qt_2_3_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_4_container">
          <label for="qt_2_4_r" id="qt_2_4">Dirección (Municipio y Estado): </label>
          <div class="res">
            <input class="input_text" type="text" name="Dirección (Municipio y Estado)" id="qt_2_4_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_5_container">
          <label for="qt_2_5_r" id="qt_2_5">Nombre de tu jefe inmediato: </label>
          <p>
            Con la finalidad de aplicarle la encuesta de empleadores, cuyo propósito es saber si consideran eficaz el plan de estudios.
          </p>
          <div class="res">
            <input class="input_text" type="text" name="Nombre de tu jefe inmediato" id="qt_2_5_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_6_container">
          <label for="qt_2_6_r" id="qt_2_6">Teléfono (Si tiene extensión anéxala): </label>
          <div class="res">
            <input class="input_tel" type="tel" name="Teléfono (Si tiene extensión anéxala)" id="qt_2_6_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_7_container">
          <label for="qt_2_7_r" id="qt_2_7">Correo electrónico del mismo: </label>
          <div class="res">
            <input class="input_email" type="email" name="Correo electrónico del mismo" id="qt_2_7_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_8_container">
          <label id="qt_2_8">Cuál es tu nivel jerárquico dentro de la empresa: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cuál es tu nivel jerárquico dentro de la empresa" id="qt_2_8_r_1" value="Operativo">
              <label for="qt_2_8_r_1">Operativo</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cuál es tu nivel jerárquico dentro de la empresa" id="qt_2_8_r_2" value="Intermedio">
              <label for="qt_2_8_r_2">Intermedio</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cuál es tu nivel jerárquico dentro de la empresa" id="qt_2_8_r_3" value="Directivo o Gerencial">
              <label for="qt_2_8_r_3">Directivo o Gerencial</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cuál es tu nivel jerárquico dentro de la empresa" id="qt_2_8_r_4" value="Independiente">
              <label for="qt_2_8_r_4">Independiente</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_9_container">
          <label for="qt_2_9_r" id="qt_2_9">Actividad o giro de la empresa: </label>
          <div class="res">
            <input class="input_text" type="text" name="Actividad o giro de la empresa" id="qt_2_9_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_10_container">
          <label id="qt_2_10">Tamaño de la empresa: </label>
          <p>
            De acuerdo al número de trabajadores con los que cuenta.
          </p>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Tamaño de la empresa" id="qt_2_10_r_1" value="Microempresa (1-30)">
              <label for="qt_2_10_r_1">Microempresa (1-30)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Tamaño de la empresa" id="qt_2_10_r_2" value="Pequeña (31-100)">
              <label for="qt_2_10_r_2">Pequeña (31-100)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Tamaño de la empresa" id="qt_2_10_r_3" value="Mediana (101-500)">
              <label for="qt_2_10_r_3">Mediana (101-500)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Tamaño de la empresa" id="qt_2_10_r_4" value="Grande (Más de 500)">
              <label for="qt_2_10_r_4">Grande (Más de 500)</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_11_container">
          <label id="qt_2_11">Sector económico al que pertenece tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Sector económico al que pertenece tu empleo actual" id="qt_2_11_r_1" value="Primario (Agroindustria, pesquero, minero)">
              <label for="qt_2_11_r_1">Primario (Agroindustria, pesquero, minero)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Sector económico al que pertenece tu empleo actual" id="qt_2_11_r_2" value="Secundario (Industrial, construcción, petróleo)">
              <label for="qt_2_11_r_2">Secundario (Industrial, construcción, petróleo)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Sector económico al que pertenece tu empleo actual" id="qt_2_11_r_3" value="Terciario (Educativo y servicios profesionales, turismo, telecomunicaciones, servicios financieros y bancos, administración pública y defensa)">
              <label for="qt_2_11_r_3">Terciario (Educativo y servicios profesionales, turismo, telecomunicaciones, servicios financieros y bancos, administración pública y defensa)</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_12_container">
          <label id="qt_2_12">Régimen al que pertenece tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Régimen al que pertenece tu empleo actual" id="qt_2_12_r_1" value="Público">
              <label for="qt_2_12_r_1">Público</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Régimen al que pertenece tu empleo actual" id="qt_2_12_r_2" value="Privado">
              <label for="qt_2_12_r_2">Privado</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_13_container">
          <label for="qt_2_13_r" id="qt_2_13">Área o departamento en el que laboras: </label>
          <div class="res">
            <input class="input_text" type="text" name="Área o departamento en el que laboras" id="qt_2_13_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_14_container">
          <label for="qt_2_14_r" id="qt_2_14">Cargo o función que realizas: </label>
          <div class="res">
            <input class="input_text" type="text" name="Cargo o función que realizas" id="qt_2_14_r">
          </div>
        </div>
  
        <span class="section_title">OBJETIVOS EDUCACIONALES</span>
  
        <div class="qt" id="qt_3_1_container">
          <label id="qt_3_1">Cómo egresado(a) has participado en el desarrollo de aplicaciones computacionales creativas e innovadoras: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has participado en el desarrollo de aplicaciones computacionales creativas e innovadoras" id="qt_3_1_r_1" value="Si">
              <label for="qt_3_1_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has participado en el desarrollo de aplicaciones computacionales creativas e innovadoras" id="qt_3_1_r_2" value="No">
              <label for="qt_3_1_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_2_container">
          <label id="qt_3_2">Cómo egresado(a) cuando realizas el diseño de aplicaiones computacionales, has aplicado normas y estándares vigentes: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) cuando realizas el diseño de aplicaiones computacionales, has aplicado normas y estándares vigentes" id="qt_3_2_r_1" value="Si">
              <label for="qt_3_2_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) cuando realizas el diseño de aplicaiones computacionales, has aplicado normas y estándares vigentes" id="qt_3_2_r_2" value="No">
              <label for="qt_3_2_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_3_2 -->
        <div class="qt" id="qt_3_3_container">
          <label for="qt_3_3_r" id="qt_3_3">Si lo has realizado menciona cuál: </label>
          <div class="res">
            <input class="input_text" type="text" name="Si lo has realizado menciona cuál" id="qt_3_3_r">
          </div>
        </div>
  
        <div class="qt" id="qt_3_4_container">
          <label id="qt_3_4">Cómo egresado(a) has participado en el desarrollo de interfaces de atumatización: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has participado en el desarrollo de interfaces de atumatización" id="qt_3_4_r_1" value="Si">
              <label for="qt_3_4_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has participado en el desarrollo de interfaces de atumatización" id="qt_3_4_r_2" value="No">
              <label for="qt_3_4_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_5_container">
          <label id="qt_3_5">Cómo egresado(a) has desarrollado sistemas integrales descentralizados, como redes de computadoras, bases de datos distribuidas, sistemas ERP (Como SAO, COMPAQ), etc.: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has desarrollado sistemas integrales descentralizados, como redes de computadoras, bases de datos distribuidas, sistemas ERP (Como SAO, COMPAQ), etc." id="qt_3_5_r_1" value="Si">
              <label for="qt_3_5_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has desarrollado sistemas integrales descentralizados, como redes de computadoras, bases de datos distribuidas, sistemas ERP (Como SAO, COMPAQ), etc." id="qt_3_5_r_2" value="No">
              <label for="qt_3_5_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_6_container">
          <label id="qt_3_6">Cómo egresado(a) has aplicado estándares internacionales en la integración de soluciones computacionales: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has aplicado estándares internacionales en la integración de soluciones computacionales" id="qt_3_6_r_1" value="Si">
              <label for="qt_3_6_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has aplicado estándares internacionales en la integración de soluciones computacionales" id="qt_3_6_r_2" value="No">
              <label for="qt_3_6_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_7_container">
          <label id="qt_3_7">Cómo egresado(a) has tomado cursos de actualización sobre tecnologías y estándares vigentes en el último año: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has tomado cursos de actualización sobre tecnologías y estándares vigentes en el último año" id="qt_3_7_r_1" value="Si">
              <label for="qt_3_7_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has tomado cursos de actualización sobre tecnologías y estándares vigentes en el último año" id="qt_3_7_r_2" value="No">
              <label for="qt_3_7_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_8_container">
          <label id="qt_3_8">Cómo egresado(a) has hecho uso de modelos y/o herramientas matemáticas para solucionar problemas complejos: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has hecho uso de modelos y/o herramientas matemáticas para solucionar problemas complejos" id="qt_3_8_r_1" value="Sí, desarrollo de modelos y/o algoritmos">
              <label for="qt_3_8_r_1">Sí, desarrollo de modelos y/o algoritmos</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has hecho uso de modelos y/o herramientas matemáticas para solucionar problemas complejos" id="qt_3_8_r_2" value="Si, evaluación de modelos y/o herramientas matemáticas">
              <label for="qt_3_8_r_2">Si, evaluación de modelos y/o herramientas matemáticas</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has hecho uso de modelos y/o herramientas matemáticas para solucionar problemas complejos" id="qt_3_8_r_3" value="No">
              <label for="qt_3_8_r_3">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_9_container">
          <label id="qt_3_9">Cómo egresado(a) has desarrollado modelos y/o algoritmos para solucionar problemas de ingeniería: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has desarrollado modelos y/o algoritmos para solucionar problemas de ingeniería" id="qt_3_9_r_1" value="Sí">
              <label for="qt_3_9_r_1">Sí</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has desarrollado modelos y/o algoritmos para solucionar problemas de ingeniería" id="qt_3_9_r_2" value="No">
              <label for="qt_3_9_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_10_container">
          <label id="qt_3_10">Cómo egresado(a) has evaluado modelos y/o algoritmos para solucionar problemas de ingeniería: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has evaluado modelos y/o algoritmos para solucionar problemas de ingeniería" id="qt_3_10_r_1" value="Sí">
              <label for="qt_3_10_r_1">Sí</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has evaluado modelos y/o algoritmos para solucionar problemas de ingeniería" id="qt_3_10_r_2" value="No">
              <label for="qt_3_10_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_11_container">
          <label id="qt_3_11">Sí la organización en la que te desempeñas es propia: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Sí la organización en la que te desempeñas es propia" id="qt_3_11_r_1" value="El giro es adecuado a tu perfil de egreso">
              <label for="qt_3_11_r_1">El giro es adecuado a tu perfil de egreso</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Sí la organización en la que te desempeñas es propia" id="qt_3_11_r_2" value="Las actividades que desempeñas no son acorde a tu perfil de egreso">
              <label for="qt_3_11_r_2">Las actividades que desempeñas no son acorde a tu perfil de egreso</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_12_container">
          <label id="qt_3_12">Sí la organización en la que ejerces no es propia, que función desempeñas: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Sí la organización en la que ejerces no es propia, que función desempeñas" id="qt_3_12_r_1" value="Como líder de proyectos">
              <label for="qt_3_12_r_1">Como líder de proyectos</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Sí la organización en la que ejerces no es propia, que función desempeñas" id="qt_3_12_r_2" value="Como desarrollador de proyectos">
              <label for="qt_3_12_r_2">Como desarrollador de proyectos</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_13_container">
          <label id="qt_3_13">Cómo egresado(a) has presentado artículos, carteles científicos, reportes técnicos o presentaciones electrónicas dentro de tus labores: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has presentado artículos, carteles científicos, reportes técnicos o presentaciones electrónicas dentro de tus labores" id="qt_3_13_r_1" value="Si">
              <label for="qt_3_13_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has presentado artículos, carteles científicos, reportes técnicos o presentaciones electrónicas dentro de tus labores" id="qt_3_13_r_2" value="No">
              <label for="qt_3_13_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_3_12 -->
        <div class="qt" id="qt_3_14_container">
          <label for="qt_3_14_r" id="qt_3_14">Sí tu respuesta es afirmativa especifica cuál: </label>
          <div class="res">
            <input class="input_text" type="text" name="Sí tu respuesta es afirmativa especifica cuál" id="qt_3_14_r">
          </div>
        </div>
  
        <div class="qt" id="qt_3_15_container">
          <label id="qt_3_15">Cómo egresado(a) has defendido ante audiencias tus propuestas de soluciones tecnológicas: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has defendido ante audiencias tus propuestas de soluciones tecnológicas" id="qt_3_15_r_1" value="Si">
              <label for="qt_3_15_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) has defendido ante audiencias tus propuestas de soluciones tecnológicas" id="qt_3_15_r_2" value="No">
              <label for="qt_3_15_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_16_container">
          <label id="qt_3_16">Cómo egresado(a) identificas los valores éticos de la empresa: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) identificas los valores éticos de la empresa" id="qt_3_16_r_1" value="Si">
              <label for="qt_3_16_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) identificas los valores éticos de la empresa" id="qt_3_16_r_2" value="No">
              <label for="qt_3_16_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_17_container">
          <label id="qt_3_17">Cómo egresado(a) participas en el desarrollo de la planeación estratégica dentro los proyectos específicos: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) participas en el desarrollo de la planeación estratégica dentro los proyectos específicos" id="qt_3_17_r_1" value="Si">
              <label for="qt_3_17_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) participas en el desarrollo de la planeación estratégica dentro los proyectos específicos" id="qt_3_17_r_2" value="No">
              <label for="qt_3_17_r_2">No</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_18_container">
          <label id="qt_3_18">Cómo egresado(a) das seguimiento a la planeación estratégica del proyecto que desarrollas y/o implementas: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) das seguimiento a la planeación estratégica del proyecto que desarrollas y/o implementas" id="qt_3_18_r_1" value="Si">
              <label for="qt_3_18_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cómo egresado(a) das seguimiento a la planeación estratégica del proyecto que desarrollas y/o implementas" id="qt_3_18_r_2" value="No">
              <label for="qt_3_18_r_2">No</label>
            </div>
          </div>
        </div>
  
        <span class="section_title">PERFIL DEL EGRESADO</span>
  
        <div class="qt" id="qt_4_1_container">
          <label id="qt_4_1">Te gustaría tomar algún curso de actualización: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Te gustaría tomar algún curso de actualización" id="qt_4_1_r_1" value="Si">
              <label for="qt_4_1_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Te gustaría tomar algún curso de actualización" id="qt_4_1_r_2" value="No">
              <label for="qt_4_1_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_4_1 -->
        <div class="qt" id="qt_4_2_container">
          <label for="qt_4_2_r" id="qt_4_2">Qué curso desearías tomar: </label>
          <div class="res">
            <input class="input_text" type="text" name="Qué curso desearías tomar" id="qt_4_2_r">
          </div>
        </div>
  
        <div class="qt" id="qt_4_3_container">
          <label id="qt_4_3">Perteneces a alguna Asociación Civil, Cámaras Industriales o Colegios Profesionales: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Perteneces a alguna Asociación Civil, Cámaras Industriales o Colegios Profesionales" id="qt_4_3_r_1" value="Si">
              <label for="qt_4_3_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Perteneces a alguna Asociación Civil, Cámaras Industriales o Colegios Profesionales" id="qt_4_3_r_2" value="No">
              <label for="qt_4_3_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_4_3 -->
        <div class="qt" id="qt_4_4_container">
          <label for="qt_4_4_r" id="qt_4_4">A qué Asociación Civil, Cámaras Industriales o Colegios Profesionales perteneces: </label>
          <div class="res">
            <input class="input_text" type="text" name="A qué Asociación Civil, Cámaras Industriales o Colegios Profesionales perteneces" id="qt_4_4_r">
          </div>
        </div>
  
        <div class="qt" id="qt_4_5_container">
          <label for="qt_4_5_r" id="qt_4_5">Comentarios o sugerencias (Para mejorar la formación profesional de los egresados de tu carrera): </label>
          <div class="res">
            <input class="input_text" type="text" name="Comentarios o sugerencias (Para mejorar la formación profesional de los egresados de tu carrera)" id="qt_4_5_r">
          </div>
        </div>
      </div>

      <input class="submit_form" type="submit" id="submit_form" value="Envíar">
    </form>
  </main>

  <footer></footer>
</body>

</html>
<?php
  session_start();
  require "partials/redirect_to_login.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style_form.css">
  <title>Encuesta para Egresados a partir de 24 meses, Ingenieria en Sistemas Computacionales</title>
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
              <input class="input_radio" type="radio" name="Sexo" id="qt_1_2_r_1" value="Femenino" required>
              <label for="qt_1_2_r_1">Femenino</label>
            </div>
            <div>
              <input class="input_radio" type="radio" name="Sexo" id="qt_1_2_r_2" value="Masculino" required>
              <label for="qt_1_2_r_2">Masculino</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_1_3_container">
          <label for="qt_1_3_r" id="qt_1_3">Domicilio actual (Calle, colonia, municipio): <span>*</span></label>
          <div class="res">
            <input class="input_text" type="text" name="Domicilio actual (Calle, colonia, municipio)" id="qt_1_3_r" required>
          </div>
        </div>
  
        <div class="qt" id="qt_1_4_container">
          <label for="qt_1_4_r" id="qt_1_4">Estado donde se localiza tu domicilio actual: <span>*</span></label>
          <div class="res">
            <select name="Estado donde se localiza tu domicilio actual" id="qt_1_4_r" required>
              <option value="Aguascalientes">Aguascalientes</option>
              <option value="Baja California">Baja California</option>
              <option value="Baja California Sur">Baja California Sur</option>
              <option value="Campeche">Campeche</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Chihuahua">Chihuahua</option>
              <option value="Ciudad de M??xico">Ciudad de M??xico</option>
              <option value="Coahuila">Coahuila</option>
              <option value="Colima">Colima</option>
              <option value="Durango">Durango</option>
              <option value="Estado de M??xico">Estado de M??xico</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Guerrero">Guerrero</option>
              <option value="Hidalgo">Hidalgo</option>
              <option value="Jalisco">Jalisco</option>
              <option value="Michoac??n">Michoac??n</option>
              <option value="Morelos">Morelos</option>
              <option value="Nayarit">Nayarit</option>
              <option value="Nuevo Le??n">Nuevo Le??n</option>
              <option value="Oaxaca">Oaxaca</option>
              <option value="Puebla">Puebla</option>
              <option value="Quer??taro">Quer??taro</option>
              <option value="Quintana Roo">Quintana Roo</option>
              <option value="San Luis Potos??">San Luis Potos??</option>
              <option value="Sinaloa">Sinaloa</option>
              <option value="Sonora">Sonora</option>
              <option value="Tabasco">Tabasco</option>
              <option value="Tamaulipas">Tamaulipas</option>
              <option value="Tlaxcala">Tlaxcala</option>
              <option value="Veracruz">Veracruz</option>
              <option value="Yucat??n">Yucat??n</option>
              <option value="Zacatecas">Zacatecas</option>
            </select>
          </div>
        </div>
  
        <div class="qt" id="qt_1_5_container">
          <label for="qt_1_5_r" id="qt_1_5">Correo electr??nico: <span>*</span></label>
          <p>
            Es importante que lo escribas de manera correcta y que sea el que usas regularmente,
            dado que cuando tenemos ofertas laborales se las hacemos llegar por este medio.
          </p>
          <div class="res">
            <input class="input_text" type="text" name="Correo electr??nico" id="qt_1_5_r" required>
          </div>
        </div>
  
        <div class="qt" id="qt_1_6_container">
          <label for="qt_1_6_r" id="qt_1_6">Tel??fono m??vil: <span>*</span></label>
          <div class="res">
            <input class="input_tel" type="tel" name="Tel??fono m??vil" id="qt_1_6_r" required>
          </div>
        </div>
  
        <div class="qt" id="qt_1_7_container">
          <label for="qt_1_7_r" id="qt_1_7">Tel??fono fijo: </label>
          <div class="res">
            <input class="input_tel" type="tel" name="Tel??fono fijo" id="qt_1_7_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_8_container">
          <label for="qt_1_8_r" id="qt_1_8">A??o de ingreso: <span>*</span></label>
          <div class="res">
            <select name="A??o de ingreso" id="qt_1_8_r">
              <option>2016</option>
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
            </select>
          </div>
        </div>
  
        <div class="qt" id="qt_1_9_container">
          <label for="qt_1_9_r" id="qt_1_9">A??o de egreso: <span>*</span></label>
          <div class="res">
            <select name="A??o de egreso" id="qt_1_9_r">
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
            </select>
          </div>
        </div>
  
        <div class="qt" id="qt_1_10_container">
          <label id="qt_1_10">Titulado: <span>*</span></label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Titulado" id="qt_1_10_r_1" value="Si">
              <label for="qt_1_10_r_1">Si</label>
            </div>
            <div>
              <input class="input_radio" type="radio" name="Titulado" id="qt_1_10_r_2" value="No">
              <label for="qt_1_10_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_1_10 -->
        <div class="qt" id="qt_1_11_container">
          <label for="qt_1_11_r" id="qt_1_11">Modalidad de titulaci??n: </label>
          <div class="res">
            <input class="input_text" type="text" name="Modalidad de titulaci??n" id="qt_1_11_r">
          </div>
        </div>
  
        <!-- Dependent of qt_1_10 -->
        <div class="qt" id="qt_1_12_container">
          <label for="qt_1_12_r" id="qt_1_12">Explica el motivo: </label>
          <div class="res">
            <input class="input_text" type="text" name="Explica el motivo" id="qt_1_12_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_13_container">
          <label for="qt_1_13_r" id="qt_1_13">Dominio del idioma extranjero (Ingl??s): </label>
          <div class="res">
            <select name="Dominio del idioma extranjero (Ingl??s)" id="qt_1_13_r">
              <option>0%</option>
              <option>20%</option>
              <option>40%</option>
              <option>60%</option>
              <option>80%</option>
            </select>
          </div>
        </div>
  
        <div class="qt" id="qt_1_14_container">
          <label for="qt_1_14" id="qt_1_14">Si dominas otro idioma especifica cual y que porcentaje del mismo: </label>
          <div class="res">
            <input class="input_text" type="text" name="Si dominas otro idioma especifica cual y que porcentaje del mismo" id="qt_1_14">
          </div>
        </div>
  
        <div class="qt" id="qt_1_15_container">
          <label for="qt_1_15_r" id="qt_1_15">Ingresos mensuales: </label>
          <div class="res">
            <input class="input_number" type="number" name="Ingresos mensuales" id="qt_1_15_r">
          </div>
        </div>
  
        <span class="section_title">UBICACI??N LABORAL</span>
  
        <div class="qt" id="qt_2_1_container">
          <label id="qt_2_1">Actividad a la que te dedicas actualmente: <span>*</span></label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Actividad a la que te dedicas actualmente" id="qt_2_1_r_1" value="Trabajas">
              <label for="qt_2_1_r_1">Trabajas</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Actividad a la que te dedicas actualmente" id="qt_2_1_r_2" value="Estudias">
              <label for="qt_2_1_r_2">Estudias</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Actividad a la que te dedicas actualmente" id="qt_2_1_r_3" value="Estudias y trabajas">
              <label for="qt_2_1_r_3">Estudias y trabajas</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Actividad a la que te dedicas actualmente" id="qt_2_1_r_4" value="No estudias ni trabajas">
              <label for="qt_2_1_r_4">No estudias ni trabajas</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_2_container">
          <label id="qt_2_2">Que estudias: </label>
          <div class="res">
            <div>
              <input class="input_checkbox" type="checkbox" name="Que estudias[]" id="qt_2_2_r_1" value="Diplomado">
              <label for="qt_2_2_r_1">Diplomado</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Que estudias[]" id="qt_2_2_r_2" value="Especialidad">
              <label for="qt_2_2_r_2">Especialidad</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Que estudias[]" id="qt_2_2_r_3" value="Maestr??a">
              <label for="qt_2_2_r_3">Maestr??a</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Que estudias[]" id="qt_2_2_r_4" value="Idiomas">
              <label for="qt_2_2_r_4">Idiomas</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Que estudias[]" id="qt_2_2_r_5" value="Otros">
              <label for="qt_2_2_r_5">Otros</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_3_container">
          <label id="qt_2_3">Tiempo transcurrido para obtener tu primer empleo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Tiempo transcurrido para obtener tu primer empleo" id="qt_2_3_r_1" value="Antes de egresar">
              <label for="qt_2_3_r_1">Antes de egresar</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Tiempo transcurrido para obtener tu primer empleo" id="qt_2_3_r_2" value="Menos de 6 meses">
              <label for="qt_2_3_r_2">Menos de 6 meses</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Tiempo transcurrido para obtener tu primer empleo" id="qt_2_3_r_3" value="Entre 6 meses y 1 a??o">
              <label for="qt_2_3_r_3">Entre 6 meses y 1 a??o</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_4_container">
          <label id="qt_2_4">Medio para obtener empleo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Medio para obtener empleo" id="qt_2_4_r_1" value="Bolsa de trabajo del Instituto">
              <label for="qt_2_4_r_1">Bolsa de trabajo del Instituto</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Medio para obtener empleo" id="qt_2_4_r_2" value="Contactos personales">
              <label for="qt_2_4_r_2">Contactos personales</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Medio para obtener empleo" id="qt_2_4_r_3" value="Residencia Profesional">
              <label for="qt_2_4_r_3">Residencia Profesional</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Medio para obtener empleo" id="qt_2_4_r_4" value="Cre?? mi propia empresa">
              <label for="qt_2_4_r_4">Cre?? mi propia empresa</label>
            </div>

            <div>
              <input class="input_radio" type="radio" name="Medio para obtener empleo" id="qt_2_4_r_5" value="Otros">
              <label for="qt_2_4_r_5">Otros</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_5_container">
          <label id="qt_2_5">Antig??edad en el empleo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Antig??edad en el empleo" id="qt_2_5_r_1" value="Menos de un a??o">
              <label for="qt_2_5_r_1">Menos de un a??o</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Antig??edad en el empleo" id="qt_2_5_r_2" value="1 a??o a 2 a??os">
              <label for="qt_2_5_r_2">1 a??o a 2 a??os</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Antig??edad en el empleo" id="qt_2_5_r_3" value="M??s de dos a??os">
              <label for="qt_2_5_r_3">M??s de dos a??os</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_6_container">
          <label id="qt_2_6">Cual es la condici??n de tu empleo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name=">Cual es la condici??n de tu empleo" id="qt_2_6_r_1" value="Base">
              <label for="qt_2_6_r_1">Base</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name=">Cual es la condici??n de tu empleo" id="qt_2_6_r_2" value="Eventual">
              <label for="qt_2_6_r_2">Eventual</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name=">Cual es la condici??n de tu empleo" id="qt_2_6_r_3" value="Contrato">
              <label for="qt_2_6_r_3">Contrato</label>
            </div>

            <div>
              <input class="input_radio" type="radio" name=">Cual es la condici??n de tu empleo" id="qt_2_6_r_4" value="Otros">
              <label for="qt_2_6_r_4">Otros</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_7_container">
          <label for="qt_2_7_r" id="qt_2_7">Nombre de la empresa: </label>
          <div class="res">
            <input class="input_text" type="text" name="Nombre de la empresa" id="qt_2_7_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <!-- Posible cambio de input:text a select -->
        <div class="qt" id="qt_2_8_container">
          <label for="qt_2_8_r" id="qt_2_8">Direcci??n de la empresa (Estado y municipio): </label>
          <div class="res">
            <input class="input_text" type="text" name="Direcci??n de la empresa (Estado y municipio)" id="qt_2_8_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_9_container">
          <label for="qt_2_9_r" id="qt_2_9">Nombre de tu jefe inmediato: </label>
          <p>
            Con la finalidad de aplicarle la encuesta de empleadores, cuyo prop??sito es saber si consideran eficaz el plan de estudios.
          </p>
          <div class="res">
            <input class="input_text" type="text" name="Nombre de tu jefe inmediato" id="qt_2_9_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_10_container">
          <label for="qt_2_10_r" id="qt_2_10">Tel??fono (Si tiene extensi??n an??xala): </label>
          <div class="res">
            <input class="input_tel" type="tel" name="Tel??fono (Si tiene extensi??n an??xala)" id="qt_2_10_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_11_container">
          <label for="qt_2_11_r" id="qt_2_11">Correo electr??nico del mismo: </label>
          <div class="res">
            <input class="input_email" type="email" name="Correo electr??nico del mismo" id="qt_2_11_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_12_container">
          <label for="qt_2_12_r" id="qt_2_12">Actividad o giro de la empresa: </label>
          <div class="res">
            <input class="input_text" type="text" name="Actividad o giro de la empresa" id="qt_2_12_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_13">
          <label id="qt_2_13">Tama??o de la empresa: </label>
          <p>
            De acuerdo al n??mero de trabajadores con los que cuenta.
          </p>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Tama??o de la empresa" id="qt_2_13_r_1" value="Microempresa (1-30)">
              <label for="qt_2_13_r_1">Microempresa (1-30)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Tama??o de la empresa" id="qt_2_13_r_2" value="Peque??a (31-100)">
              <label for="qt_2_13_r_2">Peque??a (31-100)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Tama??o de la empresa" id="qt_2_13_r_3" value="Mediana (101-500)">
              <label for="qt_2_13_r_3">Mediana (101-500)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Tama??o de la empresa" id="qt_2_13_r_4" value="Grande (M??s de 500)">
              <label for="qt_2_13_r_4">Grande (M??s de 500)</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_14_container">
          <label for="qt_2_14_r" id="qt_2_14">??rea o departamento en el que laboras: </label>
          <div class="res">
            <input class="input_text" type="text" name="??rea o departamento en el que laboras" id="qt_2_14_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_15_container">
          <label for="qt_2_15_r" id="qt_2_15">Cargo o funci??n que realizas: </label>
          <div class="res">
            <input class="input_text" type="text" name="Cargo o funci??n que realizas" id="qt_2_15_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_16_container">
          <label id="qt_2_16">El ??rea donde laboras es de acuerdo a tu perfil: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="El ??rea donde laboras es de acuerdo a tu perfil" id="qt_2_16_r_1" value="Si">
              <label for="qt_2_16_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="El ??rea donde laboras es de acuerdo a tu perfil" id="qt_2_16_r_2" value="No">
              <label for="qt_2_16_r_2">No</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="El ??rea donde laboras es de acuerdo a tu perfil" id="qt_2_16_r_3" value="Parcialmente">
              <label for="qt_2_16_r_3">Parcialmente</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_17_container">
          <label id="qt_2_17">Sector econ??mico al que pertenece tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Sector econ??mico al que pertenece tu empleo actual" id="qt_2_17_r_1" value="Primario (Agroindustria, pesquero, minero)">
              <label for="qt_2_17_r_1">Primario (Agroindustria, pesquero, minero)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Sector econ??mico al que pertenece tu empleo actual" id="qt_2_17_r_2" value="Secundario (Industrial, construcci??n, petr??leo)">
              <label for="qt_2_17_r_2">Secundario (Industrial, construcci??n, petr??leo)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Sector econ??mico al que pertenece tu empleo actual" id="qt_2_17_r_3" value="Terciario (Educativo y servicios profesionales, turismo, telecomunicaciones, servicios financieros y bancos, administraci??n p??blica y defensa)">
              <label for="qt_2_17_r_3">Terciario (Educativo y servicios profesionales, turismo, telecomunicaciones, servicios financieros y bancos, administraci??n p??blica y defensa)</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_18_container">
          <label id="qt_2_18">R??gimen al que pertenece tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="R??gimen al que pertenece tu empleo actual" id="qt_2_18_r_1" value="P??blico">
              <label for="qt_2_18_r_1">P??blico</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="R??gimen al que pertenece tu empleo actual" id="qt_2_18_r_2" value="Privado">
              <label for="qt_2_18_r_2">Privado</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_19_container">
          <label id="qt_2_19">Idioma extranjero que utilizas en tu trabajo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Idioma extranjero que utilizas en tu trabajo" id="qt_2_19_r_1" value="Ninguno">
              <label for="qt_2_19_r_1">Ninguno</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Idioma extranjero que utilizas en tu trabajo" id="qt_2_19_r_2" value="Ingl??s">
              <label for="qt_2_19_r_2">Ingl??s</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Idioma extranjero que utilizas en tu trabajo" id="qt_2_19_r_3" value="Franc??s">
              <label for="qt_2_19_r_3">Franc??s</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Idioma extranjero que utilizas en tu trabajo" id="qt_2_19_r_4" value="Alem??n">
              <label for="qt_2_19_r_4">Alem??n</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Idioma extranjero que utilizas en tu trabajo" id="qt_2_19_r_5" value="Otros">
              <label for="qt_2_19_r_5">Otros</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_20_container">
          <label id="qt_2_20">Principales limitaciones profesionales t??cnicas que enfrentas en tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones profesionales t??cnicas que enfrentas en tu empleo actual[]" id="qt_2_20_r_1" value="Falta de conocimientos actualizados">
              <label for="qt_2_20_r_1">Falta de conocimientos actualizados</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones profesionales t??cnicas que enfrentas en tu empleo actual[]" id="qt_2_20_r_2" value="Resoluci??n de problemas">
              <label for="qt_2_20_r_2">Resoluci??n de problemas</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones profesionales t??cnicas que enfrentas en tu empleo actual[]" id="qt_2_20_r_3" value="Falta de lenguaje t??cnico">
              <label for="qt_2_20_r_3">Falta de lenguaje t??cnico</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones profesionales t??cnicas que enfrentas en tu empleo actual[]" id="qt_2_20_r_4" value="Aplicaci??n de conocimientos t??cnicos">
              <label for="qt_2_20_r_4">Aplicaci??n de conocimientos t??cnicos</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_21_container">
          <label id="qt_2_21">Principales limitaciones integrales que enfrentas en tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones integrales que enfrentas en tu empleo actual[]" id="qt_2_21_r_1" value="Comunicaci??n asertiva">
              <label for="qt_2_21_r_1">Comunicaci??n asertiva</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones integrales que enfrentas en tu empleo actual[]" id="qt_2_21_r_2" value="Toma de decisiones">
              <label for="qt_2_21_r_2">Toma de decisiones</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones integrales que enfrentas en tu empleo actual[]" id="qt_2_21_r_3" value="Trabajo en equipo">
              <label for="qt_2_21_r_3">Trabajo en equipo</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones integrales que enfrentas en tu empleo actual[]" id="qt_2_21_r_4" value="Habilidades de liderazgo">
              <label for="qt_2_21_r_4">Habilidades de liderazgo</label>
            </div>

            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones integrales que enfrentas en tu empleo actual[]" id="qt_2_21_r_5" value="Seguridad en si mismo">
              <label for="qt_2_21_r_5">Seguridad en si mismo</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="Principales limitaciones integrales que enfrentas en tu empleo actual[]" id="qt_2_21_r_6" value="Otros">
              <label for="qt_2_21_r_6">Otros</label>
            </div>
          </div>
        </div>
  
        <span class="section_title">RECURSOS PARA EL APRENDIZAJE</span>
  
        <div class="qt" id="qt_3_1_container">
          <label id="qt_3_1">La eficiencia para realizar las actividades laborales en relaci??n con tu formaci??n ha sido: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="La eficiencia para realizar las actividades laborales en relaci??n con tu formaci??n ha sido" id="qt_3_1_r_1" value="Muy eficiente">
              <label for="qt_3_1_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="La eficiencia para realizar las actividades laborales en relaci??n con tu formaci??n ha sido" id="qt_3_1_r_2" value="Eficiente">
              <label for="qt_3_1_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="La eficiencia para realizar las actividades laborales en relaci??n con tu formaci??n ha sido" id="qt_3_1_r_3" value="Poco eficiente">
              <label for="qt_3_1_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="La eficiencia para realizar las actividades laborales en relaci??n con tu formaci??n ha sido" id="qt_3_1_r_4" value="Deficiente">
              <label for="qt_3_1_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_2_container">
          <label id="qt_3_2">C??mo ha sido la relaci??n del trabajo con tu ??rea de formaci??n: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="C??mo ha sido la relaci??n del trabajo con tu ??rea de formaci??n" id="qt_3_2_r_1" value="0">
              <label for="qt_3_2_r_1">0%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="C??mo ha sido la relaci??n del trabajo con tu ??rea de formaci??n" id="qt_3_2_r_2" value="20">
              <label for="qt_3_2_r_2">20%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="C??mo ha sido la relaci??n del trabajo con tu ??rea de formaci??n" id="qt_3_2_r_3" value="40">
              <label for="qt_3_2_r_3">40%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="C??mo ha sido la relaci??n del trabajo con tu ??rea de formaci??n" id="qt_3_2_r_4" value="60">
              <label for="qt_3_2_r_4">60%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="C??mo ha sido la relaci??n del trabajo con tu ??rea de formaci??n" id="qt_3_2_r_5" value="80">
              <label for="qt_3_2_r_5">80%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="C??mo ha sido la relaci??n del trabajo con tu ??rea de formaci??n" id="qt_3_2_r_6" value="100">
              <label for="qt_3_2_r_6">100%</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_3_container">
          <label id="qt_3_3">Calidad de los docentes: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Calidad de los docentes" id="qt_3_3_r_1" value="Muy eficiente">
              <label for="qt_3_3_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Calidad de los docentes" id="qt_3_3_r_2" value="Eficiente">
              <label for="qt_3_3_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Calidad de los docentes" id="qt_3_3_r_3" value="Poco eficiente">
              <label for="qt_3_3_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Calidad de los docentes" id="qt_3_3_r_4" value="Deficiente">
              <label for="qt_3_3_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_4_container">
          <label id="qt_3_4">Plan de estudios: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Plan de estudios" id="qt_3_4_r_1" value="Muy eficiente">
              <label for="qt_3_4_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Plan de estudios" id="qt_3_4_r_2" value="Eficiente">
              <label for="qt_3_4_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Plan de estudios" id="qt_3_4_r_3" value="Poco eficiente">
              <label for="qt_3_4_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Plan de estudios" id="qt_3_4_r_4" value="Deficiente">
              <label for="qt_3_4_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_5_container">
          <label id="qt_3_5">Opotunidad de participar en proyectos de investigaci??n y desarrollo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Opotunidad de participar en proyectos de investigaci??n y desarrollo" id="qt_3_5_r_1" value="Muy eficiente">
              <label for="qt_3_5_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Opotunidad de participar en proyectos de investigaci??n y desarrollo" id="qt_3_5_r_2" value="Eficiente">
              <label for="qt_3_5_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Opotunidad de participar en proyectos de investigaci??n y desarrollo" id="qt_3_5_r_3" value="Poco eficiente">
              <label for="qt_3_5_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Opotunidad de participar en proyectos de investigaci??n y desarrollo" id="qt_3_5_r_4" value="Deficiente">
              <label for="qt_3_5_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_6_container">
          <label id="qt_3_6">??nfasis en la investigaci??n dentro del proceso de aprendizaje: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="??nfasis en la investigaci??n dentro del proceso de aprendizaje" id="qt_3_6_r_1" value="Muy eficiente">
              <label for="qt_3_6_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="??nfasis en la investigaci??n dentro del proceso de aprendizaje" id="qt_3_6_r_2" value="Eficiente">
              <label for="qt_3_6_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="??nfasis en la investigaci??n dentro del proceso de aprendizaje" id="qt_3_6_r_3" value="Poco eficiente">
              <label for="qt_3_6_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="??nfasis en la investigaci??n dentro del proceso de aprendizaje" id="qt_3_6_r_4" value="Deficiente">
              <label for="qt_3_6_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_7_container">
          <label id="qt_3_7">Infraestructura: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Infraestructura" id="qt_3_7_r_1" value="Muy eficiente">
              <label for="qt_3_7_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Infraestructura" id="qt_3_7_r_2" value="Eficiente">
              <label for="qt_3_7_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Infraestructura" id="qt_3_7_r_3" value="Poco eficiente">
              <label for="qt_3_7_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Infraestructura" id="qt_3_7_r_4" value="Deficiente">
              <label for="qt_3_7_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <span class="section_title">DESEMPE??O PROFESIONAL DE LOS EGRESADOS</span>
  
        <div class="qt" id="qt_4_1_container">
          <label id="qt_4_1">C??mo calificas tu formaci??n acad??mica con respecto a tu desempe??o laboral: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="C??mo calificas tu formaci??n acad??mica con respecto a tu desempe??o laboral" id="qt_4_1_r_1" value="Muy eficiente">
              <label for="qt_4_1_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="C??mo calificas tu formaci??n acad??mica con respecto a tu desempe??o laboral" id="qt_4_1_r_2" value="Eficiente">
              <label for="qt_4_1_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="C??mo calificas tu formaci??n acad??mica con respecto a tu desempe??o laboral" id="qt_4_1_r_3" value="Poco eficiente">
              <label for="qt_4_1_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="C??mo calificas tu formaci??n acad??mica con respecto a tu desempe??o laboral" id="qt_4_1_r_4" value="Deficiente">
              <label for="qt_4_1_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_4_2_container">
          <label id="qt_4_2">La experiencia obtenida a trav??s de la Residencia Profesional ha sido: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="La experiencia obtenida a trav??s de la Residencia Profesional ha sido" id="qt_4_2_r_1" value="Muy eficiente">
              <label for="qt_4_2_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="La experiencia obtenida a trav??s de la Residencia Profesional ha sido" id="qt_4_2_r_2" value="Eficiente">
              <label for="qt_4_2_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="La experiencia obtenida a trav??s de la Residencia Profesional ha sido" id="qt_4_2_r_3" value="Poco eficiente">
              <label for="qt_4_2_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="La experiencia obtenida a trav??s de la Residencia Profesional ha sido" id="qt_4_2_r_4" value="Deficiente">
              <label for="qt_4_2_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_4_3_container">
          <label id="qt_4_3">Cu??l ha sido la utilidad de la Residencia Profesional para tu desarrollo laboral y profesional: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Cu??l ha sido la utilidad de la Residencia Profesional para tu desarrollo laboral y profesional" id="qt_4_3_r_1" value="Muy eficiente">
              <label for="qt_4_3_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cu??l ha sido la utilidad de la Residencia Profesional para tu desarrollo laboral y profesional" id="qt_4_3_r_2" value="Eficiente">
              <label for="qt_4_3_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cu??l ha sido la utilidad de la Residencia Profesional para tu desarrollo laboral y profesional" id="qt_4_3_r_3" value="Poco eficiente">
              <label for="qt_4_3_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Cu??l ha sido la utilidad de la Residencia Profesional para tu desarrollo laboral y profesional" id="qt_4_3_r_4" value="Deficiente">
              <label for="qt_4_3_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_4_4_container">
          <label id="qt_4_4">La satisfacci??n acad??mica que te brind?? el programa educativo ha sido: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="La satisfacci??n acad??mica que te brind?? el programa educativo ha sido" id="qt_4_4_r_1" value="Muy eficiente">
              <label for="qt_4_4_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="La satisfacci??n acad??mica que te brind?? el programa educativo ha sido" id="qt_4_4_r_2" value="Eficiente">
              <label for="qt_4_4_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="La satisfacci??n acad??mica que te brind?? el programa educativo ha sido" id="qt_4_4_r_3" value="Poco eficiente">
              <label for="qt_4_4_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="La satisfacci??n acad??mica que te brind?? el programa educativo ha sido" id="qt_4_4_r_4" value="Deficiente">
              <label for="qt_4_4_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_4_5-15_container">
          <label>En base a tu experiencia laboral, contesta como corresponda: </label>
          <div class="res_tb_options">
            <label>Si</label>
            <label>No</label>
          </div>
          <div class="res_tb">
            <div id="qt_4_5_container">
              <label id="qt_4_5">Soy capaz de dise??ar, configurar y administrar redes computacionales aplicando las normas y est??ndares vigentes:</label>
              <input class="input_radio" type="radio" name="Soy capaz de dise??ar, configurar y administrar redes computacionales aplicando las normas y est??ndares vigentes" id="qt_4_5_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de dise??ar, configurar y administrar redes computacionales aplicando las normas y est??ndares vigentes" id="qt_4_5_r_2" value="No">
            </div>
  
            <div id="qt_4_6_container">
              <label id="qt_4_6">Soy capaz de desarrollar, implementar y administrar software de sistemas o de aplicaci??n que cumpla con los est??ndares de calidad con el fin de apoyar la productividad y competitividad de las organizaciones:</label>
              <input class="input_radio" type="radio" name="Soy capaz de desarrollar, implementar y administrar software de sistemas o de aplicaci??n que cumpla con los est??ndares de calidad con el fin de apoyar la productividad y competitividad de las organizaciones" id="qt_4_6_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de desarrollar, implementar y administrar software de sistemas o de aplicaci??n que cumpla con los est??ndares de calidad con el fin de apoyar la productividad y competitividad de las organizaciones" id="qt_4_6_r_2" value="No">
            </div>
  
            <div id="qt_4_7_container">
              <label id="qt_4_7">Soy capaz de coordinar y participar en proyectos interdisciplinarios:</label>
              <input class="input_radio" type="radio" name="Soy capaz de coordinar y participar en proyectos interdisciplinarios" id="qt_4_7_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de coordinar y participar en proyectos interdisciplinarios" id="qt_4_7_r_2" value="No">
            </div>
  
            <div id="qt_4_8_container">
              <label id="qt_4_8">Soy capaz de dise??ar e implementar interfaces hombre-m??quina y m??quina-m??quina para la automatizaci??n de sistemas:</label>
              <input class="input_radio" type="radio" name="Soy capaz de dise??ar e implementar interfaces hombre-m??quina y m??quina-m??quina para la automatizaci??n de sistemas" id="qt_4_8_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de dise??ar e implementar interfaces hombre-m??quina y m??quina-m??quina para la automatizaci??n de sistemas" id="qt_4_8_r_2" value="No">
            </div>
  
            <div id="qt_4_9_container">
              <label id="qt_4_9">Soy capaz de identificar y comprender las tecnolog??as de hardware para proponer, desarrollar y mantener aplicaciones eficientes:</label>
              <input class="input_radio" type="radio" name="Soy capaz de identificar y comprender las tecnolog??as de hardware para proponer, desarrollar y mantener aplicaciones eficientes" id="qt_4_9_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de identificar y comprender las tecnolog??as de hardware para proponer, desarrollar y mantener aplicaciones eficientes" id="qt_4_9_r_2" value="No">
            </div>
  
            <div id="qt_4_10_container">
              <label id="qt_4_10">Soy capaz de dise??ar, desarrollar y administrar bases de datos conforme a requerimientos definidos, normas organizacionales de manejo y seguridad de la informaci??n, utilizando tecnolog??as emergentes:</label>
              <input class="input_radio" type="radio" name="Soy capaz de dise??ar, desarrollar y administrar bases de datos conforme a requerimientos definidos, normas organizacionales de manejo y seguridad de la informaci??n, utilizando tecnolog??as emergentes" id="qt_4_10_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de dise??ar, desarrollar y administrar bases de datos conforme a requerimientos definidos, normas organizacionales de manejo y seguridad de la informaci??n, utilizando tecnolog??as emergentes" id="qt_4_10_r_2" value="No">
            </div>
  
            <div id="qt_4_11_container">
              <label id="qt_4_11">Soy capaz de integrar soluciones computacionales con diferentes tecnolog??as, plataformas o dispositivos:</label>
              <input class="input_radio" type="radio" name="Soy capaz de integrar soluciones computacionales con diferentes tecnolog??as, plataformas o dispositivos" id="qt_4_11_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de integrar soluciones computacionales con diferentes tecnolog??as, plataformas o dispositivos" id="qt_4_11_r_2" value="No">
            </div>
  
            <div id="qt_4_12_container">
              <label id="qt_4_12">Soy capaz de desarrollar una visi??n empresarial para detectar ??rea de oportunidad que permitan emprender y desarrollar proyectos aplicando las tecnolog??as de la informaci??n y comunicaci??n:</label>
              <input class="input_radio" type="radio" name="Soy capaz de desarrollar una visi??n empresarial para detectar ??rea de oportunidad que permitan emprender y desarrollar proyectos aplicando las tecnolog??as de la informaci??n y comunicaci??n" id="qt_4_12_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de desarrollar una visi??n empresarial para detectar ??rea de oportunidad que permitan emprender y desarrollar proyectos aplicando las tecnolog??as de la informaci??n y comunicaci??n" id="qt_4_12_r_2" value="No">
            </div>
  
            <div id="qt_4_13_container">
              <label id="qt_4_13">Soy capaz de desempe??ar actividades profesionales considerando los aspectos legales, ??ticos, sociales y de desarrollo sustentable:</label>
              <input class="input_radio" type="radio" name="Soy capaz de desempe??ar actividades profesionales considerando los aspectos legales, ??ticos, sociales y de desarrollo sustentable" id="qt_4_13_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de desempe??ar actividades profesionales considerando los aspectos legales, ??ticos, sociales y de desarrollo sustentable" id="qt_4_13_r_2" value="No">
            </div>
  
            <div id="qt_4_14_container">
              <label id="qt_4_14">Soy capaz de poseer habilidades metodol??gicas de investigaci??n que fortalezcan el desarrollo cultural, cient??fico y tecnol??gico en el ??mbito de sistemas computacionales y disciplinas afines:</label>
              <input class="input_radio" type="radio" name="Soy capaz de poseer habilidades metodol??gicas de investigaci??n que fortalezcan el desarrollo cultural, cient??fico y tecnol??gico en el ??mbito de sistemas computacionales y disciplinas afines" id="qt_4_14_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de poseer habilidades metodol??gicas de investigaci??n que fortalezcan el desarrollo cultural, cient??fico y tecnol??gico en el ??mbito de sistemas computacionales y disciplinas afines" id="qt_4_14_r_2" value="No">
            </div>
  
            <div id="qt_4_15_container">
              <label id="qt_4_15">Soy capaz de seleccionar y aplicar herramientas matem??ticas para el modelado, dise??o y desarrollo de tecnolog??a computacional:</label>
              <input class="input_radio" type="radio" name="Soy capaz de seleccionar y aplicar herramientas matem??ticas para el modelado, dise??o y desarrollo de tecnolog??a computacional" id="qt_4_15_r_1" value="Si">
              <input class="input_radio" type="radio" name="Soy capaz de seleccionar y aplicar herramientas matem??ticas para el modelado, dise??o y desarrollo de tecnolog??a computacional" id="qt_4_15_r_2" value="No">
            </div>
          </div>
        </div>
  
        <span class="section_title">SUPERACI??N PROFESIONAL Y ACTUALIZACI??N</span>
  
        <div class="qt" id="qt_5_1_container">
          <label id="qt_5_1">Te gustaria tomar alg??n curso de actualizaci??n: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Te gustaria tomar alg??n curso de actualizaci??n" id="qt_5_1_r_1" value="Si">
              <label for="qt_5_1_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Te gustaria tomar alg??n curso de actualizaci??n" id="qt_5_1_r_2" value="No">
              <label for="qt_5_1_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_5_1 -->
        <div class="qt" id="qt_5_2_container">
          <label for="qt_5_2_r" id="qt_5_2">Si tu respuesta es afirmativa, qu?? curso te gustar??a tomar: </label>
          <div class="res">
            <input class="input_text" type="text" name="Si tu respuesta es afirmativa, qu?? curso te gustar??a tomar" id="qt_5_2_r">
          </div>
        </div>
  
        <div class="qt" id="qt_5_3_container">
          <label id="qt_5_3">Perteneces a alguna Asociaci??n Civil, C??maras Industriales o Colegios Profesionales: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="Perteneces a alguna Asociaci??n Civil, C??maras Industriales o Colegios Profesionales" id="qt_5_3_r_1" value="Si">
              <label for="qt_5_3_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="Perteneces a alguna Asociaci??n Civil, C??maras Industriales o Colegios Profesionales" id="qt_5_3_r_2" value="No">
              <label for="qt_5_3_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_5_3 -->
        <div class="qt" id="qt_5_4_container">
          <label for="qt_5_4_r" id="qt_5_4">Cu??l: </label>
          <div class="res">
            <input class="input_text" type="text" name="Cu??l" id="qt_5_4_r">
          </div>
        </div>
  
        <div class="qt" id="qt_5_5_container">
          <label for="qt_5_5_r" id="qt_5_5">Comentarios o sugerencias (Para mejorar la formaci??n profesional de los egresados de tu carrera): </label>
          <div class="res">
            <input class="input_text" type="text" name="Comentarios o sugerencias (Para mejorar la formaci??n profesional de los egresados de tu carrera)" id="qt_5_5_r">
          </div>
        </div>
  
        <span class="section_title">!GRACIAS POR TU COLABORACI??N??</span>
      </div>
      
      <input class="submit_form" type="submit" id="submit_form" value="Env??ar">
    </form>
  </main>

  <footer></footer>
</body>

</html>
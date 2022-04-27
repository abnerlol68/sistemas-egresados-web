<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style_form.css">
  <script defer src="./js/form_twenty_four_months.js"></script>
  <title>Encuesta para Egresados a partir de 24 meses, Ingenieria en Sistemas Computacionales</title>
</head>

<body>
  <header></header>

  <main>
    <form action="Controller/form_twenty_four_months_ctrl.php" method="POST">
      <div class="content_form">
        <span class="section_title">PERFIL DEL EGRESADO</span>
  
        <div class="qt" id="qt_1_1_container">
          <label for="qt_1_1_r" id="qt_1_1">Nombre Completo: <span>*</span></label>
          <div class="res">
            <input class="input_text" type="text" name="qt_1_1_r" id="qt_1_1_r" required>
          </div>
        </div>
  
        <div class="qt" id="qt_1_2_container">
          <label id="qt_1_2">Sexo: <span>*</span></label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_1_2" id="qt_1_2_r_1" value="Femenino">
              <label for="qt_1_2_r_1">Femenino</label>
            </div>
            <div>
              <input class="input_radio" type="radio" name="qt_1_2" id="qt_1_2_r_2" value="Masculino">
              <label for="qt_1_2_r_2">Masculino</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_1_3_container">
          <label for="qt_1_3_r" id="qt_1_3">Domicilio actual (Calle, colonia, municipio): </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_1_3_r" id="qt_1_3_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_4_container">
          <label for="qt_1_4_r" id="qt_1_4">Estado donde se localiza tu domicilio actual: </label>
          <div class="res">
            <select name="qt_1_4_r" id="qt_1_4_r">
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
          <label for="qt_1_5_r" id="qt_1_5">Correo electrónico: </label>
          <p>
            Es importante que lo escribas de manera correcta y que sea el que usas regularmente,
            dado que cuando tenemos ofertas laborales se las hacemos llegar por este medio.
          </p>
          <div class="res">
            <input class="input_text" type="text" name="qt_1_5_r" id="qt_1_5_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_6_container">
          <label for="qt_1_6_r" id="qt_1_6">Teléfono móvil: </label>
          <div class="res">
            <input class="input_tel" type="tel" name="qt_1_6_r" id="qt_1_6_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_7_container">
          <label for="qt_1_7_r" id="qt_1_7">Teléfono fijo: </label>
          <div class="res">
            <input class="input_tel" type="tel" name="qt_1_7_r" id="qt_1_7_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_8_container">
          <label for="qt_1_8_r" id="qt_1_8">Año de ingreso: <span>*</span></label>
          <div class="res">
            <select name="qt_1_8_r" id="qt_1_8_r">
              <option>2016</option>
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
            </select>
          </div>
        </div>
  
        <div class="qt" id="qt_1_9_container">
          <label for="qt_1_9_r" id="qt_1_9">Año de egreso: <span>*</span></label>
          <div class="res">
            <select name="qt_1_9_r" id="qt_1_9_r">
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
              <input class="input_radio" type="radio" name="qt_1_10" id="qt_1_10_r_1" value="Si">
              <label for="qt_1_10_r_1">Si</label>
            </div>
            <div>
              <input class="input_radio" type="radio" name="qt_1_10" id="qt_1_10_r_2" value="No">
              <label for="qt_1_10_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_1_10 -->
        <div class="qt" id="qt_1_11_container">
          <label for="qt_1_11_r" id="qt_1_11">Modalidad de titulación: </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_1_11_r" id="qt_1_11_r">
          </div>
        </div>
  
        <!-- Dependent of qt_1_10 -->
        <div class="qt" id="qt_1_12_container">
          <label for="qt_1_12_r" id="qt_1_12">Explica el motivo: </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_1_12_r" id="qt_1_12_r">
          </div>
        </div>
  
        <div class="qt" id="qt_1_13_container">
          <label for="qt_1_13_r" id="qt_1_13">Dominio del idioma extranjero (Inglés): </label>
          <div class="res">
            <select name="qt_1_13_r" id="qt_1_13_r">
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
            <input class="input_text" type="text" name="qt_1_14" id="qt_1_14">
          </div>
        </div>
  
        <div class="qt" id="qt_1_15_container">
          <label for="qt_1_15_r" id="qt_1_15">Ingresos mensuales: </label>
          <div class="res">
            <input class="input_number" type="number" name="qt_1_15_r" id="qt_1_15_r">
          </div>
        </div>
  
        <span class="section_title">UBICACIÓN LABORAL</span>
  
        <div class="qt" id="qt_2_1_container">
          <label id="qt_2_1">Actividad a la que te dedicas actualmente: <span>*</span></label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_1" id="qt_2_1_r_1" value="Trabajas">
              <label for="qt_2_1_r_1">Trabajas</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_1" id="qt_2_1_r_2" value="Estudias">
              <label for="qt_2_1_r_2">Estudias</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_1" id="qt_2_1_r_3" value="Estudias y trabajas">
              <label for="qt_2_1_r_3">Estudias y trabajas</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_1" id="qt_2_1_r_4" value="No estudias ni trabajas">
              <label for="qt_2_1_r_4">No estudias ni trabajas</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_2_container">
          <label id="qt_2_2">Que estudias: </label>
          <div class="res">
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_2_r_1" id="qt_2_2_r_1" value="Diplomado">
              <label for="qt_2_2_r_1">Diplomado</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_2_r_2" id="qt_2_2_r_2" value="Especialidad">
              <label for="qt_2_2_r_2">Especialidad</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_2_r_3" id="qt_2_2_r_3" value="Maestría">
              <label for="qt_2_2_r_3">Maestría</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_2_r_4" id="qt_2_2_r_4" value="Idiomas">
              <label for="qt_2_2_r_4">Idiomas</label>
            </div>
  
            <!-- Nose como capturar este campo xd -->
            <!-- Tocara investigar -->
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_2_r_5" id="qt_2_2_r_5" value="Otros">
              <label for="qt_2_2_r_5">Otros: </label>
              <input class="input_text" type="text" name="qt_2_2_r_5_text" id="qt_2_2_r_5_text" value="">
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_3_container">
          <label id="qt_2_3">Tiempo transcurrido para obtener tu primer empleo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_3" id="qt_2_3_r_1" value="Antes de egresar">
              <label for="qt_2_3_r_1">Antes de egresar</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_3" id="qt_2_3_r_2" value="Menos de 6 meses">
              <label for="qt_2_3_r_2">Menos de 6 meses</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_3" id="qt_2_3_r_3" value="Entre 6 meses y 1 año">
              <label for="qt_2_3_r_3">Entre 6 meses y 1 año</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_4_container">
          <label id="qt_2_4">Medio para obtener empleo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_4" id="qt_2_4_r_1" value="Bolsa de trabajo del Instituto">
              <label for="qt_2_4_r_1">Bolsa de trabajo del Instituto</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_4" id="qt_2_4_r_2" value="Contactos personales">
              <label for="qt_2_4_r_2">Contactos personales</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_4" id="qt_2_4_r_3" value="Residencia Profesional">
              <label for="qt_2_4_r_3">Residencia Profesional</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_4" id="qt_2_4_r_4" value="Creé mi propia empresa">
              <label for="qt_2_4_r_4">Creé mi propia empresa</label>
            </div>
  
            <!-- Nose como capturar este campo xd -->
            <!-- Tocara investigar -->
            <div>
              <input class="input_radio" type="radio" name="qt_2_4" id="qt_2_4_r_5" value="Otros">
              <label for="qt_2_4_r_5">Otros: </label>
              <input class="input_text" type="text" name="qt_2_4_r_5_text" id="qt_2_4_r_5_text" value="">
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_5_container">
          <label id="qt_2_5">Antigüedad en el empleo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_5" id="qt_2_5_r_1" value="Menos de un año">
              <label for="qt_2_5_r_1">Menos de un año</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_5" id="qt_2_5_r_2" value="1 año a 2 años">
              <label for="qt_2_5_r_2">1 año a 2 años</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_5" id="qt_2_5_r_3" value="Más de dos años">
              <label for="qt_2_5_r_3">Más de dos años</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_6_container">
          <label id="qt_2_6">Cual es la condición de tu empleo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_6" id="qt_2_6_r_1" value="Base">
              <label for="qt_2_6_r_1">Base</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_6" id="qt_2_6_r_2" value="Eventual">
              <label for="qt_2_6_r_2">Eventual</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_6" id="qt_2_6_r_3" value="Contrato">
              <label for="qt_2_6_r_3">Contrato</label>
            </div>
  
            <!-- Nose como capturar este campo xd -->
            <!-- Tocara investigar -->
            <div>
              <input class="input_radio" type="radio" name="qt_2_6" id="qt_2_6_r_4" value="Otros">
              <label for="qt_2_6_r_4">Otros: </label>
              <input class="input_text" type="text" name="qt_2_6_r_4_text" id="qt_2_6_r_4_text" value="">
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_7_container">
          <label for="qt_2_7_r" id="qt_2_7">Nombre de la empresa: </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_2_7_r" id="qt_2_7_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <!-- Posible cambio de input:text a select -->
        <div class="qt" id="qt_2_8_container">
          <label for="qt_2_8_r" id="qt_2_8">Dirección de la empresa (Estado y municipio): </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_2_8_r" id="qt_2_8_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_9_container">
          <label for="qt_2_9_r" id="qt_2_9">Nombre de tu jefe inmediato: </label>
          <p>
            Con la finalidad de aplicarle la encuesta de empleadores, cuyo propósito es saber si consideran eficaz el plan de estudios.
          </p>
          <div class="res">
            <input class="input_text" type="text" name="qt_2_9_r" id="qt_2_9_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_10_container">
          <label for="qt_2_10_r" id="qt_2_10">Teléfono (Si tiene extensión anéxala): </label>
          <div class="res">
            <input class="input_tel" type="tel" name="qt_2_10_r" id="qt_2_10_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_11_container">
          <label for="qt_2_11_r" id="qt_2_11">Correo electrónico del mismo: </label>
          <div class="res">
            <input class="input_email" type="email" name="qt_2_11_r" id="qt_2_11_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_12_container">
          <label for="qt_2_12_r" id="qt_2_12">Actividad o giro de la empresa: </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_2_12_r" id="qt_2_12_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_13">
          <label id="qt_2_13">Tamaño de la empresa: </label>
          <p>
            De acuerdo al número de trabajadores con los que cuenta.
          </p>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_13" id="qt_2_13_r_1" value="Microempresa (1-30)">
              <label for="qt_2_13_r_1">Microempresa (1-30)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_13" id="qt_2_13_r_2" value="Pequeña (31-100)">
              <label for="qt_2_13_r_2">Pequeña (31-100)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_13" id="qt_2_13_r_3" value="Mediana (101-500)">
              <label for="qt_2_13_r_3">Mediana (101-500)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_13" id="qt_2_13_r_4" value="Grande (Más de 500)">
              <label for="qt_2_13_r_4">Grande (Más de 500)</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_14_container">
          <label for="qt_2_14_r" id="qt_2_14">Área o departamento en el que laboras: </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_2_14_r" id="qt_2_14_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_15_container">
          <label for="qt_2_15_r" id="qt_2_15">Cargo o función que realizas: </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_2_15_r" id="qt_2_15_r">
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_16_container">
          <label id="qt_2_16">El área donde laboras es de acuerdo a tu perfil: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_16" id="qt_2_16_r_1" value="Si">
              <label for="qt_2_16_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_16" id="qt_2_16_r_2" value="No">
              <label for="qt_2_16_r_2">No</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_16" id="qt_2_16_r_3" value="Parcialmente">
              <label for="qt_2_16_r_3">Parcialmente</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_17_container">
          <label id="qt_2_17">Sector económico al que pertenece tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_17" id="qt_2_17_r_1" value="Primario (Agroindustria, pesquero, minero)">
              <label for="qt_2_17_r_1">Primario (Agroindustria, pesquero, minero)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_17" id="qt_2_17_r_2" value="Secundario (Industrial, construcción, petróleo)">
              <label for="qt_2_17_r_2">Secundario (Industrial, construcción, petróleo)</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_17" id="qt_2_17_r_3" value="Terciario (Educativo y servicios profesionales, turismo, telecomunicaciones, servicios financieros y bancos, administración pública y defensa)">
              <label for="qt_2_17_r_3">Terciario (Educativo y servicios profesionales, turismo, telecomunicaciones, servicios financieros y bancos, administración pública y defensa)</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_18_container">
          <label id="qt_2_18">Régimen al que pertenece tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_18" id="qt_2_18_r_1" value="Público">
              <label for="qt_2_18_r_1">Público</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_18" id="qt_2_18_r_2" value="Privado">
              <label for="qt_2_18_r_2">Privado</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_19_container">
          <label id="qt_2_19">Idioma extranjero que utilizas en tu trabajo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_2_19" id="qt_2_19_r_1" value="Ninguno">
              <label for="qt_2_19_r_1">Ninguno</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_19" id="qt_2_19_r_2" value="Inglés">
              <label for="qt_2_19_r_2">Inglés</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_19" id="qt_2_19_r_3" value="Francés">
              <label for="qt_2_19_r_3">Francés</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_2_19" id="qt_2_19_r_4" value="Alemán">
              <label for="qt_2_19_r_4">Alemán</label>
            </div>
  
            <!-- Nose como capturar este campo xd -->
            <!-- Tocara investigar -->
            <div>
              <input class="input_radio" type="radio" name="qt_2_19" id="qt_2_19_r_5" value="Otros">
              <label for="qt_2_19_r_5">Otros: </label>
              <input class="input_text" type="text" name="qt_2_19_r_5_text" id="qt_2_19_r_5_text" value="">
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_20_container">
          <label id="qt_2_20">Principales limitaciones profesionales técnicas que enfrentas en tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_20_r_1" id="qt_2_20_r_1" value="Falta de conocimientos actualizados">
              <label for="qt_2_20_r_1">Falta de conocimientos actualizados</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_20_r_2" id="qt_2_20_r_2" value="Resolución de problemas">
              <label for="qt_2_20_r_2">Resolución de problemas</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_20_r_3" id="qt_2_20_r_3" value="Falta de lenguaje técnico">
              <label for="qt_2_20_r_3">Falta de lenguaje técnico</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_20_r_4" id="qt_2_20_r_4" value="Aplicación de conocimientos técnicos">
              <label for="qt_2_20_r_4">Aplicación de conocimientos técnicos</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_2_1 -->
        <div class="qt" id="qt_2_21_container">
          <label id="qt_2_21">Principales limitaciones profesionales técnicas que enfrentas en tu empleo actual: </label>
          <div class="res">
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_21_r_1" id="qt_2_21_r_1" value="Diplomado">
              <label for="qt_2_21_r_1">Diplomado</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_21_r_2" id="qt_2_21_r_2" value="Especialidad">
              <label for="qt_2_21_r_2">Especialidad</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_21_r_3" id="qt_2_21_r_3" value="Maestría">
              <label for="qt_2_21_r_3">Maestría</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_21_r_4" id="qt_2_21_r_4" value="Idiomas">
              <label for="qt_2_21_r_4">Idiomas</label>
            </div>
  
            <div>
              <input class="input_checkbox" type="checkbox" name="qt_2_21_r_5" id="qt_2_21_r_5" value="Otros">
              <label for="qt_2_21_r_5">Otros: </label>
              <input class="input_text" type="text" name="qt_2_21_r_5_text" id="qt_2_21_r_5_text" value="">
            </div>
          </div>
        </div>
  
        <span class="section_title">RECURSOS PARA EL APRENDIZAJE</span>
  
        <div class="qt" id="qt_3_1_container">
          <label id="qt_3_1">La eficiencia para realizar las actividades laborales en relación con tu formación ha sido: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_3_1" id="qt_3_1_r_1" value="Muy eficiente">
              <label for="qt_3_1_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_1" id="qt_3_1_r_2" value="Eficiente">
              <label for="qt_3_1_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_1" id="qt_3_1_r_3" value="Poco eficiente">
              <label for="qt_3_1_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_1" id="qt_3_1_r_4" value="Deficiente">
              <label for="qt_3_1_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_2_container">
          <label id="qt_3_2">Cómo ha sido la relación del trabajo con tu área de formación: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_3_2" id="qt_3_2_r_1" value="0">
              <label for="qt_3_2_r_1">0%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_2" id="qt_3_2_r_2" value="20">
              <label for="qt_3_2_r_2">20%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_2" id="qt_3_2_r_3" value="40">
              <label for="qt_3_2_r_3">40%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_2" id="qt_3_2_r_4" value="60">
              <label for="qt_3_2_r_4">60%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_2" id="qt_3_2_r_5" value="80">
              <label for="qt_3_2_r_5">80%</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_2" id="qt_3_2_r_6" value="100">
              <label for="qt_3_2_r_6">100%</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_3_container">
          <label id="qt_3_3">Calidad de los docentes: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_3_3" id="qt_3_3_r_1" value="Muy eficiente">
              <label for="qt_3_3_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_3" id="qt_3_3_r_2" value="Eficiente">
              <label for="qt_3_3_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_3" id="qt_3_3_r_3" value="Poco eficiente">
              <label for="qt_3_3_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_3" id="qt_3_3_r_4" value="Deficiente">
              <label for="qt_3_3_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_4_container">
          <label id="qt_3_4">Plan de estudios: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_3_4" id="qt_3_4_r_1" value="Muy eficiente">
              <label for="qt_3_4_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_4" id="qt_3_4_r_2" value="Eficiente">
              <label for="qt_3_4_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_4" id="qt_3_4_r_3" value="Poco eficiente">
              <label for="qt_3_4_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_4" id="qt_3_4_r_4" value="Deficiente">
              <label for="qt_3_4_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_5_container">
          <label id="qt_3_5">Opotunidad de participar en proyectos de investigación y desarrollo: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_3_5" id="qt_3_5_r_1" value="Muy eficiente">
              <label for="qt_3_5_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_5" id="qt_3_5_r_2" value="Eficiente">
              <label for="qt_3_5_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_5" id="qt_3_5_r_3" value="Poco eficiente">
              <label for="qt_3_5_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_5" id="qt_3_5_r_4" value="Deficiente">
              <label for="qt_3_5_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_6_container">
          <label id="qt_3_6">Énfasis en la investigación dentro del proceso de aprendizaje: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_3_6" id="qt_3_6_r_1" value="Muy eficiente">
              <label for="qt_3_6_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_6" id="qt_3_6_r_2" value="Eficiente">
              <label for="qt_3_6_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_6" id="qt_3_6_r_3" value="Poco eficiente">
              <label for="qt_3_6_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_6" id="qt_3_6_r_4" value="Deficiente">
              <label for="qt_3_6_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_3_7_container">
          <label id="qt_3_7">Infraestructura: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_3_7" id="qt_3_7_r_1" value="Muy eficiente">
              <label for="qt_3_7_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_7" id="qt_3_7_r_2" value="Eficiente">
              <label for="qt_3_7_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_7" id="qt_3_7_r_3" value="Poco eficiente">
              <label for="qt_3_7_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_3_7" id="qt_3_7_r_4" value="Deficiente">
              <label for="qt_3_7_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <span class="section_title">DESEMPEÑO PROFESIONAL DE LOS EGRESADOS</span>
  
        <div class="qt" id="qt_4_1_container">
          <label id="qt_4_1">Cómo calificas tu formación académica con respecto a tu desempeño laboral: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_4_1" id="qt_4_1_r_1" value="Muy eficiente">
              <label for="qt_4_1_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_1" id="qt_4_1_r_2" value="Eficiente">
              <label for="qt_4_1_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_1" id="qt_4_1_r_3" value="Poco eficiente">
              <label for="qt_4_1_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_1" id="qt_4_1_r_4" value="Deficiente">
              <label for="qt_4_1_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_4_2_container">
          <label id="qt_4_2">La experiencia obtenida a través de la Residencia Profesional ha sido: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_4_2" id="qt_4_2_r_1" value="Muy eficiente">
              <label for="qt_4_2_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_2" id="qt_4_2_r_2" value="Eficiente">
              <label for="qt_4_2_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_2" id="qt_4_2_r_3" value="Poco eficiente">
              <label for="qt_4_2_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_2" id="qt_4_2_r_4" value="Deficiente">
              <label for="qt_4_2_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_4_3_container">
          <label id="qt_4_3">Cuál ha sido la utilidad de la Residencia Profesional para tu desarrollo laboral y profesional: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_4_3" id="qt_4_3_r_1" value="Muy eficiente">
              <label for="qt_4_3_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_3" id="qt_4_3_r_2" value="Eficiente">
              <label for="qt_4_3_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_3" id="qt_4_3_r_3" value="Poco eficiente">
              <label for="qt_4_3_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_3" id="qt_4_3_r_4" value="Deficiente">
              <label for="qt_4_3_r_4">Deficiente</label>
            </div>
          </div>
        </div>
  
        <div class="qt" id="qt_4_4_container">
          <label id="qt_4_4">La satisfacción académica que te brindó el programa educativo ha sido: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_4_4" id="qt_4_4_r_1" value="Muy eficiente">
              <label for="qt_4_4_r_1">Muy eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_4" id="qt_4_4_r_2" value="Eficiente">
              <label for="qt_4_4_r_2">Eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_4" id="qt_4_4_r_3" value="Poco eficiente">
              <label for="qt_4_4_r_3">Poco eficiente</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_4_4" id="qt_4_4_r_4" value="Deficiente">
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
              <label id="qt_4_5">Soy capaz de diseñar, configurar y administrar redes computacionales aplicando las normas y estándares vigentes:</label>
              <input class="input_radio" type="radio" name="qt_4_5" id="qt_4_5_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_5" id="qt_4_5_r_2" value="No">
            </div>
  
            <div id="qt_4_6_container">
              <label id="qt_4_6">Soy capaz de desarrollar, implementar y administrar software de sistemas o de aplicación que cumpla con los estándares de calidad con el fin de apoyar la productividad y competitividad de las organizaciones:</label>
              <input class="input_radio" type="radio" name="qt_4_6" id="qt_4_6_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_6" id="qt_4_6_r_2" value="No">
            </div>
  
            <div id="qt_4_7_container">
              <label id="qt_4_7">Soy capaz de coordinar y participar en proyectos interdisciplinarios:</label>
              <input class="input_radio" type="radio" name="qt_4_7" id="qt_4_7_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_7" id="qt_4_7_r_2" value="No">
            </div>
  
            <div id="qt_4_8_container">
              <label id="qt_4_8">Soy capaz de diseñar e implementar interfaces hombre-máquina y máquina-máquina para la automatización de sistemas:</label>
              <input class="input_radio" type="radio" name="qt_4_8" id="qt_4_8_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_8" id="qt_4_8_r_2" value="No">
            </div>
  
            <div id="qt_4_9_container">
              <label id="qt_4_9">Soy capaz de identificar y comprender las tecnologías de hardware para proponer, desarrollar y mantener aplicaciones eficientes:</label>
              <input class="input_radio" type="radio" name="qt_4_9" id="qt_4_9_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_9" id="qt_4_9_r_2" value="No">
            </div>
  
            <div id="qt_4_10_container">
              <label id="qt_4_10">Soy capaz de diseñar, desarrollar y administrar bases de datos conforme a requerimientos definidos, normas organizacionales de manejo y seguridad de la información, utilizando tecnologías emergentes:</label>
              <input class="input_radio" type="radio" name="qt_4_10" id="qt_4_10_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_10" id="qt_4_10_r_2" value="No">
            </div>
  
            <div id="qt_4_11_container">
              <label id="qt_4_11">Soy capaz de integrar soluciones computacionales con diferentes tecnologías, plataformas o dispositivos:</label>
              <input class="input_radio" type="radio" name="qt_4_11" id="qt_4_11_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_11" id="qt_4_11_r_2" value="No">
            </div>
  
            <div id="qt_4_12_container">
              <label id="qt_4_12">Soy capaz de desarrollar una visión empresarial para detectar área de oportunidad que permitan emprender y desarrollar proyectos aplicando las tecnologías de la información y comunicación:</label>
              <input class="input_radio" type="radio" name="qt_4_12" id="qt_4_12_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_12" id="qt_4_12_r_2" value="No">
            </div>
  
            <div id="qt_4_13_container">
              <label id="qt_4_13">Soy capaz de desempeñar actividades profesionales considerando los aspectos legales, éticos, sociales y de desarrollo sustentable:</label>
              <input class="input_radio" type="radio" name="qt_4_13" id="qt_4_13_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_13" id="qt_4_13_r_2" value="No">
            </div>
  
            <div id="qt_4_14_container">
              <label id="qt_4_14">Soy capaz de poseer habilidades metodológicas de investigación que fortalezcan el desarrollo cultural, científico y tecnológico en el ámbito de sistemas computacionales y disciplinas afines:</label>
              <input class="input_radio" type="radio" name="qt_4_14" id="qt_4_14_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_14" id="qt_4_14_r_2" value="No">
            </div>
  
            <div id="qt_4_15_container">
              <label id="qt_4_15">Soy capaz de seleccionar y aplicar herramientas matemáticas para el modelado, diseño y desarrollo de tecnología computacional:</label>
              <input class="input_radio" type="radio" name="qt_4_15" id="qt_4_15_r_1" value="Si">
              <input class="input_radio" type="radio" name="qt_4_15" id="qt_4_15_r_2" value="No">
            </div>
          </div>
        </div>
  
        <span class="section_title">SUPERACIÓN PROFESIONAL Y ACTUALIZACIÓN</span>
  
        <div class="qt" id="qt_5_1_container">
          <label id="qt_5_1">La satisfacción académica que te brindó el programa educativo ha sido: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_5_1" id="qt_5_1_r_1" value="Si">
              <label for="qt_5_1_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_5_1" id="qt_5_1_r_2" value="No">
              <label for="qt_5_1_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_5_1 -->
        <div class="qt" id="qt_5_2_container">
          <label for="qt_5_2_r" id="qt_5_2">Si tu respuesta es afirmativa, qué curso te gustaría tomar: </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_5_2_r" id="qt_5_2_r">
          </div>
        </div>
  
        <div class="qt" id="qt_5_3_container">
          <label id="qt_5_3">Perteneces a alguna Asociación Civil, Cámaras Industriales o Colegios Profesionales: </label>
          <div class="res">
            <div>
              <input class="input_radio" type="radio" name="qt_5_3" id="qt_5_3_r_1" value="Si">
              <label for="qt_5_3_r_1">Si</label>
            </div>
  
            <div>
              <input class="input_radio" type="radio" name="qt_5_3" id="qt_5_3_r_2" value="No">
              <label for="qt_5_3_r_2">No</label>
            </div>
          </div>
        </div>
  
        <!-- Dependent of qt_5_3 -->
        <div class="qt" id="qt_5_4_container">
          <label for="qt_5_4_r" id="qt_5_4">Cuál: </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_5_4_r" id="qt_5_4_r">
          </div>
        </div>
  
        <div class="qt" id="qt_5_5_container">
          <label for="qt_5_5_r" id="qt_5_5">Comentarios o sugerencias (Para mejorar la formación profesional de los egresados de tu carrera): </label>
          <div class="res">
            <input class="input_text" type="text" name="qt_5_5_r" id="qt_5_5_r">
          </div>
        </div>
  
        <span class="section_title">!GRACIAS POR TU COLABORACIÓN¡</span>
      </div>
      
      <input class="submit_form" type="submit" id="submit_form" value="Envíar">
    </form>
  </main>

  <footer></footer>
</body>

</html>
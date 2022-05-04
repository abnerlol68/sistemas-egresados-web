<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style_login.css">
  <title>Log In</title>
</head>
<body>
  <main>
    <div class="hero">
      <figure>
        <img src="./img/user.png" alt="user_icon">
      </figure>
      <h2>Registrate aquí</h2>
      <form action="./Controller/login.php" method="POST">
        <div>
          <label for="email">Correo Electrónico</label>
          <input type="email" name="email" id="email" placeholder="" required>
        </div>
        <div>
          <label for="graduate_time">Tiempo de egresado</label>
          <select name="graduate_time" id="graduate_time" required>
            <option value="1">Menos de 24 meses</option>
            <option value="2">Más de 24 meses</option>
          </select>
        </div>
        <input type="submit" value="Log In">
      </form>
    </div>
  </main>
</body>
</html>
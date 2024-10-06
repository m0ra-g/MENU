<html>
<head>
  <title>Registro de Alumnos</title>
</head>
<body>
  <h1>Registro de Alumnos</h1>
  <form action="12.php" method="post">
    <table>
      <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre"></td>
      </tr>
      <tr>
        <td>Correo electrónico:</td>
        <td><input type="email" name="correo"></td>
      </tr>
      <tr>
        <td>Curso:</td>
        <td>
          <select name="curso">
            <option value="1">PHP</option>
            <option value="2">ASP</option>
            <option value="3">JSP</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Registrar"></td>
      </tr>
    </table>
  </form>
</body>
</html>


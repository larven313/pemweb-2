<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Registrasi</title>
</head>

<body>
  <form action="">
    <fieldset>
      <legend>Data User</legend>

      <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" size="20" />
      </div>

      <div>
        <label for="password">password</label>
        <input type="text" name="password" id="password" size="20" />
      </div>

    </fieldset>
    <fieldset>
      <legend>Jus favorit anda :</legend>
      <select name="jus" id="jus" multiple>
        <option value="j1">Jus alpuket</option>
        <option value="j2">Jus Mangga</option>
        <option value="j3">Jus Jeruk</option>
        <option value="j4">Jus Jambu</option>


      </select>
    </fieldset>

    <input type="submit" value="Kirim" name="proses">
    <input type="reset" value="Clear" name="reset">

  </form>
</body>

</html>
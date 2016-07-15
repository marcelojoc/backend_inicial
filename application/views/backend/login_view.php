<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login del sitio_view </title>
  </head>
  <body>
    <p>
      Login del sitio....aqui va el formulario y eso...

    </p>

     <h1>Login de Usuario</h1>
      

      <?php echo form_open('admin/checklogin'); ?>
        <input type="text"     id="username" name="username" placeholder="Usuario" autofocus>
        <input type="password" id="password" name="password" placeholder="Pass">
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      <?php echo form_close(); ?>
  </body>
</html>

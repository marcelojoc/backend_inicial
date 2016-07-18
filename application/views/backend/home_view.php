<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login del sitio_view </title>
  </head>
  <body>


     <h1>Acceso Permitido a: <?php echo $this->session->logged_in['nombre'] 
                             // los datos de sesion se acceden de esa manera
                             // $this->session->logged_in['el nombre del campo']
     ?> 
     </h1>



    <p>

    
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe, 
      distinctio! Tempore blanditiis beatae hic eligendi, voluptatem 
      perspiciatis magni ut natus vero saepe est odit, explicabo facere 
      animi tempora, perferendis?

    </p>


    <a href="login/out">cerrar sesion</a>


  </body>
</html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form action="index.html" method="post">
        <h1> Crear cuenta nueva </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Mi información</legend>
        
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="user_name">

            
          <label for="name">Nombre de usuario:</label>
          <input type="text" id="name" name="user_name">
        
          <label for="email">Email:</label>
          <input type="email" id="mail" name="user_email">
       
          <label for="password">Contraseña:</label>
          <input type="password" id="password"       name="user_password">

          <label for="password">Confirmar Contraseña:</label>
          <input type="password" id="password"       name="user_password">
        
   
          
        </fieldset>
        <fieldset>  
        
          <legend><span class="number">2</span> Mi perfil</legend>
            
          <label for="name">Organización:</label>
          <input type="text" id="name" name="user_name">
        
         <label for="job">Role:</label>
          <select id="job" name="user_job">
            <optgroup label="Selecciona un rol">
              <option value="frontend_developer">Rol 1</option>
              <option value="php_developer">Rol 2</option>
              <option value="python_developer">Rol 3</option>
              <option value="rails_developer">Rol 4</option>
              <option value="web_designer">Rol 5</option>
              
            </optgroup>
          
          </select>
          
        
          
         </fieldset>
       
        <button type="submit">Crear Cuenta</button>
        <p class="message">Ya tienes una cuenta? Iniciar sesión<a href="../POLARIS/form3.php">Iniciar sesión </a></p>
        
       </form>
        </div>
      </div>
      
    </body>
</html>
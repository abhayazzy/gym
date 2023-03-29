
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animated Login From</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="join.css" />
  </head>
  <body>
    <header class="header"  >
       <a href="index.php" class="logo" > <span>SUBHAM</span>The sixpack gym </a>
    
        <div id="menu-btn" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="join.php" id="log"> join now</a>
        </nav>

    </header>

    <div class="login_form_container">
    <form action="connectadmin.php" method="POST">
      <div class="login_form">
        <h2>welcome to fitness jurney</h2>
        <div class="input_group">
          <i class="fa fa-envelope"></i>
          <input
            type="text"
            placeholder="enter your email address"
            class="input_text"
            autocomplete="off"
            name="email"
          />
        </div>
        <div class="input_group">
          <i class='fa fa-key'></i>
          <input
            type="password"
            placeholder="enter your password"
            class="input_text"
            autocomplete="off"
            name="password"
          />
        </div>

        <div>
          
          <input
            type="submit"
            class="btn btn-primary w-100" 
            value="login"
            autocomplete="off"
            name="submit"
          />
        <div class="fotter">
          <a></a>
          <a href="join.php">user login</a>
        </div>
      </div>
      </form>
    </div>

    
    <script src="login.js"></script>
  </body>
</html>

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
      <form action="connect.php" method="POST">
       <div class="login_form">
        <h2>welcome to fitness jurney</h2>
         <div class="input_group">
          <i class="fa fa-user"></i>
          <input
            type="text"
            placeholder="enter your name"
            class="input_text"
            autocomplete="off"
            name="name"
          />
         </div>
          <div class="input_group">
          <i class='fa fa-male'></i>
          <input
            type="number"
            placeholder="enter your weight"
            class="input_text"
            autocomplete="off"
            name="weight"
          />
          </div>
          <div class="input_group">
          <i class='fa fa-calendar-times-o'></i>
          <input
            type="number"
            placeholder="subscription in month"
            class="input_text"
            autocomplete="off"
            name="subscription"
          />
          </div>

          <div class="input_group">
          <i class='fa fa-mobile'></i>
          <input
            type="number"
            placeholder="enter your mobile number"
            class="input_text"
            autocomplete="off"
            name="mobile"
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
          </div>

          <!-- <div class="button_group" id="login_button">
          <a>join</a>
          </div> -->
          <div class="fotter">
          <a></a>
          <a href="admin.php">admin login</a>
          <!-- <form action="admin.php" > <input type="submit"/> admin login</form> -->
         </div>
        </form>
      </div>
    </div>

    
    <script src="login.js"></script>
  </body>
</html>

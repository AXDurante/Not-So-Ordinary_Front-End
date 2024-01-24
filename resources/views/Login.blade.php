<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Login</title>
  </head>
  <body class="login-body">
    <div class="half login-imageHolder"></div>

    <div class="divider"></div>

    <div class="half login-credentialsHolder">
      <form action="" method="post">
        <div class="title-bar">
          <h2>NOT SO ORDINARY</h2>
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input
            type="text"
            placeholder="Enter Username"
            name="uname"
            required
          />

          <label for="psw"><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="psw"
            required
          />

          <div class="buttonHolder">
            <button type="submit">Login</button>
          </div>

          <div class="toSignUp">
            <p>Don't have an account? <a href="Signup.html"> Sign up</a></p>
            </div>

          <div class="forgotPassword">
            <p><a href="forgotpassword.html">Forgot your password?</a></p>
            </div>

          </div>
        </div>
      </form>
    </div>
  </body>
</html>
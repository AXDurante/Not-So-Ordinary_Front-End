
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Sign Up</title>
  </head>
  <body class="signup-body">
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

            <label for="email"><b>Email</b></label>
            <input
              type="email"
              placeholder="Enter Email"
              name="email"
              required
            />

            <label for="psw"><b>Password</b></label>
            <input
              type="password"
              placeholder="Enter Password"
              name="psw"
              required
            />

            <label for="confirmpsw"><b>Confirm Password</b></label>
            <input
              type="password"
              placeholder="Confirm Password"
              name="confirmpsw"
              required
            />

            <div class="buttonHolderNextPage">
                <a href="Signup2.html">
                    <button type="submit" class="btnNextPage">Next Page</button>
                  </a>
            </div>          
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
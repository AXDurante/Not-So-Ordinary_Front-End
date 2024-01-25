<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Sign Up</title>
  </head>
  <body class="BodySignup2">
    <div class="half login-imageHolder"></div>

    <div class="divider"></div>

    <div class="half login-credentialsHolder">
      <form action="" method="post">
        <div class="title-bar">
          <h2>NOT SO ORDINARY</h2>
        </div>

        <div class="container">
          <label for="fname"><b>First Name</b></label>
          <input
            type="text"
            placeholder="Enter First Name"
            name="fname"
            required
          />

            <label for="lname"><b>Last Name</b></label>
            <input
              type="text"
              placeholder="Enter Last Name"
              name="lname"
              required
            />

            <label for="contact"><b>Contact</b></label>
            <input
              type="tel"
              placeholder="Enter Contact Number"
              name="contact"
              required
            />

            <label for="address"><b>Address</b></label>
            <input
              type="text"
              placeholder="Enter Address"
              name="address"
              required
            />

            <div class="buttonHolder">
                <a href="Signup2.html">
                    <button type="submit" class="btnCreateAcc">Create Account</button>
                  </a>
            </div>          
            <div class="line"></div>
            <div class="toSignUp">
                <p>By creating an account you agree to our <a href="#">Terms of Service </a>and <a href="#">Privacy Policy.</a></p>
                </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
  </head>
  <body>
    <style>
        body {
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
    overflow: hidden; 
}

.half {
    flex: 1; 
    overflow: auto; 
}

.login-imageHolder {
    background: url('/images/login.png') center/cover no-repeat; 
    position: relative;
}

.divider {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 1px; 
    background-color: #000000; 
    transform: translateX(-50%);
}


/*for the forms part*/
.login-credentialsHolder {
    background-color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
}

  /* Add padding to containers */
  .container {
    padding: 16px;
    width: 60%;
    margin: auto; 
  }

  .title-bar {
    color: rgb(0, 0, 0); 
    text-align: center;
    margin-bottom: 40px;
}

.title-bar h2 {
    margin: 0;
    font-size: 32px;
    /* font-family: Inter; */
    font-size: 44px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
  
  /* Full-width inputs */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    display: inline-block;
    box-sizing: border-box;
    border-radius: 10px;
    border: 2px solid #000;
    background: rgba(225, 225, 225, 0.00);
  }

  .container label {
    color: #212529;
    text-align: center;
    /* font-family: Inter; */
    font-size: 18px;
    font-style: normal;
    font-weight: 800;
    line-height: normal;
}

.container input::placeholder {
    color: #999;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
  
  /* Set a style for all buttons */
  .buttonHolder {
    text-align: center;
}
  
  button {
    background-color: #000000;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    width: 25%;
    border-radius: 18px;
    margin-top: 30px;
  }
  
  /* Add a hover effect for buttons */
  button:hover {
    opacity: 0.8;
  }
  
  /* The "Forgot password" text */
  /* span.psw {
    float: right;
    padding-top: 16px;
  } */

.toSignUp {
  text-align: center;
  /* font-family: Inter; */
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  }

.forgotPassword {
  text-align: center;
  /* font-family: Montserrat; */
  font-size: 16px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  }

  .forgotPassword a {
    color: black; 
    text-decoration: underline; 
  }
    </style>
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
            <p>Don't have an account? <a href="#"> Sign up</a></p>
            </div>

          <div class="forgotPassword">
            <p><a href="#">Forgot your password?</a></p>
            </div>

          </div>
        </div>
      </form>
    </div>
  </body>
</html>
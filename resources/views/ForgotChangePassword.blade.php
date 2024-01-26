<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <title>Change Password</title>
</head>

<body class="BodyLogin">
    <div class="half login-credentialsHolderCP">
        <!-- image.... -->
        <img src="nsoLogo.png" alt="NSO logo" class="nsoLogo">

        <form id="form2" class="form2" action="" method="post">

            <div class="title-bar">
                <h2>Change Password</h2>
            </div>

            <div class="changePassword usernameCP">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required />
            </div>

            <div class="changePassword passwordCP">
                <label for="password">Enter your new password</label>
                <input type="password" id="password" name="password" required />
            </div>

            <div class="changePassword confPasswordCP">
                <label for="confirmPassword">Confirm New Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required />
            </div>

            <div class="buttonHolder">
                <button type="submit" class="btnSubmitCP">Submit</button>
            </div>
        </form>
    </div>

    <div class="divider"></div>

    <div class="half login-imageHolder"></div>

    </form>
    </div>
</body>

</html>
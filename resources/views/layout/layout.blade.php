<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>NSO</title>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</head>

<body>


    <nav class="navbar">
        <ul class="row">
            <div class="nav-links row">
                <li><a href="#">Anniversary</a></li>
                <li><a href="#">Essential</a></li>
                <li><a href="#">Custom</a></li>
            </div>
            <li class="store-title" style="font-size: 25px" class="logo"><a href="#">NOT SO ORDINARY</a></li>
            <div class="dashboard-user row">
                <li style="float: right;"><a href="#">Dashboard</a></li>
                <lord-icon src="https://cdn.lordicon.com/kthelypq.json" trigger="loop" delay="500" style="width:50px;height:50px">
                </lord-icon>
            </div>
        </ul>
    </nav>


    <div>
        <!-- Page content here -->
        @yield('section')
    </div>

    <footer>
<div class="footer-nav row">
    <div class="footer-img row">
        <img class="footer-logo" src="/images/footer-logo.png" alt="">
    </div>
    
    <div class="footer-links row">
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Shopee</a></li>
        </ul> 
    </div>
   
</div>
        
       
        <div> <p class="footer-p"> &#169;Copyright 2023 Not So Ordinary. All rights reserved. <a href=""> Terms And Condition</a></p></div>
       
    </footer>
</body>

</html>
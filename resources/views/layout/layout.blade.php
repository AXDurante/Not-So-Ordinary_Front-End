<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <title>NSO</title>

</head>
<body>
    {{-- <header>
        <nav>
            <ul class="nav__links">
                <li><a href="#">Anniversary</a></li>
                <li><a href="#">Essential</a></li>
                <li><a href="#">Custom</a></li>   
                <li style="font-size: 25px" class="logo"><a href="#">NOT SO ORDINARY</a></li>   
                <li style="float: right;"><a href="#">Dashboard</a></li>   
            </ul>
        </nav>
    </header> --}}

    <ul>
        <li><a href="#">Anniversary</a></li>
        <li><a href="#">Essential</a></li>
        <li><a href="#">Custom</a></li>   
        <li style="font-size: 25px" class="nav-title"><a href="#" style="font-weight: bold">NOT SO ORDINARY</a></li>   
        <li style="float: right;"><a href="#">Dashboard</a></li> 
      </ul>
   
    <div>
        <!-- Page content here -->
        @yield('section')
    </div>

    <footer>
       
        <img class="footer-logo" src="/images/footer-logo.png" alt="">
         <p class="footer-p">	&#169;Copyright 2023 Not So Ordinary. All rights reserved.   <a href="">   Terms And Condition</a></p>
        <div></div>
      </footer>
</body>
</html>

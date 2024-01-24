<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin-left: 0;
            margin-right: 0;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            text-align: center; /* Center the text within the ul */
        }
        .nav {
            background-color: #333;
            padding: 15px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        li {
            display: inline-block; /* Display li elements in a line */
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #04AA6D;
        }

        /* Float the first three links to the left */
        li:nth-child(-n+3) {
            float: left;
        }
        .logo{
            padding-right:20%;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul class="nav__links">
                <li><a href="#">Anniversary</a></li>
                <li><a href="#">Essential</a></li>
                <li><a href="#">Custom</a></li>   
                <li style="font-size: 25px" class="logo"><a href="#">NOT SO ORDINARY</a></li>   
                <li style="float: right;"><a href="#">Dashboard</a></li>   
            </ul>
        </nav>
    </header>
   
    <div>
        <!-- Page content here -->
        @yield('section')
    </div>
</body>
</html>

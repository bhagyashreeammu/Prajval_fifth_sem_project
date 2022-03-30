<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: green;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        li a:hover {
            background-color: lightslategrey;
        }

        fieldset {
            background-color: #eeeeee;
        }

        .search {
            float: right;
            margin: 0;
        }

        p {
            font-style: italic;
            font-size: 25px;
        }


        button {
    background-color: goldenrod;
    color: white;
    padding: 10px 20px;
    margin: 8px 4;
    border: none;
    cursor: pointer;
    width: 18%;
  }
    </style>
</head>

<body>

    <center>
        <h1 style="font-size:40px"><i>Pogiren IT Company</i></h1>
    </center>



    <ul>
        <li><a href="#" class="fa fa-home" style="font-size:19px"></a></li>
        <li><a href="Registration.php">Registration</a></li>
        
        <li><a href="Instru.html">Instructions</a></li>
        <div class="search">
            <li><a href="#"><i class=" fa fa-user icon"></i> Login</a></li>
            <li><a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact us</a></li>
        </div>
    </ul>
    <br><br><br><br><br>

    <center>
        <form action="hoba.php">
            <p style="color:black;">Welcome to our Pogiren IT Company <br>High recomanded company
                with<br>inteligent
                creating anti-cheating static analysis<br>and other features
            </p>
<br><br>
<button type="submit" id="Submit">Register Now</button>    
</center>
    </form>

</body>

</html>
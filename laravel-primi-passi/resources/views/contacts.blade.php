<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            height: 60px;
            width: 100%;
            background-color: #3af;
        }

        ul{
            height: 100%;
            list-style-type: none;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        li{
            margin: 20px;
        }

        a{
            text-decoration: none;
            font-size: 20px;
            color: #444;
        }

        a:hover {
            color: #fff;
        }

        h1{
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <ul>
            <li><a href="http://127.0.0.1:8000/">Home</a></li>
            <li><a href="http://127.0.0.1:8000/about">About us</a></li>
            <li><a href="http://127.0.0.1:8000/contacts">Contact us</a></li>
            <li><a href="http://127.0.0.1:8000/services">Services</a></li>
        </ul>

        <h1>Contact us if you need</h1>
    </header>
</body>
</html>

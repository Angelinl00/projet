<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}"> --}}
    <style>
        * {
            padding : 0 ;
            margin : 0 ;
            box-sizing: border-box ;
            font-family: Arial, Helvetica, sans-serif ;
            letter-spacing: 1px ;
        }
        body {
            display : flex ;
            flex-direction : column ;
            background: #d3deeb ;
            height : 100vh ;
            width : 100vw ;
        }
        .navbar {
            position : relative ;
            display : flex ;
            flex-direction: row ;
            width : 100% ;
            height : 8% ;
            background: #d3deeb ;
            box-shadow: 0px 7px 10px #73a9e720 ;
            font-weight: bold ;
            font-size : 18px ;
        }
        .navbar nav {
            width : 100% ;
            height : 100% ;
        }
        .navbar ul {
            display : flex ;
            flex-direction : row-reverse ;
            list-style-type: none ;
            height : 100% ;
            align-items: center ;
        }
        .navbar ul li {
            margin: 10px ;
        }
        .content {
            height : 84% ;
            width : 100% ;
            background: transparent ;
            display: flex ;
            flex-direction: row ;
            justify-content: center ;
            align-items: center ;
        }
        .bloc {
            background: linear-gradient(180deg , aliceblue , #0087ff29);
            height : 350px ;
            width : 550px ;
            border : none ;
            margin : 60px ;
            box-shadow:-10px -10px 10px #73a9e720 ,
                        10px 10px 10px rgba(229, 239, 245, 0.258) ;
            border-radius : 15px ;
            padding : 10px ;
            overflow: hidden;
            transition : .1s ;
        }
        .bloc:hover {
            transform : scale(1.01) ;
        }
    </style>
</head>
<body>
    <x-navbar />
    @yield('content')
</body>
</html>

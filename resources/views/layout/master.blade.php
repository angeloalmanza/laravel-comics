<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>

    <style>
        header {
            height: 60px;
        }

        header img {
            width: 40px;
            padding: 5px;
        }

        header ul {
            list-style: none;
            gap: 15px;
        }

        .jumbotron {
            width: 100%;
            height: 275px;
            object-fit: cover;
            object-position: top;
            margin-bottom: 30px;
        }

        .shop {
            height: 100px;
        }

        .shop-list {
            list-style: none;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .shop-list li img {
            width: 40px;
        }

        .bg-img {
            background-image: url(Vite::asset('/resources/images/footer-bg.jpg'));
            background-size: cover;
            background-position: center;
            height: 300px;
        }

        .list {
            list-style: none;
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .list li {
            color: grey;
        }

        .list h5 {
            color: white;
        }

        .logo-bg {
            position: absolute;  
            bottom: -50px;      
            right: 0;            
            width: 500px;
            z-index: -1;
        }

        .footer {
            background-color: hsl(0deg 0% 18.82%);
        }

        .list-footer {
            gap: 10px;
        }

        .button-series {
            position: absolute;  
            top: -50px;      
            left: 0;            
            z-index: 9999;
        }
    </style>
</head>
<body class="bg-dark">
        @include("partials.header")
    
        @yield("contenuto")
        
        @include("partials.footer")

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        h1 {
            text-align: center;
            margin-bottom: 1px;
            margin-top: 50px;
            background: blue;
            font-family: Serif;
        }

        h5 {
            font-family: Serif;
        }

        .container {
            position: relative;
            width: 1100px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 30px;
            margin-top: 8%;
            gap: 20px;
        }

        .card {
            width: 308px;
            position: relative;
            height: 400px;
            background: gray;
            margin: 30px 10px;
            padding: 2px 15px;
            display: flex;
            flex-direction: column;
            box-shadow: 0.5px 10px #e6e6e6;
            transition: 0.3s ease-in-out;
            margin-top: 5%;
        }
    </style>
</head>

<body>


    <h1 class="mb-3">OUR SERVICES</h1>

    <div class="container">
        <div class="card">
            <h5>Generating funds for teams</h5>
        </div>

        <div class="card">
            <h5>Helping unknown players gain popularity</h5>
        </div>

        <div class="card">
            <h5>Latest news on different sports in Namibia</h5>
        </div>
    </div>

</body>

</html>
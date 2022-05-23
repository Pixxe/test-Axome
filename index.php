<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
</head>

<body class="bg-dark text-light">
<h1 class="text-center">Test BOMBRUN Nicolas Axome</h1>
<form action="traitement.php" method="post">
    <div class="container">
        <div class="mb-3">
            <label for="user_name" class="form-label">Utilisateur gitHub</label>
            <input type="text" name="user_name" class="form-control" id="user_name" aria-describedby="user_name">
            <div id="user_name" class="form-text">Merci de rentrer un nom d'utilisateur valide.</div>
        </div>
        <div class="mb-3">
            <label for="repo" class="form-label">Repository gitHub</label>
            <input type="text" name="repo" class="form-control" id="repo" aria-describedby="repo">
            <div id="repo" class="form-text">Merci de rentrer un repository valide.</div>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
            crossorigin="anonymous"></script>

</html>

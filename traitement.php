<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
</head>
<body class="text-light bg-dark">
<?php


function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

//Je stock les données que je récupère
$user = $_POST['user_name'];
$repo = $_POST['repo'];

error_reporting(0);
ini_set('display_errors', 0);
if ($_POST) {

if (isset($user) && isset($repo)) {
if (!empty($user) && !empty($repo)) {


ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0)');
$data = file_get_contents('http://api.github.com/repos/' . $user . '/' . $repo . '/commits');
$jsonDecoded = json_decode($data, true);
//dump($data);
//dump($jsonDecoded);

if ($jsonDecoded == null){

    echo "<h2 class='text-danger text-center'>Attention vous n'avez pas rentré le bon nom d'utilisateur ou de repository</h2>";
}else{
?>


<div class="container-fluid">
    <h1 class=""><?= 'Vous avez demandé le gitHub de : ' . ($_POST['user_name']) ?></h1>
    <h3><?= 'Le repository associé est : ' . ($_POST['repo']) ?></h3>
    <table class="table table-hover table-dark table-striped table-bordered">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Message</th>
            <th>email</th>
            <th>Date du commit</th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach ($jsonDecoded as $value) {
            ?>

            <tr>
                <td class="text-center"> <?php echo($value['commit']['author']['name']) ?></td>
                <td><?php echo($value['commit']['message']) ?></td>
                <td><?php echo($value['commit']['author']['email']) ?></td>
                <td><?php echo date("d-m-Y", strtotime(($value['commit']['author']['date'])))?></td>
<!--                <td>--><?php //echo date("l",mktime($value['commit']['author']['date']))?><!--</td>-->



            </tr>

            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
    }
    }else {
    include 'erreur.php';


    }
    }
    }
    //        dump($jsonDecoded);


    ?>
    <br>
    <div class="text-center">
        <a class="btn btn-primary m-0" href="index.php">Retour au formulaire</a>
    </div>

</div>

<!--dump($jsonDecoded);-->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>


</html>

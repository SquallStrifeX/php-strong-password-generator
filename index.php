<?php 
session_start();
include __DIR__.'/partials/functions.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <div class="container">
            <div class="row">
                <div class="col-10 mt-4">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Inserisci la lunghezza della tua password</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Inserire un numero" name="pass">
                    </div>
                </div>
                <div class="col-2 mt-5" >
                    <button class="btn btn-success">Invia</button>
                </div>
                <div class="col-12">
                    <h4>Ecco la tua password generata</h4>
                <?php echo $_SESSION['passwordgenerata']; ?>
                </div>
            </div>
        </div>
    </form>

</body>
</html>
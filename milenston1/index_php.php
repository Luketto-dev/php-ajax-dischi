<?php
require_once __DIR__ . "/../db.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php require "../TheHeader.php"?>
    <main>
        <div class="container">
            <div class="py-5">
                <div class="row row-cols-5 gy-3 gx-2">
                    <?php foreach($resp as $disco){?>
                    <div class="col flex-shrink-0">
                        <div class="disc text-center">
                            <div class="disc-poster">
                                <img class="img-fluid" src="<?php echo $disco["poster"] ?>" alt="">
                            </div>
                            <div class="disc-title">
                                <h4 class="text-white pt-2"><?php echo $disco["title"]?></h4>
                            </div>
                            <div class="disc-author text-white-50">
                            <?php echo $disco["author"]?>
                            </div>
                            <div class="disc-year text-white-50">
                            <?php echo $disco["year"]?>
                            </div>
                        </div>
                    </div>

                    <?php }?>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>


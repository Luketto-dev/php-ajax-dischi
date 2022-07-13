<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi-vue</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
    <div id="app">
    <?php require "../TheHeader.php"?>
        <main>
            <div class="container">
                <div class="py-5">
                    <div class="row row-cols-5 gy-3 gx-2">
                        
                        <div class="col flex-shrink-0" v-for="disco in listaDischi">
                            <div class="disc text-center">
                                <div class="disc-poster">
                                    <img class="img-fluid" :src="disco.poster" alt="">
                                </div>
                                <div class="disc-title">
                                    <h4 class="text-white pt-2">{{disco.title}}</h4>
                                </div>
                                <div class="disc-author text-white-50">
                                    {{disco.author}}
                                </div>
                                <div class="disc-year text-white-50">
                                    {{disco.year}}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </main>

    </div>

    


    <script src="./js/main.js"></script>
</body>
</html>
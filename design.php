<?php include 'index.php';
$obj = new RestApi();

// $headers = apache_request_headers();
// $token = $headers['Authorization'];

// $url = $_GET["url"];
// echo $token;
// echo $url;
$url = 'https://devsow.wpengine.com/wp-json/media/posts/';
$token = 'Basic bmVoYTowI21JdkJCdzRBdWJoKTU5QXhEQ0hIQTU=';
$data = $obj->getData($url, $token);
$decode = json_decode($data);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="icon" href="icon.webp" type="favicon" sizes="16x16">
    <title>Shades of Web</title>
</head>

<body>


    <div class="container mt-5">
        <div class="row">
            <?php foreach ($decode->data as $artical) {?>

            <div class="card-deck col-md-4">
                <div class="card mb-3">
                    <img src=<?php echo $artical->image_url?>
                        class="card-img-top img" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $artical->post_title ?></h5>
                        <p class="card-text"><?php echo $artical->post_excerpt ?></p>
                    </div>
                    <div class="card-footer bg-info">
                        <span class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar-event" viewBox="0 0 16 16">
                                <path
                                    d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z">
                                </path>
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z">
                                </path>
                            </svg>
                            &nbsp;
                            <?php echo date('d/m/Y',strtotime($artical->post_date))  ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>
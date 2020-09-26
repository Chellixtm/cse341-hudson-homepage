<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hudson Home</title>
    <meta charset="UTF-8">
    <meta name="author" content="Mitchell Hudson">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/nav.php'; ?>
    </nav>

    <main>
        <div class="jumbotron jhome">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>

        <div class="container likes">
            <div class="row">
                <div class="col-lg">
                    <img src="/images/yellowstone.png" class="round-img" height="150px" width="150px" />
                    <h2>National Parks</h2>
                    <p>I always enjoy traveling to national parks and seeing the beautiful world around us. It's even better if I can go with my wife.</p>
                </div>
                <div class="col-lg">
                    <img src="/images/cheeseZombie.png" class="round-img" height="150px" width="150px" />
                    <h2>Cooking</h2>
                    <p>Cooking has been a hobby of mine as long as I could reach the stove. I will try making anything that piques my interest.</p>
                </div>
            </div>
        </div>
    </main>
</body>
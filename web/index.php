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
            <h1 class="display-4">Welcome to my Website!</h1>
            <p class="lead">This is a simple website meant for storing and displaying my CSE 341 assignments that I make through the semester.</p>
            <hr class="my-4">
            <p>If you want to view my assignments either click the "Assignments" tab in the navbar or you can click the button below.</p>
            <a class="btn btn-dark btn-lg" href="/view/assignments.php" role="button">Assignments</a>
        </div>

        <div class="container likes">
            <div class="row">
                <div class="col-lg">
                    <img src="/images/yellowstone.png" class="round-img" height="150px" width="150px" />
                    <h2>National Parks</h2>
                    <p>I always enjoy traveling to national parks and seeing the beautiful world around us. It's even better if I can go with my wife.</p>
                </div>
                <div class="col-lg">
                    <img src="/images/cheeseZombies.png" class="round-img" height="150px" width="150px" />
                    <h2>Cooking</h2>
                    <p>Cooking has been a hobby of mine as long as I could reach the stove. I will try making anything that piques my interest.</p>
                </div>
            </div>
        </div>

        <footer class="footer mt-auto py-3">
            <div class="container">
                <p><?php 
                    $datet = new DateTime();
                    echo $datet->format('F d, Y')
                ?></p>
            </div>
        </footer>
    </main>
</body>
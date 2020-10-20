<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">


    <title>Fake News </title>
</head>

<body>
    <header class="header">

        <h2>Fake News</h2>

    </header>

    <section>
        <div class="wrapper">


            <?php require __DIR__ . '/functions.php';
            echo getArticle($articles); ?>

            <div class="card">
                <h2>TITLE HEADING</h2>

                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <h5>Author, Title description, Sep 2, 2017</h5>
            </div>
        </div>

    </section>


    </div>

    <div class="footer">
        <h2>Footer</h2>
    </div>

</body>

</html>
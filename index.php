<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trauerreden Dewitt</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
        $bannerImgSrc = "img/placeholder.jpg";
        $bannerTxt = "Trauern ist liebevolles Erinnern";
    ?>

    <?php include_once "_templates/nav.php" ?>
    <?php include_once "_templates/banner.php" ?>

    <section>
        <div class="column mw">
            <div class="zitat">
                <h2>"Es muss von Herzen kommen,<br>was auf Herzen wirken soll."</h2>
                <p>Johan Wolfgang von Goethe</p>
            </div>
            <div class="home-dienst-holder mw img-align-box">
                <div class="img-holder">
                    <img src="img/placeholder.jpg" alt="">
                </div>
                <div class="txt-holder">
                    <p>Es ist meine Herzensarbeit, einen persönlichen und würdevollen Abschied für Ihren verstorbenen Angehörigen zu gestalten.
                        Ich bin als freie Rednerin für Sie da, wenn Sie eine Alternative zur kirchlichen Zeremonie suchen.</p>
                    <div class="btn-box">
                        <button class="btn">Mein Dienst für Sie</button>
                        <button class="btn btn-outline">Über mich</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-rückmeldungen-sec">
        <h3 class="heading heading-d">Rückmeldungen</h3>
        <?php include_once "_templates/vorgestellte-rückmeldungen.php" ?>
        <button class="btn btn-d">Mehr Rückmeldungen</button>
    </section>
    <section class="kontakt-sec">
        <h3 class="heading">Kontakt</h3>
        <div class="kontakt holder mw"></div>
    </section>


    <?php include_once "_templates/footer.php" ?>
</body>
</html>
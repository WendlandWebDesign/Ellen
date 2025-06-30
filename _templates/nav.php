<link rel="stylesheet" href="_templates/nav.css">

<nav>
    <div class="nav-holder mw">
        <div class="logo-holder" onclick="window.location.href='index.php'">
            <img src="img/placeholder.jpg" alt="">
            <h1>Trauerrednerin Ellen de Witt</h1>
        </div>
        <ul class="nav-list">
            <li class="list-item"><a href="index.php">Home</a></li>
            <li class="list-item"><a href="page-meindienstfürsie.php">Mein Dienst für Sie</a></li>
            <li class="list-item"><a href="page-übermich.php">Über mich</a></li>
            <li class="list-item"><a href="page-rückmeldungen.php">Rückmeldungen</a></li>
            <li class="list-item">
                <button class="btn">Kontakt</button>
            </li>
        </ul>
        <div class="burger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>

<script>
    const burgerBtn = document.querySelector('.burger');
    const navList = document.querySelector('.nav-list');

    burgerBtn.addEventListener('click', function(){
        burgerBtn.classList.toggle('active');
        navList.classList.toggle('active');
    });
</script>
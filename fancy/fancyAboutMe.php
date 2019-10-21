<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<a data-fancybox data-src="#hidden-content" href="javascript:;" class="omnie-link">Więcej o mnie...</a>

<div style="display: none; background-color: black; width: 70%;" id="hidden-content">
    <div class="row mb-2">

        <div class="col-lg-8" style="text-align: justify; color: silver; font-size: 18px;">
            <?php
            $aboutMe = 'Cześć!<br/><br/>
            Nazywam się Piotr Bibrzycki i witam Cię serdecznie na stronie prezentującej fragment mojego portfolio programistycznego.<br/></br/>
            Tak jak zapewne zauważyłeś/aś opisuję siebie jako programistę, Maklera Papierów Wartościowych i szkoleniowca, a to dlatego, że moje dotychczasowe życie zawodowe skupione było właśnie wokół tych trzech specjalizacji.<br/><br/>
            Przez ostatnie lata pracowałem jako analityk finansowy, a jednocześnie w ramach prowadzonej działalności gospodarczej projektowałem serwisy internetowe. Od najprostszych stron wizytówkowych po rozbudowane aplikacje współpracujące z serwisami zewnętrznymi.<br/><br/>
            Zdecydowana większość tych projektów tworzona była przeze mnie od podstaw. Klient przychodził, mówił czego potrzebuje, a ja realizowałem zlecenie od początku do końca - począwszy od wstępnego projektu, poprzez szatę graficzną, a kończąc na zaprogramowaniu całości. W większości przypadków pełniłem również funkcję administratora systemu, a z czasem - wedle potrzeb Klienta - rozbudowywałem stworzone wcześniej rozwiązania.<br/><br/>
            W swojej pracy do tej pory przede wszystkim wykorzystywałem takie technologie jak HTML, PHP 5 oraz 7, JavaScript, jQuery oraz MySQL. Od niedawna programuję również w języku JAVA oaz zgłębiam tajniki aplikacji hybrydowych.<br/><br/>
            Nie jestem typowym, stereotypowym programistą. W realizowanych projektach priorytetem jest dla mnie zawsze Klient. Dzięki doświadczeniu w finansach oraz obsłudze Klienta wiem w jaki sposób przeprowadzić proces projektowy od początku do końca, aby finalnie Klient był zadowolony, a rozwiązanie efektywne i co najważniejsze - spełniające pierwotne oczekiwania, a niejednokrotnie te oczekiwania przewyższające.<br/><br/>
            Zachęcam do przejrzenia mojego portfolio, a jeśli chcesz poznać mnie również w roli finansisty zapraszam na mój kanał <a href="https://www.youtube.com/channel/UCjazYArf2a6Sy3EOZDF268g/videos" target="_blank">"Finanse zza Kierownicy"</a>, który wprawdzie nie jest już aktualizowany, ale materiały tam zawarte są nadal wartościowe.';

            wdowki($aboutMe);
            ?>
        </div>

        <div class="col-lg-4">
            <a data-fancybox="gallery" href="img/myFoto/1.jpg"><img src="img/myFoto/1.jpg" class='about-me-foto'></a>
            <a data-fancybox="gallery" href="img/myFoto/2.jpg"><img src="img/myFoto/2.jpg" class='about-me-foto'></a>
            <a data-fancybox="gallery" href="img/myFoto/3.jpg"><img src="img/myFoto/3.jpg" class='about-me-foto'></a>
            <a data-fancybox="gallery" href="img/myFoto/5.jpg"><img src="img/myFoto/5.jpg" class='about-me-foto'></a>
            <a data-fancybox="gallery" href="img/myFoto/4.jpg"><img src="img/myFoto/4.jpg" class='about-me-foto'></a>
        </div>

    </div>
</div>
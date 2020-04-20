<?php 
    global $tituloPagina;
    $tituloPagina = "Profissionais";
    include('partes/cabecalho.php');
?>
        <header class="cabecalho-home">
                <h2 class="cabecalho-home__titulo"></h2>
                <p class="cabecalho-home__subtitulo"></p>
                <a class="cabecalho-home__role" href="#servicos-perso">clique para rolar</a>
        </header>
        <!-- ARRUMAR  -->
        <section id="servicos-perso" class="servicos-perso"><!--Seção Aulas-->
            <div class="container"> <!-- Inicio Container -->
                    <h2 class="nome__titulo servicos-perso__texto">Personais:</h2>
                    <section class="servicos-perso__item">
                        <img class="circulo" src="img/Personais/pessoa.jpg" alt="Personal 1">
                        <h3 class="subnome__titulo">Prof. Rubens (Yoga)</h3>
                        <p class="servicos-perso__texto">Horários:<br>Seg: 8h00 às 9h00<br>Ter: 17h40 às 18h30<br>Qua: 8h00 às 9h00<br>Sex: 8h00 às 9h00</p>
                    </section>
                    <section class="servicos-perso__item">
                        <img class="circulo" src="img/Personais/pessoa.jpg" alt="Personal 2">
                        <h3 class="subnome__titulo">Prof. Rui (Karatê)</h3>
                        <p class="servicos-perso__texto">Horários:<br>Seg: 9h00 às 10h00</p></p>
                    </section>
                    <section class="servicos-perso__item">
                        <img class="circulo" src="img/Personais/pessoa.jpg" alt="Personal 3">
                        <h3 class="subnome__titulo">Prof. Jack (Boxe)</h3>
                        <p class="servicos-perso__texto">Horários:<br>Ter: 8h00 às 9h30 / 21h00 às 22h30<br>Qui: 8h00 às 9h30 / 21h00 às 22h30<br>Sex: 19h30 às 20h30</p>
                    </section>
                    <section class="servicos-perso__item">
                        <img class="circulo" src="img/Personais/pessoa.jpg" alt="Personal 4">
                        <h3 class="subnome__titulo">Prof. Cabelo (MMA)</h3>
                        <p class="servicos-perso__texto">Horários:<br>Seg: 20h30 às 21h30<br>Qua: 20h30 às 21h30<br>Sex: 20h30 às 21h30</p>
                    </section>
                    <section class="servicos-perso__item">
                        <img class="circulo" src="img/Personais/pessoa.jpg" alt="Personal 4">
                        <h3 class="subnome__titulo">Prof. Gago (Muay Thai)</h3>
                        <p class="servicos-perso__texto">Horários:<br>Seg: 18h20 às 19h50<br>Qua: 18h20 às 19h50<br>Sex: 18h20 às 19h50</p>
                    </section>
                    <section class="servicos-perso__item">
                        <img class="circulo" src="img/Personais/pessoa.jpg" alt="Personal 4">
                        <h3 class="subnome__titulo">Prof. Edson (Jiu-Jitsu)</h3>
                        <p class="servicos-perso__texto">Horários:<br>Seg: 19h00 às 20h30 / 20h30 às 22h00<br>Ter: 20h30 às 22h00<br>Qua: 19h00 às 20h30 / 20h30 às 22h00<br>Qui: 20h30 às 22h00<br>Sex: 19h00 às 20h30 / 20h30 às 22h00</p>
                    </section>
        
            </div> <!-- Fim Container -->
        </section><!--Fim Seção Serviços-->
        <section class="depoimentos"><!--seção depoimentos-->
            <div class="container">
                <h2 class="home__titulo home__titulo--branco"> </h2>
                <section class="depoimentos__item">
                    <p class="depoimentos__texto"></p>
                    <p class="depoimentos__pessoa"></p>
                </section>
            </div>
        </section> <!--seção depoimentos-->
<?php include('partes/rodape.php'); ?>
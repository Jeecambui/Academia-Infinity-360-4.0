<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include('partes/cabecalho.php');
?>
            <header class="pagina-cabecalho">
                <h1 class="pagina-cabecalho__titulo">Contato</h1>
            </header>
            <section class="container pagina-conteudo">
                <p class="text-center">Duvidas?, Entre em contato conosco !</p>
                <form action="#" class="formulario">
                    <div class="formulario__grupo formulario__grupo--coluna-esq">
                        <label class="formulario__label" for="nome">Nome</label><br>
                        <input class="formulario__campo" id="nome" type="text" name="nome">
                    </div>
                    <div class="formulario__grupo formulario__grupo--coluna-dir">
                        <label class="formulario__label" for="email">E-mail</label><br>
                        <input class="formulario__campo" id="email" type="email" name="email">
                    </div>
                    <div class="formulario__grupo">
                        <label class="formulario__label" for="mensagem">Mensagem</label><br>
                        <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" class="formulario__botao" value="Enviar"><br>
                </form>
            </section>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d332.7499903247703!2d-46.65112471280328!3d-23.551689100246094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x98ec425b150136ea!2sBio+Company+Academia!5e0!3m2!1spt-BR!2sbr!4v1562635763365!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
<?php include('partes/rodape.php'); ?>
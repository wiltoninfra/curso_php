<?php
include 'include/utils.php';

if (!empty($_POST)) {
   
    
}
	
$contador = count($_POST);
?>
<!doctype html>
<html dir="ltr" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Dexter Courier | Fale Conosco</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <?php  require 'template/topo.php'; ?>
    </header>

    <div class="container content">
            <div class="title center">
                <h1>Fale conosco</h1>
            </div>

            <!-- <div class="banner-fixed">
                <img src="http://lorempixel.com/940/300" alt="Banner Sobre">
            </div> 

            <iframe class="map" width="940" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=4Linux+-+Rua+Vergueiro,+Vila+Mariana,+S%C3%A3o+Paulo&amp;aq=0&amp;oq=4linux+rua&amp;sll=-23.65333,-46.595764&amp;sspn=0.906957,1.454315&amp;ie=UTF8&amp;hq=4Linux+-&amp;hnear=Rua+Vergueiro,+S%C3%A3o+Paulo&amp;t=m&amp;ll=-23.587469,-46.633487&amp;spn=0.013765,0.04034&amp;z=15&amp;output=embed"></iframe>
-->
            <form action="" method="post" class="form">
            
            <!-- inserir no banco de dados -->
           
            
                <p>
                    <label for="nome">Nome</label>
                    <?php 
                    
                    if (isset($_POST['nome'])) {
                        $nome = $_POST['nome'];
                        if (!$nome) {
                        echo '<div class="alert alert-error">';
                         echo 'O Nome nao pode ser vazio';
                        echo '</div>';
                        } 
                        }
                    ?>
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                </p>
                <p>
                    <label for="email">Email</label>
                    
                   <?php 
                    
                    if (isset($_POST['email'])) {
                        $email = $_POST['email'];
                        if (!$email) {
                        echo 'O Email nao pode ser vazio';
                        } 
                        }
                    ?>
                    
                    <input type="email" name="email" id="email" placeholder="seu@email.com" >
                </p>
                <p>
                    <label for="tel">Telefone</label>
                   
                    <?php 
                    
                    if (isset($_POST['tel'])) {
                        $telefone = $_POST['tel'];
                        if (!$telefone) {
                        echo 'O Telefone nao pode ser vazio';
                        } 
                        }
                    ?>
                    
                    <input type="tel" name="tel" id="tel" pattern="[0-9]{8}" placeholder="(xx) 1234-5678" required>
                </p>
                <p>
                    <label for="msg">Mensagem</label>
                    
                   <?php 
                    
                    if (isset($_POST['msg'])) {
                        $mensagem = $_POST['msg'];
                        if (!$mensagem) {
                        echo 'A Mensagem nao pode ser vazia';
                        } 
                        }
                    ?>
                    
                    <textarea name="msg" id="msg" rows="5" placeholder="Sua mensagem..." required></textarea>
                </p>
                <p>
                    <button class="btn"nome="envia">Enviar</button>
                </p>
                <?php 
                
               if (isset($nome)) or (isset($telefone)) {
                  echo'Preencha todo os dados';
                } else {
                   inserirContato($nome, $email, $telefone, $mensagem);
}
?>
                
            </form>
    </div>
   
    <footer class="footer">
        <?php require 'template/rodape.php'; ?>
    </footer>

</body>
</html>
    <?php 
    
    
    ?>
    
    <header class="header">
           <?php require 'template/topo.php'; ?>
    </header>
    <?php
        $banners = array(
        	array(
                'id' => 1,
                'nome' => 'Logística Integrada',
        	    'descricao' => 'Lorem ipsum dolor sit amet, ad error dolor corpora vis, ius ex rebum novum vitae. Eos ponderum expetenda at, at vix nemore persequeris. Assentior persequeris cu eum, exerci persecuti omittantur vix ad. Prima velit vel ei, agam fabulas has ne. Eos at suas deserunt consulatu. Eum an ludus decore.',
        	    'url' => 'img/banner/banner.jpg'
            ),

            array(
                'id' => 2,
                'nome' => 'Soluções em Transporte',
                'descricao' => 'Mea id prima munere. Facer everti pro ex, nam no malis quodsi. Option delicata corrumpit an usu, quodsi equidem percipit vix cu, dolor periculis et pri. Id sea corpora phaedrum, no est rebum illud mollis. Et vel veri autem, nec alia dicit ex, eu vis dicant labores legimus',
                'url' => 'img/banner/banner2.jpg'
            ),

            array(
                'id' => 3,
                'nome' => 'Terminais Marítimos',
                'descricao' => 'Cum simul mandamus no, sea veniam honestatis eu. Mucius nostrud ea quo, ius an dicunt eloquentiam, fabulas expetendis per ex. Liber definitionem eu nam. Cu pro dicit utamur conclusionemque, no vis audire maiestatis scribentur.',
                'url' => 'img/banner/banner3.jpg'
            ),

            array(
                'id' => 4,
                'nome' => 'Dexter - Logística',
                'descricao' => 'Mel habeo homero commune te. Nostrud accumsan oporteat mea ex. Lorem ullum mei ne, duo ei amet primis incorrupte. Eos te alienum molestiae, iriure atomorum ei has.',
                'url' => 'img/banner/banner4.jpg'
            ),


        )
    ?>
    
    
    
    <section class="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->

          <div class="carousel-inner">
            <?php #Banner --- Inicio Laço
                
        foreach ($banners as $banners => $paginas) {
            $url = $paginas['url'];
                ?>
                
                <div class='item' style="background-image:url('<?php $url ?>')">';
               
                <?php 
                echo '<div class="container">';
                   
                  
                    echo '<div class="row">';
                    echo '<div class="span12">';
                    echo '<h2>';
                    echo $paginas['nome'];
                    echo '</h2>';
    

}
    
    ?>
                            <p></p>
                        </div>
                    </div>
                  </div>
               </div>
           
         </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
    </section>

    <section class="vantagens">
        
    </section>

    <section class="funcionalidades">
       
    </section>

    <section class="cadastro">
        <div class="container">
            <div class="left">
                <h3>Você cuida da sua empresa e nós da sua logistica.</h3>
                <p>Cadastre-se agora e tenha 20% de desconto no primeiro ano.</p>
            </div>
            <a href="cadastro.php" class="btn btn-flat right">Cadastre-se</a>
        </div>
    </section>

    <footer class="footer">
         <?php require 'template/rodape.php'; ?>
    </footer>

</body>

</html>

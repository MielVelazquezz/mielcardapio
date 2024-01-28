<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Semanal</title>
    <link rel="icon" href="images/1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>

        <figure><img src="images/1.png" alt="Logo NutriNilmar"></figure>

        <div class="titulo_cardapio">

            <?php $enterprise = "NutriNilmar";
            echo "<font color='#FFE81B'> Cardáprio Semanal - $enterprise (05/02 à 09/02)";

            ?></div>

    </header>


    <main>
        <div class="linha"></div>

        <div class="container">

            <!-- <section class="tipo_prato">
                <div class="bloco-bg"></div>
                <?php

                $tipo_prato = array(1 => 'Prato Base', 2 => 'Prato Principal', 3 => 'Salada', 4 => 'Sobremesa');

                foreach ($tipo_prato as $col => $prato) {
                    echo "<div class='prato'> $prato </div>";
                };

                ?> -->

            </section>

            <section class="comidas">
            <?php


                $comidas = array(

                    "seg" => array(
                        "pratoBase"       => "Arroz", "Feijão",
                        "Prato Principal" => "Rocambole de carne",
                        "Salada"          => "Tomate",
                        "Sobremesa"       => "Bolo de fubá"
                    ),

                    "ter" => array(
                        "pratoBase"       => "Arroz",
                        "Prato Principal" => "Feijoada", "Farofa",  
                        "Salada"          => "Couve",
                        "Sobremesa"       => "Pudim"
                    ),

                    "qua" => array(
                        "pratoBase"       => "Macarrão", "Molho de Carne Moída",
                        "Prato Principal" => "Almôndegas",
                        "Salada"          => "Alface",
                        "Sobremesa"       => "Fruta"
                    ),

                    "qui" => array(
                        "pratoBase"       => "Arroz", "Feijão",
                        "Prato Principal" => "Peito de Frango Grelhado",
                        "Salada"          => "Alface",
                        "Sobremesa"       => "Fruta"
                    ),

                    "sex" => array(
                        "pratoBase"       => "Macarrão Aglio e Olio", "Molho Branco",
                        "Prato Principal" => "Fraldinha Assada",
                        "Salada"          => "Cenoura",
                        "Sobremesa"       => "Fruta"
                    )

                );

            ?>

                <div class="dia_semana">
                    <h4>Segunda-feira</h4>
                    

                    <?php 
                    
                    foreach ($comidas["seg"] as $seg_prato => $seg_comidas) {

                        echo 
                        "<div class='cxComidas'>        
                            <ul>
                             <li>".$seg_comidas."</li>
                            </ul><br>
                        </div>";
    
                    };  

                    ?>

                </div>

                <div class="dia_semana">
                    <h4>Terça-feira</h4>
                    

                    <?php 
                    
                    foreach ($comidas["ter"] as $ter_prato => $ter_comidas) {

                        echo 
                        "<div class='cxComidas'>        
                            <ul>
                             <li>".$ter_comidas."</li>
                            </ul><br>
                        </div>";
    
                    };
                    
                    ?>      

                </div>

                <div class="dia_semana">
                    <h4>Quarta-feira</h4>
                    

                    <?php 
                    
                    foreach ($comidas["qua"] as $qua_prato => $qua_comidas) {

                        echo 
                        "<div class='cxComidas'>        
                            <ul>
                             <li>".$qua_comidas."</li>
                            </ul><br>
                        </div>";
    
                    };
                    
                    ?>

                </div>

                <div class="dia_semana">
                    <h4>Quinta-feira</h4>
                    

                    <?php 
                    
                    foreach ($comidas["qui"] as $qui_prato => $qui_comidas) {

                        echo 
                        "<div class='cxComidas'>        
                            <ul>
                             <li>".$qui_comidas."</li>
                            </ul><br>
                        </div>";
    
                    };
                    
                    ?>

                </div>

                <div class="dia_semana">
                    <h4>Sexta-feira</h4>
                    

                    <?php 
                    
                    foreach ($comidas["sex"] as $sex_prato => $sex_comidas) {

                        echo 
                        "<div class='cxComidas'>        
                            <ul>
                             <li>".$sex_comidas."</li>
                            </ul><br>
                        </div>";

                    //  echo 
                    //     "<div class='cxComidas'>"
                    //          .$sex_comidas.
                    //     "</div>";
    
                    };
                    
                    ?>

                </div>




            </section>

        </div>

    </main>

    <footer>

        <div class="cx_footer">

            &copy;NutriNilmar Enterprise, Regente-Feijó
            <span class="material-symbols-outlined">
                location_on
            </span>, 2024
            
        </div>

    </footer>

</body>

</html>
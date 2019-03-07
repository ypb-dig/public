<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>RealState | Busca</title>
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Custom Fonts -->
        <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

        <!-- Slick -->
        <link rel="stylesheet" href="slick/slick.css">
        <link rel="stylesheet" href="slick/slick-theme.css">
    </head>
    <body id="page-top">
        <header class="header-interno">
            <!-- MENU -->
            <?php include('inc/menu.php') ?>
            <!-- FIM MENU -->
           
            <div class="header-content">
                <div class="header-content-inner">
                    
                    <!-- AREA PESQUISA -->
                    <!-- Default form contact -->
                    <form class="text-center">
                        
                        <div class="col-md-2">
                            <select class="browser-default custom-select">
                                <option value="">Comprar</option>
                                <option value="1">lorem</option>
                                <option value="2">lorem 2</option>
                                <option value="3">lorem 3</option>
                                <option value="4">lorem 4</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="browser-default custom-select">
                                <option value="">Tipo</option>
                                <option value="1">lorem</option>
                                <option value="2">lorem 2</option>
                                <option value="3">lorem 3</option>
                                <option value="4">lorem 4</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="browser-default custom-select">
                                <option value="">Metragem</option>
                                <option value="1">lorem</option>
                                <option value="2">lorem 2</option>
                                <option value="3">lorem 3</option>
                                <option value="4">lorem 4</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="browser-default custom-select">
                                <option value="">Cidade</option>
                                <option value="1">lorem</option>
                                <option value="2">lorem 2</option>
                                <option value="3">lorem 3</option>
                                <option value="4">lorem 4</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="browser-default custom-select">
                                <option value="">Bairro</option>
                                <option value="1">lorem</option>
                                <option value="2">lorem 2</option>
                                <option value="3">lorem 3</option>
                                <option value="4">lorem 4</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="browser-default custom-select">
                                <option value="">Preço</option>
                                <option value="1">lorem</option>
                                <option value="2">lorem 2</option>
                                <option value="3">lorem 3</option>
                                <option value="4">lorem 4</option>
                            </select>
                        </div>
                        
                        <!-- Send button -->
                        <!-- <button class="btn btn-primary" type="submit">BUSCAR <i class="fas fa-search"></i></button> -->

                        <a href="busca.php" class="btn btn-primary">BUSCAR <i class="fas fa-search"></i></a>
                    </form>
                    
                    <a href="#QuemSomos" class=" page-scroll"> <i class="fas fa-angle-down"></i> </a>
                </div>
            </div>
        </header>
        <section id="TituloBusca">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Resultado para Apartamento MBGUCI</h1>
                    </div>
                </div>
                <div class="row area-filtro">
                    <div class="col-md-8">
                        <h2>Comprar // R$500,00 // São Paulo // Apartamento</h2>
                    </div>
                    <div class="col-md-3">
                        <p class="pull-left">filtro: </p>
                        <div class="dropdown filtro">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Preço decrescente
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                
                                <li><a href="#">Preço crescente</a></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="busca">
            <div class="container-fluid">
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>SANTANA</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>VILA OLIMPIA</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>SAÚDE</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>PARAISO</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>SANTANA</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>VILA OLIMPIA</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>SAÚDE</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>PARAISO</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>SANTANA</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>VILA OLIMPIA</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>SAÚDE</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="col-md-7">
                        <img src="img/rasc/predio1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-5">
                        <h3>PARAISO</h3>
                        <h6>São Paulo</h6>
                        <p><i class="fas fa-home"></i> 150 m²</p>
                        <p><i class="fas fa-car"></i> 2 garagens</p>
                        <p><i class="fas fa-bed"></i> 4 suítes</p>
                        <p><i class="far fa-calendar-minus"></i> em construção</p>
                        <a href="imovel.php" class="btn btn-info">Saiba mais </a>
                    </div>
                </div>
                
            </div>
        </section>
        
        <!-- Destaques -->
       <?php include('inc/destaques.php') ?>

<?php include('inc/footer.php') ?>                                    
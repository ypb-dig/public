<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Estoque Imóvel | Imóvel</title>
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
        
        <section id="DestaquesSemana" class="destaque-imovel">
            <div class="container-fluid">
                <!-- Slider -->
                <div class="row">
                    
                    <div  id="slider">
                        <!-- Top part of the slider -->
                        <!-- MINI -->
                        <div class="col-md-3" id="slider-thumbs">
                            <div class="bg-cinza-escuro descricao-destaque">
                                <h1>Apartamento <br>Itaim bibi</h1>
                                <hr align="left">
                                <div class="endereco">
                                    <h3>SANTANA</h3>
                                    <h6>São Paulo</h6>
                                    <p><i class="fas fa-home"></i> 150 m²</p>
                                    <p><i class="fas fa-car"></i> 2 garagens</p>
                                    <p><i class="fas fa-bed"></i> 4 suítes</p>
                                    <p><i class="far fa-calendar-minus"></i> em construção</p>
                                </div>
                            </div>
                            
                            
                            <!-- Bottom switcher of slider -->
                            <ul class="hide-bullets hidden-sm hidden-xs">
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-0">
                                        <img src="img/rasc/destaquedasemana.png" class="img-responsive">
                                    </a>
                                </li>
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-1"><img src="img/rasc/destaquedasemana2.png" class="img-responsive center-block"></a>
                                </li>
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-2"><img src="img/rasc/destaquedasemana2.png" class="img-responsive"></a>
                                </li>
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-3"><img src="img/rasc/destaquedasemana.png" class="img-responsive"></a>
                                </li>
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-4"><img src="img/rasc/destaquedasemana2.png" class="img-responsive"></a>
                                </li>
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-5"><img src="img/rasc/destaquedasemana.png" class="img-responsive"></a>
                                </li>
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-6"><img src="img/rasc/destaquedasemana.png" class="img-responsive"></a>
                                </li>
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-7"><img src="img/rasc/destaquedasemana.png" class="img-responsive"></a>
                                </li>
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-8"><img src="img/rasc/destaquedasemana.png" class="img-responsive"></a>
                                </li>
                                <li class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-9"><img src="img/rasc/destaquedasemana.png" class="img-responsive"></a>
                                </li>
                                
                                
                            </ul>
                            
                        </div>
                        
                        <div class="col-md-6" id="carousel-bounding-box">
                            <div class="carousel slide" id="DestaquesHome">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                    <img src="img/rasc/destaquedasemana.png" class="img-responsive"></div>
                                    <div class="item" data-slide-number="1">
                                    <img src="img/rasc/destaquedasemana2.png" class="img-responsive"></div>
                                    <div class="item" data-slide-number="2">
                                    <img src="img/rasc/destaquedasemana2.png" class="img-responsive"></div>
                                    <div class="item" data-slide-number="3">
                                    <img src="img/rasc/destaquedasemana.png" class="img-responsive"></div>
                                    <div class="item" data-slide-number="4">
                                    <img src="img/rasc/destaquedasemana2.png" class="img-responsive"></div>
                                    <div class="item" data-slide-number="5">
                                    <img src="img/rasc/destaquedasemana.png" class="img-responsive"></div>
                                    <div class="item" data-slide-number="6">
                                    <img src="img/rasc/destaquedasemana.png" class="img-responsive"></div>
                                    <div class="item" data-slide-number="7">
                                    <img src="img/rasc/destaquedasemana.png" class="img-responsive"></div>
                                    <div class="item" data-slide-number="8">
                                    <img src="img/rasc/destaquedasemana.png" class="img-responsive"></div>
                                    <div class="item" data-slide-number="9">
                                    <img src="img/rasc/destaquedasemana.png" class="img-responsive"></div>
                                    
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#DestaquesHome" role="button" data-slide="prev">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a class="right carousel-control" href="#DestaquesHome" role="button" data-slide="next">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                            <div class="col-md-7 descricao_imovel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic nihil ipsam, repudiandae recusandae eveniet, voluptatem amet atque aliquam suscipit itaque architecto impedit, sequi ipsum iure. Explicabo nulla quibusdam ullam, sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe soluta quasi exercitationem. Deleniti modi itaque voluptas architecto animi vel eveniet non corporis asperiores quasi a adipisci, at. Sunt, quaerat, eius!</p>
                            </div>
                            <div class="col-md-5 descricao_imovel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ratione, quisquam recusandae id repudiandae ducimus assumenda accusamus! Quam vero fuga voluptates, voluptatum saepe hic non harum sit, alias. Ad, deleniti.</p>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="col-md-12 bg-cinza-escuro area-contato-imovel">
                                <p><i class="fas fa-phone"></i> 11 3995-7808</p>
                                <p><i class="fab fa-whatsapp"></i> 11 98142-7175</p>
                                <!-- formulario -->
                                <form>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="nome"></label>
                                        <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control" required="">
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="nome"></label>
                                        <input id="telefone" name="telefone" pattern="[0-9]+$" type="tel" placeholder="Telefone:" class="form-control" required="">
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="nome"></label>
                                        <input id="email" name="email" type="email" placeholder="E-mail:" class="form-control" required="">
                                    </div>
                                    
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="control-label" for="mensagem"></label>
                                        <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Mensagem:" required=""></textarea>
                                    </div>
                                    
                                    
                                    
                                </form>
                            </div>
                            <div class="form-group enviar">
                                <label class="control-label" for="enviar"></label>
                                
                                <button class="btn btn-default btn-enviar">Enviar</button>
                            </div>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  btn-lg btn-visita" data-toggle="modal" data-target="#ModalAgende">
                            Agende uma visita
                            </button>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-lg btn-corretor-online">
                            Falar com um corretor online
                            </button>
                            
                                    </div>
                                    
                                    <!--/Slider-->
                                </div>
                            </div>
                        </section>
                        <section id="Mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14622.199071642488!2d-46.63675560000001!3d-23.620474749999996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1544566648148" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </section>
                        
                        
                        <!-- Destaques -->
       <?php include('inc/destaques.php') ?>
       
                        <?php include('inc/footer.php') ?>
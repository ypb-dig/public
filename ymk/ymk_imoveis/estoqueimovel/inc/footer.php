<!-- MODAL -->
<?php include('modal.php') ?>
<!-- FIM MODAL -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="index.php">Home</a></li>
                        <li role="presentation"><a href="quem-somos.php">Quem somos</a></li>
                        <!-- <li role="presentation"><a href="#">Imóveis</a></li>
                        <li role="presentation"><a href="#">Seviços</a></li>
                        <li role="presentation"><a href="#">Contato</a></li> -->
                    </ul>
                </nav>
            </div>
            <div class="col-md-4 redes">
                <h6>Redes Sociais</h6>
                <ul>
                    <li><a href="https://www.facebook.com/estoqueimovel/" target="_blank">facebook</a></li>
                    <li><a href="https://www.instagram.com/estoqueimovel/" target="_blank">instagram</a></li>
                    <li><a href="https://www.youtube.com/results?search_query=grupo+ymk" target="_blank">youtube</a></li>

                    <li><a href="https://br.pinterest.com/grupoymk/pins/" target="_blank">pinterest</a></li>
                    <li><a href="https://www.linkedin.com/company/grupoymk/" target="_blank">linkedin</a></li>

                    <li><a href="https://api.whatsapp.com/send?phone=5511991209739" target="_blank">(11) 9 9120-9739</a></li>

                </ul>
            </div>
            <div class="col-md-5 endereco">
                <p>Av. Jabaquara, 1771 - Cj 409 - Saúde - São Paulo/SP</p>
                <p> <a href="tel:1139957811">(11) 3995-7811</a> | <a href="tel:1139957808">(11) 3995-7808</a></p>
                <a href="mailto:contato@estoqueimovel.com.br">contato@estoqueimovel.com.br</a>
                <p> CRECI: 29.301</p>
                <a href="https://goo.gl/maps/gX6VopQbDBs" target="_blank">[como chegar] </a>
            </div>
        </div>
        <div class="row unidades">

            <div class="col-md-12">
                <a href="#">
                    <img src="img/icones/estoqueimovel.png" alt="" class="center-block img-responsive">
                </a>
            </div> <br><br><br>


            <h6 class="text-center">Uma empresa do</h6> 

            <div class="col-md-12">
                <a href="#">
                    <img src="img/icones/ymkgrupo.png" alt="" class="center-block img-responsive">
                </a>
            </div> <br><br><br><br>


            <div class="col-md-9 col-md-offset-2">
                <div class="col-md-2">
                <a href="#">
                    <img src="img/icones/imovelpra.png" alt="" class="center-block img-responsive">
                </a>
            </div>

            <div class="col-md-2">
                <a href="#">
                    <img src="img/icones/realestate4me.png" alt="" class="center-block img-responsive">
                </a>
            </div>

            <div class="col-md-2">
                <a href="#">
                    <img src="img/icones/bladoom.png" alt="" class="center-block img-responsive">
                </a>
            </div>
            <div class="col-md-2">
                <a href="#">
                    <img src="img/icones/credito.png" alt="" class="center-block img-responsive">
                </a>
            </div>
            
            <div class="col-md-1">
                
                <a href="#">
                    <img src="img/icones/ymkcorp.png" alt="" class="center-block img-responsive">
                </a>
            </div>

            <div class="col-md-1">
                <a href="#">
                    <img src="img/icones/ymkrealty.png" alt="" class="center-block img-responsive">
                </a>
            </div>

            <div class="col-md-1">
                <a href="#">
                    <img src="img/icones/ymkland.png" alt="" class="center-block img-responsive">
                </a>
            </div>
            </div>
        </div>

        
        <hr>

        <p class="text-center direitos">2018 todos os direitos reservados <!-- - <a href="#">Designed by YPB</a> --></p>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/creative.js"></script>

<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
    $(document).on('ready', function() {

        $(".responsive").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            speed: 300,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    });
</script>


<script>
    // Instantiate the Bootstrap carousel
    $('#theCarousel').carousel({
        interval: 2000,
    });
    // for every slide in carousel, copy the next slide's item in the slide.
    // Do the same for the next, next item.
    $('#theCarousel .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
</script>

<!-- Slide Destaque -->
<script>
    // Instantiate the Bootstrap carousel
    $('.slide-destaques').carousel({
        interval: 3000,
    });
    // for every slide in carousel, copy the next slide's item in the slide.
    // Do the same for the next, next item.
    $('.slide-destaques .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
</script>

<!-- DestaquesHome -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#DestaquesHome').carousel({
            interval: 3000,
            pause: true,
        });
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr("id");
            try {
                var id = /-(\d+)$/.exec(id_selector)[1];
                console.log(id_selector, id);
                jQuery('#DestaquesHome').carousel(parseInt(id));
            } catch (e) {
                console.log('Regex failed!', e);
            }
        });
        // When the carousel slides, auto update the text
        $('#DestaquesHome').on('slid.bs.carousel', function(e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });
    });
</script>

<!-- NUMEROS -->
<script>
var ani_ini = false; // crio um flag para marcar que a animação iniciou
$(window).on('scroll', function(){
var sc = $(window).scrollTop(); // valor do scroll da janela
var el = $('.count').first(); // elemento que quero detectar (o primeiro da classe .count)
var el_top = el.offset().top; // distância do elemento até o topo do documento
var win_height = window.innerHeight; // altura visível da janela
// verifico se o elemento apareceu subtraindo distância do elemento ao topo - scroll da janela
if(el_top - sc <= win_height && !ani_ini){
ani_ini = true; // mudo o status da variável (flag) para impedir que o loop se repita
$('.count').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 2000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});
}
});
</script>
</body>

</html>
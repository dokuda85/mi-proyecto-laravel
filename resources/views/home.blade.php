<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>LALLAJTA</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{('img/logo.png')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="section">
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="{{('img/logo.png')}}" alt="#" width="150px"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
                                 <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                 <li class="last"><a href="#"><img src="{{('img/search_icon.png')}}" alt="icon"/></a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Bienvenido a<strong class="color"> nuestra tienda</strong></h1>
                              <p>te damos la bienvenida a nuestra tienda online, estamos encantados de tenerte entre nuestros clientes, inicia tu mejor experiencia comprando ropa ideal para cada ocasion disfruta de nuestros productos, disfruta de cada una de nuestras ofertas disponibles para ti.</p>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="{{('img/wlcom.png')}}" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Nuestra <strong class="color"> Cosecha</strong></h1>
                              <p>La cosecha mecanizada tiene como ventaja la rapidez y un menor costo por tonelada recolectada, pero al ser destructiva, sólo puede ser utilizada en cultivos de maduración concentrada. La inversión necesaria para la adquisición, el costo de mantenimiento y la ociosidad del equipo durante gran parte del año hace que la decisión de compra deba ser cuidadosamente analizada. Como desventajas adicionales se pueden mencionar que toda la operación debe estar diseñada para la cosecha mecánica, empezando por el cultivo, distancia entre hileras, nivelación del terreno, pulverizaciones, labores culturales y muy especialmente variedades que se adapten a un manipuleo más rudo.</p>

                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="https://thumbs.dreamstime.com/b/campos-de-la-cosecha-17752257.jpg" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Nuestra <strong class="color"> Politica</strong></h1>
                              <p>Presentamos de un servicio de asesoramiento técnico en comercio exterior y ejecución de misiones comerciales directas e inversas y eventos relacionados con el comercio exterior para la promoción del comercio e internacionalización de pequeñas y medianas empresas.</p>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="https://1.bp.blogspot.com/--FxJcZWKJK8/UFThj472GrI/AAAAAAAAARc/EjDVxPyKDek/s320/Meeting.jpg" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black">Nuestros</strong> productos</h2>
                     <span>Nos concentramos en la mejor experiencia del consumidor para eso presentamos un poco de los productos en venta de las siguientes ilustraciones en las que puedes ver el precio y nombre del producto, esperamos su respuesta para hacer las compras con usted.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product">
                     <figure><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMxC99WYIyQnwed7es6s1haiiEiZt267BKuw&usqp=CAU" alt="img"/></figure>
                    <h3> bs<strong class="price_text">50</strong></h3>
                     <h4>Naranja</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="https://images-na.ssl-images-amazon.com/images/I/61hzH-pFFRL._AC_SX425_.jpg" alt="img"/></figure>
                    <h3> bs<strong class="price_text">50</strong></h3>
                     <h4>Platano</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="data:image/jpeg;base64,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" alt="img"/></figure>
                     <h3> bs<strong class="price_text">50</strong></h3>
                     <h4>Palta</h4>
                  </div>
               </div>
    
        
       
         
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product">
                     <figure><img src="https://www.koppert.es/content/_processed_/b/9/csm_Mandarin_0564d08cad.jpg" alt="img"/></figure>
                   <h3> bs<strong class="price_text">50</strong></h3>
                     <h4>Mandarina</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="https://olimpiatours.cl/wp-content/uploads/2019/03/pacay_pacae_beneficios-1024x576.jpg" alt="img"/></figure>
                    <h3> bs<strong class="price_text">50</strong></h3>
                     <h4>Pacay</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="https://cdn.doers.video/embed/e890876f871cc333bd042ee9f3a221526434412/581341a3cfeab.jpg" alt="img"/></figure>
                    <h3> bs<strong class="price_text">50</strong></h3>
                     <h4>Hoja de Coca</h4>
                  </div>
               </div>
             </div>
            </div>
           </div>
      </div>
      <!-- end plant -->
      <!--about -->
      <div class="section about ">
         <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                     <h2><strong class="black"> Sobre</strong>  nosotros</h2>
                     <span>Somos una empresa dispuestos a mejorar la calidad de nuestros productos y al mejor precio, estamos para el consumidor y toda la mejor experiencia y todo de buena calidad, nos normamos a las leyes de exportación y entrega segura.</span>
                  </div>
                </div>
             </div>
         </div>
      </div>



      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Agricultor</h1>
                              <p  class="lorem_text">Un agricultor es alguien que trabaja bajo el paraguas de la agricultura, la producción de una variedad de productos alimenticios para el consumo humano y animal. Hay varios tipos de agricultores que van desde los Agricultores que crían Animales a los Agricultores que cultivan Frutos y Hostalizas .</p>
                              <div class="btn_main">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="https://geoinnova.org/blog-territorio/wp-content/uploads/2015/10/agricultor-sostenible.jpg" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Medio de trasporte</h1>
                              <p  class="lorem_text">Existen diversas alternativas, medos y medios, de trasporte para las empresas que desean importar o exportar. Los modos de trasporte pueden ser caracter aereo, maritimo, terrestre y ferroviario. Los medios por su parte, se refiere a los vehiculos necesarios para el trasporte segun el modo escogido. Tambien, existen otra alternativa de trasporte conocida como multimodal.</p>
                              <div class="btn_main">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="https://1.bp.blogspot.com/-v8IMz_DJccA/WaXarqFq9hI/AAAAAAAAHJo/2B2n7261_jME1w9_xM7cTvHXvnE9XJVwgCLcBGAs/s1600/Modos%2By%2Bmedios%2Bde%2Btransporte%2Bpara%2Bla%2Bimportaci%25C3%25B3n%2By%2Bexportaci%25C3%25B3n.jpg" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Las mejores frutas de nuestra tienda</h1>
                              <p  class="lorem_text">Manejamos la mejor selección de frutas para el consumidor cada producto es cultivado con mucha delicadeza, se utiliza los productos necesarios para que cada fruta crezca de una forma eficaz, la forma en la que la presentamos y seleccionamos es la mejor fruta que se cultiva en los ambientes requeridos. Esto nos lleva a sacar nuestra producciones diferentes lugares y el cual se lleva con todo cuidado y precaución.</p>
                              <div class="btn_main">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="https://media.istockphoto.com/photos/great-choice-of-fruits-at-a-market-picture-id500722926" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- end about -->
      <!--Our  Clients -->
      <div id="plant" class="section_Clients layout_padding padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2> </h2>
                     <span style="text-align: center;"></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <div class="section Clients_2 layout_padding padding-top_0">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">

                        <div id="testimonial" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#testimonial" data-slide-to="0" class="active"></li>
    <li data-target="#testimonial" data-slide-to="1"></li>
    <li data-target="#testimonial" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="" style="max-width: 100%;"></div>
                              <div class="john_text">Futura Produccion<span style="color: #fffcf4;">Mango</span></div>
                              <p class="lorem_ipsum_text">Esta en nuestra nueva adquisición el producto, a ser un futuro producto a salir  y se toma en cuenta que tan buen recibimiento llega a tener en nuestros clientes por el cual agregamos a sacarlo a la venta.</p>
                              <div class="icon_image"><img src="data:image/jpeg;base64,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"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="" style="max-width: 100%;"></div>
                              <div class="john_text">Futura Produccion<span style="color: #fffcf4;">Granada</span></div>
                              <p class="lorem_ipsum_text">Esta en nuestra nueva adquisición el producto, a ser un futuro producto a salir  y se toma en cuenta que tan buen recibimiento llega a tener en nuestros clientes por el cual agregamos a sacarlo a la venta.</p>
                              <div class="icon_image"><img src="https://i.blogs.es/76a2a9/granadas/450_1000.jpg"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="" style="max-width: 100%;"></div>
                              <div class="john_text">Futura Produccion<span style="color: #fffcf4;">Manzana</span></div>
                              <p class="lorem_ipsum_text">Esta en nuestra nueva adquisición el producto, a ser un futuro producto a salir  y se toma en cuenta que tan buen recibimiento llega a tener en nuestros clientes por el cual agregamos a sacarlo a la venta.</p>
                              <div class="icon_image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9naGWOySAwKkHTxlIfDS6mDmZkxRC3gHTTA&usqp=CAU"></div>
                           </div>
                        </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#testimonial" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      <!-- end Our  Clients -->
      <!-- start Contact Us-->

      <div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                    <h2><strong class="black"> </strong> </h2>
                     <span style="text-align: center;"></span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="contact_us_2 layout_padding paddind_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="soc_text">Mundo</div>
               </div>
               <div class="col-md-6">
                  <div class="email_btn">
                     <form action="/action_page.php">
                        <div class="form-group">
                           <input type="text" class="form-control form-control-sm" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Phone" name="Phone">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Massage" name="text3">
                        </div>
                         <div class="submit_btn">
                            <button type="submit" class="btn btn-primary" style="background: #081b30; color: #fff; padding: 11px;">enviar</button>
                         </div>
                      </form>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="contact_us_3 layout_padding">
            <div class="row">
               <div class="col-md-4">
                  <h1 style="color: #ffffff; "></h1>
                  <p class="long_text"></p>
               </div>
               <div class="col-md-8">
                  <div class="email_text">
                     <div class="input-group mb-3">
                        <input style="border-bottom-left-radius: 20px !important; border-top-left-radius: 20px !important;" type="text" class="form-control" placeholder="Enter your email">
                     <div class="input-group-append">
                        <button style="border-top-right-radius: 20px !important; border-bottom-right-radius: 20px !important; color: #fff; padding-bottom: 10px; padding-top: 10px;" class="btn btn-primary" type="Subscribe">suscribete</button>  
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            </div>
         </div>
      </div>

      
    <div id="footer" class="Address layout_padding">
       <div class="container">
          <div class="row">
             <div class="col-sm-12">
               <div class="titlepage">
                  <div class="main">
                     <h1 class="address_text">Contactos</h1>
                  </div>
               </div>
             </div>
          </div>
               <div class="address_2">
                  <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="{{('img/map-icon.png')}}" /></span>
                          <span style="margin-top: 10px;">Calle los robles 475 entre gordan y antezana</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="{{('img/phone-icon.png')}}" /></span>
                          <span style="margin-top: 21px;">(+519 79966256 )</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="{{('img/email-icon.png')}}" /></span>
                          <span style="margin-top: 21px;">rodrig_201@hotmail.com</span></div>
                     </div>
                     </div> 
                  </div>
               </div>
                  <div class="menu_main">
                     <div class="menu_text">
                        <ul>
                        </ul>
                     </div>
                  </div>
       </div>
    </div>

      <!-- end Contact Us-->
      <!-- footer start-->
      <div id="plant" class="footer layout_padding">
         <div class="container">
            <p><a href="https://html.design/"></a></p>
         </div>
      </div>

      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>
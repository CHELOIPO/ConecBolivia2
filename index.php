<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaginaInicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="" class="logo">
            <span>CONNECT</span>BOLIVIA
        </a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fa fa-bars"></label>
        <nav class="navbar">
            <a href="">Home</a>
            <a href="#detalles">Detalles</a>
            <a href="#acerca_de ">Acerca de</a>
            <a href="#opiniones">Opiniones</a>
            <a href="#precios">Precios</a>
            <a href="#contactos">Contacto</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <section class="inicio">
        <div class="content">
            <h3>NET CONECTION <span>SPACE WEB </span></h3>
            <p class="">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi 
                ad mollitia maiores doloremque nisi. Dolor maxime veniam saepe. 
                Numquam, saepe similique suscipit dicta ex quos tempora, eaque aperi-
                am hic consequuntur, vel vitae deserunt voluptas quas consequatur neque
                temporibus. Vitae sed cum soluta quod rerum odio obcaecati blanditiis 
                fugit veritatis aliquid?
            </p>
            <a href="" class="btn" id="botonc" onclick="mostrar();">MAS DETALLES </a>
            <div id="texto-oculto">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptatibus
                    eveniet nemo ipsam, quidem voluptates autem in quis quisquam veniam labore 
                    aliquam consectetur unde, molestiae suscipit sint distinctio. Ad ipsam earum
                    suscipit odit, velit architecto cupiditate rerum exercitationem vero eius 
                    ratione eos, vel eligendi quo cumque nostrum corrupti iste repudiandae.</p>

            </div>
        </div>
        <div class="image">
            <img src="imgenes/foto3.jpg" alt="servidor" srcset="">

        </div>

    </section>
    <section class="detalles" id="detalles">
        <h1 class="heading">DETALLES </h1>
        <div class="caja-contenedor">
            <div class="caja">
                <img src="imgenes/foto2.jpg" alt="" srcset="">
                <h3>SISTEMA MODERNO</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                    optio illo repellendus voluptatem earum obcaecati vel magni quis
                    deleniti delectus alias eaque, incidunt recusandae natus mollitia,
                    omnis velit cumque laudantium!
                </p>
                <a href="" class="btn">VER MAS</a>
            </div>
            <div class="caja">
                <img src="imgenes/foto3.jpg" alt="" srcset="">
                <h3>RAPIDO</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                    optio illo repellendus voluptatem earum obcaecati vel magni quis
                    deleniti delectus alias eaque, incidunt recusandae natus mollitia,
                    omnis velit cumque laudantium!
                </p>
                <a href="" class="btn">VER MAS</a>
            </div>
            <div class="caja">
                <img src="imgenes/foto4.avif" alt="" srcset="">
                <h3>EFICIENTE</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                    optio illo repellendus voluptatem earum obcaecati vel magni quis
                    deleniti delectus alias eaque, incidunt recusandae natus mollitia,
                    omnis velit cumque laudantium!
                </p>
                <a href="" class="btn">VER MAS</a>
            </div>
        </div>
        <section class="acerca_de" id="acerca_de">
            <h1 class="heading">
                ACERCA DE
            </h1>
            <div class="columna">
                <div class="image">
                    <img src="imgenes/servi2.webp" alt="" srcset="">
                </div>
                <div class="content">
                    <h3>FULL EFICIENCIA</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut tempora
                        optio dolorem voluptates, perferendis totam unde quibusdam nesciunt.
                        Consequatur, itaque?
                    </p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas 
                        tempore culpa itaque autem libero, repellat iure odit, adipisci nobis
                        nulla necessitatibus earum est suscipit corrupti consequatur ipsam minus
                        nisi ullam. Voluptates temporibus est dicta illo, minima doloribus sequi
                        cumque modi, dolores architecto ipsam necessitatibus dolore sit optio 
                        doloremque odio natus!
                    </p>
                    <div class="bottons">
                        <a href="" class="btn"><i class="fab fa-google-play"></i> GOOGLE-PLAY</a>
                        <a href="" class="btn"><i class="fab fa-google-play"></i>APPLE-STORE</a>
                    </div>
                </div>
                <section>
                    <div class="suscribete">
                        <h3>Suscribtete para novedades</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit
                            eius expedita dolor beatae vel quibusdam repellendus rerum fugit 
                            accusantium vitae rem officiis architecto, itaque id nostrum quas 
                            quaerat explicabo obcaecati. Eum illo ipsum laborum alias?</p>
                        <form action="">
                            <input type="email" placeholder="Ingresa tu email">
                            <input type="submit" value="suscribete">
                        </form>    
                    </div>
                </section>
                <section class="opiniones" id="opiniones">
                    <h1 class="heading">opiniones de clientes </h1>
                    <div class="caja-contenedor">
                        <div class="caja">
                            <i class="fas fa-atom"></i>
                            <div class="user">
                                <img src="imgenes/user_1.png" alt="usuario 1 ">
                                <h3>pedro</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="comentarios">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sit rem sapiente veritatis excepturi reprehenderit. 
                                    Distinctio corrupti mollitia iste impedit! Sed beatae
                                    necessitatibus architecto illum placeat!
                                    </p> 
                            </div>
                        </div>
                        <div class="caja">
                            <i class="fas fa-atom"></i>
                            <div class="user">
                                <img src="imgenes/user_2.png" alt="usuario 1 ">
                                <h3>fabiola</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="comentarios">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sit rem sapiente veritatis excepturi reprehenderit. 
                                    Distinctio corrupti mollitia iste impedit! Sed beatae
                                    necessitatibus architecto illum placeat!
                                    </p> 
                            </div>
                        </div>
                        <div class="caja">
                            <i class="fas fa-atom"></i>
                            <div class="user">
                                <img src="imgenes/user_3.png" alt="usuario 1 ">
                                <h3>francisco</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="comentarios">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sit rem sapiente veritatis excepturi reprehenderit. 
                                    Distinctio corrupti mollitia iste impedit! Sed beatae
                                    necessitatibus architecto illum placeat!
                                    </p> 
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
    <section class="precios" id="precios">
        <h1 class="heading">Planes de pago</h1>
        <div class="caja-contenedor">
            <div class="caja">
                <h3 class="titulo">tradiciones</h3>
                <div class="tipos">$ 50 <span> con factura </span> </div>
                <ul>
                    <li><i class="fas fa-check"></i>manos libres </li>
                    <li><i class="fas fa-check"></i>alta resistencia</li>
                    <li><i class="fas fa-times"></i>extra basss </li>
                    <li><i class="fas fa-times"></i>cancelacion de ruido  </li>
                </ul>
                <a href="#" class="btn">compra ya</a>
            </div>
            <div class="caja">
                <h3 class="titulo">tradiciones</h3>
                <div class="tipos">$ 50 <span> con factura </span> </div>
                <ul>
                    <li><i class="fas fa-check"></i>manos libres </li>
                    <li><i class="fas fa-check"></i>alta resistencia</li>
                    <li><i class="fas fa-times"></i>extra basss </li>
                    <li><i class="fas fa-times"></i>cancelacion de ruido  </li>
                </ul>
                <a href="#" class="btn">compra ya</a>
            </div>
            <div class="caja">
                <h3 class="titulo">tradiciones</h3>
                <div class="tipos">$ 50 <span> con factura </span> </div>
                <ul>
                    <li><i class="fas fa-check"></i>manos libres </li>
                    <li><i class="fas fa-check"></i>alta resistencia</li>
                    <li><i class="fas fa-times"></i>extra basss </li>
                    <li><i class="fas fa-times"></i>cancelacion de ruido  </li>
                </ul>
                <a href="#" class="btn">compra ya</a>
            </div>
        </div>
    </section>
    <section class="contactos" id="contactos" >
        <div class="image">
        <img src="imgenes/form_img.png" alt="" >
        </div>
        <form action="">
            <h1 class="heading">contactos</h1>
            <div class="inputcaja">
                <input type="text" required>
                <label for="">nombre</label>
            </div>
            <div class="inputcaja">
                <input type="email" required>
                <label for="">email</label>
            </div>
            <div class="inputcaja">
                <input type="number" required>
                <label for="">telefono</label>
            </div>
            <div class="inputcaja">
                <textarea  required name="" id="" cols="30" rows="10"></textarea>
                <label for="">mensaje</label>
            </div>
            <input type="submit" class="btn"  value="ENVIAR">

        </form>
    </section>
    <div class="footer">
        <div class="caja-contenedor">
            <div class="caja">
                <h3>noticias e informacion </h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sint sit error vitae quod sed aliquid repellat magnam
                    consequuntur at doloribus?
                </p>
            </div>
            <div class="caja">
                <h3>buscamos en </h3>
                <a href="">facebook</a>
                <a href="">instagram</a>
                <a href="">pinterest</a>
                <a href="">twitter</a>
            </div>
            <div class="caja">
                <h3>mas informacion</h3>
                <div class="info">
                    <i class="fas fa-phone"></i>
                    <p>1254558<br>78598963</p>
                </div>
                <div class="info">
                    <i class="fas fa-envelope"></i>
                    <p>conect@gmail.com<br>conect2_server@gmail.com</p>
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>cochabamba,Bolivia<br>cod 155549</p>
                </div>
            </div>
        </div>
        <h1 class="creditos">
            &copyright @2024 Icepal;
        </h1>
    </div>


<script src="/js/app.js"></script>
</body>
</html>
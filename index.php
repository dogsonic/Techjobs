<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="" type="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Estilo BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link href="https://unpkg.com/progressive-image@1.2.0/dist/index.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!--Título do Browser-->

    <title>TECH JOBS</title>
</head>

<body id="home">
    <header class="main-header">

        <nav class="main-header-content">

            <div class="logo">
                <a href="index.php">TechJobs</a>
            </div>


            <nav class="menu">

                <ul>
                    <li class="item-menu">
                        <a href="index.php">
                            <span class="icon"><i class="bi bi-house-door"></i></span>
                            <span class="txt-link">Home</span>
                        </a>
                    </li>
                    </li>
                    <li class="item-menu">
                        <a style="color: coral" href="auth/index.php">
                            <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                            <span class="txt-link">Login</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a style="color: coral" href="usuarios/opçõesCadastro.php">
                            <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                            <span class="txt-link">Cadastrar</span>
                        </a>
                    </li>

                </ul>


            </nav>
        </nav>
    </header>
    <div class="main-cta">
        <article class="main-cta-banner">
            <div class="main-cta-banner-spacer">
                <p>Aqui conectamos provedores de emprego e candidatos a trabalho</p>
                <h1>Pesquisar Vagas</h1>


                <div class="col-md-12">
                    <div class="card-body font-weight-bold">
                        <div class="form-group main-cta-banner-busca">
                            <form action="pesquisar.php" method="POST">
                                <input type="text" name="vaga" size="50" placeholder="Insira o nome da vaga">
                                <button type="submit" class=" btn-primary btn-lg btn-login">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="seta">
                    <i class="fa fa-arrow-down"></i>
                </div>
                <p><a href="#" class="saiba-mais">Saiba Mais</a></p>
            </div>
        </article>
    </div>

    <section class="main-blog">

        <div class="main-blog-header">
            <h2 class="aos-init aos-animate">
                "Por maior que seja o seu cansaço, nunca deixe de estudar! <br>
                Estudar é um privilégio e só o seu
                esforço pessoal te levará a conhecer pessoas e mundos que os acomodados jamais conhecerão,"
            </h2>
        </div>

        <div class="main-blog-content">
            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <h3>HAPPY HOURS</h3>
                    <p>Aumente sua produtividade no happy hour,
                        <a href="https://monkeytype.com/" target="_blank" rel="external">Clique aqui</a>
                        e descubra uma maneira de treinar sua digitação.
                    </p>
                </div>
            </article>


            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-desktop"></i>
                </div>
                <div class="content">
                    <h3>Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>


            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

            <article>
                <div class="icon">
                    <i class="fa fa-3x fa-code"></i>
                </div>
                <div class="content">
                    <h3>Programing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente porro dolore optio.
                        Ex dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>

        </div>
    </section>


    <article class="opt-in">
        <div class="opt-in-content">
            <a href="#home" class="scrollup show-scroll">
                <i class="fa fa-arrow-up scrollup__icon"></i>
            </a>
        </div>
    </article>

    <section class="main-assinatura">

        <article class="main-assinatura-content">
            <div class="main-assinatura-spacer"></div>
            <img src="assets/img/undraw_Reading_time_re_phf7.png" width="800px" height="600px" alt="">

            <div class="assinatura-boxes">
                <div class="assinatura-box-content">

                    <div class="div-border">

                        <div class="box-single-content">
                            <h1><a href="">Turma G<br>Mão na Massa</a></h1>
                            <p>
                                Nasce da idéia de tornar o aprendizado em relação ao que é exigido pelo setor, mais
                                fácil
                                intuitivo e Dinâmico.

                            </p>
                        </div>
                    </div>

                    <div class="div-border">

                        <div class="box-single-content">
                            <h1><a href="">Turma G<br>Mão na Massa</a></h1>
                            <p>
                                Uma vez que são muitos protocolos e procedimentos para
                                absorver,
                                as
                                vezes em pouco tempo. Esse trabalho serve como base para tirar duvidas e aprender.
                            </p>
                        </div>
                    </div>

                    <div class="div-border">

                        <div class="box-single-content">
                            <h1><a href="">Turma G<br>Mão na Massa</a></h1>
                            <p>
                                Nasce da idéia de tornar o aprendizado em relação ao que é exigido pelo setor, mais
                                fácil
                                intuitivo e Dinâmico. Uma vez que são muitos protocolos e procedimentos para
                                absorver,
                                as
                                vezes em pouco tempo. Esse trabalho serve como base para tirar duvidas e aprender.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

    </section>

    <!--<article class="opt-in">
    <div class="opt-in-content">
        <a href="#home" class="scrollup show-scroll">
            <i class="fa fa-arrow-up scrollup__icon"></i>
        </a>
    </div>
</article>-->


    <section class="main-team">
        <div class="main-team-header">
            <h2>Nossa equipe</h2>

        </div>


        <div class="main-team-box app">

            <div class="box-single-team">

                <div class="box-single-team-content">
                    <h1>Ronan Silva</h1>
                    <h3>Administrator DataBase</h3>
                    <p id="p-content-team">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, unde dicta ipsum
                        laborum
                        id
                        numquam placeat minima exercitationem tempora bteamlanditiis tenetur temporibus! Repudiandae
                        officia
                        corporis voluptatum rem ut perspiciatis. Fuga?
                    </p>
                    <div class="box-single-medias">
                        <i class="fa fa-2x fa-facebook"></i>
                        <i class="fa fa-2x fa-instagram"></i>
                        <i class="fa fa-2x fa-github"></i>
                    </div>
                </div>
            </div>
            <div class="box-single-team">
                <div class="box-single-team-content">
                    <h1>Lucas Caio</h1>
                    <h3>Developer front-end</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, unde dicta ipsum
                        laborum
                        id
                        numquam placeat minima exercitationem tempora blanditiis tenetur temporibus! Repudiandae
                        officia corporis voluptatum rem ut perspiciatis. Fuga?
                    </p>
                    <div class="box-single-medias">
                        <i class="fa fa-2x fa-facebook"></i>
                        <i class="fa fa-2x fa-instagram"></i>
                        <i class="fa fa-2x fa-github"></i>
                    </div>
                </div>
            </div>
            <div class="box-single-team">
                <div class="box-single-team-content">
                    <h1>Jordan de Carvalho</h1>
                    <h3>Developer back-end</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, unde dicta ipsum
                        laborum
                        id
                        numquam placeat minima exercitationem tempora blanditiis tenetur temporibus! Repudiandae
                        officia corporis voluptatum rem ut perspiciatis. Fuga?
                    </p>
                    <div class="box-single-medias">
                        <i class="fa fa-2x fa-instagram"></i>
                        <i class="fa fa-2x fa-github"></i>
                    </div>
                </div>
            </div>

            <div class="box-single-team">
                <div class="box-single-team-content">
                    <h1>Pedro Santana</h1>
                    <h3>Developer Full-Stack</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, unde dicta ipsum
                        laborum
                        id
                        numquam placeat minima exercitationem tempora blanditiis tenetur temporibus! Repudiandae
                        officia corporis voluptatum rem ut perspiciatis. Fuga?
                    </p>
                    <div class="box-single-medias">
                        <i class="fa fa-2x fa-instagram"></i>
                        <i class="fa fa-2x fa-github"></i>
                    </div>
                </div>
            </div>
            <div class="box-single-team">
                <div data-aos="fade-up">
                    <div class="line"></div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>

    </section>

    <section class="main-noticias">
        <div class="noticias" id="news">
            <div class="box-noticias" id="app">
                <div class="box-single-noticias">
                    <div class="box-single-noticias-content">
                        <h2>Biblioteca de Cursos!!</h2>
                        <p>
                            O maior inimigo do conhecimento não é a ignorância, é a ilusão do conhecimento. <br> –
                            <i>Stephen Hawking!</i>
                            <li><a href="https://skillsforall.com" target="_blank" rel="external" style="color:
                             rgb(4, 185, 65);">Cursos da Cisco</a></li>
                            <li><a href="https://web.dio.me/" target="_blank" rel="external" style="color: rgb(24, 130,
                             250);">DIO.</a></li>
                            <li><a href="https://workover.com.br/" target="_blank" rel="external" style="color:
                             rgb(109, 5, 66);">Workover</a></li>
                            <li><a href="https://www.cursoemvideo.com/cursos/" target="_blank" rel="external" style="color:
                              rgb(38, 6, 218);">Curso em Video</a></li>
                            <li><a href="https://stg.ada.tech/sou-aluno" target="_blank" rel="external" style="color:
                                 rgb(4, 78, 1);">Ada-Tech</a></li>
                        </p>
                        <p><a href="https://drive.google.com/drive/folders/1AnNVHVEhmznbk9azvJSLPNATw23-uca5" target="_blank" rel="external">Livros<i class="fa fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="box-single-noticias">
                    <div class="box-single-noticias-content">
                        <h2>Pensar Como um programador!!</h2>
                        <p>
                            Pensar como um programador: é usar a tecnologia como extensão das suas capacidades. É
                            uma
                            forma que você tem de usar o digital para resolver problemas e alcançar seus objetivos.
                        </p>
                        <p>
                            <a href="https://www.freecodecamp.org/portuguese/news/como-pensar-como-um-programador-licoes-de-resolucao-de-problemas/" target="_blank" rel="external">Ver Mais <i class="fa fa-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
                <div class="box-single-noticias">
                    <div class="box-single-noticias-content">
                        <h2>Tecnologias & Hardwares</h2>
                        <p>
                            Conheça um dos maiores canais de tecnologia e hardware do país "Adrenaline".
                            Uma comunidade online com fonte de informação sobre Tecnologia, Hardware, jogos,
                            notícias,
                            artigos e análises de eletrônicos de consumo, gadgets, hardwares para computador e
                            games.
                        </p>
                        <p><a href="https://www.adrenaline.com.br/" target="_blank" rel="external">Ver Mais <i class="fa fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>


    <section class="grupo-icones">

        <div class="box-icones">
            <div class="box-single-icones">
                <i class="fa fa-5x fa-star"></i>
                <h3>55</h3>
                <p>prêmios</p>
            </div>
            <div class="box-single-icones">
                <i class="fa fa-5x fa-heart-o"></i>
                <h3>+180</h3>
                <p>clientes felizes</p>
            </div>
            <div class="box-single-icones">
                <i class="fa fa-5x fa-connectdevelop" aria-hidden="true"></i>
                <h3>20</h3>
                <p>anos de existênçia</p>
            </div>
            <div class="box-single-icones">
                <i class="fa fa-5x fa-bolt" aria-hidden="true"></i>
                <h3>24/24</h3>
                <p>horas de trabalho</p>
            </div>
            <div class="box-single-icones">
                <i class="fa fa-5x fa-map-marker"></i>
                <h3>+3</h3>
                <p>Agencias espalhadas pelo mundo</p>
            </div>

        </div>
    </section>


    <section class="main-utilites" id="contacto">

        <div>

            <h2>UTILITÁRIOS</h2>
        </div>
    </section>



    <!-- INICIO DOBRA RODAPÉ -->
    <section class="main_optin_footer">
        <div class="main_optin_footer_content">
            <header>
                <h1>Quer receber nosso conteúdo exclusivo? Faça uma assinatura :)</h1>
            </header>
            <article>
                <header>
                    <h2><a href="#" class="btn">Entrar para a lista premium</a></h2>
                </header>
            </article>
        </div>
    </section>

    <section class="main_footer">
        <header>
            <h1>Quer saber mais?</h1>
        </header>

        <article class="main_footer_our_pages">
            <header>
                <h2>Nossas Páginas</h2>
            </header>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">A Escola</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </article>

        <article class="main_footer_links">
            <header>
                <h2>Links Úteis</h2>
            </header>
            <ul>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Aviso Legal</a></li>
                <li><a href="#">Termos de Uso</a></li>
            </ul>
        </article>

        <article class="main_footer_about">
            <header>
                <h2>Sobre o Projeto</h2>
            </header>
            <p>Aprenda a trabalhar com HTML5 e CSS3 para desenvolver seus projetos e entregar páginas que estejam dentro
                dos padrões da WEB seguindo as boas práticas</p>
        </article>
    </section>
    <footer class="main_footer_rights">
        <p>ETC - Todos os direitos reservados.</p>
    </footer>
    <!-- FIM DOBRA RODAPÉ -->

    <a href="#home" class="scrollup show-scroll" id="scroll-up">
        <i class="fa fa-arrow-up scrollup__icon"></i>
    </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/progressive-image@1.2.0/dist/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/main.js"></script>
    <script>
        AOS.init({
            mirror: true
        });

        (function() {
            new Progressive({
                el: '#app',
                lazyClass: 'lazy',
                removePreview: true,
                scale: true
            }).fire()
        })()
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RDBD06ZRL9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-RDBD06ZRL9');
    </script>
    </main>
</body>

</html>
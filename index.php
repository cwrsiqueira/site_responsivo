<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Serviços de desenvolvimento de websites e sistemas web">
    <meta name="keywords" content="website, serviços, freelance, sistemas web">
    <meta name="author" content="Carlos Wagner WebDev">

    <meta name="robots" content="index, follow">
    <meta name="copyright" content="Carlos Wagner">

    <meta http-equiv="Content-Language" content="pt-BR">

    <meta property="og:title" content="CW webdev">
    <meta property="og:description" content="Serviços de desenvolvimento de websites e sistemas web">
    <meta property="og:image" content="https://etc.com.br">
    <meta property="og:url" content="https://etc.com.br">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="style.css">
    <title>CW webdev</title>
</head>

<body>
    <div class="back-top p-3 bg-primary rounded-circle d-flex justify-content-center align-items-center fs-3" style="width: 50px;height: 50px;">
        <a href="#home" class="text-light"><i class="fa-solid fa-arrow-up"></i></a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="home">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logomarca" width="80" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#team">Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#prices">Preços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#testimonials">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#contacts">Contatos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="d-flex justify-content-center align-items-center" style="width: 100%;height: calc(100vh - 106px);">
        <div class="bg-shadow"></div>
        <div class="cfa text-light px-3 container">
            <div>
                <h1>Um título de Impacto</h1>
                <h2>Um subtítulo de descrição dos benefícios</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit excepturi, autem repellat quia animi
                    labore repellendus aliquid voluptatibus iste perferendis, quam, facilis dignissimos nihil voluptas
                    ratione officiis ad magnam sed.</p>
                <a href="#contacts" class="btn btn-primary">Fale conosco</a>
            </div>
        </div>
        <img src="bg2.jpg" alt="Banner" class="w-100 h-100">
    </section>

    <section class="subscribe" id="subscribe">
        <div class="bg-dark text-dark p-3 p-sm-5">
            <?php if (!empty($_SESSION['msg_subscribe'])) {
                echo $_SESSION['msg_subscribe'];
                unset($_SESSION['msg_subscribe']);
            } ?>
            <form action="enviar-email.php" method="post" class="container d-flex d-md-block gap-3">
                <input type="hidden" name="action" value="subscribe">
                <div class="row">
                    <div class="col-sm mb-2 mb-md-0">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu E-mail">
                    </div>
                    <div class="col-sm-2 text-center">
                        <input type="submit" value="Subscrever" class="btn btn-secondary">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <main class="services" id="services">
        <div class="bg-light text-dark">
            <div class="container p-3 py-5">
                <div class="row" data-aos="fade-right">
                    <div class="my-3 border-bottom border-secondary">
                        <h1 class="text-secondary">Serviços</h1>
                    </div>
                    <div class="col-sm">
                        <ul>
                            <li>Criação de Sites</li>
                            <li>Otimização para SEO</li>
                            <li>Captura de leads</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <img src="about-us.png" alt="Sobre Nós" class="rounded shadow w-100">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="about" id="about">
        <div class="bg-light text-dark">
            <div class="container p-3 py-5">
                <div class="row" data-aos="fade-right">
                    <div class="my-3 border-bottom border-secondary">
                        <h1 class="text-secondary">Sobre Nós</h1>
                    </div>
                    <div class="col-sm">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam commodi sequi, earum optio a
                            libero minus obcaecati quidem voluptas eaque autem! Soluta id excepturi, ducimus sint,
                            deserunt aspernatur necessitatibus dolor commodi consectetur ipsum alias minima, quasi
                            tenetur ullam eius inventore. Dolor, vero quia obcaecati ex dignissimos itaque maxime animi
                            voluptates.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit nisi quisquam placeat
                            dicta ad enim tempore necessitatibus, dolore quis veritatis laborum, ullam, assumenda ea
                            illum? Labore excepturi odit quisquam pariatur.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, illum.</p>
                    </div>
                    <div class="col-sm">
                        <img src="about-us.png" alt="Sobre Nós" class="rounded shadow w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team" id="team">
        <div class="bg-secondary text-dark">
            <div class="container p-3 py-5">
                <div class="row d-flex justify-content-center" data-aos="fade-left">
                    <div class="my-3 border-bottom border-light text-end">
                        <h1 class="text-light fs-2">Nossa Equipe</h1>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center mb-2">
                            <div class="card" style="width: 18rem;">
                                <img src="d1.jpg" class="card-img-top" alt="Colaborador 1">
                                <div class="card-body">
                                    <h5 class="card-title">JOHN DOE</h5>
                                    <p class="card-text">Diretor Executivo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center mb-2">
                            <div class="card" style="width: 18rem;">
                                <img src="d2.jpg" class="card-img-top" alt="Colaborador 2">
                                <div class="card-body">
                                    <h5 class="card-title">JAMES DOE</h5>
                                    <p class="card-text">Diretor de Marketing</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="d3.jpg" class="card-img-top" alt="Colaborador 3">
                                <div class="card-body">
                                    <h5 class="card-title">MARY DOE</h5>
                                    <p class="card-text">Diretora Internacional</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prices" id="prices">
        <div class="bg-light text-dark">
            <div class="container p-3 py-5">
                <div class="row d-flex justify-content-center" data-aos="fade-right">
                    <div class="my-3 border-bottom border-secondary">
                        <h1 class="text-secondary fs-2">Preços</h1>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center mb-2">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Plano Básico</h5>
                                    <p class="card-text">$50</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Primeiro Benefício</li>
                                    <li class="list-group-item">Segundo Benefício</li>
                                    <li class="list-group-item">Terceiro Benefício</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link btn btn-success">Teste Grátis</a>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center mb-2">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Plano Intermediário</h5>
                                    <p class="card-text">$100</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Todos os benefícios do Plano Básico e mais...</li>
                                    <li class="list-group-item">Quarto Benefício</li>
                                    <li class="list-group-item">Quinto Benefício</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link btn btn-success">Teste Grátis</a>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Plano Avançado</h5>
                                    <p class="card-text">$150</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Todos os benefícios do Plano Intermediário e mais...
                                    </li>
                                    <li class="list-group-item">Sexto Benefício</li>
                                    <li class="list-group-item">Sétimo Benefício</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link btn btn-success">Teste Grátis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="bg-secondary text-dark">
            <div class="container p-3 py-5">
                <div class="row d-flex justify-content-center" data-aos="fade-left">
                    <div class="my-3 border-bottom border-light text-end">
                        <h1 class="text-light fs-2">Depoimentos</h1>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center mb-2">
                            <div class="card bg-transparent border-0 d-flex align-items-center" style="width: 18rem;">
                                <img src="d1.jpg" class="card-img-top rounded-circle w-50" alt="Depoimento 1">
                                <div class="card-body">
                                    <h5 class="card-title">JEFF DOE</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Molestias eveniet unde eum impedit iure odit saepe, assumenda autem veniam
                                        doloremque laborum iste consequuntur itaque corporis accusamus ex sed qui esse?
                                    </p>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center mb-2">
                            <div class="card bg-transparent border-0 d-flex align-items-center" style="width: 18rem;">
                                <img src="d2.jpg" class="card-img-top rounded-circle w-50" alt="Depoimento 2">
                                <div class="card-body">
                                    <h5 class="card-title">ANTONIO DOE</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Molestias eveniet unde eum impedit iure odit saepe, assumenda autem veniam
                                        doloremque laborum iste consequuntur itaque corporis accusamus ex sed qui esse?
                                    </p>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card bg-transparent border-0 d-flex align-items-center" style="width: 18rem;">
                                <img src="d3.jpg" class="card-img-top rounded-circle w-50" alt="Depoimento 3">
                                <div class="card-body">
                                    <h5 class="card-title">MARIA DOE</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Molestias eveniet unde eum impedit iure odit saepe, assumenda autem veniam
                                        doloremque laborum iste consequuntur itaque corporis accusamus ex sed qui esse?
                                    </p>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <div class="bg-light text-dark">
            <div class="container p-3 py-5">
                <div class="row" data-aos="fade-right">
                    <div class="my-3 border-bottom border-secondary">
                        <h1 class="text-secondary">Contatos</h1>
                    </div>
                    <div class="col-sm">
                        <p>CW webdev</p>
                        <p><i class="fa-solid fa-location-dot"></i> Av. das Nações, 123 - Batel - Curitiba - PR</p>
                        <p><i class="fa-brands fa-square-whatsapp"></i> 96 99110 0451</p>
                        <p><i class="fa-solid fa-envelope"></i> contato@minhaempresa.com.br</p>
                    </div>
                    <div class="col-sm">
                        <?php if (!empty($_SESSION['msg_contacts'])) {
                            echo $_SESSION['msg_contacts'];
                            unset($_SESSION['msg_contacts']);
                        } ?>
                        <form action="enviar-email.php" method="post">
                            <input type="hidden" name="action" value="formulario">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                            <label for="telefone" class="form-label">Telefone/Whatsapp</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Digite seu telefone ou whatsapp">
                            <label for="assunto" class="form-label">Assunto</label>
                            <input type="text" name="assunto" id="assunto" class="form-control" placeholder="Digite o assunto">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control" placeholder="Digite a mensagem"></textarea>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" value="Enviar" class="btn btn-success mt-3">
                                </div>
                                <div class="col d-flex align-items-end justify-content-center">
                                    <strong class="fs-5 text-bold text-secondary d-flex justify-content-center">ou</strong>
                                </div>
                                <div class="col d-flex align-items-end justify-content-center">
                                    <a href="https://wa.me/5511991234567" target="_blank" title="Falar agora pelo Whatsapp">
                                        <i class="fa-brands fa-whatsapp fs-1 text-success"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="bg-secondary text-light p-3">
            <div class="row d-flex flex-column-reverse flex-md-row">
                <div class="col-sm d-flex flex-column justify-content-center align-items-center">
                    <img src="logo.png" alt="Logomarca" width="80" height="80">
                    <small style="font-size: 12px;">CW webdev 2023 © Todos os direitos reservados.</small>
                </div>
                <div class="col-sm d-flex justify-content-center align-items-center"></div>
                <div class="col-sm d-flex justify-content-center align-items-center">
                    <a href=""><i class="fa-brands fa-facebook m-2 fs-3 social"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram m-2 fs-3 social"></i></a>
                    <a href=""><i class="fa-brands fa-youtube m-2 fs-3 social"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true,
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portfólio - João Lucas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS (Animate On Scroll) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="css/estilo.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
</head>
<body>

<!-- MENU -->
<header class="py-3 shadow-sm">
    <nav class="d-flex justify-content-between align-items-center container">

        <!-- LOGO / NOME -->
        <div class="nav-logo d-flex align-items-center">
            <i class="bi bi-code-slash logo-icon"></i>
            <span class="nome-logo">João Altafini</span>
        </div>

        <!-- LINKS DO MENU -->
        <div>
            <a href="#home">Home</a>
            <a href="#sobre">Sobre Mim</a>
            <a href="#projetos">Projetos</a>
            <a href="#experiencia">Experiência</a>
            <a href="#contato">Contato</a>
        </div>

    </nav>
</header>

<!-- HOME -->
<section id="home" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">

            <!-- FOTO -->
            <div class="col-md-6 text-center" data-aos="fade-right">
                <img src="imagens/foto-profissional.jpg" alt="Foto de Perfil" class="perfil-home">
            </div>

            <!-- TEXTOS -->
            <div class="col-md-6" data-aos="fade-left">
                <h1 class="titulo-home">Olá! Sou <span>João Lucas</span></h1>
                <h2 class="subtitulo-home">Futuro Desenvolvedor de Sistemas</h2>
                <p class="frase-home">"Frase motivacional"</p>
            </div>

        </div>
    </div>
</section>

<!-- ESPECIALIDADES -->
<section id="skills">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Skills</h2>

        <div class="row justify-content-center">

            <!-- HTML -->
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-card" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" width="60">
                    <h5 class="mt-2 text-center">HTML5</h5>
                </div>
            </div>

            <!-- CSS -->
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-card" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" width="60">
                    <h5 class="mt-2 text-center">CSS3</h5>
                </div>
            </div>

            <!-- PHP -->
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-card" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="60">
                    <h5 class="mt-2 text-center">PHP</h5>
                </div>
            </div>

            <!-- MySQL -->
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-card" data-aos="zoom-in">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="60">
                    <h5 class="mt-2 text-center">MySQL</h5>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SOBRE MIM -->
<section id="sobre">
   <div class="row mt-5 justify-content-center">

    <!-- CARD 1 — SOBRE -->
    <div class="col-md-5 col-12 mb-4" data-aos="fade-right">
        <div class="info-card">
            <h4>Sobre</h4>
            <p>
                Atualmente sou Assistente de Licitações e estou iniciando minha trajetória na área de tecnologia. 
                Possuo formação técnica em Desenvolvimento de Sistemas pela ETEC João Maria Stevanatto, onde adquiri 
                base sólida em programação e lógica. 
            </p>
            <p>
                Tenho maior facilidade com <strong>PHP</strong> e <strong>MySQL</strong>, além de forte interesse no desenvolvimento 
                web como um todo. Busco constantemente evoluir minhas habilidades e conquistar minha primeira experiência 
                profissional na área de TI.
            </p>
        </div>
    </div>

    <!-- CARD 2 — INFORMAÇÕES + IDIOMAS -->
    <div class="col-md-5 col-12 mb-4" data-aos="fade-left">
    <div class="info-card text-start">
        <h4>Informações</h4>

        <p><strong>Idade:</strong> 20 anos</p>
        <p><strong>E-mail:</strong> joao.altafini05@gmail.com</p>
        <p><strong>Celular:</strong> (19) 98361-4632</p>
        <p><strong>Endereço:</strong> Itapira - SP</p>
        <p><strong>Linguas:</strong> Português, Inglês (Intermediário)</p>
    </div>
</div>

</section>


<!-- PROJETOS -->
<section id="projetos">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Projetos</h2>

        <div class="row justify-content-center">

            <!-- Projeto 1 -->
            <div class="col-md-4 col-12 mb-4">
                <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                    <h4>Nome do Projeto 1</h4>
                    <p>Descrição breve do projeto...</p>
                    <a href="#" target="_blank">Ver projeto</a>
                </div>
            </div>

            <!-- Projeto 2 -->
            <div class="col-md-4 col-12 mb-4">
                <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                    <h4>Nome do Projeto 2</h4>
                    <p>Outra descrição curta...</p>
                    <a href="#" target="_blank">Ver projeto</a>
                </div>
            </div>

            <!-- Projeto 3 -->
            <div class="col-md-4 col-12 mb-4">
                <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                    <h4>Nome do Projeto 3</h4>
                    <p>Mais uma descrição...</p>
                    <a href="#" target="_blank">Ver projeto</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- EXPERIÊNCIA / FORMAÇÃO -->
<section id="experiencia">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Experiência & Formação</h2>

        <div class="row justify-content-center">

            <!-- Experiência Profissional -->
            <div class="col-md-5 col-12 mb-4">
                <div class="info-card" data-aos="fade-right">
                    <h4>Experiência Profissional</h4>
                    <p>Adicione aqui sua experiência profissional, empresa, período e responsabilidades.</p>
                </div>
            </div>

            <!-- Formação -->
            <div class="col-md-5 col-12 mb-4">
                <div class="info-card" data-aos="fade-left">
                    <h4>Formação</h4>
                    <p>Adicione aqui sua formação acadêmica, cursos, certificações etc.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- REDES SOCIAIS -->
<section id="redes">
    <div class="container info-card" data-aos="fade-up">

        <h2 class="text-center mb-4">Minhas Redes</h2>
        <p class="text-center mb-4">Você também pode me encontrar aqui:</p>

        <div class="row justify-content-center text-center">

            <!-- LINKEDIN -->
            <div class="col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <a href="https://www.linkedin.com/in/SEU-LINK" target="_blank">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original.svg" width="70">
                    <h5 class="mt-2">LinkedIn</h5>
                </a>
            </div>

            <!-- GITHUB -->
            <div class="col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://github.com/SEU-USUARIO" target="_blank">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" width="70" style="filter: invert(1);">
                    <h5 class="mt-2">GitHub</h5>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contato">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up">Contato</h2>

        <form action="enviar.php" method="POST" class="form-card" data-aos="fade-up">
    <label class="form-label">Nome:</label>
    <input type="text" name="nome" class="form-control estilizado" required>

    <label class="form-label">E-mail:</label>
    <input type="email" name="email" class="form-control estilizado" required>

    <label class="form-label">Mensagem:</label>
    <textarea name="mensagem" class="form-control estilizado" rows="5" required></textarea>

    <button type="submit" class="btn-enviar">Enviar Mensagem</button>
</form>
    </div>
</section>

<footer>
    <p>© 2025 - João Altafini</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1900,
        once: true
    });
</script>

</body>
</html>

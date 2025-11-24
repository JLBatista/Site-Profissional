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

    
</head>
<body>

<!-- MENU -->
<header class="py-3 shadow-sm">
    <nav class="d-flex justify-content-center">
        <a href="#home">Home</a>
        <a href="#sobre">Sobre Mim</a>
        <a href="#projetos">Projetos</a>
        <a href="#experiencia">Experiência</a>
        <a href="#contato">Contato</a>
    </nav>
</header>

<!-- HOME -->
<section id="home" class="hero">
    <img src="img/perfil.jpg" alt="Foto de Perfil" class="perfil" data-aos="zoom-in">
    <h1 data-aos="fade-up">Olá! Sou <span style="color:#4fa3ff;">João Lucas</span></h1>
    <h2 data-aos="fade-up" data-aos-delay="150">Futuro Desenvolvedor de Sistemas</h2>
    <p data-aos="fade-up" data-aos-delay="300">"Frase motivacional"</p>
</section>

<!-- ESPECIALIDADES -->
<section id="skills">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Especialidades</h2>

        <div class="row justify-content-center">

            <!-- HTML -->
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" width="60">
                    <h5 class="mt-2 text-center">HTML5</h5>
                </div>
            </div>

            <!-- CSS -->
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" width="60">
                    <h5 class="mt-2 text-center">CSS3</h5>
                </div>
            </div>

            <!-- PHP -->
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="60">
                    <h5 class="mt-2 text-center">PHP</h5>
                </div>
            </div>

            <!-- MySQL -->
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="60">
                    <h5 class="mt-2 text-center">MySQL</h5>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SOBRE MIM -->
<section id="sobre">
    <div class="container glass">
        <h2 class="text-center mb-4" data-aos="fade-up">Sobre Mim</h2>
        <p class="lead text-center" data-aos="fade-up">
            Sou um desenvolvedor em formação. Buscando sempre aprender e evoluir como profissional.
        </p>

        <div class="row mt-5">
            <div class="col-md-6" data-aos="fade-right">
                <h4>Soft Skills</h4>
                <ul>
                    <li>Comunicação</li>
                    <li>Trabalho em equipe</li>
                    <li>Proatividade</li>
                    <li>Organização</li>
                </ul>
            </div>

            <div class="col-md-6" data-aos="fade-left">
                <h4>Idiomas</h4>
                <ul>
                    <li>Inglês — Intermediário</li>
                </ul>
            </div>
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
                <div class="project-card">
                    <h4>Nome do Projeto 1</h4>
                    <p>Descrição breve do projeto...</p>
                    <a href="#" target="_blank">Ver projeto</a>
                </div>
            </div>

            <!-- Projeto 2 -->
            <div class="col-md-4 col-12 mb-4">
                <div class="project-card">
                    <h4>Nome do Projeto 2</h4>
                    <p>Outra descrição curta...</p>
                    <a href="#" target="_blank">Ver projeto</a>
                </div>
            </div>

            <!-- Projeto 3 -->
            <div class="col-md-4 col-12 mb-4">
                <div class="project-card">
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
                <div class="info-card">
                    <h4>Experiência Profissional</h4>
                    <p>Adicione aqui sua experiência profissional, empresa, período e responsabilidades.</p>
                </div>
            </div>

            <!-- Formação -->
            <div class="col-md-5 col-12 mb-4">
                <div class="info-card">
                    <h4>Formação</h4>
                    <p>Adicione aqui sua formação acadêmica, cursos, certificações etc.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- REDES SOCIAIS -->
<section id="redes">
    <div class="container glass mt-5" data-aos="fade-up">

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

        <form action="enviar.php" method="POST" class="p-4 shadow rounded bg-white" data-aos="fade-up">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control mb-3" required>

            <label class="form-label">E-mail:</label>
            <input type="email" name="email" class="form-control mb-3" required>

            <label class="form-label">Mensagem:</label>
            <textarea name="mensagem" class="form-control mb-3" required></textarea>

            <button type="submit" class="btn btn-primary w-100">Enviar Mensagem</button>
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

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

<!-- SOBRE MIM -->
<section id="sobre">
    <div class="container">
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
<section id="projetos" class="bg-light">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up">Projetos</h2>

        <div class="row">

            <!-- Projeto 1 -->
            <div class="col-md-6 mb-4" data-aos="fade-right">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3>Volta ao Mundo</h3>
                        <p>Projeto especial que apresenta países, fotos, bandeiras e informações utilizando API REST.</p>
                        <p><strong>Tecnologias:</strong> HTML, CSS, JS</p>
                        <a href="#" target="_blank" class="btn btn-primary">Repositório no GitHub</a>
                    </div>
                </div>
            </div>

            <!-- Projeto 2 -->
            <div class="col-md-6 mb-4" data-aos="fade-left">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3>Lorem</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><strong>Tecnologias:</strong> PHP, MySQL</p>
                        <a href="#" target="_blank" class="btn btn-primary">Repositório no GitHub</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- EXPERIÊNCIA -->
<section id="experiencia">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up">Experiência & Formação</h2>

        <div data-aos="fade-up">
            <h4>Formação Acadêmica</h4>
            <p><strong>Técnico em Desenvolvimento de Sistemas</strong> — ETEC João Maria Stevanatto (2020-2022)</p>
        </div>

        <div class="mt-4" data-aos="fade-up" data-aos-delay="150">
            <h4>Experiência Profissional</h4>
            <p><strong>Menor Aprendiz</strong> — Cristália Produtos Químicos e Farmacêuticos</p>
            <p>Atividades: bla bla bla</p>

            <p><strong>Assistente de Licitações</strong> — Cristália Produtos Químicos e Farmacêuticos</p>
            <p>Atividades: bla bla bla</p>
        </div>

        <div class="mt-4" data-aos="fade-up" data-aos-delay="300">
            <h4>Cursos Complementares</h4>
            <ul>
                <li>AIPA</li>
                <li>Bla Bla Bla</li>
                <li>Bla bla bla</li>
            </ul>
        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contato" class="bg-light">
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

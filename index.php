<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portfólio - João Lucas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<!-- MENU -->
<header>
    <nav>
        <a href="#home">Home</a>
        <a href="#sobre">Sobre Mim</a>
        <a href="#projetos">Projetos</a>
        <a href="#experiencia">Experiência</a>
        <a href="#contato">Contato</a>
    </nav>
</header>

<!-- HOME -->
<section id="home" class="hero">
    <img src="img/perfil.jpg" alt="Foto de Perfil" class="perfil">
    <h1>Olá! Sou <span>Seu Nome</span></h1>
    <h2>Futuro Desenvolvedor de Sistemas</h2>
    <p>"Frase motivacional"</p>
</section>

<!-- SOBRE MIM -->
<section id="sobre" class="secao">
    <h2>Sobre Mim</h2>
    <p>
        Sou um desenvolvedor em formação.
        Buscando sempre aprender e evoluir como profissional.
    </p>

    <h3>Soft Skills</h3>
    <ul>
        <li>Comunicação</li>
        <li>Trabalho em equipe</li>
        <li>Proatividade</li>
        <li>Organização</li>
    </ul>

    <h3>Idiomas</h3>
    <ul>
        <li>Inglês — Intermediário</li>
    </ul>
</section>

<!-- PROJETOS -->
<section id="projetos" class="secao">
    <h2>Projetos</h2>

    <div class="projeto">
        <h3>Volta ao Mundo</h3>
        <p>Projeto especial que apresenta países, fotos, bandeiras e informações utilizando API REST.</p>
        <p><strong>Tecnologias:</strong> HTML, CSS, JS</p>
        <a href="#" target="_blank">Repositório no GitHub</a>
    </div>

    <div class="projeto">
        <h3>Lorem</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi ipsam vel exercitationem quidem. Fuga amet non obcaecati at laborum molestias numquam pariatur, quae id asperiores iste exercitationem veniam dolorum.</p>
        <p><strong>Tecnologias:</strong> PHP, MySQL</p>
        <a href="#" target="_blank">Repositório no GitHub</a>
    </div>

</section>

<!-- EXPERIÊNCIA -->
<section id="experiencia" class="secao">
    <h2>Experiência & Formação</h2>

    <h3>Formação Acadêmica</h3>
    <p><strong>Técnico em Desenvolvimento de Sistemas</strong> — ETEC João Maria Stevanatto (2020-2022)</p>

    <h3>Experiência Profissional</h3>
    <p><strong>Menor Aprendiz</strong> — Cristália Produtos Químicos e Farmacêuticos</p>
    <p>Atividades: bla bla bla</p>

    <p><strong>Assistente de Licitações</strong> — Cristália Produtos Químicos e Farmacêuticos</p>
    <p>Atividades: bla bla bla</p>

    <h3>Cursos Complementares</h3>
    <ul>
        <li>HTML e CSS — Alura</li>
        <li>JavaScript — Udemy</li>
        <li>Git & GitHub — Dio</li>
    </ul>
</section>

<!-- CONTATO -->
<section id="contato" class="secao">
    <h2>Contato</h2>

    <form action="enviar.php" method="POST" class="form-contato">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>E-mail:</label>
        <input type="email" name="email" required>

        <label>Mensagem:</label>
        <textarea name="mensagem" required></textarea>

        <button type="submit">Enviar Mensagem</button>
    </form>
</section>

<footer>
    <p>© 2025 - João Altafini</p>
</footer>

</body>
</html>

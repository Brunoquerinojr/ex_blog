<!-- CSS (Próprio) -->
    <!-- Monta a URL Personalizada (Conf. helpers/url.php) -->
    <?php
        require_once("helpers/url.php");
        require_once("data/posts.php");
        require_once("data/categorias.php");
    ?>

    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">

    <!-- Fontes (GoogleFonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@300;700&family=Prompt&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Logo do Blog">
            
        </a>
        <ul id="navbar">
            <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Categorias</a></li>
            <li><a href="#" class="nav-link">Sobre</a></li>
            <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
        </ul>
    </header>
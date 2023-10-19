<?php
    // Inclusão do header
    require_once("templates/header.php");
?>
<!-- <h1>Olá mundo!</h1> -->

    <!-- //  pata teste
    var_dump($posts);
    echo "<br><br>";
    print_r($posts); -->
    <main>
        <div id="title-container">
            <h1>Code Blog</h1>
            <p>O seu blog de Programação</p>
        </div>
        <div id="posts-container">
        <?php foreach($posts as $post): ?>
            <div class="post-box">
            <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
            <h2 class="post-title"><a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
            <p class="post-description"><?= $post['description'] ?></p>
            <div class="tags-container">
                <?php foreach($post['tags'] as $tag): ?>
                <a href="#"><?= $tag ?></a>
                <?php endforeach; ?>
            </div>
            </div>
        <?php endforeach; ?>
        </div>
  </main>

<?php
    // Inclusão do footer
    require_once("templates/footer.php");
?>
    
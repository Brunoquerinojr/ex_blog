<!-- inclusão do cabeçalho -->
<?php

    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['descripition'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi a aspernatur officiis aliquid fugit magnam? Accusamus, fugiat illo consequatur cum aspernatur ratione quisquam tempore impedit tempora unde est nostrum aliquid odit excepturi explicabo vitae quasi eligendi aut adipisci? Non in nemo dicta alias rerum quam blanditiis ut at natus eum itaque reprehenderit, voluptatum illum fuga exercitationem a perferendis ullam corrupti iusto quibusdam consectetur. Cupiditate, neque accusamus officia, quia eaque nulla unde quis consectetur in incidunt odio repellendus perspiciatis suscipit aspernatur totam, animi quae. Nemo, quod voluptates ex est quas unde tempore perspiciatis, excepturi dicta officia explicabo, harum omnis enim. Voluptatem!</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi a aspernatur officiis aliquid fugit magnam? Accusamus, fugiat illo consequatur cum aspernatur ratione quisquam tempore impedit tempora unde est nostrum aliquid odit excepturi explicabo vitae quasi eligendi aut adipisci? Non in nemo dicta alias rerum quam blanditiis ut at natus eum itaque reprehenderit, voluptatum illum fuga exercitationem a perferendis ullam corrupti iusto quibusdam consectetur. Cupiditate, neque accusamus officia, quia eaque nulla unde quis consectetur in incidunt odio repellendus perspiciatis suscipit aspernatur totam, animi quae. Nemo, quod voluptates ex est quas unde tempore perspiciatis, excepturi dicta officia explicabo, harum omnis enim. Voluptatem!</p>
    </div>
    <div class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php 
include_once("templates/footer.php");
?>
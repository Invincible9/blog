<?php $this->title = 'Welcome to My Blog'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<!-- TODO: display the posts here -->

<aside>
    <h2>Recent Posts</h2>
    <?php foreach ($this->postsSideBar as $post) : ?>
        <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?= htmlspecialchars($post['title'])?></a>
    <?php endforeach; ?>
</aside>

<main>

    <?php foreach ($this->posts as $post) : ?>
     <h1><?= htmlspecialchars($post['title'])?></h1>
        <p>
            <i>Posted on</i>
            <?= htmlspecialchars($post['date'])?>
            <i>by</i>
            <?= htmlspecialchars($post['full_name'])?>
        </p>

     <p><?=$post['content']?></p>

    <?php endforeach; ?>

</main>



<main>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($this->posts as $post) : ?>
            <tr>
                <td><?=htmlspecialchars($post['id']) ?></td>
                <td><?=htmlspecialchars($post['title']) ?></td>
                <td><?=cutLongText($post['content']) ?></td>
                <td><?=htmlspecialchars($post['date']) ?></td>
                <td><?=htmlspecialchars($post['full_name']) ?></td>
                <td>
                    <a href="<?=APP_ROOT?>/posts/edit/<?= htmlspecialchars($post['id'])?>">[EDIT]</a>
                    <a href="<?=APP_ROOT?>/posts/delete/<?= htmlspecialchars($post['id'])?>">[DELETE]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="<?=APP_ROOT?>/posts/create/<?= htmlspecialchars($post['id'])?>">[CREATE NEW POST]</a></p>
</main>

<?php $this->title = 'Welcome to My Blog'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>


    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>EDIT</th>
        </tr>
        <?php foreach ($this->users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?=htmlspecialchars($user['username']) ?></td>
                <td><?=htmlspecialchars($user['full_name']) ?></td>
                <td><a href="<?=APP_ROOT?>/users/edit/<?= $user['id']?>">[EDIT]</a></td>
            </tr>
        <?php endforeach; ?>
    </table>


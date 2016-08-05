<?php $this->title = 'Create New Post'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title" disabled value="<?=htmlspecialchars($this->post['title'])?>"/>
    <div>Content:</div>
    <textarea rows="10" name="post_content" disabled><?=htmlspecialchars($this->post['content'])?></textarea>
    <div><input type="submit" value="Delete" />
    <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>
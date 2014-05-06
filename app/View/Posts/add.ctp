<!-- File: /app/View/Posts/add.ctp -->
<div class="container">
<div class="hero-unit">
<h4>Add Post</h4>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>
</div>
</div>

<!-- File: /app/View/Posts/edit.ctp -->
<div class="container">
<div class="hero-unit">
<h4>Edit Post</h4>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>
</div>
</div>

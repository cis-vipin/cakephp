<div class="container">
<div class="hero-unit">
<h4><?php echo h($post['Post']['title']); ?></h4>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>
</div>
</div>

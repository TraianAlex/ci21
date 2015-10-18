<!-- Main content -->
<div class="span9">
<article>
	<h2><?=e($article->title); ?></h2>
	<p class="pubdate"><?=e($article->pubdate); ?></p>
	<?=$article->body; ?> 
</article>
</div>

<!-- Sidebar -->
<div class="span3 sidebar">
	<h2>Recent news</h2>
	<?php $this->load->view('sidebar'); ?>
</div>
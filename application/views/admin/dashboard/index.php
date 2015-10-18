<h2>Recently modified articles</h2>

<?php if(count($recent_articles)): ?>
<ul>
	<?php foreach($recent_articles as $article): ?>
	<li><?=anchor('admin/article/edit/' . $article->id, e($article->title)); ?> - <?=date('Y-m-d', strtotime(e($article->modified))); ?></li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>
<h3><?php echo empty($page->id) ? 'Add a new page' : 'Edit page ' . $page->title; ?></h3>
<?=validation_errors(); ?>
<?=form_open(); ?>
<table class="table">
	<tr>
		<td>Parent</td>
		<td><?=form_dropdown('parent_id', $pages_no_parents, $this->input->post('parent_id') ?: $page->parent_id); ?></td>
	</tr>
	<tr>
		<td>Template</td>
		<td><?=form_dropdown('template', config_item('template'), $this->input->post('template') ?: $page->template); ?></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><?=form_input('title', set_value('title', $page->title)); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?=form_input('slug', set_value('slug', $page->slug)); ?></td>
	</tr>
	<tr>
		<td>Body</td>
		<td><?=form_textarea('body', set_value('body', $page->body), 'class="tinymce"'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?=form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?=form_close();?>

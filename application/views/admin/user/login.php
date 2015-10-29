<div class="modal-header">
	<h3>Log in</h3>
	<p>Please log in using your credentials</p>
</div>
<div class="modal-body">
	<?=validation_errors(); ?>
	<?=form_open();?>
	<table class="table">
		<tr>
			<td>Email</td>
			<td><?=form_input('email'); ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?=form_password('password'); ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?=form_submit('submit', 'Log in', 'class="btn btn-primary"'); ?>
				or <?=anchor("homepage", "Frontend", 'class="btn btn-default"');?></td>
		</tr>
	</table>
	<?=form_close();?>
</div>
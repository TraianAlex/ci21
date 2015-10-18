<?php $this->load->view('admin/components/page_head'); ?>
<body>
    <div class="navbar navbar-static-top navbar-inverse">
	    <div class="navbar-inner">
		    <a class="brand" href="<?=site_url('admin/dashboard'); ?>"><?=$meta_title; ?></a>
		    <ul class="nav">
			    <li class="active"><a href="<?=site_url('admin/dashboard'); ?>">Dashboard</a></li>
			    <li><?=anchor('admin/page', 'pages'); ?></li>
			    <li><?=anchor('admin/page/order', 'order pages'); ?></li>
			    <li><?=anchor('admin/article', 'news articles'); ?></li>
			    <li><?=anchor('admin/user', 'users'); ?></li>
			    <li><?=anchor('homepage', 'site'); ?></li>
		    </ul>
	    </div>
    </div>

	<div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="span9">
				<?php $this->load->view($subview); ?>
			</div>
			<!-- Sidebar -->
			<div class="span3">
				<section>
					<?=mailto('victor_traian@yahoo.com', '<i class="icon-user"></i> victor_traian@yahoo.com'); ?><br>
					<?=anchor('admin/user/logout', '<i class="icon-off"></i> logout'); ?>
				</section>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/components/page_tail'); ?>
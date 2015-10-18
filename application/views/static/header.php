<!doctype html>
<html lang="en">
<head>
		
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<title>Codeigniter21</title>

<link href=" http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="" rel="stylesheet">
<link href="<?=base_url('assets/css/sections-frmwrk-styles.css')?>" rel="stylesheet">
<style>

</style>
</head>
	<body>
	
	<section style="display: block;" class="section-dark no-padding-bottom no-padding-top">
	<div class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">CI21</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						 <a href="<?=base_url('site')?>">Home</a>
					</li>
					<li>
						 <a href="<?=base_url('about')?>">About</a>
					</li>
					<li>
						 <a href="<?=base_url('#section_footer')?>">Contact</a>
					</li>
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown1<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								 <a href="<?=base_url()?>">Action</a>
							</li>
							<li>
								 <a href="<?=base_url()?>">Another action</a>
							</li>
							<li>
								 <a href="<?=base_url()?>">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li class="dropdown-header">
								Nav header
							</li>
							<li>
								 <a href="<?=base_url()?>">Separated link</a>
							</li>
							<li>
								 <a href="<?=base_url()?>">One more separated link</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								 <a href="<?=base_url()?>">Action</a>
							</li>
							<li>
								 <a href="<?=base_url()?>">Another action</a>
							</li>
							<li>
								 <a href="<?=base_url()?>">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li class="dropdown-header">
								Nav header
							</li>
							<li>
								 <a href="<?=base_url()?>">Separated link</a>
							</li>
							<li>
								 <a href="<?=base_url()?>">One more separated link</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div style="min-height: 1px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 relative">
				<h1 class="top-header">
					Great businesses are built on <span class="text-success">great experiences</span>. We make those experiences happen.
				</h1> <span id="scroll-1"><a class="btn btn-success btn-lg go-to-content" href="#section-1"><i class="fa fa-arrow-down"></i></a></span>
			</div>
		</div>
	</div>
	
	
	<div id="section-1" class="fill">
		<div id="carousel-652935" class="carousel slide slider-custom">
			<ol class="carousel-indicators">
				<li data-target="#carousel-652935" data-slide-to="0" class="active">
				</li>
				<li data-target="#carousel-652935" data-slide-to="1">
				</li>
			</ol>
			<div class="carousel-inner text-center">
				<div class="item active">
					<img src="<?=base_url('assets/images/bg1.jpg')?>" alt="" />
				</div>
				<div class="item">
					<img src="<?=base_url('assets/images/bg2.jpg')?>" alt="" />
				</div>
			</div> <a class="left carousel-control" href="#carousel-652935" data-slide="prev"><i class="fa fa-angle-left fa-2x"></i></a> <a class="right carousel-control" href="#carousel-652935" data-slide="next"><i class="fa fa-angle-right fa-2x"></i></a>
		</div>
	</div>
	
</section>
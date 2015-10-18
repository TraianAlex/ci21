<section style="display: block; position: relative; opacity: 1; left: 0px; top: 0px; width: auto; height: auto;">
	<div style="display: block;" class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="page-section text-center">
					 <strong>TABS LEFT SIDE</strong>
				</h3>
				<p class="lead text-center">
					Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
				</p>
			</div>
		</div>
		<div class="row margin-top-20">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="tabs-178135" class="left-tabs">
					<ul class="nav nav-tabs">
						<?php if(isset($content) && !empty($content)):
								foreach ($content as $row):?>
						<li class="<?=$row->class?>">
							 <a href="<?=base_url()?>#<?=$row->page?>" data-toggle="tab"><?=$row->title?></a>
						</li>
						<!--li>
							 <a href="#panel-45784" data-toggle="tab">Feature 2</a>
						</li>
						<li>
							 <a href="#panel-683859" data-toggle="tab">Feature 3</a>
						</li>
						<li>
							 <a href="#panel-857862" data-toggle="tab">Feature 4</a>
						</li>
						<li>
							 <a href="#panel-289973" data-toggle="tab">Feature 5</a>
						</li-->
						<?php endforeach;
						endif;?>
					</ul>
					<div class="tab-content">
						<?php if(isset($content) && !empty($content)):
								foreach ($content as $row):?>
						<div class="tab-pane active" id="<?=$row->page?>">
							<h3>
								<?=$row->title?>
							</h3>
							<p class="lead">
								<?=$row->text1?>
							</p>
							<p class="lead">
								<?=$row->text2?>
							</p>
						</div>
						<!--div class="tab-pane" id="panel-45784">
							<h3>
								Feature 2 goes here 1/1 col
							</h3>
							<p class="lead">
								The first pane content Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet
							</p>
							<p class="lead">
								The first pane content Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet
							</p>
						</div>
						<div class="tab-pane" id="panel-683859">
							<h3>
								Feature 3 goes here 1/1 col
							</h3>
							<p class="lead">
								The first pane content Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet
							</p>
							<p class="lead">
								The first pane content Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet
							</p>
						</div>
						<div class="tab-pane" id="panel-857862">
							<h3>
								Feature 4 goes here 1/1 col
							</h3>
							<p class="lead">
								The first pane content Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet
							</p>
							<p class="lead">
								The first pane content Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet
							</p>
						</div>
						<div class="tab-pane" id="panel-289973">
							<h3>
								Feature 5 goes here 1/1 col
							</h3>
							<p class="lead">
								The first pane content Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet
							</p>
							<p class="lead">
								The first pane content Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet Lorem ipsum dolor set amet
							</p>
						</div-->
						<?php endforeach;
						endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
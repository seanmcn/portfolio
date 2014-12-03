<?php
require_once("functions/recursiveArraySearch.php");
require_once("data/projects.data.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Force IE to render in latest mode -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Sean McNamara - Portfolio</title>
		<!-- Include Leapstrap CSS -->
		<link rel="stylesheet" href="assets/css/vendor/leap/leapstrap.css" />
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/vendor/leap/IE10Mobile.css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="assets/css/vendor/owl_carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/vendor/owl_carousel/owl.theme.css">
		<!-- Include jQuery (maybe you already do?) -->
		<script src="assets/js/vendor/jquery/jquery-2.1.1.min.js" ></script>
		<!-- Include Leap (maybe you already do?) -->
		<script src="assets/js/vendor/leap/leap.js"></script>
		<!-- Include Leapstrap JS -->
		<script src="assets/js/vendor/leap/leapstrap.js"></script>
		<!-- Include Owl Carousel JS -->
		<script src="assets/js/vendor/owl_carousel/owl.carousel.js"></script>
		<!-- Fix for IE10 Mobile -->
		<script type="text/javascript" src="assets/js/vendor/leap/IE10Mobile.js"></script>
		<!-- Include our JS -->
		<script type="text/javascript" src="assets/js/main.js"></script>
		<!-- Ability to embed Github Gists --> 
		<script type="text/javascript" src="assets/js/vendor/gist-embed/gist-embed.js"></script>
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<!-- Have a Mint Analytics -->
		<script src="../mint/?js" type="text/javascript"></script>
	</head>

	<body class="leap-interactive" leap-disable-tap="true" leap-disable-hover="true">



		<a href="#content" class="sr-only">Skip to main content</a>
		<div class="container">

		<div class="row">
			<div class="col-md-7">
				<h1>Sean McNamara's Portfolio</h1>
			</div>
			<div class="col-md-3">
				<div class="input-group">
				  <input type="text" class="form-control" id="search" placeholder="Search">
				</div>
			</div>
			<div class="col-md-2">
				<div class="input-group">
				<input type="submit" class="form-control" value="Search" class="leap-interactive">
				</div>
			</div>
		</div>
		<div id="content">
			<?php 
			foreach($projectArray as $projectType => $projectShelf) {
				//Make sure there is at least one project.
				if(count($projectShelf) >= 1) { ?>
					<!-- <?php echo $projectType ;?> Projects -->
					<h3><?php echo $projectType ;?> Projects <span class="badge"><?php echo count($projectShelf); ?></span></h3>
					<div class="projectShelf owl-carousel" id="<?php echo $projectType ;?>">
						
						<?php foreach($projectShelf as $key => $project) { 
							?>
							<div class="project item">
								<div class="image leap-interactive" data-toggle="modal" data-target="#<?php echo$key;?>_Modal">
									<img src="assets/images/<?php echo $project['main_image']; ?>" alt="<?php echo $project['name']; ?>" class="thumbnail"/>
								</div>
								<div class="panel panel-default panel-leap leap-interactive" leap-disable-tap="true" data-toggle="modal" data-target="#<?php echo$key;?>_Modal">
									<div class="panel-body">
										<h4 class="name"><?php echo $project['name']; ?></h4>
										<h5 class="year"><?php echo $project['year']; ?></h5>
										<img src="assets/images/viewProject.gif" alt="View Project" class="viewProjectImage"/>
									</div>
								</div>
							</div>
						<?php } ?>
						
					</div>
				<?php 
				}
						
			}
			?>
		</div><!-- #content end -->
		<div id="footer">
			<div class="pull-left">
				<a href="http://www.seanmcn.com" alt="Seanmcn.com">Back to Blog</a>
			</div>
			<div class="pull-right">
				<a href="https://github.com/Seanmcn/portfolio" title="View source code on Github" target="_blank">View the source on <img src="assets/images/githubLogo.png" alt="View Code on Github" /></a>
			</div>
		</div>
		</div> <!-- .container end -->

		<?php foreach($projects as $key => $project) { ?>		
			<!-- Modal -->
			<div class="modal fade" id="<?php echo$key;?>_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" leap-attractor="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel"><?php echo $project['name'];?>
			        <?php if(!empty($project['url'])){ ?><a href="<?php echo $project['url'];?>" target="_blank"><span class="glyphicon glyphicon-link" style="margin-left:5px;"></span></a><?php } ?>
			        </h4>
			        
			      </div>
			      <div class="modal-body">

			      	<?php if (isset($project['image'])) { ?>
					<div class="row">
						<div class="col-md-12">
				      		<img src="assets/images/<?php echo$project['image'];?>" alt="<?php echo$project['name'];?>" class="thumbnail">
				      	</div>
				    </div>
			      	<?php } ?>
			        <div class="row">
						<div class="col-md-8">
							<h4>Description</h4>
							<div class="description"><?php echo $project['description']; ?></div>
						</div>
						<div class="col-md-4">
							<h4>Technologies</h4>
							<?php 
							$count = 0;
							foreach($project['technologies'] as $technology) { 
								if($count%2 == 0) { $labelClass = "label-primary"; } else { $labelClass = "label-info";  }
								?>
								<span class="label <?php echo$labelClass;?>"><?php echo $technology;?></span>
							<?php $count ++; } ?>
						</div>
					</div><!-- end row-->
					<?php if (count($project['achievements']) >= 1) { ?>
					<div class="row">
						<div class="col-md-8">
							<h4>Achievements</h4>
							<ul>
							<?php foreach($project['achievements'] as $achievement) { ?> 
								<li><?php echo$achievement;?></li>
							<?php } ?>
							</ul>
						</div>
					</div><!-- end row-->
					<?php } ?>
					<?php if (!empty($project['code_snippets'])) { ?>
					<div class="row">
						<div class="col-md-12">
							<h4>Code Snippets</h4>
							 <?php foreach($project['code_snippets'] as $codeSnippet) { ?>
							 <code data-gist-id="<?php echo $codeSnippet;?>"></code>
							 <?php } ?>
						</div>
					</div><!-- end row-->
			      <?php } ?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		<?php } ?>
	</body>
	<!-- JS -->
	<script>
	LeapManager.init({
		//interactiveSelector:"a",
		maxCursors:1,
		enableMetaGestures: true,
		enableDefaultMetaGestureActions: false,
	});
	</script>
</html>
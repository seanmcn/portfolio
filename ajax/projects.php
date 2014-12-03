<?php 
$search = $_REQUEST['search'];
require_once("../functions/recursiveArraySearch.php");
require_once("../data/projects.data.php");
foreach($projectArray as $projectType => $projectShelf) {
	//Make sure there is at least one project.
	if(count($projectShelf) >= 1) { ?>
		<!-- <?= $projectType ;?> Projects -->
		<h3><?= $projectType ;?> Projects <span class="badge"><?= count($projectShelf); ?></span></h3>
		<div class="projectShelf owl-carousel" id="<?= $projectType ;?>">
			
			<?php foreach($projectShelf as $key => $project) { 
				?>
				<div class="project item">
					<div class="image">
						<img src="assets/images/<?= $project['main_image']; ?>" alt="<?= $project['name']; ?>" class="thumbnail"/>
					</div>
					<div class="panel panel-default panel-leap leap-interactive" leap-disable-tap="true" data-toggle="modal" data-target="#<?=$key;?>_Modal">
						<div class="panel-body">
							<h4 class="name"><?= $project['name']; ?></h4>
							<h5 class="year"><?= $project['year']; ?></h5>
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
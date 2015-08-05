<?php
$id = isset( $_REQUEST['id'] ) ? $_REQUEST['id'] - 1 : null;
require_once( "data/projects.data.php" );
require_once( "_template/header.php" );
$project = $projects[$id];
?>
    <div id="content" class="content-holder">
        <div class="itemBody">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="itemTitle"><?= $project['name']; ?></h1>
                </div>
                <div class="col-md-12">
                    <img src="assets/images/<?= $project['main_image'] ?>" alt="<?= $project['name'] ?>" class="thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h4 class="portfolioHeading">Description</h4>
                    <div class="description"><?= $project['description']; ?></div>
                </div>
                <div class="col-md-4">
                    <h4 class="portfolioHeading">Technologies</h4>
                    <?php foreach($project['technologies'] as $key => $technology) {
                        $labelType = $key % 2 == 0 ? 'primary' : 'info';
                        echo "<span class='itemTech label label-$labelType'>$technology</span>";
                    }?>
                </div>
            </div><!-- end row-->
            <br />
            <div class="row">
                <div class="col-md-12">
                    <h4 class="portfolioHeading">Achievements</h4>
                    <ul class="itemAchievements">
                        <?php foreach($project['achievements'] as $achievement) {
                            echo "<li>$achievement</li>";
                        }?>
                    </ul>
                </div>
            </div><!-- end row-->
            <?php if (!empty($project['code_snippets'])) { ?>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="portfolioHeading">Code Snippets</h4>
                    <?php foreach($project['code_snippets'] as $codeSnippet) { ?>
                        <code data-gist-id="<?php echo $codeSnippet;?>"></code>
                    <?php } ?>
                </div>
            </div><!-- end row-->
            <?php } ?>
            <br />
            <a href="/portfolio" class="returnLink">
                <img src="assets/images/goBack.gif" alt="Go back" class="goBackImage"/>
                Return to Portfolio</a>
        </div>
    </div>
<script type="text/javascript" src="assets/js/vendor/gist-embed/gist-embed.js"></script>
<?php
require_once( "_template/footer.php" );

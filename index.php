<?php
require_once( "data/projects.data.php" );
require_once( "_template/header.php" );
/* Include wordpress */
#define('WP_USE_THEMES', false);
#require('../wp-blog-header.php');
?>
    <div id="content" class="content-holder">
        <?php
        foreach ($projects as $key => $project) { ?>
            <a href="item.php?id=<?=$key+1;?>">
                <div class="projectItem">
                    <div class="image">
                        <img src="assets/images/<?php echo $project['main_image']; ?>" alt="<?php echo $project['name']; ?>"
                             class="thumbnail"/>
                    </div>
                    <div class="projectMetadata">
                        <div class="projectName"><?php echo $project['name']; ?></div>
                        <div class="projectYear"><?php echo $project['year']; ?></div>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
<?php require_once( "_template/footer.php" );

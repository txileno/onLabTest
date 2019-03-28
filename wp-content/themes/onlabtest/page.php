<?php
    get_header();

    while(have_posts()){
        the_post(); ?>

        <div class="page-banner">
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title()?></h1>
            </div>
        </div>

        <div class="container container--narrow page-section">

	        <?php
	        // TODO get random ID Post, or the newest one to display instead static ID
	        $postId = get_the_ID();

	        $theParents = array_reverse(get_post_ancestors($postId));
	        ?>

            <div class="row margin-bottom-30 justify-content-center">
                <div class="col-lg-11">
			        <?php if($theParents){ ?>
                        <div class="index-breadcrumb">
					        <?php foreach ($theParents as $theParent){?>
                                <a class="parent-link-title" href="<?php echo get_permalink($theParent)?>">
							        <?php echo get_the_title($theParent)?>
                                </a>
						        <?php if($theParent) { ?>
                                    <span> > </span>
						        <?php }
					        }?>
                            <span class="current-post-title"><?php echo get_the_title($postId)?></span>
                        </div>
			        <?php } ?>
                </div>
            </div>

            <div class="row margin-bottom-30 justify-content-center">
                <div class="col-lg-11">
	                <?php the_content(); ?>
                </div>
            </div>

        </div>
        <?php
    }

    get_footer();


<?php
    get_header();
 ?>

    <div class="main-content">

        <div class="container-fluid">
            <div class="row align-center padding-top-200 margin-bottom-50 select-category-section ">
                <div class="col-lg-12">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>Aliquam lobortis viverra tincidunt</p>

                    <button type="button" class="btn btn-light btn-category" onclick="showCategories()">Select a Category</button>

                    <p>not the category you want?</p>

                    <img class="vehicles-image" src="<?php echo get_theme_file_uri('/images/vehicles.png') ?>">

                    <div id="modal-categories" class="align-center modal-category-section padding-20 modal-hide">
                        <div class="modal-container">
                            <div class="container">
                                <div class="row">
                                        <div class="col-md-4">
                                            <ul class="nav-list">
                                                <li id="module">Alabama</li>
                                                <li>Alaska</li>
                                                <li>Arizona</li>
                                                <li>Arkansas</li>
                                                <li>California</li>
                                                <li>Colorado</li>
                                                <li>Connecticut</li>
                                                <li>Delaware</li>
                                                <li>District Of Columbia</li>
                                                <li>Florida</li>
                                                <li>Georgia</li>
                                                <li>Hawaii</li>
                                                <li>Idaho</li>
                                                <li>Illinois</li>
                                                <li>Indiana</li>
                                                <li>Iowa</li>
                                                <li>Kansas</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="nav-list">
                                                <li>Kentucky</li>
                                                <li>Louisiana</li>
                                                <li>Maine</li>
                                                <li>Maryland</li>
                                                <li>Massachusetts</li>
                                                <li>Michigan</li>
                                                <li>Minnesota</li>
                                                <li>Mississippi</li>
                                                <li>Missouri</li>
                                                <li>Montana</li>
                                                <li>Nebraska</li>
                                                <li>Nevada</li>
                                                <li>New Hampshire</li>
                                                <li>New Jersey</li>
                                                <li>New Mexico</li>
                                                <li>New York</li>
                                                <li>North Carolina</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="nav-list">
                                                <li>North Dakota</li>
                                                <li>Ohio</li>
                                                <li>Oklahoma</li>
                                                <li>Oregon</li>
                                                <li>Pennsylvania</li>
                                                <li>Rhode Island</li>
                                                <li>South Carolina</li>
                                                <li>South Dakota</li>
                                                <li>Tennessee</li>
                                                <li>Texas</li>
                                                <li>Utah</li>
                                                <li>Vermont</li>
                                                <li>Virginia</li>
                                                <li>Washington</li>
                                                <li>West Virginia</li>
                                                <li>Wisconsin</li>
                                                <li>Wyoming</li>
                                            </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row margin-bottom-50 justify-content-center">
                <div class="col-lg-9">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">CAR TESTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MOTORCYCLE TESTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CDL TESTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">HANDBOOKS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">AK DMV FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 category-box">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>
                <div class="col-lg-3 category-box">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>
                <div class="col-lg-3 category-box">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 category-box">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>
                <div class="col-lg-3 category-box">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Curabitur tempor urna ac semper viverra. Phasellus dignissim est rhoncus libero tempor tincidunt. Cras id tempus odio. Fusce et odio                              vel dui tincidunt finibus. Curabitur facilisis efficitur.</p>
                    </div>
                </div>
                <div class="col-lg-3 category-box">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 category-box">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>
                <div class="col-lg-3 category-box">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>
                <div class="col-lg-3 category-box">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 category-box category-box-large">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>
                <div class="col-lg-5 category-box category-box-large ">
                    <div class="category-box-header">
                        <span class="category-box-title">Ut Bibendum Lorem</span><span class="category-box-button">EASY</span>
                    </div>
                    <div class="category-box-content">
                        <p>Pellentesque vel est scelerisque, maximus libero eu, pulvinar turpis. Vestibulum a dui id sapien</p>
                    </div>
                </div>

            </div>


            <div class="row ">

            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
        </div>

        <div class="container">

	        <?php
	        // TODO get random ID Post, or the newest one to display instead static ID
	        $postId = 23;
	        $contentPost = get_post($postId);
	        $content = $contentPost->post_content;
	        $content = apply_filters('the_content', $content);
	        $content = str_replace(']]>', ']]&gt;', $content);

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

            <div class="row padding-bottom-50 justify-content-center">
                <div class="col-lg-11 informative-section">
	                <?php
	                    echo $content;
	                ?>
                    <!--
                    <div class="informative-header">
                        <i class="fas fa-check-circle"></i> <span class="informative-title">Donec Id Odio In Est Ultricies Bibendum</span>
                    </div>
                    <div class="informative-content">
                        <p>
                            <img class="informative-image" src="<?php echo get_theme_file_uri('/images/end-game.jpg') ?>"> Sed tortor mauris, volutpat sit                               amet lacus id, gravida luctus nunc. Praesent sed cursus tortor. Nulla eget rhoncus neque, sit amet tincidunt ligula. Proin venenatis,                             augue finibus faucibus maximus, mauris nisl laoreet mi, ut rhoncus mi augue vel leo. Praesent mi dolor, lacinia feugiat mattis eu,                                pretium vitae purus. Morbi euismod volutpat est sed molestie. Nam tincidunt rhoncus tincidunt.Vestibulum ante ipsum primis in faucibus                            orci luctus et ultrices posuere cubilia Curae; Suspendisse vitae eros sed nibh tempor ornare at consectetur nulla. Sed tortor mauris,                             volutpat sit amet lacus id, gravida luctus nunc. Praesent sed cursus tortor. Nulla eget rhoncus neque, sit amet tincidunt ligula.                                 Proin venenatis, augue finibus faucibus maximus, Nulla eget rhoncus neque, sit amet tincidunt ligula. Proin venenatis, augue finibus                              faucibus
                        </p>
                        <div class="container">
                            <div class="row align-center justify-content-center">
                                <div class="col-lg-7">
                                    <button type="button" class="btn btn-primary">Start Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>


<?php
    get_footer();

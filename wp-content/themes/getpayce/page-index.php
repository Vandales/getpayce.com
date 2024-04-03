<?php
/*
Template Name: Шаблон главной страницы
*/
?>

<?php get_header();?>
	<?
    $hero = get_field('hero_screen');
    if( $hero ): ?>
	<section class="screen--hero" style="background-image: url(<?php echo $hero['image']; ?>);">
        <div class="text-box">
        	<h4 class="fade-bottom animation-delay"><?php echo $hero['title-h4']; ?></h4>
            <h1><div class="triangle absolute desktop fade-bottom animation-delay"></div><?php echo $hero['title-h1']; ?></h1>
            <div class="image mobile fade-bottom">
                <img src="<?php echo $hero['image']; ?>" alt="">
            </div>
            <div class="plain-text fade-bottom">
        		<?php echo $hero['text']; ?>
            </div>
            <a href="#schedule-demo" class="link--btn btn--arrow fadeIn">
                Schedule a Demo
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path class="cls-1" d="M8,0,6.59,1.41,12.17,7H0V9H12.17L6.59,14.59,8,16l8-8Z"/>
                </svg>
            </a>
        </div>
        <!-- /.text-box -->
    </section>
    <?php endif; ?>
    <?
    $second = get_field('second');
    if( $second ): ?>
    <section class="second-screen" id="screen-2">
        <h2 class="fadeBottom"><?php echo $second['title']; ?></h2>
        <div class="flexible-box">
            <div class="item fadeIn">
                <div class="value">
                    <?php echo $second['value']; ?><span>%</span>
                </div>
                <!-- /.value -->
                <div class="text-s">
                    <?php echo $second['text']; ?>
                </div>
                <!-- /.text-s -->
                <div class="text-xs text--grey">
                    <?php echo $second['text-grey']; ?>
                </div>
            </div>
            <div class="item fadeIn">
                <div class="value">
                    <?php echo $second['value-2']; ?><span>%</span>
                </div>
                <!-- /.value -->
                <div class="text-s">
                    <?php echo $second['text-2']; ?>
                </div>
                <!-- /.text-s -->
                <div class="text-xs text--grey">
                    <?php echo $second['text-grey-2']; ?>
                </div>
            </div>
            <div class="w100 desktop"></div>
            <div class="item fadeIn">
                <div class="value">
                    <?php echo $second['value-3']; ?><span>%</span>
                </div>
                <!-- /.value -->
                <div class="text-s">
                    <?php echo $second['text-3']; ?>
                </div>
                <!-- /.text-s -->
                <div class="text-xs text--grey">
                    <?php echo $second['text-grey-3']; ?>
                </div>
            </div>
            <div class="item fadeIn">
                <div class="value">
                    <?php echo $second['value-4']; ?><span>%</span>
                </div>
                <!-- /.value -->
                <div class="text-s">
                    <?php echo $second['text-4']; ?>
                </div>
                <!-- /.text-s -->
                <div class="text-xs text--grey">
                    <?php echo $second['text-grey-4']; ?>
                </div>
            </div>
            <div class="item fadeIn">
                <div class="value">
                    <?php echo $second['value-5']; ?><span>%</span>
                </div>
                <!-- /.value -->
                <div class="text-s">
                    <?php echo $second['text-5']; ?>
                </div>
                <!-- /.text-s -->
                <div class="text-xs text--grey">
                    <?php echo $second['text-grey-5']; ?>
                </div>
            </div>
        </div>
        <!-- /.flexible-box -->
        <a href="#schedule-demo" class="link--btn btn--arrow fadeIn">
            Schedule a Demo
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path class="cls-1" d="M8,0,6.59,1.41,12.17,7H0V9H12.17L6.59,14.59,8,16l8-8Z"/>
            </svg>
        </a>
        <div class="triangle absolute desktop fade-bottom animation-delay"></div>
    </section>
    <?php endif; ?>
    <?
    $third = get_field('third');
    if( $third ): ?>
    <section class="third--screen" id="screen-3">
        <div class="right fadeIn" style="background-image: url('<?php echo $third['image']; ?>');">
        </div>
        <!-- /.right -->
        <div class="left">
            <h2 class="fadeBottom"><?php echo $third['headline']; ?></h2>
            <div class="image fadeIn" style="background-image: url('<?php echo $third['image']; ?>');">
            </div>
            <div class="item-box">
                <div class="item fadeIn">
                    <div class="title title-2">
                        <?php echo $third['title']; ?>
                    </div>
                    <div class="text-box">
                        <?php echo $third['text']; ?>
                    </div>
                </div>
                <div class="item fadeIn">
                    <div class="title title-2">
                        <?php echo $third['title-2']; ?>
                    </div>
                    <div class="text-box">
                        <?php echo $third['text-2']; ?>
                    </div>
                </div>
                <div class="item fadeIn">
                    <div class="title title-2">
                        <?php echo $third['title-3']; ?>
                    </div>
                    <div class="text-box">
                        <?php echo $third['text-3']; ?>
                    </div>
                </div>
            </div>
            <!-- /.item-box -->
            <a href="#schedule-demo" class="link--btn btn--arrow fadeIn">
                Schedule a Demo
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path class="cls-1" d="M8,0,6.59,1.41,12.17,7H0V9H12.17L6.59,14.59,8,16l8-8Z"/>
                </svg>
            </a>
            <div class="triangle absolute desktop fade-bottom animation-delay"></div>
        </div>
        <!-- /.left -->
    </section>
    <?php endif; ?>
    <?
    $fourth = get_field('fourth');
    if( $fourth ): ?>
    <section class="fourth-screen" id="screen-4">
        <div class="triangle absolute desktop fade-bottom animation-delay"></div>
        <h2 class="fadeBottom">
            <?php echo $fourth['title']; ?>
        </h2>
        <div class="flexible-box">
            <div class="text-box fadeBottom">
                <div class="title title-1"><?php echo $fourth['headline']; ?></div>
                <?php echo $fourth['text']; ?>
            </div>
            <div class="text-box fadeBottom">
                <div class="title title-1"><?php echo $fourth['headline-2']; ?></div>
                <?php echo $fourth['text-2']; ?>
            </div>
            <div class="text-box fadeBottom">
                <div class="title title-1"><?php echo $fourth['headline-3']; ?></div>
                <?php echo $fourth['text-3']; ?>
            </div>
            <div class="text-box fadeBottom">
                <div class="title title-1"><?php echo $fourth['headline-4']; ?></div>
                <?php echo $fourth['text-4']; ?>
            </div>
        </div>
        <!-- /.flexible-box -->
        <div class="border-box fadeIn">
            <?php echo $fourth['border-text']; ?>
        </div>
        <!-- /.border-box -->
        <a href="#schedule-demo" class="link--btn btn--arrow fadeIn">
            Schedule a Demo
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path class="cls-1" d="M8,0,6.59,1.41,12.17,7H0V9H12.17L6.59,14.59,8,16l8-8Z"/>
            </svg>
        </a>
    </section>
    <?php endif; ?>
    <?
    $fifth = get_field('fifth');

    if( $fifth ): ?>
    <section class="fifth-screen" id="screen-5">
        <div class="right fadeIn" style="background-image: url('<?php echo $fifth['image']; ?>');">
            <div class="triangle absolute desktop fade-bottom animation-delay"></div>
        </div>
        <!-- /.right -->
        <div class="left">
            <h2 class="fadeBottom"><?php echo $fifth['title']; ?></h2>
            <div class="image fadeIn" style="background-image: url('<?php echo $fifth['image']; ?>');">
            </div>
            <div class="title fadeBottom animation-delay"><?php echo $fifth['title-2']; ?></div>
            <ul>
                <li class="fadeBottom">
                   <?php echo $fifth['li']; ?>
                </li>
                <li class="fadeBottom">
                    <?php echo $fifth['li-2']; ?>
                </li>
            </ul>
            <div class="border-box fadeIn">
                <?php echo $fifth['border-text']; ?>
            </div>
            <div class="text-s fadeBottom">
                <?php echo $fifth['text-s']; ?>
            </div>
            <a href="#schedule-demo" class="link--btn btn--arrow fadeIn">
                Schedule a Demo
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path class="cls-1" d="M8,0,6.59,1.41,12.17,7H0V9H12.17L6.59,14.59,8,16l8-8Z"/>
                </svg>
            </a>
        </div>
        <!-- /.left -->
    </section>
    <?php endif; ?>
    <?
    $schedule = get_field('schedule_a_demo');

    if( $schedule ): ?>
    <section class="schedule-demo" id="schedule-demo">
        <div class="left">
            <h2 class="fadeBottom"><?php echo $schedule['title']; ?></h2>
            <?php echo do_shortcode( '[contact-form-7 id="5" title="schedule a demo"]'); ?>
            <div class="triangle absolute desktop fade-bottom animation-delay"></div>
        </div>
        <!-- /.left -->
        <div class="right" style="background-image: url('<?php echo $schedule['image']; ?>');">
        </div>
        <!-- /.right -->
    </section>
    <?php endif; ?>

<?php get_footer();?>

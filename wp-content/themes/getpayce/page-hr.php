<?php
/*
Template Name: Template HR page
*/
?>

<?php get_header();?>

    <section class="screen--hero hr-hero" style="background-image: url('<?php the_field('hero_image'); ?>')">
        <div class="text-box">
            <h1 class="fadeBottom"><?php the_field('hero_title'); ?></h1>
            <h2 class="fadeBottom"><?php the_field('hero_subtitle'); ?></h2>
            <div class="image mobile fade-bottom">
                <img src="<?php the_field('hero_image'); ?>" alt="">
            </div>
            <div class="plain-text fade-bottom">
                <?php the_field('hero_text'); ?>
            </div>
            <!-- /.plain-text -->
        </div>
        <!-- /.text-box -->
        <div class="triangle absolute desktop fade-bottom animation-delay">
    </section>
    <!-- /.screen--hero -->
    <section class="hr-second-screen screen">
        <div class="item">
            <?
             $item_1 = get_field('second_screen_item_1');
            if( $item_1 ): ?>

            <div class="text-box">
                <h2 class="fadeBottom"><?php echo $item_1['title']; ?></h2>
                <div class="plain-text fadeBottom">
                    <?php echo $item_1['text']; ?>
                </div>
            </div>
            <div class="icon fadeBottom">
                <img src="<?php echo $item_1['image']; ?>" alt="">
            </div>
            <?php endif; ?>

        </div>
        <div class="item">
            <?
             $item_2 = get_field('second_screen_item_2');
            if( $item_2 ): ?>

            <div class="text-box">
                <h2 class="fadeBottom"><?php echo $item_2['title']; ?></h2>
                <div class="plain-text fadeBottom">
                    <?php echo $item_2['text']; ?>
                </div>
            </div>
            <div class="icon fadeBottom">
                <img src="<?php echo $item_2['image']; ?>" alt="">
            </div>
            <?php endif; ?>
        </div>
        <div class="item">
            <?
             $item_3 = get_field('second_screen_item_3');
            if( $item_3 ): ?>

            <div class="text-box">
                <h2 class="fadeBottom"><?php echo $item_3['title']; ?></h2>
                <div class="plain-text fadeBottom">
                    <?php echo $item_3['text']; ?>
                </div>
            </div>
            <div class="icon fadeBottom">
                <img src="<?php echo $item_3['image']; ?>" alt="">
            </div>
            <?php endif; ?>
        </div>
        <div class="triangle absolute desktop fade-bottom animation-delay">
    </section>
    <section class="screen--border-box">
        <div class="border-box">
            <div class="text-box">
                <h2 class="fadeIn">
                    <?php the_field('last_title'); ?>
                </h2>
                <div class="plain-text fadeIn">
                    <?php the_field('last_text'); ?>
                </div>
                <a href="https://getpayce.com/#schedule-demo" class="link--btn btn--arrow fadeIn">
                    Schedule a Demo
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <path class="cls-1" d="M8,0,6.59,1.41,12.17,7H0V9H12.17L6.59,14.59,8,16l8-8Z"/>
                    </svg>
                </a>
            </div>
            <div class="icon">
                <img src="<?php the_field('last_image'); ?>" alt="">
            </div>
        </div>
    </section>

<?php get_footer();?>

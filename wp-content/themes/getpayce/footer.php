    <footer>
        <div class="logo-footer screen">
            <?php the_custom_logo(); ?>
        </div>
        <!-- /.logo-footer -->
        <div class="flexible-box screen">
            <?
                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Footer Menu', 
                    'container'       => '', 
                    'container_class' => '', 
                    'container_id'    => '',
                    'menu_class'      => 'footer-main-nav', 
                    'menu_id'         => 'footer-main-nav',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
            ?>
            <?
                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Footer Menu 2', 
                    'container'       => '', 
                    'container_class' => '', 
                    'container_id'    => '',
                    'menu_class'      => 'footer-pages-nav', 
                    'menu_id'         => 'footer-pages-nav',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
            ?>
            <?
                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Footer Menu 3', 
                    'container'       => '', 
                    'container_class' => '', 
                    'container_id'    => '',
                    'menu_class'      => 'footer-pages-nav', 
                    'menu_id'         => 'footer-pages-nav',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
            ?>
            <a href="https://getpayce.com/#schedule-demo" class="link--btn btn--arrow fadeIn">
                Schedule a Demo
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path class="cls-1" d="M8,0,6.59,1.41,12.17,7H0V9H12.17L6.59,14.59,8,16l8-8Z"/>
                </svg>
            </a>
        </div>
        <div class="copywrite screen">
            © Copyright <?php echo date ( 'Y' ) ; ?> JR Holding. All rights reserved.
        </div>
    </footer>
    <?php wp_footer(); ?>

</body>
</html>
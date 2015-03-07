<?php get_header(); ?> <!--get's the data from header.php -->

    <div id="main">

        <div id="content">  <!-- the posts will appear here in later templates -->
    <?php if(have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php the_content(); ?>
    <?php the_title(); ?>
    <?php the_permalink(); ?>


   <!--       <h1>CONTENT</h1>

            <h1 class="title">Post Title goes here</h1>
            <p>And details go beneath it</p>
    -->

        </div>

        <?php get_sidebar(); ?>  <!-- get's the data from the sidebar.php  -->




    </div>




    <div id="clear_both"></div>  <!-- Remove floats so the footer appears beneath -->



<?php get_footer(); ?> <!-- get's the data from footer.php -->

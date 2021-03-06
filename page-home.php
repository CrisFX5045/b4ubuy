<?php get_header(); ?>

<!--CAROUSELL-->


<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="false" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner text-center">
    <div class="carousel-item active">
    <?php 
        //get posts from category
        $wpb_all_query = new WP_Query(array('category_name' => 'action', 'posts_per_page' =>1));

    ?>

    <!-- the loop -->
    <?php
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          ?>
      
    <a href="<?php the_permalink(); ?>">
      <img src="<?php echo $featured_img_url; ?>" class=" w-100" alt="...">
    </a>
      <div class="carousel-caption d-none d-md-block">
      <h2><?php the_title(); ?></h2>
        <p><?phpthe_excerpt(__('(more…)')); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
      </div>
      <?php endwhile; ?>
    </div>

    <div class="carousel-item">
    <?php 
        //get posts from category
        $wpb_all_query = new WP_Query(array('category_name' => 'horror', 'posts_per_page' =>1));

    ?>

    <!-- the loop -->
    <?php
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          ?>

    <a href="<?php the_permalink(); ?>">
    <img src="<?php echo $featured_img_url; ?>" class=" w-100 " alt="...">
    </a>
      <div class="carousel-caption d-none d-md-block">
      <h2><?php the_title(); ?></h2>
        <p><?phpthe_excerpt(__('(more…)')); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
      </div>

      <?php endwhile; ?>
    </div>

    <div class="carousel-item">
    <?php 
        //get posts from category
        $wpb_all_query = new WP_Query(array('category_name' => 'adventure', 'posts_per_page' =>1));

    ?>

    <!-- the loop -->
    <?php
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          ?>
    

    <a href="<?php the_permalink(); ?>">
   <img src="<?php echo $featured_img_url; ?>" class=" w-100" alt="...">
   </a>
      <div class="carousel-caption d-none d-md-block">
      <h2><?php the_title(); ?></h2>
        <p><?phpthe_excerpt(__('(more…)')); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
      </div>
    </div>
    <?php endwhile; ?>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Carrusel-->

<!--TRENDING-->
<section>
    <div class="container fluid">
        <div class="row">
         <div class="col-12 TextoTitulos">
         <h2 class = "trending">Trending</h2>
         <p class=Lineas>
         </p>  
         </div>
         <br></br>
         <br></br>
         <br></br>

        <p class=textoComun> With us you have updated information about trending games, we will give you the most honest opinion of your favorite game before you spend your money on a hype, also with us you can find new games that might fit your taste. Upcoming events and games that the whole world is waiting for or they are already on it! We are for you, we are Before U Buy!</p>   </div>
    </div>

    <!--IMG-->

    <div class="album py-5 ">
    <div class="container ">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
      <?php
        get_template_part('includes/newsHome'); 
      ?>

      </div>
     </div>
    <!--IMG-->

    </div>
</section>
<!--TRENDING-->






<?php get_footer(); ?>
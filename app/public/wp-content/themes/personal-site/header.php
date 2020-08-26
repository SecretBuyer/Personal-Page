<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="site-header">
    <div class="container">
  
    <?php
      // getting name from Settings to provide link to return on main page
      // the only first word would be bolded
      $title = get_bloginfo('name'); // This must be!, because this is the return - the_title would be echo
      $title_array = explode(' ', $title);
      $title_first_word = $title_array[0]; 
      $title_other_words ='';
      
      $count = 1;
      while ($count < count($title_array)){
        $title_other_words = $title_other_words .' '. $title_array[$count] ;
        $count++;
      }
      
    
?>


      <h1 class="school-logo-text float-left"><a href="<?php echo site_url()?>"><strong><?php echo $title_first_word?></strong><?php echo $title_other_words?> </a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul class="min-list group">
            <li><a href="<?php echo site_url('about-me')?>">About Me</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Other</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>

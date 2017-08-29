<?php get_header()?>

<div>
  <?php while():?>
    <h2> <?php the_title()?></h2>
    <?php the_content():?>
    
  <?php endwhile;?>
  
  <?php comments_template('',true)?>
  
</div>

<?php get_footer()?>
<?php get_sidebar()?>
<?php if(is_front_page()) { $bootstrapcolumns = '12'; } else { $bootstrapcolumns = "6"; } ?>
<article <?php if(is_front_page()) { echo 'id="homearticle"'; } ?> class="col-sm-<?php echo $bootstrapcolumns; ?> contentstatic">
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
</article>

<?php if( get_field('text_intro') ): ?>  
    <div class="gm-light py-5">
      <div class="container gm-icon">
          <div class="row text-center">
            <p class="text-intro"><?php the_field('text_intro'); ?></p>
          </div>
        </div>
    </div>
  <?php endif; ?>
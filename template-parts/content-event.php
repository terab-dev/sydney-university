<div class="event-summary">
    <a class="event-summary__date t-center" href="<?php site_url(); ?>">
        <span class="event-summary__month"><?php 
            $eventDate = new DateTime(get_field('event_date'));
            print $eventDate->format('M');
        ?></span>
        <span class="event-summary__day"><?php print $eventDate->format('d'); ?></span>  
    </a>
    <div class="event-summary__content">
        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p><?php if(has_excerpt()) : print get_the_excerpt(); else : print wp_trim_words(get_the_content(), 18); endif;?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
    </div>
</div>
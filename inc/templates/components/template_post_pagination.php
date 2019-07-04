                                   <div class="paging clearfix">

                                        <?php
                                             $prev_post = get_previous_post();

                                             if (!empty( $prev_post )): ?>

                                                  <div class="col-1-2 prev">
                                                       <div class="meta"><?php _e("上一篇", "loc_canon"); ?></div>
                                                       <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><h3><?php echo esc_attr($prev_post->post_title); ?></h3></a>
                                                  </div>

     
                                             <?php else : ?>

                                                  <div class="col-1-2 prev eol">
                                                       <div class="meta"><?php _e("没有啦", "loc_canon"); ?></div>
                                                       <h3><?php _e("已经是第一篇", "loc_canon"); ?></h3>
                                                  </div>

                                             <?php endif; ?>


                                        <?php
                                             $next_post = get_next_post();

                                             if (!empty( $next_post )): ?>

                                                  <div class="col-1-2 next last">
                                                       <div class="meta"><?php _e("下一篇", "loc_canon"); ?></div>
                                                       <a href="<?php echo get_permalink( $next_post->ID ); ?>"><h3><?php echo esc_attr($next_post->post_title); ?></h3></a>
                                                  </div>


                                             <?php else : ?>

                                                  <div class="col-1-2 next last eol">
                                                       <div class="meta"><?php _e("没有啦", "loc_canon"); ?></div>
                                                       <h3><?php _e("已经是最后一篇", "loc_canon"); ?></h3>
                                                  </div>

                                             <?php endif; ?>

                                   </div>
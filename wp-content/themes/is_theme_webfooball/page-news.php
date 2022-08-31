<?php
/**
 * Template Name: Trang Mới Nhất
 * 
 * @package Is_theme_webfooball
 */
global $post;
get_header();
?>
    <div class="content bg-color-main">
            <div class="container container-width bg-color-white">
                <div class="row">
                    <div class="latest-details">
                        <div class="row">
                            <div class="col-xl-2 boder-left">
                                <div class="hot-news">
                                    <h4 class="news-title">tin nóng</h4>
                                    <div class="news-details-image">
                                        <img src="<?php bloginfo('template_directory') ?>/img/napoli-cho-man-utd-muon-osinhem-voi-2-dieu-kien-045611.jpg" alt="">
                                    </div>
                                    <ul class="hot-news-list">
                                        <?php
                                            $args = array('numberposts' => 10,'category' => 4);
                                            $custom = get_posts($args);
                                            foreach($custom as $post) : setup_postdata($post);
                                        ?>
                                        <li class="hot-news-list__item">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </li>
                                        <?php
                                            endforeach;
                                            wp_reset_postdata();
                                        ?>
                                    </ul>
                                </div>
                                <div class="news-details-focus">
                                    <h3 class="news-title">Tiêu điểm</h3>
                                    <ul class="news-details-focus__list">
                                        <?php 
                                            $args = array('numberposts' => 7,'category' => 21);
                                            $custom = get_posts($args);
                                            foreach ($custom as $post) : setup_postdata( $post );
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                        <li class="news-details-focus__list--item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="news-details-focus__list--item-image">
                                                    <img src="<?php echo $image[0]; ?>" alt="" style="width:100%; height: 100%;">
                                                </div>
                                                <p class="news-details-focus__list--item-text">
                                                    <?php the_title(); ?>
                                                </p>
                                            </a>
                                        </li>
                                        <?php 
                                            endforeach;
                                            wp_reset_postdata();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="current-new">
                                    <div class="current-new-content">
                                        <div class="current-new-content__image">
                                            <img src="<?php bloginfo('template_directory') ?>/img/1-1613.jpg" alt="" style="width:100%; height: 100%;">
                                        </div>
                                        <div class="current-new-content__info">
                                            <h3 class="current-new-content__info--heading">M.U bị chỉ trích vì đối xử bất công với chữ ký kỷ lục</h3>
                                            <span class="current-new-content__info--date">
                                                08:59 31/08 
                                            </span>
                                            <p class="current-new-content__info--text">
                                                Huyền thoại Liverpool, Graeme Souness, đã cáo buộc Manchester United đối xử bất công với đội trưởng của họ, Harry Maguire
                                            </p>
                                        </div>
                                        <ul class="current-new-content__list">
                                            <?php 
                                                $args = array('numberposts' => 17,'category' => 22);
                                                $custom = get_posts($args);
                                                foreach ($custom as $post) : setup_postdata( $post );
                                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                            ?>
                                            <li class="current-new-content__list--item row">
                                                <div class="current-new-content__list--item-image col-xl-4">
                                                    <img src="<?php echo $image[0]; ?>" alt="" style="width:100%; height: 100%;">
                                                </div>
                                                <div class="current-new-content__list--item-info col-xl-8">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <h4><?php the_title(); ?></h4>
                                                    </a>
                                                    <p>
                                                        <?php echo get_the_excerpt(); ?>
                                                    </p>
                                                </div>
                                            </li>
                                            <?php 
                                                endforeach; 
                                                wp_reset_postdata(); 
                                            ?>
                                        </ul>
                                        <div class="pagination">
                                            <ul class="pagination-list">
                                                <li class="pagination-list-item">
                                                    <button class="pagination-list-item__btn">1</button>
                                                </li>
                                                <li class="pagination-list-item">
                                                    <button class="pagination-list-item__btn">2</button>
                                                </li>
                                                <li class="pagination-list-item">
                                                    <button class="pagination-list-item__btn">3</button>
                                                </li>
                                                <li class="pagination-list-item">
                                                    <button class="pagination-list-item__btn">4</button>
                                                </li>
                                                <li class="pagination-list-item">
                                                    <button class="pagination-list-item__btn">5</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="reads-news">
                                    <div class="reads-news-video">
                                        <img src="<?php bloginfo('template_directory') ?>/img/van-der-sar-xin-loi-khuyen-tu-ten-hag-160348.jpg" alt="" style="width:100%; height: 100%;">
                                    </div>
                                    <div class="news-title">Tin đọc nhiều nhất</div>
                                    <div class="reads-news-image">
                                        <img src="<?php bloginfo('template_directory') ?>/img/napoli-cho-man-utd-muon-osinhem-voi-2-dieu-kien-045611.jpg" alt="" style="width:100%; height: 100%;">
                                    </div>
                                    <h3 class="reads-news-heading">Napoli cho Man Utd mượn Osinhem với 2 điều kiện</h3>
                                    <div class="row">
                                        <?php 
                                            $args = array('numberposts' =>4,'category' =>23);
                                            $custom = get_posts($args);
                                            foreach($custom as $post) : setup_postdata( $post );
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                        <div class="col-xl-6 bg-cl">
                                            <div class="reads-news-content">
                                                <div class="reads-news-content__image">
                                                    <img src="<?php echo $image[0] ?>" alt="" style="width:100%; height: 100%;">
                                                </div>
                                                <p class="reads-news-content__text">
                                                    <?php the_title(); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php 
                                            endforeach;
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
get_footer();
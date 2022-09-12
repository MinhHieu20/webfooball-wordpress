<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Is_theme_webfooball
 */

get_header();
global $post;
?>
<div class="content">
    <div class="container container-width">
        <div class="row">
            <div class="content-news">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="hot-news">
                            <h4 class="news-title">tin nóng</h4>
                            <?php
                                global $post;
                                $args= array('numberposts' => 11,'category' => 4);
                                $custom = get_posts($args);
                                foreach($custom as $post) : setup_postdata( $post );
                            ?>
                            <ul class="hot-news-list">
                                <li class="hot-news-list__item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                            </ul>
                            <?php
                                endforeach;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="current-new">
                            <div class="current-new-content">
                                <?php
                                    $args = array(
                                        'post_type' => 'attachment',
                                        'post_mime_type' => 'image',
                                        'orderby' => 'post_date',
                                        'order' => 'desc',
                                        'posts_per_page' => '1',
                                        'post_status'    => 'inherit'
                                        );
                                
                                    $loop = new WP_Query( $args );
                                    
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    
                                    $image = wp_get_attachment_image_src( get_the_ID() ); 
                                ?>
                                <div class="current-new-content__image">
                                    <!-- <img src="<?php bloginfo('template_directory'); ?>/img/ten-hag-da-tim-thay-chia-khoa-giup-man-utd-tro-nen-dang-gom-045147.png" alt="" style="width:100%; height: 100%;"> -->
                                    <img src="<?php echo $image[0]; ?>" class="w-100" alt="" style="width:100%; height: 100%;">
                                </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                                <?php
                                    $args = array('numberposts' =>1,'category' =>19);
                                    $custom = get_posts($args);
                                    foreach($custom as $post) : setup_postdata( $post );
                                ?>
                                <h3 class="current-new-content__heading"><?php the_title(); ?></h3>
                                <p class="current-new-content__text">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <?php endforeach; wp_reset_postdata(); ?>
                                <div class="current-new-content__detail">
                                    <div class="row">
                                        <?php 
                                            $args = array('numberposts' => 6,'category' => 20,);
                                            $custom = get_posts($args);
                                            foreach ($custom as $post) : setup_postdata( $post );
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                        <div class="col-xl-4">
                                            <div class="current-new-content__detail--image">
                                                <img src="<?php echo $image[0]; ?>" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <a href="<?php the_permalink(); ?>"class="current-new-content__detail--text">
                                                <?php the_title(); ?>
                                            </a>
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
                    <div class="col-xl-3">
                        <div class="reads-news">
                            <div class="reads-news-video">
                                <img src="<?php bloginfo('template_directory'); ?>/img/maxresdefault-0617.jpg" alt="" style="width:100%; height: 100%;">
                            </div>
                            <div class="news-title">Tin đọc nhiều nhất</div>
                            <div class="reads-news-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/hero-we-go-man-utd-don-tan-binh-thu-5-044113.jpg" alt="" style="width:100%; height: 100%;">
                            </div>
                            <h3 class="reads-news-heading">Here we go! Man Utd đón tân binh thứ 5</h3>
                            <div class="row">
                                <?php 
                                    global $post;
                                    $args = array('numberposts' =>4,'category' =>5);
                                    $custom = get_posts($args);
                                    foreach($custom as $post) : setup_postdata( $post );
                                ?>
                                <div class="col-xl-6 bg-cl">
                                    <div class="reads-news-content">
                                        <div class="reads-news-content__image">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/maxresdefault-0617.jpg" alt="" style="width:100%; height: 100%;">
                                        </div>
                                        <p class="reads-news-content__text">
                                            <?php the_title(); ?>
                                        </p>
                                    </div>
                                </div>
                                <?php endforeach; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-news-details">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="latest-news">
                                <h3 class="news-title">Tin mới nhất</h3>
                                <div class="row">
                                    <?php
                                        global $post;
                                        $args = array('numberposts' => 10,'category' => 6);
                                        $custom = get_posts($args);
                                        foreach ($custom as $post) : setup_postdata( $post );
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                    <div class="col-xl-6">
                                        <div class="latest-news-content d-flex">
                                            <div class="latest-news-content__image col-xl-2">
                                                <img src="<?php echo $image[0]; ?>" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h4 class="latest-news-content__heading col-xl-10">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <?php
                                        endforeach;
                                        wp_reset_postdata();
                                    ?>
                                </div>
                            </div>

                            <div class="transfer-news">
                                <h3 class="news-title">Tin chuyển nhượng</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="transfer-news-left">
                                            <div class="transfer-news-left__image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/de-jong-khong-muon-den-man-united-nhung-cau-ay-thi-co-125247.jpg" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h3 class="transfer-news-left__heading">"De Jong không muốn đến Man United, nhưng cậu ấy thì có"</h3>
                                            <p class="transfer-news-left__text">
                                                Cựu cầu thủ Gabriel Agbonlahor có những chia sẻ đáng chú ý xoay quanh một tân binh tiềm năng của Manchester United. 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 news-scroll">
                                        <?php
                                            global $post;
                                            $args = array('numberposts' => 10,'category' => 7);
                                            $custom = get_posts($args);
                                            foreach ($custom as $post) : setup_postdata( $post );
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                        <div class="transfer-news-right d-flex">
                                            <div class="transfer-news-right__image col-xl-2">
                                                <img src="<?php echo$image[0]; ?>" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h4 class="transfer-news-right__heading col-xl-10">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                        <?php
                                            endforeach;
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="english-football">
                                <h3 class="news-title">bóng đá anh</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="english-football-left">
                                            <div class="english-football-left__image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/cac-hlv-premier-league-lo-ngai-haaland-132315.png" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h3 class="english-football-left__heading">Các HLV Premier League lo ngại Haaland</h3>
                                            <p class="english-football-left__text">
                                                Màn trình diễn ấn tượng của tiền đạo Erling Haaland trong màu áo Man City khiến các chiến lược gia tại Premier League e ngại.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 news-scroll">
                                        <?php
                                            global $post;
                                            $args = array('numberposts' => 10,'category' => 8);
                                            $custom = get_posts($args);
                                            foreach ($custom as $post) : setup_postdata( $post );
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                        <div class="english-football-right d-flex">
                                            <div class="english-football-right__image col-xl-2">
                                                <img src="<?php echo $image[0]; ?>" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h4 class="english-football-right__heading col-xl-10">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                        <?php
                                            endforeach;
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="spanish-football">
                                <h3 class="news-title">bóng đá tây ban nha</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="spanish-football-left">
                                            <div class="spanish-football-left__image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/treu-nguoi-doi-thu-richarlison-bi-carragher-chi-trich-113828.jpg" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h3 class="english-football-left__heading">Trêu ngươi đối thủ, Richarlison bị Carragher chỉ trích</h3>
                                            <p class="english-football-left__text">
                                                Jamie Carragher đã lên tiếng chỉ trích Richarlison sau trận đấu giữa Nottingham Forest và Tottenham Hotspur.   
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 news-scroll">
                                        <?php
                                            global $post;
                                            $args = array('numberposts' => 10,'category' => 9);
                                            $custom = get_posts($args);
                                            foreach ($custom as $post) : setup_postdata( $post );
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'thumbnail')
                                        ?>
                                        <div class="spanish-football-right d-flex">
                                            <div class="spanish-football-right__image col-xl-2">
                                                <img src="<?php echo $image[0];?>" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h4 class="spanish-football-right__heading col-xl-10">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                        <?php
                                            endforeach;
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="vietnam-football">
                                <h3 class="news-title">bóng đá việt nam</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="vietnam-football-left">
                                            <div class="vietnam-football-left__image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/quang-hai-pau-fc-2-23234419-1804.jpg" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h3 class="english-football-left__heading">Quang Hải cần liều doping từ Pau FC</h3>
                                            <p class="english-football-left__text">
                                                Nguyễn Quang Hải cần được trao cơ hội ra sân nhiều hơn trong đội hình của Pau FC ở các trận đấu tới.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 news-scroll">
                                        <?php
                                            global $post;
                                            $args = array('numberposts' => 10,'category' => 10);
                                            $custom = get_posts($args);
                                            foreach ($custom as $post) : setup_postdata( $post );
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                        <div class="vietnam-football-right d-flex">
                                            <div class="vietnam-football-right__image col-xl-2">
                                                <img src="<?php echo $image[0];?>" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h4 class="vietnam-football-right__heading col-xl-10">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                        <?php
                                            endforeach;
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="photo">
                                <h3 class="news-title">photo</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="photo-left">
                                            <div class="photo-left-image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h3 class="photo-left-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="photo-right">
                                                    <div class="photo-right-image">
                                                        <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                                    </div>
                                                    <h3 class="photo-right-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="photo-right">
                                                    <div class="photo-right-image">
                                                        <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                                    </div>
                                                    <h3 class="photo-right-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="photo-right">
                                                    <div class="photo-right-image">
                                                        <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                                    </div>
                                                    <h3 class="photo-right-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="photo-right">
                                                    <div class="photo-right-image">
                                                        <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                                    </div>
                                                    <h3 class="photo-right-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="backstage">
                                <h3 class="news-title">hậu trường</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="backstage-left">
                                            <div class="backstage-left__image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/pogba-0718.png" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h3 class="english-football-left__heading">Pogba bị tống tiền </h3>
                                            <p class="english-football-left__text">
                                                Tiền vệ người Pháp đã trình báo vụ việc đến các cơ quan chức năng khi trở thành mục tiêu của một nhóm tội phạm.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 news-scroll">
                                        <?php
                                            global $post;
                                            $args = array('numberposts' => 10,'category' => 12);
                                            $custom = get_posts($args);
                                            foreach ($custom as $post) : setup_postdata( $post );
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                        <div class="backstage-right d-flex">
                                            <div class="backstage-right__image col-xl-2">
                                                <img src="<?php echo $image[0];?>" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h4 class="backstage-right__heading col-xl-10">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                        <?php
                                            endforeach;
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="champions-league">
                                <h3 class="news-title">champions league</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="champions-league-left">
                                            <div class="champions-league-left__image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/van-der-sar-xin-loi-khuyen-tu-ten-hag-160348.jpg" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h3 class="english-football-left__heading">Van der Sar xin lời khuyên từ Ten Hag</h3>
                                            <p class="english-football-left__text">
                                                Cựu danh thủ Manchester United, Edwin Van der Sar đã xin lời khuyên từ HLV Erik Ten Hag về địch thủ sắp tới của họ, Liverpool.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 news-scroll">
                                        <?php
                                            global $post;
                                            $args = array('numberposts' => 10,'category' =>13);
                                            $custom = get_posts($args);
                                            foreach ($custom as $post) : setup_postdata( $post );
                                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');    
                                        ?>
                                        <div class="champions-league-right d-flex">
                                            <div class="champions-league-right__image col-xl-2">
                                                <img src="<?php echo $image[0];?>" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h4 class="champions-league-right__heading col-xl-10">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                        <?php 
                                            endforeach;
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="soccer-news-one">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="europa-league">
                                            <h3 class="news-title">europa-league</h3>
                                            <div class="europa-league-image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/vong-bang-europa-league-arsenal-man-utd-de-tho-191030.jpg" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h4 class="europa-league-heading">
                                                Vòng bảng Europa League: Arsenal, Man Utd dễ thở
                                            </h4>
                                            <ul class="europa-league-list">
                                                <?php
                                                    global $post;
                                                    $args = array('numberposts'=>4,'category' => 14);
                                                    $custom = get_posts($args);
                                                    foreach($custom as $post) : setup_postdata($post);
                                                ?>
                                                <li class="europa-league-list__item">
                                                    <a href="#">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </li>
                                                <?php 
                                                    endforeach;
                                                    wp_reset_postdata();
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="italian-football">
                                            <h3 class="news-title">bóng đá ý</h3>
                                            <div class="italian-football-image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/mourinho-dieu-do-khien-toi-xau-ho-ve-ho-194411.jpg" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h4 class="italian-football-heading">
                                                Mourinho: "Điều đó khiến tôi xấu hổ về họ"
                                            </h4>
                                            <ul class="italian-football-list">
                                                <?php
                                                    global $post;
                                                    $args = array('numberposts'=>4,'category' => 15);
                                                    $custom = get_posts($args);
                                                    foreach($custom as $post) : setup_postdata($post);
                                                ?>
                                                <li class="italian-football-list__item">
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
                                    </div>
                                </div>
                            </div>

                            <div class="soccer-news-two">
                                <div class="row"><div class="col-xl-6">
                                    <div class="german-football">
                                        <h3 class="news-title">bóng đá đức</h3>
                                        <div class="german-football-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/doi-bong-bundesliga-tao-ra-ty-so-voi-xac-suat-0012-225718.jpg" alt="" style="width:100%; height: 100%;">
                                        </div>
                                        <h4 class="german-football-heading">
                                            Đội bóng Bundesliga tạo ra tỷ số với xác suất 0,012%
                                        </h4>
                                        <ul class="german-football-list">
                                            <?php 
                                                global $post;
                                                $args = array('numberposts' =>4,'category' =>16);
                                                $custom = get_posts($args);
                                                foreach($custom as $post) : setup_postdata( $post );
                                            ?>
                                            <li class="german-football-list__item">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </li>
                                            <?php endforeach; wp_reset_postdata(); ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="french-football">
                                        <h3 class="news-title">bóng đá pháp</h3>
                                        <div class="french-football-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/nuno-tavares-0001-0602.jpg" alt="" style="width:100%; height: 100%;">
                                        </div>
                                        <h4 class="french-football-heading">
                                            Người Arsenal rực sáng ở Ligue 1
                                        </h4>
                                        <ul class="french-football-list">
                                            <?php 
                                                global $post;
                                                $args = array('numberposts' =>4,'category' =>17);
                                                $custom = get_posts($args);
                                                foreach($custom as $post) : setup_postdata( $post );
                                            ?>
                                            <li class="french-football-list__item">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </li>
                                            <?php endforeach; wp_reset_postdata(); ?>
                                        </ul>
                                    </div>
                                </div></div>
                            </div>
                            <div class="video">
                                <h3 class="news-title">video</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="video-left">
                                            <div class="video-left-image">
                                                <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                            </div>
                                            <h3 class="video-left-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="video-right">
                                                    <div class="video-right-image">
                                                        <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                                    </div>
                                                    <h3 class="video-right-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="video-right">
                                                    <div class="video-right-image">
                                                        <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                                    </div>
                                                    <h3 class="video-right-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="video-right">
                                                    <div class="video-right-image">
                                                        <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                                    </div>
                                                    <h3 class="video-right-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="video-right">
                                                    <div class="video-right-image">
                                                        <img src="<?php bloginfo('template_directory'); ?>/img/casemiro-tuoi-nhu-hoa-trong-3-ao-dau-man-utd-171436.png" alt="" style="width:100%; height: 100%;">
                                                    </div>
                                                    <h3 class="video-right-heading">Casemiro tươi như hoa trong 3 áo đấu Man Utd</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="sports-news"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Is_theme_webfooball
 */
global $post
?>


<!-- #post-<?php the_ID(); ?> -->
<?php is_theme_webfooball_post_thumbnail(); ?>
<div class="content bg-color-main">
		<div class="container container-width bg-color-white">
			<div class="row">
				<div class="post-detail">
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
						<div class="col-xl-7 boder-top">
							<div class="post-detail-content">
								<div class="post-detail-content__info">
									<h3 class="post-detail-content__info--heading">
										<?php the_title(); ?>
									</h3>
									<div class="post-detail-content__info--text">
										<?php echo get_the_content(); ?>
									</div>
								</div>
								<div class="post-detail-content__share">
									<h class="post-detail-content__share--heading">Chia sẻ</h>
									<div class="post-detail-content__share--btn">
										<button class="post-detail-content__share--btn-facebook btn">
											<i class="fa-brands fa-facebook-f"></i>
											facebook
										</button>
										<button class="post-detail-content__share--btn-google btn">
											<i class="fa-brands fa-google-plus-g"></i>
											google
										</button>
										<button class="post-detail-content__share--btn-twitter btn">
											<i class="fa-brands fa-twitter"></i>
											twitter
										</button>
									</div>
								</div>
								<div class="post-detail-content__heading">
									<span>tin mới nhất</span>
								</div>
								<ul class="post-detail-content__latest">
									<?php 
										$args = array('numberposts' => 10,'category' => 25);
										$custom = get_posts($args);
										foreach( $custom as $post ) : setup_postdata($post);
									?>
										<li class="post-detail-content__latest--item">
											<a href="<?php the_permalink();?>">
												<?php the_title();?>
											</a>
										</li>
									<?php endforeach; wp_reset_postdata(); ?>
								</ul>
								<div class="post-detail-content__heading">
									<span>tin cùng chuyên mục</span>
								</div>
								<ul class="post-detail-content__category">
									<?php 
										$args = array('numberposts' => 10,'category' => 26);
										$custom = get_posts($args);
										foreach( $custom as $post ) : setup_postdata($post);
									?>
										<li class="post-detail-content__category--item">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</li>
									<?php endforeach; wp_reset_postdata(); ?>
								</ul>
								<div class="post-detail-content__heading">
									<span>tin nên đọc</span>
								</div>
								<div class="post-detail-content__read">
									<div class="row">
										<?php 
											$args = array('numberposts' => 4,'category' => 24);
											$custom = get_posts($args);
											foreach($custom as $post) : setup_postdata( $post );
											$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
										?>
										<div class="col-xl-3">
											<div class="post-detail-content__read--image">
												<img src="<?php echo $image[0] ?>" alt="" style="width:100%; height: 100%;">
											</div>
											<a class="post-detail-content__read--link" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
										</div>
										<?php endforeach; wp_reset_postdata(); ?>
									</div>
									<ul class="post-detail-content__read--list">
										<?php 
											$args = array('numberposts' =>6,'category' => 24);
											$custom = get_posts($args);
											foreach( $custom as $post ) : setup_postdata($post);
										?>
											<li class="post-detail-content__read--list-item">
												<a href=""><?php the_title(); ?></a>
											</li>
										<?php endforeach; wp_reset_postdata(); ?>
									</ul>
								</div>
								<div class="post-detail-content__previous">
									<h4 class="news-title">bài viết trước đó</h4>
									<div class="row">
										<?php 
											$args = array('numberposts' => 4,'category' => 27);
											$custom = get_posts($args);
											foreach($custom as $post) : setup_postdata( $post );
											$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
										?>
										<div class="col-xl-3">
											<div class="post-detail-content__previous--image">
												<img src="<?php echo $image[0] ?>" alt="" style="width:100%; height: 100%;">
											</div>
											<a class="post-detail-content__previous--link" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
										</div>
										<?php endforeach; wp_reset_postdata(); ?>
									</div>
									<div class="row">
										<?php 
											$args = array('numberposts' => 10,'category' => 28);
											$custom = get_posts($args);
											foreach($custom as $post) : setup_postdata( $post );
										?>
										<div class="col-xl-6" style="max-height: 6rem;">
											<ul class="post-detail-content__previous--list">
												<li class="post-detail-content__previous--list-item">
													<a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
												</li>
											</ul>
										</div>
										<?php endforeach; wp_reset_postdata(); ?>
									</div>
								</div>
								<div class="photo">
									<h3 class="news-title">photo nổi bật</h3>
									<div class="row">
										<?php 
											$args = array('numberposts' =>1,'category' =>29);
											$custom = get_posts($args);
											foreach($custom as $post) : setup_postdata( $post );
											$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
										?>
										<div class="col-xl-8">
											<div class="photo-left">
												<div class="photo-left-image">
													<img src="<?php echo $image[0] ?>" alt="" style="width:100%; height: 100%;">
												</div>
												<h3 class="photo-left-heading"> <?php the_title(); ?> </h3>
											</div>
										</div>
										<?php endforeach; wp_reset_postdata(); ?>
										<div class="col-xl-4">
											<div class="row">
												<?php 
													$args = array('numberposts' =>2,'category' =>30);
													$custom = get_posts($args);
													foreach($custom as $post) : setup_postdata( $post );
													$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
												?>
												<div class="col-xl-12">
													<div class="photo-right">
														<div class="photo-right-image">
															<img src="<?php echo $image[0] ?>" alt="" style="width:100%; height: 100%;">
														</div>
														<h3 class="photo-right-heading"> <?php the_title(); ?> </h3>
													</div>
												</div>
												<?php endforeach; wp_reset_postdata(); ?>
											</div>
										</div>
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

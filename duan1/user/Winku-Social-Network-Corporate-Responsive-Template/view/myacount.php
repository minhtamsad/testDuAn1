<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
	<link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

	<link rel="stylesheet" href="../css/main.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/color.css">
	<link rel="stylesheet" href="../css/responsive.css">

</head>

<body>
	<!--<div class="se-pre-con"></div>-->
	<div class="theme-layout">
		<div class="responsive-header">
			<div class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
				</span>
				<span class="mh-text">
					<a href="newsfeed.html" title=""><img src="images/logo2.png" alt=""></a>
				</span>
				<span class="mh-btns-right">
					<a class="fa fa-sliders" href="#shoppingbag"></a>
				</span>
			</div>
			<div class="mh-head second">
				<form class="mh-form">
					<input placeholder="search" />
					<a href="#/" class="fa fa-search"></a>
				</form>
			</div>
		</div><!-- responsive header -->

		<section>
			<div class="feature-photo">
				<figure><img src="images/resources/timeline-4.jpg" alt=""></figure>
				<form class="edit-phto">
					<i class="fa fa-camera-retro"></i>
					<label class="fileContainer">
						Edit Cover Photo
						<input type="file" />
					</label>
				</form>
				<div class="container-fluid">
					<div class="row merged">
						<div class="col-lg-2 col-sm-3">
							<div class="user-avatar">
								<figure>
									<img src="images/resources/user-avatar2.jpg" alt="">
									<form class="edit-phto">
										<i class="fa fa-camera-retro"></i>
										<label class="fileContainer">
											Edit Display Photo
											<input type="file" />
										</label>
									</form>
								</figure>
							</div>
						</div>
						<div class="col-lg-10 col-sm-9">
							<div class="timeline-info">
								<ul>
									<li class="admin-name" style="display:left;">
										<h3>Nguyệt Huế</h3>
										<h6>( 89 Bạn bè)</h6>
									</li>					
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="gap gray-bg">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="row" id="page-contents">
								<div class="col-lg-3">
									<?php
									include 'include/sidebar.php';
									?>
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<div class="central-meta">
										<div class="new-postbox">
											<figure>
												<img src="../images/resources/admin3.jpg" alt="">
											</figure>
											<div class="newpst-input">
												<form method="post">
													<textarea rows="3" placeholder="write something"></textarea>
													<div class="attachments">
														<ul>
															<li>
																<i class="fa fa-music"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-image"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-video-camera"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-camera"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<button type="submit">Publish</button>
															</li>
														</ul>
													</div>
												</form>
											</div>
										</div>
									</div><!-- add post new box -->
									<div class="loadMore">
										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img src="../images/resources/friend-avatar11.jpg" alt="">
													</figure>
													<div class="friend-name">
														<ins><a href="time-line.html" title="">Natti Natasha</a></ins>
														<span>published: june,2 2018 19:PM</span>
													</div>
													<div class="post-meta">
														<img src="images/resources/user-post6.jpg" alt="">
														<div class="we-video-info">
															<ul>
																<li>
																	<span class="views" data-toggle="tooltip" title="views">
																		<i class="fa fa-eye"></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="comment" data-toggle="tooltip" title="Comments">
																		<i class="fa fa-comments-o"></i>
																		<ins>52</ins>
																	</span>
																</li>
																<li>
																	<span class="like" data-toggle="tooltip" title="like">
																		<i class="ti-heart"></i>
																		<ins>2.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="dislike" data-toggle="tooltip" title="dislike">
																		<i class="ti-heart-broken"></i>
																		<ins>200</ins>
																	</span>
																</li>
																<li class="social-media">
																	<div class="menu">
																		<div class="btn trigger"><i class="fa fa-share-alt"></i></div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																			</div>
																		</div>

																	</div>
																</li>
															</ul>
														</div>
														<div class="description">
															<span>beautiful lamp on discount 50%</span>
															<p>
																Amazon <a href="#" title="">#amazonee</a> the most beatuiful lamp available in america and the saudia arabia, you can purchase for the home and shop for increase the room beauty
															</p>
														</div>
													</div>
												</div>
												<div class="coment-area">
													<ul class="we-comet">
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-1.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Donald Trump</a></h5>
																	<span>1 week ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
																	<i class="em em-smiley"></i>
																</p>
															</div>
														</li>
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-3.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Jason borne</a></h5>
																	<span>1 year ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
															</div>
															<ul>
																<li>
																	<div class="comet-avatar">
																		<img src="images/resources/comet-2.jpg" alt="">
																	</div>
																	<div class="we-comment">
																		<div class="coment-head">
																			<h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
																			<span>1 month ago</span>
																			<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																		</div>
																		<p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
																	</div>
																</li>
																<li>
																	<div class="comet-avatar">
																		<img src="images/resources/comet-3.jpg" alt="">
																	</div>
																	<div class="we-comment">
																		<div class="coment-head">
																			<h5><a href="time-line.html" title="">Olivia</a></h5>
																			<span>16 days ago</span>
																			<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																		</div>
																		<p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
																	</div>
																</li>
															</ul>
														</li>

														<li>
															<a href="#" title="" class="showmore underline">more comments</a>
														</li>
														<li class="post-comment">
															<div class="comet-avatar">
																<img src="images/resources/comet-4.jpg" alt="">
															</div>
															<div class="post-comt-box">
																<form method="post">
																	<textarea placeholder="Post your comment"></textarea>
																	<div class="add-smiles">
																		<span class="em em-expressionless" title="add icon"></span>
																	</div>
																	<div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div>
																	<button type="submit"></button>
																</form>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img src="images/resources/friend-avatar11.jpg" alt="">
													</figure>
													<div class="friend-name">
														<ins><a href="time-line.html" title="">Sarah grey</a></ins>
														<span>published: june,2 2018 19:PM</span>
													</div>
													<div class="post-meta">
														<img src="images/resources/user-post7.jpg" alt="">
														<div class="we-video-info">
															<ul>
																<li>
																	<span class="views" data-toggle="tooltip" title="views">
																		<i class="fa fa-eye"></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="comment" data-toggle="tooltip" title="Comments">
																		<i class="fa fa-comments-o"></i>
																		<ins>52</ins>
																	</span>
																</li>
																<li>
																	<span class="like" data-toggle="tooltip" title="like">
																		<i class="ti-heart"></i>
																		<ins>2.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="dislike" data-toggle="tooltip" title="dislike">
																		<i class="ti-heart-broken"></i>
																		<ins>200</ins>
																	</span>
																</li>
																<li class="social-media">
																	<div class="menu">
																		<div class="btn trigger"><i class="fa fa-share-alt"></i></div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																			</div>
																		</div>

																	</div>
																</li>
															</ul>
														</div>
														<div class="description">
															<span>Leather bag 70% discount in Summer</span>
															<p>
																Curabitur <a href="#" title="">#amazon_shop</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
															</p>
														</div>
													</div>
												</div>
												<div class="coment-area">
													<ul class="we-comet">
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-1.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Jason borne</a></h5>
																	<span>1 year ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
															</div>

														</li>
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-2.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Sophia</a></h5>
																	<span>1 week ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster.
																	<i class="em em-smiley"></i>
																</p>
															</div>
														</li>
														<li>
															<a href="#" title="" class="showmore underline">more comments</a>
														</li>
														<li class="post-comment">
															<div class="comet-avatar">
																<img src="images/resources/comet-4.jpg" alt="">
															</div>
															<div class="post-comt-box">
																<form method="post">
																	<textarea placeholder="Post your comment"></textarea>
																	<div class="add-smiles">
																		<span class="em em-expressionless" title="add icon"></span>
																	</div>
																	<div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div>
																	<button type="submit"></button>
																</form>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img src="images/resources/friend-avatar10.jpg" alt="">
													</figure>
													<div class="friend-name">
														<ins><a href="time-line.html" title="">Janice Griffith</a></ins>
														<span>published: june,2 2018 19:PM</span>
													</div>
													<div class="description">

														<p>
															Curabitur World's most beautiful car in <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
														</p>
													</div>
													<div class="post-meta">
														<div class="linked-image align-left">
															<a href="#" title=""><img src="images/resources/page1.jpg" alt=""></a>
														</div>
														<div class="detail">
															<span>Love Maid - ChillGroves</span>
															<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... </p>
															<a href="#" title="">www.sample.com</a>
														</div>
														<div class="we-video-info">
															<ul>
																<li>
																	<span class="views" data-toggle="tooltip" title="views">
																		<i class="fa fa-eye"></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="comment" data-toggle="tooltip" title="Comments">
																		<i class="fa fa-comments-o"></i>
																		<ins>52</ins>
																	</span>
																</li>
																<li>
																	<span class="like" data-toggle="tooltip" title="like">
																		<i class="ti-heart"></i>
																		<ins>2.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="dislike" data-toggle="tooltip" title="dislike">
																		<i class="ti-heart-broken"></i>
																		<ins>200</ins>
																	</span>
																</li>
																<li class="social-media">
																	<div class="menu">
																		<div class="btn trigger"><i class="fa fa-share-alt"></i></div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																			</div>
																		</div>

																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<img src="images/resources/friend-avatar10.jpg" alt="">
													</figure>
													<div class="friend-name">
														<ins><a href="time-line.html" title="">Janice Griffith</a></ins>
														<span>published: june,2 2018 19:PM</span>
													</div>
													<div class="post-meta">
														<iframe src="https://player.vimeo.com/video/15232052" height="315" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														<div class="we-video-info">
															<ul>
																<li>
																	<span class="views" data-toggle="tooltip" title="views">
																		<i class="fa fa-eye"></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="comment" data-toggle="tooltip" title="Comments">
																		<i class="fa fa-comments-o"></i>
																		<ins>52</ins>
																	</span>
																</li>
																<li>
																	<span class="like" data-toggle="tooltip" title="like">
																		<i class="ti-heart"></i>
																		<ins>2.2k</ins>
																	</span>
																</li>
																<li>
																	<span class="dislike" data-toggle="tooltip" title="dislike">
																		<i class="ti-heart-broken"></i>
																		<ins>200</ins>
																	</span>
																</li>
																<li class="social-media">
																	<div class="menu">
																		<div class="btn trigger"><i class="fa fa-share-alt"></i></div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																			</div>
																		</div>
																		<div class="rotater">
																			<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																			</div>
																		</div>

																	</div>
																</li>
															</ul>
														</div>
														<div class="description">
															<span>Lonely Cat Enjoying in Summer</span>
															<p>
																Curabitur <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
															</p>
														</div>
													</div>
												</div>
												<div class="coment-area">
													<ul class="we-comet">
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-1.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Jason borne</a></h5>
																	<span>1 year ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
															</div>

														</li>
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-2.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Sophia</a></h5>
																	<span>1 week ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>we are working for the dance and sing songs. this video is very awesome for the youngster.
																	<i class="em em-smiley"></i>
																</p>
															</div>
														</li>
														<li>
															<a href="#" title="" class="showmore underline">more comments</a>
														</li>
														<li class="post-comment">
															<div class="comet-avatar">
																<img src="images/resources/comet-2.jpg" alt="">
															</div>
															<div class="post-comt-box">
																<form method="post">
																	<textarea placeholder="Post your comment"></textarea>
																	<div class="add-smiles">
																		<span class="em em-expressionless" title="add icon"></span>
																	</div>
																	<div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div>
																	<button type="submit"></button>
																</form>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div><!-- centerl meta -->
								<div class="col-lg-3">
									<aside class="sidebar static">

										<div class="widget friend-list stick-widget">
											<h4 class="widget-title">Friends</h4>
											<div id="searchDir"></div>
											<ul id="people-list" class="friendz-list">
												<li>
													<figure>
														<img src="images/resources/friend-avatar.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">bucky barnes</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1e6977706a7b6c6d71727a7b6c5e79737f7772307d7173">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>
													<figure>
														<img src="images/resources/friend-avatar2.jpg" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">Sarah Loren</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="debcbfacb0bbad9eb9b3bfb7b2f0bdb1b3">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>
													<figure>
														<img src="images/resources/friend-avatar3.jpg" alt="">
														<span class="status f-off"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">jason borne</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e646f7d61606c4e69636f6762206d6163">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>
													<figure>
														<img src="images/resources/friend-avatar4.jpg" alt="">
														<span class="status f-off"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">Cameron diaz</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="513b30223e3f3311363c30383d7f323e3c">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar5.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">daniel warber</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="315b50425e5f5371565c50585d1f525e5c">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar6.jpg" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">andrew</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f69c9785999894b6919b979f9ad895999b">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar7.jpg" alt="">
														<span class="status f-off"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">amy watson</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bad0dbc9d5d4d8faddd7dbd3d694d9d5d7">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar5.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">daniel warber</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="076d667468696547606a666e6b2964686a">[email&#160;protected]</a></i>
													</div>
												</li>
												<li>

													<figure>
														<img src="images/resources/friend-avatar2.jpg" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="friendz-meta">
														<a href="time-line.html">Sarah Loren</a>
														<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1d3d0c3dfd4c2f1d6dcd0d8dd9fd2dedc">[email&#160;protected]</a></i>
													</div>
												</li>
											</ul>
											<div class="chat-box">
												<div class="chat-head">
													<span class="status f-online"></span>
													<h6>Bucky Barnes</h6>
													<div class="more">
														<span><i class="ti-more-alt"></i></span>
														<span class="close-mesage"><i class="ti-close"></i></span>
													</div>
												</div>
												<div class="chat-list">
													<ul>
														<li class="me">
															<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
															<div class="notification-event">
																<span class="chat-message-item">
																	Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
																</span>
																<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
															</div>
														</li>
														<li class="you">
															<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
															<div class="notification-event">
																<span class="chat-message-item">
																	Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
																</span>
																<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
															</div>
														</li>
														<li class="me">
															<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
															<div class="notification-event">
																<span class="chat-message-item">
																	Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
																</span>
																<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
															</div>
														</li>
													</ul>
													<form class="text-box">
														<textarea placeholder="Post enter to post..."></textarea>
														<div class="add-smiles">
															<span title="add icon" class="em em-expressionless"></span>
														</div>
														<div class="smiles-bunch">
															<i class="em em---1"></i>
															<i class="em em-smiley"></i>
															<i class="em em-anguished"></i>
															<i class="em em-laughing"></i>
															<i class="em em-angry"></i>
															<i class="em em-astonished"></i>
															<i class="em em-blush"></i>
															<i class="em em-disappointed"></i>
															<i class="em em-worried"></i>
															<i class="em em-kissing_heart"></i>
															<i class="em em-rage"></i>
															<i class="em em-stuck_out_tongue"></i>
														</div>
														<button type="submit"></button>
													</form>
												</div>
											</div>
										</div><!-- friends list sidebar -->
									</aside>
								</div><!-- sidebar -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="widget">
							<div class="foot-logo">
								<div class="logo">
									<a href="index-2.html" title=""><img src="images/logo.png" alt=""></a>
								</div>
								<p>
									The trio took this simple idea and built it into the world’s leading carpooling platform.
								</p>
							</div>
							<ul class="location">
								<li>
									<i class="ti-map-alt"></i>
									<p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
								</li>
								<li>
									<i class="ti-mobile"></i>
									<p>+1-56-346 345</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="widget">
							<div class="widget-title">
								<h4>follow</h4>
							</div>
							<ul class="list-style">
								<li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
								<li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
								<li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
								<li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
								<li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="widget">
							<div class="widget-title">
								<h4>Navigate</h4>
							</div>
							<ul class="list-style">
								<li><a href="about.html" title="">about us</a></li>
								<li><a href="contact.html" title="">contact us</a></li>
								<li><a href="terms.html" title="">terms & Conditions</a></li>
								<li><a href="#" title="">RSS syndication</a></li>
								<li><a href="sitemap.html" title="">Sitemap</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="widget">
							<div class="widget-title">
								<h4>useful links</h4>
							</div>
							<ul class="list-style">
								<li><a href="#" title="">leasing</a></li>
								<li><a href="#" title="">submit route</a></li>
								<li><a href="#" title="">how does it work?</a></li>
								<li><a href="#" title="">agent listings</a></li>
								<li><a href="#" title="">view All</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="widget">
							<div class="widget-title">
								<h4>download apps</h4>
							</div>
							<ul class="colla-apps">
								<li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
								<li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
								<li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- footer -->
		<div class="bottombar">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
						<i><img src="images/credit-cards.png" alt=""></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="side-panel">
		<h4 class="panel-title">General Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>use night mode</span>
				<input type="checkbox" id="nightmode1" />
				<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notifications</span>
				<input type="checkbox" id="switch22" />
				<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notification sound</span>
				<input type="checkbox" id="switch33" />
				<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>My profile</span>
				<input type="checkbox" id="switch44" />
				<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show profile</span>
				<input type="checkbox" id="switch55" />
				<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
		<h4 class="panel-title">Account Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>Sub users</span>
				<input type="checkbox" id="switch66" />
				<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>personal account</span>
				<input type="checkbox" id="switch77" />
				<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Business account</span>
				<input type="checkbox" id="switch88" />
				<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show me online</span>
				<input type="checkbox" id="switch99" />
				<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Delete history</span>
				<input type="checkbox" id="switch101" />
				<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Expose author name</span>
				<input type="checkbox" id="switch111" />
				<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
	</div><!-- side panel -->

	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>

</body>


</html>
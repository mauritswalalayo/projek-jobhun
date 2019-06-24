<!DOCTYPE html>
<html>
<head>
	@include('user.partial.css')
</head>
<body class="newbg">

<div class="page-loading">
	<img src="images/loader.gif" alt="" />
</div>

<div class="theme-layout" id="scrollup">

	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="index.html" title=""><img src="http://placehold.it/178x40" alt="" /></a></div>
			<div class="menu-resaction">
				<div class="res-openmenu">
					<img src="images/icon.png" alt="" /> Menu
				</div>
				<div class="res-closemenu">
					<img src="images/icon2.png" alt="" /> Close
				</div>
			</div>
		</div>
		<div class="responsive-opensec">
			<div class="btn-extars">
				<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
				<ul class="account-btns">
					<li class="signup-popup"><a title=""><i class="la la-key"></i> Daftar</a></li>
					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Masuk</a></li>
				</ul>
			</div><!-- Btn Extras -->
			<form class="res-search">
				<input type="text" placeholder="Job title, keywords or company name" />
				<button type="submit"><i class="la la-search"></i></button>
			</form>
			<div class="responsivemenu">
				<ul>
						<li class="">
							<a href="#" title="">Tentang Jobhun</a>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Layanan</a>
							<ul>
								<li><a href="employer_list1.html" title=""> Jobhun Career Hub</a></li>
								<li><a href="employer_list2.html" title="">Jobhun Academy</a></li>
								<li><a href="employer_list3.html" title="">Media Partner</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Program</a>
							<ul>
								<li><a href="candidates_list.html" title="">Jobhun Internship</a></li>
								<li><a href="candidates_list2.html" title="">Jobhun Talks</a></li>
								<li><a href="candidates_list3.html" title="">Jobhun Visit</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Blog</a>
							<ul>
								<li><a href="blog_list.html">Cerita Karier</a></li>
								<li><a href="blog_list2.html">Infografik</a></li>
								<li><a href="blog_list3.html">Karierpedia</a></li>
								<li><a href="blog_single.html">Artikel</a></li>
								<li><a href="blog_single.html">Berita</a></li>
								<li><a href="blog_single.html">Info Acara</a></li>
							</ul>
						</li>
					</ul>
			</div>
		</div>
	</div>

	<header class="stick-top forsticky new-header">
		<div class="menu-sec">
			<div class="container">
				<div class="logo">
					<a href="index.html" title=""><img class="hidesticky" src="http://placehold.it/178x40" alt="" /><img class="showsticky" src="http://placehold.it/178x40" alt="" /></a>
				</div><!-- Logo -->
				<div class="btn-extars">
					<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
					<ul class="account-btns">
						<li class="signup-popup"><a title=""><i class="la la-key"></i> Daftar</a></li>
						<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Masuk</a></li>
					</ul>
				</div><!-- Btn Extras -->
				<nav>
					<ul>
						<li class="">
							<a href="#" title="">Tentang Jobhun</a>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Layanan</a>
							<ul>
								<li><a href="employer_list1.html" title=""> Jobhun Career Hub</a></li>
								<li><a href="employer_list2.html" title="">Jobhun Academy</a></li>
								<li><a href="employer_list3.html" title="">Media Partner</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Program</a>
							<ul>
								<li><a href="candidates_list.html" title="">Jobhun Internship</a></li>
								<li><a href="candidates_list2.html" title="">Jobhun Talks</a></li>
								<li><a href="candidates_list3.html" title="">Jobhun Visit</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Blog</a>
							<ul>
								<li><a href="blog_list.html">Cerita Karier</a></li>
								<li><a href="blog_list2.html">Infografik</a></li>
								<li><a href="blog_list3.html">Karierpedia</a></li>
								<li><a href="blog_single.html">Artikel</a></li>
								<li><a href="blog_single.html">Berita</a></li>
								<li><a href="blog_single.html">Info Acara</a></li>
							</ul>
						</li>
					</ul>
				</nav><!-- Menus -->
			</div>
		</div>
	</header>

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-featured-sec">
							<div class="new-slide-3">
								<img src="http://placehold.it/600x550" alt="" />
							</div>
							<div class="job-search-sec">
								<div class="job-search">
									<h3>The Easiest Way to Get Your New Job</h3>
									<span>Find Jobs, Employment & Career Opportunities</span>
									<form>
										<div class="row">
											<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
												<div class="job-field">
													<input type="text" placeholder="Job title, keywords or company name" />
													<i class="la la-keyboard-o"></i>
												</div>
											</div>
											<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
												<div class="job-field">
													<select data-placeholder="City, province or region" class="chosen-city">
														<option>New York </option>
														<option>Istanbul</option>
														<option>London</option>
														<option>Russia</option>
													</select>
													<i class="la la-map-marker"></i>
												</div>
											</div>
											<div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
												<button type="submit"><i class="la la-search"></i></button>
											</div>
										</div>
									</form>
									<div class="or-browser">
										<span>Browse job offers by</span>
										<a href="#" title="">Category</a>
									</div>
								</div>
							</div>
							<div class="scroll-to">
								<a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="scroll-here">
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Popular Categories</h2>
							<span>37 jobs live - 0 added today.</span>
						</div><!-- Heading -->
						<div class="cat-sec">
							<div class="row no-gape">
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-bullhorn"></i>
											<span>Design, Art & Multimedia</span>
											<p>(22 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-graduation-cap"></i>
											<span>Education Training</span>
											<p>(6 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-line-chart "></i>
											<span>Accounting / Finance</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-users"></i>
											<span>Human Resource</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="cat-sec">
							<div class="row no-gape">
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-phone"></i>
											<span>Telecommunications</span>
											<p>(22 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-cutlery"></i>
											<span>Restaurant / Food Service</span>
											<p>(6 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-building"></i>
											<span>Construction / Facilities</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-user-md"></i>
											<span>Health</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="#" title="">Browse All Categories</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block double-gap-top double-gap-bottom">
			<div data-velocity="-.1" style="background: url(http://placehold.it/1920x1000) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text-block">
							<h3>Make a Difference with Your Online Resume!</h3>
							<span>Your resume in minutes with JobHunt resume assistant is ready!</span>
							<a href="#" title="">Create an Account</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Featured Jobs</h2>
							<span>Leading Employers already using job and talent.</span>
						</div><!-- Heading -->
						<div class="job-listings-sec">
							<div class="job-listing">
								<div class="job-title-sec">
									<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
									<h3><a href="#" title="">Web Designer / Developer</a></h3>
									<span>Massimo Artemisis</span>
								</div>
								<span class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</span>
								<span class="fav-job"><i class="la la-heart-o"></i></span>
								<span class="job-is ft">FULL TIME</span>
							</div><!-- Job -->
							<div class="job-listing">
								<div class="job-title-sec">
									<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
									<h3><a href="#" title="">Marketing Director</a></h3>
									<span>Tix Dog</span>
								</div>
								<span class="job-lctn"><i class="la la-map-marker"></i>Rennes, France</span>
								<span class="fav-job"><i class="la la-heart-o"></i></span>
								<span class="job-is pt">PART TIME</span>
							</div><!-- Job -->
							<div class="job-listing">
								<div class="job-title-sec">
									<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
									<h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
									<span>StarHealth</span>
								</div>
								<span class="job-lctn"><i class="la la-map-marker"></i>London, United Kingdom</span>
								<span class="fav-job"><i class="la la-heart-o"></i></span>
								<span class="job-is ft">FULL TIME</span>
							</div><!-- Job -->
							<div class="job-listing">
								<div class="job-title-sec">
									<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
									<h3><a href="#" title="">Application Developer For Android</a></h3>
									<span>Altes Bank</span>
								</div>
								<span class="job-lctn"><i class="la la-map-marker"></i>Istanbul, Turkey</span>
								<span class="fav-job"><i class="la la-heart-o"></i></span>
								<span class="job-is fl">FREELANCE</span>
							</div><!-- Job -->
							<div class="job-listing">
								<div class="job-title-sec">
									<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
									<h3><a href="#" title="">Regional Sales Manager South east Asia</a></h3>
									<span>Vincent</span>
								</div>
								<span class="job-lctn"><i class="la la-map-marker"></i>Ajax, Ontario</span>
								<span class="fav-job"><i class="la la-heart-o"></i></span>
								<span class="job-is tp">TEMPORARY</span>
							</div><!-- Job -->
							<div class="job-listing">
								<div class="job-title-sec">
									<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
									<h3><a href="#" title="">Social Media and Public Relation Executive </a></h3>
									<span>MediaLab</span>
								</div>
								<span class="job-lctn"><i class="la la-map-marker"></i>Ankara / Turkey</span>
								<span class="fav-job"><i class="la la-heart-o"></i></span>
								<span class="job-is ft">FULL TIME</span>
							</div><!-- Job -->
						</div>
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="#" title="">Load more listings</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url(http://placehold.it/1920x1000) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading light">
							<h2>Kind Words From Happy Candidates</h2>
							<span>What other people thought about the service provided by JobHunt</span>
						</div><!-- Heading -->
						<div class="reviews-sec" id="reviews-carousel">
							<div class="col-lg-6">
								<div class="reviews">
									<img src="http://placehold.it/101x101" alt="" />
									<h3>Augusta Silva <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="http://placehold.it/101x101" alt="" />
									<h3>Ali Tufan <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="http://placehold.it/101x101" alt="" />
									<h3>Augusta Silva <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="http://placehold.it/101x101" alt="" />
									<h3>Ali Tufan <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Companies We've Helped</h2>
							<span>Some of the companies we've helped recruit excellent applicants over the years.</span>
						</div><!-- Heading -->
						<div class="comp-sec">
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url(http://placehold.it/1920x655) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Quick Career Tips</h2>
							<span>Found by employers communicate directly with hiring managers and recruiters.</span>
						</div><!-- Heading -->
						<div class="blog-sec">
							<div class="row">
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="http://placehold.it/360x200" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="http://placehold.it/360x200" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="http://placehold.it/360x200" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text">
							<h3>Gat a question?</h3>
							<span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="about_widget">
								<div class="logo">
									<a href="#" title=""><img src="http://placehold.it/178x40" alt="" /></a>
								</div>
								<span>Collin Street West, Victor 8007, Australia.</span>
								<span>+1 246-345-0695</span>
								<span>info@jobhunt.com</span>
								<div class="social">
									<a href="#" title=""><i class="fa fa-facebook"></i></a>
									<a href="#" title=""><i class="fa fa-twitter"></i></a>
									<a href="#" title=""><i class="fa fa-linkedin"></i></a>
									<a href="#" title=""><i class="fa fa-pinterest"></i></a>
									<a href="#" title=""><i class="fa fa-behance"></i></a>
								</div>
							</div><!-- About Widget -->
						</div>
					</div>
					<div class="col-lg-4 column">
						<div class="widget">
							<h3 class="footer-title">Frequently Asked Questions</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-6">
										<a href="#" title="">Privacy & Seurty </a>
										<a href="#" title="">Terms of Serice</a>
										<a href="#" title="">Communications </a>
										<a href="#" title="">Referral Terms </a>
										<a href="#" title="">Lending Licnses </a>
										<a href="#" title="">Disclaimers </a>
									</div>
									<div class="col-lg-6">
										<a href="#" title="">Support </a>
										<a href="#" title="">How It Works </a>
										<a href="#" title="">For Employers </a>
										<a href="#" title="">Underwriting </a>
										<a href="#" title="">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 column">
						<div class="widget">
							<h3 class="footer-title">Find Jobs</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-12">
										<a href="#" title="">US Jobs</a>
										<a href="#" title="">Canada Jobs</a>
										<a href="#" title="">UK Jobs</a>
										<a href="#" title="">Emplois en Fnce</a>
										<a href="#" title="">Jobs in Deuts</a>
										<a href="#" title="">Vacatures China</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="download_widget">
								<a href="#" title=""><img src="http://placehold.it/230x65" alt="" /></a>
								<a href="#" title=""><img src="http://placehold.it/230x65" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>

</div>

<div class="account-popup-area signin-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>User Login</h3>
		<span>Click To Login With Demo User</span>
		<div class="select-user">
			<span>Candidate</span>
			<span>Employer</span>
		</div>
		<form>
			<div class="cfield">
				<input type="text" placeholder="Username" />
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" />
				<i class="la la-key"></i>
			</div>
			<p class="remember-label">
				<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
			</p>
			<a href="#" title="">Forgot Password?</a>
			<button type="submit">Login</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Sign Up</h3>
		<div class="select-user">
			<span>Candidate</span>
			<span>Employer</span>
		</div>
		<form>
			<div class="cfield">
				<input type="text" placeholder="Username" />
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" />
				<i class="la la-key"></i>
			</div>
			<div class="cfield">
				<input type="text" placeholder="Email" />
				<i class="la la-envelope-o"></i>
			</div>
			<div class="dropdown-field">
				<select data-placeholder="Please Select Specialism" class="chosen">
					<option>Web Development</option>
					<option>Web Designing</option>
					<option>Art & Culture</option>
					<option>Reading & Writing</option>
				</select>
			</div>
			<div class="cfield">
				<input type="text" placeholder="Phone Number" />
				<i class="la la-phone"></i>
			</div>
			<button type="submit">Signup</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- SIGNUP POPUP -->

@include('user.partial.js')

</body>
</html>

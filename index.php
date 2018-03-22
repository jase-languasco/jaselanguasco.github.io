<!doctype html>
<html lang="en">
<head>
	<title>Jase Languasco</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<style>

		#about, #skills, #experience { display:none; }

		#experience { text-align:left; margin-top:10em; position:relative; }

		#about-image { margin:3em auto; }

		.footer { position:fixed; bottom:0; width:100%; text-align:center; background-color:#fff; }

		.landing-page { height:100%; width:100%; }
		.landing-page h4 { font-size:2em; padding:1em; }

		#site-title { text-align:center; width:100%; position:absolute; top:30%; }
		#site-title h1, #site-title h2 {  font-family: 'Shadows Into Light Two', cursive !important; }
		#site-title h1 { font-size:8em !important; }

		.main-section { margin:0 auto; width:100%; text-align:center; }

		.tab-menu { position:fixed; width:12em; right:-7.5em; top:15%; cursor:pointer; z-index:9999; background-color:rgba(0, 0, 0, .3); }
		.tab-menu ul { margin:0; padding:0; }
		.tab-menu i { display:block !important; font-size:1.5em; margin:1em; position:relative; }

		.tab-menu ul li { list-style-type:none; }
		.menu-tab i, .menu-tab a, .tab-menu a { display:inline-block !important; color:#fff; }

		.menu-tab:hover { background-color:rgba(0, 0, 0, 1); cursor:pointer; }

		.about-copy { max-width:40em; text-align:center; margin:0 auto; padding:1em; }

		.experience-card { width:80% !important; margin:2em auto !important; }

		.section-header { width:100%; background-color:#000; color:#fff; text-align:left; position:fixed; top:0; z-index:9999; margin-bottom:5em; }
		.section-body { margin:8em auto; }

		@media (max-width:800px) {
			#site-title h1 { font-size:5rem !important; }
			#site-title h2 { font-size:1.5rem !important; padding:0 2.5em !important; }
		}
	</style>
</head>
<body>
	<section class="landing-page">
		<div class="ui loader"></div>
		<div class="ui tiny modal hire-me-modal">
		  	<div class="content">
		    	<form class="ui form hire-me-form" method="post" action="/hire-me.php">
		    		<div class="field">
		    			<input type="text" name="name" placeholder="Your Name" required>
		    		</div>
		    		<div class="field">
		    			<input type="text" name="email" placeholder="Your Email" required>
		    		</div>
					<div class="field">
						<label>Project Description</label>
						<textarea rows="2"></textarea>
					</div>
		    	</form>
		  	</div>
  			<div class="actions">
    			<button class="ui button" id="submit-hire-form">Submit</button>
  			</div>
		</div>
		<div class="tab-menu">
			<ul>
				<li class="menu-tab page-link" data-page-title="experience">
					<i class="chart bar outline icon"></i>
					<a class="item">Experience</a>
				</li>
				<li class="menu-tab page-link" data-page-title="skills">
					<i class="chart bar outline icon"></i>
					<a class="item">Skills</a>
				</li>
				<li class="menu-tab page-link" data-page-title="about">
					<i class="info icon circle"></i>
					<a class="item">About</a>
				</li>
				<li class="menu-tab">
					<a href="https://github.com/jase-languasco" target="_blank">
						<i class="github icon"></i>Github
					</a>
				</li>
				<li class="menu-tab">
					<a href="https://www.linkedin.com/in/jase-languasco/" target="_blank">
						<i class="linkedin in icon"></i>LinkedIn
					</a>
				</li>
				<li class="menu-tab">
					<a href="https://stackoverflow.com/users/3726775/jase" target="_blank">
						<i class="stack overflow icon"></i>Stack Overflow
					</a>
				</li>
				<li class="menu-tab">
					<a href="jase-languasco-resume.pdf" target="_blank">
						<i class="file alternate outline icon"></i>Resume
					</a>
				</li>
			</ul>
		</div>
		<div class="main-section" id="site-title">
			<h1>Howdy!</h1>
			<h2>my name is Jase and I'm a Full Stack Web Developer</h2>
			<buton class="ui button" id="hire-me-button">Hire Me :)</buton>
		</div>
		<div class="main-section" id="about">
			<div class="section-header">
				<h4>About</h4>
			</div>
			<div class="section-body">
				<image class="ui medium circular image" id="about-image" src="jase-headshot.jpg">
				<div class="about-copy">
					<p>Hello! My name is Jase Languasco, I’m a husband and a follower of Christ. I’ve been married to my wife Jordan for nearly 4 years and we are expecting our first child this August! We are pretty excited and scrambling around trying to get everything ready :) We’ll also be accepting donations!</p>

					<p>Most of our marriage my wife and I have been paying off debt (student loans and a car). Recently, we hit the mark and finally did it! It’s been one heck of a struggle, but we’re thrilled to have finally crossed the finished line.</p>

					<p>In my free time, I enjoy reading books (not listening to them), watching funny movies (the clean kind of funny), learning new technologies and going on walks with my wife. About a year ago I started spending a lot of my free time playing chess and learning about the game. I’m better than I was, but no still no Grand Master. If you ever want to play check me out on chess.com. https://www.chess.com/member/codenator</p>

					<p>I’ve been solving problems with code for almost 5 years. It started out as a hobby, but the more I wrote the more I loved it and the more I learned the more I wanted to learn, so now it’s what I do!</p>
				</div>
			</div>
		</div>
		<div class="main-section" id="skills">
			<div class="section-header">
				<h4>Skills</h4>
			</div>
			<div class="section-body">
				<i class="php icon"></i>
				<i class="html5 icon"></i>
				<i class="js icon"></i>
				<i class="laravel icon"></i>
				<i class="git icon"></i>
			</div>
		</div>
		<div class="main-section" id="experience">
			<div class="section-header">
				<h4>Experience</h4>
			</div>
			<div class="section-body">
				<div class="ui card experience-card">
					<div class="content">
				    	<div class="header"><a href="https://www.cablesandkits.com/">CablesAndKits</a></div>
				    	<div class="meta">
				    		<div>June 2016 - present</div>
				      		<div>Full Stack Developer</div>
				    	</div>
				    	<ul>
				    		<li>manage individual project priorities, deadlines, and deliverables</li>
				    		<li>design, develop, test, deploy and maintain new tools and features</li>
				    		<li>work with project manager and project owners to define new features and tools</li>
				    	</ul>
				  	</div>
				</div>
				<div class="ui card experience-card">
					<div class="content">
				    	<div class="header"><a href="http://birdsonawiremoms.com/">Birds On A Wire</a></div>
				    	<div class="meta">
				    		<div>June 2017 - present</div>
				      		<div>Web Developer</div>
				    	</div>
				    	<ul>
				    		<li></li>
				    		<li></li>
				    		<li></li>
				    	</ul>
				  	</div>
				</div>
				<div class="ui card experience-card">
					<div class="content">
				    	<div class="header"><a href="https://268generation.com/">Passion Conference</a></div>
				    	<div class="meta">
				    		<div>June 2017 - January 2018</div>
				      		<div>Web Developer</div>
				    	</div>
				    	<ul>
				    		<li></li>
				    		<li></li>
				    		<li></li>
				    	</ul>
				  	</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<p style="text-align:center;"><i class="copyright outline icon"></i>2018 Jase Languasco. All rights reserved.<p>
		</footer>
	</section>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
	<script>

		jQuery('#submit-hire-form').on('click', function () {
			jQuery('.hire-me-form').submit();
		});

		jQuery('#hire-me-button').on('click', function () {
			jQuery('.hire-me-modal').modal('show');
		});

		jQuery('.tab-menu').mouseenter(function () {
			jQuery(this).animate({
				right: "0",
			}, 100);
		});

		jQuery('.tab-menu').mouseleave(function () {
			jQuery(this).animate({
				right: "-7.5em",
			}, 100);
		});

		jQuery('.open-sidebar').on('click', function () {
			jQuery(this).toggle();
			jQuery('.ui.labeled.icon.sidebar').sidebar('toggle');
		});

		jQuery('.page-link').on('click', function () {
			jQuery('.main-section').hide();
			jQuery('.tab-menu').hide();
			jQuery('.landing-page').addClass('ui active dimmer');

			let pageTitle = jQuery(this).data('page-title');

			setTimeout(function () {
				jQuery('#' + pageTitle).fadeIn();
				jQuery('.tab-menu').show();
				jQuery('.landing-page').removeClass('ui active dimmer');
			}, 1000);
		});
	</script>
</body>
</html>

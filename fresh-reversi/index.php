<!DOCTYPE HTML>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
<meta name="viewport" content="width=1024">
<title>Fresh Reversi – iPhone and iPad Game – Pleeq Software</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//pleeq.com/fresh-reversi/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta property="og:site_name" content="Pleeq Software">
	<meta property="og:image" content="http://pleeq.com/fresh-reversi/fresh-reversi-280px.png">
	<meta property="og:title" content="Fresh Reversi – reversi game for iPhone and iPad">
	<meta property="og:description" content="With Fresh Reversi, you can play alone versus the computer or against your friends on iPhone or iPad.">
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon-precomposed" href="http://pleeq.com/resources/pleeq-icon.png">
	<meta name="apple-itunes-app" content="app-id=732986215">
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-8052564-18']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	  
	   $(document).ready(function(){

		$('#signUp').click(function()
		{
		
			var name = $('#userName').val();
			var box = $('#userEmail').val();
			
			if(name && box)
			{
				console.log(name+" "+box);	
				$.post(
				'../emailCollector.php',  
		        {'email':box,'name':name,'source':0},
		        function(responseText){
			         
		        	console.log(responseText);
					$('#userName').val("");
					$('#userEmail').val("");
					$('#success').show();
					location.href = 'https://itunes.apple.com/us/app/fresh-reversi-othello-like/id732986215?mt=8';
					return;
				    
				},  
		        "html");
				
			}
			
			setTimeout(function() {
			    $('#success').fadeOut('slow');
			}, 5000);
			
		});
	
	
		$('#subscribe-form input').keypress(function(e) {
	        if(e.which == 13) {
	            jQuery(this).blur();
	            jQuery('#signUp').focus().click();
	        }
		});
	
	});

	</script>
	
</head>
<body>

<nav>
	<a id="pleeq-software" href="http://pleeq.com">Pleeq Software</a>
	<a id="kit" href="https://www.dropbox.com/sh/u25yrks0w1ssvau/AADjZGegZGN-Xf2HfzK78_l5a?dl=0">Press Kit</a>
</nav>

<header>
	<div id="reversi-icon"></div>
	<h1>Improve Your Strategic Thinking by Game</h1>
	<h3>Fight on a board as a great leader. Think. Advance. Win.</h3>
<!-- 	<h3>Fresh Reversi is a great board game for children and adults.</h3> -->
	<a href="https://itunes.apple.com/us/app/fresh-reversi-othello-like/id732986215?mt=8" class="app-store"></a>
</header>

<section class="hero">
		<div class="iphone-linear">
<!--
		<div id="gameplay-video">
		<video id="vid1" autoplay="autoplay" muted="" loop="" width="320" height="480">
			 <source src="http://pleeq.com/fresh-reversi/fresh-reversi-gameplay.mp4" type="video/mp4">
			 <source src="http://pleeq.com/fresh-reversi/fresh-reversi-gameplay.webm" type="video/webm">

		 </video>
		</div>
-->
	
		</div>
		<p>Fresh Reversi is a game for two people leveraging an 8×8 cell board.
The original game was invented in the UK in 1883, it was forgotten until resurrected in Japan under a different name. Since 1977, world championships of reversi are organised regularly around the world.</p>
</section>

<section class="description rules-board">
	<div class="sep"></div>
	<h2>Basic Reversi Rules</h2>
		<img class="subtitle-image" src="reversi-rules-board-1.png">
		<p>The game starts with two black and two white stones placed on the game board. The black stones move first. Each player moves in turn, placing his stone next to enemy stone. All of the enemy stones that were between the recently placed stone and any stoned formerly placed on the board will be repainted to the player colour. If there is no valid shot to capture enemy stones, the player skips his move. The winner is the one who owns the more stones at the end of the game.</p>
</section>

<section class="description">
	<div id="functions" class="sep"></div>
	<h2>Improve Your Strategic Thinking</h2>
	<img class="subtitle-image" src="functions-icon.png">
		<p>While playing Fresh Reversi you stimulate your strategic thinking, logic, and become smarter at each new game. Bright and  stylish retina graphics as well as beautiful music will make the game experience unforgettable.</p>
		
		<div class="slideshow">
			<img src="http://pleeq.com/fresh-reversi/fresh-reversi-gallery.png">
		</div>
		
</section>
	
<section class="description">
	<div class="sep"></div>
	<h2>Not Just a Game, a War!</h2>
	<img class="subtitle-image" src="reversi-tactics-board-1.png">
		<p>The more stones on the board the harder the game. Each wrong move can lead to your defeat, you must analyse every step you make. Your strategy must be to occupy the corner positions (1) and the perimeter of board (2). If you surrender these positions to your opponent, your chances to win are getting slimmer!</p>
</section>
	
<section class="description">
	<div class="sep"></div>
	<h2>A Great Game With a Long History</h2>
		<img class="subtitle-image" src="face.png">
		<div class="image-note founders-name">— &nbsp;&nbsp;Lewis Waterman   &amp;   John W. Mollett&nbsp; &nbsp;—<br></div>
		<p>Reversi was invented in 19th century, approximately in 1883 by two english men Lewis Waterman and John W. Mollet, soon, the game became very popular in England. During it's existence the game changed and was published under different names. Modern versions of the game are based on principles that were established by it's inventors and the simplicity of the rules allow everybody to play, irrespective of age.</p>
	<div class="founded-date">· from 1883 ·</div>
</section>

<section class="columns-box">			
	<div class="sep"></div>
	<h2>Functions</h2>
	<img class="subtitle-image" src="functions-list-icon.png">
	
	<div class="coluns-row">
	<div class="column">
		<h4>Play alone or with friend</h4>
		<p>With Fresh Reversi, you can play alone versus the computer or against your friends on iPhone or iPad.</p>
	</div>
	<div class="column">
		<h4>3 levels of difficulty</h4>
		<p>You can set different difficulty levels in the settings. Advanced players will enjoy playing with the highest difficulty level.</p>
	</div>
	<div class="column">
		<h4>Black hole mode</h4>
		<p>In the "Black Hole" game mode one square on the field will be randomly switched off, which brings a level of unpredictability to the game.</p>
	</div>
	</div>
	<div class="coluns-row">
	<div class="column">
		<h4>No In-App purchases</h4>
		<p>With your initial purchase you get all functions at once. The game doesn't have any feature unlocked by in-app purchases and you will get all future updates for free.</p>
	</div>
	<div class="column">
		<h4>Statistics</h4>
		<p>For the purpose of following your progress, we created the statistics section, allowing to display the history of your performances for each difficulty level.</p>
	</div>
	<div class="column">
		<h4>Hints</h4>
		<p>Available moves are highlighted automatically, you can turn this feature off in the settings.</p>
	</div>
	</div>		
	<div class="coluns-row">
	<div class="column">
		<h4>Online Game</h4>
		<p>Play with your friends or random people.</p>
	</div>
	</div>
</section>


<section class="description" id="tuts">
	<div class="sep"></div>
	<h2>How to play reversi</h2>
	<ul>
		<li><a href="https://www.youtube.com/watch?v=Ol3Id7xYsY4" target="_blank" rel="nofollow">How to Play Othello or Reversi (video by Howcast)</a></li>
		<li><a href="https://www.youtube.com/watch?v=-wdY84rnLdI" target="_blank" rel="nofollow">How to Play Reversi in a simple steps (video)</a></li>
		
<!--
		<script>
		  // Load the IFrame Player API code asynchronously.
		  var tag = document.createElement('script');
		  tag.src = "https://www.youtube.com/player_api";
		  var firstScriptTag = document.getElementsByTagName('script')[0];
		  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		
		  // Replace the 'ytplayer' element with an <iframe> and
		  // YouTube player after the API code downloads.
		  var player;
		  function onYouTubePlayerAPIReady() {
		    player = new YT.Player('ytplayer', {
		      height: '337',
		      width: '599',
		      videoId: 'zTpvyOwG6-k'
		    });
		    player.mute();
		  }
		</script>
-->
		
		<li style="margin-top: 20px;"><iframe width="337" height="599" src="https://www.youtube.com/embed/zTpvyOwG6-k?rel=0?volume=0" frameborder="0" allowfullscreen></iframe></li>
	</ul>
</section>

<section class="description" id="download">
	<div class="sep"></div>
	<h2>Download</h2>
	<img class="subtitle-image" src="download.png">
	
		<div id="subscribe">
		<div id="subscribe-form">
		<input type="text" placeholder="Your name" id="userName">
		<input type="email" placeholder="Your email" id="userEmail">
		<input type="submit" value="Subscribe and Download" id="signUp">
		</div>
		<p id="success">You have been successfully added 😘</p>
		</div>
	
<!--
		<div>	
			<a href="https://itunes.apple.com/us/app/fresh-reversi-othello-like/id732986215?mt=8" class="app-store"></a>
		<p>For the iPhone or iPad, iOS 7 or later.</p>
		<div>
		</a>
		</div>
		
		<section id="subscribe">
		<h3>Subscribe for Updates</h3>
		<div id="subscribe-form">
			<input type="text" placeholder="Your name" id="userName">
			<input type="email" placeholder="Your email" id="userEmail">
			<input type="submit" value="Subscribe" id="signUp">
		</div>
		<p id="success">You have been successfully added 😘</p>
		</section>
-->

</section>

<!--
<section id="comments">
	<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'freshreversi';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</section>
-->

</body>
</html>

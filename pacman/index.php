<!DOCTYPE html>

<!--<html lang="en">-->
<html lang="en" manifest="cache.manifest">
<head>
	<meta charset="utf-8" />
	<title>Faster PuckLady</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="pacman-canvas.css">
	
	<!-- site icons -->
	<link rel="shortcut icon" href="img/Icon-130x130.png" />
	<link rel="apple-touch-icon" href="img/Icon-130x130.png" />

    <meta property="og:image" content="http://pacman.platzh1rsch.ch/img/Icon-130x130.png"/>

	<!-- AppsFuel verification code -->
	<meta name="appsfuel_code" content="83d3cedc1050a5c"/>
	
	<!-- Mobile Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	
	<!-- Apple Mobile Web Capability -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<!-- Script -->
	<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.hammer.min.js" type="text/javascript"></script>		
</head>

<body>

<div class="container">
<div class="main">


<!-- Display this message if Javascript is disabled -->
<noscript>
<h2>Enable Javascript!</h2>
<p>This HTML 5 app requires Javascript to run. Please check that Javascript is enabled in your browser.</p>
</noscript>

<!-- Highscore -->
<div class="content" id="highscore-content">
	<div class="button" id="back">back</div>
	<div>
		<h1>Highscore</h1>
		<p>
			<ol id="highscore-list">
				
			</ol>
		</p>
	</div>
</div>

<!-- INSTRUCTIONS -->
<div class="content" id="instructions-content">
	<div class="button" id="back">back</div>
	<div>
		<h1>Instructions</h1>
		<div class="nomobile">
			<h2>Controls</h2>
			<p>Use your arrow keys or [W,A,S,D] keys to navigate pacman.</p>
			<p>To pause / resume the game press [SPACE] or [ESC] or just click into the game area.</p>
		</div>
		<div class="mobile">
			<h2>Controls</h2>
			<p>Use swipe gestures to navigate pacman.</p>
			<p>Alternatively use the Arrow Buttons underneath the game area to navigate pacman.</p>
			<p>To pause / resume the game, touch the game area once.</p>
		</div>
	</div>
</div>

<!-- Info -->
<div class="content" id="info-content">
	<div class="button" id="back">back</div>
	<div>
		<h1>Info</h1>
		<p>Current Version: 0.84 (09.11.2014) (<a href="#" id="updateCode">get latest</a>)</p>
		<img src="img/platzh1rsch-logo.png">
		<p>Pacman Canvas is Open Source, written by <a href="http://platzh1rsch.ch">platzh1rsch</a>. You can get the code on <a target="_blank" href="https://github.com/platzhersh/pacman-canvas" target="_blank">github</a>.</p>
		<p>If you have any suggestions how to make this app better, please post your suggestion / request on <a target="_blank" href="https://platzh1rsch.uservoice.com/">uservoice</a>.</p>
		<p>
	</div>
</div>


<!-- main game content -->
<div class="content" id="game-content">

	
	<!-- main game content -->
	<div class="game wrapper">
		<div class="score">Score:</div>
		<div class="lives">Lives: </div>
		
		<div class="controlSound">
			<img src="img/audio-icon-mute.png" id="mute">
		</div>
		<!-- canvas is splitted into 18x13 fields -->
		<div id="canvas-container">
			<div id="canvas-overlay-container">
				<div id="canvas-overlay-content">
					<div id="title">Pacman Canvas</div>
					<div><p id="text">Click to Play</p></div>
				</div>
			</div>
			<canvas id="myCanvas" width="540" height="390">
			<p>Canvas not supported</p>
			</canvas>
		</div>

		<div class="controls" id="game-buttons">
		<!-- Will be moved to Instructions 
		<p class="nomobile">Use W-A-S-D keys to navigate Pac-Man</p>
		-->
		
			<!-- OLD Buttons -->
			<div>
				<span id="up" class="controlButton">&uarr;</span>
			</div>
			<div>
				<span id="left" class="controlButton">&larr;</span>
				<span id="down" class="controlButton">&darr;</span>
				<span id="right" class="controlButton">&rarr;</span>
			</div>
			
		</div>
		<!-- inGame Controls End -->
		
		<!-- Game Menu -->		
		<div class="controls" id="menu-buttons">
			<ul>
				<li class="button" id="newGame">New Game</li>
				<li class="button" id="highscore">Highscore</li>
				<li class="button" id="instructions">Instructions</li>
				<li class="button" id="info">Info</li>
			</ul>
			
		</div>
		<!-- Game Menu End -->
		
	</div>
		
	<div class="description nomobile">
		<span id="audio">
			<audio id="theme" preload="auto">
				<source src="wav/theme.wav" type="audio/wav">
				<source src="mp3/theme.mp3" type="audio/mpeg">
			</audio>
			<audio id="waka" preload="auto">
				<source src="wav/waka.wav" type="audio/wav">
				<source src="mp3/waka.mp3" type="audio/mpeg">
			</audio>
			<audio id="die" preload="auto">
				<source src="wav/die.wav" type="audio/wav">
				<source src="mp3/die.mp3" type="audio/mpeg">
			</audio>
			<audio id="powerpill" preload="auto">
				<source src="wav/powerpill.wav" type="audio/wav">
				<source src="mp3/powerpill.mp3" type="audio/mpeg">
			</audio>
		</span>
		
		
	</div>

</div>
</div>
</div>

	<script src="pacman-canvas.js" type="text/javascript"></script>


</body>
</html>

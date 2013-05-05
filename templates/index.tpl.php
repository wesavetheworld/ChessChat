<!DOCTYPE html>
<html>
	<head>
		<title>&#x265A; ChessChat</title>
		<base href="_blank" />
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo HOST ?>style/global.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo HOST ?>style/colors.css" />
		<script src="<?php echo HOST ?>js/jquery-2.0.0.min.js"></script>
		<script src="<?php echo HOST ?>js/chessboardLayout.js"></script>
		<script src="<?php echo HOST ?>js/chat.js"></script>
	</head>
	<body>
		<header id="header">
			<h1><span class="icon">&#x265A;</span>ChessChat</h1>
			<nav id="panel">
				<ul>
					<li><a href="#"><?php lang('global.menu.newgame') ?></a></li><li><a href="#"><?php lang('global.menu.settings') ?></a></li>
				</ul>
			</nav>
		</header>
		<main>
			<section id="game">
				<header>
					<h2>Phil <span class="vs">vs</span> Larissa</h2>
					<div id="clock">
						<span id="timer">3:00</span>
						<span id="playtime">0:27:49</span>
					</div><!--#clock-->
				</header>
<?php require_once("chessboard.tpl.php"); ?>
				<footer>
					<nav id="gameMenu">
						<ul>
							<li><a href="#"><?php lang('game.menu.resign') ?></a></li><li><a href="#"><?php lang('game.menu.offerdraw') ?></a></li>
						</ul>
					</nav>
				</footer>
			</section><!-- #game -->
			<aside id="chat">
				<section>
					<div id="chatLog">
						<p class="msgOwn">
							<span class="msgTime">17:13</span>
							<span class="msgAuthor">Phil</span>
							<span class="msgText">Checkmate :D</span>
						</p>
						<p class="msgOther">
							<span class="msgTime">21:13</span>
							<span class="msgAuthor">Larissa</span>
							<span class="msgText">oh noes!</span>
						</p>
						<p class="msgBot">
							<span class="msgTime">21:14</span>
							<span class="msgAuthor">Phil </span>
							<span class="msgText">(&#x2657;E3) Bishop from C2 to E3</span>
						</p>
						<p class="msgOwn">
							<span class="msgTime">21:15</span>
							<span class="msgAuthor">Phil</span>
							<span class="msgText">More text and more text and even more text and this is so much text it just HAS to break the line</span>
						</p>
						<p class="msgOther">
							<span class="msgTime">02:00</span>
							<span class="msgAuthor">Larissa</span>
							<span class="msgText">That's a lot of text</span>
						</p>
						<p class="msgOther">
							<span class="msgTime">02:56</span>
							<span class="msgAuthor">Larissa</span>
							<span class="msgText">I'll make some more text, too.</span>
						</p>
						<p class="msgBot">
							<span class="msgTime">21:14</span>
							<span class="msgAuthor">Larissa </span>
							<span class="msgText">moved Queen &#x265B; from D8 to D5</span>
						</p>
						<p class="msgOwn">
							<span class="msgTime">21:15</span>
							<span class="msgAuthor">Phil</span>
							<span class="msgText">
obligatory features<br />
- ajax chat<br />
- move via chat msg ("QB4")<br />
- server-side move validation<br />
- user system / url identification
							</span>
						</p>
						<p class="msgOwn">
							<span class="msgTime">21:15</span>
							<span class="msgAuthor">Phil</span>
							<span class="msgText">
optional features<br />
- move via drag & drop (JS)<br />
- client-side validation (JS)<br />
- saving games (MySQL)<br />
- possible moves highlight (JS)<br />
- clock
							</span>
						</p>
						<p class="msgOwn">
							<span class="msgTime">21:15</span>
							<span class="msgAuthor">Phil</span>
							<span class="msgText"><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?></span>
						</p>
						<p class="msgOwn">
							<span class="msgTime">21:15</span>
							<span class="msgAuthor">Phil</span>
							<span class="msgText">
								path_info: <?php echo $_SERVER['PATH_INFO'] ?><br />
								script_name: <?php echo $_SERVER['SCRIPT_NAME'] ?><br />
								request_uri: <?php echo $_SERVER['REQUEST_URI'] ?><br /></span>
						</p>
						<p class="msgOwn">
							<span class="msgTime">21:15</span>
							<span class="msgAuthor">Phil</span>
							<span class="msgText" style="white-space:pre;"><?php var_dump(Core::getRequest()) ?></span>
						</p>
					</div><!-- #chatLog -->
				</section>
				<form id="chatForm" action="">
					<fieldset>
						<div>
							<input 	type="text"
									name="chatText"
									id="chatText"
									autofocus="autofocus"
									autocomplete="off"
								/>
						</div>
						<input 	type="submit"
								name="submit"
								id="chatSubmit"
								value="<?php lang('chat.send') ?>"
							/>
					</fieldset>
				</form>
			</aside>
		</main>
		<footer id="footer">
			<nav id="footerMenu">
				<ul>
					<li><a href="#"><?php lang('global.menu.legalnotice') ?></a></li><li><a href="#"><?php lang('global.menu.contact') ?></a></li>
				</ul>
			</nav>
			<div id="copyright"><?php lang('site.copyrightby') ?>Phil &amp; Larissa</div>
		</footer>
		<div class="overlay">
			<div class="overlayContainer">
				<h3>Overlay Title</h3>
				<p>Some fancy overlay text<br /><br /><br /></p>
				<p>Some longer fancy overlay text<br /><br /><br /></p>
				<p>Some fancy overlay text<br /><br /><br /></p>
				<p>Some longer fancy overlay text. OMG this text is so long its incredibly long so very very very long, omg so long.<br /><br /><br /></p>
				<p>Some fancy overlay text<br /><br /><br /></p>
				<p>Some fancy overlay text<br /><br /><br /></p>
				<p>Some fancy overlay text<br /><br /><br /></p>
				<p>Some fancy overlay text<br /><br /><br /></p>
				<p>Some fancy overlay text<br /><br /><br /></p>
				<p>Some fancy overlay text<br /><br /><br /></p>
			</div>
		</div>
	</body>
</html>

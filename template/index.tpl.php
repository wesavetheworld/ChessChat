<?php $this->includeTemplate("head"); ?>

<?php $this->includeTemplate("header"); ?>

		<div id="main">
			<section style="padding-top: 10%;">
				<span id="logo" class="icon" style="font-size:55px;">&#x265A;</span>
				<h1 style="margin-top:0;">Hi!</h1>
				<p>Welcome at ChessChat, <br /> where you can play chess and chat!</p>
				<p><em style="color: #883333">This project is still under construction and will remain so for a while.</em></p>
				<style>
					#chessboard {margin: 20px;}
					ol.prison {display: none;}
					table#chessboardTable {width: 240px; height: 240px;font-size: 19px;}
					table#chessboardTable span.chesspiece {box-shadow: none;}
				</style>
				<?php $this->includeTemplate("chessboard"); ?>
			</section>
		</div><!-- #main -->
		
<?php $this->includeTemplate("footer"); ?>

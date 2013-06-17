<?php 
	$page = 'home';
	include_once('includes/header.inc.php'); 
?>
<div class="main_home">
	<div class="slideshow">
		<div class="slidesmask">
			<div class="slides">
				<article>
					<img src="data/slideshow/images/rotator1.jpg" alt="Feuilles d'automne">
					<div class="label">Titre de cette <b>diapo</b>
						<div class="sublabel">Du 13 juin au 12 juillet 2013</div>
					</div>
				</article>
				<article>
					<img src="data/slideshow/images/rotator2.jpg" alt="deux">
					<div class="label">Deuxième diapo
						<div class="sublabel">Texte en sous-titre ici</div>
					</div>
				</article>
				<article>
					<img src="data/slideshow/images/rotator3.jpg" alt="Texte alternatif de l'image">
				</article>
			</div>
		</div>
		<div class="control">
			<span class="icon-circle-blank"></span>
			<span class="icon-circle-blank"></span>
			<span class="icon-circle"></span>
		</div>
	</div>


	<p><?=$_s['home']['intro1']?></p>
	<p><?=$_s['home']['intro2']?></p>
</div>
<?php include_once 'includes/footer.inc.php'; ?>
<?php
include dirname(__FILE__) . '/inc/header.php';
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<title><?php echo TITRE_SITE; ?> - Ranger votre CSS et le rendre lisible</title>
		<meta name="viewport" content="width=680" />
		<link rel="stylesheet" href="css/main.css?201112141443" type="text/css" />
	</head>
	<body class="no-js">
	<div id="main-container">
		<h1><?php echo TITRE_SITE; ?></h1>
		<form id="main-form" action="" method="post">
			<p>
				CSSLisible va r&eacute;indenter vos blocks de code, 
				<a href="http://blog.goetter.fr/post/14503308074/ordonnez-vos-declarations-css" rel="external">ordonner vos propri&eacute;t&eacute;s</a>, 
				afin de fournir un code CSS Lisible et plus maintenable. 
				Attention, les commentaires internes aux sélecteurs sont retir&eacute;s !
			</p>
			<div class="form-block">
				<label for="clean_css">CSS &agrave; nettoyer :</label><br />
				<textarea name="clean_css" id="clean_css" rows="12" cols="80"><?php echo $CSSLisible->buffer; ?></textarea>
			</div>
			<div id="options_block">
				<div class="the_grid gri-2-1">
					<div>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/distance_selecteurs.php'; ?>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/type_indentation.php'; ?>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/type_separateur.php'; ?>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/colors_format.php'; ?>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/hex_colors_format.php'; ?>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/selecteurs_multiples_separes.php'; ?>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/supprimer_selecteurs_vides.php'; ?>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/add_header.php'; ?>
					&nbsp;</div>
					<div>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/selecteur_par_ligne.php'; ?>
						<?php include dirname(__FILE__) . '/inc/tpl/formulaire/tout_compresse.php'; ?>

					&nbsp;</div>
				</div>
			</div>
			<div class="submit-block">
				<button id="try_me" class="go_clean_css go_try_me">&#x2023; Code de démo</button>
				<span>
					<button id="options_toggle" class="go_clean_css go_options" title="Afficher les options">&rarrhk; Options</button>
					<button class="go_clean_css">Nettoyer le code &rarr;</button>
				</span>
			</div>
		</form>
	</div>
	<div id="footer">
		Source disponible sur 
		<a target="_blank" href="http://github.com/darklg/CSSLisible">Github</a>. 
		Contributeurs : 
		<a target="_blank" href="http://github.com/Darklg">Darklg</a>,
		<a target="_blank" href="http://github.com/NumEricR">NumEricR</a>.
	</div>
	<a href="http://github.com/darklg/CSSLisible"><img style="position: absolute; top: 0; right: 0; border: 0;" src="img/fork-me.png" alt="Fork me on GitHub" /></a>
	
	<?php
	// Fichier conditionnel pour charger boutons like, google analytics, etc.
	$hollow_file = realpath(dirname(__FILE__)).'/inc/hollow-file.php';
	if(file_exists($hollow_file)){
	    include $hollow_file;
	}
	?>
	
	
	<script src="js/events.js?1329773844" type="text/javascript" charset="utf-8"></script>
	
	</body>
</html>
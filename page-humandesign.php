<?php get_header(); ?>

<?php
$page_id = get_the_ID();
$contacts = get_crb_contacts();
?>

<main class="main">
	<section class="hero">
		<div class="container hero__container">
			<div class="hero__offer">
				<h1 class="hero__title section__title">
					Commencez à gagner <br>
					régulièrement de 3 à 5&nbsp;000 <br>
					euros par mois sur vos <br>
					consultations et profitez de la <br>
					vie en 2&nbsp;mois
				</h1>
				<p class="hero__desc">
					Grâce à un programme de coaching personnel <br>
					basé sur le Human Design
				</p>
				<a href="#programm" class="button button--primary hero__button-cta">Regarder le programme</a>
			</div>
			<picture class="hero__pic">
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/hero/hero.webp" type="image/webp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero/hero.png" alt="Commencez à gagner régulièrement de 3 à 5 000 euros par mois sur vos consultations et profitez de la vie en 2 mois" class="hero__img" />
			</picture>
		</div>
	</section>

	<section class="about section--minus-top">
		<div class="about__decor-left"></div>
		<div class="about__inner">
			<div class="container about__container">
				<div class="about__info">
					<h2 class="section__title about__title">Le Human Design</h2>
					<p class="about__desc section__text">
						— est un outil pour identifier les caractéristiques de la
						personnalité en peu de temps : forces, faiblesses, talents,
						capacités, manières de communiquer avec les autres, construction
						d'une entreprise et équilibre dans la vie.
					</p>
					<p class="about__desc section__text">
						J'utilise cet outil pour déterminer le point A de mes clients,
						puis je leur crée des instructions pour un développement ultérieur
						et une vie heureuse.
					</p>
					<p class="about__desc section__text">
						Si à la naissance chacun de nous recevait une telle instruction,
						alors nous serions moins susceptibles d'être dans un état de
						tension, d'insatisfaction et d'atteindre plus rapidement nos
						objectifs.
					</p>
				</div>
				<picture class="about__pic">
					<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/about/hero.webp" type="image/webp">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/hero.png" alt="" class="about__img" />
				</picture>
			</div>
		</div>
	</section>

	<section class="compare">
		<div class="container compare__container">
			<div class="compare-card">
				<div class="compare-card__inner">
					<h3 class="compare-card__title">
						Ce programme est conçu pour les coachs qui ont en ce moment :
					</h3>
					<ul class="compare-card__bullets">
						<li class="compare-card__bullet compare-card__bullet--no">
							Des revenus instables ou une course constante avec l'argent.
						</li>
						<li class="compare-card__bullet compare-card__bullet--no">
							L’impossibilité de vendre ses services ou consultations à un
							prix élevé.
						</li>
						<li class="compare-card__bullet compare-card__bullet--no">
							Manque de temps pour la famille, le travail, le repos, les
							loisirs, les voyages.
						</li>
						<li class="compare-card__bullet compare-card__bullet--no">
							Manque de plan clair, où et comment obtenir des clients qui
							achèteront.
						</li>
						<li class="compare-card__bullet compare-card__bullet--no">
							Des blocages psychologiques en raison desquels il n'y a pas de&nbsp;confiance
							en soi <br class="mobile-visible"> et en ses capacités.
						</li>
					</ul>
				</div>
			</div>
			<div class="compare-card">
				<div class="compare-card__inner">
					<h3 class="compare-card__title">
						Mais après 2 mois de travail en commun vous obtiendrez:
					</h3>
					<ul class="compare-card__bullets">
						<li class="compare-card__bullet compare-card__bullet--yes">
							Une compréhension de vous-même, vos forces, votre chemin que vous resuivrez avec plaisir.
						</li>
						<li class="compare-card__bullet compare-card__bullet--yes">
							Une gestion de votre temps efficace qui va faire avancer les choses.
						</li>
						<li class="compare-card__bullet compare-card__bullet--yes">
							Une méthode pour vous débarrasser des installations négatives, inhibitrices et stéréotypées dans votre tête.
						</li>
						<li class="compare-card__bullet compare-card__bullet--yes">
							Vous commencerez à grandir systématiquement, à vous reposer et à ne pas reculer.
						</li>
						<li class="compare-card__bullet compare-card__bullet--yes">
							Vous apprendrez à vendre <br>cher et à construire <br>un flux de clients stable.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="programm">
		<div id="programm"></div>
		<div class="container programm__container">
			<h2 class="section__title section__title--center programm__title">
				Et tout cela grâce au programme <br />
				d’accompagnement personnel
			</h2>
			<?php
			$programm = carbon_get_post_meta($page_id, 'programm');
			?>
			<div class="programm__gallery">
				<?php foreach ($programm as $key => $module) : ?>
					<div class="programm-card__wrap">
						<article class="programm-card bayan">
							<div class="programm-card__top">
								<h3 class="programm-card__title">
									<?php echo $key + 1 . '.' . $module['title']; ?>
								</h3>
								<button class="programm-card__closer"></button>
							</div>
							<div class="programm-card__bottom">
								<div class="programm-card__index">
									<h4 class="programm-card__subtitle">Plan du rendez-vous</h4>
									<ul class="programm-card__bullets">
										<?php foreach ($module['bullets'] as $bullet) : ?>
											<li class="programm-card__bullet">
												<?php echo $bullet['bullet']; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
								<div class="programm-card-result">
									<h4 class="programm-card__subtitle program-card-result__title">Résultat:</h4>
									<p class="programm-card__desc">
										<?php
										echo $module['program_results'];
										?>
									</p>
								</div>
							</div>
						</article>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="consult">
		<div class="container consult__container">
			<h2 class="section__title section__title--center consult__title">
				Quoi d'autre vous attend lors <br />
				de la consultation
			</h2>
			<div class="consult__bullets">
				<article class="consult-bullet">
					<picture class="consult-bullet__pic">
						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-1.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-1.png" alt="Possibilité de se rencontrer en ligne ou en personne" class="consult-bullet__img" />
					</picture>
					<p class="consult-bullet__desc">
						Possibilité de se rencontrer en <br>ligne ou en personne
					</p>
				</article>
				<article class="consult-bullet">
					<picture class="consult-bullet__pic">
						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-2.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-2.png" alt="Lors des premières rencontres, je créerai votre carte de personnalité et les moyens d'atteindre vos objectifs, afin de ne pas oublier qui vous êtes et ce que vous attendez vraiment de la vie." class="consult-bullet__img" />
					</picture>
					<p class="consult-bullet__desc">
						Lors des premières rencontres, je créerai votre carte de
						personnalité et les moyens d'atteindre vos objectifs, afin de ne
						pas oublier qui vous êtes et ce que vous attendez vraiment de la
						vie.
					</p>
				</article>
				<article class="consult-bullet">
					<picture class="consult-bullet__pic">
						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-3.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-3.png" alt="Confidentialité. Personne ne saura jamais que nous avons travaillé ensemble à moins que vous ne le vouliez." class="consult-bullet__img" />
					</picture>
					<p class="consult-bullet__desc">
						Confidentialité. Personne <br>
						ne saura jamais que nous <br>
						avons travaillé ensemble à <br>
						moins que vous ne le <br>
						vouliez.
					</p>
				</article>
				<article class="consult-bullet">
					<picture class="consult-bullet__pic">
						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-4.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-4.png" alt="Des enregistrements de consultations et un bilan personnel à la fin d’accompagnement pour que vous ne vous écartiez pas du chemin choisi" class="consult-bullet__img" />
					</picture>
					<p class="consult-bullet__desc">
						Des enregistrements de consultations et un bilan personnel à la
						fin d’accompagnement pour que vous ne vous écartiez pas du
						chemin choisi
					</p>
				</article>
				<article class="consult-bullet">
					<picture class="consult-bullet__pic">
						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-5.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/bullet-5.png" alt="Soutien, acceptation, aide non seulement pendant les séances, mais également pendant tout l’accompagnement" class="consult-bullet__img" />
					</picture>
					<p class="consult-bullet__desc">
						Soutien, acceptation, aide non seulement pendant les séances,
						mais également pendant tout l’accompagnement
					</p>
				</article>
			</div>
			<picutre class="consult__pic">
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/hero.webp" type="image/webp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consult/hero.png" alt="Quoi d'autre vous attend lors de la consultation" class="consult__img" />
			</picutre>
			<a href="#pricing" class="button button--primary consult__anchor">Les tarifs</a>
		</div>
		<div class="consult__divider"></div>
	</section>

	<section class="meet">
		<div class="container meet__container">
			<div class="meet__info">
				<h2 class="meet__title section__title">Et il est temps de faire connaissance</h2>
				<p class="meet__subtitle">Nedko Pazvantov</p>
				<ul class="meet__bullets">
					<li class="meet__bullet">
						Expert dans les domaines: PNL, Human design, soins énérgetique, taro, EFT , psycologie chez adulte, psyco-astrologie, les clés génétiques.
					</li>
					<li class="meet__bullet">
						L'année dernière a gagné <span class="section__desc--bold"></span>+170&nbsp;000&nbsp;€ grâce au coaching</span>
					</li>
					<li class="meet__bullet">
						Mes clients ont gagné <span class="section__desc--bold"></span>+3 millions d'euros l'année dernière</span>
					</li>
					<li class="meet__bullet">
						Réalisation de plus de <span class="section__desc--bold">10&nbsp;000 consultations en 4 ans</span>
					</li>
					<li class="meet__bullet">
						J'aime voyager, écrire de la musique, chanter <br>et aider les gens
					</li>
				</ul>
			</div>
			<picutre class="meet__pic">
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/meet/hero.webp" type="image/webp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meet/hero.png" alt="Et il est temps de faire connaissance" class="meet__img">
			</picutre>
		</div>
	</section>

	<section class="reviews">
		<div class="container reviews__container">
			<h2 class="section__title reviews__title section__title--center">Résultats de mes clients</h2>
			<?php
			$reviews = carbon_get_post_meta($page_id, 'reviews');
			?>
			<div class="splide reviews-slider">
				<div class="reviews-slider__track splide__track">
					<ul class="splide__list">
						<?php foreach ($reviews as $key => $review) : ?>
							<li class="splide__slide reviews-slider__slide">
								<picture class="reviews-slider__pic">
									<img src="<?php echo $review['review']; ?>" alt="Résultats de mes clients" class="reviews-slider__img">
								</picture>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="reviews-slider-progress">
				<div class="reviews-slider-progress-bar"></div>
			</div>
		</div>
	</section>

	<div id="pricing"></div>
	<section class="pricing">
		<?php
		$tariffs = carbon_get_post_meta($page_id, 'tariffs');
		?>
		<div class="pricing__divider-top"></div>
		<div class="pricing-decor__left"></div>
		<div class="pricing-decor__top-right"></div>
		<div class="pricing-decor__bottom-right"></div>
		<div class="container pricing__container">
			<h2 class="section__title section__title--center pricing__title ">
				Les tarifs
			</h2>
			<div class="pricing__gallery">
				<?php foreach ($tariffs as $key => $tariff) : ?>
					<div class="pricing-card__wrap">
						<article class="pricing-card">
							<h3 class="pricing-card__title"><?php echo $tariff['name']; ?></h3>
							<ul class="pricing-card__bullets">
								<?php foreach ($tariff['bullets'] as $bullet) : ?>
									<li class="pricing-card__bullet <?php echo $bullet['is_negative'] ? 'pricing-card__bullet--no' : '' ?>">
										<?php echo $bullet['bullet']; ?>
									</li>
								<?php endforeach; ?>
							</ul>
							<div class="pricing-card__bottom">
								<p class="pricing-card__duration">
									<?php echo $tariff['duration']; ?>
								</p>
								<p class="pricing-card__price">
									<span class="pricing-card__price--special"><?php echo $tariff['cost_special']; ?> €</span>
									<span class="pricing-card__price--regular"><?php echo $tariff['cost']; ?> €</span>
								</p>
								<button class="button button--primary pricing-card__button pricing-card__button--<?php echo $key; ?>">Les tarifs</button>
								<p class="pricing-card__avalaible">
									<?php echo $tariff['avalaible']; ?>
								</p>
							</div>
						</article>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="warranty">
		<div class="container warranty__container">
			<h2 class="section__title section__title--center warranty__title">
				Pour lever les doutes me concernant <br>
				(sur mon travail), voici mes garanties:
			</h2>
			<div class="warranty__gallery">
				<article class="warranty-card">
					<picture class="warranty-card__pic">
						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/warranty/bullet-1.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/warranty/bullet-1.png" alt="Vous obtiendrez au moins 3 clients ou vous serez remboursé" class="warranty-card__img">
					</picture>
					<p class="warranty-card__desc">Vous obtiendrez au moins 3 <br>clients ou vous serez remboursé</p>
				</article>
				<article class="warranty-card">
					<picture class="warranty-card__pic">
						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/warranty/bullet-2.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/warranty/bullet-2.png" alt="Vous augmenterez le chèque de 30% ou vous serez remboursé" class="warranty-card__img">
					</picture>
					<p class="warranty-card__desc">Vous augmenterez le chèque de 30% ou vous serez remboursé</p>
				</article>
			</div>
			<div class="warranty-offer__wrap">
				<div class="warranty-offer">
					<p class="warranty-offer__desc">
						Et je donne la possibilité de payer notre travail commun en plusieurs fois.
					</p>
					<p class="warranty-offer__desc">
						Alors arrêtez de réfléchir - il est temps de changer votre vie !
					</p>
					<button class="button button--primary warranty__button-start">Je me lance</button>
				</div>
			</div>
		</div>

	</section>
</main>
<?php get_footer(); ?>

<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package le-human-design
 */

?>

<?php $contacts = get_crb_contacts(); ?>

<footer class="footer">
	<div class="container footer__container">
		<a href="tel:<?php echo $contacts['phone_raw']; ?>" class="footer__phone phone"><?php echo $contacts['phone']; ?></a>
		<a href="<?php echo $contacts['privacy']; ?>" target="_blank" class="footer__desc section__link">Politique de confidentialit√©</p>
			<div class="socials footer__socials">
				<?php if ($contacts['instagram']) : ?>
					<a href="<?php echo $contacts['instagram']; ?>" class="socials__link">
						<svg class="socials__icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_103_1240)">
								<path d="M15.0059 13.4453C15.0059 14.7667 13.9347 15.8379 12.6133 15.8379C11.2919 15.8379 10.2207 14.7667 10.2207 13.4453C10.2207 12.1239 11.2919 11.0527 12.6133 11.0527C13.9347 11.0527 15.0059 12.1239 15.0059 13.4453Z" fill="white" />
								<path d="M18.2085 9.21174C18.0935 8.90008 17.91 8.61798 17.6715 8.38643C17.44 8.14801 17.1581 7.96452 16.8462 7.84951C16.5933 7.75128 16.2134 7.63436 15.5136 7.60251C14.7565 7.56799 14.5296 7.56055 12.6131 7.56055C10.6964 7.56055 10.4694 7.56779 9.71256 7.60232C9.01276 7.63436 8.63262 7.75128 8.3799 7.84951C8.06805 7.96452 7.78595 8.14801 7.55459 8.38643C7.31617 8.61798 7.13268 8.89989 7.01748 9.21174C6.91925 9.46465 6.80233 9.84479 6.77048 10.5446C6.73595 11.3014 6.72852 11.5284 6.72852 13.4451C6.72852 15.3616 6.73595 15.5886 6.77048 16.3456C6.80233 17.0454 6.91925 17.4254 7.01748 17.6783C7.13268 17.9901 7.31598 18.272 7.5544 18.5036C7.78595 18.742 8.06786 18.9255 8.37971 19.0405C8.63262 19.1389 9.01276 19.2558 9.71256 19.2877C10.4694 19.3222 10.6962 19.3295 12.6129 19.3295C14.5298 19.3295 14.7567 19.3222 15.5134 19.2877C16.2132 19.2558 16.5933 19.1389 16.8462 19.0405C17.4722 18.799 17.967 18.3043 18.2085 17.6783C18.3067 17.4254 18.4236 17.0454 18.4557 16.3456C18.4902 15.5886 18.4974 15.3616 18.4974 13.4451C18.4974 11.5284 18.4902 11.3014 18.4557 10.5446C18.4238 9.84479 18.3069 9.46465 18.2085 9.21174ZM12.6131 17.1307C10.5774 17.1307 8.92712 15.4806 8.92712 13.4449C8.92712 11.4092 10.5774 9.75915 12.6131 9.75915C14.6486 9.75915 16.2988 11.4092 16.2988 13.4449C16.2988 15.4806 14.6486 17.1307 12.6131 17.1307ZM16.4445 10.4748C15.9689 10.4748 15.5832 10.0891 15.5832 9.61343C15.5832 9.13773 15.9689 8.75207 16.4445 8.75207C16.9202 8.75207 17.3059 9.13773 17.3059 9.61343C17.3057 10.0891 16.9202 10.4748 16.4445 10.4748Z" fill="white" />
								<path d="M12.6133 0.945312C5.71078 0.945312 0.113281 6.54281 0.113281 13.4453C0.113281 20.3478 5.71078 25.9453 12.6133 25.9453C19.5158 25.9453 25.1133 20.3478 25.1133 13.4453C25.1133 6.54281 19.5158 0.945312 12.6133 0.945312ZM19.7477 16.4046C19.713 17.1686 19.5915 17.6903 19.4141 18.1469C19.0412 19.1111 18.2791 19.8733 17.3149 20.2462C16.8585 20.4235 16.3366 20.5448 15.5727 20.5798C14.8073 20.6147 14.5628 20.623 12.6135 20.623C10.664 20.623 10.4196 20.6147 9.65403 20.5798C8.89014 20.5448 8.36829 20.4235 7.91186 20.2462C7.43273 20.0659 6.999 19.7834 6.64042 19.4182C6.27535 19.0598 5.99287 18.6259 5.81263 18.1469C5.63525 17.6905 5.51375 17.1686 5.47903 16.4048C5.44375 15.6391 5.43555 15.3946 5.43555 13.4453C5.43555 11.496 5.44375 11.2515 5.47884 10.4861C5.51356 9.72198 5.63486 9.20032 5.81225 8.7437C5.99249 8.26476 6.27516 7.83084 6.64042 7.47245C6.99881 7.10719 7.43273 6.82471 7.91167 6.64447C8.36829 6.46709 8.88995 6.34578 9.65403 6.31087C10.4194 6.27597 10.664 6.26758 12.6133 6.26758C14.5626 6.26758 14.8071 6.27597 15.5725 6.31107C16.3366 6.34578 16.8583 6.46709 17.3149 6.64428C17.7938 6.82452 18.2278 7.10719 18.5863 7.47245C18.9514 7.83103 19.2341 8.26476 19.4141 8.7437C19.5917 9.20032 19.713 9.72198 19.7479 10.4861C19.7828 11.2515 19.791 11.496 19.791 13.4453C19.791 15.3946 19.7828 15.6391 19.7477 16.4046Z" fill="white" />
							</g>
							<defs>
								<clipPath id="clip0_103_1240">
									<rect width="25" height="25" fill="white" transform="translate(0.113281 0.945312)" />
								</clipPath>
							</defs>
						</svg>
					</a>
				<?php endif; ?>
				<?php if ($contacts['facebook']) : ?>
					<a href="<?php echo $contacts['facebook']; ?>" class="socials__link">
						<svg calss="socials__icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_103_1244)">
								<path d="M25.1133 13.4453C25.1133 6.54102 19.5176 0.945312 12.6133 0.945312C5.70898 0.945312 0.113281 6.54102 0.113281 13.4453C0.113281 20.3496 5.70898 25.9453 12.6133 25.9453C12.6865 25.9453 12.7598 25.9453 12.833 25.9404V16.2139H10.1475V13.084H12.833V10.7793C12.833 8.1084 14.4639 6.65332 16.8467 6.65332C17.9893 6.65332 18.9707 6.73633 19.2539 6.77539V9.56836H17.6133C16.3193 9.56836 16.0654 10.1836 16.0654 11.0869V13.0791H19.166L18.7607 16.209H16.0654V25.4619C21.29 23.9629 25.1133 19.1533 25.1133 13.4453Z" fill="white" />
							</g>
							<defs>
								<clipPath id="clip0_103_1244">
									<rect width="25" height="25" fill="white" transform="translate(0.113281 0.945312)" />
								</clipPath>
							</defs>
						</svg>
					</a>
				<?php endif; ?>
				<?php if ($contacts['youtube']) : ?>
					<a href="<?php echo $contacts['youtube']; ?>" class="socials__link">
						<svg class="socials__iocn" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_103_1246)">
								<path d="M11.0566 15.7872L15.1227 13.4454L11.0566 11.1035V15.7872Z" fill="white" />
								<path d="M12.6133 0.945312C5.71078 0.945312 0.113281 6.54281 0.113281 13.4453C0.113281 20.3478 5.71078 25.9453 12.6133 25.9453C19.5158 25.9453 25.1133 20.3478 25.1133 13.4453C25.1133 6.54281 19.5158 0.945312 12.6133 0.945312ZM20.4239 13.4581C20.4239 13.4581 20.4239 15.9931 20.1023 17.2156C19.9221 17.8847 19.3945 18.4122 18.7254 18.5923C17.503 18.9141 12.6133 18.9141 12.6133 18.9141C12.6133 18.9141 7.73638 18.9141 6.50118 18.5795C5.83208 18.3995 5.30451 17.8717 5.12427 17.2026C4.8025 15.9931 4.8025 13.4453 4.8025 13.4453C4.8025 13.4453 4.8025 10.9104 5.12427 9.68803C5.30432 9.01893 5.84486 8.47839 6.50118 8.29833C7.7236 7.97656 12.6133 7.97656 12.6133 7.97656C12.6133 7.97656 17.503 7.97656 18.7254 8.31111C19.3945 8.49117 19.9221 9.01893 20.1023 9.68803C20.4368 10.9104 20.4239 13.4581 20.4239 13.4581Z" fill="white" />
							</g>
							<defs>
								<clipPath id="clip0_103_1246">
									<rect width="25" height="25" fill="white" transform="translate(0.113281 0.945312)" />
								</clipPath>
							</defs>
						</svg>
					</a>
				<?php endif; ?>
			</div>
	</div>
</footer>

<div class="popups">
	<form class="form pop__callback form__callback">
		<h3 class="pop__title">Remplissez le formulaire</h3>
		<p class="pop__subtitle">Et obtenez une consultation</p>
		<input hidden name="formname" type="text" value="Remplissez le formulaire ‚ÄĒ Et obtenez une consultation">
		<div class="input__wrap input__wrap--name">
			<input class="input input--name" name="user_name" type="text" placeholder="Nom - Prenom">
		</div>
		<div class="input__wrap input__wrap--tel">
			<input class="input input--phone" name="user_tel" type="tel" placeholder="Numero de t√®l√®phone" inputmode="tel">
		</div>
		<button class="button button--primary pop__callback-button">Envoyer</button>
		<p class="form__privacy">En soumettant le formulaire, vous acceptez la politique de confidentialit√©</p>
	</form>
	<form class="form pop__callback form__warranty">
		<h3 class="pop__title">Acheter en plusieurs fois</h3>
		<input hidden name="formname" type="text" value="Pour lever les doutes me concernant (sur mon travail), voici mes garanties: ">
		<div class="input__wrap input__wrap--name">
			<input class="input input--name" name="user_name" type="text" placeholder="Nom - Prenom">
		</div>
		<div class="input__wrap input__wrap--tel">
			<input class="input input--phone" name="user_tel" type="tel" placeholder="Numero de t√®l√®phone" inputmode="tel">
		</div>
		<button class="button button--primary pop__callback-button">Envoyer</button>
		<p class="form__privacy">En soumettant le formulaire, vous acceptez la politique de confidentialit√©</p>
	</form>
	<div class="pop-thanks">
		<p class="pop-thanks__title">–°–Ņ–į—Ā–ł–Ī–ĺ, –≤–į—ą–į –∑–į—Ź–≤–ļ–į –ĺ—ā–Ņ—Ä–į–≤–Ľ–Ķ–Ĺ–į</p>
		<p class="pop-thanks__desc">–ú—č –Ņ–Ķ—Ä–Ķ–∑–≤–ĺ–Ĺ–ł–ľ –≤–į–ľ –≤ –Ī–Ľ–ł–∂–į–Ļ—ą–Ķ–Ķ –≤—Ä–Ķ–ľ—Ź</p>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>

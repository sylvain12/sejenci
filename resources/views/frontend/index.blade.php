

@extends("frontend.layout.master")

@section('content')
	<header class="header">

		<nav class="nav">
			<div class="nav__brand-box">
				<img src="https://www.sejen.org/wp-content/uploads/2019/05/sejen-foundation-footer-logo.jpg" alt="">
			</div>

			<ul class="nav__menu">
				<li class="nav__item">
					<a href="" class="nav__link">Acceuil</a>
				</li>
				<li class="nav__item">
					<a href="#mission" class="nav__link">Mission</a>
				</li>
				<li class="nav__item">
					<a href="#bourses" class="nav__link">Bourses</a>
				</li>
				<li class="nav__item">
					<a href="#footer" class="nav__link">Contact</a>
				</li>
			</ul>
		</nav>


		<div class="hero">
			<h1 class="main-title">Réduire la pauvreté par l’éducation</h1>
			<p><span class="text-light">SEJEN CI</span> investit dans le capital humain et les communautés avec lesquelles elle interagit par des dons de bienfaisance et du bénévolat. SEJEN CI fait don de 5% de ses bénéfices avant impôt à la Fondation SEJEN et participe fièrement à l’Initiative collaborative de données MCC / PEPFAR.</p>
		</div>
		
	</header>

	<section id="mission" class="section-mission">
		<h1 class="title">Mission et objectif</h1>
		<p class="paragraph">Nous pensons que tous les hommes, singulièrement les personnes vulnérables et les démunies ont des droits égaux dans le partage des ressources économiques, ainsi que l’accès aux services de base, tels que ceux liés à l’éradication du VIH/Sida d’ici 2030.
		Pour ce faire, la Fondation SEJEN offre des bourses d’études à diverses organisations afin de susciter la culture des données et favoriser l’éducation technologique, gage d’une main-d’œuvre solide pour l’avenir. La Fondation SEJEN encourage l’adoption et le renforcement de politiques saines et d’une législation applicable pour faire progresser l’égalité des sexes ainsi que l’autonomisation des femmes et des filles.

		Notre mission est d’accroître l’accès à une formation de qualité à la culture des données dans toutes nos communautés.</p>
	</section>

	<section id="bourses" class="section-eligi">

		<h1 class="title">Éligibilité</h1>
		

		<div class="section-content">
			<div class="section-eligi-content-image" style="margin-right: 2rem">
				<img src="{{ asset('images/eligible.jpg') }}" alt="Image Eligiilité">
			</div>
			<p style="margin-right: 0rem">La Fondation SEJEN octroie des bourses d’études à des organisations exonérées d’impôt et bénéficiant d’un soutien public au titre de la Section n ° 60-315 du 21 septembre 1960 du code de la législation ivoirienne à but non lucratif. Aucune contribution ne sera versée à des particuliers, des prêts ou des investissements, des organisations politiques ou de lobbying, des organisations religieuses / sectaires / confessionnelles, à l’exception des cas où les bourses d’études doivent être utilisées dans l’intérêt direct de la communauté entière.</p>

		</div>

	</section>

	<section class="section-bene">
		<h1 class="title">Bénévolat</h1>

		<div class="section-content">
			<p>La Fondation SEJEN offre à ses employés et à leurs familles la possibilité de faire du bénévolat et de se joindre à nous, ainsi qu’à nos partenaires locaux sans but lucratif, afin de travailler à bâtir ensemble des communautés saines et sûres. Nous croyons qu’en travaillant ensemble, nous pouvons créer des changements positifs dans notre communauté.</p>
			<div class="section-eligi-content-image">
				<img src="{{ asset('images/benevole.jpg') }}" alt="Image Bénévolat">
			</div>
		</div>
	</section>


	<section id="footer" class="footer">
		<div class="info">
			<div class="footer__info-box">
				<img src="https://www.sejen.org/wp-content/uploads/2019/05/sejen-foundation-footer-logo.jpg" alt="">
			</div>
		</div>

		<div class="contact">
			<h2>Nos Contact</h2>
			<p>contact@sejen.ci</p>
			<p>(+225) 54 57 55 55</p>
		</div>

		<div class="disclamer">
			<h2>Disclaimer</h2>
			<p>This website was made possible through a grant given by the people of the United States to SEJEN. Through PEPFAR and the Millennium Challenge Corporation. Information provided on this website is not official U.S. Government information and does not represent the views or positions of the U.S. Government. The information contained within the site is periodically updated, but SEJEN provides no guarantee that the information provided on this website is correct, complete, and up-to-date and cannot be held liable for its content.</p>
		</div>
	</section>
@stop
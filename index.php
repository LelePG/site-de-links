<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="lista de links pessoais" />
		<script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2250%22 fill=%22%23ffffff%22></rect><text x=%2250%%22 y=%2250%%22 dominant-baseline=%22central%22 text-anchor=%22middle%22 font-size=%2255%22>👩‍💻</text></svg>" />
		<title>Leticia - Links</title>
	</head>

	<?php //Definição da classe e dos links
	
	class LinkSocial{
		public $texto;
		public $imagem;
		public $url;
			function __construct(String $texto,String $imagem, String $url ){
				$this->texto = $texto;
				$this->imagem = $imagem;
				$this->url = $url;
			}
		}

		$listaDeLinks= [
			new LinkSocial("Conheça meus projetos", "github.png", "https://github.com/LelePG"),
			new LinkSocial("Veja o que ando produzindo por ai", "polywork.png", "https://www.polywork.com/lelepg"),
			new LinkSocial("Me encontre no LinkedIn", "linkedin.png", "https://www.linkedin.com/in/lelepg/ "),
			new LinkSocial("Ouça o Feministech Podcast", "headset.png", "https://anchor.fm/feministech"),
			new LinkSocial("Leia meus artigos", "dev.png", "https://dev.to/lelepg"),
			new LinkSocial("Assista meus vídeos", "youtube.png", "https://www.youtube.com/channel/UCSTtVZeXrueBBRorTKDSAbQ/videos"),
			new LinkSocial("Veja meu currículo lattes", "hat.png", " http://lattes.cnpq.br/0232535929212960"),
		];
	?>

	<body
		class="bg-gradient-to-r from-zinc-600 to-stone-800 flex flex-col justify-center items-center h-screen w-screen"
	>
		<main class="w-3/5 lg:w-1/3">
			<header
				class="w-full flex flex-col justify-center items-center text-center mb-3"
			>
				<img src="./imagens/perfil.png" alt="Foto de perfil" />
				<h1 class="text-2xl font-bold text-slate-50 mt-3">
					Letícia Pegoraro Garcez
				</h1>
			</header>
			<section id ="lista-links" class="flex flex-col justify-center items-center text-center">
				<ul class="w-full text-center font-base m-0">
					<?php					
						foreach($listaDeLinks as $link){
							echo "<li class='p-3 bg-slate-300 rounded-3xl mt-2 hover:bg-slate-100'>
							<a href='{$link->url}' target='_blank' rel='noopener' class = 'flex justify-center items-center gap-4'> 
							<img src = imagens/logos/{$link->imagem} /> 
							{$link->texto}
							</a>
						</li>";
						}
					?>
				</ul>
			</section>
		</main>
	</body>
</html>

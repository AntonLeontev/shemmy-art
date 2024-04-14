<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Роспись одежды на заказ | Shemmy Art</title>
	<meta name="description" content="Кастомайзинг одежды и обуви на заказ в Москве и с доставкой по России">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen font-sans antialiased text-white font-body">
    <div class="flex items-center justify-center w-full h-screen bg-center bg-cover bg-home">
        <div class="p-8 rounded-lg bg-[#00000045]">
			<h1 class="mb-16 text-5xl text-center">Кастомайзинг одежды и обуви</h1>
			<div class="mb-8 text-4xl text-center">Надежда Шемякина</div>
			<div class="mb-24 text-2xl text-center">@Shemmy.art</div>
			<div class="flex gap-6 justify-evenly">
				<a href="https://www.instagram.com/shemmy.art?igsh=MW9wandjOG5lcXVmNQ==">
					<img src="{{ Vite::asset('resources/images/instagram.svg') }}" alt="Лого Instagram" class="w-24 h-24">
				</a>
				<a href="https://t.me/shemmyart_custom">
					<img src="{{ Vite::asset('resources/images/telegram.svg') }}" alt="Лого Instagram" class="w-24 h-24">
				</a>
				<a href="https://vk.com/shemmy_art">
					<img src="{{ Vite::asset('resources/images/vkontakte.svg') }}" alt="Лого Instagram" class="w-24 h-24">
				</a>
			</div>
		</div>
    </div>
</body>

</html>

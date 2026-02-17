<?php
$itens = [
    ['href' => 'https://x.com/frosttedev', 'src' => '/img/twitter.png', 'alt' => 'Twitter Logo'],
    ['href' => 'https://www.facebook.com/ramom13', 'src' => '/img/Facebook.png', 'alt' => 'Facebook Logo'],
    ['href' => 'https://www.linkedin.com/in/ramom-r-martins-97ba14211/', 'src' => '/img/Linkedin.png', 'alt' => 'Linkedin Logo'],
    ['href' => 'https://www.instagram.com/ramom.rm/', 'src' => '/img/instagram.png', 'alt' => 'Instagram Logo'],
];
?>

<section class="flex gap-x-3">

    <!-- Título e Descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Ramom.</h1>

        <p class="text-xl leading-6 mt-6">
            Sou um desenvolvedor em formação, movido pela curiosidade e pelo aprendizado contínuo de novas ferramentas e tecnologias. 
            Estou sempre em busca de desafios que me permitam evoluir tecnicamente e pessoalmente, além de contribuir de forma positiva com o time, somando com dedicação, colaboração e vontade de crescer junto com a equipe.
        </p>

        <ul class="flex gap-x-3 mt-3">

            <?php foreach ($itens as $item) : ?>

                <li>
                    <a href="<?= $item['href'] ?>" target="_blank">

                        <img class="h-8 hover:animate-bounce" src="<?=$item['src']?>" alt="<?=$item['alt']?>" />

                    </a>

                </li>

            <?php endforeach; ?>

        </ul>
    </div>

    <!-- Imagem -->
    <div class="w-1/3 flex items-center justify-center">

        <div>

            <img class="h-52" src="img/Avatar.png" alt="Foto Ramom Ribeiro Martins" />
            
        </div>

    </div>

</section>
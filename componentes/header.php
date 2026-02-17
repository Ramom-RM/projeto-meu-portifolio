<?php

    $itens = [

        ['href' => '#projetos', 'texto' => 'Projetos'],
        ['href' => 'https://github.com/Ramom-RM', 'texto' => 'Github'],
        ['href' => 'https://www.linkedin.com/in/ramom-r-martins-97ba14211/', 'texto' => 'LinkdIn'],
        ['href' => 'https://x.com/frosttedev', 'texto' => 'Twitter'],

    ];

?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">

    <!-- Logo -->
    <div class="font-bold text-xl text-cyan-600">🐧 Meu portfólio...</div>

    <!-- Links -->
    <div>
        <ul class="flex gap-x-3 font-medium text-gray-200">
            <?php foreach ($itens as $item): ?>
                <li><a href="<?= $item['href']?>" class="hover:underline"><?= $item['texto'] ?></a></li>

            <?php endforeach; ?>


        </ul>
    </div>

</header>
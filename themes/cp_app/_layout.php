<?= helper('page') ?>
<!DOCTYPE html>
<html lang="<?= service('request')
    ->getLocale() ?>">

<head>
    <meta charset="UTF-8"/>
    <title><?= $this->renderSection('title') ?></title>
    <meta name="description" content="Castopod is an open-source hosting platform made for podcasters who want engage and interact with their audience."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />

    <?= service('vite')
        ->asset('styles/index.css', 'css') ?>
    <?= service('vite')
        ->asset('js/app.ts', 'js') ?>
    <?= service('vite')
        ->asset('js/audio-player.ts', 'js') ?>
</head>

<body class="flex flex-col min-h-screen mx-auto bg-pine-50">
    <?php if (service('authentication')->check()): ?>
        <?= $this->include('_admin_navbar') ?>
    <?php endif; ?>

    <header class="py-8 text-white border-b bg-pine-800">
        <div class="container flex flex-col items-start px-2 py-4 mx-auto">
            <a href="<?= route_to('home') ?>"
            class="inline-flex items-center mb-2 focus:ring-castopod"><?= icon(
            'arrow-left',
            'mr-2',
        ) . lang('Page.back_to_home') ?></a>
            <h1 class="text-3xl font-bold font-display"><?= isset($page)
    ? $page->title
    : 'Castopod' ?></h1>
        </div>
    </header>
    <main class="container flex-1 px-4 py-10 mx-auto">
        <?= $this->renderSection('content') ?>
    </main>
    <footer class="container flex justify-between px-2 py-4 mx-auto text-sm text-right border-t">
        <?= render_page_links() ?>
        <small><?= lang('Common.powered_by', [
            'castopod' =>
                '<a class="underline hover:no-underline focus:ring-castopod" href="https://castopod.org/" target="_blank" rel="noreferrer noopener">Castopod</a>',
        ]) ?></small>
    </footer>
</body>

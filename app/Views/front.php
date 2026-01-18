<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Monitoring App — Verdin Dynamics</title>
    <meta name="description" content="Monitor your servers in real time with live CPU, RAM, disk, network, and uptime stats. Alerts, history, and a clean dashboard by Verdin Dynamics.">
    <meta name="keywords" content="server monitoring, infrastructure monitoring, uptime, performance metrics, CPU, RAM, disk, network, alerts, dashboard, DevOps, IT operations">
    <meta name="author" content="Verdin Dynamics">

    <link rel="stylesheet" href="<?= base_url('css/tailwind.css') ?>?v=<?=MONITORING_VERSION?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>?v=<?=MONITORING_VERSION?>">
    <script src="<?= base_url('js/monitoring-dist.js') ?>?v=<?=MONITORING_VERSION?>" defer></script>

    <link rel="icon" type="image/svg+xml" href="<?=base_url('gfx/favicon/favicon.svg')?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('gfx/favicon/favicon-32.png')?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('gfx/favicon/apple-touch-icon.png')?>">
    <link rel="icon" href="<?=base_url('gfx/favicon/favicon.ico')?>">

</head>

<body class="min-h-screen flex flex-col bg-glow">
    <header>
        <?= $this->include('nav') ?>
        <?= $this->include('media_group') ?>
    </header>

    <main class="flex-1">
        <?= $this->include('main') ?>
    </main>

    <footer>
        <?= $this->include('footer') ?>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/gaya.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>cekucek.com</h1>
                <h3>Membuat template sederhana codeigniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?= base_url('kamu') ?>">Home</a></li>
                    <li><a href="<?= base_url('kamu/tentang') ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
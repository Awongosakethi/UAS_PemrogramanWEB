<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
    <link rel="shortcut icon" href="<?= base_url('/RT.png');?>">
</head>
<body>
    <div id="container">
    <header>
        <img src="<?= base_url('/RT.png');?>" title="RT Logo" alt="RT Logo" width="75"
        style="float: left; margin-right:10px;">
        <h1>Kas Warga RT 06 RW 09</h1>
    </header>
    <navbar>
        <a href="<?= base_url('/warga');?>" class="active">Dashboard</a>
        <a href="<?= base_url('/iuran');?>">Kas Warga</a>
        <a href="<?= base_url('/kas');?>">Laporan</a>
        <a href="<?= base_url('/user/login');?>">Admin</a>
    </navbar>
    <section id="wrapper">
        <section id="main">

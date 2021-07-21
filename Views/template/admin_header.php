<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/adminstyle.css');?>">
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
        <a href="<?= base_url('/admin/warga');?>"class="active">Data Warga</a>
        <a href="<?= base_url('/admin/iuran');?>">Kas Warga</a>
        <a href="<?= base_url('/admin/kas');?>">Laporan</a>
        <a onclick="return confirm('Yakin ingin logout?');"href="<?= base_url('/warga');?>">Logout</a>
    </navbar>
    <section id="wrapper">
        <section id="main">

<?php
require_once __DIR__ . "/../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Solo Leveling inspired personal portfolio">
    <title><?= htmlspecialchars($site["name"]) ?> | Shadow Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="particles" aria-hidden="true"></div>

    <header class="navbar">
        <a class="brand" href="#home">
            <span class="brand-mark">影</span>
            <span>SHADOW<span class="accent">PORTFOLIO</span></span>
        </a>

        <button class="menu-toggle" aria-label="Toggle menu">☰</button>

        <nav id="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#projects">Projects</a>
            <a href="#skills">Tech Stack</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>

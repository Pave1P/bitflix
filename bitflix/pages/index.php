<?php
require_once '../bootstrap.php';

$currentPage = 'home';
$genreName = $_GET['genre'] ?? null;
$search = $_GET['q'] ?? null;

$movies = filterMovies(getAllMovies(), $genreName, $search);
$title = $genreName ?: 'Каталог фильмов';

$data = ['movies' => $movies, 'search' => $search];
$contentTemplate = 'main';

include '../templates/layout.php';
<?php
require_once '../bootstrap.php';

$id = $_GET['id'] ?? null;
$movie = $id ? getMovieById((int)$id) : null;

$currentPage = 'detail';
$title = $movie ? $movie['title'] . ' (' . $movie['year'] . ')' : 'Фильм не найден';

$data = ['movie' => $movie];
$contentTemplate = 'detail';

include '../templates/layout.php';
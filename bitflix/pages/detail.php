<?php
require_once __DIR__ . '/../bootstrap.php';

$id = $_GET['id'] ?? null;
$movie = $id ? getMovieById((int)$id) : null;

$currentPage = 'detail';
$title = $movie ? $movie['title'] . ' (' . $movie['year'] . ')' : 'Фильм не найден';

$data = ['movie' => $movie];
$contentTemplate = 'detail';

include __DIR__ . '/../templates/layout.php';

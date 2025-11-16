<?php

function getAllGenres(): array {
	static $genres = null;
	if ($genres === null) {
		$genres = include __DIR__ . '/../data/genres.php';
	}
	return $genres;
}

function getGenreKey(string $name): ?string {
	$genres = getAllGenres();
	return array_search($name, $genres) ?: null;
}

function getGenreName(string $name): string {
	$genres = getAllGenres();
	return $genres[$name] ?? $name;
}
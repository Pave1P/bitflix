<?php
function getAllMovies(): array {
	static $movies = null;
	if ($movies === null) {
		$raw = include __DIR__ . '/../data/movies.php';
		$movies = array_map('normalizeMovie', $raw);
	}
	return $movies;
}

function normalizeMovie(array $movie): array {
	return [
		'id'               => $movie['id'],
		'title'            => $movie['title'],
		'original_title'   => $movie['original-title'] ?? '',
		'year'             => $movie['release-date'] ?? 0,
		'director'         => $movie['director'],
		'actors'           => $movie['cast'] ?? [],
		'genres'           => $movie['genres'] ?? [],
		'rating'           => $movie['rating'],
		'duration'         => $movie['duration'] . ' мин.',
		'description'      => $movie['description'],
		'age_restriction'  => $movie['age-restriction'] ?? null
	];
}

function getMovieById(int $id): ?array {
	$movies = getAllMovies();
	foreach ($movies as $movie) {
		if ($movie['id'] === $id) {
			return $movie;
		}
	}
	return null;
}

function filterMovies(array $movies, ?string $genreName = null, ?string $search = null): array {
	return array_filter($movies, function ($movie) use ($genreName, $search) {
		if ($genreName !== null && !in_array($genreName, $movie['genres'])) {
			return false;
		}
		if ($search !== null) {
			$search = mb_strtolower(trim($search));
			$title = mb_strtolower($movie['title']);
			$original = mb_strtolower($movie['original_title']);
			if (mb_strpos($title, $search) === false && mb_strpos($original, $search) === false) {
				return false;
			}
		}
		return true;
	});
}

function getRatingBars(float $rating): int {
	return (int) floor($rating / 2);
}
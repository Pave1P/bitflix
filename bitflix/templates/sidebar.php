<aside class="nav-panel">
	<div class="panel-logo"></div>
	<nav class="panel-nav">
		<a href="<?= BASE_URL ?>pages/index.php" class="nav-item <?= $currentPage == 'home' ? '--active' : '' ?>">Главная</a>
		<?php $genres = getAllGenres(); ?>
		<?php foreach ($genres as $key => $name): ?>
			<a href="<?= BASE_URL ?>pages/index.php?genre=<?= urlencode($name) ?>"
			   class="nav-item <?= ($_GET['genre'] ?? '') === $name ? '--active' : '' ?>">
				<?= htmlspecialchars($name) ?>
			</a>
		<?php endforeach; ?>
		<a href="<?= BASE_URL ?>pages/favorites.php" class="nav-item <?= $currentPage == 'favorites' ? '--active' : '' ?>">Избранное</a>
	</nav>
</aside>
<header class="page-header">
	<form class="search-panel" action="<?= BASE_URL ?>pages/index.php" method="get">
		<input class="search-field" name="q" type="search" placeholder="Поиск по каталогу..." value="<?= htmlspecialchars($_GET['q'] ?? '') ?>">
		<button class="action-btn --orange" type="submit">Искать</button>
	</form>
	<div class="header-controls">
		<a href="<?= BASE_URL ?>pages/add-movie.php" class="action-btn --teal">Добавить фильм</a>
	</div>
</header>
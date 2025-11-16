<?php if (empty($movie)): ?>
	<p class="no-results">Фильм не найден</p>
<?php else: ?>
	<article class="film-card">
		<div class="film-image">
			<img src="<?= IMG_PATH ?><?= $movie['id'] ?>.jpg" alt="<?= htmlspecialchars($movie['title']) ?>">
		</div>
		<div class="film-details">
			<div class="film-heading">
				<h1 class="film-title">
					<?= htmlspecialchars($movie['title']) ?> (<?= $movie['year'] ?>)
					<?php if ($movie['age_restriction']): ?>
						<span class="age-rating"><?= $movie['age_restriction'] ?>+</span>
					<?php endif; ?>
				</h1>
				<button class="like-btn" aria-label="В избранное">Heart</button>
			</div>

			<div class="original-title"><?= htmlspecialchars($movie['original_title']) ?></div>

			<div class="rating-circle">
				<div class="score-bars">
					<?php for ($i = 1; $i <= 5; $i++): ?>
						<div class="score-bar <?= $i <= getRatingBars($movie['rating']) ? 'active' : '' ?>"></div>
					<?php endfor; ?>
				</div>
				<div class="rating-number-circle"><?= $movie['rating'] ?></div>
			</div>

			<div class="film-info">
				<div><strong>Год производства</strong></div>
				<div><?= $movie['year'] ?></div>

				<div><strong>Режиссёр</strong></div>
				<div><?= htmlspecialchars($movie['director']) ?></div>

				<div><strong>В главных ролях</strong></div>
				<div><?= implode(', ', $movie['actors']) ?></div>

				<div><strong>Жанры</strong></div>
				<div><?= implode(', ', array_map('getGenreName', $movie['genres'])) ?></div>
			</div>

			<p class="film-description"><?= nl2br(htmlspecialchars($movie['description'])) ?></p>
		</div>
	</article>
<?php endif; ?>
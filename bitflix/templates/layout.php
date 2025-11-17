<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= htmlspecialchars($title ?? SITE_NAME) ?></title>
	<link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
<div class="film-collection">
	<?php render('sidebar', ['currentPage' => $currentPage]); ?>
	<div class="main-content">
		<?php render('header'); ?>

		<?php if ($contentTemplate === 'detail'): ?>

			<main class="film-detail-container">
				<?php render($contentTemplate, $data ?? []); ?>
			</main>
		<?php else: ?>

			<main class="films-grid">
				<?php render($contentTemplate, $data ?? []); ?>
			</main>
		<?php endif; ?>

	</div>
</div>
</body>
</html>
<?php
function render(string $template, array $data = []): void {
	extract($data);
	$path = __DIR__ . '/../templates/' . $template . '.php';
	if (file_exists($path)) {
		include $path;
	} else {
		die("Template $template not found.");
	}
}
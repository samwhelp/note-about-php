#!/usr/bin/env php
<?php

	require_once(__DIR__ . '/lib/init.php');


	$data = include(__DIR__ . '/db/data.php');

	$template_file_path = __DIR__ . '/view/template.php';

	$content = template_render_str($template_file_path, $data);

	var_dump($content);

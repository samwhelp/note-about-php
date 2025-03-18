#!/usr/bin/env php
<?php

	require_once(__DIR__ . '/lib/init.php');


	$data = include(__DIR__ . '/db/data.php');

	$template_file_path = __DIR__ . '/view/template.php';


	$view = new \Demo\View;

	$content = $view
		->setTemplate($template_file_path)
		->setData($data)
		->renderStr()
	;

	var_dump($content);

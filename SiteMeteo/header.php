<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="UTF-8">
		<title>SiteMeteo</title>
		<?php 	$hour = date('G'); ?>
		<?php if ($hour <= '7' && $hour >= '19') { ?>
			<style>
				body {
					color: white;
					background-color: #1f253a;
				}
			</style>
		<?php } else { ?>
			<style>
				body {
					color: black;
					background-color: #FFFFFF;
				}
			</style>
		<?php } ?>
	</head>
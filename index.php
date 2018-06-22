<?php
include_once('include/conn.php');

require_once ('include/smarty-3.1.32/libs/Smarty.class.php');



$template = new Smarty();

$template->assign('title', 'tweet feed');

$getBlogs = $conn->query('SELECT tweet.titel, tweet.text, user.name FROM tweet, user WHERE user.userid=tweet.userid');

$blogs = $getBlogs->fetchAll(PDO::FETCH_ASSOC);

$template->assign('blogs', $blogs);

$template->display('index.tpl');
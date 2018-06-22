<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<h1>{$title}</h1>
    {foreach $blogs as $blog}
        <div class="tweet">
        <h2>{$blog.titel}</h2>
        <h3>{$blog.name}</h3>
        <p>{$blog.text}</p>
</div>
    {/foreach}
</body>
</html>
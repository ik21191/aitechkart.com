<?php

// Dummy array of blog posts
$posts = [
    [
        "title" => "Introduction to PHP",
        "content" => "PHP is a popular scripting language for web development...",
        "tags" => "PHP, Web Development",
        "author" => "John Doe"
    ],
    [
        "title" => "Understanding MVC in PHP",
        "content" => "MVC is a design pattern that separates an application into three parts...",
        "tags" => "PHP, MVC, Design Patterns",
        "author" => "Jane Smith"
    ],
    [
        "title" => "Why Use Design Patterns?",
        "content" => "Design patterns help developers solve common software problems efficiently...",
        "tags" => "PHP, Design Patterns",
        "author" => "Mike Johnson"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .post { border-bottom: 1px solid #ddd; padding: 20px 0; }
        .tags { font-size: 14px; color: gray; }
    </style>
</head>
<body>

    <h1>My Simple Blog</h1>

    <?php foreach ($posts as $post): ?>
        <div class="post">
            <h2><?= htmlspecialchars($post['title']); ?></h2>
            <p><?= htmlspecialchars($post['content']); ?></p>
            <p class="tags"><strong>Tags:</strong> <?= htmlspecialchars($post['tags']); ?></p>
            <p><em>By <?= htmlspecialchars($post['author']); ?></em></p>
        </div>
    <?php endforeach; ?>

</body>
</html>
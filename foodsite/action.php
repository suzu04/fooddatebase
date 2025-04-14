<?php

$query = $_GET['query'] ?? '';
$category = $_GET['category'] ?? '';
$date_from = $_GET['date_from'] ?? '';
$date_to = $_GET['date_to'] ?? '';
$sort = $_GET['sort'] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索結果</title>
    <link rel="stylesheet" href="google2.css">
</head>
<body>

    <h1>検索結果</h1>

    <!--
    <div class="search-result">
        <p><strong>キーワード:</strong> <?= htmlspecialchars($query) ?></p>
        <p><strong>カテゴリ:</strong> <?= htmlspecialchars($category) ?></p>
        <p><strong>カテゴリ:</strong> <?= htmlspecialchars($category) ?></p>
        <p><strong>カテゴリ:</strong> <?= htmlspecialchars($category) ?></p>
        <p><strong>カテゴリ:</strong> <?= htmlspecialchars($category) ?></p>
        <p><strong>カテゴリ:</strong> <?= htmlspecialchars($category) ?></p>
        <p><strong>カテゴリ:</strong> <?= htmlspecialchars($category) ?></p>
        <p><strong>カテゴリ:</strong> <?= htmlspecialchars($category) ?></p>
        <p><strong>日付:</strong> <?= htmlspecialchars($date_from) ?> ～ <?= htmlspecialchars($date_to) ?></p>
        <p><strong>並び順:</strong> <?= htmlspecialchars($sort) ?></p>
    </div>
    -->
    <div class="search-result">
    <p><strong>キーワード:</strong> <?= htmlspecialchars($query) ?></p>
    
    <!-- チェックボックスに変更 -->
    <p><strong>カテゴリ:</strong></p>
    <label><input type="checkbox" name="category[]" value="<?= htmlspecialchars($category1) ?>"> <?= htmlspecialchars($category1) ?></label>
    <label><input type="checkbox" name="category[]" value="<?= htmlspecialchars($category2) ?>"> <?= htmlspecialchars($category2) ?></label>
    <label><input type="checkbox" name="category[]" value="<?= htmlspecialchars($category3) ?>"> <?= htmlspecialchars($category3) ?></label>
    
    <p><strong>日付:</strong> <?= htmlspecialchars($date_from) ?> ～ <?= htmlspecialchars($date_to) ?></p>
    <p><strong>並び順:</strong> <?= htmlspecialchars($sort) ?></p>
</div>

</body>
</html>

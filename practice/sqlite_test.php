<?php
try {
    // SQLite3 を使用する場合
    $db = new SQLite3(__DIR__ . '/practice/new_test.db');

    // データの取得例
    $results = $db->query('SELECT * FROM your_table_name');
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        print_r($row);
    }

    $db->close();

} catch (Exception $e) {
    echo 'エラー: ' . $e->getMessage();
}
?>

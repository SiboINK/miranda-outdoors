<?php
$db = null;
$config_file = __DIR__ . '/config.local.php';
if (is_file($config_file)) {
    $config = require $config_file;
    try {
        $db = new PDO($config['dsn'], $config['username'], $config['password']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo '<p>Database unavailable. Check your local configuration.</p>';
    }
}
?>

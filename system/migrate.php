<?php

// database migrations
global $db;
$tmp = '';
if (fetchDatabaseConfig('database_version', $tmp)) {
    // we got version
    $tmp = (int)$tmp;
    if ($tmp < DATABASE_VERSION) {
        // import if older
        runMigrate($db, $tmp);
    }
} else {
    // register first version
    registerDatabaseConfig('database_version', 0);
    runMigrate($db);
}

function runMigrate($db, $tmp = 0)
{
    $db->revalidateCache();
    for ($i = $tmp + 1; $i <= DATABASE_VERSION; $i++) {
        require SYSTEM . 'migrations/' . $i . '.php';
        updateDatabaseConfig('database_version', $i);
        clearCache();
    }
}

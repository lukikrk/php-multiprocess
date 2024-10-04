<?php

declare(strict_types=1);

$sequence = (int) $argv[1] ?? 0;

for ($i = 0; $i < 100; $i++) {
    file_put_contents(
        sprintf('%s/result.txt', __DIR__),
        sprintf("sequence: %d, step: %d\n", $sequence, $i),
        FILE_APPEND
    );
}

<?php

declare(strict_types=1);

for ($i = 0; $i < 6; $i++) {
    exec(sprintf('php %s/process.php %d >/dev/null &', __DIR__, $i));
}

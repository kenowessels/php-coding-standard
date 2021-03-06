<?php

declare(strict_types=1);

namespace Spaceemotion\PhpCodingStandard;

require_once 'init.php';

exit((new Cli($argv))->start([
    new Tools\ComposerNormalize(),
    new Tools\PhpParallelLint(),
    new Tools\PhpMessDetector(),
    new Tools\Phpstan(),
    new Tools\Psalm(),
    new Tools\EasyCodingStandard(),
]) ? 0 : 1);

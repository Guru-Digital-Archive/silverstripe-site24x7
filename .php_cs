<?php
$finder = Symfony\CS\Finder::create()
    ->in(__DIR__.'/code');

return Symfony\CS\Config::create()
        ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
        ->fixers(['strict_param', 'short_array_syntax', 'align_double_arrow', 'align_equals'])
        ->finder($finder);

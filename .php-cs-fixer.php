<?php

$header = <<<EOF
This file is part of the FOSRestBundle package.

(c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return (new PhpCsFixer\Config())
    ->setRules([
        'psr_autoloading' => true,
        'header_comment' => ['header' => $header],
        'nullable_type_declaration_for_default_null_value' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    )
;

<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Fixtures\Annotations;

use FOS\RestBundle\Controller\Annotations\RequestParam;
use Symfony\Component\Validator\Constraints\IdenticalTo;

/**
 * Fixture declaring a request param with a {@see IdenticalTo} validation constraint.
 *
 * This fixture is required for PHP 8.0 compatibility only.
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target({"CLASS", "METHOD"})
 */
#[\Attribute(\Attribute::IS_REPEATABLE | \Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class IdenticalToRequestParam extends RequestParam
{
    /**
     * @param mixed $default
     */
    public function __construct(
        string $name = '',
        ?string $key = null,
        $identicalTo = null,
        $default = null,
        string $description = '',
        array $incompatibles = [],
        bool $strict = true,
        bool $map = false,
        bool $nullable = false,
        bool $allowBlank = true
    ) {
        parent::__construct($name, $key, null !== $identicalTo ? new IdenticalTo($identicalTo) : null, $default, $description, $incompatibles, $strict, $map, $nullable, $allowBlank);
    }
}

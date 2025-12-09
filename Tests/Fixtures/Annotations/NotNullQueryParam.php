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

use FOS\RestBundle\Controller\Annotations\QueryParam;
use Symfony\Component\Validator\Constraints\NotNull;

/**
 * Fixture declaring a query param with a {@see NotNull} validation constraint.
 *
 * This fixture is required for PHP 8.0 compatibility only.
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target({"CLASS", "METHOD"})
 */
#[\Attribute(\Attribute::IS_REPEATABLE | \Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class NotNullQueryParam extends QueryParam
{
    /**
     * @param mixed $default
     */
    public function __construct(
        string $name = '',
        ?string $key = null,
        $default = null,
        array $incompatibles = [],
        string $description = '',
        bool $strict = false,
        bool $map = false,
        bool $nullable = false,
        bool $allowBlank = true
    ) {
        parent::__construct($name, $key, new NotNull(), $default, $incompatibles, $description, $strict, $map, $nullable, $allowBlank);
    }
}

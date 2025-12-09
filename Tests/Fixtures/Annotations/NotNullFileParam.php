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

use FOS\RestBundle\Controller\Annotations\FileParam;
use Symfony\Component\Validator\Constraints\NotNull;

/**
 * Fixture declaring a file param with a {@see NotNull} validation constraint.
 *
 * This fixture is required for PHP 8.0 compatibility only.
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target({"CLASS", "METHOD"})
 */
#[\Attribute(\Attribute::IS_REPEATABLE | \Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class NotNullFileParam extends FileParam
{
    /**
     * @param mixed $default
     */
    public function __construct(
        string $name = '',
        bool $strict = true,
        bool $image = false,
        bool $map = false,
        ?string $key = null,
        $default = null,
        string $description = '',
        bool $nullable = false
    ) {
        parent::__construct($name, $strict, new NotNull(), $image, $map, $key, $default, $description, $nullable);
    }
}

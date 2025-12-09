<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Fixtures\Controller;

use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\FileParam;
use FOS\RestBundle\Tests\Fixtures\Annotations\NotNullFileParam;
use FOS\RestBundle\Tests\Fixtures\Annotations\NotNullQueryParam;

/**
 * Extract from the documentation.
 *
 * @author Ener-Getick <egetick@gmail.com>
 */
class ParamsAnnotatedController
{
    /**
     * @QueryParam(name="page", requirements="\d+", default="1", description="Page of the overview.")
     *
     * @RequestParam(name="byauthor", requirements="[a-z]+", description="by author", incompatibles={"search"}, strict=true)
     *
     * @NotNullQueryParam(name="filters", map=true)
     *
     * @FileParam(name="avatar", requirements={"mimeTypes"="application/json"}, image=true)
     *
     * @NotNullFileParam(name="foo", strict=false)
     * @NotNullFileParam(name="bar", map=true)
     */
    public function getArticlesAction(ParamFetcher $paramFetcher)
    {
    }

    #[QueryParam(name: 'page', requirements: '\d+', default: '1', description: 'Page of the overview.')]
    #[RequestParam(name: 'byauthor', requirements: '[a-z]+', description: 'by author', incompatibles: ['search'], strict: true)]
    #[NotNullQueryParam(name: 'filters', map: true)]
    #[FileParam(name: 'avatar', requirements: ['mimeTypes' => 'application/json'], image: true)]
    #[NotNullFileParam(name: 'foo', strict: false)]
    #[NotNullFileParam(name: 'bar', map: true)]
    public function getArticlesAttributesAction(ParamFetcher $paramFetcher)
    {
    }
}

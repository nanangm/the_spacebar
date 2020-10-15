<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /** 
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Buddha first symf');
    }

    /** 
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('This is the bacon page for displaying content:%s', $slug));
    }
}

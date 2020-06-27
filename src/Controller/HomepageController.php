<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    /**
     * @Route("/test", name="homepage")
     */
    public function homepage(): Response
    {
        return new Response(
            '<html><body>Lucky number: test </body></html>'
        );
    }
}

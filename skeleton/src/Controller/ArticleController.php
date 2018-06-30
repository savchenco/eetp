<?php
/**
 * Created by PhpStorm.
 * User: serega
 * Date: 30.06.2018
 * Time: 15:42
 */

namespace App\Controller;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function number()
    {
        return new Response(
            'It\'s Working231234'
        );
    }

    /**
     * @Route("/news/asda")
     */
    public function news()
    {
        return new Response(
            'скоро здесь будут новости'
        );
    }
}
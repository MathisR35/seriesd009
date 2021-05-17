<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route ("/", name="main_")
 */
class MainController extends AbstractController
{
    /**
     * @Route ("/", name="home")
     */
    public function home()
    {
     die("COUCOU !");
    }

    /**
     * @Route ("/test/", name="test")
     */
    public function test(){
        die("Page de test");
    }
}
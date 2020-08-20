<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class indexController extends AbstractController
{
    
    public function login(Request $request)
    {
        $login="soowzididi84@gmail.com";
        $password="abdou1999";

        if($request->get("login")!=$login || $request->get("password")!=$password){
            return $this->render('welcome/login.html.twig');
        }else{
            return $this->render('welcome/index.html.twig');
        }

       
    }
}
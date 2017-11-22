<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route(path="/", name="app_user_index")
     */
    public function indexAction()
    {
        $players = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('User/index.html.twig', ['players' => $players]);
    }

}

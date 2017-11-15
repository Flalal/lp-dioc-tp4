<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * // FIXME: la route doit être /my_profile
     * @Route("/my_profile", name="app_usercontroller_myprofile")
     */
    public function myProfileAction()
    {
        return $this->render('User/my_profile.html.twig');
    }

    /**
     * // FIXME: la route doit être /profile/3 par exemple.
     *  @Route("/profile/{id}", name="app_usercontroller_profileaction")
     */
    public function profileAction(User $user)
    {
        // FIXME: un utilisateur connecté qui se rend sur sa propre page est redirigé vers /my_profile
        if($user === $this->getUser()){
            return $this->redirect($this->generateUrl("app_usercontroller_myprofile"));
        }
        return $this->render('User/profile.html.twig', ['user' => $user]);
    }


}

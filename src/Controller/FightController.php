<?php

namespace App\Controller;

use App\Fight\DamageCalculator;
use App\Fight\FightHandler;
use App\Form\FightType;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FightController extends Controller
{
    /**
     * @Route(path="/fight", name="app_fight_index")
     */
    public function indexAction(Request $request, EntityManager $manager, FightHandler $fightHandler)
    {
        $form = $this->createForm(FightType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var \App\Fight\Fight $fight */
            $fight = $form->getData();
            $fightHandler->FightHandle($fight);
            $manager->flush();

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('Fight/index.html.twig', ['form' => $form->createView()]);
    }
}
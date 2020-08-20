<?php

namespace App\Controller;

use App\Entity\ClientCourant;
use App\Entity\CompteCourant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientCourantController extends AbstractController
{
    /**
     * @Route("/client/courant", name="client_courant")
     */
    public function index()
    {
        if(!empty($_POST)){
            extract($_POST);
            $clientCourant = new ClientCourant();
            // pour la recuperation des names
        $clientCourant->setNom($_POST['nomClient']);
        $clientCourant->setPrenom($_POST['prenomClient']);
        $clientCourant->setNumTelephone($_POST['callClient']);
        $clientCourant->setNumId((int)$_POST['numCniClient']);
        $clientCourant->setAdressMail($_POST['adresseClient']);
        $clientCourant->setSexe($_POST['sexeCourant']);
        $clientCourant->setDateNaissance($_POST['dateNaissCourant']);
        $clientCourant->setSalaire($_POST['Salaire']); 
        //faire la recuperation des donnees

        $insert = $this->getDoctrine()->getManager();
        $insert->persist($clientCourant);
        $insert->flush($clientCourant);

    }

    if(!empty($_POST)){

        $compteCourant = new CompteCourant();

        $compteCourant->setNumeroCompte($_POST['numberCompte']);
        $compteCourant->setSolde($_POST['solde']);
        $compteCourant->setAgios($_POST['agios']);
        $compteCourant->setDateOuverture($_POST['dateOuv']);

        $insert = $this->getDoctrine()->getManager();
        $insert->persist($compteCourant);
        $insert->flush($compteCourant);
    }

    
    return $this->render('client_courant/index.html.twig', [
        'controller_name' => 'ClientCourantController',
    ]);
}
}

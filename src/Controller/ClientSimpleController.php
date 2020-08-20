<?php

namespace App\Controller;

use App\Entity\ClientSimple;
use App\Entity\CompteSimple;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientSimpleController extends AbstractController
{
    /**
     * @Route("/client/simple", name="client_simple")
     */
    public function index()
    {
        // Comment Il va transmettre ces donnees vers le modele pour inserer
            if(!empty($_POST)){
                extract($_POST);
                $clientSimple = new ClientSimple();
                // pour la recuperation des names
            $clientSimple->setNom($_POST['nom']);
            $clientSimple->setPrenom($_POST['prenom']);
            $clientSimple->setTelephone($_POST['telephone']);
            $clientSimple->setCni((int)$_POST['numCni']);
            $clientSimple->setAdresseMail($_POST['adresse']);
            $clientSimple->setSexe($_POST['sexe']);
            $clientSimple->setDateNaiss($_POST['dateNaiss']);    
            //faire la recuperation des donnees

            //ici on prends trois fonctions pour gerer les insertions a savoir:  
            $insert = $this->getDoctrine()->getManager();
            $insert->persist($clientSimple);
            $insert->flush($clientSimple);
              //  var_dump($_POST);
              //  die();
            // return $this->render('client_simple/index.html.twig', [
            //     'controller_name' => 'ClientSimpleController',
            // ]);
            // var_dump($ok);
            // die()
        }
        
        if(!empty($_POST)){
            $compteSimple = new CompteSimple();
            $compteSimple->setNumeroCompte($_POST['numCompte']);
            $compteSimple->setSolde($_POST['solde']);
            $compteSimple->setFraisOuv($_POST['fraisOuv']);
            $compteSimple->setRemuneration($_POST['remuneration']);
            $compteSimple->setDateOuv($_POST['dateOuv']);
                // var_dump($_POST);
                // die;

             //ici on prends trois fonctions pour gerer les insertions a savoir:  
             $insert = $this->getDoctrine()->getManager();
             $insert->persist($compteSimple);
             $insert->flush($compteSimple);

            return $this->render('client_simple/index.html.twig', [
                'controller_name' => 'ClientSimpleController',
            ]);
        }
        }    
    }


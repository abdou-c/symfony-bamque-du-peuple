<?php

namespace App\Controller;

use App\Entity\ClientBloque;
use App\Entity\CompteBloque;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientBloqueController extends AbstractController
{
    /**
     * @Route("/client/bloque", name="client_bloque")
     */
    public function index()
    {
        $clientBloque = new ClientBloque();

        if(!empty($_POST)){
            extract($_POST);
            $clientBloque->setNom($_POST['nameClient']);
            $clientBloque->setPrenom($_POST['clientUsername']);
            $clientBloque->setTelephone($_POST['telephoneClient']);
            $clientBloque->setAddresseMail($_POST['clientMail']);
            $clientBloque->setNumCni($_POST['clientId']);
            $clientBloque->setDateNaiss($_POST['dateNaissBloque']);
            $clientBloque->setSexe($_POST['sexeBloque']);

            $insert = $this->getDoctrine()->getManager();
            $insert->persist($clientBloque);
            $insert->flush($clientBloque);
        }

        if(!empty($_POST)){
            extract($_POST);
            $compteBloque = new CompteBloque();

            $compteBloque->setDateOuverture($_POST['dateOuvertBloque']);
            $compteBloque->setDateFermeture($_POST['dateFermetureBloque']);
            $compteBloque->setNumeroCompte($_POST['numberCompteBloque']);
            $compteBloque->setSolde($_POST['soldeBloque']);
            $compteBloque->setFraisOuv($_POST['fraisOuvBloque']);
            $compteBloque->setRemuneration($_POST['remunerationBloque']);

            $insert = $this->getDoctrine()->getManager();
            $insert->persist($compteBloque);
            $insert->flush($compteBloque);

            return $this->render('client_bloque/index.html.twig', [
                'controller_name' => 'ClientBloqueController',
            ]);
        }
        
    }
}

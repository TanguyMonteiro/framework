<?php

namespace Controllers;


class Home //extends Controller si besoin d'un model
{
    //  protected $modelName; si besoin d'un model


    /**
     * affiche l'accueil du framework
     * 
     * 
     */
    public function index()
    {
        $titreDeLaPage = "Accueil Framework";

         $message = "Bienvenue dans";


         $messageChanger = null ;

         if(!empty($_POST['messageChanger'])){
             $messageChanger = $_POST['messageChanger'];
         }
        // render un template

        // avec compact j'envoie les variables $titreDeLaPage $messageChanger et $message
        // pour pouvoir les utiliser ou je fais mon render
        \Rendering::render('home/home', compact('titreDeLaPage', 'message' , 'messageChanger'));



    }

   



}
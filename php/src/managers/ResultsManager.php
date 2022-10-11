<?php

class ResultsManager
{
        public function genererChaineAleatoire($longueur = 20)
        {
                return substr(str_shuffle(str_repeat($code='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', ceil($longueur/strlen($code)) )),1,$longueur);
        }
}
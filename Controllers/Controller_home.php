<?php

class Controller_home extends Controller{

  public function action_home(){
    $mod = Model::getModel();
    $req =$mod->getNbNobelPrizes();
    $data = ['nb_nobels' => $req];
    $this->render("home", $data);
  }
    /**
     * Action par défaut du contrôleur (à définir dans les classes filles)
     */
    public function action_default(){
      $this->action_home();
    }


}
?>

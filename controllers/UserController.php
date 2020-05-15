<?php
include __DIR__ . '/../models/User.php';

  class UserController {
    public function index() 
    {
      // $users = [
      //   [
      //     'name' => 'Chiara',
      //     'lastname' => 'Passaro',
      //     'email' => 'pippo@pippo.it'
      //   ],
      //   [
      //     'name' => 'Pippo',
      //     'lastname' => 'Uno',
      //     'email' => 'pippo@pippo.it'
      //   ],
      //   [
      //     'name' => 'Pluto',
      //     'lastname' => 'Due',
      //     'email' => 'pluto@pippo.it'
      //   ],
      // ];

      $userModel = new User;
      $users = $userModel->getAllRecords();

      $collection = [];

      foreach ($users as $key => $user) {
        $collection[$key] = new User;
        $collection[$key]->name = $user['name'];
        $collection[$key]->lastname = $user['lastname'];
        $collection[$key]->email = $user['email'];
      }

      return $collection;
    }

    public function create() 
    {
      
    }

    //rotta richiamata dal form
    public function store($request) 
    {
      //chiamata al db

      $newUser = new User;
      $newUser->fill($request);
      var_dump($newUser);
      $saved = $newUser->saveRecord();
      if($saved) {
        echo 'Record inserito';
      } else {
        echo 'Record non inserito correttamente';
      }

      //torniamo alla view

    }
  }
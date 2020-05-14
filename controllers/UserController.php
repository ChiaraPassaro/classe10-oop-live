<?php
include __DIR__ . '/../models/User.php';

  class UserController {
    public function index() 
    {
      $users = [
        [
          'name' => 'Chiara',
          'lastname' => 'Passaro',
          'email' => 'pippo@pippo.it'
        ],
        [
          'name' => 'Pippo',
          'lastname' => 'Uno',
          'email' => 'pippo@pippo.it'
        ],
        [
          'name' => 'Pluto',
          'lastname' => 'Due',
          'email' => 'pluto@pippo.it'
        ],
      ];

      $collection = [];

      foreach ($users as $key => $user) {
        $collection[$key] = new User;
        $collection[$key]->name = $user['name'];
        $collection[$key]->lastname = $user['lastname'];
        $collection[$key]->email = $user['email'];
      }

      return $collection;
    }
  }
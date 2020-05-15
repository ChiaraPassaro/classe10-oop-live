<?php
  include __DIR__ . '/../controllers/UserController.php';
  $UserController = new UserController;
  $request = [
    'name' => 'Chiara',
    'lastname' => 'Passaro',
    'email' => 'asdfasfdsfds',
    'password' => 'Chwrwergerghriara'
  ];
  $UserController->store($request);
  ?>


  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="{{route('store)}}">
      <input type="text" name="name" placeholder="Inserisci il tuo nome">
      <input type="text" name="lastname" placeholder="Inserisci il tuo cognome">
      <input type="text" name="email" placeholder="Inserisci la tua email">
      <input type="text" name="password" placeholder="Inserisci la tua password">
      <input type="submit" value="invia">
    </form>
  </body>
  </html>
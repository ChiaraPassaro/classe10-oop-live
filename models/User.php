<?php
  include __DIR__ . '/Model.php';
  //model descrive la tabella
  class User extends Model {
    // public $name;
    // public $lastname;
    // public $email;
    // public $password;

    public $table = 'users';
    protected $fillable = [
      'name',
      'lastname',
      'email',
      'password',
      'created_at',
      'updated_at'
    ];

    public function __construct()
    {
      
    }

    public function getAllRecords()
    {
    //comunicare con il DB
    //query
    //SELECT * FROM `users` 
    //SELECT * FROM $this->table 
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

      return $users;
    }

    public function saveRecord()
    {
      //chiamata db che passa i dati e li salva
      // insert
      return true;
    }

    public function fill($data) 
    {
        // $this->name = $data['name'];
        // $this->lastname = $data['lastname'];
        // $this->email = $data['email'];
        // $this->password = $data['password'];
    }

  }

  // $pippo = new User;
  // $pippo->name = 'Pippo';
  // $pippo->lastname = 'Cognome';
  // $pippo->email = 'Pippo@pippo.it';
  // $users = $pippo->getAllRecords();
  // var_dump($users);
    $pippo = new User;

    var_dump($pippo);

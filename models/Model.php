<?php

// parla con db
// descrive il database
class Model {
  public $table;

  protected $fillable = [
    'created_at',
    'updated_at'
  ];

  public function getAllRecords()
  {
    
  }

  private function fill()
  {

  }

  public function save()
  {

  }

  public function update()
  {
    echo 'update';
  }

  public function delete()
  {

  }
}
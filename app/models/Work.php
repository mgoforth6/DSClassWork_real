<?php

class Worker
{
  public $work_id;
  public $team_id;
  public $task_id;
  public $start_date;
  public $stop_date;
  public $hours;

  public function __construct($data) {
    // TODO:!
  }

  public static function findByTaskId($taskId) {
    // 1. Get Db Connection
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);

    die;

    // 2. Prepare SQL statement

    // 3. Execute statement

  }
}

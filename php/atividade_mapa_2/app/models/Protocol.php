<?php
  define('HOST','localhost');
  define('DBNAME','mapa_reinaldo');
  define('USER','root');
  define('PASSWORD','');

  class Protocol{
    protected $connect;
    private $db_table;
    private $id, $protocol_code, $requester, $description, $email, $year, $status, $created_at;

    function __construct(){
      //parent::__construct();
      $this->db_table = 'protocols';
      $this->connectDataBase();
    }

    function connectDataBase(){
      try{
        $this->connect = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
        header('location: ./db/migrations/index.php');
      }
    }

    public function dataProtocol($protocol_code, $requester, $description, $email, $year, $status, $created_at){
      $this->setProtocolCode($protocol_code);
      $this->setRequester($requester);
      $this->setDescription($description);
      $this->setEmail($email);
      $this->setYear($year);
      $this->setStatus($status);
      $this->setCreatedAt($created_at);
    }

    /* list data */
    public function listAllTickets(){
      $query_data = $this->connect->prepare("SELECT * FROM $this->db_table");
      $query_data->execute();

      $results = $query_data->fetchAll(PDO::FETCH_ASSOC);
      return json_encode($results);
    }

    public function getCurrentTicket($filter_params){
      try{
        $query_data = $this->connect->prepare("SELECT * FROM $this->db_table WHERE protocol_code=$filter_params");
        $query_data->execute();

        $results = $query_data->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
      }catch(PDOException $e){
        echo '<p class="position-fixed top-0 w-100 alert alert-danger text-center mb-0" style="left:0px;right:0px;">Error: '.$e->getMessage().'</p>';
        die();
      }
    }

    public function createTicket($protocol_code, $requester, $description, $email, $year, $status, $created_at){
      $this->dataProtocol($protocol_code, $requester, $description, $email, $year, $status, $created_at);
      
      try{

        $request = $this->connect->prepare(
          "INSERT INTO $this->db_table (protocol_code, requester, description, email, year, status, created_at)
          VALUES(:PROTOCOL_CODE, :REQUESTER, :DESCRIPTION, :EMAIL, :YEAR, :STATUS, :CREATED_AT)"
        );

        $request->execute(
          array(
            ":PROTOCOL_CODE" => $this->getProtocolCode(),
            ":REQUESTER" => $this->getRequester(),
            ":DESCRIPTION" => $this->getDescription(),
            ":EMAIL" => $this->getEmail(),
            ":YEAR" => $this->getYear(),
            ":STATUS" => $this->getStatus(),
            ":CREATED_AT" => $this->getCreatedAt()
          )
        );

        $request->rowCount();
        return true;

      }catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
        die();
      }
    }
    
    /* Setters */
    public function setId($id){
      $this->id = $id;
    }
    public function setProtocolCode($protocol_code){
      $this->protocol_code = $protocol_code;
    }
    public function setRequester($requester){
      $this->requester = $requester;
    }
    public function setDescription($description){
      $this->description = $description;
    }
    public function setEmail($email){
      $this->email = $email;
    }
    public function setYear($year){
      $this->year = $year;
    }
    public function setStatus($status){
      $this->status = $status;
    }
    public function setCreatedAt($created_at){
      $this->created_at = $created_at;
    }

    /* Getters */
    public function getId(){
      return $this->id;
    }
    public function getProtocolCode(){
      return $this->protocol_code;
    }
    public function getRequester(){
      return $this->requester;
    }
    public function getDescription(){
      return $this->description;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getYear(){
      return $this->year;
    }
    public function getStatus(){
      return $this->status;
    }
    public function getCreatedAt(){
      return $this->created_at;
    }
  }
?>
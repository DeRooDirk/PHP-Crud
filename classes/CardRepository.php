<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;
    public $newGame;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        if (!empty($_POST['game'])) {
            $this->newGame = $_POST['game'];

            $create = $this->databaseManager->database->query("INSERT INTO game_list (name) VALUES ('$this->newGame')");

            if (!$create) {
                var_dump($this->databaseManager->database->error);
            }

            return $create;
        }
        
        $this->get();
        
    }
    

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // TODO: replace dummy data by real one
        
        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)

        $result = $this->databaseManager->database->query("SELECT * FROM game_list ORDER BY name");
        if (!$result) {
            var_dump($this->databaseManager->database->error);
        }    
    
        return $result;

    }

    public function update(int $id ,string $updateGame)
    {
        $this->databaseManager->database->query("UPDATE game_list SET name = '$updateGame' WHERE id = $id;");
     
    }

    public function delete(int $id)
    {
        $this->databaseManager->database->query("DELETE FROM game_list WHERE id = $id;");
      
    }

}
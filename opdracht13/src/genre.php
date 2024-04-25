<?php


include("database.php");


Class Genre extends Database 
{


    public function getAllGenres()
    {
        $query = "SELECT * from genre";
        return $this->database->voerQueryUit($query);
    }

    public function getAllGamesWithGenre($selectedGenre) 
    {
        $query = "SELECT * FROM games
        JOIN genre on games.genreid = genre.genreid
        JOIN publisher on games.publisherId = publisher.publisherId
        WHERE games.genreid = '$selectedGenre'
        ORDER BY gameName";
        return parent::voerQueryUit($query);
    }
}
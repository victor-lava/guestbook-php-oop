<?php

include('Database.class.php');

class Review {

    private $pdo;

    public function __construct() {

        $db = new Database();
        $this->pdo = $db->connect();

    }

    public function addReview($f_name, $l_name, $email, $review) {

        $sql = 'INSERT INTO review SET f_name = :f_name, l_name = :l_name, email = :email, review = :review';
        $query = $this->pdo->prepare($sql);
        $query->execute([
            'f_name' => $f_name,
            'l_name' => $l_name,
            'email' => $email,
            'review' => $review
        ]);

        // Shows SQL query error info
        var_dump($query->errorInfo());

    }

    public function getAll() {

        $sql = 'SELECT * FROM review';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $reviews = $query->fetchAll(PDO::FETCH_ASSOC);

        return $reviews;

    }

    public function getFeatured() {

        $sql = 'SELECT * FROM review WHERE featured = 1 ORDER BY date LIMIT 2';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $reviews = $query->fetchAll(PDO::FETCH_ASSOC);

        return $reviews;

    }

    public function getNonFeatured() {

        $sql = 'SELECT * FROM review WHERE featured = 0 ORDER BY date';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $reviews = $query->fetchAll(PDO::FETCH_ASSOC);

        return $reviews;

    }

    // getFeatured
    // getNonFeatured

}

// $reviews = new Review();
// print_R($reviews->getNonFeatured());



// $sql = 'SELECT * FROM movies WHERE id = '.$id;
// $query = $pdo->prepare($sql);
// $query->execute();
// $one_movie = $query->fetch(PDO::FETCH_ASSOC);


?>

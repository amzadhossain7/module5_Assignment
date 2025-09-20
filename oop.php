<?php
class Movie
{

    // TODO: Add properties as Private
    private $title;
    private $availableCopies;


    public function __construct($title, $availableCopies)
    {

        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }



    // TODO: Add getTitle method
    public function getTitle()
    {
        return $this->title;
    }


    // TODO: Add getAvailableCopies method
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }


    // TODO: Add rentMovie method
    public function rentMovie()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies available for {$this->title} \n";
        }
    }


    // TODO: Add returnMovie method
    public function returnMovie()
    {
        $this->availableCopies++;
    }
}



class Customer
{

    // TODO: Add properties as Private
    private $name;


    public function __construct($name)
    {

        // TODO: Initialize properties
        $this->name = $name;
    }



    // TODO: Add getName method
    public function getName()
    {
        return $this->name;
    }


    // TODO: Add rentMovie method
    public function rentMovie($movie)
    {
        $movie -> rentMovie();
        echo $this->name . " rented " . $movie -> getTitle() . "\n"; 
    }


    // TODO: Add returnMovie method
    public function returnMovie($movie) {
        $movie -> returnMovie();
        echo $this->name . " returned " . $movie -> getTitle() . "\n";
    }

}



// Usage:



// TODO: Create 2 movies:

// Movie 1 - Title: Inception, Available Copies: 4
$movie1 = new Movie(title: "Inception", availableCopies: 4);

// Movie 2 - Title: Interstellar, Available Copies: 2
$movie2 = new Movie(title: "Interstellar", availableCopies: 2);



// TODO: Create 2 customers:

// Customer 1 - Name: Alice
$customer1 = new Customer(name: "Alice");

// Customer 2 - Name: Bob
$customer2 = new Customer(name: "Bob");


// TODO: Apply rentMovie method to each customer
$customer1->rentMovie($movie1);
$customer2->rentMovie($movie2);



// TODO: Print Available Copies with their names

echo "Available Copies of " . $movie1 -> getTitle() . ": " .$movie1 -> getAvailableCopies() . "\n";
echo "Available Copies of " . $movie2 -> getTitle() . ": " .$movie2 -> getAvailableCopies() . "\n";

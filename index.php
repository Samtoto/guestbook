<?php 
    
    ini_set("display_errors", "on");
    require_once "common.inc.php";

    $guestBook = new GuestBook();
    // C ----------------------------------------
    // $book = R::dispense( 'book' );
    // $book->title = "Learn to Program";
    // $book->rating = 10;
    // $book->published = '2015-02-15';
    // $book['price'] = 29.99;

    // $id = R::store($book);


    // 
    // R ----------------------------------------
    // $book = R::load('book', 2);

    // P($book);
    // S($book);

    // U ----------------------------------------
    
    // $book = R::load('book', 3);
    // $book->title = 'Learn to fly';
    // $book->rating = 'good';
    // $book->published = '2015-02-15';
    // R::store( $book );


    // D ----------------------------------------
    // delete from book where id=1;
    // $book = R::load('book', 3);
    // R::trash( $book );


    // delete from book where 1=1;
    // R::wipe( 'book' );
    // ------------------------------------------

    $msgAll = $guestBook->getAll();

    R::close();

    // P($msgAll[4]->id);

    // P($id);
    // S($id);

    // echo "hello,world";



    require_once("pages/index.php");

   

?>
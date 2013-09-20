<!--Mark Hitchcock
        January 28, 2013
        http://ned.highline.edu/~mmhitch/215/
            assignments/assignment4/index.php
        -->
<?php
    include 'includes/db.php';
    include 'book_functions_v4.php';
    
    //Get the desired action
    if(isset($_POST['action'])){
        $action = $_POST['action'];
    }
    else if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = "display";
    }

    //Carry out the desired action
    switch($action){
        //Allow the user to edit book
        case "edit":
            $title = $_GET['title'];
            $description = $_GET['description'];
            $price = $_GET['price'];
            $category = $_GET['categoryID'];
            $book_result = getBook($title, $description, $price, $category);
            include 'edit_book_v4.php';
            break;
        //Update an edited grade in the database
        case "update":
            $book_id = $_POST['book_id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $category = $_POST['categoryID'];
            updateBook($book_id, $title, $description, $price, $category);
            include 'success.php';
            break;
        //Display a list of student grades
        case "display":
            $grades = getBooks();
            include 'includes/book_catalog_v4.php';
            break;
        //Delete grade for student in class
        case "delete":
            $title = $_GET['title'];
            deleteBook($title);
            include 'success.php';
            break;
        case "category":
            $category = $_GET['categoryID'];
            getCategory($category);
            include 'category_catalog.php';
            break;
    }


?>
<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'books') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO books
        (book_id, book_name, book_type, book_year, book_writerid,
        book_editorial)
    VALUES
        (1, "La Odisea", 4, 1000, 1, "Ned"),
        (5, "Troya", 4, 1030, 1, "Ned"),
        (2, "Don Quijote", 3, 1750, 2, "Sancho"),
        (6, "La celestina", 2, 1770, 2, "Sancho"),Bram 
        (3, "Dracula", 1, 1932, 3, "Job"),
         (7, "El invitado de dracula", 1, 1935, 3, "Job"),
         (4, "Pinocho", 8, 1975, 4, "Anonima"),
         (8, "Caperucita roja", 8, 1955, 4, "Anonima")';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO booktypes 
        (booktype_id, booktype_label)
    VALUES 
        (1,"Sci Fi"),
        (2, "Drama"), 
        (3, "Adventure"),
        (4, "War"), 
        (5, "Comedy"),
        (6, "Horror"),
        (7, "Action"),
        (8, "Kids")';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the people table
$query  = 'INSERT INTO writers
        (writer_id, writer_fullname, writer_editorial, writer_help)
    VALUES
        (1, "Homero", "ESP", "Ned"),
        (2, "Cervantes", "ESP", "Sancho"),
        (3, "Bram Stocker", "RBA", "Job"),
        (4, "Anonimo", "RBA", "Anonima")';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>

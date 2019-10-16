<?php
$db = mysqli_connect('localhost', 'root', '' ) or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'books') or die(mysqli_error($db));

// select the movie titles and their genre after 1990
$query = 'SELECT
        book_name, booktype_label , writer_fullname
    FROM
        books b, booktypes bt, writers w
    WHERE
        (b.book_type=bt.booktype_id) AND (b.book_writerid=w.writer_id) AND (bt.booktype_label="War") AND (w.writer_fullname="Homero")
        
    ORDER BY
    book_name ';
        
            
$result = mysqli_query($db,$query) or die(mysqli_error($db));

// show the results
while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
	echo $book_name . '-' . $booktype_label . '-' . $writer_fullname .' < br/>';
}
?>

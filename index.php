<?php
// include the header file
include('header.php');

// display the available quiz categories
echo '<h1>Choose a quiz category:</h1>';
echo '<ul>';
echo '<li><a href="quiz.php?category=history">History</a></li>';
echo '<li><a href="quiz.php?category=science">Science</a></li>';
echo '<li><a href="quiz.php?category=math">Math</a></li>';
echo '</ul>';

// include the footer file
include('footer.php');
?>

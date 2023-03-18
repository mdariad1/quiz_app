<?php
// include the header file
include('header.php');

$questions = array(
    "history" => array(
        array(
            "question" => "What year did World War II end?",
            "options" => array(
                "1942",
                "1945",
                "1948",
                "1950"
            ),
            "answer" => 1
        ),
        array(
            "question" => "Who was the first President of the United States?",
            "options" => array(
                "George Washington",
                "John Adams",
                "Thomas Jefferson",
                "James Madison"
            ),
            "answer" => 0
        ),
        // more history questions...
    ),
    "science" => array(
        array(
            "question" => "What is the chemical symbol for gold?",
            "options" => array(
                "Au",
                "Ag",
                "Cu",
                "Fe"
            ),
            "answer" => 0
        ),
        array(
            "question" => "What is the largest organ in the human body?",
            "options" => array(
                "Heart",
                "Liver",
                "Lungs",
                "Skin"
            ),
            "answer" => 3
        ),
        // more science questions...
    ),
    "math" => array(
        array(
            "question" => "What is 5 + 7?",
            "options" => array(
                "10",
                "12",
                "14",
                "16"
            ),
            "answer" => 1
        ),
        array(
            "question" => "What is the value of pi (to two decimal places)?",
            "options" => array(
                "3.14",
                "3.15",
                "3.16",
                "3.17"
            ),
            "answer" => 0
        ),
        // more math questions...
    )
);



// get the quiz category from the URL
$category = $_GET['category'];

// display the quiz questions
echo '<h1>' . ucfirst($category) . ' Quiz</h1>';
echo '<form action="results.php" method="post">';
echo '<ol>';

// loop through the quiz questions and display them
foreach ($questions[$category] as $key => $question) {
    echo '<li>';
    echo '<h2>' . $question['question'] . '</h2>';
    echo '<ul>';
    foreach ($question['options'] as $option) {
        echo '<li><input type="radio" name="' . $key . '" value="' . $option . '">' . $option . '</li>';
    }
    echo '</ul>';
    echo '</li>';
}

echo '</ol>';
echo '<input type="hidden" name="category" value="' . $category . '">';
echo '<input type="submit" value="Submit">';
echo '</form>';

// include the footer file
include('footer.php');
?>

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

// get the quiz category from the form data
$category = $_POST['category'];

// initialize the quiz results
$correct_answers = 0;
$total_questions = count($questions[$category]);

// loop through the quiz questions and check the user's answers
foreach ($questions[$category] as $key => $question) {
    $answer = $question['answer'];
    if ($_POST[$key] == $question['options'][$answer]) {
        $correct_answers++;
    }
}

// calculate the user's score
$score = $correct_answers / $total_questions * 100;

// display the quiz results
echo '<h1>' . ucfirst($category) . ' Quiz Results</h1>';
echo '<p>You got ' . $correct_answers . ' out of ' . $total_questions . ' questions correct.</p>';
echo '<p>Your score is ' . $score . '%.</p>';

// include the footer file
include('footer.php');
?>

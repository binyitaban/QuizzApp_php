<?php
require("./datastore.php");
$select_question_index = $_GET["selected"];
$question_data = $questions_store[$select_question_index];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Selected</title>
</head>
<body>

<h2>
    <?php echo $question_data["statement"];?>
</h2>

<form method="GET">
    <input type="hidden" name="selected" value="<?php echo $select_question_index;
    ?>">
    <input type="radio" name="option" value="1"> 
    <?php echo $question_data["answers"]["a"];?><br>

    <input type="radio" name="option" value="2"> 
    <?php echo $question_data["answers"]["b"];?><br>

    <input type="radio" name="option" value="3"> 
    <?php echo $question_data["answers"]["c"];?><br>

    <input type="radio" name="option" value="4"> 
    <?php echo $question_data["answers"]["d"];?><br><br>


    <button type="submit">Submit</button>

</form>

<?php 
if (isset($_GET["option"])){
$choice = $_GET["option"];
if ($choice == $question_data["Correct_answer"]){
    echo "<p style='color:green'>Correct!</p>";
}else{
    echo "<p style='color:red'>Wrong!</p>";
    }
}
?>

<br>
<a href="index.php">Back</a>

    
</body>
</html>
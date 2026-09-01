<?php
require("./datastore.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Application</title>
</head>
<body>


<h1>Quiz App 2026</h1>
<h2>Questions</h2>

<ol>
    <?php foreach($questions_store as $index => $q): ?>
        <li>
            <a href="selectedQn.php?selected=<?php echo $index; ?>">
                <?php echo $q['statement']; ?>
            </a>
        </li>
     <?php endforeach; ?>   
</ol>

    
</body>
</html>
<?php

use LDAP\Result;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
$operation = $_POST['operation'];
$inputText = $_POST['inputText'];
$substring = isset($_POST['substring'])? $_POST['substring']: "";
$start = $_POST['start'];
$length = $_POST['length'];
// echo $operation."<br>";
// echo $inputText."<br>";
switch($operation){
case 'uppercase':
    $result = strtoupper($inputText);
    break;
case 'lowercase':
    $result = strtolower($inputText);
    break;
case 'reverse':
    $result = strrev($inputText);
    break;
case 'charCount':
    $result = strlen($inputText);
    break;
    case 'explode':
        $words = explode(" ",$inputText);
        $result = implode(',', $words);
        break;

    case 'wordCount':
        $result = str_word_count($inputText);
        break;  
        case 'removeSpaces':
            $result = str_replace(" ", "", $inputText);
            break;
            case 'shuffle' :
                $result= str_shuffle($inputText, $substring);
                break; 
            case 'findPosition':
                $position = strpos(strtolower($inputText),strtolower($substring));
                $result = ($result=== false)?"Position not found": "Position at $position";
                break;

            case 'wordWrap':
                $result = wordwrap($inputText, 10, "<br>");
                break;
                case 'substr':
                    $result = substr($inputText, $start, $length);
                    break;
default:
$result = 'Invalid operation';
}
}else{
    header('Location:index.php');
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Transformation Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Text Transformation Result</h1>

        <p>Original Text:<?php echo $inputText; ?></p>
        <p>Result: <?php echo $result; ?></p>
        <p><a href="index.php">Back to Text Transformation Tool</a></p>
    </div>
</body>
</html>

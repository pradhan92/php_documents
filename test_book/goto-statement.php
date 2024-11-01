<?php
// goto statement allows you to jump to a 
// specific label in your code. While it should be used with
//  caution and generally avoided for clean, maintainable code,
//   it can be useful in certain scenarios.
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "i=$i, j=$j<br>";
        // Use goto to break out of the outer loop
        if ($i == 2 && $j == 3) {
            goto endLoops;
        }
    }
}

endLoops:
echo "Exited the loops.";
?>

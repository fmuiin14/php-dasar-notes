<?php

goto a;
echo "Hallo World";

a:
echo "Halo Miun";

$counter = 1;

while(true) {
    echo "Ini adalah for while ke $counter" . PHP_EOL;
    goto end;
    $counter++;
    

    if($counter > 10) {
        break;
    }
}

end:
echo "End Loop";
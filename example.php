<?php

require 'shellExec.php';

$result = executeCommand('for ((i=1;i<=8;i++)); do echo "$i\n"; sleep  2; done');

if($result['exit_status'] === 0){
   echo "\n<br>\n<font color=\"green\">OK</font>";
} else {
    echo "\n<br>\n<font color=\"red\">FAIL</font>";
}

?>

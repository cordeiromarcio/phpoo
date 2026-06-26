<?php

echo "Banco: " . realpath('database/estoque.db') . "<br>";
echo "Arquivo gravável: " . (is_writable('database/estoque.db') ? 'SIM' : 'NÃO') . "<br>";
echo "Pasta gravável: " . (is_writable('database') ? 'SIM' : 'NÃO') . "<br>";
echo "Usuário do processo: " . trim(shell_exec('whoami'));
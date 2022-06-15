<html>
    <body>

<h1>Cadastro de usuários</h1>
        <table border = '1'>
            <?php
                $dados[] = "Gabriel";
                $dados[] = "Lucas";
                $dados[] = "Leonardo";
                $dados[] = "Felipe Exilado";
                $dados[] = "Ismael";
                $dados[] = "Edu";
                $dados[] = "Victor";
                $dados[] = "Barbara";
                $dados[] = "Henrique";
                $dados[] = "Tairom";

                for($i = 0; $i < count($dados); $i++){
                    echo "<tr><td>" . $dados[$i] . "</td></tr>";
                }

            ?> 
        </table>
    </body>

</html>
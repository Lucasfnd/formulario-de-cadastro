<?php

    $nome             =$_POST['nome'];
    $sobrenome        =$_POST['sobrenome'];
    $data_nascimento  =$_POST['date'];
    $rg               =$_POST['rg'];
    $cpf              =$_POST['cpf'];
    $genero           =$_POST['gender'];
    $telefone         =$_POST['phone'];
    $email            =$_POST['email'];
    $convenio         =$_POST['health_insurance'];
    $num_cartao       =$_POST['card-number'];
    $celular          =$_POST['celphone'];
    $nome_da_mae      =$_POST['nome_da_mae'];

    $sql = "INSERT INTO Clientes ([Nome],[Sobrenome],[Dt_Nasc],[RG],[CPF],[Sexo],[Fone_Res],[Email],[ID_Convenio],[N_Carteirinha],[Celular],[Nome_Mae])VALUES";
    $sql .= "('$nome', '$sobrenome', $data_nascimento, '$rg', '$cpf', $genero, '$telefone', '$email', '$convenio', '$num_cartao', '$celular', '$nome_da_mae')";  
    $connection_string = 'DRIVER={SQL Server};SERVER=db_sql.be3.co,1515;DATABASE=DB1122';
    $user = 'lucas.fernandes';
    $pass = 'ProcSeletivo#2020';
    $connection = odbc_connect( $connection_string, $user, $pass );

    if (!$connection){
        echo "<p>Connection to CollectOh failed.</p>\n";
    }else{
    if (($res = odbc_exec($connection, $sql)))
    {
        print_r('inserido');
    }        

    odbc_close($connection);
    }
    die();
    
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row header"></div>
    <div class="container">
        <div class=" col-md-8 col-xs-offset-2 aling-form">
            <div class="row">
                <h3 class="header-form">Cadastro de Pacientes</h3>
                <div class="paciente-form">
                    <div class="paciente-cadastro">
                        <form action="insert.php" method="post">
                        <label class="col-md-12 col-lg-12 email-style"><input type="text" id="prontuario" name="prontuario" class="form-control"  placeholder='Prontuário:'></label>
                            <label class="col-md-6 col-lg-6"><input type="name" name="nome" class="form-control name" placeholder="Nome:"></label>
                            <label class="col-md-6 col-lg-6"><input type="last_name" name="sobrenome" class="form-control sobrenome" placeholder="Sobrenome: "></label>
                            <label class="col-md-12 col-lg-12 email-style"><input type="text" id="nome_da_mae" name="nome_da_mae" class="form-control"  placeholder='Nome da Mãe:'></label>
                            <label class="col-md-6 col-lg-6 date"><input type="text" name="date" id="date" class="form-control" placeholder="Data de nascimento:" maxlength="10"></label>
                            <label class="col-md-6 col-lg-6">
                                <select id="gender" name="gender" class="form-control" placeholder="Gênero: ">
                                    <option value="">Selecione</option>
                                    <option value="0">Feminino</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Outro</option>                    
                                </select>
                            </label>
                            <label class="col-md-4 col-lg-4 cpf-style"><input type="text" name="cpf" class="form-control cpf-mask" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" maxlength="11" placeholder="CPF:"></label>
                            <label class="col-md-4 col-lg-4 rg-style"><input type="text" name="rg" class="form-control rg-mask" placeholder="RG:" maxlength="10"></label>
                            <label class="col-md-4 col-lg-4 uf-style">
                                <select name="uf" id="uf" class="form-control">
                                    <option value="">Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                            </label>
    
                            <label class="col-md-12 col-lg-12 email-style"><input type="email" id="email" name="email" class="form-control"  placeholder='Email:'></label>

                            <label class="col-md-6 col-lg-6 celphone-style "><input type="text" id="celphone" name="celphone" class="form-control" placeholder="Celular:"></label>
                            <label class="col-md-6 col-lg-6 phone-style"><input type="text" id="phone" name="phone" class="form-control" placeholder="Telefone"></label>

                            <label class="col-md-4 col-lg-4">
                                <select id="health_insurance" name="health_insurance" class="form-control" placeholder="Convênio:">
                                    <option value="other">Selecione</option>
                                    <?php $connection_string = 'DRIVER={SQL Server};SERVER=db_sql.be3.co,1515;DATABASE=DB1122';
                                            $user = 'lucas.fernandes';
                                            $pass = 'ProcSeletivo#2020';
                                            $connection = odbc_connect( $connection_string, $user, $pass );
                        
                                            if (!$connection){
                                                echo "<p>Connection to CollectOh failed.</p>\n";
                                            }else{
                                            // Let's try enumerating all of the tables in the database (there ain't
                                            // no "show tables" here).
                                            if (($res = odbc_exec($connection, 'SELECT [ID_Convenio],[Empresa] FROM [DB1122].[dbo].[Convenios]')))
                                            {
                                                while (odbc_fetch_row($res)) {
                                                $id =  odbc_result($res,1);
                                                $convenio =  odbc_result($res,2);
                                                echo '<option value="'.$id.'">'.$convenio.'</option>';
                                                }
                                            }
                                            // Close up shop, like good dobies.
                                            odbc_close($connection);
                                            }
                                    ?>
                                </select>
                            </label>
                            <label class="col-md-4 col-lg-4"><input type="text" name='card-number'id="card-number" class="form-control" placeholder="Número do cartão"></label>
                            <label class="col-md-4 col-lg-4"><input type="text" name='validate' id="validate" class="form-control" placeholder="Validade:" maxlength="10"></label>


                    </div>
                </div>
            </div>
                <div class="row btn-form">
                    <div class="">
                        <button class="btn btn-success btn-lg btn-send" id="verificar-email" type="submit">Cadastrar</button>
                        <button class="btn btn-primary btn-lg" type="submit">Editar Cadastros</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
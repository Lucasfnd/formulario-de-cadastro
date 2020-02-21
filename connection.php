
<?php

$connection_string = 'DRIVER={SQL Server};SERVER=db_sql.be3.co,1515;DATABASE=DB1122';

$user = 'lucas.fernandes';
$pass = 'ProcSeletivo#2020';
$connection = odbc_connect( $connection_string, $user, $pass );
?> 
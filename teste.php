<?php 
$conecta = mysql_connect('HOST', 'LOGIN', 'SENHA') or print (mysql_error()); 
mysql_select_db("BANCO", $conecta) or print(mysql_error()); 
print "Conexão e Seleção OK!"; 
mysql_close($conecta); 
?>
<?php 
/* 
em 26/07/2017
http://php.net/manual/pt_BR/features.file-upload.php


##########################################################################
Breve descriçao das diretivas de configuraçao.


file_uploads boolean 
Se deve ou nao permitir envio de arquivos via HTTP. Veja também as diretivas upload_max_filesize, upload_tmp_dir, e post_max_size. 
Quando um integer é utilizado, o valor é medido em bytes. Voce também pode utilizar a notaçao resumida como descrito neste FAQ. 



upload_max_filesize integer 
O tamanho máximo de um arquivo enviado. 
Quando um integer é utilizado, o valor é medido em bytes. Voce também pode utilizar a notaçao resumida como descrito neste FAQ. 

#########################################################################
post_max_size integer 
Configura o tamanho máximo dos dados enviados via POST. Essa configuraçao também afeta o envio (upload) de arquivos. Para enviar arquivos grandes, esse valor deve ser maior que upload_max_filesize. 

Se um limite de memória for imposto pelo seu script configure, memory_limit também afeta envio de arquivos. De maneira geral, memory_limit deve ser maior que post_max_size . 
Quando um integer é utilizado, o valor é medido em bytes.  

##########################################################################
No formulário:
Método: Post
Na tag form : enctype="multipart/form-data"

Campo de fromulário para escolher o arquivo:
  <input type="file">
  
Num campo hidden:
<input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="xxxxx">
 */
?>
<html>
<head>
<title>Untitled</title>
</head>
<body>
<form action="upload2.php" method="post" enctype="multipart/form-data">
  <p>

  <br>
  <select name="tipo">
                  <option value="escolha" selected>Escolha</option>
                  <option value="avioes">Avioes</option>
                  <option value="inglaterra">Inglaterra</option>
                  <option value="dicionario">Dicionario</option>
                  <option value="bueiros">Bueiros</option>

    </select>
  </p>
  <p>
    <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="100000000">
      <input type="file" name="arq" id="arq">
    <br>
    <input type="submit" name="entrar">	
</p>
</form>						
</body>
</html>
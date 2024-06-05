<html>
    
<body>
<form id="login">
    <p><input type="text" name="Login" placeholder="Digite seu Login:" autocomplete="off" /></p>

    <p><input type="text" name="Senha" placeholder="Digite sua Senha:" autocomplete="off" />

    <p><button type="submit" form="login" formaction="menu.php" formmethod="post">Enviar</button></p>


</form>
</body>
</html>



<script>
      function Enviar ( Login, Senha) {
        if ( !sessionStorage ) {
          alert('Armazenamento não suportado.');
          return false;
        }
        var log;
        var sen;
        log = sessionStorage.getItem("Login");
        sen = sessionStorage.getItem("Senha");
         
        if(Login.value == log && Senha.value == sen){
          alert("bem-vindo ao site");
          submit();
        }
        else if(Login.value != log && Senha.value != sen){
          alert("senha incorreta");
          submit();
        } 
      }
</script>      



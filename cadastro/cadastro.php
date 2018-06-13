<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta charset='iso-8859-1'>
    
	<title>Sistema de Cadastro</title>
	<!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            //document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            //document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                //document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</head>
	<center>
    <form name="signup" method="post" action="cadastrando.php">
	Nome: <input type="text" name="nome" /><br><br>
	Sobrenome: <input type="text" name="sobrenome" /><br><br>
	<!--<form method="get" action="."> -->
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br /><br>
        <label>Rua:
        <input name="rua" type="text" id="rua"/></label><br /><br>
        <label>Número:
        <input name="numero" type="text" id="numero"/></label><br /><br>
        <label>Bairro:
        <input name="bairro" type="text" id="bairro"/></label><br /><br>
        <label>Cidade:
        <input name="cidade" type="text" id="cidade"/></label><br /><br>
        <label>Estado:
        <input name="uf" type="text" id="uf"/></label><br /><br>
    <!--  </form> -->
    País <input type="text" name="pais" /><br><br>
	E-mail: <input type="text" name="email" /><br><br>
	Senha: <input type="password" name="senha" /><br><br>
	<input type="submit" value="Cadastrar" />
	</form></center>
<body>

</body>
</html>

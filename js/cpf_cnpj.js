function trocaCNPJ(){

    if(document.getElementById("pessoa1").checked==true){
        document.getElementById("nome").innerHTML = "Nome:";
        document.getElementById("cpf/cnpj").innerHTML = "CPF:";
        document.getElementById("Inputcpf/cnpj").value='';//Limpar valores

        //alterar o tamanho maximo do campo
        document.getElementById("Inputcpf/cnpj").setAttribute("maxlength",14);

        //alterar a frase input
        document.getElementById("inputNome").setAttribute("placeholder","Digite seu nome");
        document.getElementById("Inputcpf/cnpj").setAttribute("placeholder","Digite seu CPF");
        
        //alterar o nome
        document.getElementById("Inputcpf/cnpj").setAttribute("name","cpf");

          //alterar a mascara
        document.getElementById("Inputcpf/cnpj").setAttribute("onkeydown","javascrip: fMasc(this, mCpf);");
      }    
}
function trocaCPF(){

    if(document.getElementById("pessoa2").checked==true){
        document.getElementById("nome").innerHTML = "Nome da Empresa:";
        document.getElementById("cpf/cnpj").innerHTML = "CNPJ:";
        document.getElementById("Inputcpf/cnpj").value='';//Limpar valores

        //alterar o tamanho maximo do campo
        document.getElementById("Inputcpf/cnpj").setAttribute("maxlength",18);
    
         //alterar a frase input
         document.getElementById("inputNome").setAttribute("placeholder","Digite o nome da empresa");
         document.getElementById("Inputcpf/cnpj").setAttribute("placeholder","Digite seu CNPJ");

        //alterar o nome
        document.getElementById("Inputcpf/cnpj").setAttribute("name","cnpj");

        //alterar a mascara
        document.getElementById("Inputcpf/cnpj").setAttribute("onkeydown","javascrip: fMascCnpj(this, mCnpj);");
    }
}
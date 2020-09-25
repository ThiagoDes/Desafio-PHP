/* Funcoes para validar os campos do formulario */
function validar() {
    try {
        /* Inicio das validações */
        /* Validação de data - class='valid_date' */
        dataValido();
        /* Validação de campos obrigatorios - class='required' */
        camposObrigatorios();
        /* Validação de email - class='valid_email' */
        emailValido();
        /* Validação de cpf - class='valid_cpf' */
        cpfValido();
        /* Validação de cnpj - class='valid_cnpj' */
        cnpjValido();
        /* Validação de Hora - class='valid_hora' */
        horaValida();
        /* Fim das validações */
        return true;
    } catch (strMsg) {
        notificar("alerta", strMsg);
        return false;
    }
}

function cpfValido() {
    var strMsg = "";
    $(".valid_cpf").each(function() {
        var erro = 0;
        var valor = $(this).val();
        var soma = 0;
        var r = new RegExp('[./-]', 'g');
        var valorInput = valor.replace(r, '');
        if (valorInput.length != 11 || valorInput == "00000000000" || valorInput == "11111111111" ||
            valorInput == "22222222222" || valorInput == "33333333333" || valorInput == "44444444444" ||
            valorInput == "55555555555" || valorInput == "66666666666" || valorInput == "77777777777" ||
            valorInput == "88888888888" || valorInput == "99999999999") {
            marcarCampo($(this));
        strMsg = "CPF inválido";
        erro++;
    }
        // Se já ocorreu um erro não faço mais testes
        if (erro <= 0) {

            for (i = 0; i < 9; i++)
                soma += parseInt(valorInput.charAt(i)) * (10 - i);
            var resto = 11 - (soma % 11);
            if (resto == 10 || resto == 11)
                resto = 0;
            if (resto != parseInt(valorInput.charAt(9)))
                erro++;
            soma = 0;
            for (i = 0; i < 10; i++)
                soma += parseInt(valorInput.charAt(i)) * (11 - i);
            resto = 11 - (soma % 11);
            if (resto == 10 || resto == 11)
                resto = 0;
            if (resto != parseInt(valorInput.charAt(10))) {
                marcarCampo($(this));
                strMsg = "CPF inválido";
                erro++;
            }
        }

        if (erro == 0) {
            desmarcarCampo($(this));
        }

    });
    if (strMsg) {
        throw strMsg;
    }
}


$(document).ready(function(){
    $(".maskCPF").inputmask({mask: ['999.999.999-99'], keepStatic: true });
    $(".maskCNPJ").inputmask({mask: ['99.999.999/9999-99'], keepStatic: true });
    $(".maskCPFCNPJ").inputmask({mask: ['999.999.999-99', '99.999.999/9999-99'], keepStatic: true });
    $(".maskCEP").inputmask({mask: ['99999-999'], keepStatic: true });
    $(".maskTelefone").inputmask({mask: ["(99) 9999-9999", "(99) 99999-9999", ], keepStatic: true });
    $(".maskAgencia").inputmask({mask: ["9999"], keepStatic: true });



    $(document).ready(function() {
        console.log('oi');
        $("#cep").blur(function() {
            var cep = $(this).val().replace(/\D/g, '');

            if (cep != "") {
                var validacep = /^[0-9]{8}$/;

                if(validacep.test(cep)) {
                    $("#address").val("...");
                    $("#neighborhood").val("...");
                    $("#city").val("...");
                    $("#uf").val("...");

                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            $("#address").val(dados.logradouro);
                            $("#neighborhood").val(dados.bairro);
                            $("#city").val(dados.localidade);
                            $("#select#uf").val(dados.uf);
                        }
                        else {
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } 
                else {
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } 
            else {
                limpa_formulário_cep();
            }
        });
});        

});

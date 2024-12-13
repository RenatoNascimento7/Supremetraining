document.addEventListener("DOMContentLoaded", function() {
    // Função para aplicar máscara de CPF
    function aplicarMascaraCPF(cpfInput) {
        cpfInput.addEventListener("input", function() {
            let value = cpfInput.value.replace(/\D/g, "");
            value = value.replace(/(\d{3})(\d)/, "$1.$2");
            value = value.replace(/(\d{3})(\d)/, "$1.$2");
            value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
            cpfInput.value = value;
        });
    }

    // Função para aplicar máscara de telefone
    function aplicarMascaraTelefone(telefoneInput) {
        telefoneInput.addEventListener("input", function() {
            let value = telefoneInput.value.replace(/\D/g, "");
            value = value.replace(/(\d{2})(\d)/, "($1) $2");
            value = value.replace(/(\d{4,5})(\d{4})$/, "$1-$2");
            telefoneInput.value = value;
        });
    }

    // Selecionar os campos e aplicar as máscaras
    aplicarMascaraCPF(document.getElementById("cpf"));
    aplicarMascaraTelefone(document.getElementById("celular"));
});

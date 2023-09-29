data_de_nascimento.addEventListener('input', function () {
    const data_de_nascimento = new Date(document.getElementById("data_de_nascimento").value);
    const hoje = new Date();
    const diferencaAnos = hoje.getFullYear() - data_de_nascimento.getFullYear();
    // Verifica se o mês de nascimento já ocorreu este ano
    if (hoje.getMonth() < data_de_nascimento.getMonth() || (hoje.getMonth() === data_de_nascimento.getMonth() && hoje.getDate() < data_de_nascimento.getDate())) {
        document.getElementById("ou_idade").value = diferencaAnos - 1;
    } else {
        document.getElementById("ou_idade").value = diferencaAnos;
    }
});
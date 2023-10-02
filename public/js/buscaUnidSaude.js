var campo = document.getElementById('unidSaude');
var sugestoes = document.getElementById('sugestionUnidSaude');
var codUnidSaude = document.getElementById('codUnidSaude');
var vetorSugestoes = [
    { nome: 'Centro de Dermatologia', codigo: '2425866' },
    { nome: 'Centro de Infectologia (SAE)', codigo: '7423039' },
    { nome: 'UPA', codigo: '7501366' },
    { nome: 'Cerest', codigo: '3761622' },
    { nome: 'Hospital Regional do Cariri', codigo: '6779522' },
    { nome: 'Hospital Infantil Maria Amelia Bezerra de Menezes', codigo: '2426072' },
    { nome: 'Hospital São Lucas', codigo: '2562499' },
    { nome: 'Vigilância à Saúde', codigo: '4011646' },
    { nome: 'Penitenciária (PIRC)', codigo: '3644618' },
    { nome: 'Unimed Pediátrica', codigo: '6569390' },
    { nome: 'Unimed Adulto', codigo: '3028429' }
];

campo.addEventListener('input', function () {
    var textoDigitado = campo.value.toLowerCase();
    sugestoes.innerHTML = ''; // Limpa as sugestões existentes

    // Filtra o vetor de sugestões com base no texto digitado
    var sugestoesFiltradas = vetorSugestoes.filter(function (sugestao) {
        return sugestao.nome.toLowerCase().startsWith(textoDigitado);
    });

    // Adiciona as sugestões filtradas ao datalist
    sugestoesFiltradas.forEach(function (sugestao) {
        var novaOpcao = document.createElement('option');
        novaOpcao.value = sugestao.nome;
        sugestoes.appendChild(novaOpcao);
    });
});

campo.addEventListener('input', function () {
    var sugestaoSelecionada = vetorSugestoes.find(function (sugestao) {
        return sugestao.nome === campo.value;
    });

    if (sugestaoSelecionada) {
        codUnidSaude.value = sugestaoSelecionada.codigo;
    } else {
        codUnidSaude.value = ''; // Limpa o campo se nenhuma sugestão correspondente for encontrada
    }
});

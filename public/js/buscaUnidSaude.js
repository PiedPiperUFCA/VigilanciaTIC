var campo = document.getElementById('unidSaude');
var sugestoes = document.getElementById('sugestionUnidSaude');
var vetorSugestoes = [
    'Centro de Dermatologia',
    'Centro de Infectologia  (SAE)',
    'UPA',
    'Cerest',
    'Hospital Regional do Cariri',
    'Hospital Infantil Maria Amelia Bezerra de Menezes',
    'Hospital São Lucas',
    'Vigilância à saúde',
    'Penitênciaria (PIRC)',
    'Unimed Pediatrica',
    'Unimed Adulto'
];

campo.addEventListener('input', function () {
    var textoDigitado = campo.value.toLowerCase();
    sugestoes.innerHTML = ''; // Limpa as sugestões existentes

    // Filtra o vetor de sugestões com base no texto digitado
    var sugestoesFiltradas = vetorSugestoes.filter(function (sugestao) {
        return sugestao.toLowerCase().startsWith(textoDigitado);
    });

    // Adiciona as sugestões filtradas ao datalist
    sugestoesFiltradas.forEach(function (sugestao) {
        var novaOpcao = document.createElement('option');
        novaOpcao.value = sugestao;
        sugestoes.appendChild(novaOpcao);
    });
});
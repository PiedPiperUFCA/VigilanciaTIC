var field = document.getElementById('unidSaude');
var suggestion = document.getElementById('sugestionUnidSaude');
var codUnidSaude = document.getElementById('codUnidSaude');
var vetorSugestoes = [
    { name: 'Centro de Dermatologia', code: '2425866' },
    { name: 'Centro de Infectologia (SAE)', code: '7423039' },
    { name: 'UPA', code: '7501366' },
    { name: 'Cerest', code: '3761622' },
    { name: 'Hospital Regional do Cariri', code: '6779522' },
    { name: 'Hospital Infantil Maria Amelia Bezerra de Menezes', code: '2426072' },
    { name: 'Hospital São Lucas', code: '2562499' },
    { name: 'Vigilância à Saúde', code: '4011646' },
    { name: 'Penitenciária (PIRC)', code: '3644618' },
    { name: 'Unimed Pediátrica', code: '6569390' },
    { name: 'Unimed Adulto', code: '3028429' }
];

//é criado um datalist dinâmico
var dataList = document.createElement('datalist');
dataList.id = 'datalist-sugestoes';


field.setAttribute('list', 'datalist-sugestoes');


document.body.appendChild(dataList);

field.addEventListener('input', function () {
    var textTyped = field.value.toLowerCase();
    
 
    dataList.innerHTML = '';

    // Filtra o vetor de sugestões com base no texto digitado
    var suggestionFiltered = vetorSugestoes.filter(function (suggestion) {
        return suggestion.name.toLowerCase().startsWith(textTyped);
    });

    // Adiciona as sugestões filtradas
    suggestionFiltered.forEach(function (suggestion) {
        var newOption = document.createElement('option');
        newOption.value = suggestion.name;
        dataList.appendChild(newOption);
    });

    var suggestionSelected = vetorSugestoes.find(function (suggestion) {
        return suggestion.name === field.value;
    });

    if (suggestionSelected) {
        codUnidSaude.value = suggestionSelected.code;
    } else {
        codUnidSaude.value = ''; 
    }
});

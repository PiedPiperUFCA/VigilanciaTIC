const estadoSelect = document.getElementById('ufNotificacao');
const cidadeSelect = document.getElementById('municipioNotificacao');

// Função para buscar estados na API do IBGE
async function buscarEstados() {
    const response = await fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados');
    estadosList = await response.json();

    estadoSelect.innerHTML = '<option value="">Selecione um estado</option>';

    estadosList.forEach(estado => {
        const option = document.createElement('option');
        option.value = estado.id;
        option.textContent = estado.nome;
        estadoSelect.appendChild(option);
    });
}

// Função para buscar cidades de um estado na API do IBGE
async function buscarCidades() {
    const estadoId = estadoSelect.value;

    if (!estadoId) {
        cidadeSelect.innerHTML = '<option value="">Selecione um estado primeiro</option>';
        return;
    }

    const response = await fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoId}/municipios`);
    const cidades = await response.json();

    cidadeSelect.innerHTML = '<option value="">Selecione uma cidade</option>';

    cidades.forEach(cidade => {
        const option = document.createElement('option');
        option.value = cidade.id;
        option.textContent = cidade.nome;
        cidadeSelect.appendChild(option);
    });
}

// Inicializar a lista de estados
buscarEstados();
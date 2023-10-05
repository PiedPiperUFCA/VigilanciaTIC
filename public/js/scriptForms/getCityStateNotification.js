const stateSelect = document.getElementById('ufNotification');
const citySelect = document.getElementById('cityNotification');


async function fetchStates() {
    const response = await fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados');
    const statesList = await response.json();

    stateSelect.innerHTML = '<option value="">Selecione um estado</option>';

    statesList.forEach(state => {
        const option = document.createElement('option');
        option.value = state.id;
        option.textContent = state.nome;
        stateSelect.appendChild(option);
    });
    
}


async function fetchCities() {
    const stateId = stateSelect.value;

    if (!stateId) {
        citySelect.innerHTML = '<option value="">Selecione um estado primeiro</option>';
        return;
    }

    const response = await fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${stateId}/municipios`);
    const cities = await response.json();

    citySelect.innerHTML = '<option value="">Selecione a cidade</option>';

    cities.forEach(city => {
        const option = document.createElement('option');
        option.value = city.id;
        option.textContent = city.nome;
        citySelect.appendChild(option);
    });
}


fetchStates();

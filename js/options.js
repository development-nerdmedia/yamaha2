const apiUrl = 'https://raw.githubusercontent.com/jmcastagnetto/ubigeo-peru-aumentado/main/ubigeo_distrito.json';

const departamentoSelect = document.getElementById('departamento');
const provinciaSelect = document.getElementById('provincia');
const distritoSelect = document.getElementById('distrito');



// Realizar el llamado a la API usando fetch
fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        const departamentoSet = new Set();
        const provinciaSet = new Set();
        const distritoSet = new Set();

        data.forEach(obj => {
            departamentoSet.add(obj.departamento);
            provinciaSet.add(obj.provincia);
            distritoSet.add(obj.distrito);
        });

        departamentoSet.forEach(departamento => {
            const option = document.createElement('option');
            option.value = departamento;
            option.text = departamento;
            departamentoSelect.appendChild(option);
        });

        // Agregar un evento de cambio al select de departamentos
        departamentoSelect.addEventListener('change', function () {
            provinciaSelect.innerHTML = '<option value="Ciudad:">Provincia:</option>';
            distritoSelect.innerHTML = '<option value="Ciudad:">Distrito:</option>';

            const selectedDepartamento = departamentoSelect.value;
            const provincias = data
                .filter(obj => obj.departamento === selectedDepartamento)
                .map(obj => obj.provincia);

            const provinciasUnicas = [...new Set(provincias)];
            provinciasUnicas.forEach(provincia => {
                const option = document.createElement('option');
                option.value = provincia;
                option.text = provincia;
                provinciaSelect.appendChild(option);
            });
        });

        provinciaSelect.addEventListener('change', function () {
            distritoSelect.innerHTML = '';

            const selectedProvincia = provinciaSelect.value;

            const distritos = data
                .filter(obj => obj.provincia === selectedProvincia)
                .map(obj => obj.distrito);

            const distritosUnicos = [...new Set(distritos)];
            distritosUnicos.forEach(distrito => {
                const option = document.createElement('option');
                option.value = distrito;
                option.text = distrito;
                distritoSelect.appendChild(option);
            });
        });
    })
    .catch(error => console.error('Error al obtener datos de la API:', error));
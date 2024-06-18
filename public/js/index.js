function confirmDelete(id) {
    
    
    alertify.confirm("This is a confirm dialog.",
        function(e) {
            if (e) {
                let form = document.createElement('form')
                form.method = 'POST'
                form.action = `/persons/${id}`
                form.innerHTML = '@csrf @method("DELETE")'
                document.body.appendChild(form)
                form.submit()

            } else {
                return false
            }

        });
}


let caracteristicaIndex = 1;

function addCaracteristica() {
    const container = document.getElementById('caracteristicas-container');
    const newCaracteristica = document.createElement('div');
    newCaracteristica.classList.add('caracteristica');
    newCaracteristica.innerHTML = `
        <input name="caracteristicas[${caracteristicaIndex}][nombre]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2" type="text" placeholder="Nombre de la característica">
        <input name="caracteristicas[${caracteristicaIndex}][valor]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2" type="text" placeholder="Valor de la característica">
    `;
    container.appendChild(newCaracteristica);
    caracteristicaIndex++;
}
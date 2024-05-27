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
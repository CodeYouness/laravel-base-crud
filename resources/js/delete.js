const deleteForms = document.querySelectorAll('form.animal-delete');

deleteForms.forEach(deleteFromElement => {

    deleteFromElement.addEventListener('submit', function (event) {
        event.preventDefault();

        if (window.confirm('what a fuck?')) {
            this.submit()
        }
    })
});


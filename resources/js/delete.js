const deleteForms = document.querySelectorAll('form.animal-delete');

deleteForms.forEach(deleteFromElement => {

    deleteFromElement.addEventListener('submit', function (event) {
        event.preventDefault();

        const animalName = this.getAttribute('data-animal-name');
        const animalId = this.getAttribute('data-animal-id');

        if (window.confirm(`what a fuck? ${animalName} with ${animalId} id will be deleted`)) {
            this.submit()
        }
    })
});


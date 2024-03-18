const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

const tooltipTriggerList2 = document.querySelectorAll('[data-bs-toggle-second="tooltip"]')
const tooltipList2 = [...tooltipTriggerList2].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

var gridItems = document.querySelectorAll('.row');
for (var i = 0; i < gridItems.length; i++) {
    gridItems[i].addEventListener('click', function () {
        for (var j = 0; j < gridItems.length; j++) {
            gridItems[j].classList.remove('selected');
        }
        this.classList.add('selected');
    });
}
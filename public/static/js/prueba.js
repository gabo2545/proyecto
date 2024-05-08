
    document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll('[data-target]');
    const contents = document.querySelectorAll('[data-content]');

    menuItems.forEach(item => {
    item.addEventListener('click', function() {
    const target = this.getAttribute('data-target');

    // Oculta todos los contenidos
    contents.forEach(content => {
    content.classList.remove('active');
});

    // Muestra el contenido correspondiente al elemento de menú seleccionado
    document.querySelector(target).classList.add('active');
});
});
});


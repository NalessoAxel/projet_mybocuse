let modals = document.getElementsByClassName('modal');
let buttons = document.getElementsByClassName('modal-open');

for(let button of buttons){
    button.addEventListener('click', function (){
        let iterator = button.id.replace(/.+(\d+)$/, '$1');
        modals[iterator].style.display = 'block';
    })
}

const closeButtons = document.getElementsByClassName('modal-close');

for(let button of closeButtons) {
    button.addEventListener('click', function () {
        let iterator = button.id.replace(/.+(\d+)$/, '$1');
        modals[iterator].style.display = 'none';
    });
}

const modalBgs = document.getElementsByClassName('modal-background');

for(let background of modalBgs) {
    background.addEventListener('click', function () {
        let iterator = background.id.replace(/.+(\d+)$/, '$1');
        modals[iterator].style.display = 'none';
    });
}
const button = document.getElementById('button')
const modal = document.getElementById('page-modal')
const close = document.getElementsByClassName('modal-close')[0]

button.onclick = function () {
    modal.style.display = 'block'
}
close.onclick = function () {
    modal.style.display = 'none'
}

const button2 = document.getElementById('button2')
const modal2 = document.getElementById('page-modal2')
button2.onclick = function () {
    modal.style.display = 'block'
}


const button3 = document.getElementById('button3')
const modal3 = document.getElementById('page-modal3')
button3.onclick = function () {
    modal.style.display = 'block'
}



button.onclick = function () {
    modal.style.display = 'block'
}
close.onclick = function () {
    modal.style.display = 'none'
}

window.onclick = function(event) {
    if(event.target.className == 'modal-background') {
        modal.style.display = 'none'
    }
}
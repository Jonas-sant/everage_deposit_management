//Ocultando e Exibindo Elementos da Dashboard
function showElement(id_name){
    let element = document.querySelector(`#${id_name}`)
    let show = document.querySelector(`#show_${id_name}`)
    let hide = document.querySelector(`#hide_${id_name}`)

    element.classList.toggle('hidden');
    show.classList.toggle('hidden');
    hide.classList.toggle('hidden');
}

// Exibindo a data atual
let now = new Date
let weekDay = ['Dom.','Seg.','Ter.', "Qua.", "Qui.","Sex.","Sab."]
let month = ['Janeiro','Fevereiro','Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']
let dataExibition =  `${weekDay[now.getDay()]} ${now.getDate()} de ${month[now.getMonth()]} `

document.querySelector('#actualDate').innerHTML = dataExibition;

//Exibindo data no rodapé
document.querySelector('#year').innerHTML = now.getFullYear();


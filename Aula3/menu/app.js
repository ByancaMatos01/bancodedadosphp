const menu = document.querySelector('ul');
const burger = document.querySelector('#burger');
const linha1 = document.querySelector('#linha1');
const linha2 = document.querySelector('#linha2');
const linha3 = document.querySelector('#linha3');

burger.addEventListener('click',function(){
    menu.classList.toggle('exibir');
    linha1.classList.toggle('linha1Action');
    linha2.classList.toggle('linha2Action');
    linha3.classList.toggle('linha3Action');
});
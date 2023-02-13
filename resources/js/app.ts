import './bootstrap';
import * as $ from 'jquery';
import swall from 'sweetalert2'


let img = document.querySelector<HTMLImageElement>("img");


$('document').ready(() => {
    $(img).on("click", () => {
        swall.fire({
            title:"Sucesso",
            icon:'success',
            text:"Sucesso :)"
        })
    });
});










import './bootstrap';
import * as $ from 'jquery';
import swall from 'sweetalert2'


let img = document.querySelector<HTMLImageElement>("img");
let codClientes = document.querySelectorAll<HTMLTableCellElement>("#codCliente")

$('document').ready(() => {
    $(img).on("click", () => {
        swall.fire({
            title:"Sucesso",
            icon:'success',
            text:"Sucesso :)"
        })
    });

    codClientes.forEach(cod =>{
        $(cod).on("click",(event:any)=>{
            alert(event.target.innerHTML)
        })
    });
});










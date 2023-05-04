import { Modal } from "bootstrap";
let deleteBtns = document.getElementsByClassName('btn-delete-cert');
let modalConfirmDeleteCert = new Modal('#modalDelete');
// console.log("working");
// console.log({currentBtn});
Array.from(deleteBtns).forEach(btn => {
    btn.addEventListener('click',function(e){
        // modalConfirmDeleteCert.
        modalConfirmDeleteCert.show();
    });
});
// currentBtn.addEventListener('click',function(e){
//     console.log(e.target);
// });
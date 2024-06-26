 // a variável form está recebendo através do ID as informações do formulário
 const form = document.getElementById('form');
 const campos = document.querySelectorAll('.required');
 const spans = document.querySelectorAll('.span-required');
 const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;


 form.addEventListener('submit', (event)=>{
   event.preventDefault();
   emailValidate();
   mainPasswordValidate();
 });

 function setError(index) {
     campos[index].style.border = '3px solid #A4031F';
     spans[index].style.display = 'block';
 };

 function removeError(index) {
     campos[index].style.border = '';
     spans[index].style.display = '';
 };

 function emailValidate() {
     if (!emailRegex.test(campos[0])) {
         setError(0);
     } else {
         removeError(0);
     }
 };

 function mainPasswordValidate() {
     if (campos[1].value.length < 6) {
         setError(1);
     } else {
         removeError(1);
     }
 };


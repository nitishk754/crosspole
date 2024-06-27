// require('./bootstrap');

import { handleSubmit } from './components/FormService';



document.addEventListener("DOMContentLoaded",()=>{
    const form = document.getElementById('userForm');
    form.addEventListener("submit", async (e) => {
        e.preventDefault(); // prevent default page refresh on submission
        alert('form submitted')
        // await handleSubmit(form)
    });
});



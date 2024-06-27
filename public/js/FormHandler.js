document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('userForm');

    form.addEventListener('submit', async (e) => {
        e.preventDefault(); // prevent loading page onsubmit
        const formData = new FormData(form);

        // Display an info toast with no title
        toastr.success('Form submitted successfully')
        // alert('form submitted successfully');
    })

    const FetchUser = async () => {

    }

    const FetchRole = async () => {

    }
});

import toastr from "toastr";

export const errorMsg = (message) => {
    toastr.error(message, 'Error', {
        closeButton: true,
        progressBar: true,
    });
};

export const successMsg = (message) =>{
    toastr.success(message,'Success',{
        closeButton : true,
        progressBar : true
    })
}

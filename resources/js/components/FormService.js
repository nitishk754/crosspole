const axios = require('axios');
const { successMsg } = require('./message');
const { handleServerError } = require('./errorHandler');


export const handleSubmit = async (formData)=>{
    try {
        formData = new FormData(formData);
        successMsg("form Submitted successfully")
        // const response = await axios.post("/api/submit-form", formData);

        // if (response.status === 200) {
        //     // alert("form Submitted successfully");
        //     successMsg("form Submitted successfully")
        // }
    } catch (error) {
        handleServerError(error);
    }
}
export const FetchUser = async () => {

}

export const FetchRole = async () =>{

}

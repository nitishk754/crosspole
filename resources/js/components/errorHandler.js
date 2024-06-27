import { errorMsg } from "./message";

export const handleValidationError = (error) => {
    const validationError = error.response.data.data;
    if (validationError) {
        const validationMessage = [];
        Object.keys(validationError).forEach((field) => {
            const message = validationError[field];

            console.log(`final Message : ${message}`)
            validationMessage.push(message[0]);
        })
        console.log(validationMessage);
        errorMsg(validationMessage[0]);
        throw new Error('Validation error')
    }
    else if (error.response.data.message) {
        errorMsg(error.response.data.message);
        throw new error(error.response.data.message);
    } else {
        errorMsg("Something went wrong !")
        throw new error("Something went wrong !");
    }
}

export const handleServerError = (error) => {
    if (error.response) {
        const httpStatus = error.response.status;
        if (httpStatus === 422) {
            handleValidationError(error);
        }else if(httpStatus === 401){
            console.log('Server error:', error.response.data);
            errorMsg('Access Denied. Login again!');
            throw new Error('Access Denied. Login again!');
        }
        else {
            console.log('Server error:', error.response.data);
            errorMsg('Internal Server Error');
            throw new Error('Internal Server Error');
        }
    } else if (error.request) {
        console.log("No Response from server : ", error.message);
        errorMsg("No Response from server");
        throw new Error('No Response from server');
    } else {
        console.log('Request setup error:', error.message);
        errorMsg('Request setup error');
        throw new Error('Request setup erro');
    }
}

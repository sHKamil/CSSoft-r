export function validateEmail (email, maxLenght){

    const regex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

    if(email === undefined) return {is_valid: "NotValidatedYet", message: ''};
    if(!email) return {is_valid: false, message: 'To pole jest wymagane'};
    if (!regex.test(email)) {
      return {is_valid: false, message: 'Adres e-mail musi być prawidłowy'};
    }
    if (email.length > maxLenght) {
      return {is_valid: false, message: 'Za dużo znaków (Max 250)'};
    }
    return {is_valid: true, message: ''};
}
export function validateEmail (email, maxLenght, required){

    const regex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
    console.log(email);
    if(email === undefined) return {is_valid: "NotValidatedYet", message: ''};
    if(!email && !required) return {is_valid: false, message: ''};
    if(!email) return {is_valid: false, message: 'To pole jest wymagane'};
    if (!regex.test(email)) {
      return {is_valid: false, message: 'Adres e-mail musi być prawidłowy'};
    }
    if (email.length > maxLenght) {
      return {is_valid: false, message: 'Za dużo znaków (Max 250)'};
    }
    return {is_valid: true, message: ''};
}
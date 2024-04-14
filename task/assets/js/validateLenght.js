export function validateLength(input, min, max, zeroIncluded = true, required = false) {

    let value = zeroIncluded ? input.value.toString() : input.value.toString().replace(/^0+/, '');
    if (value.length > max) return 'Przekroczono limit znaków.';
    if(!required && value.length === 0) return true;
    if (value.length < min) return 'Niewystarczająca liczba znaków.';
    return true;
}

export function validateFieldLenght(input, errorField, min, max, zeroIncluded, required) {
    let validate = validateLength(input, min, max, zeroIncluded, required);
    if(validate !== true) {
        errorField.innerHTML = validate;
        return false;
    }
    errorField.innerHTML = '';
    return true;
}
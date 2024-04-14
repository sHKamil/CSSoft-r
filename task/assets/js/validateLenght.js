export function validateLength(input, min, max, zeroIncluded = 1) {

    let value = zeroIncluded ? input.value.toString() : input.value.toString().replace(/^0+/, '');
    if (value.length > max) return 'Przekroczono limit znaków.';
    if (value.length < min) return 'Niewystarczająca liczba znaków.';
    return true;
}

export function validateFieldLenght(input, errorField, min, max, zeroIncluded) {
    let validate = validateLength(input, min, max, zeroIncluded);
    if(validate !== true) {
        errorField.innerHTML = validate;
        return false;
    }
    errorField.innerHTML = '';
    return true;
}
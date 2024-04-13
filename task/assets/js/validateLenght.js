export function validateLength(input, min, max, zeroIncluded = 1) {

    let value = zeroIncluded ? input.value.toString() : input.value.toString().replace(/^0+/, '');
    console.log(value);
    if (value.length > max) return 'Przekroczono limit znaków.';
    if (value.length < min) return 'Niewystarczająca liczba znaków.';
    return true;
}

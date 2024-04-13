import { validateLength } from "./validateLenght.js";

let fields = {
    companyName: {
        field: document.getElementById('company_name'),
        errorField: document.getElementById('name_error'),
        lenght: {
            min: 1,
            max: 100,
            zeroIncluded: 1
        }
    },
    address: {
        field: document.getElementById('address'),
        errorField: document.getElementById('address_error'),
        lenght: {
            min: 0,
            max: 100,
            zeroIncluded: 1
        }
    },
    nip: {
        field: document.getElementById('nip'),
        errorField: document.getElementById('nip_error'),
        lenght: {
            min: 10,
            max: 10,
            zeroIncluded: 0
        }
    },
    description: {
        field: document.getElementById('description'),
        errorField: document.getElementById('description_error'),
        lenght: {
            min: 0,
            max: 1000,
            zeroIncluded: 1
        }
    }
}
let companyForm = document.getElementById('companyForm');

function validateFieldLenght(input, errorField, min, max, zeroIncluded) {
    let validate = validateLength(input, min, max, zeroIncluded);
    if(validate !== true) {
        errorField.innerHTML = validate;
        return false;
    }
    errorField.innerHTML = '';
    return true;
}

Object.values(fields).forEach(input => {
    input.field.addEventListener('change', () => {
        validateFieldLenght(input.field, input.errorField, input.lenght.min, input.lenght.max, input.lenght.zeroIncluded);
    });
});

companyForm.addEventListener('submit', function(event) {
    event.preventDefault();
    let errors = 0;
    Object.values(fields).forEach(input => {
        if(validateFieldLenght(input.field, input.errorField, input.lenght.min, input.lenght.max, input.lenght.zeroIncluded) !== true) errors ++;
    });
    if(errors === 0) companyForm.submit()
});

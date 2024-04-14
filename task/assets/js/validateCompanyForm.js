import { validateFieldLenght } from "./validateLenght.js";

let fields = {
    companyName: {
        field: document.getElementById('company_name'),
        errorField: document.getElementById('name_error'),
        lenght: {
            min: 1,
            max: 100,
            zeroIncluded: true
        },
        required: true
    },
    address: {
        field: document.getElementById('address'),
        errorField: document.getElementById('address_error'),
        lenght: {
            min: 0,
            max: 100,
            zeroIncluded: true
        },
        required: false
    },
    nip: {
        field: document.getElementById('nip'),
        errorField: document.getElementById('nip_error'),
        lenght: {
            min: 10,
            max: 10,
            zeroIncluded: false
        },
        required: true
    },
    description: {
        field: document.getElementById('description'),
        errorField: document.getElementById('description_error'),
        lenght: {
            min: 0,
            max: 1000,
            zeroIncluded: true
        },
        required: false
    }
}

Object.values(fields).forEach(input => {
    input.field.addEventListener('keyup', () => {
        validateFieldLenght(input.field, input.errorField, input.lenght.min, input.lenght.max, input.lenght.zeroIncluded, input.required);
    });
});

companyForm.addEventListener('submit', function(event) {
    event.preventDefault();
    let errors = 0;
    Object.values(fields).forEach(input => {
        if(validateFieldLenght(input.field, input.errorField, input.lenght.min, input.lenght.max, input.lenght.zeroIncluded, input.required) !== true) errors ++;
    });
    if(errors === 0) companyForm.submit()
});

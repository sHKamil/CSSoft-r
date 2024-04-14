import { validateEmail } from "./validateEmail.js";
import { validateFieldLenght } from "./validateLenght.js";

let fields = {
    employeeName: {
        field: document.getElementById('employee_name'),
        errorField: document.getElementById('name_error'),
        lenght: {
            min: 1,
            max: 50,
            zeroIncluded: true,
        },
        required: true
    },
    last_name: {
        field: document.getElementById('last_name'),
        errorField: document.getElementById('last_name_error'),
        lenght: {
            min: 1,
            max: 50,
            zeroIncluded: true,
        },
        required: true
    },
    phone: {
        field: document.getElementById('phone'),
        errorField: document.getElementById('phone_error'),
        lenght: {
            min: 9,
            max: 20,
            zeroIncluded: true,
        },
        required: false
    },
    description: {
        field: document.getElementById('description'),
        errorField: document.getElementById('description_error'),
        lenght: {
            min: 0,
            max: 1000,
            zeroIncluded: true,
        },
        required: false
    }
}
let form = document.getElementById('employeeForm');
let email = {
    field: document.getElementById('email'),
    errorField: document.getElementById('email_error'),
    lenght: {
        min: 0,
        max: 100,
    },
    required: false
}


email.field.addEventListener('keyup', () => {
    email.errorField.innerHTML = validateEmail(email.field.value, email.lenght.max, email.required).message;
});

Object.values(fields).forEach(input => {
    input.field.addEventListener('keyup', () => {
        validateFieldLenght(input.field, input.errorField, input.lenght.min, input.lenght.max, input.lenght.zeroIncluded, input.required);
    });
});

form.addEventListener('submit', function(event) {
    event.preventDefault();
    let errors = 0;
    Object.values(fields).forEach(input => {
        if(validateFieldLenght(input.field, input.errorField, input.lenght.min, input.lenght.max, input.lenght.zeroIncluded, input.required) !== true) errors ++;
    });
    let emailIsValid = validateEmail(email.field.value, email.lenght.max);
    if(!emailIsValid.is_valid){
        email.errorField.innerHTML = emailIsValid.message;
        errors ++;
    }
    if(errors === 0) form.submit()
});
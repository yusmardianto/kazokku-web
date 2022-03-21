$(function () {
    $("form#form-contact").validate({
        rules: {
            contact_name: "required",
            contact_company: "required",
            contact_email: {
                required: true,
                email: true,
            },
            contact_phone: {
                required: true,
                number: true,
            },
            contact_message: "required",
        },
        // Specify validation error messages
        messages: {
            contact_name: "Please enter your contact name",
            contact_company: "Please enter your contact company",
            contact_email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
            },
            contact_phone: {
                required: "Please enter your contact phone",
                number: "Please enter your contact phone as a numerical value",
            },
            contact_message: "Please enter your contact message",
        },
        submitHandler: function (form) {
            form.submit();
        },
    });
});

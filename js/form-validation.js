    /* =============================
       FORM VALIDATION (ALL FORMS)
    ============================= */
    const forms = document.querySelectorAll('.needs-validation');

    forms.forEach(form => {
        form.addEventListener('submit', function (event) {

            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                handleFormSubmit(form);
            }

            form.classList.add('was-validated');
        });
    });

    /* =============================
       FORM SUBMIT LOADER
    ============================= */
    function handleFormSubmit(form) {

        const button = form.querySelector('#submitBtn');
        const loader = form.querySelector('#btnLoader');
        const text = form.querySelector('#btnText');

        if (loader) loader.classList.remove('d-none');
        if (text) text.innerText = "Sending...";
        if (button) button.disabled = true;

        // delay for UX (optional)
        setTimeout(() => {
            form.submit();
        }, 1200);
    }
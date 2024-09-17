const getScript = (forms, apiKey, apiSecret) => {
    const formHandlers = handleForms();

    if (!forms.length) {
        return null;
    }

    const formsToString = forms.map(form => {
        return `'${form}'`;
    }).join(',');

    return `
        // Designated Leads Dashboard API (henrik@designated.nl)
        document.addEventListener('DOMContentLoaded', function() {
            init();
        });

        ${formHandlers}

        const push = (data) => {
            fetch('https://leads.designated.site/api/v1/leads', {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    'Content-type': 'application/json; charset=UTF-8',
                    'Authorization': 'Basic ' + btoa('${apiKey}:${apiSecret}')
                },
            })
        }

        function getGclidFromUrl($url)
        {
            const parsedUrl = new URL($url);
            return parsedUrl.searchParams.get('gclid');
        }

        function getFormKey($formId, $key) {
            const forms = [${formsToString}];
            forms.forEach(form => {
                const formFields = form.split(':');
                if (formFields[0] === $formId) {
                    return formFields[$key];
                }
            });
        }
    `
}

const handleForms = () => {
    return `
        const init = () => {
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                const formKey = form.querySelector('input[name="key"]');
                const trackableFormKeys = getFormKey(formKey.value, 0);

                if (!formKey || !trackableFormKeys || trackableFormKeys != formKey.value) {
                    return;
                }

                const emailField = getFormKey(formKey.value, 1);
                const phoneField = getFormKey(formKey.value, 2);

                if (!trackableFormKeys.includes(formKey.value)) {
                    return
                }

                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formData = new FormData(form);
                    const data = {};

                    formData.forEach((value, key) => {
                        if (emailField && key === emailField) {
                            data['email'] = value;
                        }

                        if (phoneField && key === phoneField) {
                            data['phonenumber'] = value;
                        }
                    });
            
                    const urlParams = new URLSearchParams(window.location.search);
                    
                    urlParams.forEach((value, key) => {
                        if (key == 'gclid') {
                            data[key] = value;
                        }
                    });

                    push(data);
                    form.submit();
                });
            });
        }
    `
}

export default getScript;
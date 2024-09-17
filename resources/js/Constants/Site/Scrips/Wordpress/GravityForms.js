const getScript = (forms, apiKey, apiSecret) => {
    const formHandlers = handleForms(apiKey, apiSecret);

    if (!forms.length) {
        return null;
    }

    const formsToString = forms.map(form => {
        return `'${form}'`;
    }).join(',');

    return `
        // Designated Leads Dashboard API (henrik@designated.nl)
        ${formHandlers}

        function getGclidFromUrl($url)
        {
            $parsedUrl = parse_url($url);
            parse_str($parsedUrl['query'], $query);
            return $query['gclid'];
        }

        function getFormKey($formId, $key) {
            $forms = [${formsToString}];
            foreach ($forms as $form) {
                $formFields = explode(':', $form);
                if ($formFields[0] === $formId) {
                    return $formFields[$key];
                }
            }
            return null;
        }
    `
}

const handleForms = (apiKey, apiSecret) => {
    return `add_action('gform_after_submission','handle_form_submission',10,2);function handle_form_submission($entry, $form)
{
    $formIds = getFormKey($form["id"], 0);
    if (!$formIds || $formIds != $form["id"])) {

    $email = getFormKey($form["id"], 1);
    $phonenumber = getFormKey($form["id"], 2);
    $gclid = getGclidFromUrl(rgar($entry, getFormKey($form["id"], 3)));

    if (!$glcid) {
        return;
    }

    $mappedFields = [
        'gclid' => $gclid,
        'conversion_time' => now(),
    ];

    if ($email) {
        $mappedFields['email'] = rgar($entry, $email);
    }

    if ($phonenumber) {
        $mappedFields['phonenumber'] = rgar($entry, $phonenumber);
    }

    $response = wp_remote_post('https://leads.designated.tools/api/v1/leads', [
        'body' => json_encode($mappedFields),
        'headers' => [
            'Content-Type' => 'application/json',
        ],
        'auth' => [
            'username' => '${apiKey}',
            'password' => '${apiSecret}',
        ],
    ]);
}`
}

export default getScript;
const generateRandomString = () => {
    return [...Array(80)].map(() => Math.random().toString(36)[2]).join('');
}

const SiteObject = {
    api_key: generateRandomString(),
    api_secret: generateRandomString(),
    domain: '',
    conversion_action_id: '',
    customer_id: '',
    id: Math.random().toString(36).substring(7),
}

export default SiteObject;
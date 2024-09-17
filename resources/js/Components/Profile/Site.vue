<script setup>
import TextInput from '@/Components/TextInput.vue';
import DisabledInput from '@/Components/DisabledInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import SelectInput from '@/Components/SelectInput.vue';
import CodeBlock from '@/Components/CodeBlock.vue';
import TagTextInput from '@/Components/TagTextInput.vue';
import getGravityFormsScript from '@/Constants/Site/Scrips/Wordpress/GravityForms';
import getContactForm7Script from '@/Constants/Site/Scrips/Wordpress/ContactForm7';
import getLightspeedFormsScript from '@/Constants/Site/Scrips/Lightspeed/LightspeedForms';
import { ref, computed, watch } from 'vue';

const emit = defineEmits(['deleteSite']);

const websiteEnvironment = ref(null);
const websiteFormType = ref(null);
const websiteFormIds = ref([]);

const props = defineProps({
    site: {
        type: Object,
        required: true,
    },
    errors: {
        type: Object,
        required: false,
    }
});

const handleDeleteSite = () => {
    emit('deleteSite', props.site.id);
}

const updateWebsiteFormIds = (tags) => {
    websiteFormIds.value = tags.map(tag => tag.value);
}

const getEnvironments = computed(() => {
    return ['Wordpress', 'Lightspeed'];
});

const getEnvironmentFormTypes = computed(() => {
    if (websiteEnvironment.value === 'Wordpress') {
        return ['Gravity Forms', 'Contact Form 7'];
    }

    return ['Lightspeed Forms'];
});

const getEnvironmentScripts = computed(() => {
    if (websiteEnvironment.value === 'Wordpress') {
        if (websiteFormType.value === 'Gravity Forms') {
            return getGravityFormsScript(websiteFormIds.value, props.site.api_key, props.site.api_secret);
        } else if (websiteFormType.value === 'Contact Form 7') {
            return getContactForm7Script(websiteFormIds.value, props.site.api_key, props.site.api_secret);
        }
    } else if (websiteEnvironment.value === 'Lightspeed') {
        return getLightspeedFormsScript(websiteFormIds.value, props.site.api_key, props.site.api_secret);
    };
});

const getEnvironmentScriptDescription = computed(() => {
    if (websiteEnvironment.value === 'Wordpress') {
        return 'Voeg dit script toe aan de functions.php in je Wordpress thema';
    } else {
        return 'Voeg dit script toe aan de header van je Lightspeed thema';
    }
})


</script>

<template>
    <div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl w-full">
        <div class="px-4 py-6 sm:p-8">
            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-12">
                <div class="sm:col-span-12">
                    <InputLabel for="site-domain" value="Website domein" />

                    <TextInput name="site-domain" type="text" class="mt-1 block w-full" v-model="site.domain"
                        required />

                    <InputError class="mt-2" :message="errors?.domain" />
                </div>

                <div class="sm:col-span-6">
                    <InputLabel for="site-api-key" value="Website API Key" />

                    <DisabledInput name="site-api-key" :value="site.api_key" />
                </div>

                <div class="sm:col-span-6">
                    <InputLabel for="site-api-secret" value="Website API Secret" />

                    <DisabledInput name="site-api-secret" :value="site.api_secret" />
                </div>

                <div class="sm:col-span-6">
                    <InputLabel for="site-customer-id" value="Google Ads customer ID" />

                    <TextInput name="site-customer-id" type="text" class="mt-1 block w-full"
                        v-model="site.customer_id" />

                    <InputError class="mt-2" :message="errors?.customer_id" />
                </div>

                <div class="sm:col-span-6">
                    <InputLabel for="site-conversion-action-id" value="Google Ads conversion action ID" />

                    <TextInput name="site-conversion-action-id" type="text" class="mt-1 block w-full"
                        v-model="site.conversion_action_id" />

                    <InputError class="mt-2" :message="errors?.conversion_action_id" />
                </div>

                <div class="sm:col-span-6">
                    <InputLabel for="site-google-ads-id" value="Website Type" />


                    <SelectInput v-model="websiteEnvironment">
                        <option v-for="environment in getEnvironments" :value="environment">{{ environment }}</option>
                    </SelectInput>
                </div>

                <div class="sm:col-span-6" v-if="websiteEnvironment">
                    <InputLabel for="site-google-ads-id" value="Website formulier type" />


                    <SelectInput v-model="websiteFormType">
                        <option v-for="formType in getEnvironmentFormTypes" :value="formType">{{ formType }}</option>
                    </SelectInput>
                </div>

                <div class="sm:col-span-12" v-if="websiteEnvironment && websiteFormType">
                    <TagTextInput @update-tags="updateWebsiteFormIds">
                    </TagTextInput>
                </div>

                <div class="sm:col-span-12"
                    v-if="websiteEnvironment && websiteFormType && getEnvironmentScripts && websiteFormIds.length">
                    <CodeBlock :code="getEnvironmentScripts" :description="getEnvironmentScriptDescription">
                    </CodeBlock>
                </div>

                <div class="sm:col-span-12 flex justify-end">
                    <div @click="handleDeleteSite"
                        class="inline-flex cursor-pointer items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Verwijderen
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
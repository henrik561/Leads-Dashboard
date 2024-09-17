<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Checkbox from '@/Components/Checkbox.vue';
import Site from '@/Components/Profile/Site.vue';
import SiteObject from '@/Constants/Site/SiteObject'
import { onMounted } from 'vue';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const props = defineProps({
    user: {
        type: Object,
        required: false,
    },
});

const page = usePage();

const form = useForm({
    name: props.user?.name ?? '',
    email: props.user?.email ?? '',
    password: '',
    password_confirmation: '',
    roles: props.user?.roles?.map(role => role.name) ?? [],
    sites: props.user?.sites?.map(site => ({
        api_key: site.api_key,
        api_secret: site.api_secret,
        domain: site.domain,
        conversion_action_id: site.conversion_action_id,
        customer_id: site.customer_id,
        id: Math.random().toString(36).substring(7),
    })) ?? [],
});

const userHasRole = (role) => {
    return props.user?.roles.some(userRole => userRole.name === role);
}

const handleUserRoleChange = ([checked, role]) => {
    if (form.roles.includes(role)) {
        form.roles = form.roles.filter(formRole => formRole !== role);
    } else {
        form.roles.push(role);
    }
}

const handleAddSite = () => {
    form.sites.push(SiteObject);
}

const handleDeleteSite = (siteId) => {
    form.sites = form.sites.filter(site => site.id !== siteId);
}

const handleSubmit = () => {
    if (!props.user) {
        form.post(route('admin.users.store'), {
            onSuccess: () => {
                toast.success('Gebruiker aangemaakt');
            },
            onError: () => {
                toast.error('Er is iets misgegaan');
            },
        });
        return;
    }

    form.patch(route('admin.users.update', { user: props.user.id }), {
        onSuccess: () => {
            toast.success('Gebruiker opgeslagen');
        },
        onError: () => {
            toast.error('Er is iets misgegaan');
        },
    });
}

const handleDelete = () => {
    form.delete(route('admin.users.destroy', { user: props.user.id }), {
        onSuccess: () => {
            toast.success('Gebruiker verwijderd');
        },
        onError: () => {
            toast.error('Er is iets misgegaan');
        },
    });
}

onMounted(() => {
    if (!props.user || props.user?.sites?.length == 0) {
        handleAddSite();
    }
});

</script>

<template>

    <Head title="Gebruiker toevoegen" />

    <AuthenticatedLayout>
        <div class="mt-8 flow-root relative">
            <div @click="handleDelete" v-if="user" class="absolute -top-8 right-0 cursor-pointer">
                <i class="fa-duotone fa-solid text-red-500 fa-trash"></i>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="space-y-10 divide-y divide-gray-900/10">
                    <form @submit.prevent="handleSubmit">
                        <!-- Personal Information -->
                        <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3">
                            <div class="px-4 sm:px-0">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Persoonlijke informatie</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Gebruik een permanent adres waar je post
                                    kunt ontvangen.</p>
                            </div>

                            <div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                                <div class="px-4 py-6 sm:p-8">
                                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="sm:col-span-3">
                                            <InputLabel for="name" value="Volledige naam" />

                                            <TextInput id="name" type="text" class="mt-1 block w-full"
                                                v-model="form.name" required autofocus autocomplete="name" />

                                            <InputError class="mt-2" :message="form.errors.name" />
                                        </div>

                                        <div class="sm:col-span-3">
                                            <InputLabel for="email" value="Email" />

                                            <TextInput id="email" type="email" class="mt-1 block w-full"
                                                v-model="form.email" required autocomplete="username" />

                                            <InputError class="mt-2" :message="form.errors.email" />
                                        </div>

                                        <div class="sm:col-span-3">
                                            <InputLabel for="password" value="Wachtwoord" />

                                            <TextInput id="password" type="password" class="mt-1 block w-full"
                                                v-model="form.password" autocomplete="password" />

                                            <InputError class="mt-2" :message="form.errors.password" />
                                        </div>

                                        <div class="sm:col-span-3">
                                            <InputLabel for="password-confirmation" value="Wachtwoord herhalen" />

                                            <TextInput id="password-confirmation" type="password"
                                                class="mt-1 block w-full" v-model="form.password_confirmation"
                                                autocomplete="password-confirmation" />

                                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                                        </div>

                                        <div class="sm:col-span-6">
                                            <InputLabel for="roles" value="Rollen" />

                                            <div class="flex flex-col gap-2">
                                                <Checkbox v-for="role in page.props.roles"
                                                    @update:checked="handleUserRoleChange" :checked="userHasRole(role)"
                                                    :value="role" :label="role">
                                                </Checkbox>
                                            </div>

                                            <InputError class="mt-2" :message="form.errors.roles" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sites -->
                        <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3">
                            <div class="px-4 sm:px-0 col-span-1">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Websites</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">De websites van de gebruiker</p>

                                <div class="mt-4">
                                    <div @click="handleAddSite"
                                        class="inline-flex cursor-pointer items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        Voeg wesite toe
                                    </div>
                                </div>
                                <InputError class="mt-2" :message="form.errors.sites" />
                            </div>

                            <div class="flex flex-col gap-8 col-span-2">
                                <Site v-for="(site, index) in form.sites" :site="site" :key="site.id"
                                    :errors="form.errors.sites" @delete-site="handleDeleteSite" />
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end gap-8 items-center">
                            <Link :href="route('admin.users.index')">Annuleren</Link>
                            <PrimaryButton>Opslaan</PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import User from '@/Components/Users/User.vue';
import EmptyState from '@/Components/Assets/EmptyState.vue';

const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
    trashedUsersCount: {
        type: Number,
        required: true,
    },
});

const getTrashedUsersCount = computed(() => {
    return props.trashedUsersCount.toLocaleString('en-US', {
        notation: 'compact',
        compactDisplay: 'short',
    });
});

const getUsersCount = computed(() => {
    return props.users.length.toLocaleString('en-US', {
        notation: 'compact',
        compactDisplay: 'short',
    });
})

</script>

<template>

    <Head title="Gebruikers" />

    <AuthenticatedLayout>
        <div class="mt-8 flow-root overflow-hidden">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">Gebruikers ({{ getUsersCount }})
                        </h1>
                        <p class="mt-2 text-sm text-gray-700">Een lijst van alle gebruikers in uw account, inclusief
                            hun naam, bedrijf, e-mail en rol.</p>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none flex gap-2 flex-row">
                        <Link
                            class="block rounded-md bg-gray-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600"
                            :href="route('admin.users.trashed.index')">Archief ({{ getTrashedUsersCount }})</Link>
                        <Link :href="route('admin.users.create')"
                            class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Toevoegen</Link>
                    </div>
                </div>
                <div class="mt-8 flow-root">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class=" relative isolate py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-0">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                            Email</th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                            Bedrijfsnaam</th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                            Role</th>
                                        <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-0">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody v-if="users.length" class="divide-y divide-gray-200 bg-white">
                                    <User v-for="user in users" :key="user.id" :user="user"></User>
                                </tbody>
                            </table>

                            <div v-if="!users.length" class="flex flex-col items-center justify-center w-full">
                                <EmptyState size="medium" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

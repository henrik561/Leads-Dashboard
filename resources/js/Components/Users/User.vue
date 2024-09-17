<script setup>
import { Link, router } from '@inertiajs/vue3';
import { computed } from 'vue';
import { useConfirmationDialog } from '@/Composables/useConfirmationDialog';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const { user } = defineProps({
    user: {
        type: Object,
        required: true,
    }
});

const { openConfirmationDialog } = useConfirmationDialog();

const getUserSite = computed(() => {
    const sites = user.sites.map(site => site.domain);
    return sites.join(', ');
});

const getUserRole = computed(() => {
    const sites = user.roles.map(site => site.name);
    return sites.join(', ');
});

const handleSoftDelete = () => {
    openConfirmationDialog({
        title: 'Weet u zeker dat u deze gebruiker wilt deactiveren?',
        description: 'Deze actie kan ongedaan worden gemaakt.',
        cancelText: 'Annuleer',
        confirmText: 'Deactiveer',
        onConfirm: () => {
            router.delete(route('admin.users.destroy', { user: user.id }), {
                preserveScroll: true,
                onSuccess: () => {
                    toast.success('Gebruiker is gedeactiveerd');
                },
                onError: () => {
                    toast.error('Er is iets fout gegaan bij het deactiveren van de gebruiker');
                },
            });
        },
        onCancel: () => {
        },
    });
}

</script>

<template>
    <tr>
        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
            {{ user.name }}</td>
        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
            user.email }}</td>
        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ getUserSite
            }}</td>
        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ getUserRole
            }}</td>
        <td
            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0 flex gap-3 items-center justify-end">
            <div @click.prevent="handleSoftDelete" class="text-red-600 cursor-pointer hover:text-red-900">
                Deactiveer<span class="sr-only">, {{ user.name
                    }}</span></div>
            <Link :href="route('admin.users.show', { 'user': user.id })" class="text-indigo-600 hover:text-indigo-900">
            Edit<span class="sr-only">, {{ user.name
                }}</span></Link>
        </td>
    </tr>
</template>
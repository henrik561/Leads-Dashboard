<script setup>
import { computed } from 'vue';
import { router } from '@inertiajs/vue3';
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

const handleDelete = () => {
    openConfirmationDialog({
        title: 'Weet u zeker dat u deze gebruiker wilt verwijderen?',
        description: 'Dit kan niet ongedaan gemaakt worden.',
        cancelText: 'Annuleer',
        confirmText: 'Verwijder',
        onConfirm: () => {
            router.delete(route('admin.users.trashed.destroy', { 'id': user.id }), {
                onSuccess: () => {
                    toast.success('Gebruiker is verwijderd');
                },
                onError: () => {
                    toast.error('Er is iets fout gegaan bij het verwijderen van de gebruiker');
                },
            });
        },
    });
}

const handleActivate = () => {
    openConfirmationDialog({
        title: 'Weet u zeker dat u deze gebruiker wilt heractiveren?',
        description: 'Dit kan ongedaan gemaakt worden.',
        cancelText: 'Annuleer',
        confirmText: 'Heractiveer',
        onConfirm: () => {
            router.put(route('admin.users.trashed.update', { 'id': user.id }), {
                onSuccess: () => {
                    toast.success('Gebruiker is heractiveerd');
                },
                onError: () => {
                    toast.error('Er is iets fout gegaan bij het heractiveren van de gebruiker');
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
            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0 flex gap-2 justify-end">
            <div @click.prevent="handleDelete" class="text-red-600 cursor-pointer hover:text-red-900">Verwijder<span
                    class="sr-only">,
                    {{ user.name
                    }}</span></div>
            <div @click.prevent="handleActivate" class="text-indigo-600 cursor-pointer hover:text-indigo-900">
                Heractiveer<span class="sr-only">, {{ user.name
                    }}</span></div>
        </td>
    </tr>
</template>
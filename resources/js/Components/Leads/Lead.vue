<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import { useUpdateLeadDialog } from '@/Composables/useUpdateLeadDialog';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const props = defineProps({
    lead: {
        type: Object,
        required: true,
    }
});

const { openUpdateLeadDialog } = useUpdateLeadDialog();
const { email, phone_number, conversion_time } = props.lead;

const getConversionTime = computed(() => {
    return Intl.DateTimeFormat('nl-NL', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
    }).format(new Date(conversion_time));
});

const getConversionValue = computed(() => {
    return new Intl.NumberFormat('nl-NL', {
        style: 'currency',
        currency: 'EUR',
    }).format(props.lead.conversion_value);
});

const handleUpdate = () => {
    openUpdateLeadDialog({
        lead: props.lead,
        onConfirm: (form) => {
            form.patch(route('leads.update', { id: props.lead.id }), {
                onSuccess: () => {
                    toast.success('Lead is gewijzigd');
                },
                onError: () => {
                    toast.error('Er is iets fout gegaan bij het wijzigen van de lead');
                },
            });
        }
    });
}
</script>

<template>
    <tr>
        <td class="relative py-4 pr-3 text-sm font-medium text-gray-900">
            {{ email }}
            <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100" />
            <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100" />
        </td>
        <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">{{ phone_number }}</td>
        <td class="hidden px-3 py-4 text-sm text-gray-500 md:table-cell">{{ getConversionTime }}</td>
        <td class="hidden px-3 py-4 text-sm text-gray-500 md:table-cell">{{ getConversionValue }}</td>
        <td class="relative py-4 pl-3 text-right text-sm font-medium">
            <Link href="#" @click.prevent="handleUpdate" class="text-indigo-600 hover:text-indigo-900 mr-4">
            Wijzig</Link>
        </td>
    </tr>
</template>
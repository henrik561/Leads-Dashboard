<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Lead from '@/Components/Leads/Lead.vue';
import EmptyState from '@/Components/Assets/EmptyState.vue';
import { useUpdateLeadDialog } from '@/Composables/useUpdateLeadDialog';
import UpdateLeadDialog from '@/Components/Dialogs/UpdateLeadDialog.vue';

const { state, closeUpdateLeadDialog } = useUpdateLeadDialog();

const props = defineProps({
    leads: {
        type: Object,
        required: true,
    },
    leadStatuses: {
        type: Array,
        required: true,
    },
});

</script>

<template>
    <AuthenticatedLayout>
        <div class="mt-8 flow-root overflow-hidden">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <table class="w-full text-left">
                    <thead class="bg-white">
                        <tr>
                            <th scope="col"
                                class="relative isolate py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">
                                E-mail
                                <div class="absolute inset-y-0 right-full -z-10 w-screen border-b border-b-gray-200" />
                                <div class="absolute inset-y-0 left-0 -z-10 w-screen border-b border-b-gray-200" />
                            </th>
                            <th scope="col"
                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                Telefoonnummer</th>
                            <th scope="col"
                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                Tijd van</th>
                            <th scope="col"
                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                Waarde</th>
                            <th scope="col" class="relative py-3.5 pl-3">
                                <span class="sr-only">Wijzig</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody v-if="leads.length">
                        <Lead v-for="lead in leads" :key="lead.id" :lead="lead"></Lead>
                    </tbody>
                </table>

                <div v-if="!leads.length" class="flex flex-col items-center justify-center w-full">
                    <EmptyState size="medium" />
                </div>
            </div>
        </div>

        <template v-slot:popups>
            <UpdateLeadDialog :isOpen="state.isOpen" :lead="state.lead" :leadStatuses="props.leadStatuses"
                @confirm="(form) => { state.onConfirm && state.onConfirm(form); closeUpdateLeadDialog(); }"
                @cancel="() => { state.onCancel && state.onCancel(); closeUpdateLeadDialog(); }" />
        </template>
    </AuthenticatedLayout>
</template>
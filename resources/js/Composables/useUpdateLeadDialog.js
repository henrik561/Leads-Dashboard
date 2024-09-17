// resources/js/composables/useUpdateLeadDialog.js
import { reactive } from 'vue';

const state = reactive({
    isOpen: false,
    lead: null,
});

function openUpdateLeadDialog(options) {
    state.onConfirm = options.onConfirm || null;
    state.lead = options.lead;
    state.isOpen = true;
}

function closeUpdateLeadDialog() {
    state.isOpen = false;
}

export function useUpdateLeadDialog() {
    return {
        state,
        openUpdateLeadDialog,
        closeUpdateLeadDialog,
    };
}

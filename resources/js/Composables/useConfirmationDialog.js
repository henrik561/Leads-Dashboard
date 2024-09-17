// resources/js/composables/useConfirmationDialog.js
import { reactive } from 'vue';

const state = reactive({
    isOpen: false,
    title: '',
    description: '',
    cancelText: '',
    confirmText: '',
    onConfirm: null,
    onCancel: null,
});

function openConfirmationDialog(options) {
    state.title = options.title || '';
    state.description = options.description || '';
    state.cancelText = options.cancelText || 'Cancel';
    state.confirmText = options.confirmText || 'Confirm';
    state.onConfirm = options.onConfirm || null;
    state.onCancel = options.onCancel || null;
    state.isOpen = true;
}

function closeConfirmationDialog() {
    state.isOpen = false;
}

export function useConfirmationDialog() {
    return {
        state,
        openConfirmationDialog,
        closeConfirmationDialog,
    };
}

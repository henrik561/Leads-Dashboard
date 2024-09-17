<script setup>
import { computed } from 'vue';

const emit = defineEmits(['update:checked']);

const props = defineProps({
    checked: {
        type: [Array, Boolean],
        required: true,
    },
    value: {
        default: null,
    },
    label: {
        default: null,
    },
});

const proxyChecked = computed({
    get() {
        return props.checked;
    },

    set(val) {
        emit('update:checked', [val, props.value]);
    },
});
</script>

<template>
    <div class="input-checkbox">
        <input type="checkbox" :value="value" :name="value" v-model="proxyChecked"
            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
        <span v-if="label" :for="value" class="ml-2 text-sm text-gray-900">{{ label }}</span>
    </div>
</template>

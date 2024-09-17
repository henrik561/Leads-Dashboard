<script setup>
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const props = defineProps({
    code: {
        type: String,
        required: true,
    },
    description: {
        type: String,
        required: false,
    }
});

const handleCopy = () => {
    navigator.clipboard.writeText(props.code);
    toast.success('Gekopieerd naar klembord');
}

</script>

<template>
    <div class="block">
        <div
            class="border-gray-300 border relative mt-1 py-2 px-3 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <div class="w-11/12 overflow-hidden pointer-events-none text-gray-500">
                {{
                    code
                }}</div>

            <i @click="handleCopy"
                class="fa-regular fa-copy absolute cursor-pointer right-2 h-full flex items-center justify-center top-0"></i>
        </div>
        <p class="mt-1 text-sm text-gray-500">{{ description }}</p>
    </div>
</template>
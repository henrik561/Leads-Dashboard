<script setup>
import { onMounted, watch, ref } from 'vue';
import Tag from '@/Components/Tag.vue';

const emit = defineEmits(['update-tags']);

const input = ref(null);
const tags = ref([]);

const handleRemoveTag = (tagId) => {
    tags.value = tags.value.filter(tag => tag.id !== tagId);
}

watch(input, () => {
    if (input.value.toString().slice(-1) === ' ') {
        input.value = input.value.replace(' ', '');
    }

    if (input.value.toString().slice(-1) === ',') {
        tags.value.push({
            value: input.value.toString().slice(0, -1),
            id: Math.random().toString(36).substring(7),
        });

        input.value = '';
    }
});

watch(tags.value, () => {
    emit('update-tags', tags.value);
});

</script>

<template>
    <div>
        <div
            class="border-gray-300 border relative mt-1 py-2 px-3 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <div class="flex gap-2">
                <Tag @delete-tag="handleRemoveTag" v-for="tag in tags" :tag="tag"></Tag>
            </div>
            <div class="wrapper">
                <input class="border-none pl-0 w-full show-as-text outline-none select-none ring-0 focus:ring-0"
                    type="text" v-model="input" pattern="[0-9,]*" />
                <div class="w-11/12 overflow-hidden pointer-events-none text-gray-500">
                    {{
                        value
                    }}</div>
            </div>
        </div>
        <p class="mt-1 text-sm text-gray-500">Gebruik als volgt formulierId:emailVeldId:telefoonVeldId:gClidVeldId,
            voorbeeld: 1:2::3, in dit geval is er
            geen telefoonnummer veld</p>
    </div>
</template>

<style scoped>
.show-as-text::-webkit-outer-spin-button,
.show-as-text::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.show-as-text {
    appearance: textfield;
    -moz-appearance: textfield;
}
</style>
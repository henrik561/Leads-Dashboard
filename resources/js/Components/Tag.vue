<script setup>

const emit = defineEmits(['deleteTag']);

const props = defineProps({
    tag: {
        type: String,
        required: true,
    }
})

const handleDelete = () => {
    emit('deleteTag', props.tag.id);
}

</script>

<template>
    <div class="bg-gray-200 px-4 py-1 rounded-lg flex items-center justify-center gap-2">
        <p>
            {{ tag.value }}
        </p>

        <i @click="handleDelete" class="fa-regular cursor-pointer fa-xmark text-sm"></i>
    </div>
</template>
<script setup>
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { useForm } from '@inertiajs/vue3'
import InputLabel from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue'
import SelectInput from '@/Components/SelectInput.vue'

const props = defineProps({
    isOpen: Boolean,
    lead: {
        type: Object,
        required: true,
    },
    leadStatuses: {
        type: Array,
        required: true,
    },
});

const form = useForm({
    status: props.lead?.status ?? 0,
    conversion_value: props.lead?.conversion_value ?? '',
});

const getStatusIsDisabled = (status) => {
    return props.lead?.status == status;
}

</script>

<template>
    <TransitionRoot as="template" :show="isOpen">
        <Dialog as="div" class="relative z-10" @close="$emit('cancel')">
            <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100"
                leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
            </TransitionChild>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <TransitionChild as="template" enter="ease-out duration-300"
                        enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200"
                        leave-from="opacity-100 translate-y-0 sm:scale-100"
                        leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                        <DialogPanel
                            class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                            <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
                                <button type="button"
                                    class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                    @click="$emit('cancel')">
                                    <span class="sr-only">Close</span>
                                    <i class="fa-regular fa-xmark text-gray-500"></i>
                                </button>
                            </div>
                            <div class="sm:flex sm:items-start w-full">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <i class="fa-regular fa-triangle-exclamation text-red-600"></i>
                                </div>
                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">
                                    <DialogTitle as="h3" class="text-base font-semibold leading-6 text-gray-900">
                                        Lead wijzigen</DialogTitle>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">
                                            Vul de nieuwe status en/of waarde van de lead in.
                                        </p>
                                    </div>

                                    <div class="mt-2 flex gap-2">
                                        <div class="form-item w-full">
                                            <InputLabel for="lead-status" value="Status" />

                                            <SelectInput name="lead-status" v-model="form.status">
                                                <option v-for="status in leadStatuses"
                                                    :disabled="getStatusIsDisabled(status)" :value="status">{{ status }}
                                                </option>
                                            </SelectInput>

                                            <InputError class="mt-2" :message="form.errors.status" />
                                        </div>

                                        <div class="form-item w-full">
                                            <InputLabel for="lead-value" value="Offerte waarde" />

                                            <TextInput name="lead-value" placeholder="10.000"
                                                v-model="form.conversion_value">
                                            </TextInput>

                                            <InputError class="mt-2" :message="form.errors.conversion_value" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                <button type="button"
                                    class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto"
                                    @click="$emit('confirm', form)">Opslaan</button>
                                <button type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                                    @click="$emit('cancel')">Annuleren</button>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>
<script setup>
import { ref } from 'vue';

defineProps({
    placeholder: { type: String, default: 'Escribe algo...' },
    name: { type: String, default: '' },
    type: { type: String, default: 'text' },
    modelValue: { type: String, default: '' },
});

const emit = defineEmits(['update:modelValue']);

const isInvalid = ref(false);

const handleChange = (event) => {
    const newValue = event.target.value;
    emit('update:modelValue', newValue);
    isInvalid.value = newValue.trim() === '';
};
</script>

<template>
    <div class="form-control-input">
        <input :value="modelValue" :type="type" :name="name" :placeholder="placeholder" class="form-control"
            :class="{ 'is-invalid': isInvalid }" @input="handleChange" />

        <p v-if="isInvalid" class="text-danger">
            Please fill in this field.
        </p>
    </div>
</template>

<style scoped>
.is-invalid {
    border: 1px solid red;
    background-color: #f8d7da;
    color: #721c24;
}

.text-danger {
    color: red;
    font-size: 16px;
}
</style>

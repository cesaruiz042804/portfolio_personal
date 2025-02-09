<template>
    <div class="row">
        <div class="col-md-6 my-2">
            <label for="name" class="form-label">Name:</label>
            <CustomInput v-model="name" type="text" placeholder="Name" name="name" />
        </div>
        <div class="col-md-6 my-2">
            <label for="lastname" class="form-label">Lastname:</label>
            <CustomInput v-model="lastname" type="text" placeholder="Lastname" name="lastname" />
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 my-2">
            <label for="email" class="form-label">Email:</label>
            <CustomInput v-model="email" type="email" placeholder="email" name="email" />
        </div>
        <div class="col-md-6 my-2">
            <label for="phone" class="form-label">Phone:</label>
            <PhoneInput v-model="phone" @country-code-updated="updateCountryCode" />
            <input type="hidden" name="country_code" v-model="countryCode">
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import CustomInput from '@/components/CustomInput.vue';
import PhoneInput from '../components/input-phone.vue';

const name = ref('');
const lastname = ref('');
const email = ref('');
const phone = ref('');
const countryCode = ref(''); // Nueva variable para el código del país

const updateCountryCode = (code) => {
    countryCode.value = code;  // Aquí se actualiza correctamente el código de país
    console.log("Código del país recibido:", countryCode.value);  // Para verificar que el valor se recibe correctamente
};

</script>

<style scoped></style>

<template>
    <vue-tel-input v-model="phoneNumber" :default-country="defaultCountry" @input="formatPhoneNumber"
        :onlyCountries="allowedCountries" :preferredCountries="preferredCountries" @country-changed="countryChanged"
        id="telephone" name="telephone" />
</template>

<script>
import { ref, watch, onMounted } from 'vue';

export default {
    name: 'PhoneInput',
    props: ['modelValue'],
    emits: ['update:modelValue'],
    setup(props, { emit }) {
        const phoneNumber = ref(props.modelValue || '');
        const defaultCountry = ref('PA'); // Set your default country
        const countryCode = ref(''); // Nueva variable para guardar el código del país
        const allowedCountries = ref([
            'US', 'GB', 'CA', 'AU', 'NZ', 'ZA', 'IN', 'PH', 'SG', 'IE', // English-speaking countries
            'MX', 'AR', 'CO', 'ES', 'PE', 'CL', 'PA', 'CR', 'EC', 'GT', 'SV', 'HN', 'PY', 'BO', 'DO', 'NI', 'UY' // Spanish-speaking countries
        ]);

        const preferredCountries = ref([
            'PA', 'CO', 'US', 'CA', 'MX', 'ES'
        ]);

        const formatPhoneNumber = (event) => { // Recibe el evento InputEvent
            const formattedNumber = event.target.value; // Extrae el valor del input
            console.log("Número formateado (PhoneInput):", formattedNumber, typeof formattedNumber);
            emit('update:modelValue', formattedNumber);
        };

        const countryChanged = (country) => {
            countryCode.value = country.iso2; // Guardar el código de país
            console.log("Código del país:", countryCode.value);
            emit('country-code-updated', countryCode.value); // Emitir el código de país
        };

        watch(
            () => props.modelValue,
            (newValue) => {
                phoneNumber.value = newValue || '';
            }
        );

        return {
            phoneNumber,
            formatPhoneNumber,
            defaultCountry,
            allowedCountries,
            preferredCountries,
            countryChanged,
            countryCode,
        };
    }
};
</script>

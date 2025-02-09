import { createApp } from 'vue';
import PhoneInput from './components/input-phone.vue';
import CustomInput from './components/CustomInput.vue';
import VueTelInput from 'vue-tel-input';
import '/node_modules/vue-tel-input/dist/vue-tel-input.css';
import view_contact from './views/contact_form.vue';

const app = createApp(view_contact);  // Asegúrate de que 'view_contact' es el componente raíz

app.use(VueTelInput); // Use the plugin, necessary

app.mount('#app');






/*
const app = createApp({
    data() {
        return {
            form: {
                phone: ''
            }
        };
    }
});
*/
//app.component('PhoneInput', PhoneInput);
//app.component('CustomInput', view_contact);
//app.component('CustomInput', CustomInput);

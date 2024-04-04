import './bootstrap';
import 'bootstrap';
import 'select2';


import {createApp} from "vue/dist/vue.esm-bundler.js";
import mycomponent from "../views/components/vueComponents/MyComponent.vue";
import vueselect2 from "../views/components/vueComponents/VueSelect2.vue";

const app = createApp({
    components: {
        'my-component' : mycomponent, 'vue-select2' : vueselect2,
    }
});

app.mount("#app");

import './bootstrap';

import {createApp} from "vue/dist/vue.esm-bundler.js";
import mycomponent from "../views/components/vueComponents/MyComponent.vue";
const app = createApp({
    components: {
        'my-component' : mycomponent,
    }
});

app.mount("#app");

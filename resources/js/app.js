import './bootstrap'
import { createApp } from 'vue'
import HelloWorld from '@/components/HelloWorld.vue'
import '../../node_modules/quill/dist/quill';

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
        HelloWorld
    },
}).mount('#app');

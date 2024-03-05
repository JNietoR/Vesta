import './bootstrap'
import { createApp } from 'vue'
import '../../node_modules/quill/dist/quill';
import '../../node_modules/quill-image-resize\image-resize.min';

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
}).mount('#app');

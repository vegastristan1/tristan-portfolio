import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
// import { Ziggy } from './ziggy'; // if this doesn't work, try importing it from `ziggy/dist/vue

/* import the fontawesome core */
import { library, config } from '@fortawesome/fontawesome-svg-core';
/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

import { fas } from '@fortawesome/free-solid-svg-icons';
import { fab } from '@fortawesome/free-brands-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';

import Layout from './Layouts/GuestLayout.vue';

import { inject } from '@vercel/analytics';
 
inject();

library.add(fas, fab, far);

const appName = import.meta.env.VITE_APP_NAME || 'Tristan';

createInertiaApp({
    title: (title) => `${appName} | ${title}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Head", Head)
            .component("Link", Link)
            .component("font-awesome-icon", FontAwesomeIcon)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
        includeCSS: true,
        showSpinner: false,
    },
});
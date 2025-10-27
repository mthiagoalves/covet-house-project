import '../css/app.css';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import type { DefineComponent } from 'vue';
import { createApp, h } from 'vue';
import { initializeTheme } from './composables/useAppearance';

// 1. Importe o seu layout principal
import AppLayout from '@/layouts/AppLayout.vue'; // <-- ADICIONE ESTA LINHA

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),

    // 2. Modifique a função 'resolve' para ser 'async'
    resolve: async (name) => { // <-- MUDE AQUI
        const page = await resolvePageComponent( // <-- MUDE AQUI
            `./pages/${name}.vue`,
            import.meta.glob<DefineComponent>('./pages/**/*.vue'),
        );

        // 3. Adicione a lógica do layout persistente
        if (page.default.layout === undefined) { // <-- ADICIONE ESTAS 3 LINHAS
            page.default.layout = AppLayout;
        }

        return page; // <-- MUDE AQUI
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

// This will set light / dark mode on page load...
initializeTheme();

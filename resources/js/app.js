import 'admin-lte'
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from './Layouts/MainLayout.vue'

const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

createInertiaApp({
    resolve: name => {
        const page = pages[`./Pages/${name}.vue`].default

        page.layout ??= MainLayout

        return page
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
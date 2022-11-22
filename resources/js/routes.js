import IndexInvoice from './components/IndexInvoice.vue';
import CreateInvoice from './components/CreateInvoice.vue';
import EditInvoice from './components/EditInvoice.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: IndexInvoice
    },
    {
        name: 'create',
        path: '/create',
        component: CreateInvoice
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditInvoice
    }
];

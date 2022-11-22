<template>
    <div>
        <h2 class="text-center">Crud Database</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="invoice in invoices" :key="invoice.id">
                <td>{{ invoice.id }}</td>
                <td>{{ invoice.name }}</td>
                <td>{{ invoice.price }}</td>
                <td>
                    <button class="btn btn-primary" @click="editInvoice(invoice.id)"><font-awesome-icon icon="fa-solid fa-pencil" /></button>
                    <button class="btn btn-danger" @click="deleteInvoice(invoice.id)"><font-awesome-icon icon="fa-solid fa-trash" /></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                invoices: []
            }
        },
        created() {
            this.axios
                .get('/api/invoices')
                .then(response => {
                    this.invoices = response.data.data;
                });
        },
        methods: {
            deleteInvoice(id) { 
                this.axios
                    .delete(`/api/invoices/${id}`)
                    .then(response => {
                        let i = this.invoices.map(data => data.id).indexOf(id);
                        this.invoices.splice(i, 1)
                    });
            },
            editInvoice(id) {
                this.$router.push(`/edit/${id}`);
            }
        }
    }
</script>
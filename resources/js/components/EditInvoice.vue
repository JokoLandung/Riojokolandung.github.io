<template>
    <div>
        <h3 class="text-center">Edit Invoice</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateInvoice">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="invoice.name">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" v-model="invoice.price">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                invoice: {}
            }
        },
        created() {
            this.axios
                .get(`/api/invoices/${this.$route.params.id}`)
                .then((res) => {
                    this.invoice = res.data.data;
                });
        },
        methods: {
            updateInvoice() {
                this.axios
                    .patch(`/api/invoices/${this.$route.params.id}`, this.invoice)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>
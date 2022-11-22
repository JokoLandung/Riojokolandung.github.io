<template>
    <div>
        <h3 class="text-center">Create Invoice</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addInvoice">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="invoice.name">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" v-model="invoice.price">
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
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
        methods: {
            addInvoice() {
                this.axios
                    .post('api/invoices', this.invoice)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
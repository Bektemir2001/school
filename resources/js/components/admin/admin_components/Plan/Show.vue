<template>
    <div v-if="klass">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{klass.name}}</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name:"Show",
        components: {
        },
        data(){
            return {
                klass:null
            }
        },
        mounted() {
            this.getKlass()
        },
        methods:{
            getKlass(){
                axios.get(`/api/admin/klasses/${this.$route.params.id}`)
                .then(res => {
                    this.klass = res.data
                })
            }
        }
    }
</script>

<style scoped>

</style>

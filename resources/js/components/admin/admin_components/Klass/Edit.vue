<template>
    <div v-if="klass" class="content-wrapper mt-4">
        <!-- Main content -->
        <section class="content col-6">
            <div class="container-fluid ">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Класстын атын өзгөртүү</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group col-12">
                                        <label>Класстын аты</label>
                                        <input type="text" v-model="klass.name" class="form-control" >
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" @click.prevent="updateKlass()" class="btn btn-primary">Жаңылоо</button>
                                </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    </div>
</template>

<script>
    import router from "../../../../router";
    export default {
        name:"Edit",
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
                        this.klass = res.data.data
                    })
            },
            updateKlass(){
                axios.patch(`/api/admin/klasses/${this.$route.params.id}`, {name:this.klass.name})
                .then(res => {
                    router.push({name:'admin.klass.show', params:this.klass.id})
                })
            }
        }
    }
</script>

<style scoped>

</style>

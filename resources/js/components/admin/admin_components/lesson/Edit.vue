<template>
    <div v-if="lesson" class="content-wrapper mt-4">
        <!-- Main content -->
        <section class="content col-6">
            <div class="container-fluid ">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Сабакты өзгөртүү</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group col-12">
                                        <label>Сабактын аты</label>
                                        <input type="text" v-model="lesson.name" class="form-control" >
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" @click.prevent="updateLesson()" class="btn btn-primary">Жаңылоо</button>
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
                lesson:null
            }
        },
        mounted() {
            this.getLesson()
        },
        methods:{
            getLesson(){
                axios.get(`/api/admin/lessons/${this.$route.params.id}`)
                    .then(res => {
                        this.lesson = res.data.data
                    })
            },
            updateLesson(){
                axios.patch(`/api/admin/lessons/${this.$route.params.id}`, {name:this.lesson.name})
                .then(res => {
                    router.push({name:'admin.lesson.show', params:this.lesson.id})
                })
            }
        }
    }
</script>

<style scoped>

</style>

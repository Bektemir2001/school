<template>
    <div v-if="student && klasses" class="content-wrapper mt-4">
        <!-- Main content -->
        <section class="content col-6">
            <div class="container-fluid ">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Окуучунун маалыматтарын жанылоо</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group col-12">
                                        <label>Аты</label>
                                        <input type="text" v-model="student.user.name" class="form-control">
                                        <div class="text-danger">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Фамилясы</label>
                                        <input type="text" v-model="student.user.surename" class="form-control" >
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" v-model="student.user.email" class="form-control" id="exampleInputEmail1" placeholder="email">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="exampleInputEmail1">Кайсы класста окуйт</label>
                                        <select class="form-control" v-model="student.klass_id">
                                            <option
                                                v-for="klass in klasses"
                                                :value="klass.id">{{ klass.name  }}</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" @click.prevent="updateStudent()" class="btn btn-primary">Каттоо</button>
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
                student:null,
                klasses:null
            }
        },
        mounted() {
            this.getStudent()
            this.getKlasses()
        },
        methods:{
            getStudent(){
                axios.get(`/api/admin/students/${this.$route.params.id}`)
                    .then(res => {
                        this.student = res.data.data
                    })
            },
            getKlasses(){
                axios.get('/api/admin/klasses/')
                    .then(res => {
                        this.klasses = res.data.data
                    })
            },
            updateStudent(){
                axios.patch(`/api/admin/students/${this.$route.params.id}/update`, {name:this.student.user.name,
                surename:this.student.user.surename, email:this.student.user.email, klass_id:this.student.klass_id})
                .then(res => {
                    router.push({name:'admin.student.show', params:this.student.id})
                })
            }
        }
    }
</script>

<style scoped>

</style>

<template>
    <div v-if="teacher && lessons" class="content-wrapper mt-4">
        <!-- Main content -->
        <section class="content col-6">
            <div class="container-fluid ">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Мугалим кошуу</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group col-12">
                                        <label>Аты</label>
                                        <input type="text" v-model="teacher.user.name" class="form-control">
                                        <div class="text-danger">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Фамилясы</label>
                                        <input type="text" v-model="teacher.user.surename" class="form-control" >
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" v-model="teacher.user.email" class="form-control" id="exampleInputEmail1" placeholder="email">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="exampleInputEmail1">Берген сабагы</label>
                                        <select class="form-control" v-model="teacher.lesson_id">
                                            <option
                                                v-for="lesson in lessons"
                                                :value="lesson.id">{{ lesson.name  }}</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" @click.prevent="updateTeacher()" class="btn btn-primary">Каттоо</button>
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
                teacher:null,
                lessons:null
            }
        },
        mounted() {
            this.getTeacher()
            this.getLessons()
        },
        methods:{
            getTeacher(){
                axios.get(`/api/admin/teachers/${this.$route.params.id}`)
                    .then(res => {
                        this.teacher = res.data
                    })
            },
            getLessons(){
                axios.get('/api/admin/lessons/')
                    .then(res => {
                        this.lessons = res.data
                    })
            },
            updateTeacher(){
                axios.patch(`/api/admin/teachers/${this.$route.params.id}/update`, {name:this.teacher.user.name,
                surename:this.teacher.user.surename, email:this.teacher.user.email, lesson_id:this.teacher.lesson_id})
                .then(res => {
                    router.push({name:'admin.teacher.show', params:this.teacher.id})
                })
            }
        }
    }
</script>

<style scoped>

</style>

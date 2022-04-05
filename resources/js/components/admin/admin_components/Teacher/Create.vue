<template>
    <div class="content-wrapper">
        <!-- Main content -->
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
                                        <input type="text" v-model="name" class="form-control">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Фамилясы</label>
                                        <input type="text" v-model="surename" class="form-control">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" v-model="email" class="form-control" id="exampleInputEmail1" placeholder="email" >
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="exampleInputEmail1">Берген сабагы</label>
                                        <select class="form-control" v-model="lesson_id">
                                            <option v-for="lesson in lessons" :value="lesson.id">{{ lesson.name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" @click.prevent="createTeacher()" class="btn btn-primary">Каттоо</button>
                                </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

    </div>
</template>

<script>
    import router from "../../../../router";
    export default {
        name:"Create",
        components: {
        },
        data(){
            return {
                lessons:null,
                name:null,
                surename:null,
                email:null,
                lesson_id:null
            }
        },
        mounted() {
            this.getLesson()
        },
        methods:{
            createTeacher(){
                axios.post('/api/admin/teachers', {name:this.name, surename:this.surename,
                email:this.email, lesson_id:this.lesson_id})
                .then(res => {
                    router.push({name:'admin.teachers'})
                })
            },
            getLesson(){
                axios.get('/api/admin/lessons')
                .then(res => {
                    this.lessons = res.data.data
                })
            },
        },
    }
</script>

<style scoped>

</style>

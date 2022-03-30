<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Окуучулар</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="col-6">
                <button type="button" class="btn btn-block btn-outline-secondary btn-xs">
                    <router-link :to="{name:'admin.student.create'}"><h5 class="text-green">Окуучу кошуу</h5></router-link>
                </button>
            </div>


            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title">Окуучулардын тизмеси</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div v-if="students" class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ФИО</th>
                            <th>Кирүү</th>
                            <th>Өзгөртүү</th>
                            <th>Өчүрүү</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="student in students">
                            <td>{{student.id}}</td>
                            <td>{{student.user.name}} {{student.user.surename}}</td>
                            <td>
                                <router-link :to="{name:'admin.student.show', params:{id:student.id}}">
                                    <i class="far fa-eye"></i>
                                </router-link>
                            </td>
                            <td>
                                <router-link :to="{name:'admin.student.edit', params:{id:student.id}}" class="text-green">
                                    <i class="fas fa-edit"></i>
                                </router-link>
                            </td>
                            <td>
                                    <router-link :to="{name:'admin.student.delete', params:{id:student.id}}" class="border-0 bg-transparent">
                                        <i title="submit" class="fas fa-trash text-danger" role="button"></i>
                                    </router-link>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
        <!-- /.content -->
    </div>
</template>

<script>
    import router from "../../../../router";
    export default {
        name:"Index",
        components: {
        },
        data(){
            return {
                students:null,
            }
        },
        mounted() {
            this.getStudents()

        },
        methods:{
            getStudents(){
                axios.get('/api/admin/students')
                    .then(res =>{
                        this.students = res.data
                    })
            },
        },
        router
    }
</script>

<style scoped>

</style>

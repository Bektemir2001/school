<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Мугалимдер</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="col-6">
                <button type="button" class="btn btn-block btn-outline-secondary btn-xs">
                    <router-link :to="{name:'admin.teacher.create'}"><h5 class="text-green">Мугалим кошуу</h5></router-link>
                </button>
            </div>


            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title">Мугалимдердин тизмеси</h3>

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
                <div v-if="teachers" class="card-body table-responsive p-0" style="height: 300px;">
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
                        <tr v-for="teacher in teachers">
                            <td>{{teacher.id}}</td>
                            <td>{{teacher.user.name}} {{teacher.user.surename}}</td>
                            <td>
                                <router-link :to="{name:'admin.teacher.show', params:{id:teacher.id}}">
                                    <i class="far fa-eye"></i>
                                </router-link>
                            </td>
                            <td>
                                <router-link :to="{name:'admin.teacher.edit', params:{id:teacher.id}}" class="text-green">
                                    <i class="fas fa-edit"></i>
                                </router-link>
                            </td>
                            <td>
                                    <router-link :to="{name:'admin.teacher.delete', params:{id:teacher.id}}" class="border-0 bg-transparent">
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
                teachers:null,
            }
        },
        mounted() {
            this.getTeachers()

        },
        methods:{
            getTeachers(){
                axios.get('/api/admin/teachers')
                    .then(res =>{
                        this.teachers = res.data
                    })
            },
        },
        router
    }
</script>

<style scoped>

</style>

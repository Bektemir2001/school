<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div :class="Add ? 'd-none' : ''">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Сабактар</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <div>
                    <div class="col-6">
                        <button type="button" @click.prevent="clickAdd()" class="btn btn-block btn-outline-secondary btn-xs">
                            <a href="#"><h5 class="text-green">Сабак кошуу</h5></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <Create :class="Add ? '' : 'd-none'"></Create>
        <!-- Main content -->
        <section class="content">

            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title">Сабактардын тизмеси</h3>

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
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Сабактын аты</th>
                            <th>Кирүү</th>
                            <th>Өзгөртүү</th>
                            <th>Өчүрүү</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="lesson in lessons">
                            <td>{{lesson.id}}</td>
                            <td>{{lesson.name}}</td>
                            <td>
                                <router-link :to="{name:'admin.lesson.show', params:{id:lesson.id}}">
                                    <i class="far fa-eye"></i>
                                </router-link>
                            </td>
                            <td>
                                <router-link :to="{name:'admin.lesson.edit', params:{id:lesson.id}}" class="text-green">
                                    <i class="fas fa-edit"></i>
                                </router-link>
                            </td>
                            <td>
                                <router-link :to="{name:'admin.lesson.delete', params:{id:lesson.id}}" class="border-0 bg-transparent">
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
    import Create from "./Create";
    import router from "../../../../router";
    export default {
        name:"Index",
        components: {
            Create
        },
        data(){
            return {
                lessons:null,
                Add:false
            }
        },
        mounted() {
            this.getLessons()
        },
        methods:{
            getLessons(){
                axios.get('/api/admin/lessons')
                    .then(res =>{
                        this.lessons = res.data.data
                    })
            },
            clickAdd(){
                this.Add = true
            }
        },
        router
    }
</script>

<style scoped>

</style>

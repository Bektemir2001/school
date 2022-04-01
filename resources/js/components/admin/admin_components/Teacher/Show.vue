<template>
    <div v-if="teacher" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{teacher.user.name}} {{teacher.user.surename}}</h1>
                        <div :class="add ? 'd-none' : ''">
                            <a class="nav-link text-info" href="#" @click.prevent="addKlass()"><b>Класстарды алмаштыруу</b></a>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <AddKlass :class="add ? '':'d-none'"></AddKlass>
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <tr data-widget="expandable-table" aria-expanded="true">
                    <td>Кайсы предметтен сабак берет: </td>
                    <td><b>{{teacher.lesson.name}}</b></td>
                </tr>
                <tr data-widget="expandable-table" aria-expanded="true">
                    <td>Кайсы класстарга сабак берет: </td>
                    <td v-for="klass in teacher.klasses"><b>{{klass.name}}</b></td>
                </tr>
                <tr data-widget="expandable-table" aria-expanded="true">
                    <td>парол: </td>
                    <td><b>{{teacher.password}}</b></td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    import AddKlass from "./AddKlass";
    export default {
        name:"Show",
        components: {
            AddKlass
        },
        data(){
            return {
                teacher:null,
                add:false
            }
        },
        mounted() {
            this.getTeacher()
        },
        methods:{
            getTeacher(){
                axios.get(`/api/admin/teachers/${this.$route.params.id}`)
                .then(res => {
                    this.teacher = res.data
                })
            },
            addKlass(){
                this.add = true
            }
        }
    }
</script>

<style scoped>

</style>

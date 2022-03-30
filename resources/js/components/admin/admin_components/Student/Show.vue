<template>
    <div v-if="student" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{student.user.name}} {{student.user.surename}}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="col-6">
            <table class="table table-bordered table-hover">
                <tr data-widget="expandable-table" aria-expanded="true">
                    <td>Канчанчы класс: </td>
                    <td><b>{{student.klass.name}}</b></td>
                </tr>
                <tr data-widget="expandable-table" aria-expanded="true">
                    <td>парол: </td>
                    <td><b>{{student.password}}</b></td>
                </tr>
            </table>
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
                student:null
            }
        },
        mounted() {
            this.getStudent()
        },
        methods:{
            getStudent(){
                axios.get(`/api/admin/students/${this.$route.params.id}`)
                .then(res => {
                    this.student = res.data
                })
            }
        }
    }
</script>

<style scoped>

</style>

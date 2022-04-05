<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div>
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Сабак пландары</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <table class="table table-borderless">
                <tbody>
                <tr class="table-active">
                    ...
                </tr>
                <tr>
                    ...
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2" class="table-active">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
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
            }
        },
        mounted() {
        },
        methods:{
        },
        router
    }
</script>

<style scoped>

</style>

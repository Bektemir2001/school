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
                                <h3 class="card-title">Окуучу кошуу</h3>
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
                                        <label for="exampleInputEmail1">Кайсы класста окуйт</label>
                                        <select class="form-control" v-model="klass_id">
                                            <option v-for="klass in klasses" :value="klass.id">{{ klass.name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" @click.prevent="createStudent()" class="btn btn-primary">Каттоо</button>
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
                klasses:null,
                name:null,
                surename:null,
                email:null,
                klass_id:null
            }
        },
        mounted() {
            this.getKlasses()
        },
        methods:{
            createStudent(){
                axios.post('/api/admin/students', {name:this.name, surename:this.surename,
                email:this.email, klass_id:this.klass_id})
                .then(res => {
                    router.push({name:'admin.students'})
                })
            },
            getKlasses(){
                axios.get('/api/admin/klasses')
                .then(res => {
                    this.klasses = res.data.data
                })
            },
        },
    }
</script>

<style scoped>

</style>

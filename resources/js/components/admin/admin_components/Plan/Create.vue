<template>
    <div>
        <div class="card-body">
            <div class="form-group col-6">
                <label>Сабактын аты</label>
                <input type="text" v-model="name" class="form-control" >
            </div>
        </div>
        <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" @click.prevent="createKlass()" class="btn btn-primary">Каттоо</button>
                    <button type="submit" @click.prevent="cancelCreate()" class="btn btn-danger">Жокко чыгаруу</button>
                </div>
    </div>
</template>

<script>

    export default {
        name:"Create",
        components: {
        },
        data(){
            return {
                name:null
            }
        },
        mounted() {
        },
        methods:{
            createKlass(){
                axios.post('/api/admin/klasses', {name:this.name})
                .then(res => {
                    this.$parent.getKlasses()
                    this.$parent.Add = false
                    this.name = null
                })
            },
            cancelCreate(){
                this.$parent.Add = false
            }
        }
    }
</script>

<style scoped>

</style>

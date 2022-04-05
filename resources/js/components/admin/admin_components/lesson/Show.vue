<template>
    <div v-if="lesson">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{lesson.name}}</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
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
                lesson:null
            }
        },
        mounted() {
            this.getLesson()
        },
        methods:{
            getLesson(){
                axios.get(`/api/admin/lessons/${this.$route.params.id}`)
                .then(res => {
                    this.lesson = res.data.data
                })
            }
        }
    }
</script>

<style scoped>

</style>

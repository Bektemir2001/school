<template>

</template>

<script>
    import router from "../../../../router";
    export default {
        name:"Delete",
        components: {
        },
        mounted() {
            this.deleteTeacher()
        },
        methods:{
            deleteTeacher(){
                axios.delete(`/api/admin/teachers/${this.$route.params.id}`)
                .then(res => {
                    router.push({name:'admin.teachers'})
                })
            }
        }
    }
</script>

<style scoped>

</style>

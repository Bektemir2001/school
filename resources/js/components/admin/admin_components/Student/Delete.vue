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
                axios.delete(`/api/admin/students/${this.$route.params.id}`)
                .then(res => {
                    router.push({name:'admin.students'})
                })
            }
        }
    }
</script>

<style scoped>

</style>

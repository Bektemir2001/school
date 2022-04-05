<template>

</template>

<script>
    import router from "../../../../router";
    export default {
        name:"Delete",
        components: {
        },
        mounted() {
            this.deleteLesson()
        },
        methods:{
            deleteLesson(){
                axios.delete(`/api/admin/lessons/${this.$route.params.id}`)
                .then(res => {
                    router.push({name:'admin.lessons'})
                })
                console.log(this.$route.params.id)
            }
        }
    }
</script>

<style scoped>

</style>

<template>

</template>

<script>
    import router from "../../../../router";
    export default {
        name:"Delete",
        components: {
        },
        data(){
            return {
                lesson:null
            }
        },
        mounted() {
            this.deleteKlass()
        },
        methods:{
            deleteKlass(){
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

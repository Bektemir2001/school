<template>

</template>

<script>
    import router from "../../../../router";
    export default {
        name:"Delete",
        components: {
        },
        mounted() {
            this.deleteKlass()
        },
        methods:{
            deleteKlass(){
                axios.delete(`/api/admin/klasses/${this.$route.params.id}`)
                .then(res => {
                    router.push({name:'admin.klasses'})
                })
            }
        }
    }
</script>

<style scoped>

</style>

<template>
    <div v-if="klasses" class="d-grid gap-2 col-11 mx-auto">
        <div v-for="klass in klasses" class="form-check">
            <input class="form-check-input" type="checkbox" checked="true" @click="clickChoose(klass.id)" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                <b>{{klass.name}}</b>
            </label>
        </div>
        <tr data-widget="expandable-table" aria-expanded="true">
            <td class="gap-2 col-6 mx-auto"><button type="button" @click.prevent="submitClick()" class="btn btn-primary btn-sm">Small button</button></td>
            <td class="gap-2 col-6 mx-auto"><button type="button" @click.prevent="cancelClick()" class="btn btn-secondary btn-sm">жокко чыгаруу</button></td>
        </tr>

    </div>
</template>

<script>
// create array to store temporary ids
    let selectedKlasses = []

    export default {
        name:"AddKlass",
        components: {
        },
        data(){
            return {
                klasses:null,
                id:this.$parent.teacher.id

            }
        },
        mounted() {
            this.getKlasses()
            this.getAddedKlasses()
        },
        methods:{
            cancelClick(){
                this.$parent.add = false
            },
            getKlasses(){
                axios.get('/api/admin/klasses')
                .then(res => {
                    this.klasses = res.data
                })
            },
            getAddedKlasses(){
                axios.get(`/api/admin/teachers/addedKlasses/${this.id}`)
                    .then(res => {
                        console.log(res.data)
                        selectedKlasses = res.data
                    })
            },
            clickChoose(id){
                let b = true
                for (let item of selectedKlasses){
                    if (id === item){
                        selectedKlasses = selectedKlasses.filter(function(f) { return f !== id })
                        b = false
                    }
                }
                if(b){selectedKlasses.push(id)}
            },
            submitClick(){
                axios.post(`/api/admin/teachers/${this.id}`, {klasses:selectedKlasses})
                .then(res => {
                    console.log(res.data)
                    this.$parent.add = false
                })
            }
        }
    }
</script>

<style scoped>

</style>

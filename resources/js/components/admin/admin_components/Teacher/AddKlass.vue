<template>
    <div v-if="klasses && selectedKlasses" class="d-grid gap-2 col-11 mx-auto">
        <div v-for="klass in klasses" class="form-check">
            <input @click="clickChoose(klass.id)" class="form-check-input" type="checkbox" :checked="selectedKlasses.includes(klass.id)" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                <b>{{klass.name}}</b>
            </label>
        </div>
            <tr data-widget="expandable-table" aria-expanded="true">
                <td class="gap-2 col-6 mx-auto"><button type="button" @click.prevent="submitClick()" class="btn btn-primary btn-sm">  катто  </button></td>
                <td class="gap-2 col-6 mx-auto"><button type="button" @click.prevent="cancelClick()" class="btn btn-secondary btn-sm">жокко чыгаруу</button></td>
            </tr>
    </div>
</template>

<script>
// create array to store temporary ids

    export default {
        name:"AddKlass",
        components: {
        },
        data(){
            return {
                klasses:null,
                id:this.$parent.teacher.id,
                selectedKlasses:null

            }
        },
        mounted() {
            this.getKlasses()
            this.getAddedKlasses()
        },
        methods:{

            getKlasses(){
                axios.get('/api/admin/klasses/')
                .then(res => {
                    this.klasses = res.data.data
                })
            },
            getAddedKlasses(){
                axios.get(`/api/admin/teachers/addedKlasses/${this.id}`)
                    .then(res => {
                        this.selectedKlasses = res.data
                    })
            },
            clickChoose(id){
                let b = true
                for (let item of this.selectedKlasses){
                    if (id === item){
                        this.selectedKlasses = this.selectedKlasses.filter(function(f) { return f !== id })
                        b = false
                    }
                }
                if(b){this.selectedKlasses.push(id)}
            },
            submitClick(){
                axios.post(`/api/admin/teachers/${this.id}`, {klasses:this.selectedKlasses})
                .then(res => {
                    this.$parent.getTeacher()
                    this.$parent.add = false
                })
            },
            cancelClick(){
                this.$parent.add = false
                this.$parent.getTeacher()

            },
        }
    }
</script>

<style scoped>

</style>

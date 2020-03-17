<template>
    <b-table :data="data" :columns="columns"></b-table>
</template>

<script>
    export default {
        data() {
            return {
                data: [

                ],
                columns: [
                    {
                        field: 'clg_code',
                        label: 'College Code',
                    },
                    {
                        field: 'college_name',
                        label: 'College Name',
                    },
                    {
                        field: 'selected_stage2',
                        label: 'No. of Teams selected in stage2',
                    },
                    {
                        field: 'merit_certi',
                        label: 'Certificate Levels',
                        
                    }
                ]
            }
        },
        created(){
            this.getEyrcRanking()
        },
        methods:{
            getEyrcRanking(){
                this.$http.get('/ajax/eyrc').then(response=>{
                    console.log(response)
                    this.data = response.data
                })
            },
        }
    }
</script>



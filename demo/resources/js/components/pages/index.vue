<template>
    <div class="container">
            <div class="form-group m-2">
                <router-link :to="{ name:'PaysCreate'}" class="btn btn-primary">Add New Pays</router-link>
            </div>
       <table class="table table-bordered table-striped mt-5">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Continent</th>
                    <th>Monnaie</th>
                    <th>Superficie</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                   <tr v-for="(item,index) of paysList">
                    <td>{{item.id}}</td>
                    <td>{{item.nom}}</td>
                    <td>{{item.continent}}</td>
                    <td>{{item.monnaie}}</td>
                    <td>{{item.superficie}}</td>
                    <td>{{item.description}}</td>
                    <td>
                        <router-link :to="{ name:'PaysEdit',params:{paysId:item.id}}" class="btn btn-primary">Edit</router-link>
                        
                         <a href="#" @click="deletePays(item.id)" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            </tbody>
       </table>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                paysList:[]
            }
        },
        created(){
            this.getAll();
        },
        methods:{
            getAll(){
                this.axios.get('http://127.0.0.1:8000/api/pays').then(res =>{
                    this.paysList= res.data;
                }).catch(error => {
                    console.log(error)
                });
            },
            deletePays(paysId){
                  this.axios.delete(`http://127.0.0.1:8000/api/pays/${paysId}`).then(res =>{
                    let i = this.paysList.map(data => data.id).indexOf(paysId);
                    this.paysList.splice(i,1);
                })
            }
        }
    }
</script>

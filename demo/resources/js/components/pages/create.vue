<template>
    <div class="container">
    <div class="form-group m-2">
        <router-link :to="{ name:'Acceuil'}" class="btn btn-primary">Back</router-link>
    </div>
       <form>
            <div class="form-group">
                <label>Noms</label>
                <input type='text' class="form-control" v-model='pays.nom'/>
            </div>
              <div class="form-group">
                <label>Continent</label>
                <input type='text' class="form-control" v-model='pays.continent'/>
            </div>
              <div class="form-group">
                <label>Monnaie</label>
                <input type='text' class="form-control" v-model='pays.monnaie'/>
            </div>
              <div class="form-group">
                <label>Superficie</label>
                <input type='text' class="form-control" v-model='pays.superficie'/>
            </div>
             <div class="form-group">
                <label>Description</label>
                <input type='text' class="form-control" v-model='pays.description'/>
            </div>
             <div class="form-group">               
                <button class="btn btn-primary mt-2" @click="insertPays()">Enregistrer</button>
            </div>
       </form>
    </div>
</template>
<script>
   export default{
        data(){
            return{
                pays:{}
            }
        },
       
        methods:{
            insertPays(){
                this.axios.post('http://127.0.0.1:8000/api/pays',this.pays).then(res =>{
                    this.$router.push({ name:'Acceuil'});
                }).catch(error => {
                    console.log(error)
                });
            }
        }
    }

</script>
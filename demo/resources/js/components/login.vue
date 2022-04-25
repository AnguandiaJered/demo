<template>
    <div class="container">
   <div class="alert alert-danger mt-2" v-if="failed">Login failed</div>
       <form action="#" @submit.prevent="doLogin">
            <div class="form-group">
                <label>Username</label>
                <input type='text' class="form-control" v-model='pays.username'/>
            </div>
              <div class="form-group">
                <label>Password</label>
                <input type='password' class="form-control" v-model='pays.password'/>
            </div>            
             <div class="form-group">               
                <input type='submit' class="btn btn-primary mt-3" value="Loggin"/>
            </div>
       </form>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                pays:{},
                failed: false
            }
        },
       
        methods:{
            doLogin(){
              axios.get('/sanctum/csrf-cookie').then(res => {

                axios.post('/api/login',this.pays).then(response => {
                    if(response.data.failed == true){
                        this.failed = true;
                    }
                    else{
                        this.$router.push({name: 'Acceuil'});
                    }
                });
              });
            }
        }
    }

</script>
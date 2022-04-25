<template>
    <div>
        <nav class="navbar bg-dark">
            <ul class="navbar">               
                 <router-link :to="{ name:'Acceuil'}" class="nav-link text-white">Acceuil</router-link>
                 <router-link :to="{ name:'Login'}" class="nav-link text-white">Login</router-link>
            </ul>
        </nav>
        <div class="container-fluid">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default{

    }

</script>
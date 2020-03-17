<template>
    <div class="app-home">
        <nav-bar />

        <div class="container-fluid section" id="mysec">         
                    <slot />
        </div>
    </div>
</template>

<script>
  import NavBar from './Navbar'
  
  export default {
    mounted(){
    },
    components: {
      NavBar,
    }
  }
</script>
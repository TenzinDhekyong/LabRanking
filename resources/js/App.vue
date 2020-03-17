<template>
<div id="app">
    <component :is = "layout">
       <router-view></router-view>
    </component>
</div>
</template>
<script>
const default_layout = "theme";
export default {
computed : {
    layout(){
        return ( this.$route.meta.layout || default_layout) + '-layout'
    }
},
watch:{
        $route (to, from){
            // clear alert on location change
            this.$store.dispatch('alert/clear')
        }
    },
};
</script>

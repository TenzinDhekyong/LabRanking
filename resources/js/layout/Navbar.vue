<template>
    <b-navbar>
        <template slot="brand">
            <b-navbar-item tag="router-link" :to="{ path: '/' }">
                eLSI Lab Ranking
                <!-- <img
                    src="https://raw.githubusercontent.com/buefy/buefy/dev/static/img/buefy-logo.png"
                    alt="Lightweight UI components for Vue.js based on Bulma"
                > -->
            </b-navbar-item>
        </template>
        <template slot="start">
            <b-navbar-item href="/overall">
                Overall
            </b-navbar-item>
            <b-navbar-item href="/eyrc">
                eYRC
            </b-navbar-item>
            <b-navbar-item href="#">
                eYIC
            </b-navbar-item>
            <b-navbar-item href="#">
                eYRDC
            </b-navbar-item>
        </template>

        <template slot="end">
            <b-navbar-item tag="div">
                 <b-select placeholder="Select Year">
                <option
                    v-for="option in data"
                    :value="option.id"
                    :key="option.id">
                    {{ option.year }}
                </option>
            </b-select>
            </b-navbar-item>
        </template>
    </b-navbar>
</template>

<script>
    export default {
       data: function () {
        return {
          data: [{
            id:1, year:2013
          },{
            id:2, year:2014
          },{
            id:3, year:2015
          },{
            id:4, year:2015
          },{
            id:5, year:2016
          }],
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

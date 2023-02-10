<template>
  <div>
    <main-nav v-if="route.path != '/auth/login' && route.path != '/auth/dashboard'"   />
    <router-view :key="$route.fullPath"/>
  </div>
</template>

<script setup lang="ts">

import MainNav from "@/components/Navigation/MainNav.vue";

import { useRoute } from 'vue-router'
const route = useRoute()

</script>

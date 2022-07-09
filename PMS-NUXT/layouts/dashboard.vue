<template>
<div>
    <MainNavBar/>
    <Nuxt/>
</div>
</template>

<script>
import NavBar from "../components/Main/NavBar.vue";
export default{
    name: "dashboard",
    components: { NavBar }
}
</script>

<style>
</style>
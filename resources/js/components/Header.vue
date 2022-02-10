<template>
 <header class="mb-4">
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="#">Boolpress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <!-- Home Nav Link -->
            <li class="nav-item active">
                <router-link class="nav-link" :to="{ name: 'home' }">Home</router-link>
            </li>
            <!-- About Us Nav Link -->
            <li class="nav-item active">
                <router-link class="nav-link" :to="{ name: 'about' }">About</router-link>
            </li>
            <!-- Blog Nav Link -->
            <li class="nav-item active">
                <router-link class="nav-link" :to="{ name: 'blog' }">Blog</router-link>
            </li>
            </ul>
        </div>
        
    </nav>
 </header>
</template>

<script>
export default {
    name: 'Header',
}
</script>

<style scoped lang="scss">
.active {
    background: rgba(#fff, .1);
}
</style>
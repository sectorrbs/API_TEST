<template>
    <Sidebar></Sidebar>
    <router-view></router-view>
</template>

<script>

import Sidebar from './views/template/sidebar/Sidebar'

export default {
    name: "Admin",
    components: {Sidebar}
}
</script>


<template>
    <div class="sidebar">
        <div class="sidebar__name">
            Админ-панель
            <div class="sidebar__version">1.0</div>
        </div>
        <Nav/>
    </div>
</template>

<script>

import Nav from '../navigation/Nav'

export default {
    name: "Sidebar",
    components: {Nav}
}
</script>


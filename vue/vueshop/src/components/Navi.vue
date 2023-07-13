<template>
    <div class="nav">
        <!-- <a>홈</a>
        <a>상품</a>
        <a>기타</a> -->
        <a v-for="(item, i) in navList" :key="i">{{ item }}</a>
    </div>
</template>
<script>
export default {
    name: 'Navi',
    props: {
        product1: String,
        navList: Array,
    }
}
</script>
<style lang="">
   
    
</style>
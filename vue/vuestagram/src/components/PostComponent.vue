<template lang="">
    <!-- {{$store.state.boardData}} -->
    <div class="post" v-for="data in $store.state.boardData" :key="data">
        <!-- db에 있는 필터를 적용해야돼서 아래처럼 적어야 되고 :class="$store.state.imgFilter"는 store에 있는 필터이기 때문에 적용이 안되는 것 -->
        <div class="post-img" :class="data.filter" :style="{backgroundImage : `url('${data.img}')`}"></div>
        <div class="post-content">
            <p>좋아요{{data.likes}}</p>
            <p><strong>{{data.name}}</strong>{{data.content}}</p>
            <p>{{data.created_at}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name: 'PostComponent',
}
</script>
<style lang="">
    
</style>
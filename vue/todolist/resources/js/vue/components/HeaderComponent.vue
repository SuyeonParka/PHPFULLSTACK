<template>
    <div>
        <h1>투두</h1>
            <input class="box" type="text" id="inputBox">
        <button class="btn1" @click=" $emit('update')">등록</button>
    </div>
</template>
<script>
export default {
    name: 'HeaderComponent'
}
</script>
<style>
  
</style>
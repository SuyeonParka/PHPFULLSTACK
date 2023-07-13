<template>
    <div class="inputText">
        <input class="chkbox" type="checkbox" @click="$emit('flgupt')" v-bind="{'checked':data.completed}">
        <!-- data.completed가 true면 'cancleLine'을 실행한다는 뜻임요 -->
        <div :class="{'cancelLine':data.completed}">{{ data.content}}</div>
        <button class="btn1" @click="$emit('del')" id="del">삭제</button>
    </div>
</template>
<script>
export default {
    name: 'ListComponent',
    props: {
        data: Object,
    }
}
</script>
<style>
    .chkbox {
        width: 20px;
        height: 20px;
    }
    .inputText {
        margin-left: 10px;
        display: grid;
        grid-template-columns: 1fr 3fr 1fr;
    }
</style>
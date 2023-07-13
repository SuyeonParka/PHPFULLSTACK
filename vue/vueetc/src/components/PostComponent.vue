<template lang="">
    <div>
        <h1>PostComponenet.vue</h1>
        <!-- 출력 -->
        <p>{{ propsTest }}</p>
    </div>
</template>
<script>
import { ref, toRefs } from 'vue';

export default {
    name: 'PostComponent',
    props: {
        propsTest: Number,
    },
    //받을 때 파라미터로 받아야됨
    setup(props) {
        let data = ref([]);
        //{부모가 보내준 이름 사용}
        let { propsTest } = toRefs(props);

        console.log(propsTest.value);
        return { data };
    }
}
</script>
<style lang="">
    
</style>
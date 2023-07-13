<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <hr>

  <!-- 데이터 보내줌 -->
  <PostComponent :propsTest="1"/>

  <hr>
  <h1>{{ data.name }}</h1>
  <!-- 버튼 누르면 화면이 리랜더링되면서 홍길동에서 김이박으로 바뀜 -->
  <button @click="data.name='김이박'">김이박</button>

  <h1>{{ data2.name }}</h1>
  <button @click="data2.name='맹구'">맹구</button>
  <br><br>

  <!-- 리랜더링 안됨 -->
  <h1>{{ test }}</h1>
  <button @click="test = 'aaa'">aaa</button>

  <!-- a태그 -->
  <router-link to="/">홈으로</router-link>
  <router-link to="/post">post</router-link>
  <!-- : :자식에게 넘겨줌 -->
  <router-view :test="222"></router-view>

</template>

<script>
import PostComponent from './components/PostComponent.vue';
//ref(refernece):기본적으로 사용
import { ref, reactive } from 'vue';

export default {
  name: 'App',
  setup() {
    //ref를 통하지 않은 것은 리랜더링(데이터 가져오는 것)이 안됨
    //데이터 바인딩이 되려면 ref안에 써야지 밑에꺼 처럼 쓰면 안됨
    let data = ref({
      name: '홍길동', 
      age:20
    });

    //reactive 잘 안 씀
    let data2 = reactive({
      name: '맹구', 
      age:5
    });

    let test = 'bbb';

    return { test, data, data2 }
  },
  components: {
    PostComponent,
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

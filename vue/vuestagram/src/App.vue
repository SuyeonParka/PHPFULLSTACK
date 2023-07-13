<template>
  <!-- header -->
  <div class="header">
    <ul>
      <li class="header-button header-button-left" @click="$store.commit('changeTabFlg', 0); $store.commit('clearState')" v-if="$store.state.tabFlg != 0">취소</li>
      <li>
        <img class="logo" alt="Vue logo" src="./assets/logo.png">
      </li>
      <li class="header-button header-button-right" @click="$store.commit('changeTabFlg', 2)" v-if="$store.state.tabFlg == 1">다음</li>
      <!--writeContent가 store에 axios로 서버에 요청?? -->
      <li class="header-button header-button-right" @click="$store.dispatch('writeContent')" v-if="$store.state.tabFlg == 2">작성</li>
    </ul>
  </div>
{{ $store.state.lastId }}
  <!-- contents -->
  <ContainerComponent/>

  <button v-if="$store.state.addBtnFlg && $store.state.tabFlg == 0" @click="$store.dispatch('getMoreList')">더보기</button>
  <!-- footer -->
  <div class="footer">
    <div class="footer-button-store">
      <label for="file" class="label-store">+</label>
      <!-- accept="imagae/*" 이미지만 보이게 하는 옵션-->
      <!-- updateImg()로 안쓰는 이유 updateImg(e)가 있기 때문에 그냥 함수를 호출만 하는 거라서 -->
      <!-- @change:input안에 뭔가 바뀌었을 때 발동함 -->
      <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
    </div>
  </div>
</template>

<script>
import ContainerComponent from './components/ContainerComponent.vue'
export default {
  name: 'App',
  created() {
    this.$store.dispatch('getMainList');
  },
  methods: {
    //이벤트가 발생했을 때 e에 담겨있음
    //e는 자스에서 자동 생성해 줌(이벤트가 발동했을 때 해당 태그의 모든 정보를 담아줌)
    updateImg(e) {
      //array타입에 file이 들어가있음
      //파일에 저장하고 store에 서버 요청
      let file = e.target.files;
      //imgUrl:임시 url, 서버에 저장할 수 없음
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl', imgUrl);
      this.$store.commit('changeTabFlg', 1);
      //file[0]:store의 state에 저장
      this.$store.commit('changePostImg', file[0]);
      e.target.value = '';
    }
  },
  components: {
    ContainerComponent,
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

@import url('./assets/css/common.css');

</style>

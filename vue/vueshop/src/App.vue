<template>
  <img alt="Vue logo" src="./assets/logo.png">

  <Navi :navList="navList"/>
  <!-- <Navi></Navi>랑 같음 -->

  <!-- <div class="discount" v-if = "hookTest">
    <p>지금 당장 구매하시면, 20% 할인</p>
  </div> -->
  <!-- 데이터 바인딩에서 hookTest가 false가 기본값이니까 버튼을 눌렀을 때는 hookTest가 true가 되는 거임요 -->
  <!-- <button @click="hookTest = !hookTest">훅 테스트</button>
  {{ hookTest }} -->
    <div class="discount">
      <p>지금 당장 구매하시면, {{discountNum}}%할인</p>
    </div>
  <br>
  <!-- @input은 이벤트임 
    input태그에 글자를 적을 때마다 실시간으로 inputTest에 담음
    $event->vue가 자동으로 생성해줌
  -->
  <!-- @input은 우리가 입력한 값을 바로바로 삽입을 하지 연동이 되지는 않음, v-model은 연동됨 -->
  <!-- <input type="text" @input="inputTest = $event.target.value"> -->

  <!-- v-model로 하는 법 -->
  <!-- <input type="text" v-model="inputTest">
  <br>
  <span>{{ inputTest }}</span>
  <br> -->

  <!-- endTran라는 class의 css는 modalFlg가 true일 때만 적용 -->
  <!-- <div class="startTran" :class="{endTran : modalFlg}">
  <Modal 
  @closeModal="modalFlg = false" 
  :modalFlg="modalFlg" 
  :productNum="productNum" 
  :products="products"
  />
  </div> -->

  <Transition name="modalTran">
    <Modal 
      @closeModal="modalFlg = false" 
      :modalFlg="modalFlg" 
      :productNum="productNum" 
      :products="products"
    />
  </Transition>

  <!-- <Modal 
  @closeModal="modalFlg = false" 
  :modalFlg="modalFlg" 
  :productNum="productNum" 
  :products="products"
  @countPlus="plus(productNum)" 
  @countMinus="minus(productNum)" /> -->

  <ProductList 
  :product="product" 
  @toggleModal="modalToggle(i)"
  @product="productNum = i"
  v-for="(product, i) in products"
  :key="i" />
  <!-- 이벤트 핸들러 -->
 
</template>

<script>
// JS파일 받아오기
import data from './assets/js/data.js';

// 컴포넌트
import Navi from './components/Navi.vue';
import ProductList from './components/ProductList.vue';
import Modal from './components/Modal.vue';

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      discountNum: 20
      ,hookTest: false
      ,inputTest: ''
      ,navList: ['홈', '상품', '기타']
      , products: data 
      , product1: '양말'
      // ,price1 : '3800'
      // ,product2 : '바지'
      // ,price2 : '5000'
      // ,styleR : 'color : red'
      , modalFlg: false
      , productNum: 0
    }
  },

  //실시간 감시 함수 정의 영역
  watch: {
    // 우리가 검증하고 싶은 data명 사용해서 함수 만듦
    //(input)은 이름 아무거나 정해도 됨
    //v-model을 사용해야지 올바르게 작동함(event사용하면 alert창 띄워지고 값이 남음)
    inputTest(input) {
      if(input == 3) {
        alert('3333');
        this.inputTest = '';
      }
    }
},
  mounted() {
    const interval = setInterval(() => {
      this.discountNum--;

      if(this.discountNum == 0) {
        clearInterval(interval)
      }
    },1000);
  },
  // 함수를 설정하는 영역
  methods: {
    plus(i) {
      this.products[i].count++;
    }
    , minus(i) {
      if (this.products[i].count > 0) {
        this.products[i].count--;
      }
    }
    , modalToggle(i) {
      this.modalFlg = !this.modalFlg;
      this.productNum = i;
    }
    , modalClose(i) {
      this.modalFlg = false;
      this.products[i].count = 1;
    }
  },
  // 컴포넌트 정의
  components: {
    Navi
    , ProductList
    , Modal
  }
}
</script>

<style>
 @import url('./assets/css/app.css');
</style>
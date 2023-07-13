<template>
  <div class="bg_black" v-if="modalFlg">
      <div class="bg_white">
          <img :src="products[productNum].img" alt="이미지" style="width : 200px; height: 200px;">
          <h4>{{ products[productNum].name }}</h4>
          <p>{{ products[productNum].content }}</p>
          <!-- <p>{{ products[productNum].price * products[productNum].count }}원</p> -->
          <!-- <p>{{ products[productNum].price * inputCount }}원</p>
          <span>{{ products[productNum].count }}</span> -->
          <input type="text" v-model="inputCount">
          <p>{{ products[productNum].price * inputCount }}원</p>
          <span>{{ inputCount }}</span>
          <br>
          <!-- <button @click="$emit('countPlus')">수량증가</button>
          <button @click="$emit('countMinus')">수량감소</button> -->
          <br>
          <button @click="$emit('closeModal'); resetCount();" class="pointer">닫기</button>
          <!-- 함수 안쓰고 초기화하는 방법 -->
          <!-- <button @click="$emit('closeModal'); inputCount = 0;" class="pointer">닫기</button> -->
      </div>
  </div>
</template>
<script>
export default {
  name: 'Modal'
  , data() { // 데이터 바인딩
      return {
        inputCount: 1
      }
    }
  //부모에서 받아오는 데이터 적는 곳
  ,props: {
      modalFlg: Boolean
      ,productNum : Number
      ,products : Array
  },
  // 닫기 창 눌렀다가 다시 모달창 열었을 때 리셋되게
  methods: {
    resetCount() {
      this.inputCount = 1;
    }
  },
  //실시간으로 수량을 최대 10개까지만 가능하게
   watch: {
    //이름이 같아야됨
    inputCount() {
      if(this.inputCount > 10) {
        alert('10개 이상 ㄴㄴ');
        this.inputCount = 10;
      }
    }
  },
}
</script>
<style>
</style>
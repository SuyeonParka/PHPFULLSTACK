<template>
    <div class="all">
        <div class="out">
            <HeaderComponent @update="update()"/>
        </div>
        <div class="mid"></div>
        <div class="in">
            <ListComponent v-for="data in listData" :key="data" :data="data" @del="del(data.id)" @flgupt="flgupt(data)"/>
        </div>
    </div>
</template>
<script>
import HeaderComponent from './components/HeaderComponent.vue';
import ListComponent from './components/ListComponent.vue';

export default {
    name: 'App',
    components: {
        HeaderComponent,
        ListComponent,
    },
    data() {
        return {
            listData: []
        }
    },
    created() {
        this.getMainList();
    },
    methods: {
        createListData(data) {
            this.listData = data;
        },
        getMainList() {
            axios.get('http://localhost:8000/api/items')
            .then(res => {
                console.log(res.data);
                this.createListData(res.data);
            })
            .catch(err => {
                console.log(err)
            })
        },
        storeData(data) {
            this.listData.unshift(data);
        },
        update() {
            let inputBox = document.getElementById('inputBox');

            let sendData = {
                "item" : {
                    "content": inputBox.value 
                }
            }
            // sendData 적는이유 input에 적혀서 등록된 값을 post로 db에 넣어주기 위해서임
            axios.post('http://localhost:8000/api/items',sendData)
            .then(res => {
                console.log(res.data);
                this.storeData(res.data);
                //등록 후 input박스 초기화
                inputBox.value = ''
            })
            .catch(err => {
                console.log(err)
            })
        },
        del(id) {
            axios.delete('http://localhost:8000/api/items/'+id)
            .then(res => {
                const index = this.listData.findIndex(item=>item.id === id);
                this.listData.splice(index,1);
                console.log(res.data);
            })
            .catch(err => {
                console.log(err);
            });
        },
        flgupt(data) {
            let sendData = {
                "item" : {
                    "completed": !data.completed,
                    "completed_at": new Date(),
                }
            }

            axios.put('http://localhost:8000/api/items/'+data.id, sendData)
            .then(res => {
                //새로고침
                const index = this.listData.findIndex(item=>item.id === data.id);
                this.listData[index].completed = !data.completed;
                console.log(res.data);
            })
            .catch(err => {
                console.log(err);
            });
        }
    }
}
</script>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .all {
        margin: 0 auto;
        width: 400px;
    }
    .out {
        width: 400px;
        height: 200px;
        text-align: center;
        border-radius: 20px;
        background-image: linear-gradient(to top, #ebbba7 0%, #cfc7f8 80%);
    }
    .in{
        width: 400px;
        height: 500px;
        text-align: center;
        border-radius: 20px;
        background-image: linear-gradient(to top, #cfc7f8 0%, #ebbba7 80%);
    }
    .mid {
        width: 80px;
        height: 10px;
        /* background-color: rgb(207, 207, 207); */
        text-align: center;
    }
    .box {
        width: 250px;
        height: 20px;
        margin: 10px;
        border-radius: 5px;
    }
    .btn1 {
        width: 50px;
        height: 20px;
        font-size: 8px;
        border-radius: 5px;
        background-color: #000;
        color: #fff;
    }
    .cancelLine {
        text-decoration: line-through;
    }

/* @import url('../resources/css/app.css'); */
</style>
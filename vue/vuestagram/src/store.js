import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    state() {
        return {
            boardData: [], //게시글 데이터 저장하는 변수
            lastId: '', //가장 마지막에 로드된 게시물의 ID
            addBtnFlg: true,    //더보기 버튼 표시용 플래그
            tabFlg: 0,  //탭UI flg (0: 메인페이지,1: 필터페이지,2: 작성페이지)
            imgUrl: '', //이미지 url
            imgFilter: '', //필터 url
            postImg: null,
            postContent: '',
        }
    },
    // 일반적인 자스 함수 정의
    mutations: {
        // 초기 데이터 세팅용
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length - 1].id); //mutations함수 사용법 this.commit, 배열 타입이라서 id이렇게 가져옴

        },
        // 더보기 데이터 세팅용
        addBoardData(state, data) {
            state.boardData.push(data);
            this.commit('changeLastId', data.id);   //객체 타입이라서 바로 id가져오면됨
        },
        // lastID 변경
        changeLastId(state, id) {
            state.lastId = id;  //id를 변경하는 함수
        },
        // 탭UI flg 변경
        changeTabFlg(state, num) {
            state.tabFlg = num;
        },
        // 이미지 url 변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
        },   
        // 필터명 변경
        changeFilter(state, filter) {
            state.imgFilter = filter;
        },
        // 초기화
        clearState(state) {
            state.imgFilter = '';
            state.imgUrl = '';
            state.postImg = null;
        },
        changePostContent(state, content) {
            state.postContent = content;
        },
        changePostImg(state, img) {
            state.postImg = img;
        },
        //작성글 데이터 세팅용
        // unshift:우리가 가지고 있는 배열에 젤 첫번째 방에 데이터를 삽입
        addWriteData(state, data) {
            state.boardData.unshift(data);
        }

    },
    // ajax, 비동기 처리 같이 시간이 좀 오래 걸리는 것들 정의
    // 초기 데이터 가져오기
    // context가 이 store를 가리킴
    actions: {
        getMainList(context) {
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                // console.log(res.data);
                //commit('함수명', 보내줄 데이터)
                //나한테 있는 함수에 붙으려면 this붙여줘야함
                //우리가 보낸 res.data가 mutations에 있는 data에 접근할 수 있음
                context.commit('createBoardData', res.data);
            })
            .catch(err => {
                console.log(err);
            })
        },
        //게시글 추가 습득
        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                if(res.data) {
                    context.commit('addBoardData', res.data);   //data가 있으면 저장
                } else {
                    context.state.addBtnFlg = false;
                    alert('없음요');

                }
            })
            .catch(err => {
                console.log(err);
            })
        },
        //게시글 작성
        writeContent(context) {
            const header = {
                headers: {
                    //img를 보내야되기 때문에 multipart으로 지정
                    'Content-Type' : 'multipart/form-data'
                }
            }
            
            const data = {
                name: '박수연'
                ,img: context.state.postImg
                ,filter: context.state.imgFilter
                ,content: context.state.postContent
            }

            console.log(header);
            console.log(data);
            console.log(context.state.postImg);
            
            //post인 이유 : restapi 규칙에 따라서 (restapi에서 post는 새로운 데이터를 저장하고 싶을 때)
            axios.post('http://192.168.0.66/api/boards',data,header)
            .then(res => {
                // context.state.postImg = null;
                // context.state.postFilter = '';
                // context.state.postContent = '';
                // context.state.tabFlg = 0;
                context.commit('addWriteData', res.data);
                context.commit('changeTabFlg', 0);
                //버그 발생을 줄이기 위해서 클리어
                context.commit('clearState');
                
                alert('작성 완료' + res);
            })
            .catch(err => {
                alert('에러');
                console.log(err);
            })
        }
    }
})

export default store
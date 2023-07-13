import { createWebHistory, createRouter } from "vue-router";
import ContainerComponent from "./components/ContainerComponent.vue";
import PostComponent from "./components/PostComponent.vue";

const routes = [
    {
        path: '/',
        component: ContainerComponent,
    },
    {
        path: '/post',
        component: PostComponent,
    }
];

//router를 보낼려면
//위에서 만든 const가 여기 들어가는거
const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import Prodotti from "./pages/Prodotti";


const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/prodotti",
            name: "prodotti",
            component: Prodotti
        },
        {
            path: "/posts/:slug",
            name: "post-singolo",
            component: SinglePost
        },
    ]
});

export default router
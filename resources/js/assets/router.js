window.Vue = require('vue').default;
import VueRouter from "vue-router";

import PostList from '../components/PostListComponent';
import PostDetail from "../components/PostDetailComponent";
import PostCategory from "../components/PostCategoryComponent";

import CategoryListDefault from "../components/CategoryListDefaultComponent";

import Contact from "../components/ContactComponent";

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/', component: PostList, name: 'list'
        },
        {
            path: '/detail/:id', component: PostDetail, name: 'detail'
        },
        {
            path: '/post-category/:category_id', component: PostCategory, name: 'post-category'
        },
        {
            path: '/contact', component: Contact, name: 'contact'
        },
        {
            path: '/categories', component: CategoryListDefault, name: 'list-category'
        }
    ]
});

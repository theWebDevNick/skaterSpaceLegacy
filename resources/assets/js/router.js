import VueRouter from 'vue-router';
let routes =
    [
        {
            path: '/',
            component: require('./views/Dashboard.vue')
        },
        {
            path: '/login',
            component: require('./views/Login.vue'),
            name: "login"
        },
    ];

export default new VueRouter({
    routes
});
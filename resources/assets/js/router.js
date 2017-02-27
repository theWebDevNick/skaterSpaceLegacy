/**
 * Created by nick on 2/25/17.
 */
import VueRouter from 'vue-router';
let routes =
    [
        {
            path: '/',
            component: require('./views/Dashboard')
        }
    ];

export default new VueRouter({
    routes
});
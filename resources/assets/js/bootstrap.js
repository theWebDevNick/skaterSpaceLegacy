/**
 * Created by nick on 2/25/17.
 */
import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
window.Vue = Vue;
Vue.use(VueRouter);
window.axios =axios;
window.axios.defaults.headers.common={
    'X-requested-With':'XMLHttpRequest'
};
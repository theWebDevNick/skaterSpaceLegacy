import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import Tether from 'tether';
import VueCookie from 'vue-cookie';
window.axios =axios;
window.axios.defaults.headers.common = {
    //'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest',
    'Accept':'Application/json'
};

window.Tether =Tether;
window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueCookie);

require('./mdb-requirements/bootstrap');
require('./mdb-requirements/modules/animations');
require('./mdb-requirements/modules/autocomplete');
require('./mdb-requirements/modules/buttons');
require('./mdb-requirements/modules/card-reveal');
require('./mdb-requirements/modules/character-counter');
require('./mdb-requirements/modules/chart');
require('./mdb-requirements/modules/chips');
require('./mdb-requirements/modules/collapsible');
require('./mdb-requirements/modules/dropdown');
require('./mdb-requirements/modules/enhanced-modals');
require('./mdb-requirements/modules/forms');
require('./mdb-requirements/modules/forms-basic');
require('./mdb-requirements/modules/global');
require('./mdb-requirements/modules/hammer');
require('./mdb-requirements/modules/jquery.easypiechart');
require('./mdb-requirements/modules/jquery.hammer');
require('./mdb-requirements/modules/jquery.jsticky');
require('./mdb-requirements/modules/jquery-easing');
require('./mdb-requirements/modules/lightbox');
require('./mdb-requirements/modules/panel-popuot');
require('./mdb-requirements/modules/picker');
require('./mdb-requirements/modules/picker-time');
require('./mdb-requirements/modules/preloading');
require('./mdb-requirements/modules/rotating-cards');
require('./mdb-requirements/modules/scrolling-nav');
require('./mdb-requirements/modules/sideNav');
require('./mdb-requirements/modules/smooth-scroll');
require('./mdb-requirements/modules/toasts');
require('./mdb-requirements/modules/velocity.min');
require('./mdb-requirements/modules/video-bg');
//require('./mdb-requirements/modules/waves');
require('./mdb-requirements/modules/wow');


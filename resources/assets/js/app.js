require('./bootstrapper');
require('./mdb-requirements/bootstrap');
Vue.component('skaterspace-nav', require('./components/skaterspace-nav.vue'));
import router  from './router';
new Vue({
    el:'#app',
    router
});

// SideNav Initialization
// SideNav init
var Ps = require('./mdb-requirements/modules/scrollbar');
$(".button-collapse").sideNav({
    closeOnClick: true,
});
var el = document.querySelector('.custom-scrollbar');
Ps.initialize(el);

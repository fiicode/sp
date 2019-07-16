require('./bootstrap');
window.Vue = require('vue');

import Spmobile from './components/SpmobileComponent';

//console.log(SPmobile)

//let $app = document.querySelector('#app')


 new Vue({
    el: '#app',
    components: { Spmobile },
});

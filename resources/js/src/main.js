/*=========================================================================================
  File Name: main.js
  Description: main vue(js) file
  ----------------------------------------------------------------------------------------
  Item Name: Vuesax Admin - VueJS Dashboard Admin Template
  Author: Pixinvent
  Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/


import Vue from 'vue'
import App from './App.vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'vue-select/dist/vue-select.css'
import vSelect from 'vue-select'

// Vuesax Component Framework
import Vuesax from 'vuesax'
Vue.use(Vuesax)
Vue.component('v-select', vSelect)
// axios
import axios from "./axios.js"

Vue.prototype.$http = axios

// API Calls
import "./http/requests"

// mock
import "./fake-db/index.js"

// Theme Configurations
import '../themeConfig.js'

// Firebase
// import '@/firebase/firebaseConfig'


// // Auth0 Plugin
// import AuthPlugin from "./plugins/auth"
// Vue.use(AuthPlugin);


// ACL
import acl from './acl/acl'

// Globally Registered Components
import './globalComponents.js'

// Vue Router
import router from './router'

// Vuex Store
import store from './store/store'

// i18n
import i18n from './i18n/i18n'

// Vuesax Admin Filters
import './filters/filters'

// Clipboard
import VueClipboard from 'vue-clipboard2'

Vue.use(VueClipboard);


// Tour
import VueTour from 'vue-tour'

Vue.use(VueTour)
require('vue-tour/dist/vue-tour.css')


// VeeValidate
import VeeValidate from 'vee-validate'

Vue.use(VeeValidate);


// Google Maps
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
        // Add your API key here
        key: 'AIzaSyB4DDathvvwuwlwnUu7F4Sow3oU22y5T1Y',
        libraries: 'places', // This is required if you use the Auto complete plug-in
    },
})

// Vuejs - Vue wrapper for hammerjs
import {VueHammer} from 'vue2-hammer'

Vue.use(VueHammer)


import dataTable from './views/custom/component/table/data-table'
import owDataTable from './views/custom/component/table/ow-data-table'
import status from './views/custom/component/table/status'
Vue.component('status',status);
Vue.component('data-table', dataTable);
Vue.component('ow-data-table', owDataTable);
Vue.component('student-table', require('./views/custom/component/table/student-table').default);
import Datepicker from 'vuejs-datepicker';
Vue.component('datepicker', Datepicker);
import VueQuillEditor from 'vue-quill-editor'

// require styles
import 'quill/dist/quill.core.css'
import 'quill/dist/quill.snow.css'
import 'quill/dist/quill.bubble.css'

Vue.use(VueQuillEditor, /* { default global options } */);

// PrismJS
import 'prismjs'
// import 'prismjs/themes/prism-tomorrow.css'

// Feather font icon
require('@assets/css/iconfont.css')

Vue.config.productionTip = false

new Vue({
    router,
    store,
    i18n,
    acl,
    el: '#app',
    data() {
        return {
            isMaximized: false
        }
    },
    methods: {
        toggleMaximize() {
            if (this.isMaximized) {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen)
                    document.msExitFullscreen()
            } else {
                if (this.$el.requestFullScreen) {
                    this.$el.requestFullScreen();
                } else if (this.$el.mozRequestFullScreen) {
                    this.$el.mozRequestFullScreen();
                } else if (this.$el.webkitRequestFullScreen) {
                    this.$el.webkitRequestFullScreen(this.$el.ALLOW_KEYBOARD_INPUT);
                }
            }
            this.isMaximized=!this.isMaximized
        },
        onFullScreenChange() {
            let fullscreenElement = document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement;
            console.log(fullscreenElement)
            // if in fullscreen mode fullscreenElement won't be null
        }


    },
    render: h => h(App)
}).$mount('#app')

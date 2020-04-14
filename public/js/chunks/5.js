(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[5],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/details.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/details.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_navigation_staff_navigation_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../components/navigation/staff-navigation.vue */ "./resources/js/src/views/components/navigation/staff-navigation.vue");
/* harmony import */ var _includes_profile__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./includes/profile */ "./resources/js/src/views/custom/staff/includes/profile.vue");
/* harmony import */ var _includes_payroll__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./includes/payroll */ "./resources/js/src/views/custom/staff/includes/payroll.vue");
/* harmony import */ var _includes_library__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./includes/library */ "./resources/js/src/views/custom/staff/includes/library.vue");
/* harmony import */ var _includes_attendance__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./includes/attendance */ "./resources/js/src/views/custom/staff/includes/attendance.vue");
/* harmony import */ var _includes_hostel__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./includes/hostel */ "./resources/js/src/views/custom/staff/includes/hostel.vue");
/* harmony import */ var _includes_transport__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./includes/transport */ "./resources/js/src/views/custom/staff/includes/transport.vue");
/* harmony import */ var _includes_docs__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./includes/docs */ "./resources/js/src/views/custom/staff/includes/docs.vue");
/* harmony import */ var _includes_notes__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./includes/notes */ "./resources/js/src/views/custom/staff/includes/notes.vue");
/* harmony import */ var _includes_login_access__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./includes/login-access */ "./resources/js/src/views/custom/staff/includes/login-access.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//










/* harmony default export */ __webpack_exports__["default"] = ({
  components: {
    payroll: _includes_payroll__WEBPACK_IMPORTED_MODULE_2__["default"],
    profile: _includes_profile__WEBPACK_IMPORTED_MODULE_1__["default"],
    attendance: _includes_attendance__WEBPACK_IMPORTED_MODULE_4__["default"],
    loginAccess: _includes_login_access__WEBPACK_IMPORTED_MODULE_9__["default"],
    library: _includes_library__WEBPACK_IMPORTED_MODULE_3__["default"],
    hostel: _includes_hostel__WEBPACK_IMPORTED_MODULE_5__["default"],
    transport: _includes_transport__WEBPACK_IMPORTED_MODULE_6__["default"],
    docs: _includes_docs__WEBPACK_IMPORTED_MODULE_7__["default"],
    notes: _includes_notes__WEBPACK_IMPORTED_MODULE_8__["default"],
    StaffNavigation: _components_navigation_staff_navigation_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      currentView: 'profile',
      item: {}
    };
  },
  created: function created() {
    var _this = this;

    this.$http.get('/json/staff/' + this.$route.params.id + '/view').then(function (res) {
      _this.item = res.data;
    });
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "attendance"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "docs"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "hostel",
  data: function data() {
    return {
      tableHeader1: [{
        name: 'Name',
        field: 'name',
        sort_key: 'name'
      }, {
        name: 'Email',
        field: 'email',
        sort_key: 'email'
      }, {
        name: 'Mobile',
        field: 'mobile'
      }, {
        name: 'PID'
      }]
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/library.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/library.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "library",
  data: function data() {
    return {
      tableHeader1: [{
        name: 'Name',
        field: 'name',
        sort_key: 'name'
      }, {
        name: 'Email',
        field: 'email',
        sort_key: 'email'
      }, {
        name: 'Mobile',
        field: 'mobile'
      }, {
        name: 'PID'
      }]
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "login-access"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "notes",
  data: function data() {
    return {
      tableHeader1: [{
        name: 'Name',
        field: 'name',
        sort_key: 'name'
      }, {
        name: 'Email',
        field: 'email',
        sort_key: 'email'
      }, {
        name: 'Mobile',
        field: 'mobile'
      }, {
        name: 'PID'
      }]
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "payroll"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "profile",
  props: ['profile'],
  computed: {
    fullname: function fullname() {
      console.log(this.profile);
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "transport",
  data: function data() {
    return {
      tableHeader1: [{
        name: 'Name',
        field: 'name',
        sort_key: 'name'
      }, {
        name: 'Email',
        field: 'email',
        sort_key: 'email'
      }, {
        name: 'Mobile',
        field: 'mobile'
      }, {
        name: 'PID'
      }]
    };
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--7-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--7-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, ".profile-user-info[data-v-73d4ef10] {\n  display: table;\n  width: 98%;\n  width: calc(100% - 24px)\n}[dir] .profile-user-info[data-v-73d4ef10] {\n  margin: 0 auto\n}\n.profile-info-row[data-v-73d4ef10] {\n  display: table-row\n}\n.profile-info-name[data-v-73d4ef10],\n.profile-info-value[data-v-73d4ef10] {\n  display: table-cell\n}\n[dir] .profile-info-name[data-v-73d4ef10], [dir] .profile-info-value[data-v-73d4ef10] {\n  border-top: 1px dotted #D5E4F1\n}\n.profile-info-name[data-v-73d4ef10] {\n  font-weight: 400;\n  color: #667E99;\n  width: 150px;\n  vertical-align: middle\n}\n[dir] .profile-info-name[data-v-73d4ef10] {\n  background-color: transparent\n}\n[dir=ltr] .profile-info-name[data-v-73d4ef10] {\n  text-align: right;\n  padding: 6px 10px 6px 4px\n}\n[dir=rtl] .profile-info-name[data-v-73d4ef10] {\n  text-align: left;\n  padding: 6px 4px 6px 10px\n}\n[dir=ltr] .profile-info-value[data-v-73d4ef10] {\n  padding: 6px 4px 6px 6px\n}\n[dir=rtl] .profile-info-value[data-v-73d4ef10] {\n  padding: 6px 6px 6px 4px\n}\n.profile-info-value > span + span[data-v-73d4ef10]:before {\n  display: inline;\n  content: \",\";\n  color: #666\n}\n[dir] .profile-info-value > span + span[data-v-73d4ef10]:before {\n  border-bottom: 1px solid #FFF\n}\n[dir=ltr] .profile-info-value > span + span[data-v-73d4ef10]:before {\n  margin-left: 1px;\n  margin-right: 3px\n}\n[dir=rtl] .profile-info-value > span + span[data-v-73d4ef10]:before {\n  margin-right: 1px;\n  margin-left: 3px\n}\n.profile-info-value > span + span.editable-container[data-v-73d4ef10]:before {\n  display: none\n}\n[dir] .profile-info-row:first-child .profile-info-name[data-v-73d4ef10], [dir] .profile-info-row:first-child .profile-info-value[data-v-73d4ef10] {\n  border-top: none\n}\n[dir] .profile-user-info-striped[data-v-73d4ef10] {\n  border: 1px solid #DCEBF7\n}\n.profile-user-info-striped .profile-info-name[data-v-73d4ef10] {\n  color: #336199\n}\n[dir] .profile-user-info-striped .profile-info-name[data-v-73d4ef10] {\n  background-color: #EDF3F4;\n  border-top: 1px solid #F7FBFF\n}\n[dir] .profile-user-info-striped .profile-info-value[data-v-73d4ef10] {\n  border-top: 1px dotted #DCEBF7\n}\n[dir=ltr] .profile-user-info-striped .profile-info-value[data-v-73d4ef10] {\n  padding-left: 12px\n}\n[dir=rtl] .profile-user-info-striped .profile-info-value[data-v-73d4ef10] {\n  padding-right: 12px\n}\n.profile-picture[data-v-73d4ef10] {\n  display: inline-block;\n  max-width: 100%;\n  box-sizing: border-box\n}\n[dir] .profile-picture[data-v-73d4ef10] {\n  border: 1px solid #CCC;\n  background-color: #FFF;\n  padding: 4px\n}\n[dir=ltr] .profile-picture[data-v-73d4ef10] {\n  box-shadow: 1px 1px 1px rgba(0, 0, 0, .15)\n}\n[dir=rtl] .profile-picture[data-v-73d4ef10] {\n  box-shadow: -1px 1px 1px rgba(0, 0, 0, .15)\n}\n.dd-empty[data-v-73d4ef10],\n.dd-handle[data-v-73d4ef10],\n.dd-placeholder[data-v-73d4ef10],\n.dd2-content[data-v-73d4ef10] {\n  -webkit-box-sizing: border-box;\n  -moz-box-sizing: border-box\n}\n.profile-activity[data-v-73d4ef10] {\n  position: relative\n}\n[dir] .profile-activity[data-v-73d4ef10] {\n  padding: 10px 4px;\n  border-bottom: 1px dotted #D0D8E0\n}\n[dir=ltr] .profile-activity[data-v-73d4ef10] {\n  border-left: 1px dotted #FFF;\n  border-right: 1px dotted #FFF\n}\n[dir=rtl] .profile-activity[data-v-73d4ef10] {\n  border-right: 1px dotted #FFF;\n  border-left: 1px dotted #FFF\n}\n[dir] .profile-activity[data-v-73d4ef10]:first-child {\n  border-top: 1px dotted transparent\n}\n[dir] .profile-activity[data-v-73d4ef10]:first-child:hover {\n  border-top-color: #D0D8E0\n}\n[dir] .profile-activity[data-v-73d4ef10]:hover {\n  background-color: #F4F9FD\n}\n[dir=ltr] .profile-activity[data-v-73d4ef10]:hover {\n  border-left: 1px dotted #D0D8E0;\n  border-right: 1px dotted #D0D8E0\n}\n[dir=rtl] .profile-activity[data-v-73d4ef10]:hover {\n  border-right: 1px dotted #D0D8E0;\n  border-left: 1px dotted #D0D8E0\n}\n.profile-activity img[data-v-73d4ef10] {\n  max-width: 40px\n}\n[dir] .profile-activity img[data-v-73d4ef10] {\n  border: 2px solid #C9D6E5;\n  border-radius: 100%;\n  box-shadow: none\n}\n[dir=ltr] .profile-activity img[data-v-73d4ef10] {\n  margin-right: 10px;\n  margin-left: 0\n}\n[dir=rtl] .profile-activity img[data-v-73d4ef10] {\n  margin-left: 10px;\n  margin-right: 0\n}\n.profile-activity .thumbicon[data-v-73d4ef10] {\n  display: inline-block;\n  width: 38px;\n  height: 38px;\n  color: #FFF;\n  font-size: 18px;\n  line-height: 38px\n}\n[dir] .profile-activity .thumbicon[data-v-73d4ef10] {\n  background-color: #74ABD7;\n  border-radius: 100%;\n  text-align: center;\n  text-shadow: none !important\n}\n[dir=ltr] .profile-activity .thumbicon[data-v-73d4ef10] {\n  margin-right: 10px;\n  margin-left: 0\n}\n[dir=rtl] .profile-activity .thumbicon[data-v-73d4ef10] {\n  margin-left: 10px;\n  margin-right: 0\n}\n.profile-activity .time[data-v-73d4ef10] {\n  display: block;\n  color: #777\n}\n[dir] .profile-activity .time[data-v-73d4ef10] {\n  margin-top: 4px\n}\n.profile-activity a.user[data-v-73d4ef10] {\n  font-weight: 700;\n  color: #9585BF\n}\n.profile-activity .tools[data-v-73d4ef10] {\n  position: absolute;\n  bottom: 8px;\n  display: none\n}\n[dir=ltr] .profile-activity .tools[data-v-73d4ef10] {\n  right: 12px\n}\n[dir=rtl] .profile-activity .tools[data-v-73d4ef10] {\n  left: 12px\n}\n.profile-activity:hover .tools[data-v-73d4ef10] {\n  display: block\n}\n[dir] .profile-contact-links[data-v-73d4ef10] {\n  padding: 4px 2px 5px;\n  border: 1px solid #E0E2E5;\n  background-color: #F8FAFC\n}\n.btn-link:hover .ace-icon[data-v-73d4ef10] {\n  text-decoration: none !important\n}\n.profile-social-links > a:hover > .ace-icon[data-v-73d4ef10],\n.profile-users .memberdiv .name a:hover .ace-icon[data-v-73d4ef10],\n.profile-users .memberdiv .tools > a[data-v-73d4ef10]:hover {\n  text-decoration: none\n}\n.profile-social-links > a[data-v-73d4ef10] {\n  text-decoration: none\n}\n[dir] .profile-social-links > a[data-v-73d4ef10] {\n  margin: 0 1px\n}\n.profile-skills .progress[data-v-73d4ef10] {\n  height: 26px\n}\n[dir] .profile-skills .progress[data-v-73d4ef10] {\n  margin-bottom: 2px;\n  background-color: transparent\n}\n.profile-skills .progress .progress-bar[data-v-73d4ef10] {\n  line-height: 26px;\n  font-size: 13px;\n  font-weight: 700;\n  font-family: \"Open Sans\"\n}\n[dir] .profile-skills .progress .progress-bar[data-v-73d4ef10] {\n  padding: 0 8px\n}\n.profile-users .user[data-v-73d4ef10] {\n  display: block;\n  position: static;\n  width: auto\n}\n[dir] .profile-users .user[data-v-73d4ef10] {\n  text-align: center\n}\n.profile-users .user img[data-v-73d4ef10] {\n  max-width: none;\n  width: 64px;\n  transition: all .1s\n}\n[dir] .profile-users .user img[data-v-73d4ef10] {\n  padding: 2px;\n  border-radius: 100%;\n  border: 1px solid #AAA;\n  -webkit-transition: all .1s\n}\n.profile-users .user img[data-v-73d4ef10]:hover {\n  -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33)\n}\n[dir] .profile-users .user img[data-v-73d4ef10]:hover {\n  box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33)\n}\n.profile-users .memberdiv[data-v-73d4ef10] {\n  width: 100px;\n  box-sizing: border-box\n}\n[dir] .profile-users .memberdiv[data-v-73d4ef10] {\n  background-color: #FFF;\n  border: none;\n  text-align: center;\n  margin: 0 8px 24px\n}\n.profile-users .memberdiv .body[data-v-73d4ef10] {\n  display: inline-block\n}\n[dir] .profile-users .memberdiv .body[data-v-73d4ef10] {\n  margin: 8px 0 0\n}\n.profile-users .memberdiv .popover[data-v-73d4ef10] {\n  visibility: hidden;\n  min-width: 0;\n  max-height: 0;\n  max-width: 0;\n  top: -5%;\n  opacity: 0;\n  display: none;\n  position: absolute;\n  transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s\n}\n[dir] .profile-users .memberdiv .popover[data-v-73d4ef10] {\n  -webkit-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s\n}\n[dir=ltr] .profile-users .memberdiv .popover[data-v-73d4ef10] {\n  margin-left: 0;\n  margin-right: 0;\n  left: auto;\n  right: auto\n}\n[dir=rtl] .profile-users .memberdiv .popover[data-v-73d4ef10] {\n  margin-right: 0;\n  margin-left: 0;\n  right: auto;\n  left: auto\n}\n.profile-users .memberdiv .popover.right[data-v-73d4ef10] {\n  display: block\n}\n[dir=ltr] .profile-users .memberdiv .popover.right[data-v-73d4ef10] {\n  left: 100%;\n  right: auto\n}\n[dir=rtl] .profile-users .memberdiv .popover.right[data-v-73d4ef10] {\n  right: 100%;\n  left: auto\n}\n.profile-users .memberdiv .popover.left[data-v-73d4ef10] {\n  display: block\n}\n[dir=ltr] .profile-users .memberdiv .popover.left[data-v-73d4ef10] {\n  left: auto;\n  right: 100%\n}\n[dir=rtl] .profile-users .memberdiv .popover.left[data-v-73d4ef10] {\n  right: auto;\n  left: 100%\n}\n.profile-users .memberdiv > :first-child:hover .popover[data-v-73d4ef10] {\n  visibility: visible;\n  opacity: 1;\n  z-index: 1060;\n  max-height: 250px;\n  max-width: 250px;\n  min-width: 150px;\n  -webkit-transition-delay: 0s;\n  -moz-transition-delay: 0s;\n  -o-transition-delay: 0s\n}\n[dir] .profile-users .memberdiv > :first-child:hover .popover[data-v-73d4ef10] {\n  transition-delay: 0s\n}\n.profile-users .memberdiv .tools[data-v-73d4ef10] {\n  position: static;\n  display: block;\n  width: 100%\n}\n[dir] .profile-users .memberdiv .tools[data-v-73d4ef10] {\n  margin-top: 2px\n}\n[dir] .profile-users .memberdiv .tools > a[data-v-73d4ef10] {\n  margin: 0 2px\n}\n\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css&":
/*!**************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--7-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--7-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css& ***!
  \**************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../../../node_modules/css-loader??ref--7-1!../../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../../node_modules/postcss-loader/src??ref--7-2!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d&":
/*!****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d& ***!
  \****************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "staff-navigation" },
    [
      _c(
        "router-link",
        { attrs: { to: "/staff" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-list",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Detail\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/add" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-plus",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Registration\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/import" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-upload",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Bulk Registration\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/document" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-files-o",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Documents\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/note" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-sticky-note",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Notes\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/payroll" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-sticky-note",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Payroll\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/library/staff" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-calculator",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Library\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/attendance/staff" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-calendar",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Attendance\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/designation" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-calendar",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Designation\n        ")
          ])
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/details.vue?vue&type=template&id=2be9b97f&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/details.vue?vue&type=template&id=2be9b97f&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c(
      "div",
      { staticClass: "row " },
      [
        _vm._m(0),
        _vm._v(" "),
        _c("staff-navigation"),
        _vm._v(" "),
        _c("vs-divider", { staticClass: "mx-3" }),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "col-md-12" },
          [
            _c("vs-card", [
              _c("h2", { staticClass: "pageTitle" }, [_vm._v("Details")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "p-2" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "profile"
                        }
                      }
                    },
                    [_vm._v("Profile")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "payroll"
                        }
                      }
                    },
                    [_vm._v("Payroll")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "library"
                        }
                      }
                    },
                    [_vm._v("Library")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "attendance"
                        }
                      }
                    },
                    [_vm._v("Attendance")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "hostel"
                        }
                      }
                    },
                    [_vm._v("Hostel")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "transport"
                        }
                      }
                    },
                    [_vm._v("Transport")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "docs"
                        }
                      }
                    },
                    [_vm._v("Docs")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "notes"
                        }
                      }
                    },
                    [_vm._v("Notes")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "login_access"
                        }
                      }
                    },
                    [_vm._v("Login Access\n                    ")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-md-12" },
                [
                  _vm.currentView == "profile"
                    ? _c("profile", { attrs: { profile: _vm.item.staff } })
                    : _vm._e(),
                  _vm._v(" "),
                  _vm.currentView == "payroll"
                    ? _c("payroll")
                    : _vm.currentView == "library"
                    ? _c("library")
                    : _vm.currentView == "attendance"
                    ? _c("attendance")
                    : _vm.currentView == "hostel"
                    ? _c("hostel")
                    : _vm.currentView == "transport"
                    ? _c("transport")
                    : _vm.currentView == "docs"
                    ? _c("docs")
                    : _vm.currentView == "notes"
                    ? _c("notes")
                    : _vm._e(),
                  _vm._v(" "),
                  _vm.currentView == "login_access"
                    ? _c("login-access")
                    : _vm._e()
                ],
                1
              )
            ])
          ],
          1
        )
      ],
      1
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-12" }, [
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Student Manager")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=template&id=125fe0ea&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=template&id=125fe0ea&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [_vm._v("\n    i am attendance\n")])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=template&id=15e589fc&scoped=true&":
/*!****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=template&id=15e589fc&scoped=true& ***!
  \****************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [_vm._v("\n    i am docs\n")])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=template&id=13f76fd0&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=template&id=13f76fd0&scoped=true& ***!
  \******************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-md-12" }, [
        _vm._v("\n            Hostel History\n        ")
      ]),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-12" },
        [
          _c("data-table", {
            attrs: {
              headers: _vm.tableHeader1,
              url: "/student",
              "no-data-message": "No matching records found",
              searchField: _vm.searchData,
              hasSearch: false
            },
            scopedSlots: _vm._u([
              {
                key: "items",
                fn: function(props) {
                  return [
                    _c("vs-td", { attrs: { data: props.data.username } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.email) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.data.username } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.username) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.data.id } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.website) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.id } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.id) +
                          "\n                    "
                      )
                    ])
                  ]
                }
              }
            ])
          })
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/library.vue?vue&type=template&id=d1b16aec&scoped=true&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/library.vue?vue&type=template&id=d1b16aec&scoped=true& ***!
  \*******************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-md-12" }, [
        _vm._v("\n            Library Status List\n        ")
      ]),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-12" },
        [
          _c("data-table", {
            attrs: {
              headers: _vm.tableHeader1,
              url: "/student",
              "no-data-message": "No matching records found",
              searchField: _vm.searchData,
              hasSearch: false
            },
            scopedSlots: _vm._u([
              {
                key: "items",
                fn: function(props) {
                  return [
                    _c("vs-td", { attrs: { data: props.data.username } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.email) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.data.username } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.username) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.data.id } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.website) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.id } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.id) +
                          "\n                    "
                      )
                    ])
                  ]
                }
              }
            ])
          })
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=template&id=45109889&scoped=true&":
/*!************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=template&id=45109889&scoped=true& ***!
  \************************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [_vm._v("\n    i am login-access\n")])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=template&id=3eec7960&scoped=true&":
/*!*****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=template&id=3eec7960&scoped=true& ***!
  \*****************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-md-12" }, [
        _vm._v("\n            Notes List\n        ")
      ]),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-12" },
        [
          _c("data-table", {
            attrs: {
              headers: _vm.tableHeader1,
              url: "/student",
              "no-data-message": "No matching records found",
              searchField: _vm.searchData,
              hasSearch: false
            },
            scopedSlots: _vm._u([
              {
                key: "items",
                fn: function(props) {
                  return [
                    _c("vs-td", { attrs: { data: props.data.username } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.email) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.data.username } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.username) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.data.id } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.website) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.id } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.id) +
                          "\n                    "
                      )
                    ])
                  ]
                }
              }
            ])
          })
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=template&id=74377df4&scoped=true&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=template&id=74377df4&scoped=true& ***!
  \*******************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div")
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=template&id=73d4ef10&scoped=true&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=template&id=73d4ef10&scoped=true& ***!
  \*******************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c(
      "span",
      { staticStyle: { float: "right" } },
      [
        _c(
          "router-link",
          {
            staticClass: "btn-primary btn-sm",
            attrs: { to: "/staff/" + _vm.$route.params.id + "/edit" }
          },
          [
            _c("i", { staticClass: "ace-icon fa fa-pencil" }),
            _vm._v(" Edit\n        ")
          ]
        ),
        _vm._v("\n         | \n        "),
        _vm._m(0)
      ],
      1
    ),
    _vm._v(" "),
    _c("br"),
    _vm._v(" "),
    _vm.fullname
      ? _c("div", { staticClass: "row" }, [
          _vm._m(1),
          _vm._v(" "),
          _c("div", { staticClass: "col-xs-12 col-sm-9" }, [
            _c(
              "div",
              {
                staticClass:
                  "label label-info label-xlg arrowed-in arrowed-right arrowed mb-1 btn btn-warning btn-sm "
              },
              [
                _vm._v(
                  "\n                    " +
                    _vm._s(_vm.profile.fullname) +
                    "\n                "
                )
              ]
            ),
            _vm._v(" "),
            _c("div", { staticClass: "space-6" }),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "profile-user-info profile-user-info-striped" },
              [
                _c("div", { staticClass: "profile-info-row" }, [
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" Reg. No.:")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c(
                      "span",
                      { staticClass: "editable", attrs: { id: "reg_no" } },
                      [_vm._v(_vm._s(_vm.profile.reg_no))]
                    )
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" Join Date :")
                  ]),
                  _vm._v(" "),
                  _vm._m(2)
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "profile-info-row" }, [
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" Name :")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c("span", { staticClass: "editable" }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(_vm.profile.fullname) +
                          "\n                    "
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" DOB :")
                  ]),
                  _vm._v(" "),
                  _vm._m(3)
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "profile-info-row" }, [
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" Gender :")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c("span", { staticClass: "editable" }, [
                      _vm._v(_vm._s(_vm.profile.gender))
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" Blood Group :")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c("span", { staticClass: "editable" }, [
                      _vm._v(_vm._s(_vm.profile.blood_group))
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "profile-info-row" }, [
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" Nationality :")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c("span", { staticClass: "editable" }, [
                      _vm._v(_vm._s(_vm.profile.nationality))
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" MotherTong:")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c("span", { staticClass: "editable" }, [
                      _vm._v(_vm._s(_vm.profile.mother_tongue))
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "profile-info-row" }, [
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" E-mail :")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c("span", { staticClass: "editable" }, [
                      _vm._v(_vm._s(_vm.profile.email))
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" Mobile No :")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c("span", { staticClass: "editable" }, [
                      _vm._v(
                        _vm._s(
                          _vm.profile.mobile_1 + "," + _vm.profile.mobile_2
                        )
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "profile-info-row" }, [
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" Home Tel. :")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c("span", { staticClass: "editable" }, [
                      _vm._v(_vm._s(_vm.profile.home_phone))
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-name" }, [
                    _vm._v(" Qualification:")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "profile-info-value" }, [
                    _c("span", { staticClass: "editable" }, [
                      _vm._v(_vm._s(_vm.profile.qualification))
                    ])
                  ])
                ])
              ]
            )
          ])
        ])
      : _vm._e(),
    _vm._v(" "),
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "space-6" }),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass:
            "label label-info label-xlg arrowed-in arrowed-right arrowed btn btn-primary btn-sm mt-1 mb-1"
        },
        [_vm._v("\n                Permanent Address\n            ")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "space-6" }),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "profile-user-info profile-user-info-striped" },
        [
          _c("div", { staticClass: "profile-info-row" }, [
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" Address :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c("span", { staticClass: "editable" }, [
                _vm._v(_vm._s(_vm.profile.address))
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" State :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c("span", { staticClass: "editable" }, [
                _vm._v(_vm._s(_vm.profile.state))
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" Country :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c("span", { staticClass: "editable" }, [
                _vm._v(_vm._s(_vm.profile.country))
              ])
            ])
          ])
        ]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "space-6" }),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass:
            "label label-info label-xlg arrowed-in arrowed-right arrowed btn btn-primary btn-sm mt-1 mb-1"
        },
        [_vm._v("\n                Temporary Address\n            ")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "space-6" }),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "profile-user-info profile-user-info-striped" },
        [
          _c("div", { staticClass: "profile-info-row" }, [
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" Address :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c("span", { staticClass: "editable" }, [
                _vm._v(_vm._s(_vm.profile.temp_address))
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" State :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c(
                "span",
                {
                  staticClass: "editable",
                  attrs: { id: "permanent_district" }
                },
                [_vm._v(_vm._s(_vm.profile.temp_state))]
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" Country :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c(
                "span",
                { staticClass: "editable", attrs: { id: "permanent_zone" } },
                [_vm._v(_vm._s(_vm.profile.temp_country))]
              )
            ])
          ])
        ]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "space-6" }),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass:
            "label label-info label-xlg arrowed-in arrowed-right arrowed btn btn-primary btn-sm mt-1 mb-1"
        },
        [_vm._v("\n                Parential Info\n            ")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "space-6" }),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "profile-user-info profile-user-info-striped" },
        [
          _c("div", { staticClass: "profile-info-row" }, [
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v("Father Name :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c("span", { staticClass: "editable" }, [
                _vm._v(_vm._s(_vm.profile.father_name))
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" Mother Name :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c("span", { staticClass: "editable" }, [
                _vm._v(_vm._s(_vm.profile.mother_name))
              ])
            ])
          ])
        ]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "space-6" }),
      _vm._v(" "),
      _c("div", { staticClass: "space-6" }),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass:
            "label label-info label-xlg arrowed-in arrowed-right arrowed btn btn-primary btn-sm mt-1 mb-1"
        },
        [_vm._v("\n                Qualification Detail\n            ")]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "space-6" }),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "profile-user-info profile-user-info-striped" },
        [
          _c("div", { staticClass: "profile-info-row" }, [
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" Qualification :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c("span", { staticClass: "editable" }, [
                _vm._v(_vm._s(_vm.profile.qualification))
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" Experience :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c(
                "span",
                {
                  staticClass: "editable",
                  attrs: { id: "guardian_eligibility" }
                },
                [_vm._v(_vm._s(_vm.profile.experience))]
              )
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "profile-info-row" }, [
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" Experience Information :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c(
                "span",
                { staticClass: "editable", attrs: { id: "guardian_office" } },
                [_vm._v(_vm._s(_vm.profile.experience_info))]
              )
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "profile-info-row" }, [
            _c("div", { staticClass: "profile-info-name" }, [
              _vm._v(" Other Informaiton :")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "profile-info-value" }, [
              _c(
                "span",
                { staticClass: "editable", attrs: { id: "mother_mobile_1" } },
                [_vm._v(_vm._s(_vm.profile.other_info))]
              )
            ])
          ])
        ]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "space-4" }),
      _vm._v(" "),
      _vm._m(4)
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "btn-primary btn-sm",
        attrs: { href: "#", onclick: "window.print();" }
      },
      [
        _c("i", { staticClass: "ace-icon fa fa-print" }),
        _vm._v(" Print\n        ")
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-xs-12 col-sm-3 center" }, [
      _c("div", [_c("span", { staticClass: "profile-picture" })])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "profile-info-value" }, [
      _c("span", { staticClass: "editable", attrs: { id: "reg_date" } })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "profile-info-value" }, [
      _c("span", { staticClass: "editable" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: " align-center" }, [
      _c("br"),
      _vm._v(" "),
      _c("br"),
      _vm._v(" "),
      _c("span", { staticClass: "profile-picture" })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=template&id=84b03790&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=template&id=84b03790&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-md-12" }, [
        _vm._v("\n            Transport History\n        ")
      ]),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-12" },
        [
          _c("data-table", {
            attrs: {
              headers: _vm.tableHeader1,
              url: "/student",
              "no-data-message": "No matching records found",
              searchField: _vm.searchData,
              hasSearch: false
            },
            scopedSlots: _vm._u([
              {
                key: "items",
                fn: function(props) {
                  return [
                    _c("vs-td", { attrs: { data: props.data.username } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.email) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.data.username } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.username) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.data.id } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.website) +
                          "\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c("vs-td", { attrs: { data: props.id } }, [
                      _vm._v(
                        "\n                        " +
                          _vm._s(props.data.id) +
                          "\n                    "
                      )
                    ])
                  ]
                }
              }
            ])
          })
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/components/navigation/staff-navigation.vue":
/*!***************************************************************************!*\
  !*** ./resources/js/src/views/components/navigation/staff-navigation.vue ***!
  \***************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./staff-navigation.vue?vue&type=template&id=1078ac4d& */ "./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");

var script = {}


/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__["default"])(
  script,
  _staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__["render"],
  _staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/components/navigation/staff-navigation.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d&":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d& ***!
  \**********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./staff-navigation.vue?vue&type=template&id=1078ac4d& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/details.vue":
/*!*********************************************************!*\
  !*** ./resources/js/src/views/custom/staff/details.vue ***!
  \*********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _details_vue_vue_type_template_id_2be9b97f_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./details.vue?vue&type=template&id=2be9b97f&scoped=true& */ "./resources/js/src/views/custom/staff/details.vue?vue&type=template&id=2be9b97f&scoped=true&");
/* harmony import */ var _details_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./details.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/details.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _details_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _details_vue_vue_type_template_id_2be9b97f_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _details_vue_vue_type_template_id_2be9b97f_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "2be9b97f",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/details.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/details.vue?vue&type=script&lang=js&":
/*!**********************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/details.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./details.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/details.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/details.vue?vue&type=template&id=2be9b97f&scoped=true&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/details.vue?vue&type=template&id=2be9b97f&scoped=true& ***!
  \****************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_template_id_2be9b97f_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./details.vue?vue&type=template&id=2be9b97f&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/details.vue?vue&type=template&id=2be9b97f&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_template_id_2be9b97f_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_template_id_2be9b97f_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/attendance.vue":
/*!*********************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/attendance.vue ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _attendance_vue_vue_type_template_id_125fe0ea_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./attendance.vue?vue&type=template&id=125fe0ea&scoped=true& */ "./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=template&id=125fe0ea&scoped=true&");
/* harmony import */ var _attendance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./attendance.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _attendance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _attendance_vue_vue_type_template_id_125fe0ea_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _attendance_vue_vue_type_template_id_125fe0ea_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "125fe0ea",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/includes/attendance.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./attendance.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=template&id=125fe0ea&scoped=true&":
/*!****************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=template&id=125fe0ea&scoped=true& ***!
  \****************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_template_id_125fe0ea_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./attendance.vue?vue&type=template&id=125fe0ea&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/attendance.vue?vue&type=template&id=125fe0ea&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_template_id_125fe0ea_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_template_id_125fe0ea_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/docs.vue":
/*!***************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/docs.vue ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _docs_vue_vue_type_template_id_15e589fc_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./docs.vue?vue&type=template&id=15e589fc&scoped=true& */ "./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=template&id=15e589fc&scoped=true&");
/* harmony import */ var _docs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./docs.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _docs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _docs_vue_vue_type_template_id_15e589fc_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _docs_vue_vue_type_template_id_15e589fc_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "15e589fc",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/includes/docs.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=script&lang=js&":
/*!****************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./docs.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=template&id=15e589fc&scoped=true&":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=template&id=15e589fc&scoped=true& ***!
  \**********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_template_id_15e589fc_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./docs.vue?vue&type=template&id=15e589fc&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/docs.vue?vue&type=template&id=15e589fc&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_template_id_15e589fc_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_template_id_15e589fc_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/hostel.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/hostel.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _hostel_vue_vue_type_template_id_13f76fd0_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hostel.vue?vue&type=template&id=13f76fd0&scoped=true& */ "./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=template&id=13f76fd0&scoped=true&");
/* harmony import */ var _hostel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./hostel.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _hostel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _hostel_vue_vue_type_template_id_13f76fd0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _hostel_vue_vue_type_template_id_13f76fd0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "13f76fd0",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/includes/hostel.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./hostel.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=template&id=13f76fd0&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=template&id=13f76fd0&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_template_id_13f76fd0_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./hostel.vue?vue&type=template&id=13f76fd0&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/hostel.vue?vue&type=template&id=13f76fd0&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_template_id_13f76fd0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_template_id_13f76fd0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/library.vue":
/*!******************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/library.vue ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _library_vue_vue_type_template_id_d1b16aec_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./library.vue?vue&type=template&id=d1b16aec&scoped=true& */ "./resources/js/src/views/custom/staff/includes/library.vue?vue&type=template&id=d1b16aec&scoped=true&");
/* harmony import */ var _library_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./library.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/includes/library.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _library_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _library_vue_vue_type_template_id_d1b16aec_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _library_vue_vue_type_template_id_d1b16aec_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "d1b16aec",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/includes/library.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/library.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/library.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./library.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/library.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/library.vue?vue&type=template&id=d1b16aec&scoped=true&":
/*!*************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/library.vue?vue&type=template&id=d1b16aec&scoped=true& ***!
  \*************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_template_id_d1b16aec_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./library.vue?vue&type=template&id=d1b16aec&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/library.vue?vue&type=template&id=d1b16aec&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_template_id_d1b16aec_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_template_id_d1b16aec_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/login-access.vue":
/*!***********************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/login-access.vue ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _login_access_vue_vue_type_template_id_45109889_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./login-access.vue?vue&type=template&id=45109889&scoped=true& */ "./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=template&id=45109889&scoped=true&");
/* harmony import */ var _login_access_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./login-access.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _login_access_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _login_access_vue_vue_type_template_id_45109889_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _login_access_vue_vue_type_template_id_45109889_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "45109889",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/includes/login-access.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=script&lang=js&":
/*!************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./login-access.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=template&id=45109889&scoped=true&":
/*!******************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=template&id=45109889&scoped=true& ***!
  \******************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_template_id_45109889_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./login-access.vue?vue&type=template&id=45109889&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/login-access.vue?vue&type=template&id=45109889&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_template_id_45109889_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_template_id_45109889_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/notes.vue":
/*!****************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/notes.vue ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _notes_vue_vue_type_template_id_3eec7960_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./notes.vue?vue&type=template&id=3eec7960&scoped=true& */ "./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=template&id=3eec7960&scoped=true&");
/* harmony import */ var _notes_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./notes.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _notes_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _notes_vue_vue_type_template_id_3eec7960_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _notes_vue_vue_type_template_id_3eec7960_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "3eec7960",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/includes/notes.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./notes.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=template&id=3eec7960&scoped=true&":
/*!***********************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=template&id=3eec7960&scoped=true& ***!
  \***********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_template_id_3eec7960_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./notes.vue?vue&type=template&id=3eec7960&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/notes.vue?vue&type=template&id=3eec7960&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_template_id_3eec7960_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_template_id_3eec7960_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/payroll.vue":
/*!******************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/payroll.vue ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _payroll_vue_vue_type_template_id_74377df4_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./payroll.vue?vue&type=template&id=74377df4&scoped=true& */ "./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=template&id=74377df4&scoped=true&");
/* harmony import */ var _payroll_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./payroll.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _payroll_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _payroll_vue_vue_type_template_id_74377df4_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _payroll_vue_vue_type_template_id_74377df4_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "74377df4",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/includes/payroll.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_payroll_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./payroll.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_payroll_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=template&id=74377df4&scoped=true&":
/*!*************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=template&id=74377df4&scoped=true& ***!
  \*************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_payroll_vue_vue_type_template_id_74377df4_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./payroll.vue?vue&type=template&id=74377df4&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/payroll.vue?vue&type=template&id=74377df4&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_payroll_vue_vue_type_template_id_74377df4_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_payroll_vue_vue_type_template_id_74377df4_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/profile.vue":
/*!******************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/profile.vue ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _profile_vue_vue_type_template_id_73d4ef10_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./profile.vue?vue&type=template&id=73d4ef10&scoped=true& */ "./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=template&id=73d4ef10&scoped=true&");
/* harmony import */ var _profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./profile.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _profile_vue_vue_type_style_index_0_id_73d4ef10_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css& */ "./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _profile_vue_vue_type_template_id_73d4ef10_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _profile_vue_vue_type_template_id_73d4ef10_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "73d4ef10",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/includes/profile.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./profile.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css&":
/*!***************************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css& ***!
  \***************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_id_73d4ef10_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/style-loader!../../../../../../../node_modules/css-loader??ref--7-1!../../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../../node_modules/postcss-loader/src??ref--7-2!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=style&index=0&id=73d4ef10&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_id_73d4ef10_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_id_73d4ef10_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_id_73d4ef10_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_id_73d4ef10_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_7_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_style_index_0_id_73d4ef10_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=template&id=73d4ef10&scoped=true&":
/*!*************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=template&id=73d4ef10&scoped=true& ***!
  \*************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_template_id_73d4ef10_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./profile.vue?vue&type=template&id=73d4ef10&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/profile.vue?vue&type=template&id=73d4ef10&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_template_id_73d4ef10_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_template_id_73d4ef10_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/transport.vue":
/*!********************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/transport.vue ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _transport_vue_vue_type_template_id_84b03790_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./transport.vue?vue&type=template&id=84b03790&scoped=true& */ "./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=template&id=84b03790&scoped=true&");
/* harmony import */ var _transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./transport.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _transport_vue_vue_type_template_id_84b03790_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _transport_vue_vue_type_template_id_84b03790_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "84b03790",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/includes/transport.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./transport.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=template&id=84b03790&scoped=true&":
/*!***************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=template&id=84b03790&scoped=true& ***!
  \***************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_template_id_84b03790_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./transport.vue?vue&type=template&id=84b03790&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/includes/transport.vue?vue&type=template&id=84b03790&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_template_id_84b03790_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_template_id_84b03790_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
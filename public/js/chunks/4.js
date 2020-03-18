(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/details.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/details.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _includes_profile__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./includes/profile */ "./resources/js/src/views/custom/student/includes/profile.vue");
/* harmony import */ var _includes_academic__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./includes/academic */ "./resources/js/src/views/custom/student/includes/academic.vue");
/* harmony import */ var _includes_fees__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./includes/fees */ "./resources/js/src/views/custom/student/includes/fees.vue");
/* harmony import */ var _includes_library__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./includes/library */ "./resources/js/src/views/custom/student/includes/library.vue");
/* harmony import */ var _includes_attendance__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./includes/attendance */ "./resources/js/src/views/custom/student/includes/attendance.vue");
/* harmony import */ var _includes_exam__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./includes/exam */ "./resources/js/src/views/custom/student/includes/exam.vue");
/* harmony import */ var _includes_certificate__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./includes/certificate */ "./resources/js/src/views/custom/student/includes/certificate.vue");
/* harmony import */ var _includes_hostel__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./includes/hostel */ "./resources/js/src/views/custom/student/includes/hostel.vue");
/* harmony import */ var _includes_transport__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./includes/transport */ "./resources/js/src/views/custom/student/includes/transport.vue");
/* harmony import */ var _includes_docs__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./includes/docs */ "./resources/js/src/views/custom/student/includes/docs.vue");
/* harmony import */ var _includes_notes__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./includes/notes */ "./resources/js/src/views/custom/student/includes/notes.vue");
/* harmony import */ var _includes_login_access__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./includes/login-access */ "./resources/js/src/views/custom/student/includes/login-access.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    profile: _includes_profile__WEBPACK_IMPORTED_MODULE_0__["default"],
    attendance: _includes_attendance__WEBPACK_IMPORTED_MODULE_4__["default"],
    academic: _includes_academic__WEBPACK_IMPORTED_MODULE_1__["default"],
    loginAccess: _includes_login_access__WEBPACK_IMPORTED_MODULE_11__["default"],
    library: _includes_library__WEBPACK_IMPORTED_MODULE_3__["default"],
    exam: _includes_exam__WEBPACK_IMPORTED_MODULE_5__["default"],
    fees: _includes_fees__WEBPACK_IMPORTED_MODULE_2__["default"],
    certificate: _includes_certificate__WEBPACK_IMPORTED_MODULE_6__["default"],
    hostel: _includes_hostel__WEBPACK_IMPORTED_MODULE_7__["default"],
    transport: _includes_transport__WEBPACK_IMPORTED_MODULE_8__["default"],
    docs: _includes_docs__WEBPACK_IMPORTED_MODULE_9__["default"],
    notes: _includes_notes__WEBPACK_IMPORTED_MODULE_10__["default"]
  },
  data: function data() {
    return {
      currentView: 'profile',
      datas: {}
    };
  },
  created: function created() {
    var _this = this;

    this.$http.get('/json/student/4/view').then(function (res) {
      _this.datas = res.data;
    });
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/academic.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/academic.vue?vue&type=script&lang=js& ***!
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
  name: "academic"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=script&lang=js& ***!
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
  name: "attendance"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************/
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
  name: "certificate",
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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/docs.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/docs.vue?vue&type=script&lang=js& ***!
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
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "docs"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/exam.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/exam.vue?vue&type=script&lang=js& ***!
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
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "exam"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/fees.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/fees.vue?vue&type=script&lang=js& ***!
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
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "fees"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************/
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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/library.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/library.vue?vue&type=script&lang=js& ***!
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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************/
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
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "login-access"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/notes.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/notes.vue?vue&type=script&lang=js& ***!
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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/profile.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/profile.vue?vue&type=script&lang=js& ***!
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  props: ['profile']
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/transport.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/transport.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************/
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/details.vue?vue&type=template&id=aad3f94c&scoped=true&":
/*!************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/details.vue?vue&type=template&id=aad3f94c&scoped=true& ***!
  \************************************************************************************************************************************************************************************************************************************/
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
        _c("div", { staticClass: "col-md-12" }, [
          _c("h2", { staticClass: "pageTitle" }, [_vm._v("Student Manager")]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "p-2" },
            [
              _c(
                "router-link",
                { attrs: { to: "/student" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [_vm._v("Primary")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [_vm._v("Primary")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [_vm._v("Primary")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [_vm._v("Primary")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [_vm._v("Primary")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _vm._v(
                        "\n                        Primary\n                    "
                      )
                    ]
                  )
                ],
                1
              )
            ],
            1
          )
        ]),
        _vm._v(" "),
        _vm.$root.notification
          ? _c("div", { staticClass: "col-md-12" }, [
              _c(
                "div",
                {
                  staticClass:
                    "mt-2 alert alert-success alert-dismissible display-block",
                  attrs: { role: "alert" }
                },
                [
                  _c(
                    "button",
                    {
                      staticClass: "close",
                      attrs: {
                        type: "button",
                        "data-dismiss": "alert",
                        "aria-label": "Close"
                      },
                      on: {
                        click: function($event) {
                          _vm.$root.notification = ""
                        }
                      }
                    },
                    [
                      _c("span", { attrs: { "aria-hidden": "true" } }, [
                        _vm._v("×")
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c("i", { staticClass: "ace-icon fa fa-hand-o-right" }),
                  _vm._v(
                    "\n                " +
                      _vm._s(_vm.$root.notification) +
                      "\n            "
                  )
                ]
              )
            ])
          : _vm._e(),
        _vm._v(" "),
        _c("vs-divider", { staticClass: "mx-3" }),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "col-md-12" },
          [
            _c("vs-card", { staticClass: "p-4" }, [
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
                          _vm.currentView = "academic"
                        }
                      }
                    },
                    [_vm._v("Academic")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "fees"
                        }
                      }
                    },
                    [_vm._v("Fees")]
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
                          _vm.currentView = "exam"
                        }
                      }
                    },
                    [_vm._v("Exam")]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled" },
                      on: {
                        click: function($event) {
                          _vm.currentView = "certificate"
                        }
                      }
                    },
                    [_vm._v("Certificate\n                       ")]
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
                    [_vm._v("Login Access\n                       ")]
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
                    ? _c("profile", { attrs: { profile: _vm.datas.student } })
                    : _vm.currentView == "academic"
                    ? _c("academic")
                    : _vm.currentView == "fees"
                    ? _c("fees")
                    : _vm.currentView == "library"
                    ? _c("library")
                    : _vm.currentView == "attendance"
                    ? _c("attendance")
                    : _vm.currentView == "exam"
                    ? _c("exam")
                    : _vm.currentView == "certificate"
                    ? _c("certificate")
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
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/academic.vue?vue&type=template&id=ceef533a&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/academic.vue?vue&type=template&id=ceef533a&scoped=true& ***!
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
  return _c("div", [_vm._v("\n    i am academic\n")])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=template&id=55fd3a45&scoped=true&":
/*!************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=template&id=55fd3a45&scoped=true& ***!
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
  return _c("div", [_vm._v("\n    i am attendance\n")])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=template&id=560937eb&scoped=true&":
/*!*************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=template&id=560937eb&scoped=true& ***!
  \*************************************************************************************************************************************************************************************************************************************************/
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/docs.vue?vue&type=template&id=692878d2&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/docs.vue?vue&type=template&id=692878d2&scoped=true& ***!
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
  return _c("div", [_vm._v("\n    i am docs\n")])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/exam.vue?vue&type=template&id=0ba6c77b&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/exam.vue?vue&type=template&id=0ba6c77b&scoped=true& ***!
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
  return _c("div", [_vm._v("\n    i am exam\n")])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/fees.vue?vue&type=template&id=e4cd03ee&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/fees.vue?vue&type=template&id=e4cd03ee&scoped=true& ***!
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
  return _c("div", [_vm._v("\n    i am fees\n")])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=template&id=fe54a2aa&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=template&id=fe54a2aa&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************************/
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/library.vue?vue&type=template&id=73de31e2&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/library.vue?vue&type=template&id=73de31e2&scoped=true& ***!
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=template&id=16bd0724&scoped=true&":
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=template&id=16bd0724&scoped=true& ***!
  \**************************************************************************************************************************************************************************************************************************************************/
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
      _c("div", { staticClass: "col-md-12 my-3" }, [
        _vm._m(0),
        _vm._v(" "),
        _vm._m(1),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "row mx-0" },
          [
            _c(
              "router-link",
              { attrs: { to: "/" } },
              [
                _c(
                  "vs-button",
                  {
                    staticClass: "smBtn btn-success",
                    attrs: { type: "filled" }
                  },
                  [
                    _c("i", {
                      staticClass: "fa fa-book",
                      attrs: { "aria-hidden": "true" }
                    }),
                    _vm._v("\n\t\t\t\t\tUn-Lock User\n\t\t\t\t\t")
                  ]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "router-link",
              { attrs: { to: "/" } },
              [
                _c(
                  "vs-button",
                  {
                    staticClass: "smBtn btn-warning",
                    attrs: { type: "filled" }
                  },
                  [
                    _c("i", {
                      staticClass: "fa fa-plus",
                      attrs: { "aria-hidden": "true" }
                    }),
                    _vm._v("\n\t\t\t\t\t\tLock User\n\t\t\t\t\t")
                  ]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "router-link",
              { attrs: { to: "/" } },
              [
                _c(
                  "vs-button",
                  {
                    staticClass: "smBtn btn-danger",
                    attrs: { type: "filled" }
                  },
                  [
                    _c("i", {
                      staticClass: "fa fa-users",
                      attrs: { "aria-hidden": "true" }
                    }),
                    _vm._v("\n\t\t\t\t\tDelete User\n\t\t\t\t\t")
                  ]
                )
              ],
              1
            )
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "form",
          { staticClass: "form-horizontal mt-5", attrs: { method: "POST" } },
          [
            _c("div", { staticClass: "row" }, [
              _c("label", { staticClass: "col-sm-2 control-label" }, [
                _vm._v("Name")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-sm-4" },
                [_c("vs-input", { staticClass: "w-100" })],
                1
              ),
              _vm._v(" "),
              _c("label", { staticClass: "col-sm-2 control-label" }, [
                _vm._v("Email")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-sm-4" },
                [
                  _c("vs-input", {
                    staticClass: "w-100",
                    attrs: { type: "email" }
                  })
                ],
                1
              )
            ]),
            _vm._v(" "),
            _c("br"),
            _vm._v(" "),
            _c("div", { staticClass: "row" }, [
              _c("label", { staticClass: "col-sm-2 control-label" }, [
                _vm._v("Password")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-sm-4" },
                [_c("vs-input", { staticClass: "w-100" })],
                1
              ),
              _vm._v(" "),
              _c("label", { staticClass: "col-sm-2 control-label" }, [
                _vm._v("Confirm Password")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-sm-4" },
                [_c("vs-input", { staticClass: "w-100" })],
                1
              )
            ]),
            _vm._v(" "),
            _c("br"),
            _vm._v(" "),
            _vm._m(2),
            _vm._v(" "),
            _c("hr", { staticClass: "own-hr my-3" }),
            _vm._v(" "),
            _vm._m(3),
            _vm._v(" "),
            _c("div", { staticClass: "hr hr-24" })
          ]
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-12 mt-3" }, [
        _vm._m(4),
        _vm._v(" "),
        _vm._m(5),
        _vm._v(" "),
        _c(
          "form",
          { staticClass: "form-horizontal mt-5", attrs: { method: "POST" } },
          [
            _c("div", { staticClass: "row" }, [
              _c("label", { staticClass: "col-sm-2 control-label" }, [
                _vm._v("Name")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-sm-4" },
                [_c("vs-input", { staticClass: "w-100" })],
                1
              ),
              _vm._v(" "),
              _c("label", { staticClass: "col-sm-2 control-label" }, [
                _vm._v("Email")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-sm-4" },
                [
                  _c("vs-input", {
                    staticClass: "w-100",
                    attrs: { type: "email" }
                  })
                ],
                1
              )
            ]),
            _vm._v(" "),
            _c("br"),
            _vm._v(" "),
            _c("div", { staticClass: "row" }, [
              _c("label", { staticClass: "col-sm-2 control-label" }, [
                _vm._v("Password")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-sm-4" },
                [_c("vs-input", { staticClass: "w-100" })],
                1
              ),
              _vm._v(" "),
              _c("label", { staticClass: "col-sm-2 control-label" }, [
                _vm._v("Confirm Password")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-sm-4" },
                [_c("vs-input", { staticClass: "w-100" })],
                1
              )
            ]),
            _vm._v(" "),
            _c("br"),
            _vm._v(" "),
            _vm._m(6),
            _vm._v(" "),
            _c("hr", { staticClass: "own-hr my-3" }),
            _vm._v(" "),
            _vm._m(7)
          ]
        )
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h4", { staticClass: "header large lighter blue" }, [
      _c("i", { staticClass: "fa fa-key", attrs: { "aria-hidden": "true" } }),
      _vm._v("\n\t\t        Edit Student Login Access\n\t\t\t")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "mt-2 alert alert-success alert-dismissible display-block",
        attrs: { role: "alert" }
      },
      [
        _c(
          "button",
          {
            staticClass: "close",
            attrs: {
              type: "button",
              "data-dismiss": "alert",
              "aria-label": "Close"
            }
          },
          [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
        ),
        _vm._v(" "),
        _c("i", { staticClass: "ace-icon fa fa-hand-o-right" }),
        _vm._v("\n\t\t\t\talert content\n\t\t\t")
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-sm-4" }, [
      _c("label", [_vm._v("\n\t\t\t\t\t\tActive User\n\t\t\t\t\t")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-12" }, [
      _c(
        "button",
        {
          staticClass: "btn waves-effect waves-light",
          attrs: { type: "reset" }
        },
        [
          _c("i", { staticClass: "fa fa-undo bigger-110" }),
          _vm._v("\n\t\t\t\t\t\tReset\n\t\t\t\t\t")
        ]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-info waves-effect waves-light",
          attrs: { type: "submit" }
        },
        [
          _c("i", { staticClass: "fa fa-save bigger-110" }),
          _vm._v("\n\t\t\t\t\t\tUpdate Detail\n\t\t\t\t\t")
        ]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h4", { staticClass: "header large lighter blue" }, [
      _c("i", { staticClass: "fa fa-key", attrs: { "aria-hidden": "true" } }),
      _vm._v("\n\t\t\t\tCreate Guardian Login Access\n\t\t\t")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "mt-2 alert alert-success alert-dismissible display-block",
        attrs: { role: "alert" }
      },
      [
        _c(
          "button",
          {
            staticClass: "close",
            attrs: {
              type: "button",
              "data-dismiss": "alert",
              "aria-label": "Close"
            }
          },
          [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
        ),
        _vm._v(" "),
        _c("i", { staticClass: "ace-icon fa fa-hand-o-right" }),
        _vm._v("\n\t\t\t\talert content\n\t\t\t")
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-sm-4" }, [
      _c("label", [_vm._v("\n\t\t\t\t\t\tActive User\n\t\t\t\t\t")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-12" }, [
      _c(
        "button",
        {
          staticClass: "btn waves-effect waves-light",
          attrs: { type: "reset" }
        },
        [
          _c("i", { staticClass: "fa fa-undo bigger-110" }),
          _vm._v("\n\t\t\t\t\t\tReset\n\t\t\t\t\t")
        ]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-info waves-effect waves-light",
          attrs: { type: "submit" }
        },
        [
          _c("i", { staticClass: "fa fa-save bigger-110" }),
          _vm._v("\n\t\t\t\t\t\tUpdate Detail\n\t\t\t\t\t")
        ]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/notes.vue?vue&type=template&id=486a85d6&scoped=true&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/notes.vue?vue&type=template&id=486a85d6&scoped=true& ***!
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/profile.vue?vue&type=template&id=1601b606&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/profile.vue?vue&type=template&id=1601b606&scoped=true& ***!
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
  return _vm.profile
    ? _c("div", [
        _c(
          "div",
          { staticClass: "row mx-0" },
          [
            _vm._m(0),
            _vm._v(" "),
            _c("vs-divider", { staticClass: "mx-1" }),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "col-md-12 d-flex justify-content-end w-100" },
              [
                _c("vs-button", { staticClass: "smBtn" }, [
                  _c("i", { staticClass: "fa fa-edit" }),
                  _vm._v(" Edit")
                ]),
                _vm._v(" |\n            "),
                _c("vs-button", { staticClass: "smBtn" }, [
                  _c("i", { staticClass: "fa fa-print" }),
                  _vm._v(" Print")
                ])
              ],
              1
            ),
            _vm._v(" "),
            _c("div", { staticClass: "row w-100" }, [
              _c("div", { staticClass: "col-md-3" }, [
                _c(
                  "div",
                  {
                    staticClass:
                      "d-flex justify-content-center align-items-center w-100"
                  },
                  [
                    _c("img", {
                      staticClass: "img-responsive border mt-3",
                      attrs: { src: _vm.profile.student_image }
                    })
                  ]
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-9" }, [
                _c("br"),
                _vm._v(" "),
                _c(
                  "p",
                  [
                    _c(
                      "vs-button",
                      { staticClass: "smBtn", attrs: { type: "filled" } },
                      [
                        _vm._v(
                          _vm._s(
                            _vm.profile.first_name +
                              " " +
                              _vm.profile.middle_name +
                              " " +
                              _vm.profile.last_name
                          )
                        )
                      ]
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c("div", { staticClass: "data-table" }, [
                  _c("div", { staticClass: "rows" }, [
                    _c("div", { staticClass: "header" }, [_vm._v("faculty:")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(_vm._s(_vm.profile.faculty))
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "header" }, [_vm._v("semester:")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(_vm._s(_vm.profile.semester))
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "rows" }, [
                    _c("div", { staticClass: "header" }, [_vm._v("batch:")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(_vm._s(_vm.profile.batch))
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "header" }),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "rows" }, [
                    _c("div", { staticClass: "header" }, [_vm._v("Reg no:")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(_vm._s(_vm.profile.reg_no))
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "header" }, [_vm._v("reg date")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(" " + _vm._s(_vm.profile.reg_date) + " ")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "rows" }, [
                    _c("div", { staticClass: "header" }, [_vm._v("univ.reg:")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(_vm._s(_vm.profile.university_reg))
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "header" }, [_vm._v("Dob:")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(" 06/01/2020 ")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "rows" }, [
                    _c("div", { staticClass: "header" }, [_vm._v("gender: ")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(" " + _vm._s(_vm.profile.gender) + " ")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "header" }, [
                      _vm._v("blood group:")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v("  " + _vm._s(_vm.profile.blood_group) + "  ")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "rows" }, [
                    _c("div", { staticClass: "header" }, [
                      _vm._v("Religion: ")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(" " + _vm._s(_vm.profile.religion) + " ")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "header" }, [_vm._v("Caste: ")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v("  " + _vm._s(_vm.profile.caste) + "  ")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "rows" }, [
                    _c("div", { staticClass: "header" }, [
                      _vm._v("Nationality:")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(" " + _vm._s(_vm.profile.nationality) + " ")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "header" }, [
                      _vm._v("Mother Tongue: ")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(" " + _vm._s(_vm.profile.mother_tongue) + "  ")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "rows" }, [
                    _c("div", { staticClass: "header" }, [_vm._v("E-mail: ")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content text-lowercase" }, [
                      _vm._v(_vm._s(_vm.profile.email) + " ")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "header" }, [
                      _vm._v("Mobile No : ")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "content" }, [
                      _vm._v(" " + _vm._s(_vm.profile.mobile_1) + " ")
                    ])
                  ])
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row w-100 mt-4" }, [
              _c(
                "div",
                { staticClass: "col-md-12 mx-auto" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn text-capitalize",
                      attrs: { type: "filled" }
                    },
                    [_vm._v(" Permanent Address ")]
                  ),
                  _vm._v(" "),
                  _c("br"),
                  _vm._v(" "),
                  _c("div", { staticClass: "data-table" }, [
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [
                        _vm._v("address:")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.address) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" })
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [_vm._v("state:")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.state) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [_vm._v("country")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.country) + " ")
                      ])
                    ])
                  ])
                ],
                1
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row w-100 mt-4" }, [
              _c(
                "div",
                { staticClass: "col-md-12 mx-auto" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn text-capitalize",
                      attrs: { type: "filled" }
                    },
                    [_vm._v(" Temporary Address ")]
                  ),
                  _vm._v(" "),
                  _c("br"),
                  _vm._v(" "),
                  _c("div", { staticClass: "data-table" }, [
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [
                        _vm._v("address:")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.temp_address) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" })
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [_vm._v("state:")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.temp_state) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [_vm._v("country")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.temp_country) + " ")
                      ])
                    ])
                  ])
                ],
                1
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row w-100 mt-4" }, [
              _c(
                "div",
                { staticClass: "col-md-12 mx-auto" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn text-capitalize",
                      attrs: { type: "filled" }
                    },
                    [_vm._v("Personal Info")]
                  ),
                  _vm._v(" "),
                  _c("br"),
                  _vm._v(" "),
                  _c("div", { staticClass: "data-table" }, [
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [
                        _vm._v("grand father:")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(
                          " " +
                            _vm._s(_vm.profile.grandfather_first_name) +
                            " " +
                            _vm._s(_vm.profile.grandfather_middle_name) +
                            " " +
                            _vm._s(_vm.profile.grandfather_last_name) +
                            "  "
                        )
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("father name:")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(
                          " " +
                            _vm._s(_vm.profile.father_first_name) +
                            " " +
                            _vm._s(_vm.profile.father_middle_name) +
                            " " +
                            _vm._s(_vm.profile.father_last_name) +
                            " "
                        )
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Eligibility ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.father_eligibility) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Occupation  ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.father_occupation))
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [_vm._v("office:")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.father_office) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Office Num :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.father_office_number) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Residence :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(
                          _vm._s(_vm.profile.father_residence_number) + " "
                        )
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [_vm._v("mobile:")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.father_mobile_1) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("mobile 2 :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.father_mobile_2) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [_vm._v("email :")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.father_email) + " ")
                      ])
                    ])
                  ])
                ],
                1
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row w-100 mt-4" }, [
              _c(
                "div",
                { staticClass: "col-md-12 mx-auto" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn text-capitalize",
                      attrs: { type: "filled" }
                    },
                    [_vm._v("Guardian Info")]
                  ),
                  _vm._v(" "),
                  _c("br"),
                  _vm._v(" "),
                  _c("div", { staticClass: "data-table" }, [
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Guardian Name :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(
                          _vm._s(_vm.profile.guardian_first_name) +
                            " " +
                            _vm._s(_vm.profile.guardian_middle_name) +
                            " " +
                            _vm._s(_vm.profile.guardian_last_name) +
                            " "
                        )
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Eligibility :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.guardian_eligibility) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Occupation  ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.guardian_occupation) + " ")
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [_vm._v("Office:")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.guardian_office) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("office number 2 :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.guardian_office_number) + " ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Residence  :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(
                          " " + _vm._s(_vm.profile.guardian_residence_number)
                        )
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [_vm._v("mobile:")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.guardian_mobile_1))
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("mobile 2 :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.guardian_mobile_2))
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [_vm._v("email :")]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.guardian_email))
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "rows" }, [
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Relation :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.guardian_relation))
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }, [
                        _vm._v("Address :")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" }, [
                        _vm._v(_vm._s(_vm.profile.guardian_address))
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "header" }),
                      _vm._v(" "),
                      _c("div", { staticClass: "content" })
                    ])
                  ])
                ],
                1
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row w-100 mt-4" }, [
              _c("div", { staticClass: "col-md-3" }, [
                _c("br"),
                _vm._v(" "),
                _c(
                  "div",
                  {
                    staticClass:
                      "d-flex justify-content-center align-items-center w-100 "
                  },
                  [
                    _c("img", {
                      staticClass: "img-thumbnail mt-3 ",
                      attrs: {
                        src:
                          "https://upload.wikimedia.org/wikipedia/commons/8/87/Sk.wikipedia.org_QR_Code.png"
                      }
                    })
                  ]
                ),
                _vm._v(" "),
                _c("br")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-md-3" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn text-capitalize",
                      attrs: { type: "filled" }
                    },
                    [_vm._v("Guardian ")]
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticClass:
                        "d-flex justify-content-center align-items-center w-100"
                    },
                    [
                      _vm.profile.guardian_image
                        ? _c("img", {
                            staticClass: "img-responsive border my-3",
                            attrs: { src: _vm.profile.guardian_image }
                          })
                        : _c("img", {
                            staticClass: "img-responsive border my-3 ",
                            attrs: {
                              src:
                                "http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg"
                            }
                          })
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-md-3" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn text-capitalize",
                      attrs: { type: "filled" }
                    },
                    [_vm._v("Father")]
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticClass:
                        "d-flex justify-content-center align-items-center w-100"
                    },
                    [
                      _vm.profile.father_image
                        ? _c("img", {
                            staticClass: "img-responsive border my-3",
                            attrs: { src: _vm.profile.father_image }
                          })
                        : _c("img", {
                            staticClass: "img-responsive border my-3 ",
                            attrs: {
                              src:
                                "http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg"
                            }
                          })
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-md-3" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn text-capitalize",
                      attrs: { type: "filled" }
                    },
                    [_vm._v(" Mother")]
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticClass:
                        "d-flex justify-content-center align-items-center w-100"
                    },
                    [
                      _vm.profile.mother_image
                        ? _c("img", {
                            staticClass: "img-responsive border my-3 ",
                            attrs: { src: _vm.profile.mother_image }
                          })
                        : _c("img", {
                            staticClass: "img-responsive border my-3 ",
                            attrs: {
                              src:
                                "http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg"
                            }
                          })
                    ]
                  )
                ],
                1
              )
            ])
          ],
          1
        )
      ])
    : _vm._e()
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass:
          "d-flex justify-content-center flex-column align-items-center mt-4 w-100"
      },
      [
        _c("h2", [_vm._v("Edu MIS")]),
        _vm._v(" "),
        _c("h5", [_vm._v("Earth,12333")]),
        _vm._v(" "),
        _c("h4", [_vm._v("Registration Details")])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/transport.vue?vue&type=template&id=4ec71906&scoped=true&":
/*!***********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/includes/transport.vue?vue&type=template&id=4ec71906&scoped=true& ***!
  \***********************************************************************************************************************************************************************************************************************************************/
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

/***/ "./resources/js/src/views/custom/student/details.vue":
/*!***********************************************************!*\
  !*** ./resources/js/src/views/custom/student/details.vue ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _details_vue_vue_type_template_id_aad3f94c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./details.vue?vue&type=template&id=aad3f94c&scoped=true& */ "./resources/js/src/views/custom/student/details.vue?vue&type=template&id=aad3f94c&scoped=true&");
/* harmony import */ var _details_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./details.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/details.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _details_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _details_vue_vue_type_template_id_aad3f94c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _details_vue_vue_type_template_id_aad3f94c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "aad3f94c",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/details.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/details.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/details.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./details.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/details.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/details.vue?vue&type=template&id=aad3f94c&scoped=true&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/details.vue?vue&type=template&id=aad3f94c&scoped=true& ***!
  \******************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_template_id_aad3f94c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./details.vue?vue&type=template&id=aad3f94c&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/details.vue?vue&type=template&id=aad3f94c&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_template_id_aad3f94c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_details_vue_vue_type_template_id_aad3f94c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/academic.vue":
/*!*********************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/academic.vue ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _academic_vue_vue_type_template_id_ceef533a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./academic.vue?vue&type=template&id=ceef533a&scoped=true& */ "./resources/js/src/views/custom/student/includes/academic.vue?vue&type=template&id=ceef533a&scoped=true&");
/* harmony import */ var _academic_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./academic.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/academic.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _academic_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _academic_vue_vue_type_template_id_ceef533a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _academic_vue_vue_type_template_id_ceef533a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "ceef533a",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/academic.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/academic.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/academic.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_academic_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./academic.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/academic.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_academic_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/academic.vue?vue&type=template&id=ceef533a&scoped=true&":
/*!****************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/academic.vue?vue&type=template&id=ceef533a&scoped=true& ***!
  \****************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_academic_vue_vue_type_template_id_ceef533a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./academic.vue?vue&type=template&id=ceef533a&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/academic.vue?vue&type=template&id=ceef533a&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_academic_vue_vue_type_template_id_ceef533a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_academic_vue_vue_type_template_id_ceef533a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/attendance.vue":
/*!***********************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/attendance.vue ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _attendance_vue_vue_type_template_id_55fd3a45_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./attendance.vue?vue&type=template&id=55fd3a45&scoped=true& */ "./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=template&id=55fd3a45&scoped=true&");
/* harmony import */ var _attendance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./attendance.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _attendance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _attendance_vue_vue_type_template_id_55fd3a45_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _attendance_vue_vue_type_template_id_55fd3a45_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "55fd3a45",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/attendance.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=script&lang=js&":
/*!************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./attendance.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=template&id=55fd3a45&scoped=true&":
/*!******************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=template&id=55fd3a45&scoped=true& ***!
  \******************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_template_id_55fd3a45_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./attendance.vue?vue&type=template&id=55fd3a45&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/attendance.vue?vue&type=template&id=55fd3a45&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_template_id_55fd3a45_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_attendance_vue_vue_type_template_id_55fd3a45_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/certificate.vue":
/*!************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/certificate.vue ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _certificate_vue_vue_type_template_id_560937eb_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./certificate.vue?vue&type=template&id=560937eb&scoped=true& */ "./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=template&id=560937eb&scoped=true&");
/* harmony import */ var _certificate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./certificate.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _certificate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _certificate_vue_vue_type_template_id_560937eb_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _certificate_vue_vue_type_template_id_560937eb_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "560937eb",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/certificate.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_certificate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./certificate.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_certificate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=template&id=560937eb&scoped=true&":
/*!*******************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=template&id=560937eb&scoped=true& ***!
  \*******************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_certificate_vue_vue_type_template_id_560937eb_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./certificate.vue?vue&type=template&id=560937eb&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/certificate.vue?vue&type=template&id=560937eb&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_certificate_vue_vue_type_template_id_560937eb_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_certificate_vue_vue_type_template_id_560937eb_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/docs.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/docs.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _docs_vue_vue_type_template_id_692878d2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./docs.vue?vue&type=template&id=692878d2&scoped=true& */ "./resources/js/src/views/custom/student/includes/docs.vue?vue&type=template&id=692878d2&scoped=true&");
/* harmony import */ var _docs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./docs.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/docs.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _docs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _docs_vue_vue_type_template_id_692878d2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _docs_vue_vue_type_template_id_692878d2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "692878d2",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/docs.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/docs.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/docs.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./docs.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/docs.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/docs.vue?vue&type=template&id=692878d2&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/docs.vue?vue&type=template&id=692878d2&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_template_id_692878d2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./docs.vue?vue&type=template&id=692878d2&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/docs.vue?vue&type=template&id=692878d2&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_template_id_692878d2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_docs_vue_vue_type_template_id_692878d2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/exam.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/exam.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _exam_vue_vue_type_template_id_0ba6c77b_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./exam.vue?vue&type=template&id=0ba6c77b&scoped=true& */ "./resources/js/src/views/custom/student/includes/exam.vue?vue&type=template&id=0ba6c77b&scoped=true&");
/* harmony import */ var _exam_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./exam.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/exam.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _exam_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _exam_vue_vue_type_template_id_0ba6c77b_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _exam_vue_vue_type_template_id_0ba6c77b_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "0ba6c77b",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/exam.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/exam.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/exam.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_exam_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./exam.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/exam.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_exam_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/exam.vue?vue&type=template&id=0ba6c77b&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/exam.vue?vue&type=template&id=0ba6c77b&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_exam_vue_vue_type_template_id_0ba6c77b_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./exam.vue?vue&type=template&id=0ba6c77b&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/exam.vue?vue&type=template&id=0ba6c77b&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_exam_vue_vue_type_template_id_0ba6c77b_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_exam_vue_vue_type_template_id_0ba6c77b_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/fees.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/fees.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _fees_vue_vue_type_template_id_e4cd03ee_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./fees.vue?vue&type=template&id=e4cd03ee&scoped=true& */ "./resources/js/src/views/custom/student/includes/fees.vue?vue&type=template&id=e4cd03ee&scoped=true&");
/* harmony import */ var _fees_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./fees.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/fees.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _fees_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _fees_vue_vue_type_template_id_e4cd03ee_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _fees_vue_vue_type_template_id_e4cd03ee_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "e4cd03ee",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/fees.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/fees.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/fees.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_fees_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./fees.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/fees.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_fees_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/fees.vue?vue&type=template&id=e4cd03ee&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/fees.vue?vue&type=template&id=e4cd03ee&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_fees_vue_vue_type_template_id_e4cd03ee_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./fees.vue?vue&type=template&id=e4cd03ee&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/fees.vue?vue&type=template&id=e4cd03ee&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_fees_vue_vue_type_template_id_e4cd03ee_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_fees_vue_vue_type_template_id_e4cd03ee_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/hostel.vue":
/*!*******************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/hostel.vue ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _hostel_vue_vue_type_template_id_fe54a2aa_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hostel.vue?vue&type=template&id=fe54a2aa&scoped=true& */ "./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=template&id=fe54a2aa&scoped=true&");
/* harmony import */ var _hostel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./hostel.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _hostel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _hostel_vue_vue_type_template_id_fe54a2aa_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _hostel_vue_vue_type_template_id_fe54a2aa_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "fe54a2aa",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/hostel.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=script&lang=js&":
/*!********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./hostel.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=template&id=fe54a2aa&scoped=true&":
/*!**************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=template&id=fe54a2aa&scoped=true& ***!
  \**************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_template_id_fe54a2aa_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./hostel.vue?vue&type=template&id=fe54a2aa&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/hostel.vue?vue&type=template&id=fe54a2aa&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_template_id_fe54a2aa_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_hostel_vue_vue_type_template_id_fe54a2aa_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/library.vue":
/*!********************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/library.vue ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _library_vue_vue_type_template_id_73de31e2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./library.vue?vue&type=template&id=73de31e2&scoped=true& */ "./resources/js/src/views/custom/student/includes/library.vue?vue&type=template&id=73de31e2&scoped=true&");
/* harmony import */ var _library_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./library.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/library.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _library_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _library_vue_vue_type_template_id_73de31e2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _library_vue_vue_type_template_id_73de31e2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "73de31e2",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/library.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/library.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/library.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./library.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/library.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/library.vue?vue&type=template&id=73de31e2&scoped=true&":
/*!***************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/library.vue?vue&type=template&id=73de31e2&scoped=true& ***!
  \***************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_template_id_73de31e2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./library.vue?vue&type=template&id=73de31e2&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/library.vue?vue&type=template&id=73de31e2&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_template_id_73de31e2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_library_vue_vue_type_template_id_73de31e2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/login-access.vue":
/*!*************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/login-access.vue ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _login_access_vue_vue_type_template_id_16bd0724_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./login-access.vue?vue&type=template&id=16bd0724&scoped=true& */ "./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=template&id=16bd0724&scoped=true&");
/* harmony import */ var _login_access_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./login-access.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _login_access_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _login_access_vue_vue_type_template_id_16bd0724_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _login_access_vue_vue_type_template_id_16bd0724_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "16bd0724",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/login-access.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./login-access.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=template&id=16bd0724&scoped=true&":
/*!********************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=template&id=16bd0724&scoped=true& ***!
  \********************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_template_id_16bd0724_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./login-access.vue?vue&type=template&id=16bd0724&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/login-access.vue?vue&type=template&id=16bd0724&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_template_id_16bd0724_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_login_access_vue_vue_type_template_id_16bd0724_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/notes.vue":
/*!******************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/notes.vue ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _notes_vue_vue_type_template_id_486a85d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./notes.vue?vue&type=template&id=486a85d6&scoped=true& */ "./resources/js/src/views/custom/student/includes/notes.vue?vue&type=template&id=486a85d6&scoped=true&");
/* harmony import */ var _notes_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./notes.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/notes.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _notes_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _notes_vue_vue_type_template_id_486a85d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _notes_vue_vue_type_template_id_486a85d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "486a85d6",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/notes.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/notes.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/notes.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./notes.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/notes.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/notes.vue?vue&type=template&id=486a85d6&scoped=true&":
/*!*************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/notes.vue?vue&type=template&id=486a85d6&scoped=true& ***!
  \*************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_template_id_486a85d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./notes.vue?vue&type=template&id=486a85d6&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/notes.vue?vue&type=template&id=486a85d6&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_template_id_486a85d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_notes_vue_vue_type_template_id_486a85d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/profile.vue":
/*!********************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/profile.vue ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _profile_vue_vue_type_template_id_1601b606_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./profile.vue?vue&type=template&id=1601b606&scoped=true& */ "./resources/js/src/views/custom/student/includes/profile.vue?vue&type=template&id=1601b606&scoped=true&");
/* harmony import */ var _profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./profile.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/profile.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _profile_vue_vue_type_template_id_1601b606_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _profile_vue_vue_type_template_id_1601b606_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "1601b606",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/profile.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/profile.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/profile.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./profile.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/profile.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/profile.vue?vue&type=template&id=1601b606&scoped=true&":
/*!***************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/profile.vue?vue&type=template&id=1601b606&scoped=true& ***!
  \***************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_template_id_1601b606_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./profile.vue?vue&type=template&id=1601b606&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/profile.vue?vue&type=template&id=1601b606&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_template_id_1601b606_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_template_id_1601b606_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/transport.vue":
/*!**********************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/transport.vue ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _transport_vue_vue_type_template_id_4ec71906_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./transport.vue?vue&type=template&id=4ec71906&scoped=true& */ "./resources/js/src/views/custom/student/includes/transport.vue?vue&type=template&id=4ec71906&scoped=true&");
/* harmony import */ var _transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./transport.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/includes/transport.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _transport_vue_vue_type_template_id_4ec71906_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _transport_vue_vue_type_template_id_4ec71906_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "4ec71906",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/includes/transport.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/transport.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/transport.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./transport.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/transport.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/includes/transport.vue?vue&type=template&id=4ec71906&scoped=true&":
/*!*****************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/includes/transport.vue?vue&type=template&id=4ec71906&scoped=true& ***!
  \*****************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_template_id_4ec71906_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./transport.vue?vue&type=template&id=4ec71906&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/includes/transport.vue?vue&type=template&id=4ec71906&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_template_id_4ec71906_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_transport_vue_vue_type_template_id_4ec71906_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
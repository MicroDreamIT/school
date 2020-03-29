(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[125],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/library/members/staff.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/library/members/staff.vue?vue&type=script&lang=js& ***!
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  data: function data() {
    return {
      studentHeader: [{
        name: 'Faculty/Class',
        sort_key: 'name'
      }, {
        name: 'Sem',
        sort_key: ''
      }, {
        name: 'Reg.Num',
        sort_key: ''
      }, {
        name: 'Student Name',
        sort_key: ''
      }, {
        name: 'Status',
        sort_key: ''
      }, {
        name: 'Action',
        sort_key: ''
      }, {
        name: 'Service Activation',
        sort_key: ''
      }]
    };
  },
  created: function created() {},
  methods: {
    viewItems: function viewItems() {
      alert("hey hasib im view ");
    },
    editItems: function editItems() {
      alert("hey hasib im edit ");
    },
    deleteItems: function deleteItems() {
      alert("hey hasib im delete ");
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/library/members/staff.vue?vue&type=template&id=6d277a02&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/library/members/staff.vue?vue&type=template&id=6d277a02&scoped=true& ***!
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
    _c(
      "div",
      { staticClass: "row " },
      [
        _c("div", { staticClass: "col-md-12" }, [
          _c("h2", { staticClass: "pageTitle" }, [
            _vm._v("Books Manager\n                ")
          ]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "p-2" },
            [
              _c(
                "router-link",
                { attrs: { to: "/library/book" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-book",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Book Detail\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/library/issue-history" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-history",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Issue History\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/library/member" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-users",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Membership\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/library/student" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-users",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Students Member\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/library/staff" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-users",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Staffs Member\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/library/return-over" } },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled", color: "warning" }
                    },
                    [
                      _c("i", {
                        staticClass: "fa fa-clock-o",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Return Period Over\n                        "
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
        _c("vs-divider", { staticClass: "mx-3" }),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "col-md-12" },
          [
            _c(
              "vs-card",
              [
                _c("staff-table", {
                  attrs: {
                    headers: _vm.studentHeader,
                    tableHeader: "Library Member Staff List",
                    suggestText:
                      "Library Member Staff Record list on table. Filter Library Member Staff using the filter.",
                    url: "/json/student/",
                    noDataMessage:
                      "No Staff data found. Please Filter Staff to show.",
                    hasSearch: true,
                    "has-multiple": true,
                    "has-pagination": true,
                    filterSection: true
                  },
                  scopedSlots: _vm._u([
                    {
                      key: "items",
                      fn: function(props) {
                        return [
                          _c(
                            "vs-td",
                            {
                              staticClass: "pointer-none",
                              attrs: { data: props.data.faculty }
                            },
                            [
                              _vm._v(
                                "\n\t\t\t\t\t\t\t\t" +
                                  _vm._s(props.data.faculty) +
                                  "\n\t\t\t\t\t\t\t"
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "vs-td",
                            { attrs: { data: props.data.semester } },
                            [
                              _vm._v(
                                "\n\t\t\t\t\t\t\t\t" +
                                  _vm._s(props.data.semester) +
                                  "\n\t\t\t\t\t\t\t"
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c("vs-td", { attrs: { data: props.data.reg_no } }, [
                            _vm._v(
                              "\n\t\t\t\t\t\t\t\t" +
                                _vm._s(props.data.reg_no) +
                                "\n\t\t\t\t\t\t\t"
                            )
                          ]),
                          _vm._v(" "),
                          _c("vs-td", { attrs: { data: props.data.name } }, [
                            _vm._v(
                              "\n\t\t\t\t\t\t\t\t" +
                                _vm._s(
                                  props.data.first_name +
                                    " " +
                                    props.data.middle_name +
                                    " " +
                                    props.data.last_name
                                ) +
                                "\n\t\t\t\t\t\t\t"
                            )
                          ]),
                          _vm._v(" "),
                          _c("vs-td", [
                            _vm._v(
                              "\n\t\t\t\t\t\t\t\t" +
                                _vm._s(
                                  props.data.academic_status +
                                    " " +
                                    props.data.status
                                ) +
                                "\n\t\t\t\t\t\t\t"
                            )
                          ]),
                          _vm._v(" "),
                          _c("vs-td", [
                            _vm._v("\n\t\t\t\t\t\t\t\tstatus\n\t\t\t\t\t\t\t")
                          ]),
                          _vm._v(" "),
                          _c("vs-td", [
                            _vm._v(
                              "\n\t\t\t\t\t\t\t\tService Activations\n\t\t\t\t\t\t\t"
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

/***/ "./resources/js/src/views/custom/library/members/staff.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/library/members/staff.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _staff_vue_vue_type_template_id_6d277a02_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./staff.vue?vue&type=template&id=6d277a02&scoped=true& */ "./resources/js/src/views/custom/library/members/staff.vue?vue&type=template&id=6d277a02&scoped=true&");
/* harmony import */ var _staff_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./staff.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/library/members/staff.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _staff_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _staff_vue_vue_type_template_id_6d277a02_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _staff_vue_vue_type_template_id_6d277a02_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "6d277a02",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/library/members/staff.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/library/members/staff.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/library/members/staff.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./staff.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/library/members/staff.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/library/members/staff.vue?vue&type=template&id=6d277a02&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/library/members/staff.vue?vue&type=template&id=6d277a02&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_vue_vue_type_template_id_6d277a02_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./staff.vue?vue&type=template&id=6d277a02&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/library/members/staff.vue?vue&type=template&id=6d277a02&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_vue_vue_type_template_id_6d277a02_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_vue_vue_type_template_id_6d277a02_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[15],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/books-status.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/academics/books-status.vue?vue&type=script&lang=js& ***!
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
/* harmony default export */ __webpack_exports__["default"] = ({
  components: {},
  name: "payment-method",
  data: function data() {
    return {
      searchData: {},
      tableHeader: [{
        name: 'Email',
        field: 'email',
        sort_key: 'email'
      }, {
        name: 'Name',
        field: 'name',
        sort_key: 'name'
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/books-status.vue?vue&type=template&id=7a6587c8&scoped=true&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/academics/books-status.vue?vue&type=template&id=7a6587c8&scoped=true& ***!
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
    _c("div", { staticClass: "row " }, [
      _vm._m(0),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-12" },
        [
          _c("vs-card", [
            _c("div", { staticClass: "row p-4" }, [
              _c(
                "div",
                { staticClass: "col-md-6" },
                [
                  _c("h4", [_vm._v(" Create Books Status")]),
                  _c("br"),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "form-group row mb-3" },
                    [
                      _c("label", { staticClass: "col-sm-3" }, [
                        _vm._v(" Books Status")
                      ]),
                      _vm._v(" "),
                      _c("vs-input", { staticClass: "col-sm-9" })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c("vs-divider"),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "my-round",
                      attrs: { color: "#00b8cf", type: "filled" }
                    },
                    [_vm._v("Create\n                        ")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-md-6" },
                [
                  _c("h4", { staticClass: "header large lighter blue" }, [
                    _c("i", {
                      staticClass: "fa fa-list",
                      attrs: { "aria-hidden": "true" }
                    }),
                    _vm._v(
                      "\n                            Books Status List\n                        "
                    )
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "clearfix mt-3" }, [
                    _c("div", { staticClass: "easy-link-menu" }, [
                      _c(
                        "a",
                        { staticClass: "btn-success btn-sm bulk-action-btn" },
                        [
                          _c("i", {
                            staticClass: "fa fa-check",
                            attrs: { "aria-hidden": "true" }
                          }),
                          _vm._v(" Active")
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "a",
                        { staticClass: "btn-warning btn-sm bulk-action-btn" },
                        [
                          _c("i", {
                            staticClass: "fa fa-remove",
                            attrs: { "aria-hidden": "true" }
                          }),
                          _vm._v(
                            "\n                                    In-Active"
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "a",
                        { staticClass: "btn-danger btn-sm bulk-action-btn" },
                        [
                          _c("i", {
                            staticClass: "fa fa-trash",
                            attrs: { "aria-hidden": "true" }
                          }),
                          _vm._v(" Delete")
                        ]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("br"),
                  _vm._v(" "),
                  _c("div", { staticClass: "table-header" }, [
                    _vm._v(
                      "\n                            Books Status Record list on table. Filter Books Status using the filter.\n                        "
                    )
                  ]),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "dt-buttons btn-group action-group mt-3" },
                    [
                      _c(
                        "button",
                        {
                          staticClass:
                            "btn btn-secondary buttons-copy buttons-html5",
                          attrs: {
                            tabindex: "0",
                            "aria-controls": "DataTables_Table_0"
                          }
                        },
                        [_c("span", [_vm._v("Copy")])]
                      ),
                      _vm._v(" "),
                      _c(
                        "button",
                        {
                          staticClass:
                            "btn btn-secondary buttons-pdf buttons-html5",
                          attrs: {
                            tabindex: "0",
                            "aria-controls": "DataTables_Table_0"
                          }
                        },
                        [_c("span", [_vm._v("PDF")])]
                      ),
                      _vm._v(" "),
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-secondary",
                          attrs: {
                            tabindex: "0",
                            "aria-controls": "DataTables_Table_0"
                          }
                        },
                        [_c("span", [_vm._v("JSON")])]
                      ),
                      _vm._v(" "),
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-secondary buttons-print",
                          attrs: {
                            tabindex: "0",
                            "aria-controls": "DataTables_Table_0"
                          }
                        },
                        [_c("span", [_vm._v("Print")])]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c("data-table", {
                    attrs: {
                      headers: _vm.tableHeader,
                      url: "/student",
                      "no-data-message":
                        "No Day data found. Please Filter Day to show.",
                      searchField: _vm.searchData,
                      hasSearch: true,
                      "has-multiple": true
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
                                attrs: { data: props.data.username }
                              },
                              [
                                _vm._v(
                                  "\n                                    " +
                                    _vm._s(props.data.email) +
                                    "\n                                "
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-td",
                              { attrs: { data: props.data.username } },
                              [
                                _vm._v(
                                  "\n                                    " +
                                    _vm._s(props.data.username) +
                                    "\n                                "
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c("vs-td", { attrs: { data: props.data.id } }, [
                              _vm._v(
                                "\n                                    " +
                                  _vm._s(props.data.website) +
                                  "\n                                "
                              )
                            ]),
                            _vm._v(" "),
                            _c("vs-td", { attrs: { data: props.id } }, [
                              _vm._v(
                                "\n                                    " +
                                  _vm._s(props.data.id) +
                                  "\n                                "
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
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-12" }, [
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Books Status Manager")]),
      _vm._v(" "),
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
              }
            },
            [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
          ),
          _vm._v(" "),
          _c("i", { staticClass: "ace-icon fa fa-hand-o-right" }),
          _vm._v(
            "\n                Please, Create Year and Active\n            "
          )
        ]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/academics/books-status.vue":
/*!******************************************************************!*\
  !*** ./resources/js/src/views/custom/academics/books-status.vue ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _books_status_vue_vue_type_template_id_7a6587c8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./books-status.vue?vue&type=template&id=7a6587c8&scoped=true& */ "./resources/js/src/views/custom/academics/books-status.vue?vue&type=template&id=7a6587c8&scoped=true&");
/* harmony import */ var _books_status_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./books-status.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/academics/books-status.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _books_status_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _books_status_vue_vue_type_template_id_7a6587c8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _books_status_vue_vue_type_template_id_7a6587c8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "7a6587c8",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/academics/books-status.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/academics/books-status.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/academics/books-status.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_books_status_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./books-status.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/books-status.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_books_status_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/academics/books-status.vue?vue&type=template&id=7a6587c8&scoped=true&":
/*!*************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/academics/books-status.vue?vue&type=template&id=7a6587c8&scoped=true& ***!
  \*************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_books_status_vue_vue_type_template_id_7a6587c8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./books-status.vue?vue&type=template&id=7a6587c8&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/books-status.vue?vue&type=template&id=7a6587c8&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_books_status_vue_vue_type_template_id_7a6587c8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_books_status_vue_vue_type_template_id_7a6587c8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
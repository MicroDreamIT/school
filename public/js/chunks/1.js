(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js& ***!
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      searchData: {},
      tableHeader1: [{
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&scoped=true& ***!
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
        _vm._m(0),
        _vm._v(" "),
        _c("vs-divider", { staticClass: "mx-3" }),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "col-md-12" },
          [
            _c("vs-card", [
              _c(
                "div",
                { staticClass: "row mx-0" },
                [
                  _c(
                    "div",
                    { staticClass: "col-md-12" },
                    [
                      _c(
                        "router-link",
                        { attrs: { to: "/assignment" } },
                        [
                          _c(
                            "vs-button",
                            { staticClass: "smBtn", attrs: { type: "filled" } },
                            [_vm._v("Assignment Detail")]
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "router-link",
                        { attrs: { to: "/assignment/add" } },
                        [
                          _c(
                            "vs-button",
                            { staticClass: "smBtn", attrs: { type: "filled" } },
                            [_vm._v("New Assignment")]
                          )
                        ],
                        1
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c("vs-divider", { staticClass: "mx-3" }),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "col-md-12 mb-2" },
                    [
                      _c(
                        "vs-collapse",
                        { staticClass: "custom-collapse" },
                        [
                          _c("vs-collapse-item", [
                            _c(
                              "div",
                              { attrs: { slot: "header" }, slot: "header" },
                              [
                                _c(
                                  "vs-button",
                                  {
                                    attrs: {
                                      type: "filled",
                                      color: "primary",
                                      icon: "double_arrow"
                                    }
                                  },
                                  [
                                    _vm._v(
                                      "\n                                        Filter Assignment\n                                    "
                                    )
                                  ]
                                )
                              ],
                              1
                            ),
                            _vm._v(" "),
                            _c("div", { staticClass: "filterBox" }, [
                              _c("div", { staticClass: "col-md-12" }, [
                                _c("div", { staticClass: "row" }, [
                                  _c("div", { staticClass: "col-md-4" }, [
                                    _c(
                                      "div",
                                      { staticClass: "form-group" },
                                      [
                                        _c("label", [_vm._v("Year:")]),
                                        _vm._v(" "),
                                        _c("v-select", {
                                          attrs: {
                                            options: ["2010", "2011"],
                                            placeholder: "Select Year"
                                          }
                                        })
                                      ],
                                      1
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "col-md-4" }, [
                                    _c(
                                      "div",
                                      { staticClass: "form-group" },
                                      [
                                        _c("label", [_vm._v("Faculty/Class")]),
                                        _vm._v(" "),
                                        _c("v-select", {
                                          attrs: {
                                            options: ["B.TECH", "B.SC."],
                                            placeholder: "Select Faculty/Class"
                                          }
                                        })
                                      ],
                                      1
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "col-md-4" }, [
                                    _c(
                                      "div",
                                      { staticClass: "form-group" },
                                      [
                                        _c("label", [_vm._v("Sem./Sec.")]),
                                        _vm._v(" "),
                                        _c("v-select", {
                                          attrs: {
                                            options: ["1st", "2nd"],
                                            placeholder: "Select Sem./Sec."
                                          }
                                        })
                                      ],
                                      1
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "col-md-6" }, [
                                    _c(
                                      "div",
                                      { staticClass: "form-group" },
                                      [
                                        _c("label", [_vm._v("Subject")]),
                                        _vm._v(" "),
                                        _c("v-select", {
                                          attrs: {
                                            options: ["A", "B"],
                                            placeholder: "Select Subject"
                                          }
                                        })
                                      ],
                                      1
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "col-md-6" }, [
                                    _c("div", { staticClass: "form-group" }, [
                                      _c("label", [_vm._v("Publish Date")]),
                                      _vm._v(" "),
                                      _c(
                                        "div",
                                        {
                                          staticClass:
                                            "d-flex justify-content-between flex-wrap"
                                        },
                                        [
                                          _c("datepicker", {
                                            model: {
                                              value: _vm.searchData.start_date,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.searchData,
                                                  "start_date",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "searchData.start_date"
                                            }
                                          }),
                                          _vm._v(" "),
                                          _c("label", [_vm._v("To")]),
                                          _vm._v(" "),
                                          _c("datepicker", {
                                            model: {
                                              value: _vm.searchData.end_date,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.searchData,
                                                  "end_date",
                                                  $$v
                                                )
                                              },
                                              expression: "searchData.end_date"
                                            }
                                          })
                                        ],
                                        1
                                      )
                                    ])
                                  ])
                                ])
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                { staticClass: "col-md-12 mb-2 pl-0" },
                                [
                                  _c(
                                    "vs-button",
                                    {
                                      attrs: {
                                        type: "filled",
                                        color: "#00b8cf",
                                        icon: "double_arrow"
                                      },
                                      on: {
                                        click: function($event) {
                                          return _vm.alert(_vm.searchData)
                                        }
                                      }
                                    },
                                    [
                                      _vm._v(
                                        "\n                                            Filter\n                                        "
                                      )
                                    ]
                                  )
                                ],
                                1
                              )
                            ])
                          ])
                        ],
                        1
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "col-md-12" },
                    [
                      _c("h4", { staticClass: "header large lighter blue" }, [
                        _c("i", {
                          staticClass: "fa fa-list",
                          attrs: { "aria-hidden": "true" }
                        }),
                        _vm._v("  Assignment List\n                        ")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "clearfix mt-3" }, [
                        _c("div", { staticClass: "easy-link-menu" }, [
                          _c(
                            "a",
                            {
                              staticClass: "btn-success btn-sm bulk-action-btn"
                            },
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
                            {
                              staticClass: "btn-warning btn-sm bulk-action-btn"
                            },
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
                            {
                              staticClass: "btn-danger btn-sm bulk-action-btn"
                            },
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
                          "\n                           Assignment Record list on table. Filter Assignment using the filter.\n                        "
                        )
                      ]),
                      _vm._v(" "),
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
                                _c(
                                  "vs-td",
                                  { attrs: { data: props.data.username } },
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
                                _c(
                                  "vs-td",
                                  { attrs: { data: props.data.id } },
                                  [
                                    _vm._v(
                                      "\n                                    " +
                                        _vm._s(props.data.website) +
                                        "\n                                "
                                    )
                                  ]
                                ),
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
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Assignment Manager")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/more/assignment/index.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/more/assignment/index.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _index_vue_vue_type_template_id_c44f3b14_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=c44f3b14&scoped=true& */ "./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&scoped=true&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _index_vue_vue_type_template_id_c44f3b14_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _index_vue_vue_type_template_id_c44f3b14_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "c44f3b14",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/more/assignment/index.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_c44f3b14_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=template&id=c44f3b14&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_c44f3b14_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_c44f3b14_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
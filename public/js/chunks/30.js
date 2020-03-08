(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[30],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/account/fees/collect.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/account/fees/collect.vue?vue&type=script&lang=js& ***!
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/account/fees/collect.vue?vue&type=template&id=3488902e&scoped=true&":
/*!*****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/account/fees/collect.vue?vue&type=template&id=3488902e&scoped=true& ***!
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
    _c(
      "div",
      { staticClass: "row " },
      [
        _c("div", { staticClass: "col-md-12" }, [
          _c("h2", { staticClass: "pageTitle" }, [
            _vm._v("Collect Fees\n\t\t\t")
          ]),
          _vm._v(" "),
          _vm._m(0),
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
                    [_vm._v("Student Fee")]
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
                    [_vm._v("Staff Payroll")]
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
                    [_vm._v("Ledger")]
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
                    [_vm._v("Transacrion")]
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
                    [_vm._v("Bank")]
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
                          [
                            _c("i", {
                              staticClass: "fa fa-history",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v(" Receive History\n\t\t\t\t\t\t")
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
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [
                            _c("i", {
                              staticClass: "fa fa-list",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v("\n\t\t\t\t\t\t\tMaster Detail")
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
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [
                            _c("i", {
                              staticClass: "fa fa-plus",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v("Add Fees")
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
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [
                            _c("i", {
                              staticClass: "fa fa-calculator",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v("Quick Receive")
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
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [
                            _c("i", {
                              staticClass: "fa fa-calculator",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v("Collect Fees")
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
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [
                            _c("i", {
                              staticClass: "fa fa-money",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v("Balance Fees")
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
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [
                            _c("i", {
                              staticClass: "fa fa-header",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v(" Fees Head ")
                          ]
                        )
                      ],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c("vs-divider"),
                _vm._v(" "),
                _c("student-table", {
                  attrs: {
                    headers: _vm.studentHeader,
                    tableHeader: "Student List",
                    suggestText:
                      "Fees Collection Record list on table. Filter Fees Collection using the filter.",
                    url: "/json/student/",
                    noDataMessage:
                      "No Student data found. Please Filter Student to show.",
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
                                "\n\t\t\t\t\t\t\t" +
                                  _vm._s(props.data.faculty) +
                                  "\n\t\t\t\t\t\t"
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "vs-td",
                            { attrs: { data: props.data.semester } },
                            [
                              _vm._v(
                                "\n\t\t\t\t\t\t\t" +
                                  _vm._s(props.data.semester) +
                                  "\n\t\t\t\t\t\t"
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c("vs-td", { attrs: { data: props.data.reg_no } }, [
                            _vm._v(
                              "\n\t\t\t\t\t\t\t" +
                                _vm._s(props.data.reg_no) +
                                "\n\t\t\t\t\t\t"
                            )
                          ]),
                          _vm._v(" "),
                          _c("vs-td", { attrs: { data: props.data.name } }, [
                            _vm._v(
                              "\n\t\t\t\t\t\t\t" +
                                _vm._s(
                                  props.data.first_name +
                                    " " +
                                    props.data.middle_name +
                                    " " +
                                    props.data.last_name
                                ) +
                                "\n\t\t\t\t\t\t"
                            )
                          ]),
                          _vm._v(" "),
                          _c("vs-td", [
                            _vm._v(
                              "\n\t\t\t\t\t\t\t" +
                                _vm._s(
                                  props.data.academic_status +
                                    " " +
                                    props.data.status
                                ) +
                                "\n\t\t\t\t\t\t"
                            )
                          ]),
                          _vm._v(" "),
                          _c("vs-td", [
                            _vm._v("\n\t\t\t\t\t\t\tstatus\n\t\t\t\t\t\t")
                          ]),
                          _vm._v(" "),
                          _c("vs-td", [
                            _vm._v(
                              "\n\t\t\t\t\t\t\tService Activations\n\t\t\t\t\t\t"
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
var staticRenderFns = [
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
        _vm._v("\n\t\t\t\tPlease, Create Year and Active\n\t\t\t")
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/account/fees/collect.vue":
/*!****************************************************************!*\
  !*** ./resources/js/src/views/custom/account/fees/collect.vue ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _collect_vue_vue_type_template_id_3488902e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./collect.vue?vue&type=template&id=3488902e&scoped=true& */ "./resources/js/src/views/custom/account/fees/collect.vue?vue&type=template&id=3488902e&scoped=true&");
/* harmony import */ var _collect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./collect.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/account/fees/collect.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _collect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _collect_vue_vue_type_template_id_3488902e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _collect_vue_vue_type_template_id_3488902e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "3488902e",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/account/fees/collect.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/account/fees/collect.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/src/views/custom/account/fees/collect.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_collect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./collect.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/account/fees/collect.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_collect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/account/fees/collect.vue?vue&type=template&id=3488902e&scoped=true&":
/*!***********************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/account/fees/collect.vue?vue&type=template&id=3488902e&scoped=true& ***!
  \***********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_collect_vue_vue_type_template_id_3488902e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./collect.vue?vue&type=template&id=3488902e&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/account/fees/collect.vue?vue&type=template&id=3488902e&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_collect_vue_vue_type_template_id_3488902e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_collect_vue_vue_type_template_id_3488902e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
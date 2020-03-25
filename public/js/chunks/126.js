(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[126],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/library/return-period.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/library/return-period.vue?vue&type=script&lang=js& ***!
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
//
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
      selected: [],
      activeTab: 'student',
      tableHeader: [{
        name: 'Date',
        sort_key: ''
      }, {
        name: 'Ledger/Head',
        sort_key: ''
      }, {
        name: 'Dr Amount',
        sort_key: ''
      }, {
        name: 'Cr Amount',
        sort_key: ''
      }, {
        name: 'Description',
        sort_key: ''
      }, {
        name: 'Action',
        sort_key: ''
      }],
      searchData: {},
      mainItem: []
    };
  },
  methods: {
    doFilter: function doFilter() {},
    doActive: function doActive() {},
    doInActive: function doInActive() {},
    doDelete: function doDelete() {},
    doCopy: function doCopy() {
      alert('doing copy');
    },
    doPdf: function doPdf() {
      alert('doing pdf');
    },
    doJson: function doJson() {
      alert('doing json');
    },
    doPrint: function doPrint() {
      alert('doing print');
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/library/return-period.vue?vue&type=template&id=51dd2296&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/library/return-period.vue?vue&type=template&id=51dd2296&scoped=true& ***!
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
            _vm._v("Books Manager\n            ")
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
                        "\n                        Book Detail\n                    "
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
                        "\n                        Issue History\n                    "
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
                        "\n                        Membership\n                    "
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
                        "\n                        Students Member\n                    "
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
                        "\n                        Staffs Member\n                    "
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
                        "\n                        Return Period Over\n                    "
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
            _c("vs-card", [
              _c(
                "div",
                { staticClass: "row mx-4 align-items-center" },
                [
                  _c("p", { staticClass: "mb-0 mr-4" }, [_vm._v("To")]),
                  _vm._v(" "),
                  _c("vs-checkbox", [_vm._v("Student")]),
                  _vm._v(" "),
                  _c("vs-checkbox", [_vm._v("Staff")]),
                  _vm._v(" "),
                  _c("vs-button", { staticClass: " ml-2 smBtn" }, [
                    _c("i", { staticClass: "fa fa-envelope" }),
                    _vm._v(
                      "\n                        Send Reminder\n                    "
                    )
                  ])
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "row mx-2 p-2" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "my-round m-3",
                      on: {
                        click: function($event) {
                          _vm.activeTab = "student"
                        }
                      }
                    },
                    [
                      _c("i", { staticClass: "fa fa-user" }),
                      _vm._v(
                        "\n                        Student Return Period Over\n                        "
                      ),
                      _c("span", { staticClass: "count-number" }, [_vm._v("0")])
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "my-round m-3",
                      on: {
                        click: function($event) {
                          _vm.activeTab = "staff"
                        }
                      }
                    },
                    [
                      _c("i", { staticClass: "fa fa-user" }),
                      _vm._v(
                        "\n                        Staff Return Period Over\n                        "
                      ),
                      _c("span", { staticClass: "count-number" }, [_vm._v("0")])
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _vm.activeTab == "student"
                ? _c(
                    "div",
                    { staticClass: "mx-2" },
                    [
                      _c(
                        "h4",
                        { staticClass: "header large lighter blue mt-4" },
                        [
                          _c("i", {
                            staticClass: "fa fa-list",
                            attrs: { "aria-hidden": "true" }
                          }),
                          _vm._v(
                            " \n                        Student Book Return Over Period List\n                    "
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "vs-table",
                        {
                          attrs: {
                            pagination: "",
                            "max-items": 10,
                            data: _vm.mainItem,
                            description: "",
                            search: "",
                            multiple: true,
                            noDataText: "Book Issued History Not Found.",
                            "description-title": "Showing"
                          },
                          scopedSlots: _vm._u(
                            [
                              {
                                key: "default",
                                fn: function(ref) {
                                  var data = ref.data
                                  return _vm._l(data, function(tr, idx) {
                                    return _c(
                                      "vs-tr",
                                      { key: idx, attrs: { data: tr } },
                                      [
                                        _c("vs-td", [
                                          _vm._v(
                                            _vm._s(_vm.mainItem.indexOf(tr) + 1)
                                          )
                                        ]),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td")
                                      ],
                                      1
                                    )
                                  })
                                }
                              }
                            ],
                            null,
                            false,
                            2434432967
                          ),
                          model: {
                            value: _vm.selected,
                            callback: function($$v) {
                              _vm.selected = $$v
                            },
                            expression: "selected"
                          }
                        },
                        [
                          _c(
                            "template",
                            { slot: "thead" },
                            [
                              _c("vs-th", [_vm._v("S.N.")]),
                              _vm._v(" "),
                              _vm._l(_vm.tableHeader, function(thead, indx) {
                                return _c(
                                  "vs-th",
                                  {
                                    key: indx,
                                    attrs: {
                                      "sort-key": thead.sort_key
                                        ? thead.sort_key
                                        : ""
                                    }
                                  },
                                  [
                                    _vm._v(
                                      "\n                                " +
                                        _vm._s(thead.name) +
                                        "\n                            "
                                    )
                                  ]
                                )
                              })
                            ],
                            2
                          )
                        ],
                        2
                      )
                    ],
                    1
                  )
                : _vm._e(),
              _vm._v(" "),
              _vm.activeTab == "staff"
                ? _c(
                    "div",
                    { staticClass: "mx-2" },
                    [
                      _c(
                        "h4",
                        { staticClass: "header large lighter blue mt-4" },
                        [
                          _c("i", {
                            staticClass: "fa fa-list",
                            attrs: { "aria-hidden": "true" }
                          }),
                          _vm._v(
                            " \n                        Staff Book Return Over Period List\n                    "
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "vs-table",
                        {
                          attrs: {
                            pagination: "",
                            "max-items": 10,
                            data: _vm.mainItem,
                            description: "",
                            search: "",
                            multiple: true,
                            noDataText: "Book Issued History Not Found.",
                            "description-title": "Showing"
                          },
                          scopedSlots: _vm._u(
                            [
                              {
                                key: "default",
                                fn: function(ref) {
                                  var data = ref.data
                                  return _vm._l(data, function(tr, idx) {
                                    return _c(
                                      "vs-tr",
                                      { key: idx, attrs: { data: tr } },
                                      [
                                        _c("vs-td", [
                                          _vm._v(
                                            _vm._s(_vm.mainItem.indexOf(tr) + 1)
                                          )
                                        ]),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td"),
                                        _vm._v(" "),
                                        _c("vs-td")
                                      ],
                                      1
                                    )
                                  })
                                }
                              }
                            ],
                            null,
                            false,
                            2434432967
                          ),
                          model: {
                            value: _vm.selected,
                            callback: function($$v) {
                              _vm.selected = $$v
                            },
                            expression: "selected"
                          }
                        },
                        [
                          _c(
                            "template",
                            { slot: "thead" },
                            [
                              _c("vs-th", [_vm._v("S.N.")]),
                              _vm._v(" "),
                              _vm._l(_vm.tableHeader, function(thead, indx) {
                                return _c(
                                  "vs-th",
                                  {
                                    key: indx,
                                    attrs: {
                                      "sort-key": thead.sort_key
                                        ? thead.sort_key
                                        : ""
                                    }
                                  },
                                  [
                                    _vm._v(
                                      "\n                                " +
                                        _vm._s(thead.name) +
                                        "\n                            "
                                    )
                                  ]
                                )
                              })
                            ],
                            2
                          )
                        ],
                        2
                      )
                    ],
                    1
                  )
                : _vm._e()
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

/***/ "./resources/js/src/views/custom/library/return-period.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/library/return-period.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _return_period_vue_vue_type_template_id_51dd2296_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./return-period.vue?vue&type=template&id=51dd2296&scoped=true& */ "./resources/js/src/views/custom/library/return-period.vue?vue&type=template&id=51dd2296&scoped=true&");
/* harmony import */ var _return_period_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./return-period.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/library/return-period.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _return_period_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _return_period_vue_vue_type_template_id_51dd2296_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _return_period_vue_vue_type_template_id_51dd2296_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "51dd2296",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/library/return-period.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/library/return-period.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/library/return-period.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_return_period_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./return-period.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/library/return-period.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_return_period_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/library/return-period.vue?vue&type=template&id=51dd2296&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/library/return-period.vue?vue&type=template&id=51dd2296&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_return_period_vue_vue_type_template_id_51dd2296_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./return-period.vue?vue&type=template&id=51dd2296&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/library/return-period.vue?vue&type=template&id=51dd2296&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_return_period_vue_vue_type_template_id_51dd2296_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_return_period_vue_vue_type_template_id_51dd2296_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
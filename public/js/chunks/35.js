(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[35],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/hostels/food/category.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/hostels/food/category.vue?vue&type=script&lang=js& ***!
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
/* harmony default export */ __webpack_exports__["default"] = ({
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/hostels/food/category.vue?vue&type=template&id=787b6db0&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/hostels/food/category.vue?vue&type=template&id=787b6db0&scoped=true& ***!
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
        _c(
          "div",
          { staticClass: "col-md-12" },
          [
            _c("h2", { staticClass: "pageTitle" }, [
              _vm._v("Food Category Manager")
            ]),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "mb-2" },
              [
                _c(
                  "router-link",
                  { attrs: { to: "/hostel/resident" } },
                  [
                    _c(
                      "vs-button",
                      { staticClass: "smBtn", attrs: { type: "filled" } },
                      [_vm._v("Resident")]
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "router-link",
                  { attrs: { to: "/hostel" } },
                  [
                    _c(
                      "vs-button",
                      { staticClass: "smBtn", attrs: { type: "filled" } },
                      [_vm._v("Hostel")]
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "router-link",
                  { attrs: { to: "/hostel/food" } },
                  [
                    _c(
                      "vs-button",
                      { staticClass: "smBtn", attrs: { type: "filled" } },
                      [_vm._v("Food & Meal")]
                    )
                  ],
                  1
                )
              ],
              1
            ),
            _vm._v(" "),
            _c("vs-divider", { staticClass: "mx-3" })
          ],
          1
        ),
        _vm._v(" "),
        _c("vs-card", [
          _c("div", { staticClass: "row mx-0" }, [
            _c(
              "div",
              { staticClass: "mb-2 col-md-12" },
              [
                _c(
                  "router-link",
                  { attrs: { to: "/hostel/food" } },
                  [
                    _c(
                      "vs-button",
                      { staticClass: "smBtn", attrs: { type: "filled" } },
                      [_vm._v("Food & Meal")]
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "router-link",
                  { attrs: { to: "/hostel/food/eating-time" } },
                  [
                    _c(
                      "vs-button",
                      { staticClass: "smBtn", attrs: { type: "filled" } },
                      [_vm._v("Eating Time")]
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "router-link",
                  { attrs: { to: "/hostel/food/category" } },
                  [
                    _c(
                      "vs-button",
                      { staticClass: "smBtn", attrs: { type: "filled" } },
                      [_vm._v("Food Category")]
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "router-link",
                  { attrs: { to: "/hostel/food/item" } },
                  [
                    _c(
                      "vs-button",
                      { staticClass: "smBtn", attrs: { type: "filled" } },
                      [_vm._v("Food Item")]
                    )
                  ],
                  1
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "col-md-4" },
              [
                _c("h4", [_vm._v("Create Food Category")]),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Category")]),
                    _vm._v(" "),
                    _c("vs-input", { staticClass: "flex-2 text-uppercase" })
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
                  [_vm._v("Create\n                    ")]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "col-md-8" },
              [
                _c("h4", { staticClass: "header large lighter blue" }, [
                  _c("i", {
                    staticClass: "fa fa-list",
                    attrs: { "aria-hidden": "true" }
                  }),
                  _vm._v(" Food Category List")
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
                        _vm._v("\n                                In-Active")
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
                    "\n                        Food Category Record list on table. Filter Food Category using the filter.\n                    "
                  )
                ]),
                _vm._v(" "),
                _c("data-table", {
                  attrs: {
                    headers: _vm.tableHeader,
                    url: "/student",
                    "no-data-message":
                      "No Category data found. Please Filter Category to show.",
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
                                "\n                                " +
                                  _vm._s(props.data.email) +
                                  "\n                            "
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "vs-td",
                            { attrs: { data: props.data.username } },
                            [
                              _vm._v(
                                "\n                                " +
                                  _vm._s(props.data.username) +
                                  "\n                            "
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c("vs-td", { attrs: { data: props.data.id } }, [
                            _vm._v(
                              "\n                                " +
                                _vm._s(props.data.website) +
                                "\n                            "
                            )
                          ]),
                          _vm._v(" "),
                          _c("vs-td", { attrs: { data: props.id } }, [
                            _vm._v(
                              "\n                                " +
                                _vm._s(props.data.id) +
                                "\n                            "
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
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/hostels/food/category.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/hostels/food/category.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _category_vue_vue_type_template_id_787b6db0_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./category.vue?vue&type=template&id=787b6db0&scoped=true& */ "./resources/js/src/views/custom/hostels/food/category.vue?vue&type=template&id=787b6db0&scoped=true&");
/* harmony import */ var _category_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./category.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/hostels/food/category.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _category_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _category_vue_vue_type_template_id_787b6db0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _category_vue_vue_type_template_id_787b6db0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "787b6db0",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/hostels/food/category.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/hostels/food/category.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/hostels/food/category.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./category.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/hostels/food/category.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/hostels/food/category.vue?vue&type=template&id=787b6db0&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/hostels/food/category.vue?vue&type=template&id=787b6db0&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_template_id_787b6db0_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./category.vue?vue&type=template&id=787b6db0&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/hostels/food/category.vue?vue&type=template&id=787b6db0&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_template_id_787b6db0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_category_vue_vue_type_template_id_787b6db0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
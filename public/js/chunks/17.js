(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[17],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/faculty.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/academics/faculty.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************/
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/faculty.vue?vue&type=template&id=dad6d3e6&scoped=true&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/academics/faculty.vue?vue&type=template&id=dad6d3e6&scoped=true& ***!
  \**************************************************************************************************************************************************************************************************************************************/
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
                { staticClass: "col-md-4" },
                [
                  _c("br"),
                  _vm._v(" "),
                  _c("h4", [
                    _c("i", { staticClass: "fa fa-search" }),
                    _vm._v(" Create Faculty/Level/Class")
                  ]),
                  _c("br"),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "form-group" },
                    [
                      _c("label", [_vm._v("Faculty/Class")]),
                      _vm._v(" "),
                      _c("vs-input", { staticClass: "w-100" })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "form-group" },
                    [
                      _c("label", [_vm._v("Faculty/ClassCode")]),
                      _vm._v(" "),
                      _c("vs-input", { staticClass: "w-100" })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", [_vm._v("Semister/section")]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "d-flex" },
                      [
                        _c("vs-checkbox", { staticClass: "flex-1" }, [
                          _vm._v("1")
                        ]),
                        _vm._v(" "),
                        _c("vs-checkbox", { staticClass: "flex-1" }, [
                          _vm._v("3")
                        ])
                      ],
                      1
                    )
                  ]),
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
                { staticClass: "col-md-8" },
                [
                  _c("br"),
                  _vm._v(" "),
                  _c("ow-data-table", {
                    attrs: {
                      headers: _vm.tableHeader,
                      tableHeader: "Faculty/Level/Class List",
                      suggestText:
                        "Faculty/Level/Class Record list on table. Filter Faculty/Level/Class using the filter.",
                      url: "/student",
                      noDataMessage:
                        "No Faculty data found. Please Filter Faculty to show.",
                      hasSearch: true,
                      "has-multiple": true,
                      "has-pagination": true
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
      _c("h2", { staticClass: "pageTitle" }, [
        _vm._v("Faculty/Level/Class Manager")
      ]),
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

/***/ "./resources/js/src/views/custom/academics/faculty.vue":
/*!*************************************************************!*\
  !*** ./resources/js/src/views/custom/academics/faculty.vue ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _faculty_vue_vue_type_template_id_dad6d3e6_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./faculty.vue?vue&type=template&id=dad6d3e6&scoped=true& */ "./resources/js/src/views/custom/academics/faculty.vue?vue&type=template&id=dad6d3e6&scoped=true&");
/* harmony import */ var _faculty_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./faculty.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/academics/faculty.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _faculty_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _faculty_vue_vue_type_template_id_dad6d3e6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _faculty_vue_vue_type_template_id_dad6d3e6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "dad6d3e6",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/academics/faculty.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/academics/faculty.vue?vue&type=script&lang=js&":
/*!**************************************************************************************!*\
  !*** ./resources/js/src/views/custom/academics/faculty.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_faculty_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./faculty.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/faculty.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_faculty_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/academics/faculty.vue?vue&type=template&id=dad6d3e6&scoped=true&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/academics/faculty.vue?vue&type=template&id=dad6d3e6&scoped=true& ***!
  \********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_faculty_vue_vue_type_template_id_dad6d3e6_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./faculty.vue?vue&type=template&id=dad6d3e6&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/faculty.vue?vue&type=template&id=dad6d3e6&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_faculty_vue_vue_type_template_id_dad6d3e6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_faculty_vue_vue_type_template_id_dad6d3e6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
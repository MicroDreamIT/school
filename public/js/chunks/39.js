(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[39],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=script&lang=js& ***!
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=template&id=883fd346&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=template&id=883fd346&scoped=true& ***!
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
      { staticClass: "row mx-0" },
      [
        _c(
          "div",
          { staticClass: "col-md-12" },
          [
            _c("h2", { staticClass: "pageTitle" }, [_vm._v("Hostel Manager")]),
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
            _c("vs-divider")
          ],
          1
        ),
        _vm._v(" "),
        _c("vs-card", [
          _c(
            "div",
            { staticClass: "row mx-0" },
            [
              _c(
                "div",
                { staticClass: "mb-2 col-md-12" },
                [
                  _c(
                    "router-link",
                    { attrs: { to: "/hostel" } },
                    [
                      _c(
                        "vs-button",
                        { staticClass: "smBtn", attrs: { type: "filled" } },
                        [_vm._v("Detail")]
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "router-link",
                    { attrs: { to: "/hostel/add" } },
                    [
                      _c(
                        "vs-button",
                        { staticClass: "smBtn", attrs: { type: "filled" } },
                        [_vm._v("Add Hostel")]
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "router-link",
                    { attrs: { to: "/hostel/room-type" } },
                    [
                      _c(
                        "vs-button",
                        { staticClass: "smBtn", attrs: { type: "filled" } },
                        [_vm._v("Room Type")]
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "router-link",
                    { attrs: { to: "/bed-status" } },
                    [
                      _c(
                        "vs-button",
                        { staticClass: "smBtn", attrs: { type: "filled" } },
                        [_vm._v("Bed status")]
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
              _c("div", { staticClass: "col-md-12" }, [
                _c("h4", [_vm._v("Create Hostel")])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-6" }, [
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Hostel")]),
                    _vm._v(" "),
                    _c("vs-input", { staticClass: "flex-2 " })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [
                      _vm._v("Contact Detail")
                    ]),
                    _vm._v(" "),
                    _c("vs-textarea", {
                      staticClass: "flex-2 ",
                      attrs: { height: "100px" }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Warden")]),
                    _vm._v(" "),
                    _c("vs-input", { staticClass: "flex-2 " })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Type")]),
                    _vm._v(" "),
                    _c("v-select", { staticClass: "flex-2 " })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Total Room")]),
                    _vm._v(" "),
                    _c("vs-input", { staticClass: "flex-2 " })
                  ],
                  1
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-6" }, [
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Address")]),
                    _vm._v(" "),
                    _c("vs-input", { staticClass: "flex-2 " })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Description")]),
                    _vm._v(" "),
                    _c("vs-textarea", {
                      staticClass: "flex-2 ",
                      attrs: { height: "100px" }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [
                      _vm._v("Warden Contact")
                    ]),
                    _vm._v(" "),
                    _c("vs-input", { staticClass: "flex-2 " })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Status")]),
                    _vm._v(" "),
                    _c("v-select", { staticClass: "flex-2 " })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Room Type")]),
                    _vm._v(" "),
                    _c("v-select", { staticClass: "flex-2 " })
                  ],
                  1
                )
              ]),
              _vm._v(" "),
              _c("vs-divider", { staticClass: "mx-3" }),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "row mx-0" },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "my-round mx-2",
                      attrs: { color: "warning" }
                    },
                    [_vm._v("Reset")]
                  ),
                  _vm._v(" "),
                  _c("vs-button", { staticClass: "my-round mx-2" }, [
                    _vm._v("Save")
                  ]),
                  _vm._v(" "),
                  _c(
                    "vs-button",
                    {
                      staticClass: "my-round mx-2",
                      attrs: { color: "#28c76f" }
                    },
                    [_vm._v("Save And Add Another")]
                  )
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
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/hostels/hostel/create.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/hostels/hostel/create.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _create_vue_vue_type_template_id_883fd346_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./create.vue?vue&type=template&id=883fd346&scoped=true& */ "./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=template&id=883fd346&scoped=true&");
/* harmony import */ var _create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./create.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _create_vue_vue_type_template_id_883fd346_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _create_vue_vue_type_template_id_883fd346_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "883fd346",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/hostels/hostel/create.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./create.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=template&id=883fd346&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=template&id=883fd346&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_883fd346_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./create.vue?vue&type=template&id=883fd346&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/hostels/hostel/create.vue?vue&type=template&id=883fd346&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_883fd346_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_883fd346_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
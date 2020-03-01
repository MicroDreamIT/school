(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[2],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/upload-download.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/more/upload-download.vue?vue&type=script&lang=js& ***!
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/upload-download.vue?vue&type=template&id=296df4de&scoped=true&":
/*!*****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/more/upload-download.vue?vue&type=template&id=296df4de&scoped=true& ***!
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
        _vm._m(0),
        _vm._v(" "),
        _c("vs-card", [
          _c("div", { staticClass: "row" }, [
            _c(
              "div",
              { staticClass: "col-md-4" },
              [
                _c("div", [
                  _vm._v(
                    "\n                        Info: Please, select target Faculty/Class, Sem./Sec. for download access. Other wise it show all the user.\n                    "
                  )
                ]),
                _vm._v(" "),
                _c("div", [_vm._v("Create Download")]),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Faculty")]),
                    _vm._v(" "),
                    _c("v-select", { staticClass: "flex-1" })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Sem./Sec.")]),
                    _vm._v(" "),
                    _c("v-select", { staticClass: "flex-1" })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Title")]),
                    _vm._v(" "),
                    _c("v-select", { staticClass: "flex-1" })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "d-flex justify-content-between flex-wrap" },
                  [
                    _c("p", { staticClass: "flex-1" }, [_vm._v("Select File")]),
                    _vm._v(" "),
                    _c("vs-input", {
                      staticClass: "flex-1",
                      attrs: { type: "file" }
                    })
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
                    _c("vs-textarea", { staticClass: "flex-1" })
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
                  _vm._v(" Download List")
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
                    "\n                       Download Record list on table. Filter Download using the filter.\n                    "
                  )
                ]),
                _vm._v(" "),
                _c("data-table", {
                  attrs: {
                    headers: _vm.tableHeader,
                    url: "/student",
                    "no-data-message":
                      "No Download data found. Please Filter Download to show.",
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
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-12" }, [
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Download Manager")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/more/upload-download.vue":
/*!****************************************************************!*\
  !*** ./resources/js/src/views/custom/more/upload-download.vue ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _upload_download_vue_vue_type_template_id_296df4de_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./upload-download.vue?vue&type=template&id=296df4de&scoped=true& */ "./resources/js/src/views/custom/more/upload-download.vue?vue&type=template&id=296df4de&scoped=true&");
/* harmony import */ var _upload_download_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./upload-download.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/more/upload-download.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _upload_download_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _upload_download_vue_vue_type_template_id_296df4de_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _upload_download_vue_vue_type_template_id_296df4de_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "296df4de",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/more/upload-download.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/more/upload-download.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/src/views/custom/more/upload-download.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_download_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./upload-download.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/upload-download.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_download_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/more/upload-download.vue?vue&type=template&id=296df4de&scoped=true&":
/*!***********************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/more/upload-download.vue?vue&type=template&id=296df4de&scoped=true& ***!
  \***********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_download_vue_vue_type_template_id_296df4de_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./upload-download.vue?vue&type=template&id=296df4de&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/upload-download.vue?vue&type=template&id=296df4de&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_download_vue_vue_type_template_id_296df4de_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_upload_download_vue_vue_type_template_id_296df4de_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
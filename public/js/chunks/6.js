(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[6],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/student-table.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/component/table/student-table.vue?vue&type=script&lang=js& ***!
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
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "student-table",
  props: {
    searchData: {
      type: Object,
      default: {}
    }
  },
  data: function data() {
    return {
      users: [{
        "id": 1,
        "name": "Leanne Graham",
        "username": "Bret",
        "email": "Sincere@april.biz",
        "website": "hildegard.org"
      }, {
        "id": 2,
        "name": "Ervin Howell",
        "username": "Antonette",
        "email": "Shanna@melissa.tv",
        "website": "anastasia.net"
      }, {
        "id": 3,
        "name": "Clementine Bauch",
        "username": "Samantha",
        "email": "Nathan@yesenia.net",
        "website": "ramiro.info"
      }, {
        "id": 4,
        "name": "Patricia Lebsack",
        "username": "Karianne",
        "email": "Julianne.OConner@kory.org",
        "website": "kale.biz"
      }, {
        "id": 5,
        "name": "Chelsey Dietrich",
        "username": "Kamren",
        "email": "Lucio_Hettinger@annie.ca",
        "website": "demarco.info"
      }, {
        "id": 6,
        "name": "Mrs. Dennis Schulist",
        "username": "Leopoldo_Corkery",
        "email": "Karley_Dach@jasper.info",
        "website": "ola.org"
      }, {
        "id": 7,
        "name": "Kurtis Weissnat",
        "username": "Elwyn.Skiles",
        "email": "Telly.Hoeger@billy.biz",
        "website": "elvis.io"
      }, {
        "id": 8,
        "name": "Nicholas Runolfsdottir V",
        "username": "Maxime_Nienow",
        "email": "Sherwood@rosamond.me",
        "website": "jacynthe.com"
      }, {
        "id": 9,
        "name": "Glenna Reichert",
        "username": "Delphine",
        "email": "Chaim_McDermott@dana.io",
        "website": "conrad.com"
      }, {
        "id": 10,
        "name": "Clementina DuBuque",
        "username": "Moriah.Stanton",
        "email": "Rey.Padberg@karina.biz",
        "website": "ambrose.net"
      }],
      currentPage: 1,
      selected: []
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/index.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/index.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuejs_datepicker__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuejs-datepicker */ "./node_modules/vuejs-datepicker/dist/vuejs-datepicker.esm.js");
/* harmony import */ var _component_table_student_table__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../component/table/student-table */ "./resources/js/src/views/custom/component/table/student-table.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    StudentTable: _component_table_student_table__WEBPACK_IMPORTED_MODULE_1__["default"],
    Datepicker: vuejs_datepicker__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      searchData: {
        academic_status: 'Back Continue'
      },
      academic_status: ['Back Continue', 'Continue', 'Drop Out'],
      status: ['Active', 'In-Active']
    };
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&scoped=true&":
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&scoped=true& ***!
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
  return _c(
    "div",
    [
      _c(
        "vs-table",
        {
          attrs: { multiple: "", search: "", data: _vm.users },
          scopedSlots: _vm._u([
            {
              key: "default",
              fn: function(ref) {
                var data = ref.data
                return _vm._l(data, function(tr, indextr) {
                  return _c(
                    "vs-tr",
                    { key: indextr, attrs: { data: tr } },
                    [
                      _c("vs-td", { attrs: { data: data[indextr].email } }, [
                        _vm._v(
                          "\n                    " +
                            _vm._s(data[indextr].email) +
                            "\n                "
                        )
                      ]),
                      _vm._v(" "),
                      _c("vs-td", { attrs: { data: data[indextr].username } }, [
                        _vm._v(
                          "\n                    " +
                            _vm._s(data[indextr].username) +
                            "\n                "
                        )
                      ]),
                      _vm._v(" "),
                      _c("vs-td", { attrs: { data: data[indextr].id } }, [
                        _vm._v(
                          "\n                    " +
                            _vm._s(data[indextr].website) +
                            "\n                "
                        )
                      ]),
                      _vm._v(" "),
                      _c("vs-td", { attrs: { data: data[indextr].id } }, [
                        _vm._v(
                          "\n                    " +
                            _vm._s(data[indextr].id) +
                            "\n                "
                        )
                      ])
                    ],
                    1
                  )
                })
              }
            }
          ]),
          model: {
            value: _vm.selected,
            callback: function($$v) {
              _vm.selected = $$v
            },
            expression: "selected"
          }
        },
        [
          _c("template", { slot: "header" }, [
            _c("h3", [_vm._v("\n                Users\n            ")])
          ]),
          _vm._v(" "),
          _c(
            "template",
            { slot: "thead" },
            [
              _c("vs-th", { attrs: { "sort-key": "email" } }, [
                _vm._v("\n                Email\n            ")
              ]),
              _vm._v(" "),
              _c("vs-th", { attrs: { "sort-key": "username" } }, [
                _vm._v("\n                Name\n            ")
              ]),
              _vm._v(" "),
              _c("vs-th", { attrs: { "sort-key": "website" } }, [
                _vm._v("\n                Website\n            ")
              ]),
              _vm._v(" "),
              _c("vs-th", { attrs: { "sort-key": "id" } }, [
                _vm._v("\n                Nro\n            ")
              ])
            ],
            1
          )
        ],
        2
      ),
      _vm._v(" "),
      _c("vs-pagination", {
        staticClass: "my-3",
        attrs: { total: 3 },
        model: {
          value: _vm.currentPage,
          callback: function($$v) {
            _vm.currentPage = $$v
          },
          expression: "currentPage"
        }
      })
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/index.vue?vue&type=template&id=04af5c2c&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/index.vue?vue&type=template&id=04af5c2c&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************/
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
      { staticClass: "row" },
      [
        _vm._m(0),
        _vm._v(" "),
        _c("div", { staticClass: "col-md-12" }, [
          _c(
            "div",
            { staticClass: "row mx-0" },
            [
              _c(
                "router-link",
                { attrs: { to: "/student" } },
                [
                  _c(
                    "vs-button",
                    {
                      staticClass: "smBtn",
                      attrs: { type: "filled", icon: "list" }
                    },
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
                    [_vm._v("Primary")]
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
              _c("div", { staticClass: "row" }, [
                _c(
                  "div",
                  { staticClass: "col-md-12 mb-2" },
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
                          "\n                            Filter Students\n                        "
                        )
                      ]
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-12" }, [
                  _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-md-1" }, [
                      _vm._v("REG. NO.")
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col-md-2" },
                      [
                        _c("vs-input", {
                          staticClass: "inputx",
                          model: {
                            value: _vm.searchData.reg_no,
                            callback: function($$v) {
                              _vm.$set(_vm.searchData, "reg_no", $$v)
                            },
                            expression: "searchData.reg_no"
                          }
                        })
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-md-1" }, [
                      _vm._v("REG. Date.")
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col-md-2" },
                      [
                        _c("datepicker", {
                          model: {
                            value: _vm.searchData.fromRegDate,
                            callback: function($$v) {
                              _vm.$set(_vm.searchData, "fromRegDate", $$v)
                            },
                            expression: "searchData.fromRegDate"
                          }
                        }),
                        _vm._v(" "),
                        _c("i", { staticClass: "fa fa-compress" }),
                        _vm._v(" "),
                        _c("datepicker", {
                          model: {
                            value: _vm.searchData.toRegDate,
                            callback: function($$v) {
                              _vm.$set(_vm.searchData, "toRegDate", $$v)
                            },
                            expression: "searchData.toRegDate"
                          }
                        })
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-md-1" }, [
                      _vm._v(
                        "\n                                Status\n                            "
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-md-2" }, [
                      _c("select", { staticClass: "custom-select" }, [
                        _c("option", { attrs: { selected: "" } }, [
                          _vm._v("Choose...")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "1" } }, [
                          _vm._v("One")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "2" } }, [
                          _vm._v("Two")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "3" } }, [
                          _vm._v("Three")
                        ])
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-md-2" }, [
                      _c("select", { staticClass: "custom-select" }, [
                        _c("option", { attrs: { selected: "" } }, [
                          _vm._v("Choose...")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "1" } }, [
                          _vm._v("One")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "2" } }, [
                          _vm._v("Two")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "3" } }, [
                          _vm._v("Three")
                        ])
                      ])
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col-md-12" },
                  [
                    _c("student-table", {
                      attrs: { searchData: _vm.searchData }
                    })
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
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-12 mb-2" }, [
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Details")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/component/table/student-table.vue":
/*!*************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/student-table.vue ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _student_table_vue_vue_type_template_id_6786d4d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./student-table.vue?vue&type=template&id=6786d4d6&scoped=true& */ "./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&scoped=true&");
/* harmony import */ var _student_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./student-table.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/component/table/student-table.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _student_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _student_table_vue_vue_type_template_id_6786d4d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _student_table_vue_vue_type_template_id_6786d4d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "6786d4d6",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/component/table/student-table.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/component/table/student-table.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/student-table.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_student_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./student-table.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/student-table.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_student_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&scoped=true&":
/*!********************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&scoped=true& ***!
  \********************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_student_table_vue_vue_type_template_id_6786d4d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./student-table.vue?vue&type=template&id=6786d4d6&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_student_table_vue_vue_type_template_id_6786d4d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_student_table_vue_vue_type_template_id_6786d4d6_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/student/index.vue":
/*!*********************************************************!*\
  !*** ./resources/js/src/views/custom/student/index.vue ***!
  \*********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _index_vue_vue_type_template_id_04af5c2c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=04af5c2c&scoped=true& */ "./resources/js/src/views/custom/student/index.vue?vue&type=template&id=04af5c2c&scoped=true&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _index_vue_vue_type_template_id_04af5c2c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _index_vue_vue_type_template_id_04af5c2c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "04af5c2c",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/index.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/index.vue?vue&type=script&lang=js&":
/*!**********************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/index.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/index.vue?vue&type=template&id=04af5c2c&scoped=true&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/index.vue?vue&type=template&id=04af5c2c&scoped=true& ***!
  \****************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_04af5c2c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=template&id=04af5c2c&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/index.vue?vue&type=template&id=04af5c2c&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_04af5c2c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_04af5c2c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
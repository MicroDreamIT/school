(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[125],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/note.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/note.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************/
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      tableHeader: [{
        name: 'Reg. No.',
        sort_key: 'reg_no'
      }, {
        name: 'Student Notes'
      }, {
        name: 'Status'
      }, {
        name: 'Action'
      }],
      notification: '',
      note: {}
    };
  },
  methods: {
    viewItems: function viewItems(id) {
      this.$router.push({
        name: 'studentView',
        params: {
          id: id
        }
      });
    },
    editItems: function editItems() {
      alert("hey hasib im edit ");
    },
    deleteItems: function deleteItems() {
      alert("hey hasib im delete ");
    },
    changeStatus: function changeStatus() {}
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/note.vue?vue&type=template&id=786dfa0a&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/note.vue?vue&type=template&id=786dfa0a&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************************************/
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
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-list",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Detail\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/student/registration" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-plus",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Registration\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/student/import" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-upload",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Bulk Registration\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/student/transfer" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-exchange",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Transfer\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/student/document" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-files-o",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Documents\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/student/note" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-sticky-note",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Notes\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/account/fees" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-calculator",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Balance Fees\n                        "
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
                        staticClass: "fa fa-calculator",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Library\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/attendance/student" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-calendar",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Attendance\n                        "
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
        _vm.notification
          ? _c("div", { staticClass: "col-md-12" }, [
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
                      },
                      on: {
                        click: function($event) {
                          _vm.notification = ""
                        }
                      }
                    },
                    [
                      _c("span", { attrs: { "aria-hidden": "true" } }, [
                        _vm._v("×")
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c("i", { staticClass: "ace-icon fa fa-hand-o-right" }),
                  _vm._v(
                    "\n                    " +
                      _vm._s(_vm.notification) +
                      "\n                "
                  )
                ]
              )
            ])
          : _vm._e(),
        _vm._v(" "),
        _c("vs-divider", { staticClass: "mx-3" }),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "col-md-12" },
          [
            _c("vs-card", [
              _c("div", { staticClass: "row p-2" }, [
                _c("h4", { staticClass: "ml-4" }, [
                  _vm._v("Student Notes Manager")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-12 row" }, [
                  _c("div", { staticClass: "col-md-4" }, [
                    _c("br"),
                    _vm._v(" "),
                    _c("h4", { staticClass: "header large lighter blue" }, [
                      _c("i", {
                        staticClass: "fa fa-search",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                                    Create Student Notes\n                                "
                      )
                    ]),
                    _c("br"),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c("label", { staticClass: "col-sm-3 col-form-label" }, [
                        _vm._v("Reg No")
                      ]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "col-sm-9" },
                        [
                          _c("vs-input", {
                            staticClass: "w-100",
                            model: {
                              value: _vm.note.reg_no,
                              callback: function($$v) {
                                _vm.$set(_vm.note, "reg_no", $$v)
                              },
                              expression: "note.reg_no"
                            }
                          })
                        ],
                        1
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c("label", { staticClass: "col-sm-3 col-form-label" }, [
                        _vm._v("Sub")
                      ]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "col-sm-9" },
                        [
                          _c("vs-input", {
                            staticClass: "w-100",
                            model: {
                              value: _vm.note.subject,
                              callback: function($$v) {
                                _vm.$set(_vm.note, "subject", $$v)
                              },
                              expression: "note.subject"
                            }
                          })
                        ],
                        1
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c("label", { staticClass: "col-sm-3 col-form-label" }, [
                        _vm._v("Note")
                      ]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "col-sm-9" },
                        [
                          _c("vs-textarea", {
                            model: {
                              value: _vm.note.note,
                              callback: function($$v) {
                                _vm.$set(_vm.note, "note", $$v)
                              },
                              expression: "note.note"
                            }
                          })
                        ],
                        1
                      )
                    ]),
                    _vm._v(" "),
                    _c("hr"),
                    _vm._v(" "),
                    _c(
                      "button",
                      { staticClass: "btn btn-info waves-effect waves-light" },
                      [
                        _c("i", { staticClass: "fa fa-save bigger-110" }),
                        _vm._v(
                          "\n                                    Create\n                                "
                        )
                      ]
                    )
                  ]),
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
                          tableHeader: "Student Notes List",
                          url: "/json/student/",
                          noDataMessage:
                            "No Student Note data found. Please Filter Student Note to show.",
                          "has-search": true,
                          "has-multiple": true,
                          "has-pagination": true,
                          suggestText:
                            "Student Notes Record list on table. Filter Student Notes using the filter."
                        },
                        scopedSlots: _vm._u([
                          {
                            key: "items",
                            fn: function(props) {
                              return [
                                _c(
                                  "vs-td",
                                  { attrs: { data: props.data.reg_no } },
                                  [
                                    _c(
                                      "a",
                                      {
                                        staticClass: "pointer-all text-primary",
                                        attrs: { title: "View" },
                                        on: {
                                          click: function($event) {
                                            $event.stopPropagation()
                                            return _vm.viewItems(props.data.id)
                                          }
                                        }
                                      },
                                      [
                                        _vm._v(
                                          "\n                                                " +
                                            _vm._s(props.data.reg_no) +
                                            "\n                                            "
                                        )
                                      ]
                                    )
                                  ]
                                ),
                                _vm._v(" "),
                                _c("vs-td", [
                                  _vm._v(
                                    "\n                                            " +
                                      _vm._s(props.data.note) +
                                      "\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c("vs-td", [
                                  _c(
                                    "div",
                                    { staticClass: "d-flex" },
                                    [
                                      _vm._v(
                                        "\n                                                " +
                                          _vm._s(props.data.academic_status) +
                                          "\n                                                "
                                      ),
                                      _c(
                                        "vs-switch",
                                        {
                                          staticClass: "pointer-all ml-2",
                                          attrs: {
                                            color: "success",
                                            checked:
                                              props.data.status == "active"
                                                ? true
                                                : false
                                          },
                                          on: {
                                            click: function($event) {
                                              $event.stopPropagation()
                                              return _vm.changeStatus(
                                                props.data.id
                                              )
                                            }
                                          }
                                        },
                                        [
                                          _c(
                                            "span",
                                            {
                                              attrs: { slot: "on" },
                                              slot: "on"
                                            },
                                            [_vm._v("Active")]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "span",
                                            {
                                              attrs: { slot: "off" },
                                              slot: "off"
                                            },
                                            [_vm._v("In-Active")]
                                          )
                                        ]
                                      )
                                    ],
                                    1
                                  )
                                ]),
                                _vm._v(" "),
                                _c("vs-td", [
                                  _c(
                                    "a",
                                    {
                                      staticClass:
                                        "btn btn-success btn-sm pointer-all",
                                      attrs: { title: "Edit" },
                                      on: {
                                        click: function($event) {
                                          $event.stopPropagation()
                                          return _vm.editItems(props.data.id)
                                        }
                                      }
                                    },
                                    [_c("i", { staticClass: "fa fa-pencil" })]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "a",
                                    {
                                      staticClass:
                                        "btn btn-danger btn-sm pointer-all",
                                      attrs: { title: "Delete" },
                                      on: {
                                        click: function($event) {
                                          $event.stopPropagation()
                                          return _vm.deleteItems(props.data.id)
                                        }
                                      }
                                    },
                                    [_c("i", { staticClass: "fa fa-trash-o" })]
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
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Student Manager")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/student/note.vue":
/*!********************************************************!*\
  !*** ./resources/js/src/views/custom/student/note.vue ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _note_vue_vue_type_template_id_786dfa0a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./note.vue?vue&type=template&id=786dfa0a&scoped=true& */ "./resources/js/src/views/custom/student/note.vue?vue&type=template&id=786dfa0a&scoped=true&");
/* harmony import */ var _note_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./note.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/note.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _note_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _note_vue_vue_type_template_id_786dfa0a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _note_vue_vue_type_template_id_786dfa0a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "786dfa0a",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/note.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/note.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/note.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_note_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./note.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/note.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_note_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/note.vue?vue&type=template&id=786dfa0a&scoped=true&":
/*!***************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/note.vue?vue&type=template&id=786dfa0a&scoped=true& ***!
  \***************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_note_vue_vue_type_template_id_786dfa0a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./note.vue?vue&type=template&id=786dfa0a&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/note.vue?vue&type=template&id=786dfa0a&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_note_vue_vue_type_template_id_786dfa0a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_note_vue_vue_type_template_id_786dfa0a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
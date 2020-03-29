(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[11],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************/
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      selectedStudent: null,
      students: ['dsad', 'sadsad'],
      receive_date: '',
      receive_amount: null,
      discount: 0,
      note: '',
      payment_method: 'cash',
      isPrint: 'no_print'
    };
  },
  created: function created() {},
  methods: {
    verifyStudent: function verifyStudent() {},
    quickCollect: function quickCollect() {}
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=template&id=5ac5cef2&scoped=true&":
/*!***********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=template&id=5ac5cef2&scoped=true& ***!
  \***********************************************************************************************************************************************************************************************************************************************/
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
            _vm._v("Receive Detail\n            ")
          ]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "p-2" },
            [
              _c(
                "router-link",
                { attrs: { to: "/account/fees" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-user",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                        Student Fee\n                    "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/account/payroll" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-user-secret",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                        Staff Payroll\n                    "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/account/transaction-head" } },
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
                        "\n                        Ledger\n                    "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/account/transaction" } },
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
                        "\n                        Transactions\n                    "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/account/bank" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _c("i", {
                        staticClass: "fa fa-bank",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                        Bank\n                    "
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
            _c(
              "vs-card",
              [
                _c(
                  "div",
                  { staticClass: "p-2" },
                  [
                    _c(
                      "router-link",
                      { attrs: { to: "/account/fees" } },
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
                              "\n                            Receive History\n                        "
                            )
                          ]
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "router-link",
                      { attrs: { to: "/account/fees/master" } },
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
                              "\n                            Master Detail\n                        "
                            )
                          ]
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "router-link",
                      { attrs: { to: "/account/fees/master/add" } },
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
                              "\n                            Add Fees\n                        "
                            )
                          ]
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "router-link",
                      { attrs: { to: "/account/fees/quick-receive" } },
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
                              "\n                            Quick Receive\n                        "
                            )
                          ]
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "router-link",
                      { attrs: { to: "/account/fees/collection" } },
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
                              "\n                            Collect Fees\n                        "
                            )
                          ]
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "router-link",
                      { attrs: { to: "/account/fees/balance" } },
                      [
                        _c(
                          "vs-button",
                          {
                            staticClass: "smBtn",
                            attrs: { type: "filled", color: "warning" }
                          },
                          [
                            _c("i", {
                              staticClass: "fa fa-money",
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
                      { attrs: { to: "/account/fees/head" } },
                      [
                        _c(
                          "vs-button",
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [
                            _c("i", {
                              staticClass: "fa fa-header",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v(
                              "\n                            Fees Head\n                        "
                            )
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
                _c(
                  "div",
                  { staticClass: "col-md-12 " },
                  [
                    _c("h4", { staticClass: "header large lighter blue" }, [
                      _c("i", {
                        staticClass: "fa fa-search",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                        Search & Verify Student Before Collect\n                    "
                      )
                    ]),
                    _vm._v(" "),
                    _c(
                      "vs-select",
                      {
                        staticClass: "w-100",
                        attrs: { autocomplete: "" },
                        model: {
                          value: _vm.selectedStudent,
                          callback: function($$v) {
                            _vm.selectedStudent = $$v
                          },
                          expression: "selectedStudent"
                        }
                      },
                      _vm._l(_vm.students, function(item, index) {
                        return _c("vs-select-item", {
                          key: index,
                          attrs: { value: item, text: item }
                        })
                      }),
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c("vs-divider"),
                _vm._v(" "),
                _c(
                  "vs-button",
                  { staticClass: "smBtn", on: { click: _vm.verifyStudent } },
                  [
                    _c("i", { staticClass: "fa fa-user" }),
                    _vm._v(
                      "\n                    Verify Student for Collect Fees\n                "
                    )
                  ]
                ),
                _vm._v(" "),
                _vm.selectedStudent
                  ? _c(
                      "div",
                      { staticClass: "col-sm-12 mt-2" },
                      [
                        _c("div", { staticClass: "row w-100" }, [
                          _c("div", { staticClass: "col-md-3" }, [
                            _c(
                              "div",
                              {
                                staticClass:
                                  "d-flex justify-content-center align-items-center w-100 "
                              },
                              [
                                _vm.selectedStudent.profile_picture
                                  ? _c("img", {
                                      staticClass: "img-thumbnail mt-3 ",
                                      attrs: {
                                        src: _vm.selectedStudent.profile_picture
                                      }
                                    })
                                  : _c("img", {
                                      staticClass: "img-thumbnail mt-3 ",
                                      attrs: {
                                        src: __webpack_require__(/*! ../../../../../../assets/images/profile-default.jpg */ "./resources/assets/images/profile-default.jpg")
                                      }
                                    })
                              ]
                            )
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-md-9" }, [
                            _c("div", { staticClass: "data-table" }, [
                              _c("div", { staticClass: "rows" }, [
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("Name")
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "content" },
                                  [
                                    _c(
                                      "router-link",
                                      {
                                        attrs: {
                                          to: {
                                            name: "studentView",
                                            params: {
                                              id: _vm.selectedStudent.id
                                            }
                                          }
                                        }
                                      },
                                      [
                                        _vm._v(
                                          "\n                                            " +
                                            _vm._s(_vm.selectedStudent.name) +
                                            "sdfds\n                                        "
                                        )
                                      ]
                                    )
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("Reg. No.:")
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "content" },
                                  [
                                    _c(
                                      "router-link",
                                      {
                                        attrs: {
                                          to: {
                                            name: "studentView",
                                            params: {
                                              id: _vm.selectedStudent.id
                                            }
                                          }
                                        }
                                      },
                                      [
                                        _vm._v(
                                          "\n                                            " +
                                            _vm._s(_vm.selectedStudent.reg_no) +
                                            "sfddsfds\n                                        "
                                        )
                                      ]
                                    )
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "rows" }, [
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("Univ.Reg.:")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "content" }, [
                                  _vm._v(
                                    _vm._s(
                                      _vm.selectedStudent.university_reg_no
                                    )
                                  )
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("DOB:")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "content" }, [
                                  _vm._v(
                                    _vm._s(_vm.selectedStudent.date_of_birth)
                                  )
                                ])
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "rows" }, [
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("Faculty/Class:")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "content" }, [
                                  _vm._v("123")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("Sem./Sec.:")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "content" }, [
                                  _vm._v(" 06/01/2020")
                                ])
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "rows" }, [
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("Gender :")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "content" }, [
                                  _vm._v("1235")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("Blood Group :")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "content" }, [
                                  _vm._v(" 06/01/2020")
                                ])
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "rows" }, [
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("Nationality :")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "content" }, [
                                  _vm._v("male")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("E-mail :")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "content" }, [
                                  _vm._v(" a+")
                                ])
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "rows2" }, [
                                _c("div", { staticClass: "header" }, [
                                  _vm._v("Balance Fee :")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "content" }, [
                                  _vm._v("islam")
                                ])
                              ])
                            ])
                          ])
                        ]),
                        _vm._v(" "),
                        _c("vs-divider"),
                        _vm._v(" "),
                        _c("div", { staticClass: "row mx-0 my-2" }, [
                          _c("div", { staticClass: "col-sm-2" }, [
                            _vm._v("Receive Date")
                          ]),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "col-sm-2" },
                            [
                              _c("datepicker", {
                                model: {
                                  value: _vm.receive_date,
                                  callback: function($$v) {
                                    _vm.receive_date = $$v
                                  },
                                  expression: "receive_date"
                                }
                              })
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-sm-2" }, [
                            _vm._v("Receive Amount")
                          ]),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "col-sm-2" },
                            [
                              _c("vs-input", {
                                attrs: { type: "number", required: "" },
                                model: {
                                  value: _vm.receive_amount,
                                  callback: function($$v) {
                                    _vm.receive_amount = $$v
                                  },
                                  expression: "receive_amount"
                                }
                              })
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-sm-2" }, [
                            _vm._v("Discount Amount")
                          ]),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "col-sm-2" },
                            [
                              _c("vs-input", {
                                attrs: { type: "number", required: "" },
                                model: {
                                  value: _vm.discount,
                                  callback: function($$v) {
                                    _vm.discount = $$v
                                  },
                                  expression: "discount"
                                }
                              })
                            ],
                            1
                          )
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "row mx-0 my-2" }, [
                          _c("div", { staticClass: "col-sm-2 " }, [
                            _vm._v("Payment Method")
                          ]),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "col-sm-10" },
                            [
                              _c(
                                "vs-radio",
                                {
                                  attrs: { "vs-value": "cash" },
                                  model: {
                                    value: _vm.payment_method,
                                    callback: function($$v) {
                                      _vm.payment_method = $$v
                                    },
                                    expression: "payment_method"
                                  }
                                },
                                [_vm._v("Cash")]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-radio",
                                {
                                  attrs: { "vs-value": "bank" },
                                  model: {
                                    value: _vm.payment_method,
                                    callback: function($$v) {
                                      _vm.payment_method = $$v
                                    },
                                    expression: "payment_method"
                                  }
                                },
                                [_vm._v("Bank")]
                              )
                            ],
                            1
                          )
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "row mx-0 my-2" }, [
                          _c("div", { staticClass: "col-sm-2" }, [
                            _vm._v("Note")
                          ]),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "col-sm-10" },
                            [
                              _c("vs-textarea", {
                                model: {
                                  value: _vm.note,
                                  callback: function($$v) {
                                    _vm.note = $$v
                                  },
                                  expression: "note"
                                }
                              })
                            ],
                            1
                          )
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "row mx-0 my-2" }, [
                          _c(
                            "div",
                            { staticClass: "col-sm-2" },
                            [
                              _c(
                                "vs-radio",
                                {
                                  attrs: { "vs-value": "no_print" },
                                  model: {
                                    value: _vm.isPrint,
                                    callback: function($$v) {
                                      _vm.isPrint = $$v
                                    },
                                    expression: "isPrint"
                                  }
                                },
                                [_vm._v("No Print")]
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "col-sm-3" },
                            [
                              _c(
                                "vs-radio",
                                {
                                  attrs: { "vs-value": "short_print" },
                                  model: {
                                    value: _vm.isPrint,
                                    callback: function($$v) {
                                      _vm.isPrint = $$v
                                    },
                                    expression: "isPrint"
                                  }
                                },
                                [_vm._v("Print Short Print")]
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "col-sm-3" },
                            [
                              _c(
                                "vs-radio",
                                {
                                  attrs: { "vs-value": "long_print" },
                                  model: {
                                    value: _vm.isPrint,
                                    callback: function($$v) {
                                      _vm.isPrint = $$v
                                    },
                                    expression: "isPrint"
                                  }
                                },
                                [_vm._v("Print Detail Receipt")]
                              )
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
                            staticClass: "w-100 my-round",
                            on: { click: _vm.quickCollect }
                          },
                          [_vm._v("Quick Collect")]
                        )
                      ],
                      1
                    )
                  : _vm._e()
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
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/assets/images/profile-default.jpg":
/*!*****************************************************!*\
  !*** ./resources/assets/images/profile-default.jpg ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/images/profile-default.jpg?a4eb6109097a3408128df34c0271410c";

/***/ }),

/***/ "./resources/js/src/views/custom/account/fees/quick-receive.vue":
/*!**********************************************************************!*\
  !*** ./resources/js/src/views/custom/account/fees/quick-receive.vue ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _quick_receive_vue_vue_type_template_id_5ac5cef2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./quick-receive.vue?vue&type=template&id=5ac5cef2&scoped=true& */ "./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=template&id=5ac5cef2&scoped=true&");
/* harmony import */ var _quick_receive_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./quick-receive.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _quick_receive_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _quick_receive_vue_vue_type_template_id_5ac5cef2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _quick_receive_vue_vue_type_template_id_5ac5cef2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "5ac5cef2",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/account/fees/quick-receive.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_quick_receive_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./quick-receive.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_quick_receive_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=template&id=5ac5cef2&scoped=true&":
/*!*****************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=template&id=5ac5cef2&scoped=true& ***!
  \*****************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_quick_receive_vue_vue_type_template_id_5ac5cef2_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./quick-receive.vue?vue&type=template&id=5ac5cef2&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/account/fees/quick-receive.vue?vue&type=template&id=5ac5cef2&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_quick_receive_vue_vue_type_template_id_5ac5cef2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_quick_receive_vue_vue_type_template_id_5ac5cef2_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[13],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/guardian/registration.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/guardian/registration.vue?vue&type=script&lang=js& ***!
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
//
//
//
//
//
//
//
//
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
      guardian: {},
      notification: ''
    };
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/guardian/registration.vue?vue&type=template&id=e633143a&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/guardian/registration.vue?vue&type=template&id=e633143a&scoped=true& ***!
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
  return _c(
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
              { attrs: { to: "/guardian" } },
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
              { attrs: { to: "/guardian/registration" } },
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
        { staticClass: "col-md-12 p-0" },
        [
          _c("vs-card", { staticClass: "p-3" }, [
            _c("div", { staticClass: "row p-2" }, [
              _c("h4", { staticClass: "card-title" }, [
                _vm._v("Guardian Registration\n                    ")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-md-12" },
                [
                  _c(
                    "vs-tabs",
                    { staticClass: "custom-tab mt-2" },
                    [
                      _c(
                        "vs-tab",
                        { attrs: { label: "General Information" } },
                        [
                          _c(
                            "div",
                            [
                              _c(
                                "span",
                                {
                                  staticClass:
                                    "badge badge badge-danger badge-pill mr-2"
                                },
                                [
                                  _vm._v(
                                    "\n\t\t\t\t\t\t\t\t\t\t\t\t\tRed mark input are required. "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-divider"),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-3" }, [
                                  _vm._v(
                                    "\n                                                NAME OF Guardian\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.first_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "first_name",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.first_name"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.middle_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "middle_name",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.middle_name"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.last_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "last_name",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.last_name"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                Eligibility\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.eligibility,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "eligibility",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.eligibility"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                Occupation\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.occupation,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "occupation",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.occupation"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                Office\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.office,
                                        callback: function($$v) {
                                          _vm.$set(_vm.guardian, "office", $$v)
                                        },
                                        expression: "guardian.office"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                Office Number\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.office_number,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "office_number",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.office_number"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                Residence Number\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.residence_number,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "residence_number",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.residence_number"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                Mobile 1\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.mobile_1,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "mobile_1",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.mobile_1"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                Mobile 2\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.mobile_2,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "mobile_2",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.mobile_2"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                E-mail\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.email,
                                        callback: function($$v) {
                                          _vm.$set(_vm.guardian, "email", $$v)
                                        },
                                        expression: "guardian.email"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                Relation\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.relation,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.guardian,
                                            "relation",
                                            $$v
                                          )
                                        },
                                        expression: "guardian.relation"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                                Guardian Address\n                                            "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.guardian.address,
                                        callback: function($$v) {
                                          _vm.$set(_vm.guardian, "address", $$v)
                                        },
                                        expression: "guardian.address"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ])
                            ],
                            1
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c("vs-tab", { attrs: { label: "Profile Images" } }, [
                        _c("h4", [_vm._v("Profile Pictures")]),
                        _vm._v(" "),
                        _c("div", { staticClass: "row" }, [
                          _c("div", { staticClass: "col-md-3" }, [
                            _vm._v("Guardian Profile Picture")
                          ]),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "col-md-5" },
                            [
                              _c("vs-input", {
                                attrs: { type: "file" },
                                model: {
                                  value: _vm.guardian.profile_picture,
                                  callback: function($$v) {
                                    _vm.$set(
                                      _vm.guardian,
                                      "profile_picture",
                                      $$v
                                    )
                                  },
                                  expression: "guardian.profile_picture"
                                }
                              })
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            {
                              staticClass:
                                "col-md-4 d-flex justify-content-center"
                            },
                            [
                              _vm.guardian.profile_picture
                                ? _c("img", {
                                    staticClass: "img-responsive",
                                    attrs: {
                                      width: "100px",
                                      src: _vm.guardian.profile_picture
                                    }
                                  })
                                : _c("img", {
                                    staticClass: "img-responsive",
                                    attrs: {
                                      width: "100px",
                                      src: __webpack_require__(/*! ../../../../../assets/images/profile-default.jpg */ "./resources/assets/images/profile-default.jpg")
                                    }
                                  })
                            ]
                          )
                        ])
                      ])
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c("vs-divider"),
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
          ])
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-12 mb-2" }, [
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Guardian Manager")])
    ])
  }
]
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

/***/ "./resources/js/src/views/custom/guardian/registration.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/guardian/registration.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _registration_vue_vue_type_template_id_e633143a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./registration.vue?vue&type=template&id=e633143a&scoped=true& */ "./resources/js/src/views/custom/guardian/registration.vue?vue&type=template&id=e633143a&scoped=true&");
/* harmony import */ var _registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./registration.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/guardian/registration.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _registration_vue_vue_type_template_id_e633143a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _registration_vue_vue_type_template_id_e633143a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "e633143a",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/guardian/registration.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/guardian/registration.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/guardian/registration.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./registration.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/guardian/registration.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/guardian/registration.vue?vue&type=template&id=e633143a&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/guardian/registration.vue?vue&type=template&id=e633143a&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_template_id_e633143a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./registration.vue?vue&type=template&id=e633143a&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/guardian/registration.vue?vue&type=template&id=e633143a&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_template_id_e633143a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_template_id_e633143a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
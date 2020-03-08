(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[121],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/index.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/index.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************/
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
/* harmony default export */ __webpack_exports__["default"] = ({
  components: {},
  data: function data() {
    return {
      studentHeader: [{
        name: 'Faculty/Class',
        sort_key: 'faculty'
      }, {
        name: 'Sem',
        sort_key: ''
      }, {
        name: 'Reg.Num',
        sort_key: 'reg_no'
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
      }],
      notification: '',
      residentModal: false,
      transportModal: false,
      residentUser: {},
      transportUser: {}
    };
  },
  created: function created() {},
  methods: {
    openResidentModal: function openResidentModal(user) {
      this.residentModal = true;
      this.residentUser = user;
    },
    openTransportModal: function openTransportModal(user) {
      this.transportModal = true;
      this.transportUser = user;
    },
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
    changeStatus: function changeStatus(id, status) {
      var val = status === 'active' ? 'in-active' : 'active'; // console.log(id, status)

      var url = '/json/student/' + id + '/' + val;
      this.$http.get('/json/student/' + id + '/' + val).then(function (res) {
        console.log(res.data);
      });
    },
    quickMember: function quickMember(user) {//  params: {reg_no: user.reg_no,user_type:1,status:user.status}
    }
  }
});

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
  return _c(
    "div",
    [
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
                          "\n                        Detail\n                    "
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
                          "\n                        Registration\n                    "
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
                          "\n                        Bulk Registration\n                    "
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
                          "\n                        Transfer\n                    "
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
                          "\n                        Documents\n                    "
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
                          "\n                        Notes\n                    "
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
                          "\n                        Balance Fees\n                    "
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
                          "\n                        Library\n                    "
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
                          "\n                        Attendance\n                    "
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
                      "\n                " +
                        _vm._s(_vm.notification) +
                        "\n            "
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
              _c(
                "vs-card",
                [
                  _c("student-table", {
                    attrs: {
                      headers: _vm.studentHeader,
                      tableHeader: "Student List",
                      suggestText:
                        "Student Record list on table. Filter Students using the filter.",
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
                                  "\n                            " +
                                    _vm._s(props.data.faculty) +
                                    "\n                        "
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-td",
                              { attrs: { data: props.data.semester } },
                              [
                                _vm._v(
                                  "\n                            " +
                                    _vm._s(props.data.semester) +
                                    "\n                        "
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-td",
                              { attrs: { data: props.data.reg_no } },
                              [
                                _vm._v(
                                  "\n                            " +
                                    _vm._s(props.data.reg_no) +
                                    "\n                        "
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-td",
                              { attrs: { data: props.data.first_name } },
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
                                      "\n                                " +
                                        _vm._s(
                                          props.data.first_name +
                                            " " +
                                            props.data.middle_name +
                                            " " +
                                            props.data.last_name
                                        ) +
                                        "\n                            "
                                    )
                                  ]
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c("vs-td", [
                              _c(
                                "div",
                                { staticClass: "d-flex" },
                                [
                                  _vm._v(
                                    "\n                                " +
                                      _vm._s(props.data.academic_status) +
                                      "\n                                "
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
                                            props.data.id,
                                            props.data.status
                                          )
                                        }
                                      }
                                    },
                                    [
                                      _c(
                                        "span",
                                        { attrs: { slot: "on" }, slot: "on" },
                                        [_vm._v("Active")]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "span",
                                        { attrs: { slot: "off" }, slot: "off" },
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
                              _c("div", { staticClass: "action-own" }, [
                                _c(
                                  "a",
                                  {
                                    staticClass:
                                      "btn btn-primary btn-sm pointer-all",
                                    attrs: { title: "View" },
                                    on: {
                                      click: function($event) {
                                        $event.stopPropagation()
                                        return _vm.viewItems(props.data.id)
                                      }
                                    }
                                  },
                                  [_c("i", { staticClass: "fa fa-eye" })]
                                ),
                                _vm._v(" "),
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
                            ]),
                            _vm._v(" "),
                            _c("vs-td", [
                              _c("div", { staticClass: "action-own" }, [
                                _c(
                                  "a",
                                  {
                                    staticClass: "icons-only pointer-all",
                                    on: {
                                      click: function($event) {
                                        $event.stopPropagation()
                                        return _vm.quickMember(props.data)
                                      }
                                    }
                                  },
                                  [_c("i", { staticClass: "fa fa-book " })]
                                ),
                                _vm._v(" "),
                                _c(
                                  "a",
                                  {
                                    staticClass: "icons-only pointer-all",
                                    on: {
                                      click: function($event) {
                                        $event.stopPropagation()
                                        return _vm.openResidentModal(props.data)
                                      }
                                    }
                                  },
                                  [_c("i", { staticClass: "fa fa-bed" })]
                                ),
                                _vm._v(" "),
                                _c(
                                  "a",
                                  {
                                    staticClass: "icons-only pointer-all",
                                    on: {
                                      click: function($event) {
                                        $event.stopPropagation()
                                        return _vm.openTransportModal(
                                          props.data
                                        )
                                      }
                                    }
                                  },
                                  [_c("i", { staticClass: "fa fa-car" })]
                                )
                              ])
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
      ),
      _vm._v(" "),
      _c(
        "vs-popup",
        {
          staticClass: "holamundo",
          attrs: {
            title: _vm.residentUser.reg_no + " | Manage Resident",
            active: _vm.residentModal
          },
          on: {
            "update:active": function($event) {
              _vm.residentModal = $event
            }
          }
        },
        [
          _c(
            "div",
            { staticClass: "form-group mt-3" },
            [
              _c("label", { staticClass: "col-sm-12" }, [_vm._v("Hostel")]),
              _vm._v(" "),
              _c("vs-select", { staticClass: "col-sm-12" })
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "form-group" },
            [
              _c("label", { staticClass: "col-sm-12" }, [_vm._v("Room")]),
              _vm._v(" "),
              _c("vs-select", { staticClass: "col-sm-12" })
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "form-group" },
            [
              _c("label", { staticClass: "col-sm-12" }, [_vm._v("Bed")]),
              _vm._v(" "),
              _c("vs-select", { staticClass: "col-sm-12" })
            ],
            1
          ),
          _vm._v(" "),
          _c("div", { staticClass: "footer-modal" }, [
            _c(
              "button",
              {
                staticClass: "btn btn-default pull-right mr-1",
                attrs: { type: "button" },
                on: {
                  click: function($event) {
                    return _vm.$emit("close")
                  }
                }
              },
              [_vm._v("\n                Cancel\n            ")]
            ),
            _vm._v(" "),
            _c(
              "button",
              {
                staticClass: "btn btn-success pull-right",
                attrs: { type: "button" }
              },
              [_vm._v("\n                Assign Bed\n            ")]
            )
          ])
        ]
      ),
      _vm._v(" "),
      _c("vs-popup", {
        staticClass: "holamundo",
        attrs: {
          title: _vm.transportUser.reg_no + " | Manage Transport User",
          active: _vm.transportModal
        },
        on: {
          "update:active": function($event) {
            _vm.transportModal = $event
          }
        }
      })
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
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Student Manager")])
    ])
  }
]
render._withStripped = true



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
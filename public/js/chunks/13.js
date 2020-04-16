(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[13],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/index.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/index.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_navigation_staff_navigation_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../components/navigation/staff-navigation.vue */ "./resources/js/src/views/components/navigation/staff-navigation.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    'staff-navigation': _components_navigation_staff_navigation_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      staffHeader: [{
        name: 'Reg.Num',
        sort_key: 'reg_no'
      }, {
        name: 'Staff Name',
        sort_key: ''
      }, {
        name: 'Phone',
        sort_key: ''
      }, {
        name: 'Designation',
        sort_key: ''
      }, {
        name: 'Qualification',
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
        name: 'staff.view',
        params: {
          id: id
        }
      });
    },
    editItems: function editItems(id) {
      this.$router.push({
        name: 'staff.edit',
        params: {
          id: id
        }
      });
    },
    deleteItems: function deleteItems(id) {
      var _this = this;

      this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(function (dialog) {
        _this.$http.get('/json/staff/' + id + '/delete').then(function (res) {
          _this.$refs.staffTable.getData();

          _this.$vs.notify({
            title: res.data[0],
            text: res.data[1],
            color: res.data[0],
            icon: 'verified'
          });
        });
      });
    },
    changeStatus: function changeStatus(id, status) {
      var _this2 = this;

      var stat = status === 'active' ? 'in-active' : 'active';
      var url = '/json/staff/' + id + '/' + stat;
      this.$http.get(url).then(function (res) {
        _this2.$refs.staffTable.getData();

        _this2.$vs.notify({
          title: 'Success',
          text: res.data[1],
          color: res.data[0],
          icon: 'verified_user'
        });
      });
    },
    quickMember: function quickMember(user) {//  params: {reg_no: user.reg_no,user_type:1,status:user.status}
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d&":
/*!****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d& ***!
  \****************************************************************************************************************************************************************************************************************************************/
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
    { staticClass: "staff-navigation" },
    [
      _c(
        "router-link",
        { attrs: { to: "/staff" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-list",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Detail\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/add" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-plus",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Registration\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/import" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-upload",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Bulk Registration\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/document" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-files-o",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Documents\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/note" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-sticky-note",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Notes\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/payroll" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-sticky-note",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Payroll\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/library/staff" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-calculator",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Library\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/attendance/staff" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-calendar",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Attendance\n        ")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "router-link",
        { attrs: { to: "/staff/designation" } },
        [
          _c("vs-button", { staticClass: "smBtn", attrs: { type: "filled" } }, [
            _c("i", {
              staticClass: "fa fa-calendar",
              attrs: { "aria-hidden": "true" }
            }),
            _vm._v("\n            Designation\n        ")
          ])
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/index.vue?vue&type=template&id=d7656562&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/index.vue?vue&type=template&id=d7656562&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************/
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
          _c("staff-navigation"),
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
                  _c("staff-table", {
                    ref: "staffTable",
                    attrs: {
                      headers: _vm.staffHeader,
                      tableHeader: "Staff List",
                      suggestText:
                        "Staff Record list on table. Filter Staffs using the filter.",
                      url: "/json/staff/",
                      noDataMessage:
                        "No Staff data found. Please Filter Staff to show.",
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
                              { attrs: { data: props.data.fullname } },
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
                                        _vm._s(props.data.fullname) +
                                        "\n                            "
                                    )
                                  ]
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-td",
                              { attrs: { data: props.data.mobile_1 } },
                              [
                                _vm._v(
                                  "\n                            " +
                                    _vm._s(props.data.mobile_1) +
                                    "\n                        "
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-td",
                              { attrs: { data: props.data.designation } },
                              [
                                _vm._v(
                                  "\n                            " +
                                    _vm._s(props.data.designation) +
                                    "\n                        "
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-td",
                              { attrs: { data: props.data.qualification } },
                              [
                                _vm._v(
                                  "\n                            " +
                                    _vm._s(props.data.qualification) +
                                    "\n                        "
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c("vs-td", [
                              _c(
                                "div",
                                { staticClass: "d-flex" },
                                [
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
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Staff Manager")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/components/navigation/staff-navigation.vue":
/*!***************************************************************************!*\
  !*** ./resources/js/src/views/components/navigation/staff-navigation.vue ***!
  \***************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./staff-navigation.vue?vue&type=template&id=1078ac4d& */ "./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");

var script = {}


/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__["default"])(
  script,
  _staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__["render"],
  _staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/components/navigation/staff-navigation.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d&":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d& ***!
  \**********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./staff-navigation.vue?vue&type=template&id=1078ac4d& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/components/navigation/staff-navigation.vue?vue&type=template&id=1078ac4d&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_staff_navigation_vue_vue_type_template_id_1078ac4d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/staff/index.vue":
/*!*******************************************************!*\
  !*** ./resources/js/src/views/custom/staff/index.vue ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _index_vue_vue_type_template_id_d7656562_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=d7656562&scoped=true& */ "./resources/js/src/views/custom/staff/index.vue?vue&type=template&id=d7656562&scoped=true&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _index_vue_vue_type_template_id_d7656562_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _index_vue_vue_type_template_id_d7656562_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "d7656562",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/index.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/index.vue?vue&type=script&lang=js&":
/*!********************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/index.vue?vue&type=script&lang=js& ***!
  \********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/index.vue?vue&type=template&id=d7656562&scoped=true&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/index.vue?vue&type=template&id=d7656562&scoped=true& ***!
  \**************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_d7656562_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=template&id=d7656562&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/index.vue?vue&type=template&id=d7656562&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_d7656562_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_d7656562_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
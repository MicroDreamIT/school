(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[13],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/designation.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/designation.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************/
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

/* harmony default export */ __webpack_exports__["default"] = ({
  components: {
    'staff-navigation': _components_navigation_staff_navigation_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      tableHeader: [{
        name: 'Designation',
        sort_key: 'designation'
      }, {
        name: 'Status'
      }, {
        name: 'Action'
      }],
      title: '',
      items: [],
      id: null,
      mainItem: [],
      deletePop: false,
      deleteItem: null,
      url: '/json/staff/designation',
      buttonText: 'create'
    };
  },
  created: function created() {
    this.getData();
  },
  methods: {
    getData: function getData() {
      var _this = this;

      this.$http.get(this.url).then(function (res) {
        _this.items = res.data.designation;
        _this.mainItem = _this.items;
      });
    },
    editItems: function editItems(id) {
      this.$refs.stafftitle.$el.querySelector('input').focus();
      var item = this.items.filter(function (st) {
        return st.id === id;
      })[0];
      this.title = item.title;
      this.id = item.id;
      this.buttonText = 'update';
    },
    deleteItems: function deleteItems(id) {
      var _this2 = this;

      this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(function (dialog) {
        _this2.$http.get(_this2.url + '/' + id + '/delete').then(function (res) {
          _this2.getData();

          _this2.$vs.notify({
            title: res.data[0],
            text: res.data[1],
            color: res.data[0],
            icon: 'verified'
          });
        });
      });
    },
    changeStatus: function changeStatus(id, status) {
      var _this3 = this;

      var stat = status === 'active' ? 'in-active' : 'active';
      var url = this.url + '/' + id + '/' + stat;
      this.$http.get(url).then(function (res) {
        _this3.getData();

        _this3.$vs.notify({
          title: res.data[0],
          text: res.data[1],
          color: res.data[0],
          icon: 'verified_user'
        });
      });
    },
    submit: function submit() {
      var _this4 = this;

      this.$validator.validateAll().then(function (value) {
        if (value) {
          if (_this4.id) {
            _this4.$http.post(_this4.url + '/' + _this4.id + '/update', {
              title: _this4.title
            }).then(function (res) {
              _this4.$vs.notify({
                title: res.data[0],
                text: res.data[1],
                color: res.data[0],
                icon: 'verified_user'
              });

              _this4.title = '';
              _this4.id = null;

              _this4.getData();

              _this4.$validator.reset();
            });
          } else {
            _this4.$http.post(_this4.url + '/store', {
              title: _this4.title
            }).then(function (res) {
              _this4.$vs.notify({
                title: res.data[0],
                text: res.data[1],
                color: res.data[0],
                icon: 'verified_user'
              });

              _this4.title = '';
              _this4.id = null;

              _this4.getData();

              _this4.$validator.reset();
            });
          }
        }
      });
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/designation.vue?vue&type=template&id=d6bf2b98&scoped=true&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/staff/designation.vue?vue&type=template&id=d6bf2b98&scoped=true& ***!
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
            _c("vs-card", [
              _c("div", { staticClass: "row p-2" }, [
                _c("h4", { staticClass: "ml-4" }, [_vm._v("Designation")]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-12 row" }, [
                  _c(
                    "div",
                    { staticClass: "col-md-4" },
                    [
                      _c("br"),
                      _vm._v(" "),
                      _c("h4", { staticClass: "header large lighter blue" }, [
                        _c("i", {
                          staticClass: "fa fa-search",
                          attrs: { "aria-hidden": "true" }
                        }),
                        _vm._v(
                          "\n                                    Create Designation\n                                "
                        )
                      ]),
                      _c("br"),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-group row" }, [
                        _c(
                          "label",
                          { staticClass: "col-sm-3 col-form-label" },
                          [_vm._v("Designation")]
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "col-sm-9" },
                          [
                            _c("vs-input", {
                              directives: [
                                {
                                  name: "validate",
                                  rawName: "v-validate",
                                  value: "required",
                                  expression: "'required'"
                                }
                              ],
                              ref: "stafftitle",
                              staticClass: "w-100",
                              attrs: {
                                "data-vv-name": "title",
                                danger: _vm.errors.has("title"),
                                "danger-text": _vm.errors.first("title")
                              },
                              model: {
                                value: _vm.title,
                                callback: function($$v) {
                                  _vm.title = $$v
                                },
                                expression: "title"
                              }
                            })
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c("vs-divider"),
                      _vm._v(" "),
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-info waves-effect waves-light",
                          on: {
                            click: function($event) {
                              $event.preventDefault()
                              return _vm.submit($event)
                            }
                          }
                        },
                        [
                          _c("i", { staticClass: "fa fa-save bigger-110" }),
                          _vm._v(
                            "\n                                    " +
                              _vm._s(_vm.buttonText) +
                              "\n                                "
                          )
                        ]
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
                          tableHeader: "Designation List",
                          suggestText:
                            "Designations Record list on table. Filter Years using the filter.\n",
                          url: _vm.url,
                          noDataMessage:
                            "No Designation data found. Please Designation filter to show.",
                          hasSearch: true,
                          "has-multiple": true,
                          "has-pagination": true,
                          "main-item": _vm.mainItem,
                          getData: _vm.getData
                        },
                        scopedSlots: _vm._u([
                          {
                            key: "items",
                            fn: function(props) {
                              return [
                                _c("vs-td", [
                                  _vm._v(
                                    "\n                                            " +
                                      _vm._s(props.data.title) +
                                      "\n                                        "
                                  )
                                ]),
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

/***/ "./resources/js/src/views/custom/staff/designation.vue":
/*!*************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/designation.vue ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _designation_vue_vue_type_template_id_d6bf2b98_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./designation.vue?vue&type=template&id=d6bf2b98&scoped=true& */ "./resources/js/src/views/custom/staff/designation.vue?vue&type=template&id=d6bf2b98&scoped=true&");
/* harmony import */ var _designation_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./designation.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/staff/designation.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _designation_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _designation_vue_vue_type_template_id_d6bf2b98_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _designation_vue_vue_type_template_id_d6bf2b98_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "d6bf2b98",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/staff/designation.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/staff/designation.vue?vue&type=script&lang=js&":
/*!**************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/designation.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_designation_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./designation.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/designation.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_designation_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/staff/designation.vue?vue&type=template&id=d6bf2b98&scoped=true&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/staff/designation.vue?vue&type=template&id=d6bf2b98&scoped=true& ***!
  \********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_designation_vue_vue_type_template_id_d6bf2b98_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./designation.vue?vue&type=template&id=d6bf2b98&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/staff/designation.vue?vue&type=template&id=d6bf2b98&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_designation_vue_vue_type_template_id_d6bf2b98_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_designation_vue_vue_type_template_id_d6bf2b98_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/payment-method.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/academics/payment-method.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************/
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
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      tableHeader: [{
        name: 'Payment Method',
        sort_key: 'payment_method'
      }, {
        name: 'Status',
        sort_key: ''
      }, {
        name: 'Action',
        sort_key: ''
      }],
      notification: 'Please, Create Year and Active',
      status: '',
      status2: [],
      button: '',
      method: '',
      id: null
    };
  },
  created: function created() {
    var method_id = this.$root.getMethod_and_id();
    this.method = method_id[1];
    this.id = method_id[0];
    console.log(this.id, this.method);
  },
  methods: {
    create: function create() {
      alert(this.status);
    },
    edit: function edit(id) {
      this.$router.push({
        name: 'paymentMethodEdit',
        params: {
          id: id
        }
      });
    },
    delete: function _delete(id) {},
    update: function update() {
      alert('update');
    },
    changeStatus: function changeStatus() {
      alert('');
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/payment-method.vue?vue&type=template&id=d932f622&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/academics/payment-method.vue?vue&type=template&id=d932f622&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************************************************/
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
            _vm._v("Payment Method Manager")
          ]),
          _vm._v(" "),
          _vm.notification
            ? _c(
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
            : _vm._e()
        ]),
        _vm._v(" "),
        _c("vs-divider", { staticClass: "mx-3" }),
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
                    _c("h4", [
                      _vm.method != "Edit"
                        ? _c("span", [_vm._v("Create")])
                        : _c("span", [_vm._v("Update")]),
                      _vm._v(" Payment Method")
                    ]),
                    _c("br"),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "form-group row mb-3" },
                      [
                        _c("label", { staticClass: "col-sm-3" }, [
                          _vm._v(" Status")
                        ]),
                        _vm._v(" "),
                        _c("vs-input", {
                          staticClass: "col-sm-9",
                          model: {
                            value: _vm.status,
                            callback: function($$v) {
                              _vm.status = $$v
                            },
                            expression: "status"
                          }
                        })
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("vs-divider"),
                    _vm._v(" "),
                    _vm.method == "Edit"
                      ? _c(
                          "vs-button",
                          {
                            staticClass: "my-round",
                            attrs: { color: "#00b8cf", type: "filled" },
                            on: {
                              click: function($event) {
                                $event.preventDefault()
                                return _vm.update($event)
                              }
                            }
                          },
                          [
                            _vm._v(
                              "\n                            Update\n                        "
                            )
                          ]
                        )
                      : _c(
                          "vs-button",
                          {
                            staticClass: "my-round",
                            attrs: { color: "#00b8cf", type: "filled" },
                            on: {
                              click: function($event) {
                                $event.preventDefault()
                                return _vm.create($event)
                              }
                            }
                          },
                          [
                            _vm._v(
                              "\n                            Create\n                        "
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
                    _c("ow-data-table", {
                      attrs: {
                        headers: _vm.tableHeader,
                        tableHeader: "Payment Method List",
                        suggestText:
                          "Payment Method Record list on table. Filter Payment Method using the filter.",
                        url: "/json/payment-method",
                        noDataMessage:
                          "No Payment Method data found. Please Filter Payment Method to show.",
                        hasSearch: true,
                        "has-multiple": true,
                        "has-pagination": true
                      },
                      scopedSlots: _vm._u([
                        {
                          key: "items",
                          fn: function(props) {
                            return [
                              _c("vs-td"),
                              _vm._v(" "),
                              _c(
                                "vs-td",
                                [
                                  _c(
                                    "vs-switch",
                                    {
                                      staticClass: "pointer-all",
                                      attrs: {
                                        color: "success",
                                        checked:
                                          props.data.status == "Active"
                                            ? true
                                            : false
                                      },
                                      on: {
                                        click: function($event) {
                                          $event.stopPropagation()
                                          return _vm.changeStatus(props.data.id)
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
                              ),
                              _vm._v(" "),
                              _c("vs-td", [
                                _c("div", { staticClass: "action-own" }, [
                                  _c(
                                    "a",
                                    {
                                      staticClass:
                                        "btn btn-success btn-sm waves-effect waves-light pointer-all",
                                      attrs: { title: "Edit" },
                                      on: {
                                        click: function($event) {
                                          $event.stopPropagation()
                                          return _vm.edit(props.data.id)
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
                                        "btn btn-danger btn-sm bootbox-confirm waves-effect waves-light pointer-all",
                                      attrs: { title: "Delete" },
                                      on: {
                                        click: function($event) {
                                          $event.stopPropagation()
                                          return delete props.data.id
                                        }
                                      }
                                    },
                                    [_c("i", { staticClass: "fa fa-trash-o" })]
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
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/academics/payment-method.vue":
/*!********************************************************************!*\
  !*** ./resources/js/src/views/custom/academics/payment-method.vue ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _payment_method_vue_vue_type_template_id_d932f622_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./payment-method.vue?vue&type=template&id=d932f622&scoped=true& */ "./resources/js/src/views/custom/academics/payment-method.vue?vue&type=template&id=d932f622&scoped=true&");
/* harmony import */ var _payment_method_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./payment-method.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/academics/payment-method.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _payment_method_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _payment_method_vue_vue_type_template_id_d932f622_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _payment_method_vue_vue_type_template_id_d932f622_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "d932f622",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/academics/payment-method.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/academics/payment-method.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/academics/payment-method.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_method_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./payment-method.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/payment-method.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_method_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/academics/payment-method.vue?vue&type=template&id=d932f622&scoped=true&":
/*!***************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/academics/payment-method.vue?vue&type=template&id=d932f622&scoped=true& ***!
  \***************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_method_vue_vue_type_template_id_d932f622_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./payment-method.vue?vue&type=template&id=d932f622&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/academics/payment-method.vue?vue&type=template&id=d932f622&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_method_vue_vue_type_template_id_d932f622_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_payment_method_vue_vue_type_template_id_d932f622_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
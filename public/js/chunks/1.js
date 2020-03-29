(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js& ***!
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
        name: 'SEM/SEC',
        sort_key: 'semester'
      }, {
        name: 'Subject',
        sort_key: ''
      }, {
        name: 'Question',
        sort_key: 'title'
      }, {
        name: 'Available On',
        sort_key: ''
      }, {
        name: 'Submit',
        sort_key: ''
      }, {
        name: 'Status',
        sort_key: ''
      }],
      item: [],
      mainItem: [],
      academic_status: [],
      faculties: [],
      batch: [],
      semester: [],
      subjects: [],
      years: []
    };
  },
  created: function created() {
    this.getData();
  },
  methods: {
    getData: function getData() {
      var _this = this;

      this.$http.get('/json/assignment').then(function (res) {
        _this.item = res.data.assignment;
        _this.mainItem = _this.item;
        _this.faculties = _this.$root.objectToArray(res.data.faculties);
        _this.years = res.data.years;
      });
    },
    doFilter: function doFilter() {
      var _this2 = this;

      this.$http.get('/json/assignment', {
        params: this.searchData
      }).then(function (res) {
        _this2.item = res.data.assignment;
        _this2.mainItem = _this2.item;
      });
    },
    findSemester: function findSemester(faculty) {
      var _this3 = this;

      if (faculty) {
        this.$http.post('/json/assignment/find-semester', {
          faculty_id: faculty
        }).then(function (res) {
          _this3.semester = res.data.semester;
        }).catch(function (err) {
          console.log(err.response.message);
        });
      }
    },
    findSubject: function findSubject(semester) {
      var _this4 = this;

      if (semester) {
        this.$http.post('/json/assignment/mark-ledger/find-subject', {
          semester_id: semester
        }).then(function (res) {
          _this4.subjects = _this4.$root.objectToArray(res.data.subjects);
        }).catch(function (err) {
          console.log(err.response.message);
        });
      }
    },
    changeStatus: function changeStatus(id, status) {
      var _this5 = this;

      var stat = status === 'active' ? 'in-active' : 'active';
      var url = '/json/assignment/' + id + '/' + stat;
      this.$http.get(url).then(function (res) {
        _this5.$refs.studentTable.getData();

        _this5.$root.notification.status = res.data[0];
        _this5.$root.notification.message = res.data[1];
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14& ***!
  \******************************************************************************************************************************************************************************************************************************/
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
            _vm._v("Assignment Manager")
          ]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "p-2" },
            [
              _c(
                "router-link",
                { attrs: { to: "/assignment" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [_vm._v("Assignment Detail")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/assignment/add" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [_vm._v("New Assignment")]
                  )
                ],
                1
              )
            ],
            1
          )
        ]),
        _vm._v(" "),
        _c("notify-bar"),
        _vm._v(" "),
        _c("vs-divider", { staticClass: "mx-3" }),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "col-md-12" },
          [
            _c("vs-card", [
              _c("div", { staticClass: "row p-2" }, [
                _c(
                  "div",
                  { staticClass: "col-md-12 mb-2" },
                  [
                    _c(
                      "vs-collapse",
                      { staticClass: "custom-collapse" },
                      [
                        _c("vs-collapse-item", [
                          _c(
                            "div",
                            { attrs: { slot: "header" }, slot: "header" },
                            [
                              _c(
                                "vs-button",
                                {
                                  staticClass: "rounded",
                                  attrs: {
                                    type: "filled",
                                    color: "primary",
                                    icon: "double_arrow"
                                  }
                                },
                                [
                                  _vm._v(
                                    "\n                                        Filter Assignment\n                                    "
                                  )
                                ]
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "filterBox" }, [
                            _c("div", { staticClass: "col-md-12" }, [
                              _c("div", { staticClass: "row" }, [
                                _c("div", { staticClass: "col-md-4" }, [
                                  _c(
                                    "div",
                                    { staticClass: "form-group " },
                                    [
                                      _c("label", [_vm._v("Year:")]),
                                      _vm._v(" "),
                                      _c("v-select", {
                                        attrs: {
                                          options: _vm.years,
                                          label: "value",
                                          reduce: function(a) {
                                            return a.id
                                          }
                                        },
                                        model: {
                                          value: _vm.searchData.year,
                                          callback: function($$v) {
                                            _vm.$set(
                                              _vm.searchData,
                                              "year",
                                              $$v
                                            )
                                          },
                                          expression: "searchData.year"
                                        }
                                      })
                                    ],
                                    1
                                  )
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-4" }, [
                                  _c(
                                    "div",
                                    { staticClass: "form-group" },
                                    [
                                      _c("label", [_vm._v("Faculty/Class")]),
                                      _vm._v(" "),
                                      _c("v-select", {
                                        attrs: {
                                          options: _vm.faculties,
                                          label: "value",
                                          reduce: function(a) {
                                            return a.id
                                          },
                                          placeholder: "Select Faculty/Class"
                                        },
                                        on: {
                                          input: function($event) {
                                            return _vm.findSemester(
                                              _vm.searchData.faculty
                                            )
                                          }
                                        },
                                        model: {
                                          value: _vm.searchData.faculty,
                                          callback: function($$v) {
                                            _vm.$set(
                                              _vm.searchData,
                                              "faculty",
                                              $$v
                                            )
                                          },
                                          expression: "searchData.faculty"
                                        }
                                      })
                                    ],
                                    1
                                  )
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-4" }, [
                                  _c(
                                    "div",
                                    { staticClass: "form-group" },
                                    [
                                      _c("label", [_vm._v("Sem./Sec.")]),
                                      _vm._v(" "),
                                      _c("v-select", {
                                        attrs: {
                                          options: _vm.semester,
                                          label: "semester",
                                          reduce: function(a) {
                                            return a.id
                                          },
                                          placeholder: "Select Sem./Sec."
                                        },
                                        on: {
                                          input: function($event) {
                                            return _vm.findSubject(
                                              _vm.searchData.semester_id
                                            )
                                          }
                                        },
                                        model: {
                                          value: _vm.searchData.semester_id,
                                          callback: function($$v) {
                                            _vm.$set(
                                              _vm.searchData,
                                              "semester_id",
                                              $$v
                                            )
                                          },
                                          expression: "searchData.semester_id"
                                        }
                                      })
                                    ],
                                    1
                                  )
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-4" }, [
                                  _c(
                                    "div",
                                    { staticClass: "form-group" },
                                    [
                                      _c("label", [_vm._v("Subject")]),
                                      _vm._v(" "),
                                      _c("v-select", {
                                        attrs: {
                                          options: _vm.subjects,
                                          label: "value",
                                          reduce: function(a) {
                                            return a.id
                                          },
                                          placeholder: "Select Subject"
                                        },
                                        model: {
                                          value: _vm.searchData.subjects_id,
                                          callback: function($$v) {
                                            _vm.$set(
                                              _vm.searchData,
                                              "subjects_id",
                                              $$v
                                            )
                                          },
                                          expression: "searchData.subjects_id"
                                        }
                                      })
                                    ],
                                    1
                                  )
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-8" }, [
                                  _c("div", { staticClass: "form-group" }, [
                                    _c("label", [_vm._v("Join Date")]),
                                    _vm._v(" "),
                                    _c(
                                      "div",
                                      {
                                        staticClass:
                                          "d-flex justify-content-between"
                                      },
                                      [
                                        _c("datepicker", {
                                          staticClass: "flex-1",
                                          attrs: { format: "yyyy-MM-dd" },
                                          on: {
                                            input: function($event) {
                                              _vm.searchData.publish_date_start = _vm.$root.formatPicker(
                                                $event
                                              )
                                            }
                                          },
                                          model: {
                                            value:
                                              _vm.searchData.publish_date_start,
                                            callback: function($$v) {
                                              _vm.$set(
                                                _vm.searchData,
                                                "publish_date_start",
                                                $$v
                                              )
                                            },
                                            expression:
                                              "searchData.publish_date_start"
                                          }
                                        }),
                                        _vm._v(" "),
                                        _c("label", [_vm._v("To")]),
                                        _vm._v(" "),
                                        _c("datepicker", {
                                          staticClass: "flex-1",
                                          attrs: { format: "yyyy-MM-dd" },
                                          on: {
                                            input: function($event) {
                                              _vm.searchData.publish_date_end = _vm.$root.formatPicker(
                                                $event
                                              )
                                            }
                                          },
                                          model: {
                                            value:
                                              _vm.searchData.publish_date_end,
                                            callback: function($$v) {
                                              _vm.$set(
                                                _vm.searchData,
                                                "publish_date_end",
                                                $$v
                                              )
                                            },
                                            expression:
                                              "searchData.publish_date_end"
                                          }
                                        })
                                      ],
                                      1
                                    )
                                  ])
                                ])
                              ])
                            ]),
                            _vm._v(" "),
                            _c(
                              "div",
                              { staticClass: "col-md-12 mb-2 pl-0" },
                              [
                                _c(
                                  "vs-button",
                                  {
                                    attrs: {
                                      type: "filled",
                                      color: "#00b8cf",
                                      icon: "double_arrow"
                                    },
                                    on: {
                                      click: function($event) {
                                        $event.preventDefault()
                                        return _vm.doFilter($event)
                                      }
                                    }
                                  },
                                  [
                                    _vm._v(
                                      "\n                                            Filter\n                                        "
                                    )
                                  ]
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
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col-md-12" },
                  [
                    _c("ow-data-table", {
                      attrs: {
                        headers: _vm.tableHeader,
                        tableHeader: "Assignment List",
                        suggestText:
                          "Assignment Record list on table. Filter Assignment using the filter.\n",
                        url: "/json/student/",
                        noDataMessage:
                          "No Assignment data found. Please Filter Assignment to show.",
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
                              _c(
                                "vs-td",
                                {
                                  attrs: { data: props.data.semester.semester }
                                },
                                [
                                  _vm._v(
                                    "\n                                    " +
                                      _vm._s(props.data.semester.semester) +
                                      "\n                                "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-td", [
                                _vm._v(
                                  "\n                                    " +
                                    _vm._s(props.data.subject_data.title) +
                                    "\n                                "
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "vs-td",
                                { attrs: { data: props.data.title } },
                                [
                                  _vm._v(
                                    "\n                                    " +
                                      _vm._s(props.data.title) +
                                      "\n                                "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-td", [
                                _vm._v(
                                  "\n                                    " +
                                    _vm._s(
                                      _vm.$root.parseDate(
                                        props.data.publish_date
                                      ) + " to "
                                    ) +
                                    _vm._s(
                                      _vm.$root.parseDate(props.data.end_date)
                                    ) +
                                    "\n                                "
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "vs-td",
                                [
                                  _c(
                                    "vs-button",
                                    { staticClass: "smBtn pointer-all" },
                                    [_vm._v("Submit")]
                                  )
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c("vs-td", [
                                _c(
                                  "div",
                                  { staticClass: "d-flex flex-wrap" },
                                  [
                                    _vm._v(
                                      "\n                                        " +
                                        _vm._s(props.data.academic_status) +
                                        "\n                                        "
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
                              ])
                            ]
                          }
                        },
                        {
                          key: "printSection",
                          fn: function(printData) {
                            return undefined
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

/***/ "./resources/js/src/views/custom/more/assignment/index.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/more/assignment/index.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _index_vue_vue_type_template_id_c44f3b14___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=c44f3b14& */ "./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _index_vue_vue_type_template_id_c44f3b14___WEBPACK_IMPORTED_MODULE_0__["render"],
  _index_vue_vue_type_template_id_c44f3b14___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/more/assignment/index.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&":
/*!************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14& ***!
  \************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_c44f3b14___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=template&id=c44f3b14& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/more/assignment/index.vue?vue&type=template&id=c44f3b14&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_c44f3b14___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_c44f3b14___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[124],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/registration.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/registration.vue?vue&type=script&lang=js& ***!
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      student: {},
      faculties: [],
      semester: [],
      batch: [],
      academic_status: [],
      copyPerm: false,
      notification: '',
      whoGuardian: '',
      guardian: null,
      guardians: [],
      academicList: []
    };
  },
  methods: {
    copyPermanent: function copyPermanent() {
      if (this.copyPerm) {
        this.student.temp_address = this.student.address, this.student.temp_state = this.student.state, this.student.temp_country = this.student.country;
      } else {
        this.student.temp_address = '', this.student.temp_state = '', this.student.temp_country = '';
      }
    },
    assignGuardian: function assignGuardian() {
      if (this.whoGuardian == 'father') {
        this.student.guardian_first_name = this.student.father_first_name;
        this.student.guardian_middle_name = this.student.father_middle_name;
        this.student.guardian_last_name = this.student.father_last_name;
        this.student.guardian_eligibility = this.student.father_eligibility;
        this.student.guardian_occupation = this.student.father_occupation;
        this.student.guardian_office = this.student.father_office;
        this.student.guardian_office_number = this.student.father_office_number;
        this.student.guardian_residence_number = this.student.father_residence_number;
        this.student.guardian_mobile_1 = this.student.father_mobile_1;
        this.student.guardian_mobile_2 = this.student.father_mobile_2;
        this.student.guardian_email = this.student.father_email;
        this.student.guardian_relation = 'Father';
      } else if (this.whoGuardian == 'mother') {
        this.student.guardian_first_name = this.student.mother_first_name;
        this.student.guardian_middle_name = this.student.mother_middle_name;
        this.student.guardian_last_name = this.student.mother_last_name;
        this.student.guardian_eligibility = this.student.mother_eligibility;
        this.student.guardian_occupation = this.student.mother_occupation;
        this.student.guardian_office = this.student.mother_office;
        this.student.guardian_office_number = this.student.mother_office_number;
        this.student.guardian_residence_number = this.student.mother_residence_number;
        this.student.guardian_mobile_1 = this.student.mother_mobile_1;
        this.student.guardian_mobile_2 = this.student.mother_mobile_2;
        this.student.guardian_email = this.student.mother_email;
        this.student.guardian_relation = 'MOTHER';
      } else {
        this.student.guardian_first_name = '';
        this.student.guardian_middle_name = '';
        this.student.guardian_last_name = '';
        this.student.guardian_eligibility = '';
        this.student.guardian_occupation = '';
        this.student.guardian_office = '';
        this.student.guardian_office_number = '';
        this.student.guardian_residence_number = '';
        this.student.guardian_mobile_1 = '';
        this.student.guardian_mobile_2 = '';
        this.student.guardian_email = '';
        this.student.guardian_relation = '';
      }
    },
    addRow: function addRow() {
      this.academicList.push({
        institution: '',
        board: '',
        pass_year: '',
        symbol_no: '',
        percentage: '',
        division_grade: '',
        major_subject: '',
        remarks: ''
      });
    },
    removeList: function removeList(idx) {
      this.academicList.splice(idx, 1);
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/registration.vue?vue&type=template&id=39a4115e&scoped=true&":
/*!*****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/student/registration.vue?vue&type=template&id=39a4115e&scoped=true& ***!
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
        { staticClass: "col-md-12 p-0" },
        [
          _c("vs-card", { staticClass: "p-3" }, [
            _c("div", { staticClass: "row p-2" }, [
              _c(
                "h4",
                { staticClass: "card-title" },
                [
                  _vm._v("Registration\n                        "),
                  _c(
                    "router-link",
                    {
                      staticClass: "btn-primary btn-sm ml-2 text-white",
                      attrs: { to: "/student/import" }
                    },
                    [
                      _c("i", {
                        staticClass: "fa fa-upload",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(
                        "\n                            Bulk Student Registration\n                        "
                      )
                    ]
                  )
                ],
                1
              ),
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
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            REG.NO.\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.reg_no,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "reg_no", $$v)
                                        },
                                        expression: "student.reg_no"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Date of Admission\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("datepicker", {
                                      model: {
                                        value: _vm.student.reg_date,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "reg_date", $$v)
                                        },
                                        expression: "student.reg_date"
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
                                    "\n                                            UNIVERSITY REG.NO.\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.university_reg,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "university_reg",
                                            $$v
                                          )
                                        },
                                        expression: "student.university_reg"
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
                                    "\n                                            Faculty/Class\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-5" },
                                  [
                                    _c("v-select", {
                                      attrs: { options: _vm.faculties },
                                      model: {
                                        value: _vm.student.faculty,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "faculty", $$v)
                                        },
                                        expression: "student.faculty"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Sem./Sec.\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("v-select", {
                                      attrs: { options: _vm.semester },
                                      model: {
                                        value: _vm.student.semester,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "semester", $$v)
                                        },
                                        expression: "student.semester"
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
                                    "\n                                            Batch\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-5" },
                                  [
                                    _c("v-select", {
                                      attrs: { options: _vm.batch },
                                      model: {
                                        value: _vm.student.batch,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "batch", $$v)
                                        },
                                        expression: "student.batch"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Status\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("v-select", {
                                      attrs: { options: _vm.academic_status },
                                      model: {
                                        value: _vm.student.academic_status,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "academic_status",
                                            $$v
                                          )
                                        },
                                        expression: "student.academic_status"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-3" }, [
                                  _vm._v(
                                    "\n                                            NAME OF STUDENT\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.first_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "first_name",
                                            $$v
                                          )
                                        },
                                        expression: "student.first_name"
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
                                        value: _vm.student.middle_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "middle_name",
                                            $$v
                                          )
                                        },
                                        expression: "student.middle_name"
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
                                        value: _vm.student.last_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "last_name",
                                            $$v
                                          )
                                        },
                                        expression: "student.last_name"
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
                                    "\n                                            Date Of Birth\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-2" },
                                  [
                                    _c("vs-input", {
                                      directives: [
                                        {
                                          name: "mask",
                                          rawName: "v-mask",
                                          value: "####-##-##",
                                          expression: "'####-##-##'"
                                        }
                                      ],
                                      model: {
                                        value: _vm.student.date_of_birth,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "date_of_birth",
                                            $$v
                                          )
                                        },
                                        expression: "student.date_of_birth"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Gender\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-2" },
                                  [
                                    _c("v-select", {
                                      attrs: {
                                        options: ["MALE", "FEMALE", "OTHER"]
                                      },
                                      model: {
                                        value: _vm.student.gender,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "gender", $$v)
                                        },
                                        expression: "student.gender"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Blood Group\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-2" },
                                  [
                                    _c("v-select", {
                                      attrs: {
                                        options: [
                                          "A+",
                                          "A-",
                                          "B+",
                                          "B-",
                                          "AB+",
                                          "AB-",
                                          "O+",
                                          "O-"
                                        ]
                                      },
                                      model: {
                                        value: _vm.student.blood_group,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "blood_group",
                                            $$v
                                          )
                                        },
                                        expression: "student.blood_group"
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
                                    "\n                                            Religion\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.religion,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "religion", $$v)
                                        },
                                        expression: "student.religion"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Caste\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-5" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.caste,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "caste", $$v)
                                        },
                                        expression: "student.caste"
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
                                    "\n                                            Nationality\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-2" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.nationality,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "nationality",
                                            $$v
                                          )
                                        },
                                        expression: "student.nationality"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Mother Tongue\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-2" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mother_tongue,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_tongue",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_tongue"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            E-mail\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-2" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.email,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "email", $$v)
                                        },
                                        expression: "student.email"
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
                                    "\n                                            Extra Info\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-10" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.extra_info,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "extra_info",
                                            $$v
                                          )
                                        },
                                        expression: "student.extra_info"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                {
                                  staticClass:
                                    "badge badge badge-primary badge-pill  mt-2"
                                },
                                [
                                  _vm._v(
                                    "Contact\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-divider"),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-1" }, [
                                  _vm._v(
                                    "\n                                            Phone\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.home_phone,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "home_phone",
                                            $$v
                                          )
                                        },
                                        expression: "student.home_phone"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-1" }, [
                                  _vm._v(
                                    "\n                                            Mobile1\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mobile_1,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "mobile_1", $$v)
                                        },
                                        expression: "student.mobile_1"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-1" }, [
                                  _vm._v(
                                    "\n                                            Mobile2\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mobile_2,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "mobile_2", $$v)
                                        },
                                        expression: "student.mobile_2"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                {
                                  staticClass:
                                    "badge badge badge-primary badge-pill  mt-2"
                                },
                                [
                                  _vm._v(
                                    "Permanent Address\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-divider"),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-1" }, [
                                  _vm._v(
                                    "\n                                            Address\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.address,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "address", $$v)
                                        },
                                        expression: "student.address"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-1" }, [
                                  _vm._v(
                                    "\n                                            State\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.state,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "state", $$v)
                                        },
                                        expression: "student.state"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-1" }, [
                                  _vm._v(
                                    "\n                                            Country\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.country,
                                        callback: function($$v) {
                                          _vm.$set(_vm.student, "country", $$v)
                                        },
                                        expression: "student.country"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                {
                                  staticClass:
                                    "badge badge badge-primary badge-pill  mt-2"
                                },
                                [
                                  _vm._v(
                                    "Temporary Address\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-checkbox",
                                {
                                  staticClass: "mt-2",
                                  on: {
                                    change: function($event) {
                                      return _vm.copyPermanent()
                                    }
                                  },
                                  model: {
                                    value: _vm.copyPerm,
                                    callback: function($$v) {
                                      _vm.copyPerm = $$v
                                    },
                                    expression: "copyPerm"
                                  }
                                },
                                [
                                  _vm._v(
                                    "\n                                        Temporary Address Same As Permanent Address\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-divider"),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-1" }, [
                                  _vm._v(
                                    "\n                                            Address\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.temp_address,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "temp_address",
                                            $$v
                                          )
                                        },
                                        expression: "student.temp_address"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-1" }, [
                                  _vm._v(
                                    "\n                                            State\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.temp_state,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "temp_state",
                                            $$v
                                          )
                                        },
                                        expression: "student.temp_state"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-1" }, [
                                  _vm._v(
                                    "\n                                            Country\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.temp_country,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "temp_country",
                                            $$v
                                          )
                                        },
                                        expression: "student.temp_country"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c("h4", { staticClass: "mt-2" }, [
                                _vm._v("Parent Details")
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                {
                                  staticClass:
                                    "badge badge badge-primary badge-pill  mt-2"
                                },
                                [
                                  _vm._v(
                                    "Grand Father's Detail\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-divider"),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-3" }, [
                                  _vm._v(
                                    "\n                                            NAME OF GRAND FATHER\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value:
                                          _vm.student.grandfather_first_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "grandfather_first_name",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "student.grandfather_first_name"
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
                                        value:
                                          _vm.student.grandfather_middle_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "grandfather_middle_name",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "student.grandfather_middle_name"
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
                                        value:
                                          _vm.student.grandfather_last_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "grandfather_last_name",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "student.grandfather_last_name"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                {
                                  staticClass:
                                    "badge badge badge-primary badge-pill  mr-2"
                                },
                                [
                                  _vm._v(
                                    "Father's Detail\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-divider", { staticClass: "mx-3" }),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-3" }, [
                                  _vm._v(
                                    "\n                                            NAME OF FATHER\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.father_first_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_first_name",
                                            $$v
                                          )
                                        },
                                        expression: "student.father_first_name"
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
                                        value: _vm.student.father_middle_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_middle_name",
                                            $$v
                                          )
                                        },
                                        expression: "student.father_middle_name"
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
                                        value: _vm.student.father_last_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_last_name",
                                            $$v
                                          )
                                        },
                                        expression: "student.father_last_name"
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
                                    "\n                                            Eligibility\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.father_eligibility,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_eligibility",
                                            $$v
                                          )
                                        },
                                        expression: "student.father_eligibility"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Occupation\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.father_occupation,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_occupation",
                                            $$v
                                          )
                                        },
                                        expression: "student.father_occupation"
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
                                    "\n                                            Office\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.father_office,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_office",
                                            $$v
                                          )
                                        },
                                        expression: "student.father_office"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Office Number\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.father_office_number,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_office_number",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "student.father_office_number"
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
                                    "\n                                            Residence Number\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value:
                                          _vm.student.father_residence_number,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_residence_number",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "student.father_residence_number"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Mobile 1\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.father_mobile_1,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_mobile_1",
                                            $$v
                                          )
                                        },
                                        expression: "student.father_mobile_1"
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
                                    "\n                                            Mobile 2\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.father_mobile_2,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_mobile_2",
                                            $$v
                                          )
                                        },
                                        expression: "student.father_mobile_2"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            E-mail\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.father_email,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "father_email",
                                            $$v
                                          )
                                        },
                                        expression: "student.father_email"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                {
                                  staticClass:
                                    "badge badge badge-primary badge-pill  mt-2"
                                },
                                [
                                  _vm._v(
                                    "Mother's Detail\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-divider"),
                              _vm._v(" "),
                              _c("div", { staticClass: "row my-2" }, [
                                _c("div", { staticClass: "col-md-3" }, [
                                  _vm._v(
                                    "\n                                            NAME OF MOTHER\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-3" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mother_first_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_first_name",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_first_name"
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
                                        value: _vm.student.mother_middle_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_middle_name",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_middle_name"
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
                                        value: _vm.student.mother_last_name,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_last_name",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_last_name"
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
                                    "\n                                            Eligibility\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mother_eligibility,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_eligibility",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_eligibility"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Occupation\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mother_occupation,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_occupation",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_occupation"
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
                                    "\n                                            Office\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mother_office,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_office",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_office"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Office Number\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mother_office_number,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_office_number",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "student.mother_office_number"
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
                                    "\n                                            Residence Number\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value:
                                          _vm.student.mother_residence_number,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_residence_number",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "student.mother_residence_number"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            Mobile 1\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mother_mobile_1,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_mobile_1",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_mobile_1"
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
                                    "\n                                            Mobile 2\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mother_mobile_2,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_mobile_2",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_mobile_2"
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-2" }, [
                                  _vm._v(
                                    "\n                                            E-mail\n                                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "col-md-4" },
                                  [
                                    _c("vs-input", {
                                      model: {
                                        value: _vm.student.mother_email,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.student,
                                            "mother_email",
                                            $$v
                                          )
                                        },
                                        expression: "student.mother_email"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                {
                                  staticClass:
                                    "badge badge badge-primary badge-pill  my-2"
                                },
                                [
                                  _vm._v(
                                    "Guardian's Detail\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("br"),
                              _vm._v(" "),
                              _c(
                                "vs-radio",
                                {
                                  attrs: { "vs-value": "father" },
                                  on: { input: _vm.assignGuardian },
                                  model: {
                                    value: _vm.whoGuardian,
                                    callback: function($$v) {
                                      _vm.whoGuardian = $$v
                                    },
                                    expression: "whoGuardian"
                                  }
                                },
                                [
                                  _vm._v(
                                    "Father is Guardian\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-radio",
                                {
                                  attrs: { "vs-value": "mother" },
                                  on: { input: _vm.assignGuardian },
                                  model: {
                                    value: _vm.whoGuardian,
                                    callback: function($$v) {
                                      _vm.whoGuardian = $$v
                                    },
                                    expression: "whoGuardian"
                                  }
                                },
                                [
                                  _vm._v(
                                    "Mother is Guardian\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-radio",
                                {
                                  attrs: { "vs-value": "other" },
                                  on: { input: _vm.assignGuardian },
                                  model: {
                                    value: _vm.whoGuardian,
                                    callback: function($$v) {
                                      _vm.whoGuardian = $$v
                                    },
                                    expression: "whoGuardian"
                                  }
                                },
                                [
                                  _vm._v(
                                    "Other's\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-radio",
                                {
                                  attrs: { "vs-value": "link" },
                                  on: { input: _vm.assignGuardian },
                                  model: {
                                    value: _vm.whoGuardian,
                                    callback: function($$v) {
                                      _vm.whoGuardian = $$v
                                    },
                                    expression: "whoGuardian"
                                  }
                                },
                                [
                                  _vm._v(
                                    "Link Guardian\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-divider"),
                              _vm._v(" "),
                              _vm.whoGuardian != "link"
                                ? _c("div", [
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
                                              value:
                                                _vm.student.guardian_first_name,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_first_name",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_first_name"
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
                                              value:
                                                _vm.student
                                                  .guardian_middle_name,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_middle_name",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_middle_name"
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
                                              value:
                                                _vm.student.guardian_last_name,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_last_name",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_last_name"
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
                                              value:
                                                _vm.student
                                                  .guardian_eligibility,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_eligibility",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_eligibility"
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
                                              value:
                                                _vm.student.guardian_occupation,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_occupation",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_occupation"
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
                                              value:
                                                _vm.student.guardian_office,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_office",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_office"
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
                                              value:
                                                _vm.student
                                                  .guardian_office_number,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_office_number",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_office_number"
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
                                              value:
                                                _vm.student
                                                  .guardian_residence_number,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_residence_number",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_residence_number"
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
                                              value:
                                                _vm.student.guardian_mobile_1,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_mobile_1",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_mobile_1"
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
                                              value:
                                                _vm.student.guardian_mobile_2,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_mobile_2",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_mobile_2"
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
                                              value: _vm.student.guardian_email,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_email",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_email"
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
                                              value:
                                                _vm.student.guardian_relation,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_relation",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_relation"
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
                                              value:
                                                _vm.student.guardian_address,
                                              callback: function($$v) {
                                                _vm.$set(
                                                  _vm.student,
                                                  "guardian_address",
                                                  $$v
                                                )
                                              },
                                              expression:
                                                "student.guardian_address"
                                            }
                                          })
                                        ],
                                        1
                                      )
                                    ])
                                  ])
                                : _c("div", { staticClass: "row" }, [
                                    _c(
                                      "div",
                                      { staticClass: "col-md-6" },
                                      [
                                        _vm._v(
                                          "\n                                            Find Guardian Using Name | Mobile Number | Email & Click on Link Now\n                                            "
                                        ),
                                        _c("v-select", {
                                          attrs: {
                                            options: _vm.guardians,
                                            placeholder: "Select Guardian"
                                          },
                                          model: {
                                            value: _vm.guardian,
                                            callback: function($$v) {
                                              _vm.guardian = $$v
                                            },
                                            expression: "guardian"
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
                      _c("vs-tab", { attrs: { label: "Academic Info" } }, [
                        _c("div", [
                          _c("h4", [
                            _c("i", {
                              staticClass: "fa fa-university",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v(
                              "\n                                        Academic Info\n                                    "
                            )
                          ]),
                          _vm._v(" "),
                          _c(
                            "div",
                            [
                              _c(
                                "vs-table",
                                {
                                  attrs: { stripe: "", data: _vm.academicList },
                                  scopedSlots: _vm._u([
                                    {
                                      key: "default",
                                      fn: function(ref) {
                                        var data = ref.data
                                        return _vm._l(data, function(tr, i) {
                                          return _c(
                                            "vs-tr",
                                            { key: i },
                                            [
                                              _c(
                                                "vs-td",
                                                { staticClass: "w-12" },
                                                [
                                                  _c("vs-button", [
                                                    _vm._v("sort")
                                                  ])
                                                ],
                                                1
                                              ),
                                              _vm._v(" "),
                                              _c("vs-td", [
                                                _c(
                                                  "div",
                                                  { staticClass: "striped-td" },
                                                  [
                                                    _c(
                                                      "div",
                                                      { staticClass: "row" },
                                                      [
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-4"
                                                          },
                                                          [
                                                            _vm._v(
                                                              "Institution"
                                                            )
                                                          ]
                                                        ),
                                                        _vm._v(" "),
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-8"
                                                          },
                                                          [
                                                            _c("vs-input", {
                                                              model: {
                                                                value:
                                                                  tr.institution,
                                                                callback: function(
                                                                  $$v
                                                                ) {
                                                                  _vm.$set(
                                                                    tr,
                                                                    "institution",
                                                                    $$v
                                                                  )
                                                                },
                                                                expression:
                                                                  "tr.institution"
                                                              }
                                                            })
                                                          ],
                                                          1
                                                        )
                                                      ]
                                                    ),
                                                    _vm._v(" "),
                                                    _c(
                                                      "div",
                                                      { staticClass: "row" },
                                                      [
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-4"
                                                          },
                                                          [
                                                            _vm._v(
                                                              "Board/Training"
                                                            )
                                                          ]
                                                        ),
                                                        _vm._v(" "),
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-8"
                                                          },
                                                          [
                                                            _c("vs-input", {
                                                              model: {
                                                                value: tr.board,
                                                                callback: function(
                                                                  $$v
                                                                ) {
                                                                  _vm.$set(
                                                                    tr,
                                                                    "board",
                                                                    $$v
                                                                  )
                                                                },
                                                                expression:
                                                                  "tr.board"
                                                              }
                                                            })
                                                          ],
                                                          1
                                                        )
                                                      ]
                                                    ),
                                                    _vm._v(" "),
                                                    _c(
                                                      "div",
                                                      { staticClass: "row" },
                                                      [
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-4"
                                                          },
                                                          [_vm._v("Pass Year")]
                                                        ),
                                                        _vm._v(" "),
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-8"
                                                          },
                                                          [
                                                            _c("vs-input", {
                                                              model: {
                                                                value:
                                                                  tr.pass_year,
                                                                callback: function(
                                                                  $$v
                                                                ) {
                                                                  _vm.$set(
                                                                    tr,
                                                                    "pass_year",
                                                                    $$v
                                                                  )
                                                                },
                                                                expression:
                                                                  "tr.pass_year"
                                                              }
                                                            })
                                                          ],
                                                          1
                                                        )
                                                      ]
                                                    ),
                                                    _vm._v(" "),
                                                    _c(
                                                      "div",
                                                      { staticClass: "row" },
                                                      [
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-4"
                                                          },
                                                          [
                                                            _vm._v(
                                                              "Symbol Number"
                                                            )
                                                          ]
                                                        ),
                                                        _vm._v(" "),
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-8"
                                                          },
                                                          [
                                                            _c("vs-input", {
                                                              model: {
                                                                value:
                                                                  tr.symbol_no,
                                                                callback: function(
                                                                  $$v
                                                                ) {
                                                                  _vm.$set(
                                                                    tr,
                                                                    "symbol_no",
                                                                    $$v
                                                                  )
                                                                },
                                                                expression:
                                                                  "tr.symbol_no"
                                                              }
                                                            })
                                                          ],
                                                          1
                                                        )
                                                      ]
                                                    ),
                                                    _vm._v(" "),
                                                    _c(
                                                      "div",
                                                      { staticClass: "row" },
                                                      [
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-4"
                                                          },
                                                          [_vm._v("Percentage")]
                                                        ),
                                                        _vm._v(" "),
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-8"
                                                          },
                                                          [
                                                            _c("vs-input", {
                                                              model: {
                                                                value:
                                                                  tr.percentage,
                                                                callback: function(
                                                                  $$v
                                                                ) {
                                                                  _vm.$set(
                                                                    tr,
                                                                    "percentage",
                                                                    $$v
                                                                  )
                                                                },
                                                                expression:
                                                                  "tr.percentage"
                                                              }
                                                            })
                                                          ],
                                                          1
                                                        )
                                                      ]
                                                    ),
                                                    _vm._v(" "),
                                                    _c(
                                                      "div",
                                                      { staticClass: "row" },
                                                      [
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-4"
                                                          },
                                                          [
                                                            _vm._v(
                                                              "Division/Grade"
                                                            )
                                                          ]
                                                        ),
                                                        _vm._v(" "),
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-8"
                                                          },
                                                          [
                                                            _c("vs-input", {
                                                              model: {
                                                                value:
                                                                  tr.division_grade,
                                                                callback: function(
                                                                  $$v
                                                                ) {
                                                                  _vm.$set(
                                                                    tr,
                                                                    "division_grade",
                                                                    $$v
                                                                  )
                                                                },
                                                                expression:
                                                                  "tr.division_grade"
                                                              }
                                                            })
                                                          ],
                                                          1
                                                        )
                                                      ]
                                                    ),
                                                    _vm._v(" "),
                                                    _c(
                                                      "div",
                                                      { staticClass: "row" },
                                                      [
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-4"
                                                          },
                                                          [
                                                            _vm._v(
                                                              "Major Subject"
                                                            )
                                                          ]
                                                        ),
                                                        _vm._v(" "),
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-8"
                                                          },
                                                          [
                                                            _c("vs-input", {
                                                              model: {
                                                                value:
                                                                  tr.major_subject,
                                                                callback: function(
                                                                  $$v
                                                                ) {
                                                                  _vm.$set(
                                                                    tr,
                                                                    "major_subject",
                                                                    $$v
                                                                  )
                                                                },
                                                                expression:
                                                                  "tr.major_subject"
                                                              }
                                                            })
                                                          ],
                                                          1
                                                        )
                                                      ]
                                                    ),
                                                    _vm._v(" "),
                                                    _c(
                                                      "div",
                                                      { staticClass: "row" },
                                                      [
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-4"
                                                          },
                                                          [_vm._v("Remark")]
                                                        ),
                                                        _vm._v(" "),
                                                        _c(
                                                          "div",
                                                          {
                                                            staticClass:
                                                              "col-md-8"
                                                          },
                                                          [
                                                            _c("vs-input", {
                                                              model: {
                                                                value:
                                                                  tr.remarks,
                                                                callback: function(
                                                                  $$v
                                                                ) {
                                                                  _vm.$set(
                                                                    tr,
                                                                    "remarks",
                                                                    $$v
                                                                  )
                                                                },
                                                                expression:
                                                                  "tr.remarks"
                                                              }
                                                            })
                                                          ],
                                                          1
                                                        )
                                                      ]
                                                    )
                                                  ]
                                                )
                                              ]),
                                              _vm._v(" "),
                                              _c(
                                                "vs-td",
                                                { staticClass: "w-12" },
                                                [
                                                  _c(
                                                    "vs-button",
                                                    {
                                                      staticClass: "rounded",
                                                      attrs: {
                                                        color: "danger"
                                                      },
                                                      on: {
                                                        click: function(
                                                          $event
                                                        ) {
                                                          return _vm.removeList(
                                                            i
                                                          )
                                                        }
                                                      }
                                                    },
                                                    [
                                                      _c("i", {
                                                        staticClass:
                                                          "fa fa-trash"
                                                      })
                                                    ]
                                                  )
                                                ],
                                                1
                                              )
                                            ],
                                            1
                                          )
                                        })
                                      }
                                    }
                                  ])
                                },
                                [
                                  _c(
                                    "template",
                                    { slot: "thead" },
                                    [
                                      _c("vs-th", { staticClass: "w-12" }, [
                                        _vm._v(
                                          "\n                                                    Sort\n                                                "
                                        )
                                      ]),
                                      _vm._v(" "),
                                      _c("vs-th", [
                                        _vm._v(
                                          "\n                                                    Detail\n                                                "
                                        )
                                      ]),
                                      _vm._v(" "),
                                      _c(
                                        "vs-th",
                                        { staticClass: "w-12" },
                                        [
                                          _c(
                                            "vs-button",
                                            {
                                              staticClass: "my-round",
                                              on: { click: _vm.addRow }
                                            },
                                            [
                                              _vm._v(
                                                "\n                                                        New\n                                                    "
                                              )
                                            ]
                                          )
                                        ],
                                        1
                                      )
                                    ],
                                    1
                                  )
                                ],
                                2
                              )
                            ],
                            1
                          )
                        ])
                      ]),
                      _vm._v(" "),
                      _c(
                        "vs-tab",
                        { attrs: { label: "Profile Images" } },
                        [
                          _c("h4", [_vm._v("Profile Pictures")]),
                          _vm._v(" "),
                          _c("div", { staticClass: "row" }, [
                            _c("div", { staticClass: "col-md-3" }, [
                              _vm._v("Student Profile Picture")
                            ]),
                            _vm._v(" "),
                            _c(
                              "div",
                              { staticClass: "col-md-5" },
                              [
                                _c("vs-input", {
                                  attrs: { type: "file" },
                                  model: {
                                    value: _vm.student.profile_picture,
                                    callback: function($$v) {
                                      _vm.$set(
                                        _vm.student,
                                        "profile_picture",
                                        $$v
                                      )
                                    },
                                    expression: "student.profile_picture"
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
                                _vm.student.profile_picture
                                  ? _c("img", {
                                      staticClass: "img-responsive",
                                      attrs: {
                                        width: "100px",
                                        src: _vm.student.profile_picture
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
                          ]),
                          _vm._v(" "),
                          _c("vs-divider"),
                          _vm._v(" "),
                          _c("div", { staticClass: "row" }, [
                            _c("div", { staticClass: "col-md-3" }, [
                              _vm._v("Student Signature")
                            ]),
                            _vm._v(" "),
                            _c(
                              "div",
                              { staticClass: "col-md-5" },
                              [
                                _c("vs-input", {
                                  attrs: { type: "file" },
                                  model: {
                                    value: _vm.student.signature,
                                    callback: function($$v) {
                                      _vm.$set(_vm.student, "signature", $$v)
                                    },
                                    expression: "student.signature"
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
                                _vm.student.signature
                                  ? _c("img", {
                                      staticClass: "img-responsive",
                                      attrs: {
                                        width: "100px",
                                        src: _vm.student.signature
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
                          ]),
                          _vm._v(" "),
                          _c("vs-divider"),
                          _vm._v(" "),
                          _c("div", { staticClass: "row" }, [
                            _c("div", { staticClass: "col-md-3" }, [
                              _vm._v("Father Picture")
                            ]),
                            _vm._v(" "),
                            _c(
                              "div",
                              { staticClass: "col-md-5" },
                              [
                                _c("vs-input", {
                                  attrs: { type: "file" },
                                  model: {
                                    value: _vm.student.father_picture,
                                    callback: function($$v) {
                                      _vm.$set(
                                        _vm.student,
                                        "father_picture",
                                        $$v
                                      )
                                    },
                                    expression: "student.father_picture"
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
                                _vm.student.father_picture
                                  ? _c("img", {
                                      staticClass: "img-responsive",
                                      attrs: {
                                        width: "100px",
                                        src: _vm.student.father_picture
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
                          ]),
                          _vm._v(" "),
                          _c("vs-divider"),
                          _vm._v(" "),
                          _c("div", { staticClass: "row" }, [
                            _c("div", { staticClass: "col-md-3" }, [
                              _vm._v("Mother Picture")
                            ]),
                            _vm._v(" "),
                            _c(
                              "div",
                              { staticClass: "col-md-5" },
                              [
                                _c("vs-input", {
                                  attrs: { type: "file" },
                                  model: {
                                    value: _vm.student.mother_picture,
                                    callback: function($$v) {
                                      _vm.$set(
                                        _vm.student,
                                        "mother_picture",
                                        $$v
                                      )
                                    },
                                    expression: "student.mother_picture"
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
                                _vm.student.mother_picture
                                  ? _c("img", {
                                      staticClass: "img-responsive",
                                      attrs: {
                                        width: "100px",
                                        src: _vm.student.mother_picture
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
                          ]),
                          _vm._v(" "),
                          _c("vs-divider"),
                          _vm._v(" "),
                          _c("div", { staticClass: "row" }, [
                            _c("div", { staticClass: "col-md-3" }, [
                              _vm._v("Guardian Picture")
                            ]),
                            _vm._v(" "),
                            _c(
                              "div",
                              { staticClass: "col-md-5" },
                              [
                                _c("vs-input", {
                                  attrs: { type: "file" },
                                  model: {
                                    value: _vm.student.guardian_picture,
                                    callback: function($$v) {
                                      _vm.$set(
                                        _vm.student,
                                        "guardian_picture",
                                        $$v
                                      )
                                    },
                                    expression: "student.guardian_picture"
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
                                _vm.student.guardian_picture
                                  ? _c("img", {
                                      staticClass: "img-responsive",
                                      attrs: {
                                        width: "100px",
                                        src: _vm.student.guardian_picture
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
      _c("h2", { staticClass: "pageTitle" }, [_vm._v("Student Manager")])
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

/***/ "./resources/js/src/views/custom/student/registration.vue":
/*!****************************************************************!*\
  !*** ./resources/js/src/views/custom/student/registration.vue ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _registration_vue_vue_type_template_id_39a4115e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./registration.vue?vue&type=template&id=39a4115e&scoped=true& */ "./resources/js/src/views/custom/student/registration.vue?vue&type=template&id=39a4115e&scoped=true&");
/* harmony import */ var _registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./registration.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/student/registration.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _registration_vue_vue_type_template_id_39a4115e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _registration_vue_vue_type_template_id_39a4115e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "39a4115e",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/student/registration.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/student/registration.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/registration.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./registration.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/registration.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/student/registration.vue?vue&type=template&id=39a4115e&scoped=true&":
/*!***********************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/student/registration.vue?vue&type=template&id=39a4115e&scoped=true& ***!
  \***********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_template_id_39a4115e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./registration.vue?vue&type=template&id=39a4115e&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/student/registration.vue?vue&type=template&id=39a4115e&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_template_id_39a4115e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_registration_vue_vue_type_template_id_39a4115e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
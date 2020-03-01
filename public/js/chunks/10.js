(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[10],{

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
/* harmony default export */ __webpack_exports__["default"] = ({
  props: {
    url: {
      type: String,
      default: function _default() {
        return '';
      }
    },
    headers: {
      type: Array,
      default: function _default() {
        return [];
      }
    },
    noDataMessage: {
      type: String,
      default: function _default() {
        return 'No Data Found';
      }
    },
    hasSearch: {
      type: Boolean,
      default: function _default() {
        return true;
      }
    },
    hasPagination: {
      type: Boolean,
      default: function _default() {
        return false;
      }
    },
    hasMultiple: {
      type: Boolean,
      default: function _default() {
        return false;
      }
    }
  },
  data: function data() {
    return {
      selected: [],
      totalItems: 10,
      data: [{
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
      items: [{
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
      }]
    };
  },
  methods: {
    getData: function getData() {
      this.items = this.data;
    },
    handleSearch: function handleSearch(searching) {
      console.log(searching);
    },
    handleChangePage: function handleChangePage(page) {
      console.log(page);
    },
    handleSort: function handleSort(key, active) {
      console.log(key, active);
    }
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
/* harmony import */ var _component_table_student_table__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../component/table/student-table */ "./resources/js/src/views/custom/component/table/student-table.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    StudentTable: _component_table_student_table__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      searchData: {
        academic_status: null,
        status: null
      },
      url: '/json/student/',
      tableHeader: [{
        name: 'Email',
        field: 'email',
        sort_key: 'email'
      }, {
        name: 'Name',
        field: 'name',
        sort_key: 'name'
      }, {
        name: 'Mobile',
        field: 'mobile'
      }, {
        name: 'PID'
      }],
      academic_status: ['Back Continue', 'Continue', 'Drop Out', 'New Admission', 'Online Registration', 'Pass Out</option', 'Transfer in', 'Transfer Out'],
      status: ['Active', 'In-Active'],
      filterBox: false
    };
  },
  created: function created() {
    this.getList();
  },
  methods: {
    getList: function getList() {
      this.$http.get(this.url).then(function (res) {
        console.log(res.data);
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6& ***!
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
  return _c(
    "div",
    { staticClass: "custom-table" },
    [
      _c(
        "vs-table",
        {
          attrs: {
            sst: true,
            total: _vm.totalItems,
            pagination: _vm.hasPagination,
            multiple: _vm.hasMultiple,
            "max-items": "3",
            search: _vm.hasSearch,
            data: _vm.data
          },
          on: {
            search: _vm.handleSearch,
            "change-page": _vm.handleChangePage,
            sort: _vm.handleSort
          },
          scopedSlots: _vm._u(
            [
              {
                key: "default",
                fn: function(ref) {
                  var data = ref.data
                  return _vm._l(data, function(tr, idx) {
                    return data.length > 0
                      ? _c(
                          "vs-tr",
                          { key: idx, attrs: { data: tr } },
                          [
                            _c("vs-td", { staticClass: "pointer-none" }, [
                              _vm._v(
                                "\n                                            " +
                                  _vm._s(idx + 1) +
                                  "\n                 "
                              )
                            ]),
                            _vm._v(" "),
                            _vm._t("items", null, { data: tr })
                          ],
                          2
                        )
                      : _c("vs-tr", [
                          _vm._v(
                            "\n                " +
                              _vm._s(_vm.noDataMessage) +
                              "\n            "
                          )
                        ])
                  })
                }
              }
            ],
            null,
            true
          ),
          model: {
            value: _vm.selected,
            callback: function($$v) {
              _vm.selected = $$v
            },
            expression: "selected"
          }
        },
        [
          _c(
            "template",
            { slot: "thead" },
            [
              _c("vs-th", [_vm._v("SN.No.")]),
              _vm._v(" "),
              _vm._l(_vm.headers, function(thead, indx) {
                return _c(
                  "vs-th",
                  { key: indx, attrs: { "sort-key": thead.sort_key } },
                  [
                    _vm._v(
                      "\n                " +
                        _vm._s(thead.name) +
                        "\n            "
                    )
                  ]
                )
              })
            ],
            2
          )
        ],
        2
      )
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
      { staticClass: "row " },
      [
        _c("div", { staticClass: "col-md-12" }, [
          _c("h2", { staticClass: "pageTitle" }, [_vm._v("Details")]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "p-2" },
            [
              _c(
                "router-link",
                { attrs: { to: "/student" } },
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
              ),
              _vm._v(" "),
              _c(
                "router-link",
                { attrs: { to: "/" } },
                [
                  _c(
                    "vs-button",
                    { staticClass: "smBtn", attrs: { type: "filled" } },
                    [
                      _vm._v(
                        "\n                            Primary\n                        "
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
            _c("vs-card", [
              _c("div", { staticClass: "row p-4" }, [
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
                                  attrs: {
                                    type: "filled",
                                    color: "primary",
                                    icon: "double_arrow"
                                  }
                                },
                                [
                                  _vm._v(
                                    "\n                                            Filter Students\n                                        "
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
                                _c("div", { staticClass: "col-md-3" }, [
                                  _c("div", { staticClass: "form-group" }, [
                                    _c("label", [_vm._v("Reg:")]),
                                    _vm._v(" "),
                                    _c("input", {
                                      staticClass:
                                        "form-control border-form input-mask-registration",
                                      attrs: {
                                        placeholder: "",
                                        autofocus: "",
                                        name: "",
                                        type: "text"
                                      }
                                    })
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "form-group" }, [
                                    _c("label", [_vm._v("Batch")]),
                                    _vm._v(" "),
                                    _c(
                                      "select",
                                      {
                                        staticClass: "form-control",
                                        attrs: { name: "batch" }
                                      },
                                      [
                                        _c(
                                          "option",
                                          { attrs: { value: "0" } },
                                          [_vm._v("Select Batch")]
                                        ),
                                        _vm._v(" "),
                                        _c(
                                          "option",
                                          { attrs: { value: "1" } },
                                          [_vm._v("ACT")]
                                        )
                                      ]
                                    )
                                  ])
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-3" }, [
                                  _c(
                                    "div",
                                    { staticClass: "form-group" },
                                    [
                                      _c("label", [_vm._v("Reg Date From")]),
                                      _vm._v(" "),
                                      _c("datepicker", {
                                        model: {
                                          value: _vm.searchData.fromRegDate,
                                          callback: function($$v) {
                                            _vm.$set(
                                              _vm.searchData,
                                              "fromRegDate",
                                              $$v
                                            )
                                          },
                                          expression: "searchData.fromRegDate"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c("label", [_vm._v("To")]),
                                      _vm._v(" "),
                                      _c("datepicker", {
                                        model: {
                                          value: _vm.searchData.toRegDate,
                                          callback: function($$v) {
                                            _vm.$set(
                                              _vm.searchData,
                                              "toRegDate",
                                              $$v
                                            )
                                          },
                                          expression: "searchData.toRegDate"
                                        }
                                      })
                                    ],
                                    1
                                  )
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-3" }, [
                                  _c(
                                    "div",
                                    { staticClass: "form-group" },
                                    [
                                      _c("label", [_vm._v("Academic Status:")]),
                                      _vm._v(" "),
                                      _c("v-select", {
                                        attrs: {
                                          options: _vm.academic_status,
                                          placeholder: "Select Academic Status"
                                        },
                                        model: {
                                          value: _vm.searchData.academic_status,
                                          callback: function($$v) {
                                            _vm.$set(
                                              _vm.searchData,
                                              "academic_status",
                                              $$v
                                            )
                                          },
                                          expression:
                                            "searchData.academic_status"
                                        }
                                      })
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "div",
                                    { staticClass: "form-group" },
                                    [
                                      _c("label", [_vm._v("Status:")]),
                                      _vm._v(" "),
                                      _c("v-select", {
                                        attrs: {
                                          options: _vm.status,
                                          placeholder: "Select Status"
                                        },
                                        model: {
                                          value: _vm.searchData.status,
                                          callback: function($$v) {
                                            _vm.$set(
                                              _vm.searchData,
                                              "status",
                                              $$v
                                            )
                                          },
                                          expression: "searchData.status"
                                        }
                                      })
                                    ],
                                    1
                                  )
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-3" }, [
                                  _c(
                                    "div",
                                    { staticClass: "form-group" },
                                    [
                                      _c("label", [_vm._v("Faculty/Class")]),
                                      _vm._v(" "),
                                      _c("v-select", {
                                        attrs: {
                                          options: ["BTECH"],
                                          placeholder: "Select Faculty/Class"
                                        },
                                        model: {
                                          value: _vm.searchData.class,
                                          callback: function($$v) {
                                            _vm.$set(
                                              _vm.searchData,
                                              "class",
                                              $$v
                                            )
                                          },
                                          expression: "searchData.class"
                                        }
                                      })
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "div",
                                    { staticClass: "form-group" },
                                    [
                                      _c("label", [_vm._v("Sem./Sec.")]),
                                      _vm._v(" "),
                                      _c("v-select", {
                                        attrs: {
                                          options: ["BTECH"],
                                          placeholder: "Select Sem./Sec."
                                        },
                                        model: {
                                          value: _vm.searchData.sem,
                                          callback: function($$v) {
                                            _vm.$set(_vm.searchData, "sem", $$v)
                                          },
                                          expression: "searchData.sem"
                                        }
                                      })
                                    ],
                                    1
                                  )
                                ])
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "row  mb-3" }, [
                                _c("div", { staticClass: "col-md-3" }, [
                                  _c("div", { staticClass: "form-group" }, [
                                    _c("label", [_vm._v("Religion:")]),
                                    _vm._v(" "),
                                    _c("input", {
                                      staticClass:
                                        "form-control border-form input-mask-registration",
                                      attrs: {
                                        placeholder: "",
                                        autofocus: "",
                                        name: "",
                                        type: "text"
                                      }
                                    })
                                  ])
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-3" }, [
                                  _c("div", { staticClass: "form-group" }, [
                                    _c("label", [_vm._v("Caste:")]),
                                    _vm._v(" "),
                                    _c("input", {
                                      staticClass:
                                        "form-control border-form input-mask-registration",
                                      attrs: {
                                        placeholder: "",
                                        autofocus: "",
                                        name: "",
                                        type: "text"
                                      }
                                    })
                                  ])
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-3" }, [
                                  _c("div", { staticClass: "form-group" }, [
                                    _c("label", [_vm._v("Nationality:")]),
                                    _vm._v(" "),
                                    _c("input", {
                                      staticClass:
                                        "form-control border-form input-mask-registration",
                                      attrs: {
                                        placeholder: "",
                                        autofocus: "",
                                        name: "",
                                        type: "text"
                                      }
                                    })
                                  ])
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "col-md-3" }, [
                                  _c("div", { staticClass: "form-group" }, [
                                    _c("label", [_vm._v("Mot.Tongue:")]),
                                    _vm._v(" "),
                                    _c("input", {
                                      staticClass:
                                        "form-control border-form input-mask-registration",
                                      attrs: {
                                        placeholder: "",
                                        autofocus: "",
                                        name: "",
                                        type: "text"
                                      }
                                    })
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
                                        return _vm.alert(_vm.searchData)
                                      }
                                    }
                                  },
                                  [
                                    _vm._v(
                                      "\n                                                Filter\n                                            "
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
                  { staticClass: "col-md-12 " },
                  [
                    _c("h4", { staticClass: "header large lighter blue" }, [
                      _c("i", {
                        staticClass: "fa fa-list",
                        attrs: { "aria-hidden": "true" }
                      }),
                      _vm._v(" Students\n                                List")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "clearfix mt-3" }, [
                      _c("div", { staticClass: "easy-link-menu" }, [
                        _c(
                          "a",
                          { staticClass: "btn-success btn-sm bulk-action-btn" },
                          [
                            _c("i", {
                              staticClass: "fa fa-check",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v(" Active")
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "a",
                          { staticClass: "btn-warning btn-sm bulk-action-btn" },
                          [
                            _c("i", {
                              staticClass: "fa fa-remove",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v(
                              "\n                                        In-Active"
                            )
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "a",
                          { staticClass: "btn-danger btn-sm bulk-action-btn" },
                          [
                            _c("i", {
                              staticClass: "fa fa-trash",
                              attrs: { "aria-hidden": "true" }
                            }),
                            _vm._v(" Delete")
                          ]
                        )
                      ])
                    ]),
                    _vm._v(" "),
                    _c("br"),
                    _vm._v(" "),
                    _c("div", { staticClass: "table-header" }, [
                      _vm._v(
                        "\n                                Students Record list on table. Filter Students using the filter.\n                            "
                      )
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "dt-buttons btn-group action-group mt-3" },
                      [
                        _c(
                          "button",
                          {
                            staticClass:
                              "btn btn-secondary buttons-copy buttons-html5",
                            attrs: {
                              tabindex: "0",
                              "aria-controls": "DataTables_Table_0"
                            }
                          },
                          [_c("span", [_vm._v("Copy")])]
                        ),
                        _vm._v(" "),
                        _c(
                          "button",
                          {
                            staticClass:
                              "btn btn-secondary buttons-pdf buttons-html5",
                            attrs: {
                              tabindex: "0",
                              "aria-controls": "DataTables_Table_0"
                            }
                          },
                          [_c("span", [_vm._v("PDF")])]
                        ),
                        _vm._v(" "),
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-secondary",
                            attrs: {
                              tabindex: "0",
                              "aria-controls": "DataTables_Table_0"
                            }
                          },
                          [_c("span", [_vm._v("JSON")])]
                        ),
                        _vm._v(" "),
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-secondary buttons-print",
                            attrs: {
                              tabindex: "0",
                              "aria-controls": "DataTables_Table_0"
                            }
                          },
                          [_c("span", [_vm._v("Print")])]
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("student-table", {
                      attrs: {
                        headers: _vm.tableHeader,
                        url: _vm.url,
                        "no-data-message": "No matching records found",
                        searchField: _vm.searchData,
                        "has-search": true,
                        "has-multiple": true,
                        "has-pagination": true
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
                                  attrs: { data: props.data.username }
                                },
                                [
                                  _vm._v(
                                    "\n                                        " +
                                      _vm._s(props.data.email) +
                                      "\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-td",
                                { attrs: { data: props.data.username } },
                                [
                                  _vm._v(
                                    "\n                                        " +
                                      _vm._s(props.data.username) +
                                      "\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("vs-td", { attrs: { data: props.data.id } }, [
                                _vm._v(
                                  "\n                                        " +
                                    _vm._s(props.data.website) +
                                    "\n                                    "
                                )
                              ]),
                              _vm._v(" "),
                              _c("vs-td", { attrs: { data: props.id } }, [
                                _vm._v(
                                  "\n                                        " +
                                    _vm._s(props.data.id) +
                                    "\n                                    "
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

/***/ "./resources/js/src/views/custom/component/table/student-table.vue":
/*!*************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/student-table.vue ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _student_table_vue_vue_type_template_id_6786d4d6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./student-table.vue?vue&type=template&id=6786d4d6& */ "./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&");
/* harmony import */ var _student_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./student-table.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/component/table/student-table.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _student_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _student_table_vue_vue_type_template_id_6786d4d6___WEBPACK_IMPORTED_MODULE_0__["render"],
  _student_table_vue_vue_type_template_id_6786d4d6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
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

/***/ "./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6& ***!
  \********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_student_table_vue_vue_type_template_id_6786d4d6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./student-table.vue?vue&type=template&id=6786d4d6& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/student-table.vue?vue&type=template&id=6786d4d6&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_student_table_vue_vue_type_template_id_6786d4d6___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_student_table_vue_vue_type_template_id_6786d4d6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



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
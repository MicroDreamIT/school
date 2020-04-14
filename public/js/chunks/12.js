(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[12],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/chart/LineChart.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/component/chart/LineChart.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_chartjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-chartjs */ "./node_modules/vue-chartjs/es/index.js");

/* harmony default export */ __webpack_exports__["default"] = ({
  extends: vue_chartjs__WEBPACK_IMPORTED_MODULE_0__["Line"],
  props: {
    chartdata: {
      type: Object,
      default: null
    },
    options: {
      type: Object,
      default: null
    }
  },
  mounted: function mounted() {
    this.renderChart(this.chartdata, this.options);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/dashboard.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/dashboard.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _component_chart_LineChart__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./component/chart/LineChart */ "./resources/js/src/views/custom/component/chart/LineChart.vue");
/* harmony import */ var _component_table_data_table__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./component/table/data-table */ "./resources/js/src/views/custom/component/table/data-table.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    ChartjsComponentLineChart: _component_chart_LineChart__WEBPACK_IMPORTED_MODULE_0__["default"],
    DataTable: _component_table_data_table__WEBPACK_IMPORTED_MODULE_1__["default"]
  },
  data: function data() {
    return {
      collectionData: {
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          datasets: [{
            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9, 1.1, 0],
            label: "Fee Collection",
            borderColor: "#7367F0",
            fill: true
          }, {
            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9, 0.2, 0.4],
            label: "Salary",
            borderColor: "#28C76F",
            fill: true
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Fees Collection'
          },
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            xAxes: [{
              gridLines: {
                offsetGridLines: true
              }
            }]
          }
        }
      },
      compareData: {
        data: {
          labels: [],
          datasets: [{
            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
            label: "Collected Fee",
            borderColor: "#7367F0",
            fill: true
          }, {
            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
            label: "Due Fee",
            borderColor: "#28C76F",
            fill: true
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Fee Compare'
          },
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            xAxes: [{
              gridLines: {
                offsetGridLines: true
              }
            }]
          }
        }
      },
      transaction: {
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          datasets: [{
            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
            label: "Debit",
            borderColor: "#7367F0",
            fill: false
          }, {
            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
            label: "Credit",
            borderColor: "#28C76F",
            fill: false
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Transaction'
          },
          responsive: true,
          maintainAspectRatio: false
        }
      },
      feesCollection: [{
        name: 'Reg.No.',
        sort_key: 'reg_no'
      }, {
        name: 'Fees Title',
        sort_key: 'title'
      }, {
        name: 'Date',
        sort_key: 'date'
      }, {
        name: 'Amount'
      }],
      staffPayroll: [{
        name: 'Reg.No.',
        sort_key: 'reg_no'
      }, {
        name: 'PayFor',
        sort_key: 'pay_for'
      }, {
        name: 'Date',
        sort_key: 'date'
      }, {
        name: 'Amount'
      }],
      transactionTable: [{
        name: 'TrHead',
        sort_key: 'reg_no'
      }, {
        name: 'Date',
        sort_key: 'date'
      }, {
        name: 'Dr.Amount'
      }, {
        name: 'Cr.Amount'
      }],
      tableHeader1: [{
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
      searchData: {}
    };
  },
  computed: {
    myStyles: function myStyles() {
      return {
        height: "400px",
        position: 'relative'
      };
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/dashboard.vue?vue&type=template&id=6f48b380&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/dashboard.vue?vue&type=template&id=6f48b380& ***!
  \******************************************************************************************************************************************************************************************************************/
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
    _c("h3", [_vm._v("\n        Dashboard\n    ")]),
    _vm._v(" "),
    _c("div", { staticClass: "row mt-2" }, [
      _c(
        "div",
        { staticClass: "col-md-10" },
        [
          _c("chartjs-component-line-chart", {
            style: _vm.myStyles,
            attrs: {
              chartdata: _vm.collectionData.data,
              options: _vm.collectionData.options
            }
          })
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-2" },
        [
          _c("chartjs-component-line-chart", {
            style: _vm.myStyles,
            attrs: {
              chartdata: _vm.compareData.data,
              options: _vm.compareData.options
            }
          })
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-12" },
        [
          _c("chartjs-component-line-chart", {
            style: _vm.myStyles,
            attrs: {
              chartdata: _vm.transaction.data,
              options: _vm.transaction.options
            }
          })
        ],
        1
      ),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-9" }, [
        _c("div", { staticClass: "row mx-0" }, [
          _c(
            "div",
            { staticClass: "col-md-12" },
            [
              _c("div", { staticClass: "myTitle" }, [_vm._v("Accounting")]),
              _vm._v(" "),
              _c(
                "vs-tabs",
                [
                  _c("vs-tab", { attrs: { label: "Fees Collection" } }, [
                    _c(
                      "div",
                      { staticClass: "con-tab-ejemplo" },
                      [
                        _c("data-table", {
                          attrs: {
                            headers: _vm.feesCollection,
                            url: "/fees-collection",
                            "no-data-message": "No matching records found",
                            searchField: _vm.searchData,
                            hasSearch: false
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
                                        "\n                                            " +
                                          _vm._s(props.data.email) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.username) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.id } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.website) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c("vs-td", { attrs: { data: props.id } }, [
                                    _vm._v(
                                      "\n                                            " +
                                        _vm._s(props.data.id) +
                                        "\n                                        "
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
                  ]),
                  _vm._v(" "),
                  _c("vs-tab", { attrs: { label: "Staff Payroll" } }, [
                    _c(
                      "div",
                      { staticClass: "con-tab-ejemplo" },
                      [
                        _c("data-table", {
                          attrs: {
                            headers: _vm.staffPayroll,
                            url: "/staff-payroll",
                            "no-data-message": "No matching records found",
                            searchField: _vm.searchData,
                            hasSearch: false
                          },
                          scopedSlots: _vm._u([
                            {
                              key: "items",
                              fn: function(props) {
                                return [
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.email) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.username) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.id } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.website) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c("vs-td", { attrs: { data: props.id } }, [
                                    _vm._v(
                                      "\n                                            " +
                                        _vm._s(props.data.id) +
                                        "\n                                        "
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
                  ]),
                  _vm._v(" "),
                  _c("vs-tab", { attrs: { label: "Transaction" } }, [
                    _c(
                      "div",
                      { staticClass: "con-tab-ejemplo" },
                      [
                        _c("data-table", {
                          attrs: {
                            headers: _vm.transactionTable,
                            url: "/transaction",
                            "no-data-message": "No matching records found",
                            searchField: _vm.searchData,
                            hasSearch: false
                          },
                          scopedSlots: _vm._u([
                            {
                              key: "items",
                              fn: function(props) {
                                return [
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.email) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.username) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.id } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.website) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c("vs-td", { attrs: { data: props.id } }, [
                                    _vm._v(
                                      "\n                                            " +
                                        _vm._s(props.data.id) +
                                        "\n                                        "
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
              _c("div", { staticClass: "myTitle" }, [_vm._v("Library")]),
              _vm._v(" "),
              _c(
                "vs-tabs",
                [
                  _c("vs-tab", { attrs: { label: "Book Issue" } }, [
                    _c(
                      "div",
                      { staticClass: "con-tab-ejemplo" },
                      [
                        _c("data-table", {
                          attrs: {
                            headers: _vm.tableHeader1,
                            url: "/student",
                            "no-data-message": "No matching records found",
                            searchField: _vm.searchData,
                            hasSearch: false
                          },
                          scopedSlots: _vm._u([
                            {
                              key: "items",
                              fn: function(props) {
                                return [
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.email) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.username) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.id } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.website) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c("vs-td", { attrs: { data: props.id } }, [
                                    _vm._v(
                                      "\n                                            " +
                                        _vm._s(props.data.id) +
                                        "\n                                        "
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
                  ]),
                  _vm._v(" "),
                  _c("vs-tab", { attrs: { label: "Return Period Over" } }, [
                    _c(
                      "div",
                      { staticClass: "con-tab-ejemplo" },
                      [
                        _c("data-table", {
                          attrs: {
                            headers: _vm.tableHeader1,
                            url: "/student",
                            "no-data-message": "No matching records found",
                            searchField: _vm.searchData,
                            hasSearch: false
                          },
                          scopedSlots: _vm._u([
                            {
                              key: "items",
                              fn: function(props) {
                                return [
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.email) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.username) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.id } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.website) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c("vs-td", { attrs: { data: props.id } }, [
                                    _vm._v(
                                      "\n                                            " +
                                        _vm._s(props.data.id) +
                                        "\n                                        "
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
              _c("div", { staticClass: "myTitle" }, [_vm._v("Attendance")]),
              _vm._v(" "),
              _c(
                "vs-tabs",
                [
                  _c("vs-tab", { attrs: { label: "Booklet" } }, [
                    _c(
                      "div",
                      { staticClass: "con-tab-ejemplo" },
                      [
                        _c("data-table", {
                          attrs: {
                            headers: _vm.tableHeader1,
                            url: "/student",
                            "no-data-message": "No matching records found",
                            searchField: _vm.searchData,
                            hasSearch: false
                          },
                          scopedSlots: _vm._u([
                            {
                              key: "items",
                              fn: function(props) {
                                return [
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.email) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.username) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.id } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.website) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c("vs-td", { attrs: { data: props.id } }, [
                                    _vm._v(
                                      "\n                                            " +
                                        _vm._s(props.data.id) +
                                        "\n                                        "
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
              _c("div", { staticClass: "myTitle" }, [
                _vm._v("Up Coming Birthday")
              ]),
              _vm._v(" "),
              _c(
                "vs-tabs",
                [
                  _c("vs-tab", { attrs: { label: "Student Birthday" } }, [
                    _c(
                      "div",
                      { staticClass: "con-tab-ejemplo" },
                      [
                        _c("data-table", {
                          attrs: {
                            headers: _vm.tableHeader1,
                            url: "/student",
                            "no-data-message": "No matching records found",
                            searchField: _vm.searchData,
                            hasSearch: false
                          },
                          scopedSlots: _vm._u([
                            {
                              key: "items",
                              fn: function(props) {
                                return [
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.email) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.username) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.id } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.website) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c("vs-td", { attrs: { data: props.id } }, [
                                    _vm._v(
                                      "\n                                            " +
                                        _vm._s(props.data.id) +
                                        "\n                                        "
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
                  ]),
                  _vm._v(" "),
                  _c("vs-tab", { attrs: { label: "Staff Birthday" } }, [
                    _c(
                      "div",
                      { staticClass: "con-tab-ejemplo" },
                      [
                        _c("data-table", {
                          attrs: {
                            headers: _vm.tableHeader1,
                            url: "/student",
                            "no-data-message": "No matching records found",
                            searchField: _vm.searchData,
                            hasSearch: false
                          },
                          scopedSlots: _vm._u([
                            {
                              key: "items",
                              fn: function(props) {
                                return [
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.email) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.username } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.username) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-td",
                                    { attrs: { data: props.data.id } },
                                    [
                                      _vm._v(
                                        "\n                                            " +
                                          _vm._s(props.data.website) +
                                          "\n                                        "
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c("vs-td", { attrs: { data: props.id } }, [
                                    _vm._v(
                                      "\n                                            " +
                                        _vm._s(props.data.id) +
                                        "\n                                        "
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
                ],
                1
              )
            ],
            1
          )
        ])
      ]),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-3" },
        [
          _c("div", { staticClass: "myTitle" }, [_vm._v("Overall Summary")]),
          _vm._v(" "),
          _vm._m(0),
          _vm._v(" "),
          _vm._m(1),
          _vm._v(" "),
          _c("vs-divider"),
          _vm._v(" "),
          _vm._m(2),
          _vm._v(" "),
          _c("vs-divider"),
          _vm._v(" "),
          _vm._m(3)
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "py-3" }, [
      _c("div", { staticClass: "miniTitle" }, [_vm._v("Student Status")]),
      _vm._v(" "),
      _c("div", { staticClass: "mBox bg-light" }, [
        _c("div", [_vm._v("Active")]),
        _vm._v(" "),
        _c("div", [_vm._v("4")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "mBox font-weight-bold" }, [
        _c("div", [_vm._v("Total Student:")]),
        _vm._v(" "),
        _c("div", [_vm._v("4")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "py-3" }, [
      _c("div", { staticClass: "miniTitle" }, [_vm._v("Academic Status")]),
      _vm._v(" "),
      _c("div", { staticClass: "mBox bg-light" }, [
        _c("div", [_vm._v("New Admission")]),
        _vm._v(" "),
        _c("div", [_vm._v("4")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "mBox font-weight-bold" }, [
        _c("div", [_vm._v("Total Student:")]),
        _vm._v(" "),
        _c("div", [_vm._v("4")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "py-3" }, [
      _c("div", { staticClass: "miniTitle" }, [_vm._v("Stuff Status")]),
      _vm._v(" "),
      _c("div", { staticClass: "mBox bg-light" }, [
        _c("div", [_vm._v("Active")]),
        _vm._v(" "),
        _c("div", [_vm._v("3")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "mBox font-weight-bold" }, [
        _c("div", [_vm._v("Total Stuff:")]),
        _vm._v(" "),
        _c("div", [_vm._v("3")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "py-3" }, [
      _c("div", { staticClass: "miniTitle" }, [_vm._v("Book Status")]),
      _vm._v(" "),
      _c("div", { staticClass: "mBox bg-light" }, [
        _c("div", [_vm._v("Available")]),
        _vm._v(" "),
        _c("div", [_vm._v("2")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "mBox font-weight-bold" }, [
        _c("div", [_vm._v("Total Book:")]),
        _vm._v(" "),
        _c("div", [_vm._v("2")])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/component/chart/LineChart.vue":
/*!*********************************************************************!*\
  !*** ./resources/js/src/views/custom/component/chart/LineChart.vue ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _LineChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./LineChart.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/component/chart/LineChart.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns




/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__["default"])(
  _LineChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/component/chart/LineChart.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/component/chart/LineChart.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/chart/LineChart.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_LineChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./LineChart.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/chart/LineChart.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_LineChart_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/dashboard.vue":
/*!*****************************************************!*\
  !*** ./resources/js/src/views/custom/dashboard.vue ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _dashboard_vue_vue_type_template_id_6f48b380___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./dashboard.vue?vue&type=template&id=6f48b380& */ "./resources/js/src/views/custom/dashboard.vue?vue&type=template&id=6f48b380&");
/* harmony import */ var _dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./dashboard.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _dashboard_vue_vue_type_template_id_6f48b380___WEBPACK_IMPORTED_MODULE_0__["render"],
  _dashboard_vue_vue_type_template_id_6f48b380___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/dashboard.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/dashboard.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./resources/js/src/views/custom/dashboard.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./dashboard.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/dashboard.vue?vue&type=template&id=6f48b380&":
/*!************************************************************************************!*\
  !*** ./resources/js/src/views/custom/dashboard.vue?vue&type=template&id=6f48b380& ***!
  \************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_template_id_6f48b380___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./dashboard.vue?vue&type=template&id=6f48b380& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/dashboard.vue?vue&type=template&id=6f48b380&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_template_id_6f48b380___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_template_id_6f48b380___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
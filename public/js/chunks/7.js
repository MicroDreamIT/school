(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[7],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************/
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
/* harmony default export */ __webpack_exports__["default"] = ({
  props: {
    url: {
      type: String,
      default: function _default() {
        return '';
      }
    },
    filterSection: {
      type: Boolean,
      default: function _default() {
        return false;
      }
    },
    ajaxVariableSet: {
      type: Array,
      default: function _default() {
        return [];
      }
    },
    tableHeader: {
      type: String,
      default: function _default() {
        return 'Data List';
      }
    },
    actionBtn: {
      type: Boolean,
      default: function _default() {
        return true;
      }
    },
    headerSuggestion: {
      type: Boolean,
      default: function _default() {
        return true;
      }
    },
    printSection: {
      type: Boolean,
      default: function _default() {
        return true;
      }
    },
    suggestText: {
      type: String,
      default: function _default() {
        return 'Data Record list on table. Filter Data using the filter.';
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
    },
    transferSection: {
      type: Boolean,
      default: function _default() {
        return false;
      }
    },
    returnedValue: {
      type: Array,
      default: function _default() {
        return [];
      }
    },
    showStatus: {
      type: Boolean,
      default: function _default() {
        return true;
      }
    },
    showAction: {
      type: Boolean,
      default: function _default() {
        return true;
      }
    },
    model: {
      type: String,
      default: function _default() {
        return '';
      }
    },
    editLink: {},
    viewLink: {},
    deleteLink: {},
    searchData: {}
  },
  data: function data() {
    return {
      route_id: null,
      routes: [],
      selected: [],
      maxItem: 10,
      item: [],
      designation: [],
      vehicles: [],
      route_bulk: null,
      vehicle_bulk: null,
      activePrompt: false,
      promptForms: {
        userId: null,
        route_shift: null,
        vehicle_shift: null
      }
    };
  },
  created: function created() {
    this.getData();
  },
  methods: {
    findVehicle: function findVehicle(route_id) {
      var _this = this;

      this.$http.post('/json/transport/find-vehicles', {
        route_id: route_id
      }).then(function (res) {
        _this.vehicles = res.data.vehicles;
      });
    },
    changeStatus: function changeStatus(id, status) {},
    getData: function getData() {
      var _this2 = this;

      this.$http.get(this.url, {
        params: this.searchData
      }).then(function (res) {
        _this2.item = res.data[_this2.ajaxVariableSet[0]];
        _this2.routes = _this2.$root.objectToArray(res.data.active_routes);

        _this2.$emit('get-return-value', _this2.item, res.data);

        if (!_this2.$store.state.tableData.length > 0) {
          _this2.$store.dispatch('updateTableData', _this2.item);
        }
      });
    },
    shiftItem: function shiftItem(id) {
      this.promptForms.userId = id;
      this.activePrompt = true;
    },
    submitModal: function submitModal() {
      var _this3 = this;

      this.$http.post(this.url + '/shift', this.promptForms).then(function (res) {
        if (res.status === 200) {
          _this3.getData();

          _this3.promptForms.userId = null;
          _this3.promptForms.route_shift = null;
          _this3.promptForms.vehicle_shift = null;

          _this3.$vs.notify({
            title: res.data[0],
            text: res.data[1],
            color: res.data[0],
            icon: 'verified_user'
          });
        }
      });
    },
    leaveItem: function leaveItem(id) {
      var _this4 = this;

      this.$dialog.confirm('This Transport User Leave When You Click on Yes Leave Now.Don\'t Be Afraid, You Will Able To ReActive in Future').then(function (dialog) {
        _this4.$http.get(_this4.url + '/' + id + '/leave').then(function (res) {
          _this4.getData();

          _this4.$vs.notify({
            title: res.data[0],
            text: res.data[1],
            color: res.data[0],
            icon: 'danger'
          });
        });
      });
    },
    editItem: function editItem(id) {
      this.$router.push({
        name: 'transport.userEdit',
        params: {
          id: id
        }
      });
    },
    deleteItem: function deleteItem(id) {
      var _this5 = this;

      this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(function (dialog) {
        _this5.$http.get('/json/transport/user/' + id + '/delete').then(function (res) {
          _this5.getData();

          _this5.$vs.notify({
            title: res.data[0],
            text: res.data[1],
            color: res.data[0],
            icon: 'danger'
          });
        }).catch(function (err) {});
      });
    },
    doFilter: function doFilter() {
      this.getData();
    },
    bulkAction: function bulkAction(action) {
      var _this6 = this;

      if (this.selected.length > 0) {
        this.$dialog.confirm('Are you sure, You Want To Active Using Bulk Action? Please, Be Sure When You Use Bulk Action. It Effects All The Selected Data.').then(function (dialog) {
          _this6.$http.post(_this6.url + '/bulk-action', {
            bulk_action: action,
            route_bulk: parseInt(_this6.route_bulk),
            vehicle_bulk: parseInt(_this6.vehicle_bulk),
            chkIds: _this6.selected.map(function (val) {
              return parseInt(val.id);
            })
          }).then(function (res) {
            _this6.$vs.notify({
              title: res.data[0],
              text: res.data[1],
              color: res.data[0],
              icon: 'verified_user'
            });

            _this6.selected = [];

            _this6.getData();
          }).catch(function (err) {
            alert(err.response.message);
          });
        });
      } else {
        this.$vs.notify({
          title: res.data[0],
          text: res.data[1],
          color: res.data[0],
          icon: 'verified_user'
        });
      }
    },
    doCopy: function doCopy() {
      alert('doing copy');
    },
    doPdf: function doPdf() {
      alert('doing pdf');
    },
    doJson: function doJson() {
      alert('doing json');
    },
    doPrint: function doPrint() {
      alert('doing print');
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/transport/user/detail.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/transport/user/detail.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _component_table_data_table_transport_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../component/table/data-table-transport.vue */ "./resources/js/src/views/custom/component/table/data-table-transport.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    'data-table-transport': _component_table_data_table_transport_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      // user_type=1&reg_no=54564&route=3&vehicle_select=2&status=2
      searchData: {
        user_type: null,
        reg_no: null,
        route: null,
        vehicle_select: null,
        status: null
      },
      routes: [],
      vehicles: [],
      route_id: null,
      promptDeleteId: null,
      headers: [{
        name: 'route',
        field: 'route',
        sort_key: 'route'
      }, {
        name: 'vehicle',
        field: 'vehicle',
        sort_key: 'vehicle'
      }, {
        name: 'type',
        field: 'type',
        sort_key: 'type'
      }, {
        name: 'reg',
        field: 'memberreg',
        sort_key: 'memberreg'
      }, {
        name: 'name',
        field: 'membername',
        sort_key: 'membername'
      }, {
        name: 'Action',
        field: 'action'
      }, {
        name: 'Status',
        field: 'status',
        sort_key: 'status'
      }]
    };
  },
  watch: {
    searchData: {
      deep: true,
      handler: function handler(val) {
        if (val.route) {
          var route_id = val.route;
          this.findVehicle(route_id);
        }

        this.$refs.dataTableTransport.getData();
      }
    }
  },
  methods: {
    openAlert: function openAlert(id) {
      this.promptDeleteId = id;
      this.$vs.dialog({
        color: 'danger',
        title: "Delete confirmation",
        text: 'These items will be permanently deleted and cannot be recovered.',
        accept: this.deleteItems,
        close: this.resetPrompt
      });
    },
    resetPrompt: function resetPrompt() {
      this.promptDeleteId = null;
    },
    findVehicle: function findVehicle(route_id) {
      var _this = this;

      this.$http.post('/json/transport/find-vehicles', {
        route_id: route_id
      }).then(function (res) {
        _this.vehicles = res.data.vehicles;
      });
    },
    resetSearch: function resetSearch() {
      this.searchData.user_type = null;
      this.searchData.reg_no = null;
      this.searchData.route = null;
      this.searchData.vehicle_select = null;
      this.searchData.status = null;
    },
    GetReturnValue: function GetReturnValue() {
      var arg = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      var total = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      var val = arg.map(function (st) {
        return {
          id: st.id,
          route: st.route ? st.route.title : null,
          vehicle: st.vehicle ? st.vehicle.fullname : null,
          type: st.user_type,
          membername: st.memberdetail[0],
          memberreg: st.memberdetail[1],
          status: st.status
        };
      });
      this.routes = this.$root.objectToArray(total.active_routes);
      this.$store.dispatch('updateTableData', val);
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=template&id=e6cf4704&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=template&id=e6cf4704& ***!
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
  return _c(
    "div",
    { staticClass: "custom-table" },
    [
      _c(
        "vs-prompt",
        {
          attrs: {
            color: "primary",
            title: "complete forms",
            "accept-text": "submit",
            "is-valid":
              _vm.promptForms.route_shift > 0 &&
              _vm.promptForms.vehicle_shift > 0,
            active: _vm.activePrompt
          },
          on: {
            accept: _vm.submitModal,
            "update:active": function($event) {
              _vm.activePrompt = $event
            }
          }
        },
        [
          _c("div", [
            _c("div", { staticClass: "form-group   mb-3" }, [
              _c("label", [_vm._v("Route")]),
              _vm._v(" "),
              _c(
                "select",
                {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.promptForms.route_shift,
                      expression: "promptForms.route_shift"
                    }
                  ],
                  staticClass: "form-control",
                  on: {
                    change: [
                      function($event) {
                        var $$selectedVal = Array.prototype.filter
                          .call($event.target.options, function(o) {
                            return o.selected
                          })
                          .map(function(o) {
                            var val = "_value" in o ? o._value : o.value
                            return val
                          })
                        _vm.$set(
                          _vm.promptForms,
                          "route_shift",
                          $event.target.multiple
                            ? $$selectedVal
                            : $$selectedVal[0]
                        )
                      },
                      function($event) {
                        return _vm.findVehicle(_vm.promptForms.route_shift)
                      }
                    ]
                  }
                },
                _vm._l(_vm.routes, function(route) {
                  return _c("option", { domProps: { value: route.id } }, [
                    _vm._v(
                      "\n                        " +
                        _vm._s(route.value) +
                        "\n                    "
                    )
                  ])
                }),
                0
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "form-group   mb-3" }, [
              _c("label", [_vm._v("Vehicle")]),
              _vm._v(" "),
              _c(
                "select",
                {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.promptForms.vehicle_shift,
                      expression: "promptForms.vehicle_shift"
                    }
                  ],
                  staticClass: "form-control",
                  on: {
                    change: function($event) {
                      var $$selectedVal = Array.prototype.filter
                        .call($event.target.options, function(o) {
                          return o.selected
                        })
                        .map(function(o) {
                          var val = "_value" in o ? o._value : o.value
                          return val
                        })
                      _vm.$set(
                        _vm.promptForms,
                        "vehicle_shift",
                        $event.target.multiple
                          ? $$selectedVal
                          : $$selectedVal[0]
                      )
                    }
                  }
                },
                _vm._l(_vm.vehicles, function(vehicle) {
                  return _c(
                    "option",
                    { domProps: { value: vehicle.vehicles_id } },
                    [_vm._v(_vm._s(vehicle.number))]
                  )
                }),
                0
              )
            ])
          ])
        ]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "row p-4" }, [
        _c(
          "div",
          { staticClass: "col-md-12 " },
          [
            _c("h4", { staticClass: "header large lighter blue" }, [
              _c("i", {
                staticClass: "fa fa-list",
                attrs: { "aria-hidden": "true" }
              }),
              _vm._v(
                " \n                " +
                  _vm._s(_vm.tableHeader) +
                  "\n            "
              )
            ]),
            _vm._v(" "),
            _c("div", [
              _c("div", { staticClass: "form-group   mb-3" }, [
                _c("label", [_vm._v("Route")]),
                _vm._v(" "),
                _c(
                  "select",
                  {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.route_bulk,
                        expression: "route_bulk"
                      }
                    ],
                    staticClass: "form-control",
                    on: {
                      change: [
                        function($event) {
                          var $$selectedVal = Array.prototype.filter
                            .call($event.target.options, function(o) {
                              return o.selected
                            })
                            .map(function(o) {
                              var val = "_value" in o ? o._value : o.value
                              return val
                            })
                          _vm.route_bulk = $event.target.multiple
                            ? $$selectedVal
                            : $$selectedVal[0]
                        },
                        function($event) {
                          return _vm.findVehicle(_vm.route_bulk)
                        }
                      ]
                    }
                  },
                  _vm._l(_vm.routes, function(route) {
                    return _c("option", { domProps: { value: route.id } }, [
                      _vm._v(
                        "\n                            " +
                          _vm._s(route.value) +
                          "\n                        "
                      )
                    ])
                  }),
                  0
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group   mb-3" }, [
                _c("label", [_vm._v("Vehicle")]),
                _vm._v(" "),
                _c(
                  "select",
                  {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.vehicle_bulk,
                        expression: "vehicle_bulk"
                      }
                    ],
                    staticClass: "form-control",
                    on: {
                      change: function($event) {
                        var $$selectedVal = Array.prototype.filter
                          .call($event.target.options, function(o) {
                            return o.selected
                          })
                          .map(function(o) {
                            var val = "_value" in o ? o._value : o.value
                            return val
                          })
                        _vm.vehicle_bulk = $event.target.multiple
                          ? $$selectedVal
                          : $$selectedVal[0]
                      }
                    }
                  },
                  _vm._l(_vm.vehicles, function(vehicle) {
                    return _c(
                      "option",
                      { domProps: { value: vehicle.vehicles_id } },
                      [_vm._v(_vm._s(vehicle.number))]
                    )
                  }),
                  0
                )
              ])
            ]),
            _vm._v(" "),
            _vm.actionBtn &&
            _vm.vehicle_bulk &&
            _vm.route_bulk &&
            _vm.selected.length > 0
              ? _c("div", { staticClass: "easy-link-menu d-flex flex-wrap" }, [
                  _c(
                    "a",
                    {
                      staticClass: "btn-success btn-sm bulk-action-btn  m-1",
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.bulkAction("Active")
                        }
                      }
                    },
                    [
                      _c("i", { staticClass: "fa fa-check" }),
                      _vm._v("\n                    Active\n                ")
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "btn-success btn-sm bulk-action-btn  m-1",
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.bulkAction("Shift")
                        }
                      }
                    },
                    [
                      _c("i", { staticClass: "fa fa-check" }),
                      _vm._v("\n                    Shift\n                ")
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "btn-success btn-sm bulk-action-btn  m-1",
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.bulkAction("Leave")
                        }
                      }
                    },
                    [
                      _c("i", { staticClass: "fa fa-check" }),
                      _vm._v("\n                    Leave\n                ")
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "btn-danger btn-sm bulk-action-btn m-1",
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.bulkAction("Delete")
                        }
                      }
                    },
                    [
                      _c("i", { staticClass: "fa fa-trash" }),
                      _vm._v("\n                    Delete\n                ")
                    ]
                  )
                ])
              : _vm._e(),
            _vm._v(" "),
            _c("br"),
            _vm._v(" "),
            _vm.headerSuggestion
              ? _c("div", { staticClass: "table-header" }, [
                  _vm._v(
                    "\n                " +
                      _vm._s(_vm.suggestText) +
                      "\n            "
                  )
                ])
              : _vm._e(),
            _vm._v(" "),
            _vm.printSection
              ? _c(
                  "div",
                  { staticClass: "dt-buttons btn-group action-group mt-3" },
                  [
                    _c(
                      "button",
                      {
                        staticClass:
                          "btn btn-secondary buttons-copy buttons-html5",
                        on: {
                          click: function($event) {
                            $event.preventDefault()
                            return _vm.doCopy($event)
                          }
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
                        on: {
                          click: function($event) {
                            $event.preventDefault()
                            return _vm.doPdf($event)
                          }
                        }
                      },
                      [_c("span", [_vm._v("PDF")])]
                    ),
                    _vm._v(" "),
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-secondary",
                        on: {
                          click: function($event) {
                            $event.preventDefault()
                            return _vm.doJson($event)
                          }
                        }
                      },
                      [_c("span", [_vm._v("JSON")])]
                    ),
                    _vm._v(" "),
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-secondary buttons-print",
                        on: {
                          click: function($event) {
                            $event.preventDefault()
                            return _vm.doPrint($event)
                          }
                        }
                      },
                      [_c("span", [_vm._v("Print")])]
                    )
                  ]
                )
              : _vm._e(),
            _vm._v(" "),
            _c(
              "vs-table",
              {
                attrs: {
                  pagination: _vm.hasPagination,
                  multiple: _vm.hasMultiple,
                  "max-items": _vm.maxItem,
                  search: _vm.hasSearch,
                  data: _vm.$store.state.tableData,
                  noDataText: _vm.noDataMessage,
                  description: "",
                  "description-title": "Showing"
                },
                scopedSlots: _vm._u(
                  [
                    {
                      key: "default",
                      fn: function(ref) {
                        var data = ref.data
                        return _vm._l(data, function(tr, idx) {
                          return _c(
                            "vs-tr",
                            { key: idx, attrs: { data: tr } },
                            [
                              _c("vs-td", [_vm._v(_vm._s(idx + 1))]),
                              _vm._v(" "),
                              _vm._t("items", null, { data: tr }),
                              _vm._v(" "),
                              _vm.showStatus
                                ? _c("vs-td", [
                                    _c(
                                      "div",
                                      { staticClass: "d-flex flex-wrap" },
                                      [
                                        _vm._v(
                                          "\n                                " +
                                            _vm._s(tr.status) +
                                            "\n                                "
                                        ),
                                        _c(
                                          "vs-switch",
                                          {
                                            staticClass: "pointer-all ml-2",
                                            attrs: {
                                              color: "success",
                                              checked: tr.status === "active"
                                            },
                                            on: {
                                              click: function($event) {
                                                $event.stopPropagation()
                                                return _vm.changeStatus(
                                                  tr.id,
                                                  tr.status
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
                                  ])
                                : _vm._e(),
                              _vm._v(" "),
                              _vm.showAction
                                ? _c("vs-td", [
                                    _c("div", { staticClass: "action-own" }, [
                                      _c(
                                        "a",
                                        {
                                          staticClass:
                                            "btn btn-primary btn-sm pointer-all",
                                          attrs: { title: "shift" },
                                          on: {
                                            click: function($event) {
                                              $event.stopPropagation()
                                              return _vm.shiftItem(tr.id)
                                            }
                                          }
                                        },
                                        [
                                          _c("i", {
                                            staticClass: "fa fa-arrows-h"
                                          })
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "a",
                                        {
                                          staticClass:
                                            "btn btn-warning btn-sm pointer-all",
                                          attrs: { title: "leave" },
                                          on: {
                                            click: function($event) {
                                              $event.stopPropagation()
                                              return _vm.leaveItem(tr.id)
                                            }
                                          }
                                        },
                                        [
                                          _c("i", {
                                            staticClass:
                                              "fa fa-arrow-circle-right"
                                          })
                                        ]
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
                                              return _vm.editItem(tr.id)
                                            }
                                          }
                                        },
                                        [
                                          _c("i", {
                                            staticClass: "fa fa-pencil"
                                          })
                                        ]
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
                                              return _vm.deleteItem(tr.id)
                                            }
                                          }
                                        },
                                        [
                                          _c("i", {
                                            staticClass: "fa fa-trash-o"
                                          })
                                        ]
                                      )
                                    ])
                                  ])
                                : _vm._e()
                            ],
                            2
                          )
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
                    _c("vs-th", [_vm._v("S.N.")]),
                    _vm._v(" "),
                    _vm._l(_vm.headers, function(thead, indx) {
                      return _c(
                        "vs-th",
                        {
                          key: indx,
                          attrs: {
                            "sort-key": thead.sort_key ? thead.sort_key : ""
                          }
                        },
                        [
                          _vm._v(
                            "\n                        " +
                              _vm._s(thead.name) +
                              "\n                    "
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
      ])
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/transport/user/detail.vue?vue&type=template&id=3bd972ca&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/transport/user/detail.vue?vue&type=template&id=3bd972ca&scoped=true& ***!
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
  return _c("div", [
    _c("div", { staticClass: "row " }, [
      _c("div", { staticClass: "col-md-12" }, [
        _c("h2", { staticClass: "pageTitle" }, [
          _vm._v("Transport User Manger")
        ]),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "mb-2" },
          [
            _c(
              "router-link",
              { attrs: { to: "/transport/user" } },
              [
                _c(
                  "vs-button",
                  { staticClass: "smBtn", attrs: { type: "filled" } },
                  [_vm._v("User")]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "router-link",
              { attrs: { to: "/transport/route" } },
              [
                _c(
                  "vs-button",
                  { staticClass: "smBtn", attrs: { type: "filled" } },
                  [_vm._v("Route")]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "router-link",
              { attrs: { to: "/transport/vehicle" } },
              [
                _c(
                  "vs-button",
                  { staticClass: "smBtn", attrs: { type: "filled" } },
                  [_vm._v("Vehicle")]
                )
              ],
              1
            )
          ],
          1
        ),
        _vm._v(" "),
        _c("br")
      ]),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-12" },
        [
          _c("vs-card", [
            _c(
              "div",
              { staticClass: "row p-4" },
              [
                _c(
                  "div",
                  { staticClass: "col-md-12" },
                  [
                    _c("h4", [_vm._v("Transport User List")]),
                    _vm._v(" "),
                    _c(
                      "router-link",
                      { attrs: { to: "/transport/user" } },
                      [
                        _c(
                          "vs-button",
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [_vm._v("Detail")]
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "router-link",
                      { attrs: { to: "/transport/user/add" } },
                      [
                        _c(
                          "vs-button",
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [_vm._v("Registration")]
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "router-link",
                      { attrs: { to: "/transport/user/history" } },
                      [
                        _c(
                          "vs-button",
                          { staticClass: "smBtn", attrs: { type: "filled" } },
                          [_vm._v("History")]
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
                                    "\n                                        Filter Transport User\n                                    "
                                  )
                                ]
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "filterBox" }, [
                            _c("div", { staticClass: "col-md-12 row" }, [
                              _c("div", { staticClass: "col-md-4" }, [
                                _c("div", { staticClass: "form-group" }, [
                                  _c("label", [_vm._v("Type:")]),
                                  _vm._v(" "),
                                  _c(
                                    "select",
                                    {
                                      directives: [
                                        {
                                          name: "model",
                                          rawName: "v-model",
                                          value: _vm.searchData.user_type,
                                          expression: "searchData.user_type"
                                        }
                                      ],
                                      staticClass: "form-control",
                                      on: {
                                        change: function($event) {
                                          var $$selectedVal = Array.prototype.filter
                                            .call(
                                              $event.target.options,
                                              function(o) {
                                                return o.selected
                                              }
                                            )
                                            .map(function(o) {
                                              var val =
                                                "_value" in o
                                                  ? o._value
                                                  : o.value
                                              return val
                                            })
                                          _vm.$set(
                                            _vm.searchData,
                                            "user_type",
                                            $event.target.multiple
                                              ? $$selectedVal
                                              : $$selectedVal[0]
                                          )
                                        }
                                      }
                                    },
                                    [
                                      _c("option", { domProps: { value: 1 } }, [
                                        _vm._v("student")
                                      ]),
                                      _vm._v(" "),
                                      _c("option", { domProps: { value: 2 } }, [
                                        _vm._v("staff")
                                      ])
                                    ]
                                  )
                                ])
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "col-md-4" }, [
                                _c(
                                  "div",
                                  { staticClass: "form-group" },
                                  [
                                    _c("label", [_vm._v("Reg No:")]),
                                    _vm._v(" "),
                                    _c("vs-input", {
                                      staticClass: "w-100",
                                      model: {
                                        value: _vm.searchData.reg_no,
                                        callback: function($$v) {
                                          _vm.$set(
                                            _vm.searchData,
                                            "reg_no",
                                            $$v
                                          )
                                        },
                                        expression: "searchData.reg_no"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "col-md-4" }, [
                                _c("div", { staticClass: "form-group" }, [
                                  _c("label", [_vm._v("Status:")]),
                                  _vm._v(" "),
                                  _c(
                                    "select",
                                    {
                                      directives: [
                                        {
                                          name: "model",
                                          rawName: "v-model",
                                          value: _vm.searchData.status,
                                          expression: "searchData.status"
                                        }
                                      ],
                                      staticClass: "form-control",
                                      on: {
                                        change: function($event) {
                                          var $$selectedVal = Array.prototype.filter
                                            .call(
                                              $event.target.options,
                                              function(o) {
                                                return o.selected
                                              }
                                            )
                                            .map(function(o) {
                                              var val =
                                                "_value" in o
                                                  ? o._value
                                                  : o.value
                                              return val
                                            })
                                          _vm.$set(
                                            _vm.searchData,
                                            "status",
                                            $event.target.multiple
                                              ? $$selectedVal
                                              : $$selectedVal[0]
                                          )
                                        }
                                      }
                                    },
                                    [
                                      _c("option", { domProps: { value: 1 } }, [
                                        _vm._v("active")
                                      ]),
                                      _vm._v(" "),
                                      _c("option", { domProps: { value: 2 } }, [
                                        _vm._v("in active")
                                      ])
                                    ]
                                  )
                                ])
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "col-md-6" }, [
                                _c("div", { staticClass: "form-group" }, [
                                  _c("label", [_vm._v("Route:")]),
                                  _vm._v(" "),
                                  _c(
                                    "select",
                                    {
                                      directives: [
                                        {
                                          name: "model",
                                          rawName: "v-model",
                                          value: _vm.searchData.route,
                                          expression: "searchData.route"
                                        }
                                      ],
                                      staticClass: "form-control",
                                      on: {
                                        change: function($event) {
                                          var $$selectedVal = Array.prototype.filter
                                            .call(
                                              $event.target.options,
                                              function(o) {
                                                return o.selected
                                              }
                                            )
                                            .map(function(o) {
                                              var val =
                                                "_value" in o
                                                  ? o._value
                                                  : o.value
                                              return val
                                            })
                                          _vm.$set(
                                            _vm.searchData,
                                            "route",
                                            $event.target.multiple
                                              ? $$selectedVal
                                              : $$selectedVal[0]
                                          )
                                        }
                                      }
                                    },
                                    _vm._l(_vm.routes, function(route) {
                                      return _c(
                                        "option",
                                        { domProps: { value: route.id } },
                                        [
                                          _vm._v(
                                            "\n                                                        " +
                                              _vm._s(route.value) +
                                              "\n                                                    "
                                          )
                                        ]
                                      )
                                    }),
                                    0
                                  )
                                ])
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "col-md-6" }, [
                                _c("div", { staticClass: "form-group" }, [
                                  _c("label", [_vm._v("Vehicle:")]),
                                  _vm._v(" "),
                                  _c(
                                    "select",
                                    {
                                      directives: [
                                        {
                                          name: "model",
                                          rawName: "v-model",
                                          value: _vm.searchData.vehicle_select,
                                          expression:
                                            "searchData.vehicle_select"
                                        }
                                      ],
                                      staticClass: "form-control",
                                      on: {
                                        change: function($event) {
                                          var $$selectedVal = Array.prototype.filter
                                            .call(
                                              $event.target.options,
                                              function(o) {
                                                return o.selected
                                              }
                                            )
                                            .map(function(o) {
                                              var val =
                                                "_value" in o
                                                  ? o._value
                                                  : o.value
                                              return val
                                            })
                                          _vm.$set(
                                            _vm.searchData,
                                            "vehicle_select",
                                            $event.target.multiple
                                              ? $$selectedVal
                                              : $$selectedVal[0]
                                          )
                                        }
                                      }
                                    },
                                    _vm._l(_vm.vehicles, function(vehicle) {
                                      return _c(
                                        "option",
                                        {
                                          domProps: {
                                            value: vehicle.vehicles_id
                                          }
                                        },
                                        [
                                          _vm._v(
                                            _vm._s(vehicle.number) +
                                              "\n                                                    "
                                          )
                                        ]
                                      )
                                    }),
                                    0
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
                                      return _vm.resetSearch()
                                    }
                                  }
                                },
                                [
                                  _vm._v(
                                    "\n                                        reset\n                                    "
                                  )
                                ]
                              )
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
                  { staticClass: "col-md-12 p-4" },
                  [
                    _c("data-table-transport", {
                      ref: "dataTableTransport",
                      attrs: {
                        headers: _vm.headers,
                        tableHeader: "user List",
                        suggestText:
                          "user Record list on table. Filter user using the filter.",
                        url: "/json/transport/user",
                        model: "route",
                        noDataMessage:
                          "No user data found. Please Filter user to show.",
                        hasSearch: true,
                        "has-multiple": true,
                        "has-pagination": true,
                        filterSection: true,
                        ajaxVariableSet: ["user"],
                        searchData: _vm.searchData
                      },
                      on: { "get-return-value": _vm.GetReturnValue },
                      scopedSlots: _vm._u([
                        {
                          key: "items",
                          fn: function(props) {
                            return [
                              _c(
                                "vs-td",
                                { attrs: { data: props.data.route } },
                                [
                                  _vm._v(
                                    "\n                                    " +
                                      _vm._s(props.data.route) +
                                      "\n                                "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-td",
                                { attrs: { data: props.data.vehicle } },
                                [
                                  _vm._v(
                                    "\n                                    " +
                                      _vm._s(props.data.vehicle) +
                                      "\n                                "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-td",
                                { attrs: { data: props.data.type } },
                                [
                                  _vm._v(
                                    "\n                                    " +
                                      _vm._s(
                                        props.data.type === 1
                                          ? "student"
                                          : "staff"
                                      ) +
                                      "\n                                "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-td",
                                { attrs: { data: props.data.memberreg } },
                                [
                                  _vm._v(
                                    "\n                                    " +
                                      _vm._s(props.data.memberreg) +
                                      "\n                                "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-td",
                                { attrs: { data: props.data.membername } },
                                [
                                  _vm._v(
                                    "\n                                    " +
                                      _vm._s(props.data.membername) +
                                      "\n                                "
                                  )
                                ]
                              )
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
          ])
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/src/views/custom/component/table/data-table-transport.vue":
/*!********************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/data-table-transport.vue ***!
  \********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _data_table_transport_vue_vue_type_template_id_e6cf4704___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./data-table-transport.vue?vue&type=template&id=e6cf4704& */ "./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=template&id=e6cf4704&");
/* harmony import */ var _data_table_transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./data-table-transport.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _data_table_transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _data_table_transport_vue_vue_type_template_id_e6cf4704___WEBPACK_IMPORTED_MODULE_0__["render"],
  _data_table_transport_vue_vue_type_template_id_e6cf4704___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/component/table/data-table-transport.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./data-table-transport.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_transport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=template&id=e6cf4704&":
/*!***************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=template&id=e6cf4704& ***!
  \***************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_transport_vue_vue_type_template_id_e6cf4704___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./data-table-transport.vue?vue&type=template&id=e6cf4704& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/data-table-transport.vue?vue&type=template&id=e6cf4704&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_transport_vue_vue_type_template_id_e6cf4704___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_transport_vue_vue_type_template_id_e6cf4704___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/src/views/custom/transport/user/detail.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/views/custom/transport/user/detail.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _detail_vue_vue_type_template_id_3bd972ca_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./detail.vue?vue&type=template&id=3bd972ca&scoped=true& */ "./resources/js/src/views/custom/transport/user/detail.vue?vue&type=template&id=3bd972ca&scoped=true&");
/* harmony import */ var _detail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./detail.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/transport/user/detail.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _detail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _detail_vue_vue_type_template_id_3bd972ca_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _detail_vue_vue_type_template_id_3bd972ca_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "3bd972ca",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/transport/user/detail.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/transport/user/detail.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/views/custom/transport/user/detail.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./detail.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/transport/user/detail.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/transport/user/detail.vue?vue&type=template&id=3bd972ca&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/transport/user/detail.vue?vue&type=template&id=3bd972ca&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_template_id_3bd972ca_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./detail.vue?vue&type=template&id=3bd972ca&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/transport/user/detail.vue?vue&type=template&id=3bd972ca&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_template_id_3bd972ca_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_detail_vue_vue_type_template_id_3bd972ca_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
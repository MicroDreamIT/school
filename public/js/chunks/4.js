(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/data-table.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/component/table/data-table.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************/
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      tableHeader1: [{
        name: 'Name',
        field: 'name',
        sort_key: 'name'
      }, {
        name: 'Email',
        field: 'email',
        sort_key: 'email'
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

/***/ "./node_modules/moment/locale sync recursive ^\\.\\/.*$":
/*!**************************************************!*\
  !*** ./node_modules/moment/locale sync ^\.\/.*$ ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"./af": "./node_modules/moment/locale/af.js",
	"./af.js": "./node_modules/moment/locale/af.js",
	"./ar": "./node_modules/moment/locale/ar.js",
	"./ar-dz": "./node_modules/moment/locale/ar-dz.js",
	"./ar-dz.js": "./node_modules/moment/locale/ar-dz.js",
	"./ar-kw": "./node_modules/moment/locale/ar-kw.js",
	"./ar-kw.js": "./node_modules/moment/locale/ar-kw.js",
	"./ar-ly": "./node_modules/moment/locale/ar-ly.js",
	"./ar-ly.js": "./node_modules/moment/locale/ar-ly.js",
	"./ar-ma": "./node_modules/moment/locale/ar-ma.js",
	"./ar-ma.js": "./node_modules/moment/locale/ar-ma.js",
	"./ar-sa": "./node_modules/moment/locale/ar-sa.js",
	"./ar-sa.js": "./node_modules/moment/locale/ar-sa.js",
	"./ar-tn": "./node_modules/moment/locale/ar-tn.js",
	"./ar-tn.js": "./node_modules/moment/locale/ar-tn.js",
	"./ar.js": "./node_modules/moment/locale/ar.js",
	"./az": "./node_modules/moment/locale/az.js",
	"./az.js": "./node_modules/moment/locale/az.js",
	"./be": "./node_modules/moment/locale/be.js",
	"./be.js": "./node_modules/moment/locale/be.js",
	"./bg": "./node_modules/moment/locale/bg.js",
	"./bg.js": "./node_modules/moment/locale/bg.js",
	"./bm": "./node_modules/moment/locale/bm.js",
	"./bm.js": "./node_modules/moment/locale/bm.js",
	"./bn": "./node_modules/moment/locale/bn.js",
	"./bn.js": "./node_modules/moment/locale/bn.js",
	"./bo": "./node_modules/moment/locale/bo.js",
	"./bo.js": "./node_modules/moment/locale/bo.js",
	"./br": "./node_modules/moment/locale/br.js",
	"./br.js": "./node_modules/moment/locale/br.js",
	"./bs": "./node_modules/moment/locale/bs.js",
	"./bs.js": "./node_modules/moment/locale/bs.js",
	"./ca": "./node_modules/moment/locale/ca.js",
	"./ca.js": "./node_modules/moment/locale/ca.js",
	"./cs": "./node_modules/moment/locale/cs.js",
	"./cs.js": "./node_modules/moment/locale/cs.js",
	"./cv": "./node_modules/moment/locale/cv.js",
	"./cv.js": "./node_modules/moment/locale/cv.js",
	"./cy": "./node_modules/moment/locale/cy.js",
	"./cy.js": "./node_modules/moment/locale/cy.js",
	"./da": "./node_modules/moment/locale/da.js",
	"./da.js": "./node_modules/moment/locale/da.js",
	"./de": "./node_modules/moment/locale/de.js",
	"./de-at": "./node_modules/moment/locale/de-at.js",
	"./de-at.js": "./node_modules/moment/locale/de-at.js",
	"./de-ch": "./node_modules/moment/locale/de-ch.js",
	"./de-ch.js": "./node_modules/moment/locale/de-ch.js",
	"./de.js": "./node_modules/moment/locale/de.js",
	"./dv": "./node_modules/moment/locale/dv.js",
	"./dv.js": "./node_modules/moment/locale/dv.js",
	"./el": "./node_modules/moment/locale/el.js",
	"./el.js": "./node_modules/moment/locale/el.js",
	"./en-SG": "./node_modules/moment/locale/en-SG.js",
	"./en-SG.js": "./node_modules/moment/locale/en-SG.js",
	"./en-au": "./node_modules/moment/locale/en-au.js",
	"./en-au.js": "./node_modules/moment/locale/en-au.js",
	"./en-ca": "./node_modules/moment/locale/en-ca.js",
	"./en-ca.js": "./node_modules/moment/locale/en-ca.js",
	"./en-gb": "./node_modules/moment/locale/en-gb.js",
	"./en-gb.js": "./node_modules/moment/locale/en-gb.js",
	"./en-ie": "./node_modules/moment/locale/en-ie.js",
	"./en-ie.js": "./node_modules/moment/locale/en-ie.js",
	"./en-il": "./node_modules/moment/locale/en-il.js",
	"./en-il.js": "./node_modules/moment/locale/en-il.js",
	"./en-nz": "./node_modules/moment/locale/en-nz.js",
	"./en-nz.js": "./node_modules/moment/locale/en-nz.js",
	"./eo": "./node_modules/moment/locale/eo.js",
	"./eo.js": "./node_modules/moment/locale/eo.js",
	"./es": "./node_modules/moment/locale/es.js",
	"./es-do": "./node_modules/moment/locale/es-do.js",
	"./es-do.js": "./node_modules/moment/locale/es-do.js",
	"./es-us": "./node_modules/moment/locale/es-us.js",
	"./es-us.js": "./node_modules/moment/locale/es-us.js",
	"./es.js": "./node_modules/moment/locale/es.js",
	"./et": "./node_modules/moment/locale/et.js",
	"./et.js": "./node_modules/moment/locale/et.js",
	"./eu": "./node_modules/moment/locale/eu.js",
	"./eu.js": "./node_modules/moment/locale/eu.js",
	"./fa": "./node_modules/moment/locale/fa.js",
	"./fa.js": "./node_modules/moment/locale/fa.js",
	"./fi": "./node_modules/moment/locale/fi.js",
	"./fi.js": "./node_modules/moment/locale/fi.js",
	"./fo": "./node_modules/moment/locale/fo.js",
	"./fo.js": "./node_modules/moment/locale/fo.js",
	"./fr": "./node_modules/moment/locale/fr.js",
	"./fr-ca": "./node_modules/moment/locale/fr-ca.js",
	"./fr-ca.js": "./node_modules/moment/locale/fr-ca.js",
	"./fr-ch": "./node_modules/moment/locale/fr-ch.js",
	"./fr-ch.js": "./node_modules/moment/locale/fr-ch.js",
	"./fr.js": "./node_modules/moment/locale/fr.js",
	"./fy": "./node_modules/moment/locale/fy.js",
	"./fy.js": "./node_modules/moment/locale/fy.js",
	"./ga": "./node_modules/moment/locale/ga.js",
	"./ga.js": "./node_modules/moment/locale/ga.js",
	"./gd": "./node_modules/moment/locale/gd.js",
	"./gd.js": "./node_modules/moment/locale/gd.js",
	"./gl": "./node_modules/moment/locale/gl.js",
	"./gl.js": "./node_modules/moment/locale/gl.js",
	"./gom-latn": "./node_modules/moment/locale/gom-latn.js",
	"./gom-latn.js": "./node_modules/moment/locale/gom-latn.js",
	"./gu": "./node_modules/moment/locale/gu.js",
	"./gu.js": "./node_modules/moment/locale/gu.js",
	"./he": "./node_modules/moment/locale/he.js",
	"./he.js": "./node_modules/moment/locale/he.js",
	"./hi": "./node_modules/moment/locale/hi.js",
	"./hi.js": "./node_modules/moment/locale/hi.js",
	"./hr": "./node_modules/moment/locale/hr.js",
	"./hr.js": "./node_modules/moment/locale/hr.js",
	"./hu": "./node_modules/moment/locale/hu.js",
	"./hu.js": "./node_modules/moment/locale/hu.js",
	"./hy-am": "./node_modules/moment/locale/hy-am.js",
	"./hy-am.js": "./node_modules/moment/locale/hy-am.js",
	"./id": "./node_modules/moment/locale/id.js",
	"./id.js": "./node_modules/moment/locale/id.js",
	"./is": "./node_modules/moment/locale/is.js",
	"./is.js": "./node_modules/moment/locale/is.js",
	"./it": "./node_modules/moment/locale/it.js",
	"./it-ch": "./node_modules/moment/locale/it-ch.js",
	"./it-ch.js": "./node_modules/moment/locale/it-ch.js",
	"./it.js": "./node_modules/moment/locale/it.js",
	"./ja": "./node_modules/moment/locale/ja.js",
	"./ja.js": "./node_modules/moment/locale/ja.js",
	"./jv": "./node_modules/moment/locale/jv.js",
	"./jv.js": "./node_modules/moment/locale/jv.js",
	"./ka": "./node_modules/moment/locale/ka.js",
	"./ka.js": "./node_modules/moment/locale/ka.js",
	"./kk": "./node_modules/moment/locale/kk.js",
	"./kk.js": "./node_modules/moment/locale/kk.js",
	"./km": "./node_modules/moment/locale/km.js",
	"./km.js": "./node_modules/moment/locale/km.js",
	"./kn": "./node_modules/moment/locale/kn.js",
	"./kn.js": "./node_modules/moment/locale/kn.js",
	"./ko": "./node_modules/moment/locale/ko.js",
	"./ko.js": "./node_modules/moment/locale/ko.js",
	"./ku": "./node_modules/moment/locale/ku.js",
	"./ku.js": "./node_modules/moment/locale/ku.js",
	"./ky": "./node_modules/moment/locale/ky.js",
	"./ky.js": "./node_modules/moment/locale/ky.js",
	"./lb": "./node_modules/moment/locale/lb.js",
	"./lb.js": "./node_modules/moment/locale/lb.js",
	"./lo": "./node_modules/moment/locale/lo.js",
	"./lo.js": "./node_modules/moment/locale/lo.js",
	"./lt": "./node_modules/moment/locale/lt.js",
	"./lt.js": "./node_modules/moment/locale/lt.js",
	"./lv": "./node_modules/moment/locale/lv.js",
	"./lv.js": "./node_modules/moment/locale/lv.js",
	"./me": "./node_modules/moment/locale/me.js",
	"./me.js": "./node_modules/moment/locale/me.js",
	"./mi": "./node_modules/moment/locale/mi.js",
	"./mi.js": "./node_modules/moment/locale/mi.js",
	"./mk": "./node_modules/moment/locale/mk.js",
	"./mk.js": "./node_modules/moment/locale/mk.js",
	"./ml": "./node_modules/moment/locale/ml.js",
	"./ml.js": "./node_modules/moment/locale/ml.js",
	"./mn": "./node_modules/moment/locale/mn.js",
	"./mn.js": "./node_modules/moment/locale/mn.js",
	"./mr": "./node_modules/moment/locale/mr.js",
	"./mr.js": "./node_modules/moment/locale/mr.js",
	"./ms": "./node_modules/moment/locale/ms.js",
	"./ms-my": "./node_modules/moment/locale/ms-my.js",
	"./ms-my.js": "./node_modules/moment/locale/ms-my.js",
	"./ms.js": "./node_modules/moment/locale/ms.js",
	"./mt": "./node_modules/moment/locale/mt.js",
	"./mt.js": "./node_modules/moment/locale/mt.js",
	"./my": "./node_modules/moment/locale/my.js",
	"./my.js": "./node_modules/moment/locale/my.js",
	"./nb": "./node_modules/moment/locale/nb.js",
	"./nb.js": "./node_modules/moment/locale/nb.js",
	"./ne": "./node_modules/moment/locale/ne.js",
	"./ne.js": "./node_modules/moment/locale/ne.js",
	"./nl": "./node_modules/moment/locale/nl.js",
	"./nl-be": "./node_modules/moment/locale/nl-be.js",
	"./nl-be.js": "./node_modules/moment/locale/nl-be.js",
	"./nl.js": "./node_modules/moment/locale/nl.js",
	"./nn": "./node_modules/moment/locale/nn.js",
	"./nn.js": "./node_modules/moment/locale/nn.js",
	"./pa-in": "./node_modules/moment/locale/pa-in.js",
	"./pa-in.js": "./node_modules/moment/locale/pa-in.js",
	"./pl": "./node_modules/moment/locale/pl.js",
	"./pl.js": "./node_modules/moment/locale/pl.js",
	"./pt": "./node_modules/moment/locale/pt.js",
	"./pt-br": "./node_modules/moment/locale/pt-br.js",
	"./pt-br.js": "./node_modules/moment/locale/pt-br.js",
	"./pt.js": "./node_modules/moment/locale/pt.js",
	"./ro": "./node_modules/moment/locale/ro.js",
	"./ro.js": "./node_modules/moment/locale/ro.js",
	"./ru": "./node_modules/moment/locale/ru.js",
	"./ru.js": "./node_modules/moment/locale/ru.js",
	"./sd": "./node_modules/moment/locale/sd.js",
	"./sd.js": "./node_modules/moment/locale/sd.js",
	"./se": "./node_modules/moment/locale/se.js",
	"./se.js": "./node_modules/moment/locale/se.js",
	"./si": "./node_modules/moment/locale/si.js",
	"./si.js": "./node_modules/moment/locale/si.js",
	"./sk": "./node_modules/moment/locale/sk.js",
	"./sk.js": "./node_modules/moment/locale/sk.js",
	"./sl": "./node_modules/moment/locale/sl.js",
	"./sl.js": "./node_modules/moment/locale/sl.js",
	"./sq": "./node_modules/moment/locale/sq.js",
	"./sq.js": "./node_modules/moment/locale/sq.js",
	"./sr": "./node_modules/moment/locale/sr.js",
	"./sr-cyrl": "./node_modules/moment/locale/sr-cyrl.js",
	"./sr-cyrl.js": "./node_modules/moment/locale/sr-cyrl.js",
	"./sr.js": "./node_modules/moment/locale/sr.js",
	"./ss": "./node_modules/moment/locale/ss.js",
	"./ss.js": "./node_modules/moment/locale/ss.js",
	"./sv": "./node_modules/moment/locale/sv.js",
	"./sv.js": "./node_modules/moment/locale/sv.js",
	"./sw": "./node_modules/moment/locale/sw.js",
	"./sw.js": "./node_modules/moment/locale/sw.js",
	"./ta": "./node_modules/moment/locale/ta.js",
	"./ta.js": "./node_modules/moment/locale/ta.js",
	"./te": "./node_modules/moment/locale/te.js",
	"./te.js": "./node_modules/moment/locale/te.js",
	"./tet": "./node_modules/moment/locale/tet.js",
	"./tet.js": "./node_modules/moment/locale/tet.js",
	"./tg": "./node_modules/moment/locale/tg.js",
	"./tg.js": "./node_modules/moment/locale/tg.js",
	"./th": "./node_modules/moment/locale/th.js",
	"./th.js": "./node_modules/moment/locale/th.js",
	"./tl-ph": "./node_modules/moment/locale/tl-ph.js",
	"./tl-ph.js": "./node_modules/moment/locale/tl-ph.js",
	"./tlh": "./node_modules/moment/locale/tlh.js",
	"./tlh.js": "./node_modules/moment/locale/tlh.js",
	"./tr": "./node_modules/moment/locale/tr.js",
	"./tr.js": "./node_modules/moment/locale/tr.js",
	"./tzl": "./node_modules/moment/locale/tzl.js",
	"./tzl.js": "./node_modules/moment/locale/tzl.js",
	"./tzm": "./node_modules/moment/locale/tzm.js",
	"./tzm-latn": "./node_modules/moment/locale/tzm-latn.js",
	"./tzm-latn.js": "./node_modules/moment/locale/tzm-latn.js",
	"./tzm.js": "./node_modules/moment/locale/tzm.js",
	"./ug-cn": "./node_modules/moment/locale/ug-cn.js",
	"./ug-cn.js": "./node_modules/moment/locale/ug-cn.js",
	"./uk": "./node_modules/moment/locale/uk.js",
	"./uk.js": "./node_modules/moment/locale/uk.js",
	"./ur": "./node_modules/moment/locale/ur.js",
	"./ur.js": "./node_modules/moment/locale/ur.js",
	"./uz": "./node_modules/moment/locale/uz.js",
	"./uz-latn": "./node_modules/moment/locale/uz-latn.js",
	"./uz-latn.js": "./node_modules/moment/locale/uz-latn.js",
	"./uz.js": "./node_modules/moment/locale/uz.js",
	"./vi": "./node_modules/moment/locale/vi.js",
	"./vi.js": "./node_modules/moment/locale/vi.js",
	"./x-pseudo": "./node_modules/moment/locale/x-pseudo.js",
	"./x-pseudo.js": "./node_modules/moment/locale/x-pseudo.js",
	"./yo": "./node_modules/moment/locale/yo.js",
	"./yo.js": "./node_modules/moment/locale/yo.js",
	"./zh-cn": "./node_modules/moment/locale/zh-cn.js",
	"./zh-cn.js": "./node_modules/moment/locale/zh-cn.js",
	"./zh-hk": "./node_modules/moment/locale/zh-hk.js",
	"./zh-hk.js": "./node_modules/moment/locale/zh-hk.js",
	"./zh-tw": "./node_modules/moment/locale/zh-tw.js",
	"./zh-tw.js": "./node_modules/moment/locale/zh-tw.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	var id = map[req];
	if(!(id + 1)) { // check for number or string
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return id;
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./node_modules/moment/locale sync recursive ^\\.\\/.*$";

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/data-table.vue?vue&type=template&id=43c7b53c&":
/*!***********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/src/views/custom/component/table/data-table.vue?vue&type=template&id=43c7b53c& ***!
  \***********************************************************************************************************************************************************************************************************************************/
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
        "vs-table",
        {
          attrs: {
            sst: true,
            total: _vm.totalItems,
            pagination: "",
            multiple: "",
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
                          [_vm._t("items", null, { data: tr })],
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
            _vm._l(_vm.headers, function(thead, indx) {
              return _c(
                "vs-th",
                { key: indx, attrs: { "sort-key": thead.sort_key } },
                [
                  _vm._v(
                    "\n                " + _vm._s(thead.name) + "\n            "
                  )
                ]
              )
            }),
            1
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
                  _c("vs-tab", { attrs: { label: "Transaction" } }, [
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
                  _c("vs-tab", { attrs: { label: "Staff Payroll" } }, [
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
                  _c("vs-tab", { attrs: { label: "Transaction" } }, [
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
                  _c("vs-tab", { attrs: { label: "Staff Payroll" } }, [
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
                  _c("vs-tab", { attrs: { label: "Transaction" } }, [
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
                  _c("vs-tab", { attrs: { label: "Staff Payroll" } }, [
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
                  _c("vs-tab", { attrs: { label: "Transaction" } }, [
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

/***/ "./resources/js/src/views/custom/component/table/data-table.vue":
/*!**********************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/data-table.vue ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _data_table_vue_vue_type_template_id_43c7b53c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./data-table.vue?vue&type=template&id=43c7b53c& */ "./resources/js/src/views/custom/component/table/data-table.vue?vue&type=template&id=43c7b53c&");
/* harmony import */ var _data_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./data-table.vue?vue&type=script&lang=js& */ "./resources/js/src/views/custom/component/table/data-table.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _data_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _data_table_vue_vue_type_template_id_43c7b53c___WEBPACK_IMPORTED_MODULE_0__["render"],
  _data_table_vue_vue_type_template_id_43c7b53c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/views/custom/component/table/data-table.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/src/views/custom/component/table/data-table.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/data-table.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./data-table.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/data-table.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/views/custom/component/table/data-table.vue?vue&type=template&id=43c7b53c&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/src/views/custom/component/table/data-table.vue?vue&type=template&id=43c7b53c& ***!
  \*****************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_vue_vue_type_template_id_43c7b53c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./data-table.vue?vue&type=template&id=43c7b53c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/src/views/custom/component/table/data-table.vue?vue&type=template&id=43c7b53c&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_vue_vue_type_template_id_43c7b53c___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_data_table_vue_vue_type_template_id_43c7b53c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



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
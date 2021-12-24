"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_accruals_create_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/accruals/create.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/accruals/create.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Create",
  data: function data() {
    return {
      OKPO_F: '43461729',
      NAME_F: 'ПП "Українська ПМ"',
      NAME_KORR: '',
      DATA_DOC: null,
      SUM_IN: null,
      N_P: '',
      CFO: null,
      D_R: null
    };
  },
  methods: {
    addAccruals: function addAccruals() {
      axios.post('/api/accruals/store', {
        OKPO_F: this.OKPO_F,
        NAME_F: this.NAME_F,
        NAME_KORR: this.NAME_KORR,
        DATA_DOC: this.DATA_DOC,
        SUM_IN: this.SUM_IN,
        N_P: this.N_P,
        CFO: this.CFO,
        D_R: this.D_R
      }).then(function (res) {
        console.log(res);
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/accruals/create.vue":
/*!*****************************************************!*\
  !*** ./resources/js/components/accruals/create.vue ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _create_vue_vue_type_template_id_5d5df9cc_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./create.vue?vue&type=template&id=5d5df9cc&scoped=true& */ "./resources/js/components/accruals/create.vue?vue&type=template&id=5d5df9cc&scoped=true&");
/* harmony import */ var _create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./create.vue?vue&type=script&lang=js& */ "./resources/js/components/accruals/create.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _create_vue_vue_type_template_id_5d5df9cc_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _create_vue_vue_type_template_id_5d5df9cc_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "5d5df9cc",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/accruals/create.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/accruals/create.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/accruals/create.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./create.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/accruals/create.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/accruals/create.vue?vue&type=template&id=5d5df9cc&scoped=true&":
/*!************************************************************************************************!*\
  !*** ./resources/js/components/accruals/create.vue?vue&type=template&id=5d5df9cc&scoped=true& ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_5d5df9cc_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_5d5df9cc_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_5d5df9cc_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./create.vue?vue&type=template&id=5d5df9cc&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/accruals/create.vue?vue&type=template&id=5d5df9cc&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/accruals/create.vue?vue&type=template&id=5d5df9cc&scoped=true&":
/*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/accruals/create.vue?vue&type=template&id=5d5df9cc&scoped=true& ***!
  \***************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _vm._v("\n    333333333\n    "),
    _c("table", { staticClass: "table" }, [
      _vm._m(0),
      _vm._v(" "),
      _c("tbody", [
        _c("tr", [
          _c("th", { attrs: { scope: "row" } }),
          _vm._v(" "),
          _c("td", [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.OKPO_F,
                  expression: "OKPO_F",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", readonly: "" },
              domProps: { value: _vm.OKPO_F },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.OKPO_F = $event.target.value
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("td", [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.NAME_F,
                  expression: "NAME_F",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", readonly: "" },
              domProps: { value: _vm.NAME_F },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.NAME_F = $event.target.value
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("td", [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.NAME_KORR,
                  expression: "NAME_KORR",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", placeholder: "Контрагент" },
              domProps: { value: _vm.NAME_KORR },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.NAME_KORR = $event.target.value
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("td", [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.DATA_DOC,
                  expression: "DATA_DOC",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", placeholder: "Дата" },
              domProps: { value: _vm.DATA_DOC },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.DATA_DOC = $event.target.value
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("td", [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.SUM_IN,
                  expression: "SUM_IN",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "number", placeholder: "Сумма" },
              domProps: { value: _vm.SUM_IN },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.SUM_IN = $event.target.value
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("td", [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.N_P,
                  expression: "N_P",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", placeholder: "Назначение платежа" },
              domProps: { value: _vm.N_P },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.N_P = $event.target.value
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("td", [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.CFO,
                  expression: "CFO",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", placeholder: "ЦФО" },
              domProps: { value: _vm.CFO },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.CFO = $event.target.value
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("td", [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.D_R,
                  expression: "D_R",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", placeholder: "БДР" },
              domProps: { value: _vm.D_R },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.D_R = $event.target.value
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("td", [
            _c(
              "a",
              {
                staticClass: "btn btn-success",
                attrs: { href: "#" },
                on: {
                  click: function ($event) {
                    $event.preventDefault()
                    return _vm.addAccruals.apply(null, arguments)
                  },
                },
              },
              [_vm._v("Добавить")]
            ),
          ]),
        ]),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { attrs: { scope: "col" } }, [_vm._v("#")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("ОКПО предприятия")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [
          _vm._v("Наименование предприятия"),
        ]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Контрагент")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Дата")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Сумма")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Назначение платежа")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("ЦФО")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("БДР_4")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Добавить")]),
      ]),
    ])
  },
]
render._withStripped = true



/***/ })

}]);
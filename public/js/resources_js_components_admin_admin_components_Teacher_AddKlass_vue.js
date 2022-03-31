"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_admin_admin_components_Teacher_AddKlass_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
// create array to store temporary ids
var selectedKlasses = [];
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "AddKlass",
  components: {},
  data: function data() {
    return {
      klasses: null
    };
  },
  mounted: function mounted() {
    this.getKlasses();
  },
  methods: {
    cancelClick: function cancelClick() {
      this.$parent.add = false;
    },
    getKlasses: function getKlasses() {
      var _this = this;

      axios.get('/api/admin/klasses').then(function (res) {
        _this.klasses = res.data;
      });
    },
    clickChoose: function clickChoose(id) {
      var b = true;

      var _iterator = _createForOfIteratorHelper(selectedKlasses),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var item = _step.value;

          if (id === item) {
            selectedKlasses = selectedKlasses.filter(function (f) {
              return f !== id;
            });
            b = false;
          }
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }

      if (b) {
        selectedKlasses.push(id);
      }
    },
    submitClick: function submitClick() {
      var _this2 = this;

      axios.post("/api/admin/teachers/".concat(this.$parent.teacher.id, "/addKlasses"), {
        klasses: selectedKlasses
      }).then(function (res) {
        _this2.$parent.add = false;
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/admin/admin_components/Teacher/AddKlass.vue":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/admin/admin_components/Teacher/AddKlass.vue ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _AddKlass_vue_vue_type_template_id_c8065b4c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AddKlass.vue?vue&type=template&id=c8065b4c&scoped=true& */ "./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=template&id=c8065b4c&scoped=true&");
/* harmony import */ var _AddKlass_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AddKlass.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _AddKlass_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _AddKlass_vue_vue_type_template_id_c8065b4c_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _AddKlass_vue_vue_type_template_id_c8065b4c_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "c8065b4c",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/admin_components/Teacher/AddKlass.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AddKlass_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AddKlass.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AddKlass_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=template&id=c8065b4c&scoped=true&":
/*!************************************************************************************************************************!*\
  !*** ./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=template&id=c8065b4c&scoped=true& ***!
  \************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AddKlass_vue_vue_type_template_id_c8065b4c_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AddKlass_vue_vue_type_template_id_c8065b4c_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AddKlass_vue_vue_type_template_id_c8065b4c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AddKlass.vue?vue&type=template&id=c8065b4c&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=template&id=c8065b4c&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=template&id=c8065b4c&scoped=true&":
/*!***************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/admin_components/Teacher/AddKlass.vue?vue&type=template&id=c8065b4c&scoped=true& ***!
  \***************************************************************************************************************************************************************************************************************************************************************/
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
  return _vm.klasses
    ? _c(
        "div",
        { staticClass: "d-grid gap-2 col-11 mx-auto" },
        [
          _vm._l(_vm.klasses, function (klass) {
            return _c("div", { staticClass: "form-check" }, [
              _c("input", {
                staticClass: "form-check-input",
                attrs: { type: "checkbox", value: "", id: "flexCheckDefault" },
                on: {
                  click: function ($event) {
                    return _vm.clickChoose(klass.id)
                  },
                },
              }),
              _vm._v(" "),
              _c(
                "label",
                {
                  staticClass: "form-check-label",
                  attrs: { for: "flexCheckDefault" },
                },
                [_c("b", [_vm._v(_vm._s(klass.name))])]
              ),
            ])
          }),
          _vm._v(" "),
          _c(
            "tr",
            {
              attrs: {
                "data-widget": "expandable-table",
                "aria-expanded": "true",
              },
            },
            [
              _c("td", { staticClass: "gap-2 col-6 mx-auto" }, [
                _c(
                  "button",
                  {
                    staticClass: "btn btn-primary btn-sm",
                    attrs: { type: "button" },
                    on: {
                      click: function ($event) {
                        $event.preventDefault()
                        return _vm.submitClick()
                      },
                    },
                  },
                  [_vm._v("Small button")]
                ),
              ]),
              _vm._v(" "),
              _c("td", { staticClass: "gap-2 col-6 mx-auto" }, [
                _c(
                  "button",
                  {
                    staticClass: "btn btn-secondary btn-sm",
                    attrs: { type: "button" },
                    on: {
                      click: function ($event) {
                        $event.preventDefault()
                        return _vm.cancelClick()
                      },
                    },
                  },
                  [_vm._v("жокко чыгаруу")]
                ),
              ]),
            ]
          ),
        ],
        2
      )
    : _vm._e()
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);
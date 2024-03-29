"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

/**
 * WordPress dependencies.
 */
var Component = wp.element.Component;
var registerPlugin = wp.plugins.registerPlugin;
var _wp$data = wp.data,
    select = _wp$data.select,
    subscribe = _wp$data.subscribe;
var addFilter = wp.hooks.addFilter;
var cscoGutenberg = {};

(function () {
  var $this;
  cscoGutenberg = {
    /*
     * Variables
     */
    content: false,
    wrapper: false,
    template: null,
    singularLayout: null,

    /*
     * Initialize
     */
    init: function init(e) {
      $this = cscoGutenberg; // Find content and wrapper elements.

      $this.content = document.querySelector('.block-editor-editor-skeleton__content, .interface-interface-skeleton__content');
      $this.wrapper = document.querySelector('.editor-styles-wrapper');
      $this.singularLayout = document.getElementById('csco_singular_layout'); // Init events.

      if ('undefined' === typeof window.cscoGutenbergInit) {
        $this.events(e);
        window.cscoGutenbergInit = true;
      }
    },

    /*
     * Events
     */
    events: function events(e) {
      if ($this.singularLayout) {
        $this.singularLayout.addEventListener('change', $this.changeLayout);
      } // Update Breakpoints during resize.


      window.addEventListener('resize', function (e) {
        $this.initBreakpoints();
        $this.initChanges();
      }); // Update template.

      subscribe(function () {
        var newTemplate = select('core/editor').getEditedPostAttribute('template');

        if (newTemplate !== $this.template) {
          $this.template = newTemplate;
          $this.initPageTemplate();
        }
      }); // Update Breakpoints.

      var observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
          if (mutation.oldValue !== mutation.target.classList.value) {
            $this.initBreakpoints();
            $this.initChanges();
          }
        });
      });
      observer.observe(document.getElementsByTagName('body')[0], {
        attributes: true,
        subtree: false,
        attributeOldValue: true,
        attributeFilter: ["class"]
      });
      observer.observe(document.getElementsByClassName('edit-post-layout')[0], {
        attributes: true,
        subtree: false,
        attributeOldValue: true,
        attributeFilter: ["class"]
      });
    },

    /*
     * Get page template
     */
    getPageTemplate: function getPageTemplate() {
      return select('core/editor').getEditedPostAttribute('template');
    },

    /*
     * Initialize changes
     */
    initChanges: function initChanges() {
      setTimeout(function () {
        document.body.dispatchEvent(new Event('editor-render'));
      }, 200);
    },

    /*
     * Initialize page template
     */
    initPageTemplate: function initPageTemplate() {
      if ('template-canvas-fullwidth.php' === $this.getPageTemplate()) {
        document.body.classList.add('template-canvas-fullwidth');
      } else {
        document.body.classList.remove('template-canvas-fullwidth');
      }

      if ($this.singularLayout) {
        $this.singularLayout.dispatchEvent(new Event('change'));
      }
    },

    /*
     * Initialize the breakpoints system
     */
    initBreakpoints: function initBreakpoints() {
      if ('undefined' === typeof $this) {
        return;
      }

      if (!$this.wrapper || !$this.content) {
        return;
      } // Default breakpoints that should apply to all observed
      // elements that don't define their own custom breakpoints.


      var breakpoints = {
        'cs-breakpoint-up-760px': 760,
        'cs-breakpoint-up-1020px': 1020,
        'cs-breakpoint-up-1120px': 1120,
        'cs-breakpoint-up-1240px': 1240,
        'cs-breakpoint-up-1920px': 1920
      }; // Update the matching breakpoints on the observed element.

      Object.keys(breakpoints).forEach(function (breakpoint) {
        var minWidth = breakpoints[breakpoint];

        if ($this.wrapper.clientWidth >= minWidth) {
          $this.content.classList.add(breakpoint);
        } else {
          $this.content.classList.remove(breakpoint);
        }
      });
    },

    /**
     * Init page layout.
     */
    initLayout: function initLayout() {
      if ('undefined' === typeof $this || !$this.wrapper) {
        return;
      }

      $this.wrapper.classList.add('cs-editor-styles-wrapper');

      if ('template-canvas-fullwidth.php' === $this.getPageTemplate()) {
        $this.wrapper.classList.add('layout-fullwidth');
      } else {
        $this.wrapper.classList.add(cscoGWrapper.page_layout);
      }

      $this.wrapper.classList.add(cscoGWrapper.post_type);
      $this.wrapper.classList.add(cscoGWrapper.layoute_narrow);
      $this.wrapper.classList.add(cscoGWrapper.post_sidebar);
      $this.wrapper.classList.add(cscoGWrapper.style_align);
      $this.wrapper.classList.add(cscoGWrapper.section_heading);
      document.body.classList.add(cscoGWrapper.legacy_features);
    },

    /**
     * Get new page layout.
     */
    newLayout: function newLayout(layout) {
      if ('layout-sidebar-right' === layout || 'layout-sidebar-left' === layout) {
        return 'layout-nofullwidth';
      } else if ('layout-fullwidth' === layout) {
        return 'layout-fullwidth';
      } else {
        return cscoGWrapper.default_layout;
      }
    },

    /**
     * Update when page layout has changed.
     */
    changeLayout: function changeLayout() {
      var layout = this.value || this.options[this.selectedIndex].value;

      if ('template-canvas-fullwidth.php' === $this.getPageTemplate()) {
        layout = 'layout-fullwidth';
      }

      if ($this.newLayout(layout) === cscoGWrapper.page_layout) {
        return;
      }

      $this.wrapper.classList.remove('layout-fullwidth');
      $this.wrapper.classList.remove('layout-nofullwidth');

      if ('layout-sidebar-right' === layout || 'layout-sidebar-left' === layout) {
        cscoGWrapper.page_layout = 'layout-nofullwidth';
        $this.wrapper.classList.add('layout-nofullwidth');
      } else if ('layout-fullwidth' === layout) {
        cscoGWrapper.page_layout = 'layout-fullwidth';
        $this.wrapper.classList.add('layout-fullwidth');
      } else {
        cscoGWrapper.page_layout = cscoGWrapper.default_layout;
        $this.wrapper.classList.add(cscoGWrapper.default_layout);
      }

      $this.initChanges();
    }
  };
})();
/**
 * Gutenberg Init
 */


var cscoGutenbergComponent = /*#__PURE__*/function (_Component) {
  _inherits(cscoGutenbergComponent, _Component);

  var _super = _createSuper(cscoGutenbergComponent);

  function cscoGutenbergComponent() {
    _classCallCheck(this, cscoGutenbergComponent);

    return _super.apply(this, arguments);
  }

  _createClass(cscoGutenbergComponent, [{
    key: "componentDidMount",
    value:
    /**
     * Add initial class.
     */
    function componentDidMount() {
      // Initialize.
      cscoGutenberg.init(); // Initialize Page Template.

      cscoGutenberg.initPageTemplate(); // Initialize Page Layout.

      cscoGutenberg.initLayout(); // Initialize Breakpoints

      cscoGutenberg.initBreakpoints();
    }
  }, {
    key: "componentDidUpdate",
    value: function componentDidUpdate() {
      // Initialize.
      cscoGutenberg.init(); // Initialize Page Template.

      cscoGutenberg.initPageTemplate(); // Update Page Layout.

      cscoGutenberg.initLayout(); // Update Breakpoints

      cscoGutenberg.initBreakpoints();
    }
  }, {
    key: "render",
    value: function render() {
      return null;
    }
  }]);

  return cscoGutenbergComponent;
}(Component);

registerPlugin('csco-editor-wrapper', {
  render: cscoGutenbergComponent
});
/**
 * Subscribe change scheme.
 */

if ('undefined' !== typeof csSchemeLocalize) {
  var currentCsScheme;
  wp.data.subscribe(function () {
    if (!wp.data.select('canvas/scheme')) {
      return;
    }

    var scheme = wp.data.select('canvas/scheme').getScheme();

    if (currentCsScheme === scheme) {
      return;
    }

    if ('dark' === scheme) {
      document.getElementById('csco-customizer-output-dark-styles').removeAttribute('media');
      document.getElementById('csco-customizer-output-default-styles').setAttribute('media', "max-width: 1px");
    } else {
      document.getElementById('csco-customizer-output-default-styles').removeAttribute('media');
      document.getElementById('csco-customizer-output-dark-styles').setAttribute('media', "max-width: 1px");
    }

    currentCsScheme = scheme;
  });
}
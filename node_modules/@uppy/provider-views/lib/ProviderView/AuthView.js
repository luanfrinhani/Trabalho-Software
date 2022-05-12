function _inheritsLoose(subClass, superClass) { subClass.prototype = Object.create(superClass.prototype); subClass.prototype.constructor = subClass; _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

var _require = require('preact'),
    h = _require.h,
    Component = _require.Component;

var AuthView = /*#__PURE__*/function (_Component) {
  _inheritsLoose(AuthView, _Component);

  function AuthView() {
    return _Component.apply(this, arguments) || this;
  }

  var _proto = AuthView.prototype;

  _proto.render = function render() {
    var pluginNameComponent = h("span", {
      className: "uppy-Provider-authTitleName"
    }, this.props.pluginName, h("br", null));
    return h("div", {
      className: "uppy-Provider-auth"
    }, h("div", {
      className: "uppy-Provider-authIcon"
    }, this.props.pluginIcon()), h("div", {
      className: "uppy-Provider-authTitle"
    }, this.props.i18nArray('authenticateWithTitle', {
      pluginName: pluginNameComponent
    })), h("button", {
      type: "button",
      className: "uppy-u-reset uppy-c-btn uppy-c-btn-primary uppy-Provider-authBtn",
      onClick: this.props.handleAuth,
      "data-uppy-super-focusable": true
    }, this.props.i18nArray('authenticateWith', {
      pluginName: this.props.pluginName
    })));
  };

  return AuthView;
}(Component);

module.exports = AuthView;
function _inheritsLoose(subClass, superClass) { subClass.prototype = Object.create(superClass.prototype); subClass.prototype.constructor = subClass; _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

var _require = require('preact'),
    Component = _require.Component;

module.exports = /*#__PURE__*/function (_Component) {
  _inheritsLoose(CloseWrapper, _Component);

  function CloseWrapper() {
    return _Component.apply(this, arguments) || this;
  }

  var _proto = CloseWrapper.prototype;

  _proto.componentWillUnmount = function componentWillUnmount() {
    this.props.onUnmount();
  };

  _proto.render = function render() {
    return this.props.children[0];
  };

  return CloseWrapper;
}(Component);
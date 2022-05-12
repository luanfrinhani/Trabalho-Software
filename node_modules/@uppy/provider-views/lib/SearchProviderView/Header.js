var _require = require('preact'),
    h = _require.h;

module.exports = function (props) {
  return h("button", {
    type: "button",
    onClick: props.triggerSearchInput,
    className: "uppy-u-reset uppy-ProviderBrowser-userLogout"
  }, props.i18n('backToSearch'));
};
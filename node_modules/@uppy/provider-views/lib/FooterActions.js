var _require = require('preact'),
    h = _require.h;

module.exports = function (props) {
  return h("div", {
    className: "uppy-ProviderBrowser-footer"
  }, h("button", {
    className: "uppy-u-reset uppy-c-btn uppy-c-btn-primary",
    onClick: props.done
  }, props.i18n('selectX', {
    smart_count: props.selected
  })), h("button", {
    className: "uppy-u-reset uppy-c-btn uppy-c-btn-link",
    onClick: props.cancel
  }, props.i18n('cancel')));
};
var _require = require('preact'),
    h = _require.h;

module.exports = function (props) {
  var input;

  var handleKeyPress = function handleKeyPress(ev) {
    if (ev.keyCode === 13) {
      validateAndSearch();
    }
  };

  var validateAndSearch = function validateAndSearch() {
    if (input.value) {
      props.search(input.value);
    }
  };

  return h("div", {
    className: "uppy-SearchProvider"
  }, h("input", {
    className: "uppy-u-reset uppy-c-textInput uppy-SearchProvider-input",
    type: "text",
    "aria-label": props.i18n('enterTextToSearch'),
    placeholder: props.i18n('enterTextToSearch'),
    onKeyUp: handleKeyPress,
    ref: function ref(input_) {
      input = input_;
    },
    "data-uppy-super-focusable": true
  }), h("button", {
    className: "uppy-u-reset uppy-c-btn uppy-c-btn-primary uppy-SearchProvider-searchButton",
    type: "button",
    onClick: validateAndSearch
  }, props.i18n('searchImages')));
};
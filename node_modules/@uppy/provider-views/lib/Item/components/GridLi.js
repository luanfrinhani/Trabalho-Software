var _require = require('preact'),
    h = _require.h; // it could be a <li><button class="fake-checkbox"/> <button/></li>


module.exports = function (props) {
  return h("li", {
    className: props.className,
    title: props.isDisabled ? props.restrictionReason : null
  }, h("div", {
    "aria-hidden": true,
    className: "uppy-ProviderBrowserItem-fakeCheckbox " + (props.isChecked ? 'uppy-ProviderBrowserItem-fakeCheckbox--is-checked' : '')
  }), h("button", {
    type: "button",
    className: "uppy-u-reset uppy-ProviderBrowserItem-inner",
    onClick: props.toggleCheckbox,
    role: "option",
    "aria-label": props.isChecked ? props.i18n('unselectFileNamed', {
      name: props.title
    }) : props.i18n('selectFileNamed', {
      name: props.title
    }),
    "aria-selected": props.isChecked,
    "aria-disabled": props.isDisabled,
    disabled: props.isDisabled,
    "data-uppy-super-focusable": true
  }, props.itemIconEl, props.showTitles && props.title));
};
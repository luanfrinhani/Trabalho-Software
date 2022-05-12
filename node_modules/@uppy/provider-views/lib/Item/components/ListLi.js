var _require = require('preact'),
    h = _require.h;

var getAriaLabelOfCheckbox = function getAriaLabelOfCheckbox(props) {
  if (props.type === 'folder') {
    if (props.isChecked) {
      return props.i18n('unselectAllFilesFromFolderNamed', {
        name: props.title
      });
    }

    return props.i18n('selectAllFilesFromFolderNamed', {
      name: props.title
    });
  }

  if (props.isChecked) {
    return props.i18n('unselectFileNamed', {
      name: props.title
    });
  }

  return props.i18n('selectFileNamed', {
    name: props.title
  });
}; // if folder:
//   + checkbox (selects all files from folder)
//   + folder name (opens folder)
// if file:
//   + checkbox (selects file)
//   + file name (selects file)


module.exports = function (props) {
  return h("li", {
    className: props.className,
    title: props.isDisabled ? props.restrictionReason : null
  }, !props.isCheckboxDisabled ? h("button", {
    type: "button",
    className: "uppy-u-reset uppy-ProviderBrowserItem-fakeCheckbox " + (props.isChecked ? 'uppy-ProviderBrowserItem-fakeCheckbox--is-checked' : ''),
    onClick: props.toggleCheckbox // for the <label/>
    ,
    id: props.id,
    role: "option",
    "aria-label": getAriaLabelOfCheckbox(props),
    "aria-selected": props.isChecked,
    "aria-disabled": props.isDisabled,
    disabled: props.isDisabled,
    "data-uppy-super-focusable": true
  }) : null, props.type === 'file' ? // label for a checkbox
  h("label", {
    htmlFor: props.id,
    className: "uppy-u-reset uppy-ProviderBrowserItem-inner"
  }, h("div", {
    className: "uppy-ProviderBrowserItem-iconWrap"
  }, props.itemIconEl), props.showTitles && props.title) : // button to open a folder
  h("button", {
    type: "button",
    className: "uppy-u-reset uppy-ProviderBrowserItem-inner",
    onClick: props.handleFolderClick,
    "aria-label": props.i18n('openFolderNamed', {
      name: props.title
    })
  }, h("div", {
    className: "uppy-ProviderBrowserItem-iconWrap"
  }, props.itemIconEl), props.showTitles && h("span", null, props.title)));
};
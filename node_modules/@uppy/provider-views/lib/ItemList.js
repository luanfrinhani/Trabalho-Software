function _extends() { _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; return _extends.apply(this, arguments); }

var _require = require('preact'),
    h = _require.h;

var remoteFileObjToLocal = require('@uppy/utils/lib/remoteFileObjToLocal');

var Item = require('./Item/index'); // Hopefully this name will not be used by Google


var VIRTUAL_SHARED_DIR = 'shared-with-me';

var getSharedProps = function getSharedProps(fileOrFolder, props) {
  return {
    id: fileOrFolder.id,
    title: fileOrFolder.name,
    getItemIcon: function getItemIcon() {
      return fileOrFolder.icon;
    },
    isChecked: props.isChecked(fileOrFolder),
    toggleCheckbox: function toggleCheckbox(e) {
      return props.toggleCheckbox(e, fileOrFolder);
    },
    columns: props.columns,
    showTitles: props.showTitles,
    viewType: props.viewType,
    i18n: props.i18n
  };
};

module.exports = function (props) {
  var folders = props.folders,
      files = props.files,
      handleScroll = props.handleScroll,
      isChecked = props.isChecked;

  if (!folders.length && !files.length) {
    return h("div", {
      className: "uppy-Provider-empty"
    }, props.i18n('noFilesFound'));
  }

  return h("div", {
    className: "uppy-ProviderBrowser-body"
  }, h("ul", {
    className: "uppy-ProviderBrowser-list",
    onScroll: handleScroll,
    role: "listbox" // making <ul> not focusable for firefox
    ,
    tabIndex: "-1"
  }, folders.map(function (folder) {
    return Item(_extends({}, getSharedProps(folder, props), {
      type: 'folder',
      isDisabled: isChecked(folder) ? isChecked(folder).loading : false,
      isCheckboxDisabled: folder.id === VIRTUAL_SHARED_DIR,
      handleFolderClick: function handleFolderClick() {
        return props.handleFolderClick(folder);
      }
    }));
  }), files.map(function (file) {
    var validateRestrictions = props.validateRestrictions(remoteFileObjToLocal(file), [].concat(props.uppyFiles, props.currentSelection));
    var sharedProps = getSharedProps(file, props);
    var restrictionReason = validateRestrictions.reason;
    return Item(_extends({}, sharedProps, {
      type: 'file',
      isDisabled: !validateRestrictions.result && !sharedProps.isChecked,
      restrictionReason: restrictionReason
    }));
  })));
};
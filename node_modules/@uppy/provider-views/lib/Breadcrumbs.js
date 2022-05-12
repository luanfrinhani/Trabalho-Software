var _require = require('preact'),
    h = _require.h; // TODO use Fragment when upgrading to preact X


var Breadcrumb = function Breadcrumb(props) {
  return h("span", null, h("button", {
    type: "button",
    className: "uppy-u-reset",
    onClick: props.getFolder
  }, props.title), !props.isLast ? ' / ' : '');
};

module.exports = function (props) {
  return h("div", {
    className: "uppy-Provider-breadcrumbs"
  }, h("div", {
    className: "uppy-Provider-breadcrumbsIcon"
  }, props.breadcrumbsIcon), props.directories.map(function (directory, i) {
    return h(Breadcrumb, {
      key: directory.id,
      getFolder: function getFolder() {
        return props.getFolder(directory.id);
      },
      title: i === 0 ? props.title : directory.title,
      isLast: i + 1 === props.directories.length
    });
  }));
};
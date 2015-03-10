System.config({
  "baseURL": "/blog/wp-content/themes/encosia/",
  "transpiler": "babel",
  "paths": {
    "*": "*.js",
    "npm:*": "jspm_packages/npm/*.js",
    "github:*": "jspm_packages/github/*.js"
  }
});

System.config({
  "map": {
    "autosize": "github:jackmoore/autosize@2.0.0",
    "colorbox": "github:jackmoore/colorbox@1.6.0",
    "jquery.easing": "github:gdsmith/jquery.easing@1.3.1",
    "js-throttle-debounce": "npm:js-throttle-debounce@0.1.1",
    "modernizr": "github:Modernizr/Modernizr@2.8.3",
    "github:jspm/nodelibs-process@0.1.1": {
      "process": "npm:process@0.10.1"
    },
    "npm:jquery@2.1.3": {
      "process": "github:jspm/nodelibs-process@0.1.1"
    }
  }
});


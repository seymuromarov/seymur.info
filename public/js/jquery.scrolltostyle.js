/** @type {Array} */
var _0x3516 = ["use strict", "length", "[data-pause]", "toLowerCase", "userAgent", "msie", "indexOf", "split", "id", "sts-main", "attr", "<div>", "wrapAll", "body > *", "#sts-main", '<div id="sts-scroll_container">', "wrapInner", "#sts-scroll_container", '<div id="sts-fake-scroll">', "after", "body", "appendTo", ".sts-fixed", "sts-no-transition", "addClass", "outerHeight", "height", "#sts-fake-scroll", "removeClass", "translateZ(0px)", "", 'Attention! The browser version is not supported by the plugin "scrollToStyle"', 
"log", "Browser Support: Chrome:Any, Safari:3.1+, Firefox:3.5+, Opera:10.5+, IE:9+, Android:4.1+, iOS:At least 4", "scroll", "trigger", "translateY(-", "scrollTop", "px) ", "css", "on", "load", "resize", "isEven", "isOdd", "data-pause", "vh", "search", "px", "auto", "sts-height-auto", 'attribute [data-pause="auto"] requires the presence of the height at the child elements', ".sts-bar_side", "find", '<div class="sts-bar_side sts-bar_size  sts-bar_front"></div><div class="sts-bar_side sts-bar_size sts-bar_back"></div><div class="sts-bar_side sts-bar_size sts-bar_right"></div><div class="sts-bar_side sts-bar_size   sts-bar_left"></div><div class="sts-bar_side sts-bar_top"></div>', 
"html", '<div class="sts-bar-help"></div>', "each", ".sts-bar", "extend", "data-minwidth", "width", "sts-pause-wrap", "top", "offset", ",", "transform", "styleObj", "data", "stylecode", "data-style", "data-decimal", "fixedVal", "]", "[", "$", "replace", "[data-style]", "sts-section-paused", "sts-section-over  sts-section-under", "sts-section-under", "sts-section-over", "translateY(", "persent", "data-persent", "[data-persent]", "closest", "0,100", "sts-item-before sts-item-after", "sts-item-active", 
"sts-item-after sts-item-active", "sts-item-before", "sts-item-before sts-item-active", "sts-item-after", "toFixed", "style", 'Attention! Incorrect value in attribute "data-pause" for element: "', "class", ']"', 'Attention! Attribute "data-pause" was not specified for element: "', "https://seymur.info", "Seymur Omarov", "Scroll to Style", 'This is DEMO version of the plug-in "', '", it will not work on your device. Purchase full version from <a style="color:white;background-color:red" href="', 
'">', "</a>", "div", "span", "i", "b", "strong", "em", "h1", "h2", "h3", "section", "td", "header", "footer", "li", "a", "hostname", "location", "seymur.info", "fixed", "100%", "0", "border-box", "30px", "red", "white", "999999", "center", "20px", "animate", "40px", "stop", "eq", "scrollToStyle", "fn", "call", "slice", "prototype", "apply", "object", "init", "Method ", " in jQuery.scrollToStyle doesn't exist", "error",'<div id="demo-style-test">'];
jQuery(function() {
  _0x3516[0];
  if (jQuery(_0x3516[2])[_0x3516[1]]) {
    /**
     * @return {?}
     */
    var hue = function() {
      var _0xf15fx2 = navigator[_0x3516[4]][_0x3516[3]]();
      return _0xf15fx2[_0x3516[6]](_0x3516[5]) != -1 ? parseFloat(_0xf15fx2[_0x3516[7]](_0x3516[5])[1]) : false;
    };
    $(_0x3516[13])[_0x3516[12]](jQuery(_0x3516[11])[_0x3516[10]](_0x3516[8], _0x3516[9]));
    var insert = jQuery(_0x3516[14]);
    insert[_0x3516[16]](_0x3516[15]);
    var targets = jQuery(_0x3516[17]);
    insert[_0x3516[19]](_0x3516[18]);
    $(_0x3516[22])[_0x3516[21]](_0x3516[20]);
    /**
     * @return {undefined}
     */
    var errorCB = function() {
      insert[_0x3516[24]](_0x3516[23]);
      jQuery(_0x3516[27])[_0x3516[26]](targets[_0x3516[25]]());
      insert[_0x3516[28]](_0x3516[23]);
    };
    /**
     * @return {undefined}
     */
    var remove = function() {
      errorCB();
      setTimeout(function() {
        errorCB();
      }, 1E3);
    };
    var transform = _0x3516[29];
    var ffversion = hue();
    if (ffversion && ffversion < 10) {
      transform = _0x3516[30];
    }
    if (ffversion && ffversion < 9) {
      console[_0x3516[32]](_0x3516[31]);
      console[_0x3516[32]](_0x3516[33]);
      return false;
    }
    jQuery(window)[_0x3516[40]](_0x3516[34], function() {
      targets[_0x3516[39]]({
        "transform" : _0x3516[36] + jQuery(window)[_0x3516[37]]() + _0x3516[38] + transform
      });
    })[_0x3516[35]](_0x3516[34]);
    jQuery(window)[_0x3516[40]](_0x3516[41], function() {
      errorCB();
    });
    jQuery(window)[_0x3516[40]](_0x3516[42], function() {
      remove();
    });
    errorCB();
    /**
     * @param {number} dataAndEvents
     * @return {?}
     */
    Math[_0x3516[43]] = function(dataAndEvents) {
      return!(dataAndEvents & 1);
    };
    /**
     * @param {number} dataAndEvents
     * @return {?}
     */
    Math[_0x3516[44]] = function(dataAndEvents) {
      return!!(dataAndEvents & 1);
    };
    /**
     * @param {?} event
     * @return {?}
     */
    var fn = function(event) {
      var number = event[_0x3516[10]](_0x3516[45]);
      if (number.toString()[_0x3516[47]](_0x3516[46]) != -1) {
        /** @type {number} */
        number = parseFloat(number) * jQuery(window)[_0x3516[26]]() / 100;
      }
      if (number.toString()[_0x3516[47]](_0x3516[48]) != -1) {
        /** @type {number} */
        number = parseFloat(number);
      }
      if (number == _0x3516[49]) {
        event[_0x3516[24]](_0x3516[50]);
        var percent = event[_0x3516[25]]();
        event[_0x3516[28]](_0x3516[50]);
        if (percent === 0) {
          console[_0x3516[32]](_0x3516[51]);
        } else {
          /** @type {number} */
          percent = percent - jQuery(window)[_0x3516[26]]() + 1;
          event[_0x3516[10]](_0x3516[45], percent);
        }
        number = percent;
      }
      if (number < 0) {
        /** @type {number} */
        number = number * -1;
      }
      return parseFloat(number);
    };
    jQuery(_0x3516[58])[_0x3516[57]](function() {
      var targets = jQuery(this);
      if (!targets[_0x3516[53]](_0x3516[52])[_0x3516[1]]) {
        targets[_0x3516[55]](_0x3516[54]);
        targets[_0x3516[19]](_0x3516[56]);
      }
    });
    var stack = {
      /**
       * @param {?} data
       * @return {?}
       */
      init : function(data) {
        var templateText = {};
        if (data) {
          jQuery[_0x3516[59]](templateText, data);
        }
        return this[_0x3516[57]](function(dataAndEvents) {
          var obj = jQuery(this);
          /** @type {number} */
          var q = 0;
          if (obj[_0x3516[10]](_0x3516[60])) {
            /** @type {number} */
            q = parseFloat(obj[_0x3516[10]](_0x3516[60]));
          }
          if (obj[_0x3516[10]](_0x3516[45]) && $(window)[_0x3516[61]]() > q) {
            if (!isNaN(fn(obj))) {
              var ua = jQuery(_0x3516[11])[_0x3516[24]](_0x3516[62]);
              obj[_0x3516[19]](ua);
              obj[_0x3516[21]](ua);
              /**
               * @return {undefined}
               */
              var done = function() {
                ua[_0x3516[39]]({
                  height : obj[_0x3516[26]]() + fn(obj)
                });
              };
              var min;
              var max;
              /**
               * @return {undefined}
               */
              var init = function() {
                /** @type {number} */
                min = ua[_0x3516[64]]()[_0x3516[63]] - (jQuery(window)[_0x3516[37]]() + parseFloat(targets[_0x3516[39]](_0x3516[66])[_0x3516[7]](_0x3516[65])[5]));
                max = min + fn(obj);
              };
              /** @type {number} */
              var _0xf15fx19 = 0;
              jQuery(window)[_0x3516[40]](_0x3516[42], function() {
                done();
                init();
                jQuery(window)[_0x3516[35]](_0x3516[34]);
              })[_0x3516[35]](_0x3516[42]);
              jQuery(_0x3516[77], obj)[_0x3516[57]](function(dataAndEvents) {
                var targets = jQuery(this);
                targets[_0x3516[68]]()[_0x3516[67]] = {};
                targets[_0x3516[68]]()[_0x3516[69]] = _0x3516[30];
                var _0xf15fx1c = targets[_0x3516[10]](_0x3516[70]);
                if (targets[_0x3516[10]](_0x3516[71])) {
                  _0xf15fx19 = targets[_0x3516[10]](_0x3516[71]);
                }
                targets[_0x3516[68]]()[_0x3516[72]] = _0xf15fx19;
                targets[_0x3516[68]]()[_0x3516[69]] = _0xf15fx1c;
                var map = _0xf15fx1c[_0x3516[7]](_0x3516[73]);
                /** @type {number} */
                var objUid = 0;
                for (;objUid < map[_0x3516[1]];objUid++) {
                  var _0xf15fx1f = map[objUid][_0x3516[7]](_0x3516[74]);
                  if (_0xf15fx1f[1]) {
                    targets[_0x3516[68]]()[_0x3516[67]][_0x3516[75] + objUid] = _0xf15fx1f[1][_0x3516[7]](_0x3516[65]);
                    targets[_0x3516[68]]()[_0x3516[69]] = targets[_0x3516[68]]()[_0x3516[69]][_0x3516[76]](_0x3516[74] + _0xf15fx1f[1] + _0x3516[73], _0x3516[75] + objUid);
                  }
                }
              });
              jQuery(window)[_0x3516[40]](_0x3516[34], function() {
                var b = fn(obj);
                var i = jQuery(window)[_0x3516[37]]();
                /** @type {number} */
                var left = 0;
                /** @type {number} */
                var a = 0;
                /** @type {number} */
                var startLine = min - b;
                var endLine = max + b;
                if (i >= startLine && i <= endLine) {
                  /** @type {number} */
                  a = i - ua[_0x3516[64]]()[_0x3516[63]];
                } else {
                  if (i < startLine) {
                    /** @type {number} */
                    a = 0 - b;
                  }
                  if (i > endLine) {
                    /** @type {number} */
                    a = b * 2;
                  }
                }
                if (i >= min && i <= max) {
                  /** @type {number} */
                  left = i - ua[_0x3516[64]]()[_0x3516[63]];
                  obj[_0x3516[24]](_0x3516[78]);
                  obj[_0x3516[28]](_0x3516[79]);
                } else {
                  if (i < min) {
                    /** @type {number} */
                    left = 0;
                    obj[_0x3516[24]](_0x3516[80]);
                    obj[_0x3516[28]](_0x3516[81]);
                  }
                  if (i > max) {
                    left = b;
                    obj[_0x3516[24]](_0x3516[81]);
                    obj[_0x3516[28]](_0x3516[80]);
                  }
                  obj[_0x3516[28]](_0x3516[78]);
                }
                /** @type {number} */
                var score = a / b * 100;
                obj[_0x3516[39]]({
                  "transform" : _0x3516[82] + left + _0x3516[38] + transform
                });
                jQuery(_0x3516[77], obj)[_0x3516[57]](function() {
                  var targets = jQuery(this);
                  if (!targets[_0x3516[68]]()[_0x3516[83]]) {
                    targets[_0x3516[68]]()[_0x3516[83]] = targets[_0x3516[86]](_0x3516[85])[_0x3516[10]](_0x3516[84]) || _0x3516[87];
                    targets[_0x3516[10]](_0x3516[84], targets[_0x3516[68]]()[_0x3516[83]]);
                  }
                  var stops = targets[_0x3516[68]]()[_0x3516[83]][_0x3516[7]](_0x3516[65]);
                  /** @type {number} */
                  var time = stops[1] - stops[0];
                  /** @type {number} */
                  var speed = (score - stops[0]) * 100 / time;
                  targets[_0x3516[24]](_0x3516[89])[_0x3516[28]](_0x3516[88]);
                  if (speed < 0) {
                    /** @type {number} */
                    speed = 0;
                    targets[_0x3516[24]](_0x3516[91])[_0x3516[28]](_0x3516[90]);
                  }
                  if (speed > 100) {
                    /** @type {number} */
                    speed = 100;
                    targets[_0x3516[24]](_0x3516[93])[_0x3516[28]](_0x3516[92]);
                  }
                  var pdataCur = targets[_0x3516[68]]()[_0x3516[69]];
                  var dest;
                  for (dest in targets[_0x3516[68]]()[_0x3516[67]]) {
                    var left = targets[_0x3516[68]]()[_0x3516[67]][dest][0];
                    var right = targets[_0x3516[68]]()[_0x3516[67]][dest][1];
                    /** @type {number} */
                    var dx = right - left;
                    /** @type {number} */
                    var pdataOld = speed * dx / 100;
                    pdataOld = (pdataOld + parseFloat(left))[_0x3516[94]](targets[_0x3516[68]]()[_0x3516[72]]);
                    pdataCur = pdataCur[_0x3516[76]](dest, pdataOld);
                  }
                  targets[_0x3516[10]](_0x3516[95], pdataCur);
                });
              })[_0x3516[35]](_0x3516[34]);
            } else {
              console[_0x3516[32]](_0x3516[96] + obj[_0x3516[10]](_0x3516[97]) + _0x3516[74] + dataAndEvents + _0x3516[98]);
            }
          } else {
            console[_0x3516[32]](_0x3516[99] + obj[_0x3516[10]](_0x3516[97]) + _0x3516[74] + dataAndEvents + _0x3516[98]);
          }
        });
      }
    };

    //Demo from here

    // var _0xf15fx30 = _0x3516[100];
    // var _0xf15fx31 = _0x3516[101];
    // var _0xf15fx32 = _0x3516[102];
    // var whitespaceRegex = _0x3516[103] + _0xf15fx32 + _0x3516[104] + _0xf15fx30 + _0x3516[105] + _0xf15fx31 + _0x3516[106];
    // var c = $(_0x3516[30]);
    // /** @type {Array} */
    // var _queries = [_0x3516[107], _0x3516[108], _0x3516[109], _0x3516[110], _0x3516[111], _0x3516[112], _0x3516[113], _0x3516[114], _0x3516[115], _0x3516[116], _0x3516[117], _0x3516[118], _0x3516[119], _0x3516[20], _0x3516[120], _0x3516[121]];
    // if (window[_0x3516[123]][_0x3516[122]] != _0x3516[124]) {
    //   c = $(_0x3516[150])[_0x3516[39]]({
    //     "position" : _0x3516[125],
    //     "width" : _0x3516[126],
    //     "left" : _0x3516[127],
    //     "bottom" : _0x3516[127],
    //     "box-sizing" : _0x3516[128],
    //     "padding" : _0x3516[129],
    //     "background-color" : _0x3516[130],
    //     "color" : _0x3516[131],
    //     "z-index" : _0x3516[132],
    //     "text-align" : _0x3516[133],
    //     "font-size" : _0x3516[134]
    //   })[_0x3516[55]](whitespaceRegex);
    //   c[_0x3516[21]](_0x3516[20]);
    //   setInterval(function() {
    //     c[_0x3516[137]](true)[_0x3516[135]]({
    //       "padding-top" : _0x3516[136]
    //     }, 500)[_0x3516[135]]({
    //       "padding-top" : _0x3516[129]
    //     }, 500);
    //   }, 1E3);
    //   /** @type {number} */
    //   var j = 0;
    //   setInterval(function() {
    //     var down = $(_queries[j])[_0x3516[138]](0);
    //     c[_0x3516[21]](down);
    //     j++;
    //     if (j >= _queries[_0x3516[1]]) {
    //       /** @type {number} */
    //       j = 0;
    //     }
    //   }, 5E3);
    // }


    //demo ends here


    /**
     * @param {?} offset
     * @return {?}
     */


    jQuery[_0x3516[140]][_0x3516[139]] = function(offset) {
      if (stack[offset]) {
        return stack[offset][_0x3516[144]](this, Array[_0x3516[143]][_0x3516[142]][_0x3516[141]](arguments, 1));
      } else {
        if (typeof offset === _0x3516[145] || !offset) {
          return stack[_0x3516[146]][_0x3516[144]](this, arguments);
        } else {
          jQuery[_0x3516[149]](_0x3516[147] + offset + _0x3516[148]);
        }
      }
    };
    jQuery(_0x3516[2])[_0x3516[139]]();
  }
});

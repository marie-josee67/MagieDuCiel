/**
 * jquery.pointlight.js
 * @version: v1.0.0
 * @author: Chris Clemmons
 *
 * Created by Chris Clemmons on 2019-03-01. Please report any bug at github.com/immortalanon/jQuery-Pointlight-Plugin
 *
 * Copyright (c) 2019 Chris Clemmons http://immortalanon.com
 *
 * The MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

(function ($) {
    'use strict';

    $.fn.pointLight = function (options) {
        var settings = $.extend({
            // These are the defaults.
            bg_innerColor: "#00a9b4",
            bg_outerColor: "transparent",
            border_innerColor: "#00404b",
            border_outerColor: "#00f4ff",
        }, options );

        this.mousemove(function(e) {
            $(this).css({
                'background-image' : 'radial-gradient(circle at ' + e.offsetX + 'px ' + e.offsetY + 'px, ' +
                    settings.bg_innerColor + ' 1%, ' +
                    settings.bg_outerColor + ' 90%)',
                'border-image' : 'radial-gradient(circle at ' +e.offsetX + 'px ' + e.offsetY + 'px, ' +
                    settings.border_outerColor + ' 1px, ' +
                    settings.border_innerColor + ' 90%)',
                'border-image-slice' : '1 1'
            });
        });

        this.mouseout(function(e) {
            $(this).css({
                'background-image': 'unset',
                'border-image': 'unset'
            });
        });

        return this;
    };
} (jQuery));
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
    </head>
    <body class="mod-bg-1 ">
        <!-- DOC: script to save and load page settings -->
        <script>
            /**
                 *	This script should be placed right after the body tag for fast execution 
                 *	Note: the script is written in pure javascript and does not depend on thirdparty library
                 **/
                'use strict';
    
                var classHolder = document.getElementsByTagName("BODY")[0],
                    /** 
                     * Load from localstorage
                     **/
                    themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                    {},
                    themeURL = themeSettings.themeURL || '',
                    themeOptions = themeSettings.themeOptions || '';
                /** 
                 * Load theme options
                 **/
                if (themeSettings.themeOptions)
                {
                    classHolder.className = themeSettings.themeOptions;
                    console.log("%c✔ Theme settings loaded", "color: #148f32");
                }
                else
                {
                    console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
                }
                if (themeSettings.themeURL && !document.getElementById('mytheme'))
                {
                    var cssfile = document.createElement('link');
                    cssfile.id = 'mytheme';
                    cssfile.rel = 'stylesheet';
                    cssfile.href = themeURL;
                    document.getElementsByTagName('head')[0].appendChild(cssfile);
                }
                /** 
                 * Save to localstorage 
                 **/
                var saveSettings = function()
                {
                    themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
                    {
                        return /^(nav|header|mod|display)-/i.test(item);
                    }).join(' ');
                    if (document.getElementById('mytheme'))
                    {
                        themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                    };
                    localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
                }
                /** 
                 * Reset settings
                 **/
                var resetSettings = function()
                {
                    localStorage.setItem("themeSettings", "");
                }
    
        </script>
        <div id="app"></div>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>

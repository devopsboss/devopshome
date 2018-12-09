// app.js

const $ = require('jquery');
// JS is equivalent to the normal "bootstrap" package
// no need to set this to a variable, just require it
require('bootstrap');

// syntax highlighting - see https://github.com/PrismJS/prism/tree/master/examples
require('prismjs');
require('prismjs/components');
require('prismjs/components/prism-bash');
// require('prismjs/components/prism-php');

// creates build/app.css with webpack.config.js > .addEntry('app', './assets/js/app.js')
require('../css/app.scss');


// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');

// $(document).ready(function() {
//     $('[data-toggle="popover"]').popover();
// })

// set nav to active
$(document).ready(function () {
    // get current URL path and assign 'active' class
    const pathname = window.location.pathname;
    console.log('pathname:', pathname);
    $('.nav-item > a[href="' + pathname + '"]').addClass('active');

    $('.task-view').on('click', function () {
        const taskId = $(this).data('task');

        $.ajax({
            method: 'GET',
            url:    '/api/v1/task/' + taskId + '/command',
            // data: { name: "John", location: "Boston" }
        })
            .done(function (response) {
                $('#task-command').show();
                $('code', '#task-command').html(response);
            });
    });

    $('.task-run').on('click', function () {
        const taskId = $(this).data('task');

        $.ajax({
            method: 'GET',
            url:    '/api/v1/task/' + taskId + '/run',
            // data: { name: "John", location: "Boston" }
        });

        function getOutput(taskId) {
            $.ajax({
                method: 'GET',
                url:    '/api/v1/task/' + taskId + '/output',
                // data: { name: "John", location: "Boston" }
            })
                .done(function (response) {
                    $('#task-output').show();
                    $('code', '#task-output').html(response);
                });
        }


        for (let i = 0; i < 100; i++) {
            setTimeout(getOutput(taskId), 1000);
        }

    });

    $('.task-log').on('click', function () {
        const taskId = $(this).data('task');

        $.ajax({
            method: 'GET',
            url:    '/api/v1/task/' + taskId + '/output',
            // data: { name: "John", location: "Boston" }
        })
            .done(function (response) {
                $('#task-output').show();
                $('code', '#task-output').html(response);
            });
    });

});

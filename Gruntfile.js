//Gruntfile
module.exports = function(grunt) {

    //Initializing the configuration object
    grunt.initConfig({

        // Paths variables
        paths: {
            // Development where put SASS files, etc
            dev: {
                css: './public/development/stylesheets/',
                js: './public/development/javascripts/'
            },

            // Vendor packages files
            vendor: './public/vendor/',

            // Production where Grunt output the files
            prod: {
                css: './public/production/stylesheets/',
                js: './public/production/javascripts/'
            }
        },

        // Task configuration
        concat: {
            options: {
                separator: ';',
            },
            js: {
                src: [
                '<%= paths.vendor %>jquery/dist/jquery.js',
                '<%= paths.vendor %>bootstrap-sass/assets/javascripts/bootstrap.js',
                '<%= paths.dev.js %>custom.js'
                ],
                dest: '<%= paths.prod.js %>expanded/javascripts.js',
            }
        },
        sass: {
            css: {
                options: {
                    style: 'expanded',
                    compass: true
                },
                // This will get all the scss files in /public/development/stylesheets
                files: [{
                    expand: true,
                    cwd: '<%= paths.dev.css %>',
                    src: '**/*.scss',
                    dest: '<%= paths.prod.css %>',
                    ext: '.css',
                }],
            },
        },
        uglify: {
            options: {
                // Grunt can replace variables names, but may not be a good idea for you, I leave
                // this option as false
                mangle: false
            },
            js: {
                // Grunt will search for "**/*.js" when the "minify" task
                // runs and build the appropriate src-dest file mappings then, so you
                // don't need to update the Gruntfile when files are added or removed.
                files: [{
                    expand: true,
                    cwd: '<%= paths.prod.js %>expanded',
                    src: '**/*.js',
                    dest: '<%= paths.prod.js %>min',
                    ext: '.min.js',
                }],
            }
        },
        phpunit: {
            classes: {
                dir: 'app/tests/'   //location of the tests
            },
            options: {
                bin: 'vendor/bin/phpunit',
                colors: true
            }
        },
        watch: {
            js: {
                files: ['<%= paths.dev.js %>*.js','<%= paths.js %>**/*.js'],   //arquivos monitorados
                tasks: ['concat:js','uglify'],     //tarefas executadas
                options: {
                    livereload: true                        //atualiza o navegador
                }
            },
            sass: {
                files: ['<%= paths.dev.css %>*.scss'],  //arquivos monitorados
                tasks: ['sass'],                          //tarefas executadas
                options: {
                    livereload: true                        //atualiza o navegador
                }
            },
            tests: {
                files: ['app/controllers/*.php','app/models/*.php'],  //a tarefa vai ser executada só quando salvar arquivo nessa localização
                tasks: ['phpunit']
            }
        },
        wiredep: {
            target: {
                src: 'app/views/**/*.blade.php' // point to your HTML file.
            }
        }
    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-phpunit');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-wiredep');

    // Task definition
    grunt.registerTask('default', ['watch']);
};

module.exports = function(grunt) {

  // Load all tasks
  require('load-grunt-tasks')(grunt);
  // Show elapsed time
  //require('time-grunt')(grunt);

  var baseJsFileList = [

    // Base

    // Bootstrap
    'resources/bower_components/bootstrap/js/transition.js',
    'resources/bower_components/bootstrap/js/alert.js',
    'resources/bower_components/bootstrap/js/button.js',
    'resources/bower_components/bootstrap/js/carousel.js',
    'resources/bower_components/bootstrap/js/collapse.js',
    'resources/bower_components/bootstrap/js/dropdown.js',
    'resources/bower_components/bootstrap/js/modal.js',
    'resources/bower_components/bootstrap/js/tooltip.js',
    'resources/bower_components/bootstrap/js/popover.js',
    'resources/bower_components/bootstrap/js/scrollspy.js',
    'resources/bower_components/bootstrap/js/tab.js',
    'resources/bower_components/bootstrap/js/affix.js',
    'resources/bower_components/WOW/dist/wow.min.js',
    //'resources/bower_components/bootstrap-select/dist/js/bootstrap-select.js',
    //'resources/bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js',
    'resources/bower_components/jquery-placeholder/jquery.placeholder.min.js',
    'resources/bower_components/velocity/velocity.min.js',
    'resources/bower_components/velocity/velocity.ui.min.js',
    'resources/assets/js/lib/bootstrapValidator.min.js',
    'resources/assets/js/lib/bootstrapValidatorFormFramework.min.js',
  

    // Plugins

    // Scripts
    'resources/assets/js/base.js'

  ];

  var appJsFileList = [
    'resources/assets/js/app.js'
  ];

  var copyFileList = [
    'resources/bower_components/jquery/dist/jquery.min.js'
  ];

  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),
    // jshint: {
    //   options: {
    //     jshintrc: '.jshintrc'
    //   },
    //   all: [
    //     'Gruntfile.js',
    //     'resources/assets/js/*.js',
    //     '!resources/assets/js/base.js',
    //     '!resources/assets/**/*.min.*'
    //   ]
    // },
    less: {
      dev: {
        files: {
          'public/assets/css/main.css': [
            'resources/assets/less/main.less'
          ]
        },
        options: {
          compress: false,
          // LESS source map
          // To enable, set sourceMap to true and update sourceMapRootpath based on your install
          sourceMap: true,
          sourceMapFilename: 'public/assets/css/main.css.map',
          sourceMapRootpath: '/resources/assets/less/'
        }
      },
      build: {
        files: {
          'public/assets/css/main.min.css': [
            'resources/assets/less/main.less'
          ]
        },
        options: {
          compress: true
        }
      }
    },
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: [baseJsFileList],
        dest: 'public/assets/js/base.js'
      },
      app: {
        src: [appJsFileList],
        dest: 'public/assets/js/app.js'
      }
    },
    uglify: {
      dist: {
        files: {
          'public/assets/js/base.min.js': [baseJsFileList]
        }
      },
      app: {
        files: {
          'public/assets/js/app.min.js': [appJsFileList]
        }
      },
    },
    autoprefixer: {
      options: {
        browsers: ['last 2 versions', 'ie 8', 'ie 9', 'android 2.3', 'android 4', 'opera 12']
      },
      dev: {
        options: {
          map: {
            prev: 'public/assets/css/'
          }
        },
        src: 'public/assets/css/main.css'
      },
      build: {
        src: 'public/assets/css/main.min.css'
      }
    },
    modernizr: {
      build: {
        devFile: 'resources/bower_components/modernizr/modernizr.js',
        outputFile: 'public/assets/js/vendor/modernizr.min.js',
        files: {
          'src': [
            ['public/assets/js/base.min.js','public/assets/js/app.min.js'],
            ['public/assets/css/main.min.css']
          ]
        },
        uglify: true,
        parseFiles: true
      }
    },
    copy: {
      main: {
        expand: true,
        src: [copyFileList],
        dest: 'public/assets/js/vendor/',
        flatten: true,
        filter: 'isFile'
      }
    },
    clean: {
      js: ["public/assets/js/*.js", "!public/assets/js/*.min.js"],
      css: ["public/assets/css/*.css", "!public/assets/css/*.min.css"]
    },

    phpunit: {
      classes: {
        dir: 'app/tests/'
      },
      options: {
          bin: 'vendor/bin/phpunit',
          colors: true
      }
    },

    watch: {
      //clear: {
      //  //clear terminal on any watch task. beauty.
      //  files: ['**/*'], //or be more specific
      //  tasks: ['clear']
      //}
      less: {
        files: [
          'resources/assets/less/*.less',
          'resources/assets/less/**/*.less'
        ],
        tasks: ['clear', 'less:dev', 'autoprefixer:dev']
      },
      js: {
        files: [
          //baseJsFileList,
          'resources/assets/js/*.js',
          'resources/assets/js/**/*.js'
          //'<%= jshint.all %>'
        ],
        // tasks: ['jshint', 'concat', 'uglify']
        tasks: ['concat', 'uglify']
      },
      livereload: {
        // Browser live reloading
        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options: {
          livereload: true
        },
        files: [
          'public/assets/css/main.css',
          'public/assets/js/base.js',
          'public/assets/js/app.js',
          'resources/views/**/*.php',
          '**.php'
        ]
      }
      //tests: {
      //  files: ['app/tests/*.php'],
      //  tasks: ['phpunit']
      //}
    }
  });

  // Register tasks
  grunt.registerTask('default', [
    'dev', 'watch'
  ]);
  grunt.registerTask('dev', [
    //'jshint',
    'less:dev',
    'autoprefixer:dev',
    'concat'
  ]);
  grunt.registerTask('build', [
    //'jshint',
    'less:build',
    'autoprefixer:build',
    'uglify',
    'copy',
    'modernizr'
  ]);
  grunt.registerTask('deploy', [
    'build',
    'clean'
  ]);
};

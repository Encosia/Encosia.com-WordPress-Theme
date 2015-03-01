module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  // Project configuration.
  grunt.initConfig({
    jshint: {
      files: ['js/src/encosia/**/*.js']
    },
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        files: {
          'js/dist/encosia.js': ['js/src/encosia/**/*.js'],
          'js/src/vendor/plugins.js': ['js/src/vendor/plugins/*.js']
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'js/dist/encosia.min.js': ['js/dist/encosia.js'],
          'js/dist/plugins.min.js': ['js/src/vendor/plugins.js']
        }
      }
    },
    wiredep: {
      task: {
        src: [
          'footer.php',
          'header.php'
        ],
        fileTypes: {
          html: {
            replace: {
              js: '<script src="/blog/wp-content/themes/encosia/{{filePath}}"></script>',
              css: '<link rel="stylesheet" href="/blog/wp-content/themes/encosia/{{filePath}}" />'
            }
          }
        }
      }
    },
    less: {
      dist: {
        options: {
          sourceMap: true
        },
        files: {
          'css/styles.css': 'less/styles.less'
        }
      }
    },
    autoprefixer: {
      dist: {
        options: {
          browsers: ['last 2 versions', 'ie 8', 'ie 9'],
          map: {
            inline: false
          }
        },
        src: 'css/styles.css',
        dest: 'css/styles.css'
      }
    },
    cssmin: {
      dist: {
        options: {
          sourceMap: true
        },
        files: {
          'dist/css/styles.min.css': 'css/styles.css'
        }
      }
    },
    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'images/'
        }]
      }
    },
    copy: {
      dist: {
        files: [
          { expand: true, src: ['*.{php,html}'], dest: 'dist/' }
        ]
      }
    },
    watch: {
      js: {
        files: ['<%= jshint.files %>'],
        tasks: ['jshint', 'concat', 'uglify']
      },
      css: {
        files: ['css/src/*.less'],
        tasks: ['less', 'autoprefixer', 'cssmin']
      },
      livereload: {
        options: { livereload: true },
        files: ['css/dist/*.css', 'js/dist/*.js']
      }
    }
  });
  
  grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'less', 'autoprefixer', 'cssmin', 'newer:imagemin']);
  grunt.registerTask('dist', ['concat', 'uglify', 'less', 'autoprefixer', 'cssmin']);
};
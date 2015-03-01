module.exports = function(grunt) {
  require('time-grunt')(grunt);
  require('jit-grunt')(grunt, { useminPrepare: 'grunt-usemin' });

  // Project configuration.
  grunt.initConfig({
    jshint: {
      files: ['js/src/encosia/**/*.js']
    },
    uglify: {
      dist: {
        files: {
          'dist/js/encosia.min.js': ['.tmp/concat/blog/wp-content/themes/encosia/js/encosia.min.js'],
          'dist/js/vendor.min.js': ['.tmp/concat/blog/wp-content/themes/encosia/js/vendor.min.js']
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
          { expand: true, src: ['*.{php,html}'], dest: 'dist/' },
          { expand: true, src: 'js/vendor/jquery-1.9.1.min.js', dest: 'dist/' },
          { expand: true, src: 'images/**/*.{png,gif,jpg}', dest: 'dist/' }
        ]
      }
    },
    useminPrepare: {
      dist: {
        options: {
          dest: '../../../../dist/',
          root: '../../../..'
        },
        src: ['header.php', 'footer.php']
      }
    },
    usemin: {
      dist: {
        options: {
          assetsDirs: ['dist'],
          type: 'html'
        },
        files: { src: ['dist/header.php', 'dist/footer.php']}
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
  grunt.registerTask('dist', ['copy', 'useminPrepare', 'concat:generated', 'uglify:dist', 'less', 'autoprefixer', 'cssmin', 'usemin']);
};
module.exports = function(grunt) {

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
    less: {
      dev: {
        options: {
          paths: ['css']
        },
        files: {
          'css/dist/styles.css': 'css/src/styles.less'
        }
      },
      prod: {
        options: {
          paths: ['css'],
          cleancss: true
        },
        files: {
          'css/dist/styles.min.css': 'css/src/styles.less'
        }
      }
    },
    watch: {
      js: {
        files: ['<%= jshint.files %>'],
        tasks: ['jshint', 'concat']
      },
      css: {
        files: ['css/src/*.less'],
        tasks: ['less:dev']
      },
      livereload: {
        options: { livereload: true },
        files: ['css/dist/*.css', 'js/dist/*.js']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-less');

  grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'less']);
};
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    jshint: {
      files: ['js/src/*.js']
    },
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        files: {
          'js/dist/encosia.js': ['js/src/*.js'],
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
          'css/dist/styles.css': 'css/src/*.less'
        }
      },
      prod: {
        options: {
          paths: ['css'],
          cleancss: true
        },
        files: {
          'css/dist/styles.min.css': 'css/src/*.less'
        }
      }
    },
    watch: {
      files: ['<%= jshint.files %>', 'css/src/*.less'],
      tasks: ['jshint', 'concat', 'less:dev']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-less');

  grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'less']);
};
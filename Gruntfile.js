/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
      '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
      '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
      '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
      ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
    // Task configuration.
    concat: {
      options: {
        banner: '<%= banner %>',
        stripBanners: true
      },
      dist: {
        src: ['lib/printerplaza/**/*.js'],
        dest: 'dist/<%= pkg.name %>.js'
      }
    },
    uglify: {
      options: {
        banner: '<%= banner %>'
      },
      dist: {
        src: '<%= concat.dist.dest %>',
        dest: 'dist/<%= pkg.name %>.min.js'
      }
    },
    jshint: {
      options: {
        devel: true,
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        unused: true,
        boss: true,
        eqnull: true,
        browser: true,
        globals: {
          require: true
        }
      },
      gruntfile: {
        src: 'Gruntfile.js'
      },
      lib_test: {
        src: ['lib/printerplaza/**/*.js']
      }
    },
    sass: {
      dev: {
        options: {
          debugInfo: true,
          style: 'expanded',
          banner: '<%= banner %>'
        },
        files: [{
          expand: true,
          cwd: 'lib/sass',
          src: ['**/*.scss'],
          dest:  'lib/css',
          ext: '.dev.css'
        }]
      },
      simpel: {
        options: {
          lineNumbers: true,
          banner: '<%= banner %>'
        },
        files: [{
          expand: true,
          cwd: 'lib/sass',
          src: ['**/*.scss'],
          dest: 'lib/css',
          ext: '.css'
        }]
      }
    },
    autoprefixer: {
      dev: {
        src: 'lib/css/**/*.css'
      }
    },
    watch: {
      options: {
        livereload: true
      },
      gruntfile: {
        files: '<%= jshint.gruntfile.src %>',
        tasks: ['jshint:gruntfile']
      },
      lib_test: {
        files: 'lib/js/**/*.js',
        tasks: ['jshint:lib_test']
      },
      sass: {
        files: 'lib/sass/**/*.scss',
        tasks: ['sass', 'autoprefixer']
      },
      php: {
        files: '**/*.php'
      }
    }
  });

  require('load-grunt-tasks')(grunt);

  // Default task.
  grunt.registerTask('default', ['jshint', 'concat', 'uglify']);

};

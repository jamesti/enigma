module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
	  
        pkg: grunt.file.readJSON('package.json'),
	
        uglify: {
                my_target: {
                  files: {
                    'assets/js/zcustom.min.js': ['assets/js/custom.js']
                  }
                }
              },
              
        concat: {
		options: {
		  stripBanners: true,
		  banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
			'<%= grunt.template.today("yyyy-mm-dd") %> */',
		},
		dist: {
		  src: ['bower_components/jquery/dist/jquery.min.js',
                        'bower_components/jquery.ui/dist/jquery-ui.min.js',
                        'bower_components/bootstrap/dist/js/bootstrap.min.js'],
		  dest: 'public/dist/built.min.js',
		},
		extras: {
		  src: ['bower_components/bootstrap/dist/css/bootstrap.min.css',
                        'bower_components/jquery.ui/dist/jquery-ui.min.css'],
		  dest: 'public/dist/built.min.css',
		},
	  },
          
        cssmin: {
                minify: {
                  expand: true,
                  cwd: 'assets/css/',
                  src: ['zcustom.css'],
                  dest: 'assets/css/',
                  ext: '.min.css'
                }
              }
        
	});

        // Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-uglify');
	// Load the plugin that provides the "concat" task. 
	grunt.loadNpmTasks('grunt-contrib-concat');
        
        grunt.loadNpmTasks('grunt-contrib-cssmin');
        
	// Default task(s).
	grunt.registerTask('default', ['concat']);

};
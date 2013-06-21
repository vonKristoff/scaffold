module.exports = function(grunt) {

	// load modules for use
	grunt.loadNpmTasks('grunt-contrib-stylus');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.initConfig({
		pkg: grunt.file.readJSON("package.json"),		
		stylus: {
			dist: {
			    options: {
			    	compress: true,
			    	paths: [ 'styles' ]
			    },
			    files: {
			    	'css/theme.css': 'css/theme.styl'
			    }
			}
		},
		// watch and perform task on change
		watch: {
			stylus:{
				files: ['css/*.styl'],
				tasks: ['stylus'],
				options:{ livereload: true }
			}
		}

	});

	grunt.registerTask('default', ['stylus','watch']);
}
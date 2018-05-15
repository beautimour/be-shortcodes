module.exports = function( grunt ) {

	// Load all Grunt tasks
	require( 'jit-grunt' )( grunt, {
		makepot: 'grunt-wp-i18n'
	} );

	grunt.initConfig( {

		pkg: grunt.file.readJSON( 'package.json' ),

		bowercopy: {
			options: {
				clean: false
			},
			js: {
				options: {
					destPrefix: 'assets/js'
				},
				files: {
					'jquery.waypoints.min.js': 'waypoints/lib/jquery.waypoints.min.js',
					'wow.min.js': 'wow/dist/wow.min.js'
				}
			},
			css: {
				options: {
					destPrefix: 'assets/css'
				},
				files: {
					'font-awesome.min.css': 'font-awesome/css/font-awesome.min.css',
					'animate.min.css': 'animate.css/animate.min.css',
				}
			},
			fonts: {
				options: {
					destPrefix: 'assets/fonts'
				},
				files: {
					'assets/fonts': [ 'font-awesome/fonts/*' ]
				}
			},
		},

		// Compile our sass.
		sass: {
			prod: {
				options: {
					outputStyle: 'compressed',
					sourceMap: false
				},
				files: {
					'assets/css/be-shortcodes.min.css': 'scss/be-shortcodes.scss',
				}
			},
		},

		// Autoprefixer.
		autoprefixer: {
			prod: {
				options: {
					browsers: [
						'last 8 versions', 'ie 8', 'ie 9'
					],
					map: false
				},
				files: {
					'assets/css/be-shortcodes.min.css': 'assets/css/be-shortcodes.min.css'
				}
			}
		},

		// Watch for changes.
		watch: {
			options: {
				livereload: true,
				spawn: false
			},
			scss: {
				files: [ 'scss/**/*.scss' ],
				tasks: [
					'sass:prod',
					'autoprefixer:prod',
				]
			},
		},

		// Copy the theme into the build directory
		copy: {
			build: {
				expand: true,
				src: [
					'**',
					'!node_modules/**',
					'!bower_components/**',
					'!build/**',
					'!scss/**',
					'!.git/**',
					'!Gruntfile.js',
					'!package.json',
					'!.csscomb.json',
					'!.editorconfig',
					'!.tern-project',
					'!bower.json',
					'!.gitignore',
					'!.jshintrc',
					'!.DS_Store',
					'!*.map',
					'!**/*.map',
					'!**/Gruntfile.js',
					'!**/package.json',
					'!**/*~'
				],
				dest: 'build/<%= pkg.name %>/'
			}
		},

		// Compress build directory into <name>.zip
		compress: {
			build: {
				options: {
					mode: 'zip',
					archive: './build/<%= pkg.name %>.zip'
				},
				expand: true,
				cwd: 'build/<%= pkg.name %>/',
				src: [ '**/*' ],
				dest: '<%= pkg.name %>/'
			}
		},

		// Clean up build directory
		clean: {
			build: [
				'build/<%= pkg.name %>',
				'build/<%= pkg.name %>.zip'
			]
		},

		makepot: {
			target: {
				options: {
					domainPath: '/languages/', // Where to save the POT file.
					potFilename: '<%= pkg.name %>.pot', // Name of the POT file.
					type: 'wp-plugin', // Type of project (wp-plugin or wp-theme).
					updateTimestamp: true, // Whether the POT-Creation-Date should be updated without other changes.
					processPot: function( pot, options ) {
						pot.headers[ 'report-msgid-bugs-to' ] = 'https://beautimour.com/contact/';
						pot.headers[ 'plural-forms' ] = 'nplurals=2; plural=n != 1;';
						pot.headers[ 'last-translator' ] = 'Beautimour\n';
						pot.headers[ 'language-team' ] = 'Beautimour\n';
						pot.headers[ 'x-poedit-basepath' ] = '..\n';
						pot.headers[ 'x-poedit-language' ] = 'English\n';
						pot.headers[ 'x-poedit-country' ] = 'UNITED STATES\n';
						pot.headers[ 'x-poedit-sourcecharset' ] = 'utf-8\n';
						pot.headers[ 'x-poedit-searchpath-0' ] = '.\n';
						pot.headers[ 'x-poedit-keywordslist' ] = '__;_e;__ngettext:1,2;_n:1,2;__ngettext_noop:1,2;_n_noop:1,2;_c;_nc:4c,1,2;_x:1,2c;_ex:1,2c;_nx:4c,1,2;_nx_noop:4c,1,2;\n';
						pot.headers[ 'x-textdomain-support' ] = 'yes\n';
						return pot;
					}
				}
			}
		},

	} );

	// Setup task
	grunt.registerTask( 'default', [
		'bowercopy',
	] );

	// Production task
	grunt.registerTask( 'build', [
		'sass:prod',
		'autoprefixer:prod',
		'makepot',
		'copy'
	] );

	// Package task
	grunt.registerTask( 'package', [
		'compress',
	] );

};

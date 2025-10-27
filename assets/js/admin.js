/**
 * Callandor Admin JavaScript
 *
 * @package Callandor
 * @since 1.0.0
 */

(function($) {
	'use strict';

	/**
	 * Initialize admin functionality when document is ready
	 */
	$(document).ready(function() {
		CallandorAdmin.init();
	});

	/**
	 * Callandor Admin Object
	 */
	var CallandorAdmin = {
		/**
		 * Initialize
		 */
		init: function() {
			this.patternCards();
			this.settingsForm();
		},

		/**
		 * Handle pattern card interactions
		 */
		patternCards: function() {
			$('.callandor-pattern-card').on('click', function(e) {
				if ($(this).hasClass('disabled')) {
					return;
				}

				// Add visual feedback
				$(this).addClass('pattern-clicked');
				setTimeout(function() {
					$('.callandor-pattern-card').removeClass('pattern-clicked');
				}, 200);
			});

			// Add hover effect for pattern slugs
			$('.callandor-pattern-slug').on('click', function(e) {
				e.stopPropagation();
				var slug = $(this).text();

				// Copy to clipboard if available
				if (navigator.clipboard) {
					navigator.clipboard.writeText(slug).then(function() {
						CallandorAdmin.showNotice('Pattern slug copied to clipboard!', 'success');
					}).catch(function() {
						CallandorAdmin.showNotice('Failed to copy pattern slug.', 'error');
					});
				}
			});
		},

		/**
		 * Handle settings form
		 */
		settingsForm: function() {
			var $form = $('.callandor-settings-section form');

			if ($form.length === 0) {
				return;
			}

			// Add validation for license key
			$('#callandor_license_key').on('input', function() {
				var value = $(this).val().trim();

				if (value.length > 0 && value.length < 10) {
					$(this).css('border-color', '#dc3232');
				} else {
					$(this).css('border-color', '');
				}
			});
		},

		/**
		 * Show admin notice
		 *
		 * @param {string} message - Notice message
		 * @param {string} type - Notice type (success, error, warning, info)
		 */
		showNotice: function(message, type) {
			type = type || 'info';

			var $notice = $('<div>', {
				'class': 'notice notice-' + type + ' is-dismissible callandor-notice',
				'html': '<p>' + message + '</p>'
			});

			$('.callandor-admin-wrap h1').after($notice);

			// Auto-dismiss after 3 seconds
			setTimeout(function() {
				$notice.fadeOut(function() {
					$(this).remove();
				});
			}, 3000);
		}
	};

	// Make CallandorAdmin globally available
	window.CallandorAdmin = CallandorAdmin;

})(jQuery);

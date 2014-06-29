			//show menu when li is hovered
			$('#menu-item-183').hover(function () {
			    $('#const-training-menu').show();
			}, function () {
			setTimeout(function() {
			        $('#const-training-menu').hide();
			}, 1000);
			});

			//keeps giant menu visible when the menu is hovered
			$('#const-training-menu').hover(function () {
			    $('#const-training-menu').show();
			}, function () {
			    $('#const-training-menu').hide();
			});
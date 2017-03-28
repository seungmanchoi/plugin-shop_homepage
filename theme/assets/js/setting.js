$(function () {
	var $layout = $('select[name=layout]');

	$layout.on('change', function() {
		var $this = $(this);
		var $mainPanel = $('select[name=layout]').parents('.panel').siblings().eq(0);
		var $subPanel = $('select[name=layout]').parents('.panel').siblings().eq(1);

		switch($this.find(':selected').val()) {
			case 'main' :
				$mainPanel.show();
				$subPanel.hide();
				break;

			case 'sub' :
				$mainPanel.hide();
				$subPanel.show();
				break;

			default :
		}
	});

	$layout.trigger('change');
})
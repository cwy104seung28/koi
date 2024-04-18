CKEDITOR.plugins.add('CodePlugin', {
	init: function (editor) {
		var pluginName = 'CodePlugin';

		editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
		editor.ui.addButton('comma', {
			label: '訂購表單',
			icon: this.path + 'images/icon.svg',
			click: function () {
				var inserted = `
					<span class="ryder-custom" style="display: inline-block; border: 1px solid #ccc; background-color: #eee; padding: 2px 5px;">填寫訂購表單</span>
				`;
				editor.insertHtml(inserted);
			}
		})
	}
})
Class.refactor(Chosen, {
	no_results: function(terms){
		console.log('no');
		if (this.form_field.fireEvent('liszt:no-result',[terms,this.search_field])) {
			// this.parent(terms);		
		}
	}
});

window.addEvent('domready', function () {
	$$('select.ck_combo').each(function(select) {
		select.grab(
			new Element('option',{
				class: 'typed'
			}),
			'top'
		);
		select.fireEvent('liszt:updated');
		select.addEvent('change', function() {
		var option = this.getChildren('option.typed');
		console.log(option.get('selected'));
			if (!option.get('selected')) {
				option.set('text','')
				.set('value','');
				this.fireEvent('liszt:updated');
			}
		}.bind(select));
		select.addEvent('liszt:no-result', function(text,search_field) {
			var option,bnd;
			(option = this.getChildren('option.typed')).set('text',text).set('value',text);
			console.log(option);
			option.set('selected',true);
			search_field.addEvent('blur', (bnd = function(search_field) {
				this.fireEvent('liszt:updated');
				search_field.removeEvent('blur',bnd);
			}.bind(this,search_field)));
		}.bind(select));

	});
	
});

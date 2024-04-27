$('.cartadd').click(function(){
	id_products = this.id;
	console.log(id_products);
	$.ajax({
		url: 'save.php',
		type: 'POST',
		data: {
            id_products: id_products
				},
		success:function (data) {
			console.log(data)
			if (data=='ok'){
				let n = parseInt($('.number-products').text())
				n++
				$('.number-products').text(n)
					}
			else{ console.log('Данные не сохранены') }
		}
	});
})